
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
        <td colspan="2" align="center"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;font-weight: bold;color: #A06526;">Le P'tit Testoland</span><br /><br /></td>
      </tr>
      <tr>
        <td width="45%" align="left"><span class="gen"><?php
		if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour accèder à cette page !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour accèder à cette page !";
}
else {

if(isset($_GET['p']) && !empty($_GET['p']))
{
	$p = (int)mysql_real_escape_string(htmlspecialchars($_GET['p']));
	$tp = mysql_query('SELECT COUNT(*) AS tp FROM journal WHERE id = "'.$p.'"');
	$tp = mysql_fetch_assoc($tp);
	if($tp['tp'] > 0)
	{
		$da = mysql_query('SELECT * FROM journal WHERE id = "'.$p.'"');
		$da = mysql_fetch_assoc($da);
		$t = $da['article'];
		
							 $t = stripslashes($t);
							 $t = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $t);
							 $t = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $t);
							 $t = preg_replace('#\[u\](.+)\[/u\]#isU', '<u>$1</u>', $t);
							 $t = preg_replace('#\[center\](.+)\[/center\]#isU', '<center>$1</center>', $t);
							 $t = preg_replace('#\[url=(.+)\](.+)\[/url\]#isU', '<a href="$1">$2</a>', $t);
							 $t = preg_replace('#\[img\](.+)\[/img\]#isU', '<img src="$1" alt="edit_image" />', $t);
							 
							 $title = stripslashes($da['title']);
							 ?>
							
							<center><span class="titrebeige"><?php echo stripslashes(stripslashes($title)); ?></span> <br /><br /></center>
							<?php echo nl2br(stripslashes($t)); ?><br /><br />
							
							 <center><img src="/img/spacer.gif" width="260" height="1" /><span class="infobeige" align="right"><?php echo 'par '.$da['auteur'].' le '.date('d/m/Y à H\hi', $da['timestamp']);?></span> 
							 </center><br /><br />
							 <center>
							 <?php
							 $dz = mysql_query('SELECT * FROM journal ORDER BY id  DESC LIMIT 1');
							 $dz = mysql_fetch_assoc($dz);
							 $dz = $dz['id'];
							$suiv = $p - 1;
							$pre = $p + 1;
							 if($p==$dz)
							 {
								echo '[<b>'.$p.'</b>] <a href="?p='.$suiv.'">Suivante</a> ... <a href="?p=1">1</a>';
							 }
							 elseif($p == 1)
							 {
								echo '<a href="?p='.$dz.'">'.$dz.'</a> ... <a href="?p='.$pre.'">Précédente</a> [<b>'.$p.'</b>]';
							 }
							else
							{
								echo '<a href="?p='.$dz.'">'.$dz.'</a> ... <a href="?p='.$pre.'">Précédente</a> [<b>'.$p.'</b>] <a href="?p='.$suiv.'">Suivante</a> ... <a href="?p=1">1</a>';
							}
							echo '<br /><br />';
							if(isset($_GET['com']) && !empty($_GET['com']) && $_GET['com'] == "view")
							{
								?>
								
									
									<img src="/img/separator_bbr.gif" alt="separator" width="500" /><br />
									
									<font size="2"><u><b>Commentaire(s)</b></u></font><br />
									
									<img src="/img/separator_bbr.gif" alt="separator" width="500" /><br />
									
								<div style="overflow:auto;height:257px;" id="com">
								<?php
								$nc = mysql_query('SELECT COUNT(*) AS nc FROM com_journal WHERE article_id = "'.$p.'"');
								$nc = mysql_fetch_assoc(@$nc);
								$nc = $nc['nc'];
								if($nc > 0)
								{
									$dcz = mysql_query('SELECT * FROM com_journal WHERE article_id = "'.$p.'" ORDER BY id DESC');
									while($dc = mysql_fetch_assoc($dcz))
									{
										$dmc = mysql_query('SELECT username, avatar_design, mood FROM phpbb_users WHERE user_id = "'.$dc['user_id'].'"');
										$dmc = mysql_fetch_assoc(@$dmc);
										
									?>
								
									<img src="/img/separator_bbr.gif" alt="separator" width="500" /><br />
									
									<table>
									<tr>
									<td>
									<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
									codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
									width="70" height="65" id="bbsmemb" align="middle"> 
									<param name="allowScriptAccess" value="sameDomain" /> 
									<param name="wmode" value="transparent" /> 
									<param name="movie" value="../img/member.swf" /> 
									<param name="quality" value="high" /> 
									<param name="menu" value="false" /> 
									<param name="bgcolor" value="#ffffff" /> 
									<param name="FlashVars" value="&m=<?php echo $dmc['mood']; ?>&ad=<?php echo $dmc['avatar_design']; ?>" /> 
									<embed src="../img/member.swf" quality="high" bgcolor="#ffffff" width="70" height="60" name="bbsmemb"
									align="middle" allowScriptAccess="sameDomain" wmode="transparent" menu="false" 
									FlashVars="&m=<?php echo $dmc['mood']; ?>&ad=<?php echo $dmc['avatar_design']; ?>"type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
									</object><br /> 
									<center><a href="/annuaire/?mid=<?php echo $dc['user_id']; ?>"><?php echo $dmc['username']; ?></a>
									</center> 
									</td>
									<td bgcolor="#FFFFFF">
									<span style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;color: #A06526;">
									<?php echo nl2br(stripslashes(stripslashes(@$dc['com']))); ?></span>
									<br />
									<img src="/img/spacer.gif" width="260" height="1" /><span class="infobeige" align="right"><?php echo 'le '.date('d/m/Y à H\hi', $dc['timestamp']);?></span>
									
									</td>
									</tr>
									</table>
									
									
								
									<img src="/img/separator_bbr.gif" alt="separator" width="500" /><br />
								
									<?php
									}
							
								}
								else
								{
								?>
									
								Il n'y a aucun commentaire<br />
									<?php
								}
								?>
								</div>
								
								<img src="/img/separator_bbr.gif" alt="separator" width="500" />
								
								
								<br />
								
								<u>Ajouter un commentaire :</u><br />
								<form method="post" action="postcom.php">
								<textarea  name="com" cols="65" rows="5">Le commentaire...</textarea><br /> 
								<input type="hidden" value="<?php echo $p; ?>" name="article" />
								<input type="submit" value="Envoyer" />
								</form>
								<br />
								<?php
								
							}
							else
							{
								echo '<a href="?p='.$p.'&amp;com=view#com">Voir les commentaires </a>';
							}
							?>
							</center>
							
							 
	<?php
	}
	else
	{
		echo ' :@ Erreur : Cet article n\'existe pas. <a href="/jt/">Retour</a>!';
	}
}
else
{
$dz = mysql_query('SELECT * FROM journal ORDER BY id  DESC LIMIT 1');
							 $dz = mysql_fetch_assoc($dz);
							 $dz = $dz['id'];
?>
<br /><br />
<center><img src="http://img4.hostingpics.net/pics/315282banniere.png" alt="banniere" /><br /><br />
<strong>Bienvenue sur Le P'tit Testoland, quel est son but ?</strong></center><br />

<br />

Salut à tous, chers testozs. Son but, c'est d'informer tous les membres de Testoland des actualités,<br />

des rumeurs.. Un vrai journal, quoi !!! En lisant les super articles de ce journal, vous serez au courant de beaucoup de choses..<br />

Ah oui, j'ai oublié de vous dire : Le p'tit Tesoland est le JOURNAL OFFICIEL de Testoland.com.<br />

Espérant que ce journal sera lu par la majorité des testozs, et qui ne sera pas oublié au fin fond des pages de vos historiques !<br />

<br />

Voici la liste des membres de l'équipe officielle des journalistes :<br />

<br />

- <strong>Pinako</strong> est l'administrateur de ce journal. Il s'occupe aussi bien du graphisme que de crée des articles.<br />


<br />

- <strong>Hercula</strong> est journaliste de Le p'tit Testoland. Elle s'occupe des photos/articles<br />

<br />

- <strong>Sakura</strong> est journaliste de Le p'tit Testoland. Elle s'occupe des photos/articles.<br />

<br />

- <strong>Meloue</strong> est journaliste de Le p'tit Testoland. Elle s'occupe des photos/articles.<br />

<br />

- <strong>Simon</strong> est journaliste de Le p'tit Testoland. Il s'occupe des photos/articles.<br /><br />

- <b>Anna</b> est journaliste de Le p'tit Testoland. Elle s'occupe des photos/articles.<br />
<br />

<strong>Vous voulez rejoindre l'équipe des journalistes ?</strong><br />

<br />

Recrutement fermé pour l'instant !<br />

<br /> <br />
<center> - <a href="?p=<?php echo $dz;?>">Lire les articles.</a><br />
- <a href="liste.php">Liste des articles</a> <br /><br />

<?php
}
}

?>
</center></span></td>
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