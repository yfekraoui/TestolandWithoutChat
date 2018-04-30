
    <td valign="top">

          <table width="468" border="0" cellpadding="0" cellspacing="0">

          <!-- slot title -->
              <tr>
                <td align="left"><img src="/img/groups/header_groups.gif" width="468" /></td>
              </tr>
              <tr>
                <td bgcolor="#d7e7f3" style="background-repeat:repeat-x">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td><br/>Envie de former un vrai <b>gang</b> avec tes potes ? Rejoindre une <b>guilde</b> de guerriers Bacteria ? Un fan <b>club</b> de ta star préférée avec tes copines ? Marre des <b>faux groupes</b> qui sont en réalité de simples messages de forum ? <br/><br/>Pour <b>choisir ton clan</b>, c'est ici ! Tu peux rejoindre un ou des groupes ; et même en créer. Pour certains groupes, ton entrée est immédiate, pour d'autres tu devras être approuvé par le chef du groupe... A toi de faire tes preuves !<br /></td>
                    </tr>
                  </table>               </td>
              </tr>
              <tr>
                <td>
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>

					<td><img src="bg_g_bb.gif" border="0" width="468" height="12"/></td>

				
					</tr></table>				</td>
              </tr>
          <!-- slot title -->

            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="468" height="11"></td></tr>

          <!-- slot officials -->
          <a name="officials"></a>

              <tr>
                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="/img/groups/top_slot1.gif" border="0" width="468" height="12"/></td>
					</tr></table>				</td>
              </tr>

              <tr>
                <td bgcolor="#eff5fa">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                      <div align="center">
                      <b class="titrebleu">Les Groupes Officiels</b>
                      <br />

                       Ce sont les groupes qui participent directement à <b>Testoland</b>.                      </div>


                      <br />
                      Les membres de ces groupes sont nommés par <a href="/groups/?gid=9">les Créateurs du site</a>, et se voient attribuer des <b>rubriques à modérer</b> ( <a href="/bbs/">BBS</a>...)ou même un <b>poste sur le chat</b> (<a href="/groups/?gid=10">les Modos officiels</a>, <a href="/groups/?gid=11">les Aideurs officiels</a> ...).
                      <br />

                      <br />


				  <table width="100%"  border="0" cellspacing="0" cellpadding="3">
                  <tr>
                      <td valign="top">
                          <table width="100%" cellspacing="0" cellpadding="3">
                          <tr>
                              <td width="1%" align="left"><b>#</b></td>

                              <td align="center"><b>Nom du Groupe</b></td>
                              <td width="1%" align="center"><b>Genre</b></td>
                          </tr>
	<?php
    
    
    $sql = "SELECT group_id, group_name, type FROM ". $pref ."groups  WHERE
group_officiel='1'"; 
     $group_official = mysql_query($sql) or die('Erreur SQL
!'.$sql.'<br>'.mysql_error());
     
     
     if(mysql_num_rows($group_official) < 1)
      {
	     echo'<tr><td>0</td><td>Il n\'y a pas de groupe officiel
!</td><td>Empire</td>';	      
      }
       else
          {
         
    while($group_officiel = mysql_fetch_assoc($group_official))
             {
		        $ihjiehuief = stripslashes($group_officiel['group_name']);
		        echo' <tr class="td_slotbleu_list_cycle">
		                     <td
align="left"><b>'.$group_officiel['group_id'].'</b></td>		
		                     <td align="center"><a
href="?gid='.$group_officiel['group_id'].'">
	
'.$ihjiehuief.'</a></td>
		                     <td align="center">'.$group_officiel['type'].'
</td></tr>';
             }
          } 
?>

							  
							  
                          </table>                      </td>
                  </tr>
                  </table>                      </td>
                    </tr>
                  </table>               </td>
              </tr>
              <tr>
                <td>
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="/img/groups/bottom_slot1.gif" border="0" width="468" height="12"/></td>

					</tr></table>				</td>
              </tr>
          <!-- officials -->

            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="468" height="11"></td></tr>


          <!-- slot non_officials -->
          <a name="non_officials"></a>

              <tr>
                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="/img/groups/top_slot1.gif" border="0" width="468" height="12"/></td>
					</tr></table>				</td>
              </tr>

              <tr>
                <td bgcolor="#eff5fa">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center">
                      <div align="center">
                      <b class="titrebleu">Les Groupes des Membres</b>
                      <br />

                       Ce sont les 20 derniers groupes des membres créés.                      </div>

                      <br />
                      Les membres de ces groupes sont nommés par <b>le créateur du groupe</b>, lui même membre...
                      <br />
                      <br />


                  <table width="100%"  border="0" cellspacing="0" cellpadding="3">

                  <tr>
                      <td valign="top">
                          <table width="100%" cellspacing="0" cellpadding="3">
                          <tr>
                              <td width="1%" align="left"><b>#</b></td>
                              <td align="center"><b>Nom du Groupe</b></td>
                              <td width="1%" align="center"><b>Genre</b></td>
                          </tr>
                                                        <?php
												   $group_nrml=mysql_query('SELECT group_id, 
												   group_name, type FROM '.$pref.'groups
												   WHERE group_officiel="0" ORDER BY group_id DESC LIMIT 0,20') or die(
												   mysql_error().'<br >:' .$error_sql);
												   if(mysql_num_rows($group_nrml) < 1) {
												   echo'<tr><td>0</td><td><center>Il n\'y a pas de groupe
												   !</center></td><td></td>';
												   } else { 
												   while($group_normal=mysql_fetch_assoc($group_nrml))
												   {
												  $honolulu = stripslashes($group_normal['group_name']);
												  echo'
												   <tr class="td_slotbleu_list_cycle">
                              <td align="left"><b>'.$group_normal['group_id'].'</b></td>
                              <td align="center"><a href="?gid='.$group_normal['group_id'].'">'.$honolulu.'</a></td>
                              <td align="center">'.$group_normal['type'].'</td></tr>';  } } ?>
                          </table>                      </td>
                  </tr>
                  </table>                      </td>
                    </tr>
                  </table>               </td>
              </tr>
              <tr>
                <td>
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="/img/groups/bottom_slot1.gif" border="0" width="468" height="12"/></td>
					</tr></table>				</td>
              </tr>
          <!-- non_officials -->


            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="468" height="11"></td></tr>
            
            
          <!-- slot top_10 -->
          <a name="top_10"></a>
              <tr>
                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>

					<td><img src="/img/groups/top_slot1.gif" border="0" width="468" height="12"/></td>
					</tr></table>				</td>
              </tr>
              <tr>
                <td bgcolor="#eff5fa">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">

                    <tr>
                      <td align="center">
                      <div align="center">
                      <b class="titrebleu">Classement général des groupes aux jeux</b>
                      <br />
                       Les 10 groupes les mieux classés tous jeux confondus.                      </div>
                      
                      <br />
                     Le nombre de points correspond au total des classements.
                      <br />

                      Par exemple, si un groupe est classé <b>10e à bacteria, 2e à patojdur, et 7e à Popularité</b>, son nombre de points sera <b>10+2+7</b> soit <b>19 points</b>.<br /> Cela signifie que moins un groupe posséde de points, plus il est fort.
                      <br />
                      <br />

                  <table width="100%"  border="0" cellspacing="0" cellpadding="3">

                  <tr>
                      <td valign="top">
                          <table width="100%" cellspacing="0" cellpadding="3">
                          <tr>
                              <td width="1%" align="left"><b>#</b></td>
                              <td align="center"><b>Nom du Groupe</b></td>
                              <td width="1%" align="center"><b>Score</b></td>
                          </tr>
						  
						  
						  
						<?php  
						    $b = 0;
							$sql = 'SELECT * FROM phpbb_groups WHERE c_lapino >= 1 AND c_ctf >= 1 AND c_popu >= 1 AND c_bacteria >= 1 AND c_speedmaze >= 1 AND c_patojdur >= 1'; 
							$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
							while($data = mysql_fetch_assoc($req)) 
								{ 
								
								
									$b++;
									$score = $data['c_lapino'] + $data['c_ctf'] + $data['c_popu'] + $data['c_bacteria'] + $data['c_speedmaze'] + $data['c_patojdur'];
									$kete = mysql_query('UPDATE phpbb_groups SET rank_all = "'.$score.'" WHERE group_id = "'.$data['group_id'].'"');
								
								}
									
								$q = 0;
								$sql = 'SELECT * FROM phpbb_groups WHERE rank_all >= 1 ORDER BY rank_all LIMIT 10'; 
								$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
								while($data = mysql_fetch_assoc($req)) 
								{ 
									$q++;
									?>
								
									<tr class='td_slotbleu_list_cycle'>
									<td align="left"><b><?php echo $q; ?></b></td>
									<td align="center"><a href="?gid=<?php echo $data['group_id']; ?>"><?php echo $data['group_name']; ?></a></td>
									<td align="center"><?php echo $data['rank_all']; ?></td>
									</tr>
								<?php
								}
								?>
								
							  
							  
							  
                          </table>    </td>
                  </tr>
                  </table>                      </td>
                    </tr>
                  </table>               </td>
              </tr>
              <tr>
                <td>
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="/img/groups/bottom_slot1.gif" border="0" width="468" height="12"/></td>
					</tr></table>				</td>
              </tr>
          <!-- top_10 -->


            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="468" height="11"></td></tr>



		  <!-- manage slot -->
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

                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center">
                       <b class="titrebleu">Moi &amp; Les groupes</b>

                       <br />
                       <br /><?php  if(isset($_COOKIE[$p_cookie.'sid'])) { echo'
                      <a href="./?mode=manage">
                       <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/>
                      Gérer mes groupes</a>.
     <br />
                      <br />
                      <a href="annuaire.php">
                       <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/>

					  Annuaire des groupes</a>'; } else { } ?>                     </td>
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
           <!-- slot manage -->
            </table>
</td>

        