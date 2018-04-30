
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
$title='Pecho La Noisette !';
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
					<img src="/img/pln.png" alt="banniere_pln" width="100%" height="60%" />
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

                                  <td valign="middle" bgcolor="#78AADB"><a href="#htp">Comment jouer ?</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#gameplay">Le gameplay</a></td>

                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#top20">Les Meilleurs</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>

                                </tr>

                              </table></td>
                          </tr>
                       </table>
                      </div>


                          <br />
						<b>Pecho La Noisette</b> est un jeu de rapidité !<br />
						Qui sera le plus rapide à pecho les noisettes ??!! 8@<br />
						<b> Les trois premiers du jeu remporte un item spécial.<br />
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

                          <div align="center"><span class="titrebleu">Comment jouer ?</span><br /><br />
                          </div>
                          <b>Pecho La Noisette</b> est un jeu jouable que quand les officiels sont là ...<br />
                          <br />
						  Quand un officiel lance le jeu une alerte s'affiche sur le tchat, et vous indique d'aller à la warpzone 
						  <i>(La salle en haut de l'archipel)</i>Une fois rendue à la warpzone vous serez envoyé dans la salle de jeu <br />
						  et il faudra attraper 5 Noisettes avant les autres ! <br />
						  

                          
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
                          <b>Pecho La noisette</b> se joue avec le clavier:
                          Tu dois juste dépasser les autres joueurs pour attraper les noisettes le plus rapidement possible !
                          <br /><br />
                          Si tu es le premier à attraper 5 noisettes tu remportes la partie et 1point PLN(Pecho La Noisette) pour être dans le classement !<br />

                          Chaque fois que tu perds, ton score... reste comme il est ! <b>:')</b>
                          <br />
                          <br />
                          <b>Notes:</b><br />

                          - Tu as toujours une chance de gagner/perdre .<br />
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
                          <span class="titrebleu">Les 20 meilleurs chopeur de l'Archipel</span>

                          <br />
                          <em>&quot;Il Pecho ? Ou pas ... &lt;:D&quot;</em>
                          <br />
                          <br />


                          <table width='100%' border='0' cellpadding="3" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>#</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Score</b></td>
                             <td valign="top" align="center" nowrap="nowrap"><b>Map</b></td>
                           </tr>
<?php
$i = 0;
$sql = 'SELECT * FROM phpbb_users WHERE classement_pln >= 1 ORDER BY classement_pln DESC LIMIT 20'; 
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

echo '<td align="center" valign="top" ><b>'.$i.'<b></td><td align="center" valign="top" ><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td><td align="center" valign="top" ><b>'.$data['classement_pln'].'</b></td><td align="center" valign="top" nowrap="nowrap">Pecho La Noisette</td></tr>';
	} ?>
<?php
$o = 0;
mysql_query('UPDATE phpbb_users SET rank_pln = "0"');
$sql = 'SELECT * FROM phpbb_users WHERE classement_pln >= 1 ORDER BY classement_pln DESC LIMIT 20'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{ 		
	$o++;	
	$quetezzz = mysql_query('UPDATE phpbb_users SET rank_pln = "'.$o.'" WHERE username = "'.$data['username'].'"');
}
?>

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
                          <b>Pecho La noisette</b> est actuellement en version alpha (version de test)
                          <br />
                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b>Pecho La noisette</b> est accessible à tous les membres.
                          <br />

                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          Le classement est mis à jour <b>en temps reel !</b>.
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