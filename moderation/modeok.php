
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
$title='Modération';
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
	echo 'Il faut se connecter et être modo pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être modo pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1" OR $userdata['rang'] >= "1")
{	
			if(!empty($_GET['pseudo']))
		{														//
		$pseudo = $_GET['pseudo']; 										// SECURITE
		$pseudo = mysql_real_escape_string(htmlspecialchars($pseudo));	//

		$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo'");
		$donnees = mysql_fetch_array($nbre);
		if($donnees['exist'] != 0)
		{
				$quete = mysql_query("SELECT ban, ipconnexion, lastip, user_id, username, abus_tchat, abus_bbs FROM phpbb_users WHERE username ='$pseudo'");
				$infos = mysql_fetch_array($quete);
				echo '<form action="modeokluv.php" method="post">';
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
									echo '<br /><b><a href="http://www.testoland.com/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a> ( '.$ip_nbr[$i].' )</b><br/>';
								}
							}
						}
					}
			}
				echo '<br /><br />';
				if($infos['ban'] == 1)
				{
				echo '<font color="#FF00CC"><b>CE MEMBRE EST BANNI</b></font><br /><br /<br />';
				}
				elseif($infos['ban'] == 0)
				{
				echo '<font color="#FF00CC"><b>CE MEMBRE N\'EST PAS BANNI</b></font><br /><br /<br />';
				}
				echo '<b>Abus sur le Tchat :</b><br /><br />';
				
				
				?><textarea name="abus_tchat" cols="70" rows="15"><?php echo stripslashes($infos['abus_tchat']); ?> </textarea><br /><br />
				<?php
				
				
				
				echo '( Merci de séparé les abus different avec une ligne comme  ça : <br /> ------------------------------------------- ) <br /><br />';
				echo '<b>Abus sur le BBS :</b<br /><br />';
				
				
				?>
				<textarea name="abus_bbs" cols="70" rows="15"><?php echo stripslashes($infos['abus_bbs']); ?> </textarea><br /><br /><br /><br />
				<?php
			
				echo '<a href="/moderation/">Je voulais juste regarder, retour a l\'accueil de moderation</a><br /><br />';
				echo '<input type="hidden" name="pseudo" value="'.$infos['username'].'" />';
				echo '<input type="submit" value="Envoyer" />';
				echo '</form>';
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