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
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);
session_start();

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
function ChaineAleatoire($nbcar)
{
	$chaine = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

	srand((double)microtime()*1000000);

	$variable='';
        
	for($i=0; $i<$nbcar; $i++) $variable .= $chaine{rand()%strlen($chaine)};
	return $variable;
}
$_SESSION['Captcha'] = ChaineAleatoire(5);


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
			   <form method="post" action="recupok.php"> 
                           <br /><br /> <b>Pseudo : </b><br> <br />
				<input name="pseudo" type="text" value="" size="25" /><br /><br />
                            <b>Email : </b><br> <br />
		           <input name="email" type="text" value=""/><br /><br /><em>L'adresse email doit être celle du compte .</em><br /> <br /><br />
				<br /> <br /><b>Captcha :</b><br> <br /><?php echo '<img src="captcha.php?PHPSESSID='.session_id().'" alt="Recopiez le code"/>'; ?>
<br /><br /><br />Recopiez le code ici : <input name="captcha" type="text" value="" size="5" /><br /> <br /><br />

					<br /><br />  <input type="submit" name="envoie" value="Envoie moi ce maudit mot de passe !" />                   								
					  </form> 

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