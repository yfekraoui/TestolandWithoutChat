
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
        <td colspan="2" align="center"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 20px;font-weight: bold;color: #A06526;">Bienvenue sur l'éditeur du P'tit Testoland<br /> <u>Previsualisation</u></span></td>
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

$title = $_POST['title'];
$article = $_POST['article'];
$auteur = $_POST['auteur'];

	if(isset($title) && isset($article) && isset($auteur) && !empty($auteur) && !empty($article) && !empty($title))
	{
							
							 $t = $article;
							 $t = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $t);
							 $t = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $t);
							 $t = preg_replace('#\[center\](.+)\[/center\]#isU', '<center>$1</center>', $t);
							 $t = preg_replace('#\[u\](.+)\[/u\]#isU', '<u>$1</u>', $t);
							 $t = preg_replace('#\[url=(.+)\](.+)\[/url\]#isU', '<a href="$1">$2</a>', $t);
							 $t = preg_replace('#\[img\](.+)\[/img\]#isU', '<img src="$1" alt="edit_image" />', $t);
							 $t = addslashes($t);
							 $t = stripslashes($t);
							 $t = nl2br($t);
							$jour = date('d');
							$mois = date('m');
							$annee = date('Y');
							$heure = date('H');
							$minute = date('i');
							$date = "$jour/$mois/$annee à $heure h $minute";
							
							?>
							
							<center><span class="titrebeige"><?php echo stripslashes($title); ?></span></center> <br /><br />
							<?php echo stripslashes($t); ?><br /><br />
							
							 <center><img src="/img/spacer.gif" width="260" height="1" /><span class="infobeige" align="right"><?php echo 'par '.$auteur.' le '.$date;?></span></center>
							 <br /><br />
							 <center>
							 ________________________<br />
							 <form method="POST" action="editokok.php"/>
							 <input type="hidden" value="<?php echo $title; ?>" name="title" />
							 <input type="hidden" value="<?php echo $article; ?>" name="article" />
							 <input type="hidden" value="<?php echo $auteur; ?>" name="auteur" />
							 <input type="submit" value="Confirmer" />
							 </form>
							 <form method="POST" action="edit.php"/>
							 <input type="hidden" value="<?php echo $title; ?>" name="title" />
							 <input type="hidden" value="<?php echo $article; ?>" name="article" />
							 <input type="hidden" value="<?php echo $auteur; ?>" name="auteur" />
							 <input type="submit" value="Modifier" /><br />
							
							 </form>
							 </center>
							 
							<?php
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