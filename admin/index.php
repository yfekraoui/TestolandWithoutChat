
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
<td valign="top"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

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
else if($userdata['user_level'] == "1") {
$espacer = '<b><font style="color:rgb(255,47,151);">••••••••••••••••••••••••••••••••••••••••••••••••••••••<br></font></b>';
echo '<center><form action="adminok.php" method="GET">';
echo $espacer;
echo 'Bienvenu dans la section ADMINISTRATION de Testoland .<br />';
echo $espacer;
echo '<b>Modification des informations d\'un membre :</b><br>';
echo '<br />Quel membre veux-tu modifier ?  : <input  type="texte" name="pseudo" maxlength="100" value="Un pseudo"><br />';
echo '<input type="submit" value="Envoyer"></form><br />';
echo '<center> ' .$espacer . '</center><br /><br />';
echo '<center><b><a href="/admin/edit_news.php"><font style="color:rgb(255,47,151);">• </font>Modifier la news de la page d\'accueil !</a></b></center><br />';
echo '<center><b><a href="/admin/upload.php"><font style="color:rgb(255,47,151);">• </font>Ajouter une image en fan-art !</a></b></center><br />';
echo '<center><b><a href="/admin/viewshop.php"><font style="color:rgb(255,47,151);">• </font>Modifier le shopping !</a></b></center><br />';
echo '<center><b><a href="/admin/conversations/"><font style="color:rgb(255,47,151);">• </font>Consulter les logs des conversations du tchat !</a></b></center><br />';
echo '<center><b><a href="/admin/mailz.php"><font style="color:rgb(255,47,151);">• </font>Changer et renvoyer le MDP d\'un membre par mail.</a></b></center><br />';

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
</style>
</head>
<?php
include('../bbs/includes/bas.php'); 
?>