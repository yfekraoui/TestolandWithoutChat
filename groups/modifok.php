
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

if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir créer un groupe !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour pouvoir créer un groupe!";
}
else {
if(isset($_POST['gid']) && !empty($_POST['gid']))
{
$gid = (int)$_POST['gid'];
}
else
{
}
if(isset($gid) && !empty($gid) && $gid > 5)
{
	$rexx = mysql_query('SELECT COUNT(*) AS ng FROM phpbb_groups WHERE group_id = "'.$gid.'"');
	$rex = mysql_fetch_assoc($rexx);
	$ng = $rex['ng'];
	$rx = mysql_query('SELECT COUNT(*) AS rx FROM phpbb_groups WHERE group_id = "'.$gid.'" AND group_moderator = "'.$userdata['user_id'].'"');
	$rx = mysql_fetch_assoc($rx);
	$xx = $rx['rx'];
	if($ng == 0)
	{
		 ?>
						<b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   
					   <div align="center">
					   Ce groupe n'existe pas.
					   </div>
					   <br />
					   <?php
					   }
					   elseif($xx == 0)
					   {
							echo 'Erreur tu n\'est pas moderateur de ce groupe !';
						}
					   else
					   {
							$description = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['description'])));
							$type_groupex = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['type_groupe'])));
							$type_groupe = (int)$type_groupex;
							$devise = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['devise'])));
							$localisation = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['localisation'])));
							$type = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['type'])));
							$ololz = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$gid.'"');
							$ololz = mysql_fetch_assoc($ololz);
							$gname = stripslashes($ololz['group_name']);
							mysql_query('UPDATE phpbb_groups SET group_name = "'.$gname.'", group_description = "'.$description.'", group_type = "'.$type_groupe.'", devise = "'.$devise.'", localisation = "'.$localisation.'", type = "'.$type.'" WHERE group_id = "'.$gid.'"');
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
					  
					  
					  <b class="titrebleu">Bravo !</b>
                       <br />
                       <br />
					   
					   <div align="center">
					   Les informations de ton groupe sont bien modifier.
					   </div>
					   <br />
					  
					  
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
					   <?php
			
	
					   }
}
} 



include('../bbs/includes/bas.php'); 
 
?>
