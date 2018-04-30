
<?php

define('IN_PHPBB', true);
$phpbb_root_path = '../bbs/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
$title='Administration';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>

  <!-- main content -->
<td valign="top">

  <!-- main content -->

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Administration" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Administration"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<table width="504" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="45%" align="left"><span class="gen"><?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1")
{
	if(!empty($_GET['pseudo']))
	{

	$pseudo = mysql_real_escape_string(htmlspecialchars($_GET['pseudo']));
	$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo'");
	$donnees = mysql_fetch_array($nbre);
		if($donnees['exist'] != 0)
		{
			$quete = mysql_query("SELECT username, ipconnexion, lastip, user_id, avatar_design, money, head, classement_bacteria, patojdur, body, shoes, item0, item1, item2, animal_special, user_level, modopro, rang, animal, ban, raison_ban FROM phpbb_users WHERE username ='$pseudo'");
			$infos = mysql_fetch_array($quete);
			echo '<form action="okdakor.php" method="post">';
			$banip = "0";
			if($infos["ipconnexion"] != "")
			{
				echo 'Historique des IP :<br />';
				$ip_nbr = preg_split("/,/",$infos["ipconnexion"] );
				$taille_ip = sizeof($ip_nbr);
				for($i=0; $i<$taille_ip; $i++)
				{
						if($ip_nbr[$i] != "")
						{
							$nbres = mysql_query("SELECT COUNT(*) AS exist FROM ip_acces WHERE ip = '".$ip_nbr[$i]."'");
							$aok = mysql_fetch_array($nbres);
							if($aok['exist'] != 0)
							{
								echo '<br /><b>'.$ip_nbr[$i].'</b> ( ip ban )<br />';
							}
							else if($ip_nbr[$i] == $infos["lastip"])
							{
								echo '<br /><b>'.$ip_nbr[$i].'</b> ( ip de la dernière connexion )<br />';
							}
							else
							{

								echo '<br /><b>'.$ip_nbr[$i].'</b><br />';
							}
						}
				}
					echo '<br /><br />Historique des doubles comptes :<br />';
					$ip_nbr = preg_split("/,/",$infos["ipconnexion"] );
					$taille_ip = sizeof($ip_nbr);
					for($i=0; $i<$taille_ip; $i++)
					{
						if($ip_nbr[$i] != "")
						{
							$sql = 'SELECT username, user_id FROM phpbb_users WHERE ipconnexion LIKE "%'.$ip_nbr[$i].'%" AND user_id != "'.$infos["user_id"].'"'; 
							$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
							if($req > 0)
							{
								while($data = mysql_fetch_assoc($req))
								{
									echo '<br /><b><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a> ( '.$ip_nbr[$i].' )</b><br/>';
								}
							}
						}
					}
			}
			echo '<br /><br /><br /><font color="#FF00CC"><b>Informations générales :</b></font><br /><br /><br />';
			echo '<br /><input type="hidden" name="ID" value="'.$infos["user_id"].'"><br /><br />';
			echo '<br />Pseudo  : <input  type="texte" name="newpseudo" value="'.$infos["username"].'"> <br /><br />';
			echo '<br />Fringues normales  : <input  type="texte" name="fringuesnormales" value="'.$infos["avatar_design"].'"> ( exemple : <b>r;1;1;1;1</b> )<br /><br />';
			echo '<br />Testoz  : <input  type="texte" name="testoz" value="'.$infos["money"].'"><br /><br />';
			echo '<br />Coiffures  : <input  type="texte" name="coiffures" value="'.$infos["head"].'"><br /><br />';
			echo '<br />Corps  : <input  type="texte" name="corps" value="'.$infos["body"].'"><br /><br />';
			echo '<br />Chaussures : <input  type="texte" name="chaussures" value="'.$infos["shoes"].'"><br /><br />';
			echo '<br />Masques, lunettes  : <input  type="texte" name="masques" value="'.$infos["item0"].'"><br /><br />';
			echo '<br />Sacs, barbes  : <input  type="texte" name="sacs" value="'.$infos["item1"].'"><br /><br />';
			echo '<br />Badge, collier  : <input  type="texte" name="badges" value="'.$infos["item2"].'"><br /><br />';
			echo '<br />Animal Special : <input  type="texte" name="animal_special" value="'.$infos["animal_special"].'"><br /><br />';
			echo '<br />Points Bac : <input  type="texte" name="point_bac" value="'.$infos["classement_bacteria"].'"><br /><br />';
			echo '<br />Score Patoj : <input  type="texte" name="score_patoj" value="'.$infos["patojdur"].'"><br /><br />';
			echo '<br />Rang  : ';
			if($infos["user_level"] == "1")
			{
				echo '<select name="attribut"><OPTION value="0">Membre</OPTION><OPTION value="1">Modo</OPTION><OPTION value="2">Aideur</OPTION><OPTION value="5">Defailleur</OPTION><OPTION value="6">Animateur</OPTION><OPTION value="7">Journaliste</OPTION><OPTION value="8">Radio\'z</OPTION><OPTION value="modopro">Modopro</OPTION><OPTION selected value="admin">Administrateur</OPTION> </select><br /><br />';
			}
			else if($infos["modopro"] == "1")
			{
				echo '<select name="attribut"><OPTION value="0">Membre</OPTION><OPTION value="1">Modo</OPTION><OPTION value="2">Aideur</OPTION><OPTION value="5">Defailleur</OPTION><OPTION value="6">Animateur</OPTION><OPTION value="7">Journaliste</OPTION><OPTION value="8">Radio\'z</OPTION><OPTION selected value="modopro">Modopro</OPTION><OPTION value="admin">Administrateur</OPTION> </select><br /><br />';
			}
			else
			{
				?>
				<select name="attribut">
				<OPTION <?php if($infos["rang"] == "0"){ echo 'selected'; } ?> value="0">Membre</OPTION>
				<OPTION <?php if($infos["rang"] == "1"){ echo 'selected'; } ?> value="1">Modo</OPTION>
				<OPTION <?php if($infos["rang"] == "2"){ echo 'selected'; } ?> value="2">Aideur</OPTION>
				<OPTION <?php if($infos["rang"] == "5"){ echo 'selected'; } ?> value="5">Defailleur</OPTION>
				<OPTION <?php if($infos["rang"] == "6"){ echo 'selected'; } ?> value="6">Animateur</OPTION>
				<OPTION <?php if($infos["journaliste"] == "1"){ echo 'selected'; } ?> value="7">Journaliste</OPTION>
				<OPTION <?php if($infos["radioz"] == "8"){ echo 'selected'; } ?> value="8">Radio'z</OPTION>
				<OPTION value="modopro">Modopro</OPTION>
				<OPTION value="admin">Administrateur</OPTION>
				</select><br /><br />
			<?php
			}
					
			echo '<br />Animal  : <input  type="texte" name="animal" value="'.$infos["animal"].'"> ( exemple : <b>0P2,Patrick;</b> pour un korbak )<br /><br />';
			if($infos['ban'] == "1")
			{
				echo '<br />Ban : <select name="ban"><OPTION value="0">Pas bannis</OPTION><OPTION selected value="1">Bannis</OPTION><OPTION value="2">Ban ip</OPTION></select><br /><br />';
			}
			else
			{
				echo '<br />Ban : <select name="ban"><OPTION value="0">Pas bannis</OPTION><OPTION value="1">Bannis</OPTION><OPTION value="2">Ban ip</OPTION></select><br /><br />';
			}
			if($infos['ban'] == 1 AND $infos['raison_ban'] != NULL)
			{?>
				Raison du Ban :<br />
				<textarea name="raison_ban" cols="50" rows="10"><?php echo $infos['raison_ban']; ?> </textarea><br />
				<?php
			}
			elseif($infos['ban'] == 1)
			{?>
				Raison du Ban : <br />
				<textarea name="raison_ban" cols="50" rows="10">Ce membre est bannis sans raison. </textarea><br />
				<?php
			}			
			elseif($infos['ban'] == 1)
			{?>
				Raison du Ban : <br />
				<textarea name="raison_ban" cols="50" rows="10">Ce membre est bannis sans raison. </textarea><br />
				<?php
			}
			else
			{?>
				Raison du Ban : <br />
				<textarea name="raison_ban" cols="50" rows="10">Ce membre n'est pas bannis. </textarea><br />
				<?php
			}
				
				
			
			echo '<br /><br /><input type="submit" value="Envoyer"><BR /></form><br />';
		}
		else
		{
			echo 'Eh Bobby, j\'crois que ce membre n\'existe pas !';
		}
	}
	else
	{
		echo 'Il faut remplir tout les champs :) .';
	}
}
else
{
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
?></span></td>
      </tr>
    </table></td>
    <br />
    <br />
    <div align="center"></div>
    <td width="11" bgcolor="#FFF4D5"></td>

  </tr>
  <tr>
    <td width="11" height="11"><img src="/img/beige_bg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_bd.gif" width="11" height="11" /></td>
  </tr>
</table>
</form>

<head>
<style type="text/css">
.style1 {
	color: #FF3399;
}
.style2 {
	color: #FFFFFF;
}

</style>
</head>
<?php
include('../bbs/includes/bas.php'); 
?>