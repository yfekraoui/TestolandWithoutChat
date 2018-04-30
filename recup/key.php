
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
$title='Récupération de mot de passe';
$css='../css/style2.css';
$include='../bbs/includes/';
session_start();
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
		$key = mysql_real_escape_string(htmlspecialchars($_GET['k']));
		if (isset($key) && !empty($key))
		{
			
			$nbres = mysql_query('SELECT COUNT(*) AS exist FROM recup_mdp WHERE keyz = "'.$key.'"');
			$aok = mysql_fetch_array($nbres);
			if($aok['exist'] != 0)
			{
				$nbre = mysql_query("SELECT user_id FROM recup_mdp WHERE keyz ='$key'");
				$donnees = mysql_fetch_array($nbre);
				$id_membre = $donnees["user_id"];
				$new_password = random2(10);
				$password = md5($new_password);
				$pass_pass = $new_password;
				$sql = "UPDATE phpbb_users SET user_password = '$password' WHERE user_id = '$id_membre'";
				$res = mysql_query($sql) or die(mysql_error());
				$test = mysql_query("DELETE FROM recup_mdp WHERE user_id = '$id_membre'");
				$nbre = mysql_query("SELECT user_email, username FROM phpbb_users WHERE user_id ='$id_membre'");
				$donnees = mysql_fetch_array($nbre);
				$destinataire = $donnees["user_email"];
						$objet = "Récupération du mot de passe !" ;
						$message = '
						<html>
						<head>
						</head>
						<body>

						<tr>Voici vos identifiants pour vous permettre de vous connectez au site et au tchat :<br /><br /><br /><br />
						<div align="left">Pseudo : <b>'.$donnees["username"].'</b><br /><br /><br /><br />
						Mot de passe : <b>'.$pass_pass.'</b></th><br /><br /><br /><br />
						Gardez ces informations bien au chaud !
						</tr>
						</body>
						</html>';



						$headers = "MIME-Version: 1.0\n";
						$headers .= "Content-type: text/html; charset=iso-8859-1\n";

						$headers .= "From: Testoland <robot@testoland.com>\n";
						if ( mail($destinataire, $objet, $message, $headers) ) echo "Le nouveau mot de passe a été envoyé à votre adresse email !";
						else echo "Echec de l’envoi du mail.";
			}
			else
			{
				$error = TRUE;
				$erreur.= "Erreur cette key n'existe pas !<br /><br />";
			}
		}
		else
		{
			$error = TRUE;
			$erreur.= "Erreur cette key n'existe pas !<br /><br />";
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