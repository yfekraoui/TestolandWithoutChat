
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
$title='Messagerie Interne';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
function colortr($i)
{
	$nb_retour = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39, 41, 43, 45, 47, 49, 51, 53, 55, 57, 59, 61, 63, 65, 67, 69, 71, 73, 75, 77, 79, 81, 83, 85, 87, 89, 91, 93, 95, 97, 99, 101);
	if(in_array($i, $nb_retour))
	{
		echo '<tr bgcolor=#FFFFFF>';;
	}
	else
	{
		echo '<tr>';
	}
}
function coup($phrase,$jusqua)
{
	if(strlen(@$phrase) >= $jusqua)
	{
		for($k=0;$k<=$jusqua;$k++)
		{
			@$phrase1 .= @$phrase[$k];
		}
		return @$phrase1;
	}
	else 
	{
		return @$phrase;
	}
}
function bbCode($t)
{
   // barre horizontale
   $t=str_replace("[/]", "<hr width=\"100%\" size=\"1\" />", $t);
   $t=str_replace("[hr]", "<hr width=\"100%\" size=\"1\" />", $t);
   
   // gras
   $t=str_replace("[b]", "<strong>", $t);
   $t=str_replace("[/b]", "</strong>", $t);
   
   // italique
   $t=str_replace("[i]", "<em>", $t);
   $t=str_replace("[/i]", "</em>", $t);
   
   // soulignement
   $t=str_replace("[u]", "<u>", $t);
   $t=str_replace("[/u]", "</u>", $t);
   
   // alignement centré
   $t=str_replace("[center]", "<div style=\"text-align: center\">", $t);
   $t=str_replace("[/center]", "</div>", $t);
   
   // alignement à droite
   $t=str_replace("[right]", "<div style=\"text-align: right\">", $t);
   $t=str_replace("[/right]", "</div>", $t);
   
   // alignement justifié
   $t=str_replace("[justify]", "<div style=\"text-align: justify\">", $t);
   $t=str_replace("[/justify]", "</div>", $t);
   
   // couleur
   $t=str_replace("[/color]", "</span>", $t);
   $regCouleur="\[color= ?(([[:alpha:]]+)|(#[[:digit:][:alpha:]]{6})) ?\]";
   $t=ereg_replace($regCouleur, "<span style=\"color: \\1\">", $t);
   
   // taille des caractères
   $t=str_replace("[/size]", "</span>", $t);
   $regCouleur="\[size= ?([[:digit:]]+) ?\]";
   $t=ereg_replace($regCouleur, "<span style=\"font-size: \\1px\">", $t);
   
   // lien
   $regLienSimple="\[url\] ?([^\[]*) ?\[/url\]";
   $regLienEtendu="\[url ?=([^\[]*) ?] ?([^]]*) ?\[/url\]";
   if (ereg($regLienSimple, $t)) $t=ereg_replace($regLienSimple, "<a href=\"\\1\">\\1</a>", $t);
   else $t=ereg_replace($regLienEtendu, "<a href=\"\\1\" target=\"_blank\">\\2</a>", $t);
   
   // mail
   $regMailSimple="\[email\] ?([^\[]*) ?\[/email\]";
   $regMailEtendu="\[email ?=([^\[]*) ?] ?([^]]*) ?\[/email\]";
   if (ereg($regMailSimple, $t)) $t=ereg_replace($regMailSimple, "<a href=\"mailto:\\1\">\\1</a>", $t);
   else $t=ereg_replace($regMailEtendu, "<a href=\"mailto:\\1\">\\2</a>", $t);
   
   // image
   $regImage="\[img\] ?([^\[]*) ?\[/img\]";
   $regImageAlternatif="\[img ?= ?([^\[]*) ?\]";
   if (ereg($regImage, $t)) $t=ereg_replace($regImage, "<img src=\"\\1\" alt=\"\" border=\"0\" />", $t);
   else $t=ereg_replace($regImageAlternatif, "<img src=\"\\1\" alt=\"\" border=\"0\" />", $t);
   
   // SMILEYS
   $t=str_replace(':noel:', '<img src="/bbs/images/smiles/11.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':hap:', '<img src="/bbs/images/smiles/18.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':?:', '<img src="/bbs/images/smiles/2.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':langue:', '<img src="/bbs/images/smiles/31.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':ok:', '<img src="/bbs/images/smiles/36.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':oui:', '<img src="/bbs/images/smiles/37.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':rire:', '<img src="/bbs/images/smiles/39.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':bave:', '<img src="/bbs/images/smiles/71.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':larme:', '<img src="/bbs/images/smiles/20.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':non:', '<img src="/bbs/images/smiles/35.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':bye:', '<img src="/bbs/images/smiles/48.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':dehors:', '<img src="/bbs/images/smiles/52.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':amour:', '<img src="/bbs/images/smiles/54.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':sors:', '<img src="/bbs/images/smiles/56.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':omg:', '<img src="/bbs/images/smiles/57.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':hs:', '<img src="/bbs/images/smiles/64.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':malade:', '<img src="/bbs/images/smiles/8.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':fou:', '<img src="/bbs/images/smiles/50.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':sarcastic:', '<img src="/bbs/images/smiles/43.gif" border="0" alt="z" title="z" />', $t);
   $t=str_replace(':colere:', '<img src="/bbs/images/smiles/15.gif" border="0" alt="z" title="z" />', $t);

   return $t;
}
if (!isset($userdata['session_logged_in'])) {
							
						}
						else if($userdata['username'] == "Anonymous"){
							
						}
						else {
?>

  <!-- main content -->
<td valign="top">

 <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<table width="560" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>
    <td height="11" bgcolor="#FFF4D5">
	<table> <!-- table menu bouton mi -->
	<tr>
	<td><img src="/img/spacer.gif" alt="spacer" width="20" height="2" /></td>
	<td><a href="new.php"><img src="nouveau.png" alt="envoyer" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	<td><a href="bc.php"><img src="boitereception.png" alt="boite_reception" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	<td><a href="be.php"><img src="boite-denvoie.gif" alt="boite_envoi" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	
	
	</tr>
	</table>
	</td>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>

  </tr>

 <tr>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>
    <td height="11" bgcolor="#FFF4D5">
	
	<img src="/img/spacer.gif" height="15" width="10" />
	
	<img src="/img/spacer.gif" height="15" width="50" /><b><center>Message Envoyer</b></center>
	
	</td>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>

  </tr>

  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="45%" align="left">
		<?php
		$msid = (int)mysql_real_escape_string(htmlspecialchars($_GET['id']));
		$verif_msg = mysql_query('SELECT COUNT(*) AS vms FROM mi WHERE mid_e = "'.$userdata['user_id'].'" AND id = "'.$msid.'"');
		$verif_msg = mysql_fetch_assoc($verif_msg);
		$vms = $verif_msg['vms'];
		if($vms == 1)
		{
			$dms = mysql_query('SELECT * FROM mi WHERE mid_e = "'.$userdata['user_id'].'" AND id = "'.$msid.'"');
			$dms = mysql_fetch_assoc($dms);
			$de = mysql_query('SELECT username, mood, avatar_design FROM phpbb_users WHERE user_id = "'.$dms['mid_r'].'"');
			$de = mysql_fetch_assoc($de);
			
			?>
			<table>
			
			<tr>
			<td><b>Sujet :</b></td><td bgcolor="#FFFFFF"><?php echo stripslashes($dms['sujet']);?></td>
			</tr>
			<tr>
			<td><b>Date :</b></td><td bgcolor="#FFFFFF"><?php echo date('d/m/Y à H\hi', $dms['timestamp']);?></td>
			</tr>
			
			<tr><td valign="top"><b>Message :<br />
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
			codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
			width="100" height="95" id="bbsmemb" align="middle">
			<param name="allowScriptAccess" value="sameDomain" />
			<param name="wmode" value="transparent" />
			<param name="movie" value="../img/member.swf" />
			<param name="quality" value="high" />
			<param name="menu" value="false" />
			<param name="bgcolor" value="#ffffff" />
			<param name="FlashVars" value="&m=<?php echo $de['mood']; ?>&ad=<?php echo $de['avatar_design']; ?>" />
			<embed src="../img/member.swf" quality="high" bgcolor="#ffffff" width="100" height="95" name="bbsmemb"
			align="middle" allowScriptAccess="sameDomain" wmode="transparent" menu="false" 
			FlashVars="&m=<?php echo $de['mood']; ?>&ad=<?php echo $de['avatar_design']; ?>"type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			</object><br />
			<center><?php echo '<a href="/annuaire/?mid='.$dms['mid_r'].'">'.$de['username'].'</a>'; ?></center>

			</b></td>
			<td valign="top" bgcolor="#FFFFFF" height="200" width="400">
			
			<?php  
			$msg = stripslashes($dms['message']);
			$msg = nl2br($msg);
			echo bbCode($msg);
			$lol = explode(')', $dms['sujet']);
			if($lol[0] == "(RE")
			{
				$reponse = $dms['sujet'];
			}
			else
			{
			$reponse = '(RE)'.$dms['sujet'];
			}
			?>
			
			</td>		
			</tr>
			</table>
			<br />
		
			
		<?php
		}
		else
		{
			echo 'Erreur : Ce message n\'existe pas ou ne t\'est pas destiné';
		}
		?>
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
}
include('../bbs/includes/bas.php');  
?>