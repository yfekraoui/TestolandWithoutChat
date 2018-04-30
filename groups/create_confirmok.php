
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
					if(isset($_GET['name']) && !empty($_GET['name']) && isset($_GET['blason']) && !empty($_GET['blason']))
					{
					   $name = mysql_real_escape_string(htmlspecialchars(stripslashes($_GET['name'])));
					   $blason = mysql_real_escape_string(htmlspecialchars($_GET['blason']));
					   
					   $nbc_name = strlen($name);
					   $rexopied = mysql_query('SELECT COUNT(*) AS nbn FROM phpbb_groups WHERE group_name = "'.$name.'"');
					   $rexgd = mysql_fetch_assoc($rexopied);
					   $nbn = $rexgd['nbn'];
					   
					   if($nbc_name > 50)
					   {
					   ?>
					   <b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						EPIC FAIL !
                      </div> 
                      
					  					   <?php
					   }
					   else if($nbc_name <= 5)
					   {
					   ?>
					   <b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						EPIC FAIL !
                      </div> 
					   <?php
					   }
					   else if($nbn > 0)
					   {
					   ?>
					    <b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						EPIC FAIL !
                      </div> 
					   <?php
					   }
					    else if($blason == "E1f07" ||  $blason == "E1F07" || $blason == "e1F07")
					   {
					   ?>
					    <b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						EPIC FAIL !
                      </div> 
					   <?php
					   }
					   else
					   {
					   ?>
					  <b class="titrebleu">Bravo !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
 
                      <b> Ton groupe a été créé correctement ! </b>
					  <br />
					  <br />
						<?php
						$tim = time();
						mysql_query('INSERT INTO phpbb_groups VALUES ("", "2", "'.$name.'", "En construction...", "'.$userdata['user_id'].'", "", "En construction...", "'.$blason.'", "0", "'.$tim.'", "Pas de localisation", "0", "0","0", "0", "0", "0", "0", "0","0", "0", "0", "0", "0", "0", "0", "Group" )');
						?>
				 
				
				Il apparaîtra dans la liste de groupes,<b> dans quelques minutes !</b>
						
                      </div> 
                      
					  
				<?php
}
}
else
{
	echo 'EPIC FAIL !!';
}
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
