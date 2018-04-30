
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
$title='Effaceur';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>

  <!-- main content -->
<td valign="top">
		
		
		<?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir se rendre sur le Shopping :P !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter pour pouvoir se rendre sur le Shopping :P !';
}
else //si connecté
{
?>
<table width="468" border="0" cellpadding="0" cellspacing="0"> 
        <tr> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_jon_klr.gif" border="0" width="12" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_jon_klr.gif" border="0" width="444" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_jon_klr.gif" border="0" width="12" height="12"/></td> 
        </tr> 
        <tr bgcolor="#FEF3D7"> 
        
          <td>&nbsp;</td> 
          <td align="center"> 
            <div class='jon_klr'> 
                        <p><img src="http://01static.chapatiz.com/fr/modif_lang/name_header.gif" width="412" height="84" alt="image hname_header.gif"><br/> 
              
			  <?php
			if(isset($_POST['newpseudo']) && !empty($_POST['newpseudo']))
			{

				$new_pseudo = mysql_real_escape_string(htmlspecialchars($_POST['newpseudo']));
				$new_pseudo_min = strtolower($new_pseudo);
				$req = mysql_query('SELECT username FROM phpbb_users');
				$nbre = mysql_query('SELECT username FROM phpbb_users WHERE username = "'.$new_pseudo_min.'"');
				while($donnees = mysql_fetch_array($nbre))
				{
					$all_pseudo_min = strtolower($donnees['username']);
					if($new_pseudo_min == $all_pseudo_min)
					{
						$er1 = 1;
						break;
					}
					else
					{
						$er1 = 0;
					}
				}
				$carp = strlen($new_pseudo);
				if($carp <= 3)
				{
					$er2 = 1;
				}
				else
				{
					$er2 = 0;
				}
				if(eregi('[^a-zA-Z0-9_-]', $new_pseudo))
				{
					$er3 = 1;
				}
				else
				{
					$er3 = 0;
				}
					if($er1 == 1)
					{
						echo'Désolé ce pseudo est déjà utilisé.';
					}
					elseif($er2 == 1)
					{
						echo'Désolé ton pseudo n`\'a pas assez de caractère.';
					}
					elseif($er3 == 1)
					{
						echo'Ton pseudo contient un ou plusieurs caractères interdit.';
					}
					else
					{
						$req1 = mysql_query('SELECT money, user_id FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
						$done1 = mysql_fetch_assoc($req1);
						if($done1['money'] >= "100")
						{
							$money = $done1['money'] - 100;
							mysql_query('UPDATE phpbb_users SET money = "'.$money.'" WHERE user_id = "'.$done1['user_id'].'"');
							mysql_query('UPDATE phpbb_users SET username = "'.$new_pseudo.'" WHERE user_id = "'.$done1['user_id'].'"');
							echo'Bravo ton pseudo est bien modifié en <b>'.$new_pseudo.'</b> !';
						}
						else
						{
							echo 'Mon bobby quand on a pas de pepettes, on achète pas !';
						}
					}
			}
			?>
					

			  </div> 
          </td> 
          <td>&nbsp;</td> 
          
        </tr> 
        <tr> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_jon_klr.gif" border="0" width="12" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_jon_klr.gif" border="0" width="444" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_jon_klr.gif" border="0" width="12" height="12"/></td> 
        </tr> 
      </table> 
      
      <!-- end main content --> 
    </td> 
  </tr> 
</table> 

<?php
}
include('../bbs/includes/bas.php'); 
?>