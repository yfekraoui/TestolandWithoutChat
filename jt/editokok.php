
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
        <td colspan="2" align="center"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 20px;font-weight: bold;color: #A06526;">Bienvenue sur l'éditeur du P'tit Testoland<br /> <u> Validation</u></span></td>
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
$article = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['article'])));
$auteur = mysql_real_escape_string(htmlspecialchars($_POST['auteur']));

	if(isset($title) && isset($article) && isset($auteur) && !empty($auteur) && !empty($article) && !empty($title))
	{
							
							 $time = time();
							 $na = mysql_query('SELECT COUNT(*) AS na FROM journal');
							 $na = mysql_fetch_assoc($na);
							 $na = $na['na'];
							 $na = $na+ 1;
							 mysql_query('INSERT INTO journal VALUES ("'.$na.'", "'.$title.'", "'.$article.'", "'.$time.'", "'.$auteur.'")');
							 echo $article;
							 
	}
	else
	{
		echo ':@ ! Erreur  : il faut remplire tout les champs !';
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
</style>
</head>
<?php
include('../bbs/includes/bas.php'); 
?>