
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
function random2($car2) {
$string2 = "";
$chaine2 = "0123456789ABCDEFGHIJKLMNOPRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
srand((double)microtime()*1000000);
for($i=0; $i<$car2; $i++) {
$string2 .= $chaine2[rand()%strlen($chaine2)];
}
return $string2;
}
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
else if($userdata['user_level'] == "1")
{
	if(!empty($_GET['pseudo']))
	{

	$pseudo = mysql_real_escape_string(htmlspecialchars($_GET['pseudo']));
	$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo'");
	$donnees = mysql_fetch_array($nbre);
	if($donnees['exist'] != 0)
	{
		$sql = 'SELECT username, user_email FROM phpbb_users WHERE username = "'.$pseudo.'"';
		$res = mysql_query($sql) or die(mysql_error());
		$ttt = mysql_fetch_assoc($res);
		$destinataire = $ttt['user_email'];
		$pseudo = $ttt['username'];
		$new_password = random2(10);
		$password = md5($new_password);
		$pass_pass = $new_password;
		mysql_query('UPDATE phpbb_users SET user_password = "'.$password .'" WHERE username = "'.$pseudo.'"');
		$objet = "Testoland: Renvois de mot de passe !" ;
								$message = '
								<html>
								<head>
								</head>
								<body>

								<tr>Ton mot de passe vient d\'être changer par un administrateur, voici vos identifiants pour vous permettre de vous connectez au site et au tchat :<br /><br /><br /><br />
								<div align="left">Pseudo : <b>'.$pseudo.'</b><br /><br /><br /><br />
								Mot de passe : <b>'.$pass_pass.'</b></th><br /><br /><br /><br />
								Gardez ces informations bien au chaud !
								</tr>
								</body>
								</html>';



								$headers = "MIME-Version: 1.0\n";
								$headers .= "Content-type: text/html; charset=iso-8859-1\n";

								$headers .= "From: Testoland <robot@testoland.org>\n";
								if ( mail($destinataire, $objet, $message, $headers) ) echo "Le mail est bien envoyé + mdp changé!";
								else echo "Echec de l’envoi du mail.";
			
			echo 'Retour à l\'admin <a href="/admin/">clique</a>.';
	}
	else {
		echo "Membre incoonu.";
	}
	}
	else
	{
		?>
		<form method="get" action="">
		<input type="text" name="pseudo" /><input type="submit" value="Envoyer" />
		</form>
		<?php
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