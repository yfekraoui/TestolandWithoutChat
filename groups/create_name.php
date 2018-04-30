
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
$title='Groupes';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>
<td valign="top">
<!-- main content -->
<table width="630" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">

            <!-- slot speech -->
              

            <!-- slot pendings on demand -->

            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="435" height="11"></td></tr>

            <!-- slot my groups -->
              <tr>

                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.gif" border="0" width="12" height="12"/></td>
					</tr></table>				</td>
              </tr>
              <tr>

                <td bgcolor="#6EBEF0">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center">
<?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir créer un groupe !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour pouvoir créer un groupe!";
}
else {

$verifx = mysql_query('SELECT COUNT(*) AS mm FROM phpbb_groups WHERE group_moderator = "'.$userdata['user_id'].'"');
		$verif = mysql_fetch_assoc($verifx);
		$mm = $verif['mm'];
		if($mm > 0)
		{
		?>
		<b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						Tu as déjà créer un groupe !
                      </div> 
          <?php
		  }
		 else
		 {
?>
                       <b class="titrebleu">Choisis un nom pour ton groupe !</b>
                       <br />
                       <br />
					   
					   <div align="left"> 
 
                      <b>1.</b> Ne te précipite pas, réfléchis bien au nom (au moins 5 lettres), vérifie l'orthographe, car <b>tu ne pourras pas le changer</b> une fois le groupe créé, alors pas d'erreur !
                      <br /> 
 
                      <b>2.</b> Ne mets pas add <b>&quot;[Clan]&quot;</b> ou <b>&quot;[Horde]&quot;</b>.. Dans le nom, cela se fait après.
                      <br /> 
 
                      <b>3.</b> Ne mets pas <b>d'insultes, d'injures, de grossieretés</b> dans le nom, cela ferait fermer le groupe, et tu ne pourras plus en ouvrir par la suite.
                      <br /> 
 
                      <b>4.</b> N'essaie pas de <b>faire passer ton groupe pour un autre</b> car, encore une fois, cela entrainera à la fermeture du groupe, et tu seras interdit d'en créer d'autres dans le futur.
                      <br /> 
 
                      </div> 
                      <br />
                      
                      <br />
					  
					  <?php 
						if(isset($_POST['nwgrp_blason']) && !empty($_POST['nwgrp_blason']))
						{
							$code_blason = htmlspecialchars($_POST['nwgrp_blason']);
						}
						else if(isset($_GET['blason']) && !empty($_GET['blason']))
						{
							$code_blason = htmlspecialchars($_GET['blason']);
						}
					  ?>
					  
					  <form action="create_confirm.php" method="POST">
                          <input type="text" name="grp_name" size="50" maxlength="50" value="" /> 
						  <input type="hidden" name="grp_blason" value="<?php echo $code_blason; ?>" />
                          <input type="submit" name="validate" value="OK!" /> 
                      </form> <br />
					  <br /><br />
					  <img src="/img/annuaire/puce_slot_small.png" alt="puce" /><a href="create_blason.php">Changer l'emblême.</a>
	<?php
	} 
	}
	?>
                           <table width="100%" cellspacing="0" cellpadding="1">
                              <tr>
                                  <td align="center"></td>
                                  <td width="1%">&nbsp;</td>
                              </tr>
							  
							 
                                                            </table>

                    
                     
                
				

                                                      </td>
                    </tr>
                  </table>               </td>
              </tr>
              <tr>
                <td>

					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.gif" border="0" width="12" height="12"/></td>
					</tr></table>				</td>
              </tr>

            <!-- slot my groups -->
            </table>
      </td>





       <?php include('right.php');

include('../bbs/includes/bas.php');  
	   ?>
        </tr>
</table>
