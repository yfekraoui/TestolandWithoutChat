
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
$title='Mariage';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu

function mois($time)
{
	$moix = date('m', $time);
	
	if($moix == "01"){$mois = "janvier";}
	elseif($moix == "02"){$mois = "février";}
	elseif($moix == "03"){$mois = "mars";}
	elseif($moix == "04"){$mois = "avril";}
	elseif($moix == "05"){$mois = "mai";}
	elseif($moix == "06"){$mois = "juin";}
	elseif($moix == "07"){$mois = "juillet";}
	elseif($moix == "08"){$mois = "août";}
	elseif($moix == "09"){$mois = "septembre";}
	elseif($moix == "10"){$mois = "octobre";}
	elseif($moix == "11"){$mois = "novembre";}
	elseif($moix == "12"){$mois = "décembre";}
	
	
	return $mois;
}

function jours($time)
{
	$joursx = date('N', $time);
		
	if($joursx == "1"){$jours = "lundi";}
	elseif($joursx == "2"){$jours = "mardi";}
	elseif($joursx == "3"){$jours = "mercredi";}
	elseif($joursx == "4"){$jours = "jeudi";}
	elseif($joursx == "5"){$jours = "vendredi";}
	elseif($joursx == "6"){$jours = "samedi";}
	elseif($joursx == "7"){$jours = "dimanche";}
		
	
	return $jours;
}

function da($time)
{
	$jd = date('d', $time);
	$a = date('Y', $time);
	$h = date('H\hi', $time);
	$jours = jours($time);
	$mois = mois($time);
	
	$da = "Aujourd'hui<b> $jd $mois $a</b>,";
	return $da;
}
function diw($time)
{
	$jd = date('d', $time);
	$a = date('Y', $time);
	$mois = mois($time);
	$h = date('H\hi', $time);
	$jours = jours($time);
	$diw = "le<b> $jours $jd $mois $a à $h</b>";
	return $diw;
}
function wad($m1, $m2, $t1, $t2)
{
	$rad1 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m1.'"');
	$rad2 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m2.'"');
	$rad3 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$t1.'"');
	$rad4 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$t2.'"');
	
	$fad1 = mysql_fetch_assoc($rad1);
	$fad2 = mysql_fetch_assoc($rad2);
	$fad3 = mysql_fetch_assoc($rad3);
	$fad4 = mysql_fetch_assoc($rad4);
	
	$ad1 = $fad1['avatar_design'];
	$ad2 = $fad2['avatar_design'];
	$ad3 = $fad3['avatar_design'];
	$ad4 = $fad4['avatar_design'];
	
	$fullad = "$ad3,$ad2,$ad1,$ad4";
	
	return $fullad;
}
function voeux($m1, $m2, $t1, $t2)
{
	$rad1 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m1.'"');
	$rad2 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m2.'"');
	$rad3 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$t1.'"');
	$rad4 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$t2.'"');
	
	$fad1 = mysql_fetch_assoc($rad1);
	$fad2 = mysql_fetch_assoc($rad2);
	$fad3 = mysql_fetch_assoc($rad3);
	$fad4 = mysql_fetch_assoc($rad4);
	
	$name1 = $fad1['username'];
	$name2 = $fad2['username'];
	$name3 = $fad3['username'];
	$name4 = $fad4['username'];
	
	$voeux = 'Nos meilleurs voeux à <br />';
	$voeux .= '<a href="/annuaire/?mid='.$m1.'">'.$name1.'</a> et ';
	$voeux .= '<a href="/annuaire/?mid='.$m2.'">'.$name2.'</a><br />';
	$voeux .= 'dont le mariage a été fait par <a href="/annuaire/?mid=165">Guruji</a> avec pour témoin <br />';
	$voeux .= '<a href="/annuaire/?mid='.$t1.'">'.$name3.'</a> et ';
	$voeux .= '<a href="/annuaire/?mid='.$t2.'">'.$name4.'</a>.';
	
	return $voeux;
}
function m24($m1, $m2, $t1, $t2, $id, $timestamp)
{
	$h = date('H\hi', $timestamp);
	$rad1 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m1.'"');
	$rad2 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m2.'"');
	$rad3 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$t1.'"');
	$rad4 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$t2.'"');
	
	$fad1 = mysql_fetch_assoc($rad1);
	$fad2 = mysql_fetch_assoc($rad2);
	$fad3 = mysql_fetch_assoc($rad3);
	$fad4 = mysql_fetch_assoc($rad4);
	
	$name1 = $fad1['username'];
	$name2 = $fad2['username'];
	$name3 = $fad3['username'];
	$name4 = $fad4['username'];
	
	
	$m24 = 'à <b>'.$h.'</b>,<br />';
	$m24 .= '<a href="/annuaire/?mid='.$m1.'">'.$name1.'</a> et ';
	$m24 .= '<a href="/annuaire/?mid='.$m2.'">'.$name2.'</a> se sont mariés<br />';
	$m24 .= 'avec pour témoin ';
	$m24 .= '<a href="/annuaire/?mid='.$t1.'">'.$name3.'</a> et ';
	$m24 .= '<a href="/annuaire/?mid='.$t2.'">'.$name4.'</a><br />';
	$m24 .= '<a href="?wid='.$id.'">'.$id.'</a>';
	if($id == 1){$m24 .= ' er mariage.';}else{$m24 .= ' ème mariage.';}
	
	return $m24;
}
function mj($time)
{
		$nid = 0;
		$j = date('d', $time);
		$ft = mysql_query('SELECT * FROM wedding');
		while($fft = mysql_fetch_assoc($ft))
		{
			$jw = date('d', $fft['timestamp']);
			if($j == $jw)
			{
				$nid++;
			}
			else
			{
				$nid = 0;
			}
		}
return $nid;
}
function must($m1, $m2, $id, $timestamp, $f)
{
	$time = time();
	$sou = $time - $timestamp;
	$jx = $sou / 86400;
	$v = ceil($jx);
	if($v == "-0")
	{
		$v = "1";
	}
	
	$rad1 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m1.'"');
	$rad2 = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$m2.'"');
	$fad1 = mysql_fetch_assoc($rad1);
	$fad2 = mysql_fetch_assoc($rad2);
	
	$name1 = $fad1['username'];
	$name2 = $fad2['username'];
	
	 $must = '<td valign="top" align="center"><b>'.$f.'</b></td>';
     $must .= '<td valign="top" align="center">';
     $must .= '<a href="/annuaire/?mid='.$m1.'">'.$name1.'</a>';
     $must .= ' et ';
     $must .= '<a href="/annuaire/?mid='.$m2.'">'.$name2.'</a>'; 
     $must .= '</td><td valign="top" align="center"><em>n°<a href="?wid='.$id.'">'.$id.'</a></em></td>';
     $must .= '<td valign="top" align="center"><b>'.$v.'</b></td>';
	 
return $must;

}
?>
<!-- main content -->

<td valign="top">
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">
			<?php
			if(isset($_GET['wid']) && !empty($_GET['wid']))
			{
				$gwid = (int)mysql_real_escape_string(htmlspecialchars($_GET['wid']));
				
				?>
				
				  <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                         <?php
							$reqw = mysql_query('SELECT * FROM wedding WHERE id = "'.$gwid.'"');
							$rdw = mysql_fetch_assoc($reqw);
							
							$wtime = time();
							$wsou = $wtime - $rdw['timestamp'];
							$wjx = $wsou / 86400;
							$wv = ceil($wjx);
							if($gwid == $rdw['id'])
							{
							?>

                          <div align="center"><span class="titrebleu">Fiche mariage</span><br /><br />
						  <?php echo diw($rdw['timestamp']);?> , <b><?php echo $rdw['id'];?></b><?php if($rdw['id'] == 1){echo'er';}else{echo'ème';}?> mariage.
                          </div>
						  <center>
						  
						    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="400" height="250" id="Wedding" align="middle"> 
							<param name="allowScriptAccess" value="always" /> 
							<param name="movie" value="wedding1.swf" /> 
							<param name="quality" value="high" /> 
							<param name="bgcolor" value="#ffffff" /> 
							<param name="FlashVars" value="&ad=<?php echo wad($rdw['m_id_1'] , $rdw['m_id_2'] , $rdw['t_id_1'] , $rdw['t_id_2']);?>" /> 
							<param name="wmode" value="transparent" /> 
							<param name="menu" value="false" /> 
							<embed src="wedding1.swf" FlashVars="&ad=<?php echo wad($rdw['m_id_1'] , $rdw['m_id_2'] , $rdw['t_id_1'] , $rdw['t_id_2']);?>" wmode="transparent" menu="false" quality="high" bgcolor="#ffffff" width="400" height="250" name="Wedding" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
							</object> 
							<br /><br /><br />
							<?php echo voeux($rdw['m_id_1'] , $rdw['m_id_2'] , $rdw['t_id_1'] , $rdw['t_id_2']);?><br /><br />
							<img src="mariage2.gif" alt="wedding" border="0" /><br />
							<?php if($wv == "-0") { $wv = "1"; } ?>
							<b><?php echo $wv; ?></b> jours de bonheurs!
							
						  </center>
						  <?php
						  }
						  else
						  {
							echo 'Ce mariage n\'existe pas !';
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
				
				<?php
			}
			elseif(isset($_GET['mid']) && !empty($_GET['mid']))
			{
				$gmid = (int)mysql_real_escape_string(htmlspecialchars($_GET['mid']));
				?>
				
				
				  <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
<?php
							$reqm = mysql_query('SELECT * FROM wedding WHERE m_id_1 = "'.$gmid.'" OR m_id_2 = "'.$gmid.'"');
							$rdm = mysql_fetch_assoc($reqm);
							
							$mtime = time();
							$msou = $mtime - $rdm['timestamp'];
							$mjx = $msou / 86400;
							$mv = ceil($mjx);
							if($gmid == $rdm['m_id_1'] || $gmid == $rdm['m_id_2'])
							{
							?>

                          <div align="center"><span class="titrebleu">Fiche mariage</span><br /><br />
						  <?php echo diw($rdm['timestamp']);?> , <b><?php echo $rdm['id'];?></b><?php if($rdm['id'] == 1){echo' er';}else{echo' ème';}?> mariage.
                          </div>
						  <center>
						  
						    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="400" height="250" id="Wedding" align="middle"> 
							<param name="allowScriptAccess" value="always" /> 
							<param name="movie" value="wedding1.swf" /> 
							<param name="quality" value="high" /> 
							<param name="bgcolor" value="#ffffff" /> 
							<param name="FlashVars" value="&ad=<?php echo wad($rdm['m_id_1'] , $rdm['m_id_2'] , $rdm['t_id_1'] , $rdm['t_id_2']);?>" /> 
							<param name="wmode" value="transparent" /> 
							<param name="menu" value="false" /> 
							<embed src="wedding1.swf" FlashVars="&ad=<?php echo wad($rdm['m_id_1'] , $rdm['m_id_2'] , $rdm['t_id_1'] , $rdm['t_id_2']);?>" wmode="transparent" menu="false" quality="high" bgcolor="#ffffff" width="400" height="250" name="Wedding" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
							</object> 
							<br /><br /><br />
							<?php echo voeux($rdm['m_id_1'] , $rdm['m_id_2'] , $rdm['t_id_1'] , $rdm['t_id_2']);?><br /><br />
							<img src="mariage2.gif" alt="wedding" border="0" /><br />
							<b><?php echo $mv; ?></b> jours de bonheurs!
							
						  </center>
						  <?php
						  }
						  else
						  {
							echo 'Ce membre n\'est pas marié !';
						  }
						  ?>                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
			  
			  
				<?php
			}
			else
			{
			?>
				
              <tr>
                <td align="left">
				<img src="/img/mariages_header.gif" alt="header_mariage" />
                </td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5" align="center">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">

                    <tr>
                      <td>


                      <div align="center">
                        <table border="0" align="center" cellpadding="5" cellspacing="0" class="subnav">
                          <tr>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>

                                  <td valign="middle" bgcolor="#78AADB"><a href="#htp">Les mariages du jours</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#gameplay">Les récent</a></td>

                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#top20">Ceux qui durent</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>

                                </tr>

                              </table></td>
                          </tr>
                       </table>
                      </div>


                          <br />
						  Dans notre monde, on peut se faire beaucoup d'amis, il arrive même que
parfois certainnes relations aillent au-dela de l'amitié..<br /><br />

Voilà pourquoi notre <a>Guruji</a> célébre chaque <b>mercredi</b>,<b> samedi</b> et 
<b>dimanche</b> de magnifiques mariages sur la coline sacrée.
Seuls les membres célibataires peuvent demander à se marier.
Ceux qui veulent briser ces liens sacrés devront trouver la grotte du
Divorce et affronter la honte et la peur.




                          

                      </td>
                    </tr>

                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>


			<tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>

              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                         <?php
							$req = mysql_query('SELECT * FROM wedding ORDER BY id DESC LIMIT 1');
							$dm = mysql_fetch_assoc($req);
							
							?>

                          <div align="center"><span class="titrebleu">Le dernier Mariage</span><br /><br />
						  <?php echo diw($dm['timestamp']);?> , <b><a href="?wid=<?php echo $dm['id'];?>"><?php echo $dm['id'];?></a></b><?php if($dm['id'] == 1){echo' er';}else{echo' ème';}?> mariage.
                          </div>
						  <center>
						  
						    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="400" height="250" id="Wedding" align="middle"> 
							<param name="allowScriptAccess" value="always" /> 
							<param name="movie" value="wedding1.swf" /> 
							<param name="quality" value="high" /> 
							<param name="bgcolor" value="#ffffff" /> 
							<param name="FlashVars" value="&ad=<?php echo wad($dm['m_id_1'] , $dm['m_id_2'] , $dm['t_id_1'] , $dm['t_id_2']);?>" /> 
							<param name="wmode" value="transparent" /> 
							<param name="menu" value="false" /> 
							<embed src="wedding1.swf" FlashVars="&ad=<?php echo wad($dm['m_id_1'] , $dm['m_id_2'] , $dm['t_id_1'] , $dm['t_id_2']);?>" wmode="transparent" menu="false" quality="high" bgcolor="#ffffff" width="400" height="250" name="Wedding" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
							</object> 
							<br /><br /><br />
							<?php echo voeux($dm['m_id_1'] , $dm['m_id_2'] , $dm['t_id_1'] , $dm['t_id_2']);?><br /><br />
						
						  </center>
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>




              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>

              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>

              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <a name="htp"></a>

                          <div align="center"><img src="mariage2.gif" alt="wedding" border="0" /><br />
						  <span class="titrebleu">Tous les Mariages depuis 24 heures</span><br />
						  <?php echo da(time());?> <b><?php echo mj(time());?></b> mariages ont été célébrés.<br /><br />
                          </div><center>
                         <div  style="overflow:auto;height:200px;">
						 <table width="400">
						 
						 <?php
							
							$st = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
							$et = mktime(23, 59, 59, date('m'), date('d'), date('Y'));
							$j = 0;
							$m_24h = mysql_query('SELECT * FROM wedding WHERE timestamp >= "'.$st.'" AND timestamp <= "'.$et.'" ORDER BY id DESC');
							while($m24 = mysql_fetch_assoc($m_24h))
							{
								$j++;
								if($j == 1 || $j == 3 || $j == 5 || $j == 7 || $j == 9 || $j == 11 || $j == 13 || $j == 15 || $j == 17 || $j == 19 || $j == 21 || $j == 23 || $j == 25 || $j == 27 || $j == 29 || $j == 31 || $j == 33 || $j == 35 || $j == 37 || $j == 39)
								{
									echo '<tr bgcolor="#EEF5FA" align="center">';
								}
								else
								{
									echo '<tr align="center">';
								}	
								?><td><?php 
								echo m24($m24['m_id_1'], $m24['m_id_2'], $m24['t_id_1'], $m24['t_id_2'], $m24['id'], $m24['timestamp']);
								echo '</td></tr>';
								
							}
							?>
								
						 
						 </table>
						 </div>
						 </center>
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>




              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <a name="gameplay"></a>
						  <div align="center">
						  <img src="mariage2.gif" alt="wedding" border="0" /><br />
                          <span class="titrebleu">Les 20 couples les plus forts ! </span>

                          <br />
                          <em>Certaines choses durent pour toujours ...</em>
                          <br />
                          <br />

                         <table width="100%"  border="0" cellpadding="3" cellspacing="0"> 
                  <tr> 
                    <td valign="top"  align="center" nowrap="nowrap"><strong>#</strong></td> 
                    <td valign="top"  align="center" nowrap="nowrap"><strong>Couple</strong></td> 
                    <td valign="top"  align="center" nowrap="nowrap"><strong>Mariage</strong></td> 
                    <td valign="top"  align="center" nowrap="nowrap"><strong>jours</strong></td> 
                  </tr> 
	<?php
		$f = 0;
		$must = mysql_query('SELECT * FROM wedding ORDER BY id LIMIT 20');
		while($mus = mysql_fetch_assoc($must))
							{
								$f++;
								if($f == 1 || $f == 3 || $f == 5 || $f == 7 || $f == 9 || $f == 11 || $f == 13 || $f == 15 || $f == 17 || $f == 19) 
								{
									echo '<tr bgcolor=#EEF5FA>';
								}
								else
								{
									echo '<tr>';
								}	
							
								echo must($mus['m_id_1'], $mus['m_id_2'], $mus['id'], $mus['timestamp'], $f);
								
								echo'</tr>';
							}

?>	
                     
 
                      
                    
	</tr></table>
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>




              <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
              


<?php
}
?>




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
					<?php 
					$nbm = mysql_query('SELECT COUNT(*) AS nbm FROM wedding');
					$nbm = mysql_fetch_assoc($nbm);
					$nbm = $nbm['nbm'];
					
					$nbu = mysql_query('SELECT COUNT(*) AS nbu FROM phpbb_users');
					$nbu = mysql_fetch_assoc($nbu);
					$nbu = $nbu['nbu'];
					
					$celib = $nbu - $nbm;
					?>
                      <td valign="top">
                         <center><img src="mariage.gif" alt="mariage" border="0" /><br />
						 En ce moment, <b><?php echo $nbm; ?></b> couples sont marriés, ça nous laisse avec <b><?php echo $celib; ?></b> membres célibataires !
                      </center><br /><br />
					  <img src="mariage2.gif" alt="mariage" border="0" /><br />
					  <span class="titrebleu">Archive des mariages</span><br/>
					 <table width="100%"  border="0" cellspacing="5" cellpadding="5"> 
 
                    <tr> 
                      <td align="center"> 
                        <form action="" method="GET"> 
                        <b>Mariage numéro:</b> 
                        <span class="input_bleu"><input type="text" SIZE="7" MAXLENGTH="6" name="wid"></span>
                        <input type="image" border="0" value="Go!" src="go.gif" width="27" height="18"> 
                        </form> 
                        </td> 
                    </tr> 
 
                    <tr> 
                      <td align="center"> 
                        <form action="" method="GET"> 
                        <b>Membre numéro:</b> 
                        <span class="input_bleu"><input type="text" SIZE="7" MAXLENGTH="8" name="mid"></span>
                        <input type="image" border="0" value="Go!" src="go.gif" width="27" height="18"> 
                        </form> 
                        </td> 
                    </tr> 
 
                  </table> 
					  
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