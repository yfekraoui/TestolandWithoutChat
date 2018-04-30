
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
$title='Bacteria';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>

<td valign="top">
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left">

<img src="/img/bacteria.gif" alt="header_bacteria" />
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

                                  <td valign="middle" bgcolor="#78AADB"><a href="#htp">Comment Jouer ?</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#gameplay">Le Gameplay</a></td>

                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#record">Les Records</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>

                                </tr>

                              </table></td>
                          </tr>
						  <tr>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>

                                  <td valign="middle" bgcolor="#78AADB"><a href="#top20">Les Meilleurs</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#pire">Les Pires</a></td>

                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            
                          </tr>
                       </table>
                      </div>


                          <br />
                          <img alt="Un coup gagnant" src="/img/partie.gif"  style="border:3px solid #6699CC;" hspace="10" vspace="0" align="left">

                          <b>Bacteria</b> est le jeu ancestral de notre île.
						  Depuis des milliers d'années, des membres dédient 
						  leur vie à s'entraîner à cet art si complexe et profond.<br/>
						  <br/>Des millions de combats ont déjà eu lieu, et encore plus
						  de parties sont à venir.<br/><br/>Retrouve sur cette page le
						  <a href="#top20">classement des champions</a> et toute les 
						  infos dont tu as besoin, pour devenir toi aussi, un <b>guerrier Bacteria</b>.
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
                          <a name="htp"></a>

                          <div align="center"><span class="titrebleu">Comment jouer ?</span><br />
                          
                          </div>
                          <br />
						  <img alt="Un coup gagnant" src="/img/bacterioport.gif"  style="border:3px solid #6699CC;" hspace="10" vspace="0" align="left">

                          <p> 
Il y a 2 endroits pour jouer: <b>Bacteria débutants</b> et <b>Bacteria Pro</b> <br /> 
Si tu ne sais pas comment y aller demande ton chemin ! <br /> 
<br /> 
Pour jouer c'est simple, va dans une cabine, elle s'allume si elle t'accepte, et quand un membre ou un visiteur va dans l'autre cabine, la partie démarre ! <br /> 
<b>Attention:</b> Les visiteurs ne peuvent jouer qu'en <b>Bacteria débutants</b>, les cabines de <b>Bacteria Pro</b> sont réservées aux membres ! 
</p> 
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
                          <div align="center"class="titrebleu">Game Play</div>

                          <br />
                          <p align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" height="250" width="410"> <font size="3"> 
                        </font><param name="movie" value="/img/regles.swf" ref=""><font size="3"> </font><param name="wmode" value="Transparent"><font size="3"> </font><param name="quality" value="High"><param name="menu" value="0"><font size="3"> </font><param name="_cx" value="10848"><font size="3"> 
                        </font><param name="_cy" value="6615"><font size="3"> </font><param name="FlashVars" value=""><param name="Src" ref="" value="/img/regles.swf"><font size="3"> </font><param name="Play" value="-1"><font size="3"> </font><param name="Loop" value="-1"><font size="3"> </font><param name="SAlign" value=""><font size="3"> </font><param name="Base" value=""><font size="3"> </font><param name="AllowScriptAccess" value="always"><font size="3"> </font><param name="Scale" value="ShowAll"><font size="3"> </font><param name="DeviceFont" value="0"><font size="3"> 
                        </font><param name="EmbedMovie" value="0"><font size="3"> </font><param name="BGColor" value=""><font size="3"> </font><param name="SWRemote" value=""><param name="MovieData" value=""><font size="3"> 
                        </font><param name="SeamlessTabbing" value="1"><font size="3"> 
                        </font> 
                        
                        
                        <embed src="/img/regles.swf" menu="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" type="application/x-shockwave-flash" height="250" width="410"></object> </p> 
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
                <td><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <div align="center">
                          <a name="record"></a>
                          <span class="titrebleu">Records</span>

                          <br />
                          <em>" Dans le bien ou le mauvais, ce sont les meilleurs ! "</em>
                          <br />
                          <br /><br />
<?php

$o = 0;

$sql = 'SELECT user_id FROM phpbb_users ORDER BY classement_bacteria DESC';

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

while($data = mysql_fetch_assoc($req))
{
	$o++;
	$quetezzz = mysql_query('UPDATE phpbb_users SET rank_bacteria = "'.$o.'" WHERE user_id = "'.$data['user_id'].'"');

}			
$sql = 'SELECT user_id, username, partie_play FROM phpbb_users WHERE partie_play >= 1 ORDER BY partie_play DESC LIMIT 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

if(mysql_num_rows($req) > 0)
{
	while($data = mysql_fetch_assoc($req)) 
	{
		$pseudo = $data['username'];
		$id = $data['user_id'];
		$partieplay = $data['partie_play'];
	}
}
else
{
		$pseudo = "";
		$id = "";
		$partieplay = "";
}
$sql = 'SELECT user_id, username, partie_won FROM phpbb_users WHERE partie_won >= 1 ORDER BY partie_won DESC LIMIT 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
if(mysql_num_rows($req) > 0)
{
	while($data = mysql_fetch_assoc($req)) 
	{
		$pseudowon = $data['username'];
		$idwon = $data['user_id'];
		$partiewon = $data['partie_won'];
	}
}
else
{
		$pseudowon = "";
		$idwon = "";
		$partiewon = "";
}
$sql = 'SELECT user_id, username, partie_lost FROM phpbb_users WHERE partie_lost >= 1 ORDER BY partie_lost DESC LIMIT 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
if(mysql_num_rows($req) > 0)
{
	while($data = mysql_fetch_assoc($req)) 
	{
		$pseudolost = $data['username'];
		$idlost = $data['user_id'];
		$partielost = $data['partie_lost'];
	}
}
else
{
		$pseudolost = "";
		$idlost = "";
		$partielost = "";
}
$sql = 'SELECT user_id, username, partie_nul FROM phpbb_users WHERE partie_nul >= 1 ORDER BY partie_nul DESC LIMIT 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
if(mysql_num_rows($req) > 0)
{
	while($data = mysql_fetch_assoc($req)) 
	{
		$pseudonul = $data['username'];
		$idnul = $data['user_id'];
		$partienul = $data['partie_nul'];
	}
}
else
{
		$pseudonul = "";
		$idnul = "";
		$partienul = "";
}
?>
							<b>parties jouées</b>:<br /> <div style="background-color:#EEF5FA"> 
                          <a href="/annuaire/?mid=<?php echo $id ?>"> <?php echo $pseudo ?>
                          </a> avec <b><?php echo $partieplay ?></b> 
                          parties jouées !</div> 
                        <br /> <b>parties gagnées</b>:<br /> <div style="background-color:#EEF5FA"> 
                          <a href="/annuaire/?mid=<?php echo $idwon ?>"> <?php echo $pseudowon ?> 
                          </a> avec <b><?php echo $partiewon ?></b> parties gagnées !</div> 
                        <br /> <b>parties perdues</b>:<br /> <div style="background-color:#EEF5FA"> 
                          <a href="/annuaire/?mid=<?php echo $idlost ?>"> <?php echo $pseudolost ?> 
                          </a> avec <b><?php echo $partielost ?></b> 
                          parties perdues !</div> 
                        <br /> <b>matchs nuls</b>:<br /> <div style="background-color:#EEF5FA"> 
                          <a href="/annuaire/?mid=<?php echo $idnul ?>"> <?php echo $pseudonul ?> 
                          </a> avec <b><?php echo $partienul ?></b> 
                          matchs nuls !</div>
<br />
                        

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
                <td><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <div align="center">
                          <a name="top20"></a>
                          <span class="titrebleu">Les 20 plus acharnés de Bacteria ! </span>

                          <br />
                          <em>"Des heures de phagocytage acharné pour en arriver la..."</em>
                          <br />
                          <br />
						Les 10 premiers du classement remportent le casque Bacteria. <br /><br />
<b>Laissez votre souris sur "[x]" pour voir les details des parties .</b>
						<br /><br />

                         <table width='415px' border='0' cellpadding="3" cellspacing="0"> 
								  <tr> 
									<td valign="top" width="1%" align="center" nowrap="nowrap"><strong>#</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Membre</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Score</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Niveau</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Details</strong></td> 
<?php
$i = 0;
mysql_query('UPDATE phpbb_users SET rank_bacteria = "0"');
$sql = 'SELECT user_id, username, partie_play, partie_won, partie_lost, partie_nul, classement_bacteria, bac_level FROM phpbb_users WHERE classement_bacteria >= 1 ORDER BY classement_bacteria DESC LIMIT 20'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 		
		$i++;
		$quetezzz = mysql_query('UPDATE phpbb_users SET rank_bacteria = "'.$i.'" WHERE username = "'.$data['username'].'"');
		if($i == "1" OR $i == "3" OR $i == "5" OR $i == "7" OR $i == "9" OR $i == "11" OR $i == "13" OR $i == "15" OR $i == "17" OR $i == "19")
		{
			echo '<tr bgcolor=#EEF5FA>';
		}
		else
		{
			echo '<tr>';
		}	


echo '<td align="center" valign="top" ><b>'.$i.'<b></td><td align="center" valign="top" ><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td><td align="center" valign="top" ><b>'.$data['classement_bacteria'].'</b></td><td align="center" valign="top" nowrap="nowrap">'.$data['bac_level'].'</td> <td align="center" valign="top"><a href="#" onclick="return false;" title="
Parties : '.$data['partie_play'].' Jouées /
'.$data['partie_won'].' Gagnées /
'.$data['partie_lost'].' Perdues /
'.$data['partie_nul'].' Nulles /
">[x]</a></td>
</tr>';
	} ?>

<?php
$lb1=0;
$lb2=0;
$lb3=0;
$lb4=0;
$lb5=0;
$lb6=0;
$lb7=0;
$k = 0;
$o = 0;
$sql = 'SELECT user_id, classement_bacteria FROM phpbb_users WHERE classement_bacteria >= 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{ 		
	$o++;	
	if($data['classement_bacteria'] >= 500)
	{
		$level_bac = 2;
		$lb2++;
	}
	if($data['classement_bacteria'] >= 1500)
	{
		$level_bac = 3;
		$lb3++;
	}
	if($data['classement_bacteria'] >= 2500)
	{
		$level_bac = 4;
		$lb4++;
	}
	if($data['classement_bacteria'] >= 5000)
	{
		$level_bac = 5;
		$lb5++;
	}
	if($data['classement_bacteria'] >= 15000)
	{
		$level_bac = 6;
		$lb6++;
	}
	if($data['classement_bacteria'] >= 100000)
	{
		$level_bac = 7;
		$lb7++;
	}
	if($data['classement_bacteria'] < 500)
	{
		$level_bac = 1;
		$lb1++;
	}
	$ketz = mysql_query('UPDATE phpbb_users SET bac_level = "'.$level_bac.'" WHERE user_id = "'.$data['user_id'].'"');
}
?>
								  </tr> 


                           </tr>
                      </table>

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
                <td><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <div align="center">
                          <a name="pire"></a>
                          <span class="titrebleu">Les 20 pires brêles de Bacteria ! </span>

                          <br />
                          <em>"Les meilleurs... en partant du bas !" </em>
                          <br />
                          <br /><b>Laissez votre souris sur "[x]" pour voir les details des parties .</b>
						<br /><br />


                         <table width='415px' border='0' cellpadding="3" cellspacing="0"> 
								  <tr> 
									<td valign="top" width="1%" align="center" nowrap="nowrap"><strong>#</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Membre</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Score</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Niveau</strong></td> 
									<td valign="top" align="center" nowrap="nowrap"><strong>Details</strong></td> 
<?php
$i = 0;
$sql = 'SELECT user_id, username, classement_bacteria, partie_play, partie_won, partie_lost, partie_nul FROM phpbb_users WHERE classement_bacteria < -1 ORDER BY classement_bacteria LIMIT 20'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 		
		$i++;
		if($i == "1" OR $i == "3" OR $i == "5" OR $i == "7" OR $i == "9" OR $i == "11" OR $i == "13" OR $i == "15" OR $i == "17" OR $i == "19")
		{
			echo '<tr bgcolor=#EEF5FA>';
		}
		else
		{
			echo '<tr>';
		}	
?>
<?php 

echo '<td align="center" valign="top" ><b>'.$i.'<b></td><td align="center" valign="top" ><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td><td align="center" valign="top" ><b>'.$data['classement_bacteria'].'</b></td><td align="center" valign="top" nowrap="nowrap">1</td><td align="center" valign="top"><a href="#" onclick="return false;" title="
Parties : '.$data['partie_play'].' Jouées /
'.$data['partie_won'].' Gagnées /
'.$data['partie_lost'].' Perdues /
'.$data['partie_nul'].' Nulles /
">[x]</a></td></tr>';
	} ?>
								  </tr> 


                           </tr>
                      </table>

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
                <td><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <div align="center">
                          <a name="top20"></a>
                          <span class="titrebleu">Les 10 meilleurs groupes de Bacteria ! </span>

                          <br />
                          <em>"Plus on est de fous..."</em>
                          <br />
                          <br />


                          <table width='100%' border='0' cellpadding="3" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>#</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Groupe</b></td>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Score</b></td>
                           </tr>
<?php

$sqlx = 'SELECT user_id, classement_bacteria FROM phpbb_users WHERE classement_bacteria >= 1'; 
$reqx = mysql_query($sqlx) or die('Erreur SQL !<br>'.$sqlx.'<br>'.mysql_error()); 
while($datax = mysql_fetch_assoc($reqx))
{ 		
	$kete = mysql_query('UPDATE phpbb_user_group SET c_bacteria = "'.$datax['classement_bacteria'].'" WHERE user_id = "'.$datax['user_id'].'"');
}
?>
<?php
mysql_query('UPDATE phpbb_groups SET rank_bacteria = "0"');
$sql = 'SELECT * FROM phpbb_user_group WHERE c_bacteria >= 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{
	$fok = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$data['group_id'].'"');
	$fok = mysql_fetch_assoc($fok);
	
	$total = $data['c_bacteria'] + $fok['rank_bacteria'];
	$ket = mysql_query('UPDATE phpbb_groups SET rank_bacteria = "'.$total.'" WHERE group_id = "'.$fok['group_id'].'"');

}
?>	


<?php
$b = 0;
$sql = 'SELECT rank_bacteria, group_id, group_name FROM phpbb_groups WHERE rank_bacteria >= 1 ORDER BY rank_bacteria DESC LIMIT 10'; 
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
?>
<?php 

echo '<td align="center" valign="top" ><b>'.$b.'<b></td><td align="center" valign="top" ><a href="/groups/?gid='.$data['group_id'].'">'.stripslashes($data['group_name']).'</a></td><td align="center" valign="top" ><b>'.$data['rank_bacteria'].'</b></td></tr>';
$kekete = mysql_query('UPDATE phpbb_groups SET c_bacteria = "'.$b.'" WHERE group_id = "'.$data['group_id'].'"');

	} ?>

                           </tr>
                      </table>

                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
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
					<?php
						$njb = mysql_query('SELECT COUNT(*) AS njb FROM phpbb_users WHERE classement_bacteria >= 1 OR classement_bacteria < 0');
						$njb = mysql_fetch_assoc($njb);
						$njb = $njb['njb'];
						$o = ($o == 0) ? 1 : $o;
						$lb1p = ceil(($lb1 / $o) * 100);
						$lb2p = ceil(($lb2 / $o) * 100);
						$lb3p = ceil(($lb3 / $o) * 100);
						$lb4p = ceil(($lb4 / $o) * 100);
						$lb5p = ceil(($lb5 / $o) * 100);
						$lb6p = ceil(($lb6 / $o) * 100);
						$lb7p = ceil(($lb7 / $o) * 100);
						
						$pj=0;
						$dpjx = mysql_query('SELECT partie_play FROM phpbb_users WHERE partie_play > 0');
						while($dpj = mysql_fetch_assoc($dpjx))
						{
							$pj = $pj + $dpj['partie_play'];
						}
					?>

                      <td valign="top">
					  Toutes les infos, les techniques, news.<br /><br />
					<img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
					<a href="/bbs/bbs.php?f=40/">BBS Games</a>
                          <br />
                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b><?php echo $njb;?></b> joueurs Bacteria. 

                          <br />

                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b><b>Les logs de Bacteria sont disponible <a href="/logs/">ici</a><br />

                          <br />

                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b><?php echo $pj;?></b> parties jouées.
						  <br />
						  
                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b>Niveaux des joueurs</b>
							<br /><br />
							<div align="center"> 
           <table width="90%" border="0" cellspacing="0" cellpadding="0"> 
           <tr> 
           <td align="center" with="1%"><b>#</b></td> 
           <td align="center" with="98%"><b>Membres</b></td> 
           <td align="center" with="1%"><b>%</b></td> 
           </tr>		 <tr> 
                         <td with="1%" align="center"><b>1</b></td> 
                         <td with="98%" align="center"><b><?php echo $lb1;?></b></td> 
                         <td with="1%" align="center"><em><?php echo $lb1p;?>%</em></td> 
						 </tr>
						 <tr> 
                         <td with="1%" align="center"><b>2</b></td> 
                         <td with="98%" align="center"><b><?php echo $lb2;?></b></td> 
                         <td with="1%" align="center"><em><?php echo $lb2p;?>%</em></td> 
						 </tr>
						 <tr> 
                         <td with="1%" align="center"><b>3</b></td> 
                         <td with="98%" align="center"><b><?php echo $lb3;?></b></td> 
                         <td with="1%" align="center"><em><?php echo $lb3p;?>%</em></td> 
						 </tr>
						 <tr> 
                         <td with="1%" align="center"><b>4</b></td> 
                         <td with="98%" align="center"><b><?php echo $lb4;?></b></td> 
                         <td with="1%" align="center"><em><?php echo $lb4p;?>%</em></td> 
						 <tr> 
                         <td with="1%" align="center"><b>5</b></td> 
                         <td with="98%" align="center"><b><?php echo $lb5;?></b></td> 
                         <td with="1%" align="center"><em><?php echo $lb5p;?>%</em></td> 
						 <tr> 
                         <td with="1%" align="center"><b>6</b></td> 
                         <td with="98%" align="center"><b><?php echo $lb6;?></b></td> 
                         <td with="1%" align="center"><em><?php echo $lb6p;?>%</em></td> 
						 <tr> 
                         <td with="1%" align="center"><b>7</b></td> 
                         <td with="98%" align="center"><b><?php echo $lb7;?></b></td> 
                         <td with="1%" align="center"><em><?php echo $lb7p;?>%</em></td> 
						 </tr>
						 </tr>
						 </tr>
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
                <td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>
              </tr>
            </table>








          </td>

        </tr>
</table>

<?php
include('../bbs/includes/bas.php'); 
?>