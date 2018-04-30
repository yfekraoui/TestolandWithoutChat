
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
$pseudo_ad_k = mysql_real_escape_string(htmlspecialchars($_GET['pseudo_ad_k']));
$pseudo_del_k = mysql_real_escape_string(htmlspecialchars($_GET['pseudo_del_k']));
$pseudo_ad_b = mysql_real_escape_string(htmlspecialchars($_GET['pseudo_ad_b']));
$pseudo_del_b = mysql_real_escape_string(htmlspecialchars($_GET['pseudo_del_b']));


if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1" OR $userdata['user_id'] == "712")
{
	if(isset($pseudo_ad_k) && !empty($pseudo_ad_k))
	{
		$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo_ad_k'");
		$donnees = mysql_fetch_array($nbre);
		if($donnees['exist'] != 0)
		{
			$pseudo = $pseudo_ad_k;
			$midz = mysql_query("SELECT user_id FROM phpbb_users WHERE username = '$pseudo'");
			$midz = mysql_fetch_array($midz);
			$midz = $midz['user_id'];
			$quete = mysql_query("INSERT INTO phpbb_user_group VALUES ('181', '.$midz.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			mysql_query('UPDATE phpbb_users SET clan = "king" WHERE user_id = "'.$midz.'"');
			echo $pseudo.' est bien ajouter au groupe des kings';
		}
	}
	elseif(isset($pseudo_del_k) && !empty($pseudo_del_k))
	{
		$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo_del_k'");
		$donnees = mysql_fetch_array($nbre);
		if($donnees['exist'] != 0)
		{
			$pseudo = $pseudo_del_k;
			$midz = mysql_query("SELECT user_id FROM phpbb_users WHERE username = '$pseudo'");
			$midz = mysql_fetch_array($midz);
			$midz = $midz['user_id'];
			$quete = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$midz.'" AND (group_id = "181")');
			echo $pseudo.' est bien supprimer du groupe des kings';
		}
	}
	elseif(isset($pseudo_ad_b) && !empty($pseudo_ad_b))
	{
		$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo_ad_b'");
		$donnees = mysql_fetch_array($nbre);
		if($donnees['exist'] != 0)
		{
			$pseudo = $pseudo_ad_b;
			$midz = mysql_query("SELECT user_id FROM phpbb_users WHERE username = '$pseudo'");
			$midz = mysql_fetch_array($midz);
			$midz = $midz['user_id'];
			$quete = mysql_query("INSERT INTO phpbb_user_group VALUES ('180', '.$midz.', '0', '0', '0', '0', '0', '0', '0', '0' )");
			mysql_query('UPDATE phpbb_users SET clan = "borgne" WHERE user_id = "'.$midz.'"');
			echo $pseudo.' est bien ajouter au groupe des borgnes';
		}
	}
	elseif(isset($pseudo_del_b) && !empty($pseudo_del_b))
	{
		$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo_del_b'");
		$donnees = mysql_fetch_array($nbre);
		if($donnees['exist'] != 0)
		{
			$pseudo = $pseudo_del_b;
			$midz = mysql_query("SELECT user_id FROM phpbb_users WHERE username = '$pseudo'");
			$midz = mysql_fetch_array($midz);
			$midz = $midz['user_id'];
			$quete = mysql_query('DELETE FROM phpbb_user_group WHERE user_id = "'.$midz.'" AND (group_id = "180")');
			echo $pseudo.' est bien supprimer du groupe des borgnes';
		}
	}
	else
	{
		echo'Erreur';
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