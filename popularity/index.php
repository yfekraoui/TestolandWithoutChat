
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
				<img src="/img/header_popularite.gif" alt="header_popularite" />
                </td>
              </tr>
              <tr>
                <td  bgcolor="#DCEAF5" align="center">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
					
                    <tr>
					
                      <td>


                      <div align="center">
                        <table border="0" align="center" cellpadding="5" cellspacing="0" class="subnav">
                          <tr>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>

                                  <td valign="middle" bgcolor="#78AADB"><a href="#htp">Classement du jour ?</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#gameplay">Champion du jour</a></td>

                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            
                          </tr>
						  
						  <tr>
						 
						  <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#top20">Classement général</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>

                                </tr>

                              </table></td>
						  
						  <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="vote.php">Voter</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
									</table></td>
                                </tr>
								
								</tr>
								

                              
							  </tr>
							  
							  <tr align="center">
								
								
								
								
								<tr align="center">
								<td width="400">
								Il te <b>prend la tête</b> et tu as envie de lui faire sentir ?<br />
								Tu ne <b>peux plus la voir</b> et tu veux que tout le monde le sache ? <br />
								Cette fille est <b>trop cool</b> et ceux qui ne l'aiment pas ne la connaissent pas ! <br />
								Ce mec et son groupe <b>assurent grave</b> et tu as envie de le lui prouver ?<br />
								</td>
								<td width="400">
								Viens tous les jours <b>régler tes comptes</b> ou <b>soutenir</b> tes amis sur la <b>popularité !</b><br />
								Vote <b>POUR</b> elle et sa cote remonte, vote <b>CONTRE</b> lui et il descend en flêche ! <br /><br />
								Le + <b>Populaire du jour</b> gagne des lunettes pour la journée, les 3 + <b>Populaire du jour</b> gagnent une auréole pour la journée, le - <b>Aimé</b> gagne une crotte pour la journée !<br /> 
								</td>
								</tr>
                       </table>
                      </div>


                          <br />

                          

                      </td>
                    </tr>

                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="620" height="11"></td>
              </tr>




              <tr><td><img src="/img/spacer.gif" width="620" height="10"></td></tr>

              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="620" height="11"></td>
              </tr>
              <tr>
                <td  bgcolor="#DCEAF5">
				
				
				<div  style="overflow:auto;height:300px;">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <a name="htp"></a>
							<tr>
                          <div align="center"><span class="titrebleu">Classement du jour !</span>
						  <br />
                          <em>" Classement toujours en cours !<br />
						  Tu peux encore descendre ou remonter quelqu'un ! "</em><br />
                          </div>
						  </tr>
						  <tr valign="top" align="center">
						  
						 <td><img src="/img/logo_popu_pour.gif" alt="popu" /><br /><br />
						 <span class="titrebleu">Les + Populaire</span><br />
						 <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
							 <tr>
							 <tr><br /><br /></tr>
							 <!-- BOUCLE A FAIRE -->
							 <?php
							 $b1 = 0;
							 $sql1 = 'SELECT user_id, username, classement_popu_a FROM phpbb_users WHERE classement_popu_a >= 1 ORDER BY classement_popu_a DESC LIMIT 20'; 
							 $req1 = mysql_query($sql1) or die('Erreur SQL !<br>'.$sql1.'<br>'.mysql_error()); 
							 while($db1 = mysql_fetch_assoc($req1))
							 {
								$b1++;
								if($b1 == "1" OR $b1 == "3" OR $b1 == "5" OR $b1 == "7" OR $b1 == "9" OR $b1 == "11" OR $b1 == "13" OR $b1 == "15" OR $b1 == "17" OR $b1 == "19")
								{
									echo '<tr bgcolor=#EEF5FA>';
								}
								else
								{
									echo '<tr>';
								}	
									echo '<td align="center" valign="top" >'.$db1['classement_popu_a'].'</td><td align="center" valign="top" ><a href="/annuaire/?mid='.$db1['user_id'].'">'.$db1['username'].'</a></td></tr>';
								}
							 
							 ?>
						   </table>
						 
						 
						 </td>
						 
						 

						 <td><img src="/img/logo_popu_contre.gif" alt="popu" /><br /><br />
						  <span class="titrebleu">Les - Populaire</span>
						  <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
							 <tr>
							 <tr><br /><br /><br /></tr>
							 <!-- BOUCLE A FAIRE -->
							  <?php
						 	 $b2 = 0;
							 $sql2 = 'SELECT user_id, username, classement_popu_a FROM phpbb_users WHERE classement_popu_a < 0 ORDER BY classement_popu_a LIMIT 20'; 
							 $req2 = mysql_query($sql2) or die('Erreur SQL !<br>'.$sql2.'<br>'.mysql_error()); 
							 while($db2 = mysql_fetch_assoc($req2))
							 {
								$b2++;
								if($b2 == "1" OR $b2 == "3" OR $b2 == "5" OR $b2 == "7" OR $b2 == "9" OR $b2 == "11" OR $b2 == "13" OR $b2 == "15" OR $b2 == "17" OR $b2 == "19")
								{
									echo '<tr bgcolor=#EEF5FA>';
								}
								else
								{
									echo '<tr>';
								}	
									echo '<td align="center" valign="top" >'.$db2['classement_popu_a'].'</td><td align="center" valign="top" ><a href="/annuaire/?mid='.$db2['user_id'].'">'.$db2['username'].'</a></td></tr>';
								}
							 
							 ?>
							 <?php
								$q = 0;
								$sqlq = 'SELECT username FROM phpbb_users WHERE classement_popu_a >= 1 ORDER BY classement_popu_a DESC'; 
								$reqq = mysql_query($sqlq) or die('Erreur SQL !<br>'.$sqlq.'<br>'.mysql_error()); 
								while($dataq = mysql_fetch_assoc($reqq))
								{ 		
									$q++;	
									$quetezzq = mysql_query('UPDATE phpbb_users SET rank_popu_a = "'.$q.'" WHERE username = "'.$dataq['username'].'"');
								}
							?>
                           </tr>
						   </table>
						  
						  
						  </td>
                          </tr>
						
						  
						  
                      </td>
                    </tr>
                  </table>
				  </div>
				  
				  
				  
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="620" height="11"></td>
              </tr>




              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="620" height="11"></td>
              </tr>
              <tr>
                <td  bgcolor="#DCEAF5">
				
				
				
				<div  style="overflow:auto;height:300px;">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <a name="gameplay"></a>
							<tr>
                          <div align="center"><span class="titrebleu">Champion du jour !</span>
						  <br />
                          <em>" Hier, ils ont été héroïque ... Ou nazes !! "<br /></em>
						  <br />
                          </div>
						  </tr>
						  <tr valign="top" align="center">
						  
						 <td><img src="/img/logo_popu_pour.gif" alt="popu" /><br /><br />
						 <span class="titrebleu">Les + Populaire</span><br />
						 <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
							 <tr>
							 <tr><br /><br /></tr>
							 <!-- BOUCLE A FAIRE -->
							 <?php
							 $b3 = 0;
							 $sql3 = 'SELECT user_id, username, classement_popu_h FROM phpbb_users WHERE classement_popu_h >= 1 ORDER BY classement_popu_h DESC LIMIT 20'; 
							 $req3 = mysql_query($sql3) or die('Erreur SQL !<br>'.$sql3.'<br>'.mysql_error()); 
							 while($db3 = mysql_fetch_assoc($req3))
							 {
								$b3++;
								if($b3 == "1" OR $b3 == "3" OR $b3 == "5" OR $b3 == "7" OR $b3 == "9" OR $b3 == "11" OR $b3 == "13" OR $b3 == "15" OR $b3 == "17" OR $b3 == "19")
								{
									echo '<tr bgcolor=#EEF5FA>';
								}
								else
								{
									echo '<tr>';
								}	
									echo '<td align="center" valign="top" >'.$db3['classement_popu_h'].'</td><td align="center" valign="top" ><a href="/annuaire/?mid='.$db3['user_id'].'">'.$db3['username'].'</a></td></tr>';
								}
							 
							 ?>
							 <?php
								$o = 0;
								$sqlx = 'SELECT username FROM phpbb_users WHERE classement_popu_h >= 1 ORDER BY classement_popu_h DESC'; 
								$reqx = mysql_query($sqlx) or die('Erreur SQL !<br>'.$sqlx.'<br>'.mysql_error()); 
								while($datax = mysql_fetch_assoc($reqx))
								{ 		
									$o++;	
									$quetezzz = mysql_query('UPDATE phpbb_users SET rank_popu_h = "'.$o.'" WHERE username = "'.$datax['username'].'"');
								}
							?>
							 
                           </tr>
						   </table>
						 
						 
						 </td>
						 
						 

						 <td><img src="/img/logo_popu_contre.gif" alt="popu" /><br /><br />
						  <span class="titrebleu">Les - Populaire</span>
						  <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts &nbsp;</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
							 <tr>
							 <tr><br /><br /><br /></tr>
							 <!-- BOUCLE A FAIRE -->
							 <?php
							 $b4 = 0;
							 $sql4 = 'SELECT user_id, username, classement_popu_h FROM phpbb_users WHERE classement_popu_h < 0 ORDER BY classement_popu_h LIMIT 20'; 
							 $req4 = mysql_query($sql4) or die('Erreur SQL !<br>'.$sql4.'<br>'.mysql_error()); 
							 while($db4 = mysql_fetch_assoc($req4))
							 {
								$b4++;
								if($b4 == "1" OR $b4 == "3" OR $b4 == "5" OR $b4 == "7" OR $b4 == "9" OR $b4 == "11" OR $b4 == "13" OR $b4 == "15" OR $b4 == "17" OR $b4 == "19")
								{
									echo '<tr bgcolor=#EEF5FA>';
								}
								else
								{
									echo '<tr>';
								}	
									echo '<td align="center" valign="top" >'.$db4['classement_popu_h'].'</td><td align="center" valign="top" ><a href="/annuaire/?mid='.$db4['user_id'].'">'.$db4['username'].'</a></td></tr>';
								}
							 
							 ?>
							 <?php
								$f = 0;
								$sqly = 'SELECT username, classement_popu_h FROM phpbb_users WHERE classement_popu_h < 0 ORDER BY classement_popu_h LIMIT 1'; 
								$reqy = mysql_query($sqly) or die('Erreur SQL !<br>'.$sqly.'<br>'.mysql_error()); 
								while($datay = mysql_fetch_assoc($reqy))
								{ 		
									$f++;	
									$quetezzz = mysql_query('UPDATE phpbb_users SET rank_popu_h = "21" WHERE username = "'.$datay['username'].'"');
								}
							?>
							 
                           </tr>
						   </table>
						  
						  
						  </td>
                          </tr>
						
						  
						  
                      </td>
                    </tr>
                  </table>
				  </div>
				  
				  
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="620" height="11"></td>
              </tr>
              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="620" height="11"></td>
              </tr>
              <tr>
                <td  bgcolor="#DCEAF5">
				
				
				
				
				<div style="overflow:auto;height:300px;">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <a name="top20"></a>
							<tr>
                          <div align="center"><span class="titrebleu">Classement générale !</span>
						  <br />
                          <em>
						  " Les stars de l'archipel ! "</em><br /><br />
                          </div>
						  </tr>
						  <tr valign="top" align="center">
						  
						 <td><img src="/img/logo_popu_pour.gif" alt="popu" /><br /><br />
						 <span class="titrebleu">Les + Populaire</span><br />
						 <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
							 <tr>
							 <tr><br /><br /></tr>
							 <!-- BOUCLE A FAIRE -->
							 <?php
							 $b5 = 0;
							 $sql5 = 'SELECT user_id, username, classement_popu_g FROM phpbb_users WHERE classement_popu_g >= 1 ORDER BY classement_popu_g DESC LIMIT 20'; 
							 $req5 = mysql_query($sql5) or die('Erreur SQL !<br>'.$sql5.'<br>'.mysql_error()); 
							 while($db5 = mysql_fetch_assoc($req5))
							 {
								$b5++;
								if($b5 == "1" OR $b5 == "3" OR $b5 == "5" OR $b5 == "7" OR $b5 == "9" OR $b5 == "11" OR $b5 == "13" OR $b5 == "15" OR $b5 == "17" OR $b5 == "19")
								{
									echo '<tr bgcolor=#EEF5FA>';
								}
								else
								{
									echo '<tr>';
								}	
								echo '<td align="center" valign="top" >'.$db5['classement_popu_g'].'</td><td align="center" valign="top" ><a href="/annuaire/?mid='.$db5['user_id'].'">'.$db5['username'].'</a></td></tr>';
							}
							 
							 ?>
							  <?php
								$m = 0;
								$sqlm = 'SELECT username, classement_popu_g FROM phpbb_users WHERE classement_popu_g >= 1 ORDER BY classement_popu_g DESC'; 
								$reqm = mysql_query($sqlm) or die('Erreur SQL !<br>'.$sqlm.'<br>'.mysql_error()); 
								while($datam = mysql_fetch_assoc($reqm))
								{ 		
									$m++;	
									$quetezzm = mysql_query('UPDATE phpbb_users SET rank_popu_g = "'.$m.'" WHERE username = "'.$datam['username'].'"');
								}
							?>
                           </tr>
						   </table>
						 
						 
						 </td>
						 
						 

						 <td><img src="/img/logo_popu_contre.gif" alt="popu" /><br /><br />
						  <span class="titrebleu">Les - Populaire</span>
						  <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts &nbsp;</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
							 <tr>
							 <tr><br /><br /><br /></tr>
							 <!-- BOUCLE A FAIRE -->
							<?php
							 $b6 = 0;
							 $sql6 = 'SELECT user_id, username, classement_popu_g FROM phpbb_users WHERE classement_popu_g < 0 ORDER BY classement_popu_g LIMIT 20'; 
							 $req6 = mysql_query($sql6) or die('Erreur SQL !<br>'.$sql6.'<br>'.mysql_error()); 
							 while($db6 = mysql_fetch_assoc($req6))
							 {
								$b6++;
								if($b6 == "1" OR $b6 == "3" OR $b6 == "5" OR $b6 == "7" OR $b6 == "9" OR $b6 == "11" OR $b6 == "13" OR $b6 == "15" OR $b6 == "17" OR $b6 == "19")
								{
									echo '<tr bgcolor=#EEF5FA>';
								}
								else
								{
									echo '<tr>';
								}	
									echo '<td align="center" valign="top" >'.$db6['classement_popu_g'].'</td><td align="center" valign="top" ><a href="/annuaire/?mid='.$db6['user_id'].'">'.$db6['username'].'</a></td></tr>';
								}
							 
							 ?>
							 
                           </tr>
						   </table>
						  
						  
						  </td>
                          </tr>
						
						  
						  
                      </td>
                    </tr>
                  </table>
				  </div>
				  
				  
				  
				  
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="620" height="11"></td>
              </tr>
<tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
               <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="620" height="11"></td>
              </tr>
              <tr>
                <td  bgcolor="#DCEAF5">
				
				
				
				
				<div style="overflow:auto;height:300px;">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <a name="top20"></a>
							<tr>
                          <div align="center"><span class="titrebleu">Les 10 meilleurs et mauvais groupes en popularité !</span>
						  <br />
                          <em>
						  " Plus on est de fous..."</em><br /><br />
                          </div>
						  </tr>
						  <tr valign="top" align="center">
						  
						 <td><img src="/img/logo_popu_pour.gif" alt="popu" /><br /><br />
						 <span class="titrebleu">Les + Populaire</span><br />
						 <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Groupe</b></td>
							 <tr>
							 <tr><br /><br /></tr>
							 <!-- BOUCLE A FAIRE --><?php

$sqlx = 'SELECT * FROM phpbb_users WHERE classement_popu_g >= 1 OR classement_popu_g < 0'; 
$reqx = mysql_query($sqlx) or die('Erreur SQL !<br>'.$sqlx.'<br>'.mysql_error()); 
while($datax = mysql_fetch_assoc($reqx))
{ 		
	$kete = mysql_query('UPDATE phpbb_user_group SET c_popu = "'.$datax['classement_popu_g'].'" WHERE user_id = "'.$datax['user_id'].'"');
}
?>
<?php
mysql_query('UPDATE phpbb_groups SET rank_popu = "0"');
$sql = 'SELECT * FROM phpbb_user_group WHERE c_popu >= 1 OR c_popu < 0'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{
	$fok = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$data['group_id'].'"');
	$fok = mysql_fetch_assoc($fok);
	
	$total = $data['c_popu'] + $fok['rank_popu'];
	$ket = mysql_query('UPDATE phpbb_groups SET rank_popu = "'.$total.'" WHERE group_id = "'.$fok['group_id'].'"');

}

$b = 0;
$sql = 'SELECT * FROM phpbb_groups WHERE rank_popu >= 1 ORDER BY rank_popu DESC LIMIT 10'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 		
		$b++;
		if($b == "1" OR $b == "3" OR $b == "5" OR $b == "7" OR $b == "9")
		{
			echo '<tr bgcolor=#EEF5FA>';
		}
		else
		{
			echo '<tr>';
		}	


echo '<td align="center" valign="top" >'.$data['rank_popu'].'</td><td align="center" valign="top" ><a href="/groups/?gid='.$data['group_id'].'">'.stripslashes($data['group_name']).'</a></td></tr>';

	} ?>
							 
                           </tr>
						   </table>
						 
						 
						 </td>
						 
						 

						 <td><img src="/img/logo_popu_contre.gif" alt="popu" /><br /><br />
						  <span class="titrebleu">Les - Populaire</span>
						  <table width='100%' border='0' cellpadding="2" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Pts &nbsp;</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Groupe</b></td>
							 <tr>
							 <tr><br /><br /><br /></tr>
							 <!-- BOUCLE A FAIRE -->
							<?php
							$b = 0;
							$sql = 'SELECT * FROM phpbb_groups ORDER BY rank_popu LIMIT 10'; 
							$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
							while($data = mysql_fetch_assoc($req)) 
								{ 		
									$b++;
									if($b == "1" OR $b == "3" OR $b == "5" OR $b == "7" OR $b == "9")
									{
										echo '<tr bgcolor=#EEF5FA>';
									}
									else
									{
										echo '<tr>';
									}	


							echo '<td align="center" valign="top" >'.$data['rank_popu'].'</td><td align="center" valign="top" ><a href="/groups/?gid='.$data['group_id'].'">'.stripslashes($data['group_name']).'</a></td></tr>';

								} ?>
							 
                           </tr>
						   </table>
						  
						  
						  </td>
                          </tr>
						
						  
						  
                      </td>
                    </tr>
                  </table>
				  </div>
				  
				  
				  
				  
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="620" height="11"></td>
              </tr>






            </table>
          </td>


          <td valign="top">


             
<table width="168" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/spacer.gif" width="12" height="19"><br>
                  <img src="/img/ensavoirplus_top.gif" width="168" height="37"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#A4C4E3">
                <table width="168"  border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td valign="top">
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
						  <?php $susu = mysql_query('SELECT COUNT(*) AS nv FROM vote_use');
								$su = mysql_fetch_assoc($susu);
								$dv = $su['nv'];
								
								$sisi = mysql_query('SELECT COUNT(*) AS dp FROM vote_use WHERE plus = 1');
							    $si = mysql_fetch_assoc($sisi);
								$dp = $si['dp'];
								
								$srsr = mysql_query('SELECT COUNT(*) AS dr FROM vote_use WHERE moins = 1');
							    $sr = mysql_fetch_assoc($srsr);
								$dr = $sr['dr'];
								if($dv != 0)
								{
									$cl = 100 / $dv;
									$Ppour = $cl * $dp;
									$Pmoins = $cl * $dr;
								
								}
								else
								{
									$cl = 0;
									$Ppour = $cl * $dp;
									$Pmoins = $cl * $dr;
								}
									 ?>
						  
						  
                          Aujourd'hui <b><?php echo $dv; ?></b> votes. <br /><br />
									<b>POUR : <?php echo $dp; ?></b> (<?php echo $Ppour; ?>%)<br />
									<b>CONTRE : <?php echo $dr; ?></b> (<?php echo $Pmoins; ?>%)<br />
                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          Le classement du jour<br /> est remis a jour a chaque <br />fois que vous visitez la page !<br />
                          <br /><br />
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>
              </tr>
            </table>




          <table width="168" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/goodies_top.gif"></td>

              </tr>
              <tr>
                <td valign="top" bgcolor="#A4C4E3">
                <table width="168"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td valign="top">
                      </td>
                    </tr>
                  </table>

                </td>
              </tr>
              <tr>
                <td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>
              </tr>
            </table>


          </td>

        </tr>
</table>
<?php
include('../bbs/includes/bas.php'); 
?>