
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
$title='Cabine Rapide';
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
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir modifier son pseudo !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour changer son pseudo !";
}
else {






 ?>
                          <span class="titrebleu">Changer de MajMiN ! </span><br /> 
                            <em>&quot;Un bon MajMiN, c'est un plus pour ta reconnaissance dans la communaut&eacute;...&quot;</em> 
                            <br> 
                            <br> 
                            <b>Un MajMiN c'est quoi ?</b><br> 
                        Le MajMiN ( <b>Maj</b>uscules <b>Min</b>uscules ) c'est l'apparence de ton pseudo.<br> 
                        Par exemple, Andre et AnDRe c'est le m&ecirc;me pseudo, c'est juste le MajMiN qui change. <br> 
                        <br> 
                        <b>Tu peux changer de MajMiN quand tu le souhaites.</b><br> 
                        Tu peux changer uniquement le MajMiN des lettres, tu ne peux pas en rajouter, tu ne peux pas en enlever, tu ne peux pas &eacute;changer une lettre par une autre. <br> 
                            <br> 
							
												
							
							<br />						
                            Le MajMiN actuel de ton pseudo: 
							<br /> 
							<br /> 
							<b><?php echo $userdata['username']; ?></b> <br /> 
					  <form method="post" action="majminr.php"> 
					  
                      Ton nouveau MajMiN:
					  <br /> 
					  <br /> 
					  <b>
					  <input name="pseudo" type="text" value="<?php echo $userdata['username']; ?>" size="25" />
					  </b>			  <br /> 
					  <br /> 
					  <input type="submit" name="majmin_submit" value="Aller ! Change mon MajMiN !" />                   								
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