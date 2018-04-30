<?php
if(isset($_GET['gid']) && !empty($_GET['gid']))
{
include('modifier.php');
}
else
{
?>
<td valign="top">
<!-- main content -->
<table width="630" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">

            <!-- slot speech -->
              <tr>
                <td align="left"><a href="/groups/"><img src="http://01static.chapatiz.com/fr/modif_lang//head_group_center.gif" border="0"/></a></td>
              </tr>
              <tr>
                <td bgcolor="#6EBEF0" background="http://01static.chapatiz.com/fr/hp/nav/fd_group.gif" style="background-repeat:repeat-x">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td align="center">
                      <b class="titrebleu">Gérer mes groupes</b>
                      <p align="left">Sur cette page, tu peux tout faire et tout savoir sur <b>tes groupes</b>... <br/><br/>Ils n'étaient en fait qu'une bande de nazes ? <b>Désinscris-toi</b> ! Alors, le gang de tes rêves t'as pris ? <b>Découvre-le tout de suite</b> ! Envie de <b>fonder ton propre</b> club ? Si tu as un super niveau, go !</p>                      </td>
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
            <!-- slot speech -->

            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="435" height="11"></td></tr>

            <!-- slot member of group -->

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
                      <b class="titrebleu">Mes inscriptions</b>
                      <br />
                      <em>&quot;Faire partie de ces groupes, c'est LA grande classe...&quot;</em>

                      <br />
                      <br />

                      
                          
                                                        <table width="100%" cellspacing="0" cellpadding="1">
                              <tr>
                                  <td align="center"><b>Groupe</b></td>
                                  <td width="1%">&nbsp;</td>
                              </tr>
							  
							  <?php
							  $fk = 0;
							  $wtfx = mysql_query('SELECT * FROM phpbb_user_group WHERE user_id = "'.$userdata['user_id'].'"');
							  while($wtf = mysql_fetch_assoc($wtfx))
							  {
								$fk++;
								$zz = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$wtf['group_id'].'"');
								$zz = mysql_fetch_assoc($zz);
								$xx = mysql_query('SELECT COUNT(*) AS luv FROM phpbb_groups WHERE group_id = "'.$wtf['group_id'].'"');
								$xx = mysql_fetch_assoc($xx);
								$ver = $xx['luv'];
								if($ver < 1)
								{
							   echo'<tr class="td_slotbleu_list_cycle"> <td align="center"> 
							   Tu n\'es pas dans un groupe !
							   </td> <td align="center" nowrap="nowrap">  </td> <tr>'; 
								 }
								 else
								 {
								  ?>
								  <tr class="td_slotbleu_list_cycle">
								  <td align="center">
                                  <a href="./?gid=<?php echo $zz['group_id']; ?>"><?php echo stripslashes($zz['group_name']); ?></a>
									 </td> <td align="center" nowrap="nowrap">
                                     [<a href="delete.php?gid=<?php echo $zz['group_id']; ?>"> Me désinscrire</a>]
                                      </td>
                                  <tr>
								  <?php
								  
								 }
							}
								   
							  ?>
                                                            </table>
                          

                      
                      <br />                      </td>
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
            <!-- slot member of group -->

    <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="435" height="11"></td></tr>

            <!-- slot pendings on demand -->
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
                       <b class="titrebleu">Mes demandes d'inscription</b>

                       <br />
                       <em>&quot;Tout vient à point à qui sait attendre !&quot;</em>
                      <br />
                      <br />

                      
                      		 <table>
					
					   <?php
							  $fc = 0;
							  $onn = mysql_query('SELECT * FROM phpbb_demande_group WHERE user_id = "'.$userdata['user_id'].'"');
							  while($on = mysql_fetch_assoc($onn))
							  {
								$fc++;
								$aa = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$on['group_id'].'"');
								$aa = mysql_fetch_assoc($aa);
								$bb = mysql_query('SELECT COUNT(*) AS gg FROM phpbb_groups WHERE group_id = "'.$on['group_id'].'"');
								$bb = mysql_fetch_assoc($bb);
								$vxx = $bb['gg'];
								if($vxx < 1)
								{
							   echo'<tr class="td_slotbleu_list_cycle"> <td align="center"> 
							   Tu n\'as pas de demandes en attente !
							   </td> <td align="center" nowrap="nowrap">  </td> <tr>'; 
								 }
								 else
								 {
								  ?>
								  <tr class="td_slotbleu_list_cycle">
								  <td align="center">
                                  <a href="./?gid=<?php echo $aa['group_id']; ?>"><?php echo stripslashes($aa['group_name']); ?></a>
									 </td>  <td align="center" nowrap="nowrap">
                                     [<a href="delete.php?gid=<?php echo $aa['group_id']; ?>&amp;mode=demande"> Annuler</a>]
                                      </td>
                                  <tr>
								  <?php
								  
								 }
							}
								   
							  ?>
				
					 </table>

                      
                      <br />                      </td>
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
            <!-- slot pendings on demand -->

            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="435" height="11"></td></tr>

            <!-- slot my groups -->
              <tr>

                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.gif" border="0" width="12" height="12"/></td>
			</tr></table> 
				</td> 
              </tr> 
              <tr> 
                <td bgcolor="#6EBEF0"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="5"> 
                    <tr> 
                      <td align="center"> 
 
                       <b class="titrebleu">Mes groupes</b> 
                       <br /> 
                       <em>&quot;Il étaient bien sûr les meilleurs groupes de la communauté... &quot;</em> 
 
                      <br /> 
                      <br /> 
            
                  <?php
				  $ww = mysql_query('SELECT COUNT(*) AS ww FROM phpbb_groups WHERE group_moderator = "'.$userdata['user_id'].'"');
							  $ww = mysql_fetch_assoc($ww);
							  $wwv = $ww['ww'];
							if($wwv < 1)
							{							

							 ?>
                    <table width="100%" cellspacing="0" cellpadding="3"> 
                          <tr> 
                              <td align="center"><b></b></td> 
                              <td width="1%">&nbsp;</td> 
                          </tr> 
                                                        <tr class="td_slotbleu_list_cycle"> 
                                  
                              <tr> 
                                                    </table> 
 
                    
                      <br /> 
                      <a href="create_index.php"> 
                      <img src="http://01static.chapatiz.com/fr/index_body_cat_open.gif" border="0"/> 
                      Créer un nouveau groupe !</a>.
 
 <?php
 }
 else
 {
 	  
							  $dd = mysql_query('SELECT * FROM phpbb_groups WHERE group_moderator = "'.$userdata['user_id'].'"');
									$dd = mysql_fetch_assoc($dd);
 ?>
 <table width="100%" cellspacing="0" cellpadding="3"> 
                          <tr> 
                              <td align="center"><b>Nom du groupe</b></td> 
                              <td width="1%">&nbsp;</td> 
                          </tr> 
                                                        <tr class="td_slotbleu_list_cycle"> 
                                  <td align="center"> 
                                      <a href="./?gid=<?php echo $dd['group_id']; ?>"><?php echo stripslashes($dd['group_name']); ?></a> 
                                  </td> 
                                  <td>[<a href="modifier.php?gid=<?php echo $dd['group_id']; ?>">Gérer</a>]</td> 
                              <tr> 
                                                    </table> 
 
                    
                     
 <?php
 }
 ?>
                                  <br /> 
                      </td> 
                    </tr> 
                  </table> 
               </td> 
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

<?php } ?>



       <?php include('right.php'); ?>
        </tr>
</table>
