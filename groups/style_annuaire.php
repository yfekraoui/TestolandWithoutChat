<td valign="top">
<!-- main content -->
<form action="/groups/annuaire.php" method="GET">
<table width="630" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td valign="top">
          <table width="468" border="0" cellpadding="0" cellspacing="0">

              <tr>
                <td align="left"><a href="/groups/"><img src="http://01static.chapatiz.com/fr/modif_lang//head_group_center.gif" border="0"/></a></td>
              </tr>


          <!-- slot title -->
              <tr>
                <td bgcolor="#6EBEF0" background="http://01static.chapatiz.com/fr/hp/nav/fd_group.gif" style="background-repeat:repeat-x">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td align="center">
                      <b class="titrebleu"></b>
                      <br />
                      <input type="hidden" name="gr[s]" value="1"><input type="hidden" name="gr[start]" value="0">
                      <input type="text" size="25" maxlength="25" name="gr_name" value="">
                      <table><tr><td align="right"><b>Le nom du groupe contient:</b></td>
                          <td>&nbsp;</td>
                      </tr><tr><td align="right"><input type="checkbox" name="gr_free" value="1" checked></td><td>Avec des places disponibles</td></tr><tr><td align="right"><b>Inscription:</b></td><td>&nbsp;</td></tr><tr><td align="right"><input type="checkbox" name="gr_enter" value="1" checked></td><td>Ouvert</td></tr><tr><td align="right"><input type="checkbox" name="gr_enter" value="2" checked></td><td>Sur Demande</td></tr><tr><td align="right"><input type="checkbox" name="gr_enter" value="0" checked></td><td>Fermé</td></tr><tr><td align="right"><b>Type:</b></td><td><select name="gr_type"><option value="" selected>Tous les types</option><option value=""> </option><option value="6">Alliance</option><option value="2">Clan</option><option value="3">Ekip</option><option value="7">Empire</option><option value="12">Gang</option><option value="0">Group</option><option value="Guild">Guild</option><option value="10">Hord</option><option value="1">Klub</option><option value="11">Meute</option><option value="8">Sekt</option><option value="9">Skool</option><option value="4">Skwat</option><option value="13">Triad</option></select></td></tr><tr><td colspan="2" align="center"><input type="submit" value="Afficher les groupes"></td></tr></table>                      </td>
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
					</tr></table>
				</td>
              </tr>
          <!-- slot title -->


          <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="468" height="11"></td></tr>

          <!-- list -->
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
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>


		  <table width="100%"  border="0" cellspacing="0" cellpadding="3">

                  <tr>
                      <td valign="top">
                          <table width="100%" cellspacing="0" cellpadding="3">
                          <tr>
                              <td width="1%" align="left"></td>
                              <td align="center"></td>
                              <td width="1%" align="center"></td>
                              <td width="1%" align="center"></td>
                          </tr>
         <?php 
							 
							 							  
										if(!isset($_GET['gr_name']))
										{
											@$gr_name = mysql_real_escape_string(htmlspecialchars($_GET['gr_name']));
											$group_nrml=mysql_query('SELECT group_id, 
											group_name, type FROM '.$pref.'groups
											WHERE group_officiel="0" ORDER BY group_id DESC LIMIT 0,60') or die(mysql_error().'<br >:' .$error_sql);
											if(mysql_num_rows($group_nrml) < 1) {
												echo'<tr><td>0</td><td>Il n\'y a pas de groupe !<td>0/20</td></td><td>Group</td>';
											}
											else
											{ 
												while($group_normal=mysql_fetch_assoc($group_nrml))
												{
												$prc = mysql_query('SELECT COUNT(*) AS nm FROM  phpbb_user_group WHERE group_id = "'.$group_normal['group_id'].'"');
							                   $pr = mysql_fetch_assoc($prc);
											   $nm = $pr['nm'];
												
													$ahaha = stripslashes($group_normal['group_name']);
													echo'<tr class="td_slotbleu_list_cycle"><td align="left"><b>'.$group_normal['group_id'].'</b></td><td align="center"><a href="/groups/?gid='.$group_normal['group_id'].'">'.$ahaha.'</a></td><td>'.$nm.'/20</td><td align="center">'.$group_normal['type'].'</td></tr>';
												}
											} 
							  
							 			}
										else
										{ 
							             
											$group_nrml=mysql_query('SELECT group_id, group_name, type FROM '.$pref.'groups WHERE group_name LIKE "%'.$gr_name.'%" ORDER BY group_id DESC LIMIT 0,60') or die(mysql_error().'<br >:' .$error_sql);
											if(mysql_num_rows($group_nrml) < 1) {
												echo'<tr><td>0</td><td>Il n\'y a pas de groupe !<td>0/20</td></td><td>Group</td>';
											}
											else
											{ 
												while($group_normal=mysql_fetch_assoc($group_nrml))
												{
												$prc = mysql_query('SELECT COUNT(*) AS nm FROM  phpbb_user_group WHERE group_id = "'.$group_normal['group_id'].'"');
							                   $pr = mysql_fetch_assoc($prc);
											   $nm = $pr['nm'];
													$ahahaz = stripslashes($group_normal['group_name']);
													echo'<tr class="td_slotbleu_list_cycle"><td align="left"><b>'.$group_normal['group_id'].'</b></td><td align="center"><a href="/groups/?gid='.$group_normal['group_id'].'">'.$ahahaz.'</a></td><td>'.$nm.'/20</td><td align="center">'.$group_normal['type'].'</td></tr>';
												}
											}
							  
							  			}
?>
                          <tr>
                                                                                    <td align="center" colspan="4"><input type="submit" name="gr[next]" value="suivants"></td>
                                                    </table>
                      </td>
                  </tr>
                  </table>


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
					</tr></table>
				</td>

              </tr>
          <!-- list -->
      </table>
          </td>
        </tr>
</table>
</form>

