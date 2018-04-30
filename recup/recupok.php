<?php

define('IN_PHPBB', true);
$phpbb_root_path = '../bbs/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
session_start();
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
$title='Récupération de mot de passe';
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

                          <span class="titrebleu">Récupération de mot de passe</span><br /> <br />
                            <em>&quot;Tu veux récuperer un mot de passe ? ...&quot;</em> 
                            <br> 
                            <br> 
                           <br /><br /> <b>
<?php
		$pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
		$email = mysql_real_escape_string(htmlspecialchars($_POST['email']));
		$error = "";
		if (isset($pseudo) && isset($email) && !empty($pseudo) && !empty($email))
		{
			if($_POST['captcha']==$_SESSION['Captcha'])
			{
			}
			else
			{
				$error = TRUE;
				$erreur.= "Le code du captcha est faux, êtes vous vraiment un humain :o) ?";
			}
			
			$nbre = mysql_query("SELECT username, user_id FROM phpbb_users WHERE user_email ='$email'");
			$donnees = mysql_fetch_array($nbre);
			{
				if(strtolower($donnees["username"]) == strtolower($pseudo) && $error != TRUE)
				{
						$id = $donnees["user_id"];
						$new_password = random2(5);
						$key = md5($new_password);
						$key.= $id;
						$nbres = mysql_query('SELECT COUNT(*) AS exist FROM recup_mdp WHERE user_id = "'.$id.'"');
						$aok = mysql_fetch_array($nbres);
						if($aok['exist'] == 0)
						{
							$sql = "INSERT INTO recup_mdp (id, user_id, keyz) VALUES ('', '$id', '$key')";
							$res = mysql_query($sql) or die(mysql_error());
						}
						else
						{
							$sql = "UPDATE recup_mdp SET keyz = '$key' WHERE user_id = '$id'";
							$res = mysql_query($sql) or die(mysql_error());
						}
						$destinataire = $email;
						$objet = "Récupération du mot de passe !" ;
						$message = '
						<html>
						<head>
						</head>
						<body>

						<tr>Voici le lien pour pouvoir activer votre nouveau mot de passe : <a href="http://testoland.org/recup/key.php?k='.$key.'">ici </a><br /><br /><br /><br />
						</tr>
						</body>
						</html>';



						$headers = "MIME-Version: 1.0\n";
						$headers .= "Content-type: text/html; charset=iso-8859-1\n";

						$headers .= "From: Testoland <zarbox@testoland.org>\n";
						if ( mail($destinataire, $objet, $message, $headers) ) echo "Le lien de confirmation a été envoyé à l'adresse indiquée !";
						else echo "Echec de l’envoi du mail.";
				}
				else
				{
					$error = TRUE;
					$erreur.= "L'email ou le pseudo ne correspondent pas .<br /><br />";
				}
			}
		}
		else
		{
			$error = TRUE;
			$erreur.= "Champs non remplit .<br /><br />";
		}
			
		if($error == TRUE)
		{
			echo $erreur;
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