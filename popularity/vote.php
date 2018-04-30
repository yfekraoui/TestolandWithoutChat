
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
$title='Popularité';
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
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left">

                </td>
              </tr>
              <tr>
                
                  




             



              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
					  <?php
					  if (!isset($userdata['session_logged_in'])) {
							echo 'Il faut se connecter pour pouvoir voter !';
						}
						else if($userdata['username'] == "Anonymous"){
							echo "Il faut être connecté pour voter!";
						}
						else {
					  $dmx = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$userdata['username'].'"');
					  $dm = mysql_fetch_assoc($dmx);
					  
					  $dp = mysql_query('SELECT COUNT(*) AS ne FROM vote_use WHERE id = "'.$dm['user_id'].'"');
					  $dp = mysql_fetch_assoc($dp);
					  $verif = $dp['ne'];
					  
					  $ipp = getIp();
					  $di = mysql_query('SELECT COUNT(*) AS ni FROM vote_use WHERE ip = "'.$ipp.'"');
					  $di = mysql_fetch_assoc($di);
					  $vip = $di['ni'];
					  
					  if($verif > 0)
					  {
						?>
						<a name="gameplay"></a>
						  
                          <div align="center"class="titrebleu">Désolé mais tu as déjà voter aujourd'hui !</div>
                          <br />
						  <center>
							Reviens demain pour donner ta voix a<br />
							la personne de ton choix !<br />
							
						<?php
						}
						elseif($vip > 0)
						{ ?>
						
							<a name="gameplay"></a>
							  
							  <div align="center"class="titrebleu">Désolé mais tu as déjà voter aujourd'hui !</div>
							  <br />
							  <center>
								Reviens demain pour donner ta voix a<br />
								la personne de ton choix !<br />
						
						
						
						<?php
						}
						else
						{ ?>
						
                          <a name="gameplay"></a>
						 
                          <div align="center"class="titrebleu">Voter Pour/Contre un membre !</div>
                          <br />
						  <center>
						  Un membre t'ennuie ? Descend le !<br />
						  Tu trouves un membre sympas ? Donne lui ta voix !<br /><br /><br />
						  
						  
						  Choisis si tu votes pour on contre :<br />
						  <form method="post" action="vote_use.php">
						  <select name="choix">
						  <option value="pour">POUR !</option>
						  <option value="contre">CONTRE !</option>
						  </select><br />
						  Tape le nom de celui pour on contre qui tu votes :
						  <br />
						  <input type="text" name="pseudo" value="La personne de ton choix"  size="20"/><br />
						  <a href="/annuaire/">Tu peux trouver son nom en cliquant ici.</a><br /><br />
						  <input type="submit" value="Allez, je vote !" />
						  </form>
						  <?php
						  }
						 }
						  ?>
                          </center>
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>




              
              
              







            </table>
       
        </tr>
</table>
<?php
include('../bbs/includes/bas.php'); 
?>