
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
$title='Le P\'tit Testoland';
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


<table width="554" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 20px;font-weight: bold;color: #A06526;">Bienvenue sur l'éditeur du P'tit Testoland</span></td>
      </tr>
      <tr>
        <td width="45%" align="left"><span class="gen"><?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1" || $userdata['journaliste'] == 1) {
$title = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['title'])));
$article = nl2br(stripslashes($_POST['article']));
$article = str_replace('<br />', ' ', $article);
$auteur = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['auteur'])));
?>
<br />
<center> 
<form method="POST" action="editok.php">
Titre : <input type="text" value="<?php if(isset($title) && !empty($title)){ echo stripslashes($title);}?>" size="60" name="title" /><br />
Contenu de l'article : <textarea name="article" cols="80" rows="50"> <?php if(isset($article) && !empty($article)){ echo  stripslashes($article);}?> </textarea><br />
Auteur : <input type="text" value="<?php if(isset($auteur) && !empty($auteur)){ echo stripslashes($auteur);} else { echo $userdata['username']; } ?>" name="auteur" /><br />
<input type="submit" />
</form>
<br /><br />
</center>
<?php
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