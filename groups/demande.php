
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
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_klr.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_klr.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_klr.gif" border="0" width="12" height="12"/></td>
					</tr></table>				</td>
              </tr>
              <tr>

                <td bgcolor="#D5E6F3">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center">
<?php
if (!isset($userdata['session_logged_in'])) {
	$titre = "Erreur :@ !";
	$message = 'Il faut être connecté pour accèder a cette page !';
}
else if($userdata['username'] == "Anonymous"){
	$titre = "Erreur :@ !";
	$message = 'Il faut être connecté pour accèder a cette page !';
}
else {

$gid = (int)$_GET['gid'];

if(isset($_GET['gid']) && !empty($gid) && $gid > 5)
{
	$rexx = mysql_query('SELECT COUNT(*) AS ng FROM phpbb_groups WHERE group_id = "'.$gid.'"');
	$rex = mysql_fetch_assoc($rexx);
	$ng = $rex['ng'];
	if($ng == 0)
	{
		$titre = "Erreur :@ !";
		$message = 'Ce groupe n\'existe pas !';
	}
	else
	{
		$prc = mysql_query('SELECT COUNT(*) AS nm FROM  phpbb_user_group WHERE group_id = "'.$gid.'"');
		$pr = mysql_fetch_assoc($prc);
		$prcx = mysql_query('SELECT COUNT(*) AS nmx FROM  phpbb_demande_group WHERE group_id = "'.$gid.'"');
		$prx = mysql_fetch_assoc($prcx);
		$nmx = $prx['nmx'];
		$nm = $pr['nm'];
		$nm = $nm + $nmx;
		if($nm >= 20)
		{
			$titre = "Erreur :@ !";
			$message = 'Ce groupe n\'a plus de place !';
		}
		else
		{
			$rxx = mysql_query('SELECT COUNT(*) AS nl FROM phpbb_user_group WHERE user_id = "'.$userdata['user_id'].'"');
			$rx = mysql_fetch_assoc($rxx);
			$nl = $rx['nl'];
			$rcc = mysql_query('SELECT COUNT(*) AS nc FROM phpbb_demande_group WHERE user_id = "'.$userdata['user_id'].'"');
			$rc = mysql_fetch_assoc($rcc);
			$nc = $rc['nc'];
			if($userdata['level'] >= 15)
			{
				$nl = $nl-1;
			}
			if($userdata['level'] >= 20)
			{
				$nl = $nl-1;
			}
			if($userdata['user_level'] >= 1)
			{
				$ndi = $nc + $nl - 1;
			}
			else
			{
				$ndi = $nc + $nl;
			}
			if($ndi >= 1)
			{
				$titre = "Erreur :@ !";
				$message = '<b>Tu as atteint ton quotta de groupes !</b><br />
								Tu dois <b>quitter un groupe</b> pour <b>joindre</b> celui-ci!
								<br /><br />Pour plus d\'info, vérifie <a href="/niveaux/">le tableau de niveau</a>.';
								
			}
			else
			{
				$rdjx = mysql_query('SELECT COUNT(*) AS rdj FROM phpbb_user_group WHERE group_id = "'.$gid.'" AND user_id = "'.$userdata['user_id'].'"');
				$rdj = mysql_fetch_array($rdjx);
				$dj = $rdj['rdj'];
				$rgjx = mysql_query('SELECT COUNT(*) AS rgj FROM phpbb_demande_group WHERE group_id = "'.$gid.'" AND user_id = "'.$userdata['user_id'].'"');
				$rgj = mysql_fetch_array($rgjx);
				$gj = $rgj['rgj'];
				$zxer = mysql_query('SELECT group_moderator FROM phpbb_groups WHERE group_id = "'.$gid.'"');
				$zxer = mysql_fetch_assoc($zxer);
				
				if($zxer['group_moderator'] == $userdata['user_id'])
				{
					$titre = "Erreur :@ !";
					$message = 'Tu es déjà le modérateur de ce groupe !';
				}
				elseif($dj > 0)
				{
					$titre = "Erreur :@ !";
					$message = 'Tu es déjà inscris à ce groupe!';
				}
				elseif($gj > 0)
				{
					$titre = "Erreur :@ !";
					$message = 'Tu as deja une demande a ce groupe !';
						
				}
				else
				{
					$rexx4 = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$gid.'"');
					$rex4 = mysql_fetch_assoc($rexx4);
					$uhuhuhuh = stripslashes($rex4['group_name']);
					if(isset($_GET['mode']) && $_GET['mode'] == "demande" && $rex4['group_type'] == 2)
					{
						if($rex4['group_type'] == 2)
						{
							mysql_query('INSERT INTO phpbb_demande_group VALUES ("'.$gid.'", "'.$userdata['user_id'].'")');
							$titre = "Bravo !";
							$message = 'Ta demande a été envoyé correctement au groupe <br />
													<b> '.$uhuhuhuh.' </b> et sera valide pendant 15 jours! <br /><br />
													Maintenant tu dois attendre jusqu\'à ce que le créateur du groupe <b>t\'acceptes</b> !';	
							
						}
						else
						{
							$titre = "Erreur :@ !";
							$message = 'Requete erronée';
						}
					}
					else
					{
						$rexx5 = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$gid.'"');
						$rex5 = mysql_fetch_assoc($rexx5);
						if($rex5['group_type'] == 0)
						{
							mysql_query('INSERT INTO phpbb_user_group VALUES ("'.$gid.'", "'.$userdata['user_id'].'", "0", "0", "0", "0", "0", "0", "0", "0" )');
							$titre = "Bravo !";
							$message = 'Tu es maintenant un membre officiel du groupe <br /><b> '.$uhuhuhuh.' </b>';			
									
						
						}
						else
						{
							$titre = "Erreur :@ !";
							$message = 'Requete erronée';
						}
								
					}					  
				}
			}
		}
	}
}
else
{
					  $titre = "Erreur :@ !";
					  $message = 'Requete erronée';
						
}
	
					
}
	?>
          <b class="titrebleu"><?php echo $titre;?></b>
                       <br />
                       <br />
					   
					   <div align="center">
					   <?php echo $message;?>
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
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_klr.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_klr.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_klr.gif" border="0" width="12" height="12"/></td>
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
