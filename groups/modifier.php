
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
         
			<?php
			if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir créer un groupe !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour pouvoir créer un groupe!";
}
else {

$gid = (int)$_GET['gid'];

if(isset($_GET['gid']) && !empty($gid) && $gid > 5)
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
							$done_g = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$gid.'" AND group_moderator = "'.$userdata['user_id'].'"');
							$dg = mysql_fetch_assoc($done_g);
					   ?>
            <table width="468" border="0" cellpadding="0" cellspacing="0"> 
 
 
            <!-- Groupe Static Props --> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
              <tr> 
                <td bgcolor="#6EBEF0"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="10"> 
                    <tr> 
                      <td align="center"> 
 
                      <table width="100%" border="0" cellspacing="0" cellpadding="10"> 
                      <tr valign="top"><td> 
                      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"

                              codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"

                              width="102" height="89" id="blason" align="middle"> 
                          <param name="allowScriptAccess" value="always" /> 
                          <param name="movie" value="http://01static.chapatiz.com/fr//swf/blason.swf" /> 
                          <param name="menu" value="false" /> 
                          <param name="quality" value="high" /> 
                          <param name="bgcolor" value="#4a89ab" /> 
                          <param name="wmode" value="transparent" /> 
                          <param name="FlashVars" value="&bd=<?php echo $dg['blason']; ?>&" /> 
                              <embed src="http://01static.chapatiz.com/fr//swf/blason.swf" menu="false"

                              quality="high" bgcolor="#4a89ab"

                              width="102" height="89" name="blason"

                              align="middle" allowScriptAccess="always"

                              flashvars="&bd=<?php echo $dg['blason']; ?>&"

                              type="application/x-shockwave-flash"

                              wmode="transparent"

                              pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
                      </object> 
                      </td><td> 
					  <?php 
					  $prc = mysql_query('SELECT COUNT(*) AS nm FROM  phpbb_user_group WHERE group_id = "'.$gid.'"');
							  $pr = mysql_fetch_assoc($prc);
							  $nm = $pr['nm'] + 1;
							  ?>
                       Nom du groupe : <b><?php echo stripslashes($dg['group_name']); ?></b><br /> 
                       Groupe no.: <b><?php echo $dg['group_id']; ?></b><br /> 
                       Date de création : <b><?php echo date('d/m/Y \&\a\g\r\a\v\e H\hm', $dg['timestamp']); ?></b>    <br /> 
                       Membres de ce groupe <b><?php echo $nm ; ?>/20</b>    <br /> 
                      </td></tr> 
                      </table> 
 
                      </td> 
                    </tr> 
                  </table> 
               </td> 
              </tr> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
            <!-- Groupe Static Props --> 
			
            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="620" height="10" /></td></tr>			
			
            <!-- Groupe Dynamics Props --> 
              <tr> 
                <td align="left"> 
					<table width="620" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
              <tr> 
                <td bgcolor="#6EBEF0"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="10"> 
                    <tr> 
                      <td align="center"> 
                      <b class="titrebleu">Plus sur ce groupe</b> 
                      <br /> <br /> 
                      Ces informations ne sont pas <b>obligatoire</b>, mais c'est un <b>bonus</b> pour ton groupe !
                      <br /> 
                      <br /> 
                      <br /> 
 
					  <form action="modifok.php" method="POST"> 
 
                      <table width="100%" cellspacing="0" cellpadding="3"> 
                      <tr bgcolor="#A9DEFF"> 
                               <td align="right" valign="top">
                              <b>Genre du Groupe:</b>

                              <br />
                              <span style="font-size:9px">
								Choisis un genre de groupe, cela permet de mieux définir l'activité du groupe, ainsi que sa position dans la communauté. <br/>Tu peux choisir <b>Group</b> pour un groupe simple.

                              </span>
							  <td align="left">			     
<?php
$type = $data1['type'];
?>
<select name="type" style="width: 350px;">

<option value="Group"<?php if($type == "Group") { ?> selected="selected" <?php } ?> >Group</option>

<option value="Klub"<?php if($type == "Klub") { ?> selected="selected" <?php } ?> >Klub</option>

<option value="Clan"<?php if($type == "Clan") { ?> selected="selected" <?php } ?> >Clan</option>

<option value="Ekip"<?php if($type == "Ekip") { ?> selected="selected" <?php } ?> >Ekip</option>

<option value="Skwat"<?php if($type == "Skwat") { ?> selected="selected" <?php } ?> >Skwat</option>

<option value="Guild"<?php if($type == "Guild") { ?> selected="selected" <?php } ?> >Guild</option>

<option value="Alliance"<?php if($type == "Alliance") { ?> selected="selected" <?php } ?> >Alliance</option>

<option value="Empire"<?php if($type == "Empire") { ?> selected="selected" <?php } ?> >Empire</option>

<option value="Sekt"<?php if($type == "Sekt") { ?> selected="selected" <?php } ?> >Sekt</option>

<option value="Skool"<?php if($type == "Skool") { ?> selected="selected" <?php } ?> >Skool</option>

<option value="Hord"<?php if($type == "Hord") { ?> selected="selected" <?php } ?> >Hord</option>

<option value="Meute"<?php if($type == "Meute") { ?> selected="selected" <?php } ?> >Meute</option>

<option value="Gang"<?php if($type == "Gang") { ?> selected="selected" <?php } ?> >Gang</option>

<option value="Triad"<?php if($type == "Triad") { ?> selected="selected" <?php } ?> >Triad</option>

</select>
                              <br />
                              <br />
                          </td> 
                      <tr> 
 
                      <tr bgcolor="#A9DEFF"> 
                          <td align="right" valign="top"> 
                           <b>Description du Groupe :</b> 
 
                              <br /> 
                              <span style="font-size:9px"> 
                              Une courte description du groupe, ces objectifs, caractéristiques de ces membres, créneaux horaires, etc ...
                              </span> 
                              <br /> 
                              <br /> 
 
                          </td> 
                          <td align="left" valign="top"> 
                              <textarea name="description" style="width:350px;height:150px;" ><?php echo $dg['group_description']; ?></textarea> 
                          </td> 
                      <tr> 
 
                      <tr bgcolor="#A9DEFF"> 
                          <td align="right" valign="top"> 
                              <b>Vérification d'inscription :</b> 
 
                              <br /> 
                              <span style="font-size:9px"> 
                              Cette fonction te permet d'acompagner les inscriptions pour ton groupe. <br />Lis-la soigneusement pour savoir à quoi correspond chaque ticket !
                              </span> 
                              <br /> 
                              <br /> 
                          </td> 
                          <td align="left" valign="top"> 
                              <table width="350" border="0" cellspacing="0" cellpadding="3"> 
                              <tr valign="top"> 
                               <td width="1%"><table border="0" cellspacing="0" cellpadding="O"> 
                               <tr> 
                                                                        <td><input type="radio" name="type_groupe" value="1" <?php if($dg['group_type'] == "1"){ echo 'checked="on"'; } ?>/></td> 
                                                                <td><img src="http://01static.chapatiz.com/fr/modif_lang/icone-statut-ferme.png" width="50" height="50" /></td> 
                               </tr> 
                               </table></td> 
                               <td> 
                                <b>Groupe fermé !</b> 
 
                                <br /> 
                                <span style="font-size:9px"> 
                                Ce groupe est fermé, tu ne peux pas le joindre ! <br />Cette fonction est utile quand ton groupe est parfait et tu ne veux pas recevoir des demandes d'addition, ou si tu préfères recruter toi même les membres dans ton groupe!
                                </span> 
                                <br /> 
                                <br /> 
 
                               </td> 
                              </tr> 
                              <tr valign="top"> 
                               <td width="1%"><table border="0" cellspacing="0" cellpadding="O"> 
                               <tr> 
                                                                        <td><input type="radio" name="type_groupe" value="0" <?php if($dg['group_type'] == "0"){ echo 'checked="on"'; } ?>/></td> 
                                                                <td><img src="http://01static.chapatiz.com/fr/modif_lang/icone-statut-ouvert.png" width="50" height="50" /></td> 
                               </tr> 
                               </table></td> 
                               <td> 
                                <b>Groupe Ouvert !</b> 
 
                                <br /> 
                                <span style="font-size:9px"> 
                                Ce groupe est ouvert et tout le monde peut le joindre -- il n'y a pas d'intermédiaire. <br />Cette fonction est utilie si tu veux que ton groupe soit ouvert à tout le monde. <br />Ceux qui s'inscrivent, deviennent membres de ton groupe immédiatement (mais tu peux toujours les supprimer plus tard, si tu veux).
                                </span> 
                                <br /> 
                                <br /> 
 
                                </td> 
                              </tr> 
                              <tr valign="top"> 
                               <td width="1%"><table border="0" cellspacing="0" cellpadding="O"> 
                               <tr> 
                                                                        <td><input type="radio" name="type_groupe" value="2"<?php if($dg['group_type'] == "2"){ echo 'checked="on"'; } ?>/></td> 
                                                                <td><img src="http://01static.chapatiz.com/fr/modif_lang/icone-statut-surdemande.png" width="50" height="50" /></td> 
                               </tr> 
                               </table></td> 
                               <td> 
                                   <b>Demandes</b> 
 
                                <br /> 
                                <span style="font-size:9px"> 
                                Ceux qui souhaitent joindre ton groupe devront t'envoyer leur demande. <br />Tu peux trouver la liste de demandes <a href='#demands'>en bas de cette page</a>, tu peux choisir ceux que tu veux accepter dans ton groupe et ceux que tu veux refuser. <br /><u>Note</u> : chaque demande est valide pendant une semaine!<br /> Le numéro maximum permis de demandes d'inscription pour ton groupe est de 250 !
                                </span> 
                                <br /> 
                                <br /> 
 
                               </td> 
                              </tr> 
                              </table> 
                          </td> 
                      <tr> 
 
                      <tr bgcolor="#A9DEFF"> 
                          <td align="right" valign="top"> 
                            <b>Emblème du groupe :</b> 
 
                              <br /> 
                              <span style="font-size:9px"> 
                              Décris l'activité de ton groupe dans une phrase.
                              </span> 
                              <br /> 
                              <br /> 
                          </td> 
                          <td align="left" valign="top"> 
                              <input type="text" maxlength="100" style="width:350px;" name="devise" value="<?php echo $dg['devise']; ?>" /> 
                          </td> 
                      <tr> 
 
                      <tr bgcolor="#A9DEFF"> 
                          <td align="right" valign="top"> 
                           <b>Localisation:</b> 
 
                              <br /> 
                              <span style="font-size:9px"> 
							  Indique le moment et l'endroit où les membres de ton groupe se retrouveront sur Chapatiz.
                              </span> 
                              <br /> 
                              <br /> 
 
                          </td> 
                          <td align="left" valign="top"> 
                           <input type="text" maxlength="100" style="width:350px;" name="localisation" value="<?php echo $dg['localisation']; ?>" /> 
                          </td> 
                      <tr> 
 
                      <tr> 
                          <td align="center" colspan="2"> 
                           <br /> 
						   <input type="hidden" name="gid" value="<?php echo $gid; ?>"> 
                           <input type="reset" value="Défaire !"/> 
                           &nbsp;
                           <input type="submit" name="edit_group_submit" value="Sauver les infos"/> 
						   </form>
                          </td> 
                      <tr> 
 
                      </table> 
 
                      </form> 
 
                      </td> 
                    </tr> 
                  </table> 
               </td> 
              </tr> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
            <!-- Groupe Dynamics Props --> 
			<tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="620" height="10" /></td></tr> 
			
            <!-- Groupe Users --> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
              <tr> 
                <td bgcolor="#6EBEF0"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="10"> 
                    <tr> 
                      <td align="center"> 
                      <b class="titrebleu">Membres de ce groupe</b> 
                      <br /> 
                      <br /> 
                       
                              <?php
					  $mx = mysql_query('SELECT COUNT(*) AS mx FROM phpbb_user_group WHERE group_id = "'.$gid.'"');
					  $mx = mysql_fetch_assoc($mx);
					  $x = $mx['mx'];
					  if($x > 0)
					  {
					  ?>
 
						<table width="100%" cellspacing="0" cellpadding="3"> 
							<tr> 
								  <td width="1%" align="left">#</td> 
                                  <td width="1%" align="center" nowrap="nowrap"><b>&nbsp;</b></td> 
                                  <td width="1%" align="left"><b>Membre ID</b></td> 
                                  <td align="center"><b>Pseudo</b></td> 
                                  <td width="1%" align="center">&nbsp;</td> 
                              </tr> 
							  <?php
							  $j = 0;
							  $gemx = mysql_query('SELECT * FROM phpbb_user_group WHERE group_id = "'.$gid.'"');
							  while($gem = mysql_fetch_assoc($gemx))
							  {
								$j++;
								if($j == "1" OR $j == "3" OR $j == "5" OR $j == "7" OR $j == "9" OR $j == "11" OR $j == "13" OR $j == "15" OR $j == "17" OR $j == "19")
								{
									echo '<tr bgcolor=#A9DEFF>';
								}
								else
								{
									echo '<tr>';
								}
								$wooxt = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$gem['user_id'].'"');
								$wooxt = mysql_fetch_assoc($wooxt);
								?>
                                  <td width="1%" align="left">
								  <?php echo $j;?></td> 
                                  <td width="1%" align="center" nowrap="nowrap"><em>&nbsp;</em></td> 
                                  <td align="left"><b><?php echo $gem['user_id']; ?></b></td> 
                                  <td align="center"><a href="/annuaire/?mid=<?php echo $gem['user_id']; ?>"><?php echo $wooxt['username']; ?></a></td> 
                                  <td align="center" nowrap="nowrap">[<a href="refus.php?mode=supprimer&amp;gid=<?php echo $gid; ?>&amp;mid=<?php echo $gem['user_id']; ?>">Supprimer</a>] 
								  </td> 
								</tr>
                              <?php
							  }
							  ?>
                         </table> 
 
					  <?php
					  }
					  else
					  {
							echo  '<b>Pas de requêtes!</b> ';
					}
					?>
 
                       					   
					  
                      </td> 
                    </tr> 
                  </table> 
               </td> 
              </tr>					  
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
            <!-- Groupe Users -->			
            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="620" height="10" /></td></tr> 
 
            <!-- Groupe Demands --> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
              <tr> 
                <td bgcolor="#6EBEF0"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="10"> 
                    <tr> 
                      <td align="center"> 
                      <b class="titrebleu">Demandes en attente pour ce groupe</b> 
                      <br /> 
                      <br /> 
					  <?php
					  $mm = mysql_query('SELECT COUNT(*) AS mm FROM phpbb_demande_group WHERE group_id = "'.$gid.'"');
					  $mm = mysql_fetch_assoc($mm);
					  $m = $mm['mm'];
					  if($m > 0)
					  {
					  ?>
 
						<table width="100%" cellspacing="0" cellpadding="3"> 
							<tr> 
								  <td width="1%" align="left">#</td> 
                                  <td width="1%" align="center" nowrap="nowrap"><b>&nbsp;</b></td> 
                                  <td width="1%" align="left"><b>Membre ID</b></td> 
                                  <td align="center"><b>Pseudo</b></td> 
                                  <td width="1%" align="center">&nbsp;</td> 
                              </tr> 
							  <?php
							  $i = 0;
							  $demx = mysql_query('SELECT * FROM phpbb_demande_group WHERE group_id = "'.$gid.'"');
							  while($dem = mysql_fetch_assoc($demx))
							  {
								$i++;
								if($i == "1" OR $i == "3" OR $i == "5" OR $i == "7" OR $i == "9" OR $i == "11" OR $i == "13" OR $i == "15" OR $i == "17" OR $i == "19")
								{
									echo '<tr bgcolor=#A9DEFF>';
								}
								else
								{
									echo '<tr>';
								}
								$woot = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$dem['user_id'].'"');
								$woot = mysql_fetch_assoc($woot);
								?>
                                  <td width="1%" align="left">
								  <?php echo $i;?></td> 
                                  <td width="1%" align="center" nowrap="nowrap"><em>&nbsp;</em></td> 
                                  <td align="left"><b><?php echo $dem['user_id']; ?></b></td> 
                                  <td align="center"><a href="/annuaire/?mid=<?php echo $dem['user_id']; ?>"><?php echo $woot['username']; ?></a></td> 
                                  <td align="center" nowrap="nowrap">[<a href="accept.php?mode=demande&amp;gid=<?php echo $gid; ?>&amp;mid=<?php echo $dem['user_id']; ?>">Accepter</a>] - [<a href="refus.php?mode=demande&amp;gid=<?php echo $gid; ?>&amp;mid=<?php echo $dem['user_id']; ?>">Refuser</a>]
								  </td> 
								</tr>
                              <?php
							  }
							  ?>
                         </table> 
 
					  <?php
					  }
					  else
					  {
							echo  '<b>Pas de requêtes!</b> ';
					}
					?>
 
                       
 
                      </td> 
                    </tr> 
                  </table> 
               </td> 
              </tr> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
            <!-- Groupe Demands --> 
 
 
            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="620" height="10" /></td></tr> 
 
 
            <!-- Delete Groupe --> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
              <tr> 
                <td bgcolor="#6EBEF0"> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="10"> 
                    <tr> 
                      <td align="center"> 
                      <b class="titrebleu">Effacer ce groupe</b> 
                      <br /> 
                      <form action="group_delete.php" method="POST"> 
					  <input type="hidden" name="gid" value="<?php echo $gid; ?>"> 
                       <input type="submit" name="delete_group_submit" value="Effacer ce groupe"/> 
                      </form> 
                      </td> 
                    </tr> 
                  </table> 
               </td> 
              </tr> 
              <tr> 
                <td align="left"> 
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.png" border="0" width="12" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.png" border="0" width="596" height="12"/></td> 
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.png" border="0" width="12" height="12"/></td> 
					</tr></table> 
				</td> 
              </tr> 
            <!-- Delete Groupe --> 
 
			</table> 
         </td> 
<?php
}
}
}
// $_POST['description']
// $_POST['type_groupe'] (1,2,0)
// $_POST['devise']
// $_POST['localisation']
// $_POST['gid']
// >modifok.php


?>



       <?php include('right.php');

include('../bbs/includes/bas.php');  
	   ?>
        </tr>
</table>
