<?php


define('IN_PHPBB', true);
$phpbb_root_path = '../bbs/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
session_start();
$_SESSION['Captcha'] = ChaineAleatoire(5);
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
$title='Inscription';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);


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
					  <?php
if($userdata['username'] != "Anonymous"){
	echo "Tu ne peux pas t'inscrires, tu es déjà connecté au site !";
}
else if($ip == "24.122.166.131" || $ip == "141.0.8.142") {
	echo "Accès refusé !";
}
else {






 ?>
                          <span class="titrebleu">Inscription</span><br /> <br />
                            <em>&quot;Tu veux nous rejoindre ? ...&quot;</em> 
                            <br> 
                            <br> 
			   <form method="post" action="registerok.php"> 
			   <?php
					if(isset($_GET['pid']) && !empty($_GET['pid'])) {
					$pid = (int)$_GET['pid'];
						$req =  mysql_query('SELECT username, avatar_design, mood FROM phpbb_users WHERE user_id = "'.$pid.'"');
						$ftch = mysql_fetch_assoc($req);
						echo '<font color="#DC1B1B"><b>Ton parrain est '.$ftch['username'].'.</b></font><br />';
						echo '<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="100" height="95" id="bbsmemb" align="middle">
							 <param name="allowScriptAccess"value="always" /> 
							 <param name="movie" value="../img/member.swf" /> 
							 <param name="quality" value="high" />
							 <param name="menu" value="false" />
							 <param name="wmode" value="transparent" />
							 <param name="FlashVars" value="ad='.$ftch['avatar_design'].'&amp;m='.$ftch['mood'].'" /> 
							 <embed  src="../img/member.swf" quality="high" bgcolor="#FFF4D6" width="100" height="95" name="bbsmemb" 
							 align="middle" menu="false" wmode="transparent" allowScriptAccess="always" FlashVars="ad='.$ftch['avatar_design'].'&amp;m='.$ftch['mood'].'"
							 type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> </object> <br />';
						echo '<input type="hidden" name="pid" value="'.$pid.'" />';
					}
				?> 
						
                           <br /><br /> <b>Pseudo : </b><br> <br />
				<input name="pseudo" type="text" value="" size="25" /><br /><br />		           <em>4 caractères min - 15 max.</em> <br /> <br /><br />
                            <b>Email : </b><br> <br />
		           <input name="email" type="text" value=""/><br /><br /><em>Une adresse email valide est <b>obligatoire</b> sinon vous ne recevrez pas le mot de passe.</em><input class="cfrm" name="host" type="text" value=""/><br /> <br /><br />
				<br /> <br /><b>Captcha :</b><br> <br /><?php echo '<img src="captcha.php?PHPSESSID='.session_id().'" alt="Recopiez le code"/>'; ?>
<br /><br /><br />Recopiez le code ici : <input name="captcha" type="text" value="" size="5" /><br /> <br /><br />

					<br /><br />  <input type="submit" name="envoie" value="Je veux m'inscrire ARGH !" />                   								
					  </form> 
						<?php
						}
						?>

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