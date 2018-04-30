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
$title='Inscription';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);
session_start();

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu



function random1($car1) {
$string1 = "";
$chaine1 = "0123456789";
srand((double)microtime()*1000000);
for($i=0; $i<$car1; $i++) {
$string1 .= $chaine1[rand()%strlen($chaine1)];
}
return $string1;
}


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
<td valign="top"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

 <table border="0" cellspacing="0" cellpadding="0" class="mainTable"> 
<tr> 
<td valign="top"> 
</td> 
<td valign="top"> 
<!-- main content --> 
<table width="630" border="0" cellspacing="0" cellpadding="5"> 
        <tr> 
          <td valign="top"> 
            <table width="435" border="0" cellpadding="0" cellspacing="0"> 
              <!-- MajMiN --> 
              <tr> 
                <td align="left"><img src="/img/bg_top_grandbleu.gif" width="620" height="11"></td> 
              </tr> 
              <tr> 
                <td background="/img/bg_tile_grandbleu.gif" bgcolor="#DCEAF5"> 
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5"> 
                    <tr> 
                      <td align="center"> 

                          <span class="titrebleu">Inscription</span><br /> <br />
                            <em>&quot;Tu veux nous rejoindre ? ...&quot;</em> 
                            <br> 
                            <br> 
                           <br /><br /> <b>
<?php
		$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
		$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
		$fakep = false;
		$tpa = true;
		$ipx = $_SERVER['REMOTE_ADDR'];
		if(isset($_POST['pid'])) {
			$pid = (int)$_POST['pid'];
			$req = mysql_query('SELECT ipconnexion FROM phpbb_users WHERE user_id = "'.$pid.'"');
			$aso = mysql_fetch_assoc($req);
			$xaso = explode(',', $aso['ipconnexion']);
			for($i=0; $i < count($xaso); $i++) {
				if($xaso[$i] == $ip) {
					$fakep = true;
					break;
				}
			}
			if(!$fakep) {
				$req = mysql_query('SELECT money FROM phpbb_users WHERE user_id = "'.$pid.'"');
				$aso = mysql_fetch_assoc($req);
				$ppt = $aso['money'] + 50;
				mysql_query('UPDATE phpbb_users SET money = "'.$ppt.'" WHERE user_id = "'.$pid.'"');
			}
			else {
				echo 'La triche au parrainage est interdite, ton inscription est annulé.<br />';
				$tpa = false;
			}
		}
				
		if($_SESSION['Captcha']) {
		if ($tpa && !empty($pseudo) && !empty($email) && empty($_POST['host']) && !empty($_POST['captcha']) && !empty($_SESSION['Captcha']) && $_SESSION['Captcha'] !=  "")
		{
			$error = FALSE;
			$erreur = "";
			if(eregi('[^a-zA-Z0-9_-]', $pseudo))
			{
				$error = TRUE;
				$erreur.= "Votre pseudo contient un caractère special non autorisé <br /><br />";
			}
			if (strlen($pseudo) < 4 || strlen($pseudo) > 15)
			{
				$error = TRUE;
				$erreur.= "Votre pseudo est soit trop long, soit trop petit <br /><br />";
			}
			if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*?[a-z]+$/is', $email))
			{
				$error = TRUE;
				$erreur.= "Votre adresse email est fausse <br /><br />";
			}
			if($_POST['captcha']==$_SESSION['Captcha'])
			{
			}
			else
			{
				$error = TRUE;
				$erreur.= "Le code du captcha est faux, êtes vous vraiment un humain :o) ?";
			}
			if($error != TRUE)
			{
				$signeee = random1(1);
				if($signeee == "0")
				{
					$sign_astro = "Dupatta brulant de terre";
				}
				else if($signeee == "1")
				{
					$sign_astro = "Lapin brillant de l\'eau";
				}
				else if($signeee == "2")
				{
					$sign_astro = "Bacteria rouge du feu";
				}
				else if($signeee == "3")
				{
					$sign_astro = "Corbeau d\'or de l\'eau";
				}
				else if($signeee == "4")
				{
					$sign_astro = "Dupatta brillant de l\'eau";
				}
				else if($signeee == "5")
				{
					$sign_astro = "Lapin brulant de terre";
				}
				else if($signeee == "6")
				{
					$sign_astro = "Lapin orange de l\'eau";
				}
				else if($signeee == "7")
				{
					$sign_astro = "Dragon bleu du ciel";
				}
				else if($signeee == "8")
				{
					$sign_astro = "Dragon brillant de l\'eau";
				}
				else if($signeee == "9")
				{
					$sign_astro = "Oursin brillant du feu";
				}
				else if($signeee == "10")
				{
					$sign_astro = "Oursin brulant de l\'eau";
				}
				$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudo'");
				$donnees = mysql_fetch_array($nbre);
				if($donnees['exist'] == 0)
				{
					$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE user_email ='$email'");
					$donnees = mysql_fetch_array($nbre);
					if($donnees['exist'] == 0)
					{
						if(isset($ipx) && !empty($ipx))
						{
							if(preg_match("#^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$#", $ipx))
							{
								$nbre = mysql_query("SELECT user_id FROM phpbb_users ORDER BY user_id DESC LIMIT 1 ");
								$donnees = mysql_fetch_array($nbre);
								$icq = "0";
								$website = "";
								$occupation = "";
								$moneyp = 100;
								if($fakep) {
									$moneyp = $moneyp + 40;
								}
								$location = "";
								$website = "";
								$interests = "";
								$signature = "";
								$signature_bbcode_uid = "";
								$avatar_sql = "";
								$viewemail = "";
								$aim = "";
								$yim = "";
								$msn = "";
								$attachsig = "1";
								$allowsmilies = "1";
								$allowhtml = "";
								$allowbbcode = "1";
								$allowviewonline = "1";
								$notifyreply = "";
								$notifypm = "1";
								$popup_pm = "1";
								$user_timezone = "2";
								$user_dateformat = "D M d, Y H:i";
								$user_lang = "french";
								$user_style = "1";
								$avatar_design = "r;1;1;1;1;1;1";
								$new_password = random2(10);
								$password = md5($new_password);
								$pass_pass = $new_password;
								$user_id = $donnees["user_id"];
								$user_id++;
								$sql = "INSERT INTO phpbb_users	(user_id, username, user_regdate, user_password, user_email,  user_attachsig, user_allowsmile, user_allowbbcode, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_timezone, user_dateformat, user_lang, user_style, user_level, avatar_design, user_sexe, user_active, ban, online, sign, lastip, ipconnexion, money)
									VALUES ($user_id, '" . str_replace("\'", "''", $pseudo) . "', " . time() . ", '$password', '" . str_replace("\'", "''", $email) . "', '$attachsig', '$allowsmilies', '$allowbbcode', '$allowviewonline', '$notifyreply', '$notifypm', '$popup_pm', '$user_timezone', '" . str_replace("\'", "''", $user_dateformat) . "', '" . str_replace("\'", "''", $user_lang) . "', $user_style, 0, '$avatar_design', 'inconnu', 1, '0', '0', '" . $sign_astro . "', '".$ipx."', ',".$ipx."', '".$moneyp."')";
								$res = mysql_query($sql) or die(mysql_error());
								$destinataire = $email;
								$objet = "Bienvenue sur Testoland !" ;
								$message = '
								<html>
								<head>
								</head>
								<body>

								<tr>Merci pour votre inscription sur notre site, voici vos identifiants pour vous permettre de vous connectez au site et au tchat :<br /><br /><br /><br />
								<div align="left">Pseudo : <b>'.$pseudo.'</b><br /><br /><br /><br />
								Mot de passe : <b>'.$pass_pass.'</b></th><br /><br /><br /><br />
								Gardez ces informations bien au chaud !
								</tr>
								</body>
								</html>';



								$headers = "MIME-Version: 1.0\n";
								$headers .= "Content-type: text/html; charset=iso-8859-1\n";

								$headers .= "From: Testoland <robot@testoland.org>\n";
								if ( mail($destinataire, $objet, $message, $headers) ) echo "Inscription reussie : le mot de passe est dans votre boite mail !";
								else echo "Echec de l’envoi du mail.";
							}
							else
							{
								$error = TRUE;
								@$erreur.= "Ton ip n'est pas valide <br /><br />";
							}
						}
						else
						{
							$error = TRUE;
							@$erreur.= "Ton ip n'est pas valide² <br /><br />";
						}
					}
					else
					{
						$error = TRUE;
						@$erreur.= "L'adresse email existe déjà ! <br /><br />";
					}
				
				}
				else
				{
					$error = TRUE;
					@$erreur.= "Le pseudo existe déjà ! <br /><br />";
				}
			}
		}
		else
		{
			$error = TRUE;
			@$erreur.= "Certains champs ne sont pas remplit ...<br /><br />";
		}
		}
		if($error == TRUE)
		{
			echo @$erreur;
		}
?>
</b><br> <br />


						</td> 
                    </tr> 
                  </table> 
                </td> 
              </tr> 
              <tr> 
                <td><img src="/img/bg_bottom_grandbleu.gif" width="620" height="11"></td> 
              </tr> 
 
            </table> 
          </td> 
<?php
include('../bbs/includes/bas.php'); 
?>