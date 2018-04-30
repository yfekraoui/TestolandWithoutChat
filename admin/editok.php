
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
$name = stripslashes(htmlspecialchars($_POST['name']));
$prix = mysql_real_escape_string(htmlspecialchars($_POST['price']));
$type = mysql_real_escape_string(htmlspecialchars($_POST['type']));
$delete = mysql_real_escape_string(htmlspecialchars($_POST['delete']));
$name_bd = mysql_real_escape_string(htmlspecialchars($_POST['name_bd']));
$items = mysql_real_escape_string(htmlspecialchars($_POST['items']));
$description = stripslashes(($_POST['description']));
$id = mysql_real_escape_string(htmlspecialchars($_POST['id']));
$nbre = mysql_query("SELECT COUNT(*) AS exist FROM shopping WHERE id='$id'");
$donnees = mysql_fetch_array($nbre);
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1")
{
	if($delete == "oui")
	{
		$quete5 = mysql_query('DELETE FROM shopping WHERE id = "'.$id.'"');
		
		echo 'La suppression du pack a été réalisé avec succes, cliquez <a href="/admin/">ici</a> pour retourner au menu de l\'administration :) !<br /><br />Pack modifié : <a href="/admin/editpack.php?id='.$id.'">'.$name.'</a>';
	}
	else if($donnees['exist'] != 0)
	{
		$quete5 = mysql_query('UPDATE shopping SET name = "'.$name.'" WHERE id = "'.$id.'"');
		$quete5 = mysql_query('UPDATE shopping SET prix = "'.$prix.'" WHERE id = "'.$id.'"');
		$quete5 = mysql_query('UPDATE shopping SET name_bd = "'.$name_bd.'" WHERE id = "'.$id.'"');
		$quete5 = mysql_query('UPDATE shopping SET items = "'.$items.'" WHERE id = "'.$id.'"');
		$quete5 = mysql_query('UPDATE shopping SET description = "'.$description.'" WHERE id = "'.$id.'"');
		$quete5 = mysql_query('UPDATE shopping SET type = "'.$type.'" WHERE id = "'.$id.'"');
		
		echo 'Les modifications ont été enregistrées !<br /><br />Pack modifié : <a href="/admin/editpack.php?id='.$id.'">'.$name.'</a>';
	}
	else
	{
		echo 'Eh Bobby, j\'crois que ce pack n\'existe pas !';
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