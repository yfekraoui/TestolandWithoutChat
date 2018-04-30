
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
$title='Lapino\'s race';
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
					<img src="/img/banniere_lapino-race2.png" alt="banniere_lapino" />
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

                          <b>Lapino's race</b> est un pur jeu de course <:D !
                          <br /><br />
                          Le principe est simple: être le plus rapide !
                          <br />

                          Qui ira le plus vite ? Qui se prendra un mur de trop ? <b>@@</b>
                          A toi de bien gérer, et... bonne chance <b>;)</b>
                          <br/><br/>
                          Les meilleurs classés gagnent les <b>lunettes lapino's</b>.
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
                          <b>Lapino's race</b> est un jeu jouable que quand les modos sont là ...<br />
                          <br />

                          Un modérateur lance une annonce et ceux qui veulent participer doivent aller dans la salle indiquée dans l'annonce<br /><br /><br />
			  <b>But du jeu : Vous devez aller à la porte "FIN" ( l'emplacement de l'entrée de la grotte mushlight ) le plus rapidement possible !</b>
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
                          <b>Lapino's race</b> se joue avec le clavier:
                          Tu dois juste dépassé les autres joueurs et atteindre la porte "FIN" le plus rapidement possible !
                          <br /><br />
                          Chaque fois que tu gagnes 5 courses, ton score <b>Lapino's race</b> augmente d'un point et tu gagnes un avatar special.<br />

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
                          <span class="titrebleu">Les 20 meilleurs pilotes de l'Archipel</span>

                          <br />
                          <em>&quot;Il va vite ? Ou pas ... &lt;:D&quot;</em>
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
$sql = 'SELECT * FROM phpbb_users WHERE classement_lapino >= 1 ORDER BY classement_lapino DESC LIMIT 20'; 
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

echo '<td align="center" valign="top" ><b>'.$i.'<b></td><td align="center" valign="top" ><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td><td align="center" valign="top" ><b>'.$data['classement_lapino'].'</b></td><td align="center" valign="top" nowrap="nowrap">Lapino\'s race</td></tr>';
	} ?>
<?php
$o = 0;
mysql_query('UPDATE phpbb_users SET rank_lapino = "0"');
$sql = 'SELECT * FROM phpbb_users WHERE classement_lapino >= 1 ORDER BY classement_lapino DESC LIMIT 20'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{ 		
	$o++;	
	$quetezzz = mysql_query('UPDATE phpbb_users SET rank_lapino = "'.$o.'" WHERE username = "'.$data['username'].'"');
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
                          <span class="titrebleu">Les 10 meilleurs groupes de Pilotes ! </span>

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

$sqlx = 'SELECT * FROM phpbb_users WHERE classement_lapino >= 1'; 
$reqx = mysql_query($sqlx) or die('Erreur SQL !<br>'.$sqlx.'<br>'.mysql_error()); 
while($datax = mysql_fetch_assoc($reqx))
{ 		
	$kete = mysql_query('UPDATE phpbb_user_group SET c_lapino = "'.$datax['classement_lapino'].'" WHERE user_id = "'.$datax['user_id'].'"');
}
?>
<?php
mysql_query('UPDATE phpbb_groups SET rank_lapino = "0"');
$sql = 'SELECT * FROM phpbb_user_group WHERE c_lapino >= 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{
	$fok = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$data['group_id'].'"');
	$fok = mysql_fetch_assoc($fok);
	
	$total = $data['c_lapino'] + $fok['rank_lapino'];
	$ket = mysql_query('UPDATE phpbb_groups SET rank_lapino = "'.$total.'" WHERE group_id = "'.$fok['group_id'].'"');

}
?>	


<?php
$b = 0;
$sql = 'SELECT * FROM phpbb_groups WHERE rank_lapino >= 1 ORDER BY rank_lapino DESC LIMIT 10'; 
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

echo '<td align="center" valign="top" ><b>'.$b.'<b></td><td align="center" valign="top" ><a href="/groups/?gid='.$data['group_id'].'">'.stripslashes($data['group_name']).'</a></td><td align="center" valign="top" ><b>'.$data['rank_lapino'].'</b></td></tr>';
$kekete = mysql_query('UPDATE phpbb_groups SET c_lapino = "'.$b.'" WHERE group_id = "'.$data['group_id'].'"');

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

                      <td valign="top">
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b>Lapino's race</b> est actuellement en version alpha (version de test)
                          <br />
                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b>Lapino's race (alpha)</b> est accessible à tous les membres.
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