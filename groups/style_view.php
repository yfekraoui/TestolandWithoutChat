
<?php

$gid=$_GET['gid'];
$error_group='<td valign="top">
<!-- main content -->
<table width="468" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">

            <!-- Error -->
              <tr>
                <td align="left"><a href="/groups/"><img src="http://01static.chapatiz.com/fr/modif_lang//head_group_center.gif" border="0"/></a></td>
              </tr>
              <tr>
                <td bgcolor="#6EBEF0" background="http://01static.chapatiz.com/fr/hp/nav/fd_group.gif" style="background-repeat:repeat-x">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td align="center">
                          <b class="titrebleu">Erreur !</b>
                          <br />
                          <br />
                          <b>Ce groupe n\'existe pas ou plus !</b>
                      </td>
                    </tr>
                  </table>

               </td>
              </tr>
              <tr>
                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.gif" border="0" width="12" height="12"/></td>
					</tr></table>

					<!--<img src="http://01static.chapatiz.com/fr/bg_top_grandbleu.gif" width="468" height="11" />-->
				</td>
              </tr>

			</table>
			</td>
	</tr>
	</table>
</td>';
//Je ne met pas le (int) pour la vérif du 'is_numeric', lje emt le intval dans la requete ^^
if(empty($gid) || !is_numeric($gid)) 
//Si, le n° de membre pour l'indentification est vide ou que ce n'est pas un nombre...
{
echo $error_group; 

}

else

{

	$requete1=mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$gid.'"') or die($error_sql()); 
/*Notre premiere requete, qui va chercher quelques infos sur le membre WHERE gid= ce membre
Sinon, si il y a un probleme dans la requete, il affiche une variable fais dans config.php (dossier includes) pour nous excuser etc...politesse ^^*/
if(mysql_num_rows($requete1) < 1) //Si la requete n'a rien trouvé...
{

echo $error_group; } else {
$data_group=mysql_fetch_assoc($requete1);
?>
<td valign="top">
<!-- main content -->
<table width="468" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">

            <!-- Groupe Detail -->
              <tr>
                <td align="left"><a href="/groups/"><img src="/img/groups/header_groups.gif" border="0" width="468"/></a></td>
              </tr>
              <tr>
                <td bgcolor="#d5e6f3" align="center"> 
                   <?php echo'    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
                                codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                                width="468" height="89"
                                id="group_header" align="giddle">
                                <param name="allowScriptAccess" value="always" />

                                <param name="movie" value="http://01static.chapatiz.com/fr/swf/group_header.swf" />
                                <param name="menu" value="false" />
                                <param name="quality" value="high" />
                                <param name="wmode" value="transparent" />
                                <param name="FlashVars" value="&n='.stripslashes($data_group['group_name']).'&o='.$data_group['group_officiel'].'&d='.stripslashes($data_group['devise']).'&bd='.$data_group['blason'].'&" />
                                <embed src="http://01static.chapatiz.com/fr/swf/group_header.swf" menu="false" quality="high"
                                width="468" height="89" name="group_header" align="giddle" wmode="transparent" 
                                flashvars="&n='.stripslashes($data_group['group_name']).'&o='.$data_group['group_officiel'].'&d='.stripslashes($data_group['devise']).'&bd='.$data_group['blason'].'&"
                                allowScriptAccess="always" type="application/x-shockwave-flash"
                                pluginspage="http://www.macromedia.com/go/getflashplayer" />
                        </object>'; ?>
                  <table border="0" cellspacing="0" cellpadding="10">
                    <tr>

                      <td>
                      <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td>
                            <?php 
							 $t = $data_group['group_description']; 
							 $t = stripslashes($t);
							 $t = nl2br($t);
							 $t = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $t);
							 $t = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $t);
							 $t = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $t);
							 $t = preg_replace('#\[color=(.+)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $t);
							 echo $t;
							?>
                              <br />
                              <br />                          </td>
                        </tr>

                        <tr>
                          <td width="448" align="left" valign="top">
                          <table width="448" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td>
								<table width="448" border="0" cellpadding="0" cellspacing="0"><tr>
								<td><img src="bg_g_bw.gif" border="0" width="448" height="12"/></td>

								</tr></table>							  </td>
                            </tr>
                            <tr>
                              <td bgcolor="#eff5fa">
                              <table border="0" cellspacing="0" cellpadding="5">
                              <tr><td>
							  <?php
							  $de = mysql_query('SELECT username FROM phpbb_users WHERE user_id = "'.$data_group['group_moderator'].'"');
							  $de = mysql_fetch_assoc($de);
							 
							 // GROUPE NAME [TYPE]
							  if($data_group['type'] == "Group")
							  {
							  $groupe = "Leader du groupe";
							  }
							  elseif($data_group['type'] == "Klub")
							  {
							  $groupe = "Président du Club";
							  }
							  elseif($data_group['type'] == "Clan")
							  {
							  $groupe = "Chef de la Tribu";
							  }
							   elseif($data_group['type'] == "Ekip")
							  {
							  $groupe = "Entraineur de l'équipe";
							  }
							  elseif($data_group['type'] == "Skwat")
							  {
							  $groupe = "Leader du Skwat";
							  }
							   elseif($data_group['type'] == "Guild")
							  {
							  $groupe = "Guide de la guilde";
							  }
							  elseif($data_group['type'] == "Alliance")
							  {
							  $groupe = "Capitaine de l'alliance";
							  }
							    elseif($data_group['type'] == "Empire")
							  {
							  $groupe = "Empereur de l'empire";
							  }
							      elseif($data_group['type'] == "Sekt")
							  {
							  $groupe = "Gourou de la Secte";
							  }
							        elseif($data_group['type'] == "Sekool")
							  {
							  $groupe = "Principal de l'école";
							  }
							        elseif($data_group['type'] == "Hord")
							  {
							  $groupe = "Leader de l'horde";
							  }
							      elseif($data_group['type'] == "Meute")
							  {
							  $groupe = "Leader du Pacte";
							  }
							      elseif($data_group['type'] == "Gang")
							  {
							  $groupe = "Leader de la Gangue";
							  }
							      elseif($data_group['type'] == "Triad")
							  {
							  $groupe = "Boss de la triade";
							  }
							  ?>
                              <?php echo $groupe; ?> : <a href="/annuaire/?mid=<?php echo $data_group['group_moderator']; ?>"><?php echo $de['username']; ?></a><br />

                              <br />
							  <?php
							  $prc = mysql_query('SELECT COUNT(*) AS nm FROM  phpbb_user_group WHERE group_id = "'.$gid.'"');
							  $pr = mysql_fetch_assoc($prc);
							  $nm = $pr['nm'] + 1;
							  $olol = 100 / 20;
							  $ololz = $olol * $nm;
							  $fn = ceil($ololz);
							  ?>
							  
Occupation du groupe : <b><?php echo $fn; ?>%</b> (<b><?php echo $nm; ?></b>/<b>20</b> places)<br /><br />
<?php
$requete_m=mysql_query('SELECT g.user_id, u.username FROM '.$pref.'user_group g, '.$pref.'users u WHERE g.group_id = "'.$gid.'" AND g.user_id = u.user_id') or die(mysql_error() .'<br />'. $error_sql);

                              echo'Membres :';
							  if(mysql_num_rows($requete_m) < 1) {
							  echo'<b> Aucun membre dans ce groupe !</b>';
							  } else { 
							  
							 while($data_m=mysql_fetch_assoc($requete_m))
							 {
							  echo '<a href="../annuaire/?mid='.$data_m['user_id'].'">
							  '.stripslashes($data_m['username']).'
							  </a>, ';
							 
							 }
							 
							 }
							   ?><br />

                              <br />

                              Localisation :
                              <b>
                                                <?php echo stripslashes($data_group['localisation']); ?></b><br />
                              <br />

                      <table border="0" cellspacing="4" cellpadding="0">
                        <tr>
                          <td align="center" valign="bottom" background="http://01static.chapatiz.com/fr/modif_lang//icone-nivomoyen.png" width="50" height="50">

                             <?php function level($level)
		   {  
		$level=str_replace('0', '<img src="/img/level/0.gif" />', $level);
		   $level=str_replace('1', '<img src="/img/level/1.gif" />', $level);
		     $level=str_replace('2', '<img src="/img/level/2.gif" />', $level);
			   $level=str_replace('3', '<img src="/img/level/3.gif" />', $level);
			     $level=str_replace('4', '<img src="/img/level/4.gif" />', $level);
				   $level=str_replace('5', '<img src="/img/level/5.gif" />', $level);
				     $level=str_replace('6', '<img src="/img/level/6.gif" />', $level);
					   $level=str_replace('7', '<img src="/img/level/7.gif" />', $level);
					     $level=str_replace('8', '<img src="/img/level/8.gif" />', $level);
						   $level=str_replace('9', '<img src="/img/level/9.gif" />', $level);
		    return $level; 
		   } 
		   
		   if(mysql_num_rows($requete_m) < 1) 
		   {
			   $luv = mysql_query('SELECT level FROM phpbb_users where user_id = "'.$data_group['group_moderator'].'"');
			   $lux = mysql_fetch_assoc($luv);
			   $level = $lux['level'];
			   echo level(ceil($level));
		   }
		   else
		   {
		   $fuk = mysql_real_escape_string(htmlspecialchars($_GET['gid']));
		$k = 0;
		$levela = 0;
		$rk = mysql_query('SELECT * FROM phpbb_user_group WHERE group_id = "'.$fuk.'"');
		while($dnl = mysql_fetch_assoc($rk))
		{
			$k++;
			$ketex = mysql_query('SELECT level FROM phpbb_users WHERE user_id = "'.$dnl['user_id'].'"');
			$kete = mysql_fetch_assoc($ketex);
			for($lol=0;$lol<= $kete['level'];$lol++) { $levela++;}

		} 
		$level = $levela / $k;
		
		echo level(ceil($level));
		   
		   }
		   ?>
		   
		   
		   <br /><img src="http://01static.chapatiz.com/fr/spacer.gif" width="50" height="5" border="0"></td>
                          <td><?php
						  $statut="ferme";
						  if($data_group['group_type']==0)
						  {
							  $statut="ouvert";
							  $text="Ce groupe est ouvert, tu peux le joindre immédiatement..";
							  $action_ask=1;
							  $action="Tu peux <b>demander ton inscription</b> à ce groupe.";
						  }
						  elseif($data_group['group_type']==2)
						  {
								$statut="surdemande";
								$text="L'entrée dans ce groupe est sur demande, c'est le créateur du groupe qui choisi les nouveaux membres.";
								$action="Tu peux <b>demander ton inscription</b> à ce groupe.";
								$action_ask=1; 
						  } 
						  elseif($nm >= 20)
						  {
								$statut="ferme";
							    $text="Ce groupe est ferm&eacute;, il n'accepte pas de nouveaux membres pour le moment !";
							    $action="Ce groupe est <b>plein</b> !! ";
						  }
						  else
						  {  
							  $statut="ferme";
							  $text="Ce groupe est ferm&eacute;, il n'accepte pas de nouveaux membres pour le moment !";
							  $action="Ce groupe n'a <b>plus de places disponibles</b> ! ";
						  }
						  echo
						  '<img src="http://01static.chapatiz.com/fr/modif_lang/icone-statut-'.$statut.'.png" width="50" height="50" />'; 
						  $action_ask=0;
						  ?></td>
                        </tr>
                      </table>

                              </td></tr>
                              </table>                      		  </td>
                            </tr>

                            <tr>
                              <td>
								<table width="448" border="0" cellpadding="0" cellspacing="0"><tr>
								<td><img src="bg_g_wb.gif" border="0" width="448" height="12"/></td>
								</tr></table>							  </td>
                            </tr>
                          </table></td>
                          </tr>
                        <tr>
                          <td colspan="2">
                            <br />
                            <?php
							function jour($n, $a)
							{
								$sou = $n - $a;
								$jx = $sou / 86400;
								$j = ceil($jx);
								return $j;
							}
							$time = time();
							$Atime = $data_group['timestamp'];

							echo'Groupe n&deg; <b>'.$gid.'</b> cr&eacute;&eacute; le  <b>le 
							'.date('d/m/Y \&\a\g\r\a\v\e H\hm', $data_group['timestamp']).' ('; ?>
							<?php echo jour($time, $Atime);?>&nbsp;jours)
							
							
							</b>                        </td>
                        </tr>
                        
                        <tr>
                          <td colspan="2">&nbsp;                          </td>
                        </tr>
                        
                        <tr>
                          <td colspan="2">

                             <!-- top -->
<table width="448" border="0" cellpadding="0" cellspacing="0">
</table>
                             <!-- end top -->                          </td>
                        </tr>
                      </table>                      </td>
                    </tr>
                  </table>               </td>
              </tr>
              <tr>
                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="bg_g_bb.gif" border="0" width="468" height="12"/></td>

					</tr></table>				</td>
              </tr>
			</table>
	</td>
		<td valign="top">
			<table cellspacing="0" border="0" cellpadding="0">
			    <tr> 
                <td align="left">
					<table width="232" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_klr.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_klr.gif" border="0" width="208" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_klr.gif" border="0" width="12" height="12"/></td>
					</tr></table>				</td>
              </tr>
              <tr>
                <td bgcolor="#D5E6F3"
				<!-- information about subcription for this group-->
				<table border="0" cellspacing="0" cellpadding="5">

						<tr>
						  <td valign="middle">
<div align="center"><b class="titrebleu">Inscription à ce groupe</b></div>
					<br/>
					<br/>
					<table border="0" cellpadding="5" cellspacing="0">
					<tr>
						<td><?php echo'
						  <img src="http://01static.chapatiz.com/fr/modif_lang/icone-statut-'.$statut.'.png" width="50" height="50" />'; ?></td>
						<td><b><?php echo $text;?></b></td>
					</tr>
					</table>
					<br/>
					<br/>
					
						<?php echo ' '.$action; ?></td>
			</tr>
		</table>
              &nbsp;   <?php
			  
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
				
				
				
				if($ndi >= 1 && $data_group['group_type']==0)
				{
					echo 'Tu ne <b>peux pas</b> joindre ce groupe<br />, sinon tu dépassera le nombre de<br /> groupes auxquels tu es autorisé de<br /> participer.';
				}
				elseif($ndi >= 1 && $data_group['group_type']==2)
				{
					echo 'Tu ne <b>peux pas</b> joindre ce groupe<br />, sinon tu dépassera le nombre de<br /> groupes auxquels tu es autorisé de<br /> participer.';
				}
				elseif($data_group['group_type']==0 && $ndi < 1)
				{
				echo' <a href="demande.php?gid='.$gid.'">

											   <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/>
											  Demander mon inscription à ce &nbsp;groupe</a>.
				'; }
				elseif($data_group['group_type']==2 && $nd1 < 1) 
				{
				echo' <a href="demande.php?gid='.$gid.'&amp;mode=demande">

											   <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/>
											  Demander mon inscription à ce &nbsp;groupe</a>.';
				}
?></td>
		</tr>
		<tr>
			<td align="left">
				<table width="232" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_klr.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_klr.gif" border="0" width="208" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_klr.gif" border="0" width="12" height="12"/></td>
					</tr></table>

			</td>
		</tr>
	</table>
		</td>
	</tr>
	</table>
</td>

		 

        
        
<?php
}

}



?>