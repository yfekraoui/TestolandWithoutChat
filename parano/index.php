
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
$title='Parano >_< !';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu

//--------------------------------------
$ip = $_SERVER['REMOTE_ADDR'];
$ipt = mysql_query('SELECT lastip FROM phpbb_users WHERE user_id= "'.$userdata['user_id'].'"');
$ipt = mysql_fetch_assoc($ipt);
$ipt = $ipt['lastip'];
$ips = mysql_query('SELECT ipconnexion FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
$ips = mysql_fetch_assoc($ips);
$ips = $ips['ipconnexion'];
//--------------------------------------
?>
<!-- main content -->

<td valign="top">
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">
			
				
              <tr>
                <td align="left">
				<img src="header_parano.gif" alt="header_parano" />
                </td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5" align="center">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">

                    <tr>
                      <td>


                      <div align="center">
					  <?php
					  if (!isset($userdata['session_logged_in'])) {
							echo 'Il faut être connecter';
						}
						else if($userdata['username'] == "Anonymous"){
							echo 'Il faut être connecter';
						}
						else {
						?>
                       <span class="titrebleu">Quelqu'un se connecte t-il avec ton perso sur testoland ?<br /><br />
					   Connexion actuelle<br />
					   </span>
					   <b><?php echo $ip;?></b><br />
					   <?php if(isset($_GET['view']) && $_GET['view'] == "details")
					   {
					   ?>
					   <span class="titrebleu">Les détails d'une connexion</span><br />
					   <b>U.A : </b> <?php echo $_SERVER['HTTP_USER_AGENT'];?><br />
					   <b>Host : </b><?php echo gethostbyaddr($ip); ?><br />
					   <table width="400" border="0" cellspacing="0" cellpadding="0">
					   <tr>
					   <td bgcolor="#EFF5FA" align="center">
					   <table width="100%" border="0" cellpadding="2">
					   <tr><td align="center" colspan="2"><b>Connexion actuelle( <?php echo $ip;?> ) :</b></td></tr>
					   <?php
					   $dca = mysql_query('SELECT username, user_id FROM phpbb_users WHERE ipconnexion LIKE "%'.$ip.'%" AND user_id != "'.$infos["user_id"].'"');
					   while($ca = mysql_fetch_assoc($dca))
					   {
					    echo '<tr><td align="center" colspan="2"><a href="/annuaire/?mid='.$ca['user_id'].'">'.$ca['username'].'</a></td></tr>';
					   }
					   ?>
					   <br /><br />
					   
					   <tr><td align="center" colspan="2"><b>Connexion site :</b></td></tr>
					   <?php
						$ip_nbr = preg_split("/,/",$ips);
						$taille_ip = sizeof($ip_nbr);
						for($i=0; $i<$taille_ip; $i++)
						{
							if($ip_nbr[$i] != "")
							{
								$sql = 'SELECT username, user_id FROM phpbb_users WHERE ipconnexion LIKE "%'.$ip_nbr[$i].'%" AND user_id != "'.$infos["user_id"].'"'; 
								$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
								if($req > 0)
								{
									while($data = mysql_fetch_assoc($req))
									{
										echo '<tr><td align="center" colspan="2"><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td></tr>';
									}
								}
							}
						}
					   ?>
					   <br /><br />
					   </table>
					   
					   </table>
					   
					   <?php
					   }
					   else
					   {
					   ?>
					   <span class="titrebleu">Journal de connections</span><br />
					   Pour plus d'info, clique sur une connection<br />
					   
					   <table width="400" border="0" cellspacing="0" cellpadding="0">
					   <tr>
					   <td bgcolor="#EFF5FA" align="center">
					   <table width="100%" border="0" cellpadding="2">
					   <tr><td align="center" colspan="2"><b>Connexion actuelle :</b></td></tr>
					   <tr><td align="center" colspan="2"><?php echo '<a href="?view=details">'.$ip.'</a>';?><br /><br /></td></tr>
					   
					   <tr><td align="center" colspan="2"><b>Connexion site :</b></td></tr>
						<?php
						$ip_nbr = preg_split("/,/",$ips);
						$taille_ip = sizeof($ip_nbr);
						for($i=0; $i<$taille_ip; $i++)
						{
							if($ip_nbr[$i] != "")
							{
								echo '<tr><td align="center" colspan="2"><a href="?view=details">'.$ip_nbr[$i].'</*a><br /><br /></td></tr>';
							}
						}
					   ?>
					   </table>
					   </tr>
					   </td>
					   </table>
					   
					   <table width="405" border="0" cellpadding="0" cellspacing="0">
					   <tr><td>
					   
					   <img src="http://01static.chapatiz.com/fr/modif_lang/diagnostic_header.gif" width="405" height="29">
					   </td></tr><tr><td bgcolor="#EFF5FA">
					   <table width="405" border="0" cellpadding="6" cellspacing="0">
					  
					   <tr><td background="http://01static.chapatiz.com/fr/account/diagnostic_tile.gif">
					    
					   <span style='font-weight:bold;color=#CC0000;'>Comment comprendre si quelqu'un connait ton passe ?</span>
					   <br /><br />D'abord, tu dois savoir ce que c'est qu'une </b> adresse IP !<br />
					   <br />Clique sur ton ip, indiquée sous le titre <b>Connection actuelle</b>.<br />
					   <br />C'est ton ip du moment, et dessus tu devrais voir tes propres connections, 
					   tes multicomptes si tu en as, les connections des comptes des autres personnes de 
					   ta maison si ils ont des comptes.<br /><br />Regarde ensuite le <b>Journal des Connections</b>.
					   <br /><br />Regarde les ip qui te semblent différentes, clique dessus et regarde le pays, et qui s'est 
					   connecté avec cette adresse.<br /><br />Si tu vois des pseudos qui ne t'appartiennent pas 
					   ou qui n'appartiennent pas à quelqu'un dans ta maison, il y a de fortes chances pour que 
					   quelqu'un connaisse ton passe !<br /><br /><u>Cas particulier</u>: Si 
					   tu vois qu'un <a href='/groups/?gid=9'>Créateur</a> s'est connecté avec ton compte, c'est normal,
					   les créateurs peuvent être amenés à se connecter pour vérifier que ton compte fonctionne bien mais
					   attention !<br />Ce cas particulier n'est pas valable <u>n'est pas</u> pour les autres groupes officiels 
					   ( modos, aideurs, défailleurs... )</td></tr></table></td></tr><tr><td>
					  
					   </td></tr></table>
					   
					   <?php
					   }
					   ?>
                      </div>


                 


                          

						  <?php
						  }
						  ?>
                      </td>
                    </tr>

                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>


			<tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>

              







            </table>
          </td>


          <td valign="top">





        
             



          </td>

        </tr>
</table>
<?php
include('../bbs/includes/bas.php'); 
?>