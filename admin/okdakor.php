
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
  <param name="FlashVars" value="title=Mes informations" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Mes informations"
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

//Je mets aussi certaines sécurités ici...
$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['newpseudo']));
$idid = mysql_real_escape_string(htmlspecialchars($_POST['ID']));
$raison_ban = mysql_real_escape_string(htmlspecialchars($_POST['raison_ban']));
$newpseudo = mysql_real_escape_string(htmlspecialchars($_POST['newpseudo']));
$fringuesnormales = mysql_real_escape_string(htmlspecialchars($_POST['fringuesnormales']));
$money = mysql_real_escape_string(htmlspecialchars($_POST['testoz']));
$attribut = mysql_real_escape_string(htmlspecialchars($_POST['attribut']));
$ban = mysql_real_escape_string(htmlspecialchars($_POST['ban']));
$animal = mysql_real_escape_string(htmlspecialchars($_POST['animal']));
$head = mysql_real_escape_string(htmlspecialchars($_POST['coiffures']));
$body = mysql_real_escape_string(htmlspecialchars($_POST['corps']));
$shoes = mysql_real_escape_string(htmlspecialchars($_POST['chaussures']));
$item0 = mysql_real_escape_string(htmlspecialchars($_POST['masques']));
$item1 = mysql_real_escape_string(htmlspecialchars($_POST['sacs']));
$item2 = mysql_real_escape_string(htmlspecialchars($_POST['badges']));
$case_calendrier = mysql_real_escape_string(htmlspecialchars($_POST['casecal']));
$animal_special = mysql_real_escape_string(htmlspecialchars($_POST['animal_special']));
$point_bac = mysql_real_escape_string(htmlspecialchars($_POST['point_bac']));
$score_patoj = mysql_real_escape_string(htmlspecialchars($_POST['score_patoj']));
$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo'");
$donnees = mysql_fetch_array($nbre);
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1")
{
	if($donnees['exist'] != 0)
	{
		$quete = mysql_query("SELECT user_id, lastip FROM phpbb_users WHERE user_id ='$idid'");
		$infos = mysql_fetch_array($quete);
		$idid = $infos["user_id"];
		$ip_ban = $infos["lastip"];
		if($newpseudo != " ")
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET username = "' .$newpseudo.'" WHERE user_id = "'.$idid.'"');
		}
		$quete5 = mysql_query('UPDATE phpbb_users SET avatar_design = "'.$fringuesnormales.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET money = "'.$money.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET head = "'.$head.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET body = "'.$body.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET shoes = "'.$shoes.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET item0 = "'.$item0.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET item1 = "'.$item1.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET item2 = "'.$item2.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET case_calendrier = "'.$case_calendrier.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET animal_special = "'.$animal_special.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET classement_bacteria = "'.$point_bac.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET patojdur = "'.$score_patoj.'" WHERE user_id = "'.$idid.'"');
		$quete5 = mysql_query('UPDATE phpbb_users SET modopro = "0" WHERE user_id = "'.$idid.'"');
		if($attribut == "1")
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET journaliste = "0" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('UPDATE phpbb_users SET rang = "'.$attribut.'" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "8" OR group_id = "10" OR group_id = "11" OR group_id = "12" OR group_id = "16" OR group_id = "106")');
			if($infos['user_level'] == "1")
			{
				$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "9")');
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('9', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
			else
			{
				$quete5 = mysql_query("INSERT INTO phpbb_user_group VALUES ('10', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
		}
		else if($attribut == "2")
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET journaliste = "0" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('UPDATE phpbb_users SET rang = "'.$attribut.'" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "8" OR group_id = "10" OR group_id = "11" OR group_id = "12" OR group_id = "16" OR group_id = "106")');
			if($infos['user_level'] == "1")
			{
				$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "9")');
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('9', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
			else
			{
				$quete5 = mysql_query("INSERT INTO phpbb_user_group VALUES ('11', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
		}
		else if($attribut == "5")
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET journaliste = "0" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('UPDATE phpbb_users SET rang = "'.$attribut.'" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "8" OR group_id = "10" OR group_id = "11" OR group_id = "12" OR group_id = "16" OR group_id = "106")');
			if($infos['user_level'] == "1")
			{
				$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "9")');
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('9', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
			else
			{
				$quete5 = mysql_query("INSERT INTO phpbb_user_group VALUES ('12', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
		}
		else if($attribut == "6")
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET journaliste = "0" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('UPDATE phpbb_users SET rang = "'.$attribut.'" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "8" OR group_id = "10" OR group_id = "11" OR group_id = "12" OR group_id = "16" OR group_id = "106")');
			if($infos['user_level'] == "1")
			{
				$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "9")');
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('9', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
			else
			{
				$quete5 = mysql_query("INSERT INTO phpbb_user_group VALUES ('16', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
		}
		else if($attribut == "7")
		{
			
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "8")');
			$quete5 = mysql_query('UPDATE phpbb_users SET journaliste = "1" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query("INSERT INTO phpbb_user_group VALUES ('8', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			
		}
			else if($attribut == "8")
		{
			
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "510")');
			$quete5 = mysql_query('UPDATE phpbb_users SET radioz = "1" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query("INSERT INTO phpbb_user_group VALUES ('510', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			
		}
		else if($attribut == "admin")
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET rang = "1" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "9")');
			if($infos['user_level'] == "1")
			{
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('9', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
			else
			{
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('9', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
				$quete5 = mysql_query('UPDATE phpbb_users SET user_level = "1" WHERE user_id = "'.$idid.'"');
			}
		}
		else if($attribut == "modopro")
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET rang = "1" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "5")');
			if($infos['user_level'] == "1")
			{
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('5', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			}
			else
			{
				$quete15 = mysql_query("INSERT INTO phpbb_user_group VALUES ('5', '.$idid.', '0', '0', '0', '0', '0', '0', '0', '0' )");
				$quete5 = mysql_query('UPDATE phpbb_users SET user_level = "2" WHERE user_id = "'.$idid.'"');
				$quete5 = mysql_query('UPDATE phpbb_users SET modopro = "1" WHERE user_id = "'.$idid.'"');
			}
		}
		else
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET rang = "0" WHERE username = "'.$pseudo.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$idid.'" AND (group_id = "10" OR group_id = "11" OR group_id = "12" OR group_id = "16" OR group_id = "106" OR group_id = "9" OR group_id = "5")');
			$quete5 = mysql_query('UPDATE phpbb_users SET modopro = "0" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('UPDATE phpbb_users SET journaliste = "0" WHERE user_id = "'.$idid.'"');
		}
		if($ban == "1")
		{
			$quete5 = mysql_query('DELETE FROM phpbb_banlist WHERE ban_userid = "'.$idid.'"');
			$quete5 = mysql_query("INSERT INTO phpbb_banlist VALUES ('', '.$idid.', '', '')");
			$quete5 = mysql_query('UPDATE phpbb_users SET ban = "'.$ban.'" WHERE user_id = "'.$idid.'"');
		}
		else if($ban == "2")
		{
			$quete5 = mysql_query('DELETE FROM phpbb_banlist WHERE ban_userid = "'.$idid.'"');
			$quete5 = mysql_query("INSERT INTO phpbb_banlist VALUES ('', '.$idid.', '', '')");
			$quete5 = mysql_query('UPDATE phpbb_users SET ban = "1" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM ip_acces WHERE ip = "'.$ip_ban.'"');
			$quete5 = mysql_query("INSERT INTO ip_acces VALUES ('$ip_ban')");
		}
		else
		{
			$quete5 = mysql_query('UPDATE phpbb_users SET ban = "'.$ban.'" WHERE user_id = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM phpbb_banlist WHERE ban_userid = "'.$idid.'"');
			$quete5 = mysql_query('DELETE FROM ip_acces WHERE ip = "'.$ip_ban.'"');
		}
		
		$quete5 = mysql_query('UPDATE phpbb_users SET animal = "'.$animal.'" WHERE user_id = "'.$idid.'"');
		
			$quete5 = mysql_query('UPDATE phpbb_users SET raison_ban = "' .$raison_ban. '" WHERE user_id = "'.$idid.'"');
		
		echo 'Les modifications ont été enregistrées, cliquez <a href="/admin/">ici</a> pour retourner au menu de l\'administration :) !<br /><br />Membre modifié : <a href="/annuaire/?mid='.$idid.'">'.$pseudo.'</a>';
	}
	else
	{
		echo 'Eh Bobby, j\'crois que ce membre n\'existe pas !';
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