
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
$title='Mes informations';
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
$phrase = mysql_real_escape_string(htmlspecialchars($_POST['phrase']));
$interet1 = mysql_real_escape_string(htmlspecialchars($_POST['interet1']));
$interet2 = mysql_real_escape_string(htmlspecialchars($_POST['interet2']));
$interet3 = mysql_real_escape_string(htmlspecialchars($_POST['interet3']));
$interet4 = mysql_real_escape_string(htmlspecialchars($_POST['interet4']));
$site = mysql_real_escape_string(htmlspecialchars($_POST['site']));

$nc1 = strlen($phrase);
$nc2 = strlen($interet1);
$nc3 = strlen($interet2);
$nc4 = strlen($interet3);
$nc5 = strlen($interet4);
$nc6 = strlen($site);

if($nc1 > 255 OR $nc2 > 200 OR $nc3 > 200 OR $nc4 > 200 OR $nc5 > 200 OR $nc6 > 150)
{
	echo 'il y a trop de caractere dans une des vos phrases perso !';
}
else
{
$quete5 = mysql_query('UPDATE phpbb_users SET user_sig = "'.$phrase.'" WHERE username = "'.$userdata['username'].'"');
$quete5 = mysql_query('UPDATE phpbb_users SET interet1 = "'.$interet1.'" WHERE username = "'.$userdata['username'].'"');
$quete5 = mysql_query('UPDATE phpbb_users SET interet2 = "'.$interet2.'" WHERE username = "'.$userdata['username'].'"');
$quete5 = mysql_query('UPDATE phpbb_users SET interet3 = "'.$interet3.'" WHERE username = "'.$userdata['username'].'"');
$quete5 = mysql_query('UPDATE phpbb_users SET interet4 = "'.$interet4.'" WHERE username = "'.$userdata['username'].'"');
$quete5 = mysql_query('UPDATE phpbb_users SET user_website = "'.$site.'" WHERE username = "'.$userdata['username'].'"');
echo 'Vos informations ont bien été enregistrées, cliquez <a href="/annuaire/?mid='.$userdata['user_id'].'">ici</a> pour voir le resultat :) !';
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