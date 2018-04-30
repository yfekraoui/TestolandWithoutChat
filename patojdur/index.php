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
$title='Patojdur';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>
<!-- main content -->

<!-- main content -->

<td valign="top">
<!-- main content -->
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>

                <td height="86" align="left" background="header_patojdur.gif">
<div align="center">
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="300" height="88">
                      <param name="movie" value="hptjdur.swf">
                      <param name="quality" value="high">
					  <param name="wmode" value="transparent">
                      <embed src="hptjdur.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="300" height="88"></embed></object>
                  </div></td>
              </tr>

              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">

                  <!-- subnav -->
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
                                  <td valign="middle" bgcolor="#78AADB"><a href="#gp">Le gameplay</a></td>

                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#modz">Les modes</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>

                                </tr>
                              </table></td>
                          </tr>
                       </table>

                       <table border="0" align="center" cellpadding="5" cellspacing="0" class="subnav">
                          <tr>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>

                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#tracks">Les courses</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>

                                  <td valign="middle" bgcolor="#78AADB"><a href="#day">Champions du jour</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#in_progress">Classement du Jour</a></td>

                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                          </tr>
                      </table>

                       <table border="0" align="center" cellpadding="5" cellspacing="0" class="subnav">
                          <tr>
                            <td><table border="0" cellspacing="0" cellpadding="0">

                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#general">Classement Général</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>

                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>
                                  <td valign="middle" bgcolor="#78AADB"><a href="#records">Les Records</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                            <td><table border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="/img/bt-left.gif" width="13" height="15" /></td>

                                  <td valign="middle" bgcolor="#78AADB"><a href="#fak">MiniFaK</a></td>
                                  <td><img src="/img/bt-right.gif" width="7" height="15" /></td>
                                </tr>
                              </table></td>
                          </tr>
                      </table>


                  <!-- subnav -->


                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td >
                          <img src="img.jpg" width="215" height="170" style="border:3px solid #6699CC;" align="left"/>
                          <b>Patojdur</b> est un jeu de style course-labyrinthe qui consiste
              à traverser à la nage les marécages le plus vite possible.<br />
              A toi d’éviter les roseaux, les nénuphars et les plantes aquatiques,
              trouver les bons courants afin de faire le meilleur chrono du jour
              ou de battre le record de la course !<br /> <br />

              Les grenouilles seront là pour t’encourager ou se moquer de toi,
              mais seul ton courage et ta persévérance te permettront de devenir
              le meilleur <b>patojeur</b> !
                        </td>
                    </tr>
                  </table>

                </td>
              </tr>
              <tr> 
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>

              </tr>
            </table>

            <br />

            <!-- how to play -->
            <a name="htp"></a>
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5"> 
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>

                          <div align="center"class="titrebleu">Comment jouer ?</div>
                          <br />

                    		<b>Attention : les visiteurs ne peuvent pas jouer !</b>
                            <br />
                            Il faut te rendre dans les marécages, demande ton chemin si tu ne sais
                            pas comment y aller.<br />
                            Va ensuite te placer sur un des emplacements tout à gauche de la mare,
                            et attends ton tour ! (Les grenouilles n'autorisent que 5 <b>Patojeurs</b>
                            en même temps, sécurité oblige).<br />
                            Quand ton tour arrive, tu te retrouves dans l'eau, court chargement, compte
                            à rebours (3, 2, 1, GO !) et voilà, à toi de traverser la mare en nageant
                            le plus vite possible !<br />

                            <br />
                            Bonne Chance ! tu en auras besoin, la concurrence sera rude ! La victoire
                            au millième près !
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>

              </tr>
            </table>

            <br />
            <!-- gameplay -->
            <a name="gp"></a>
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>

              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <div align="center"class="titrebleu">Game Play</div>
                          <br />

                          <b>Patojdur</b> se joue aux touches directionnelles (les flèches).<br />
                            Avance dans la direction de ton choix (haut, bas, droite ou gauche), quand
                            tu fais du sur-place, c'est que tu es bloqué, essaye une autre direction
                            !<br />
                            Les obstacles ne sont pas forcément visibles !<br />
                            Les bulles te téléportent dans des endroits plus ou moins avantageux,
                            à toi de trouver les bonnes !<br />
                            Pas de note esthétique ! Le gagnant du jour est celui qui aura traversé
                            le marécage le plus rapidement !<br />

                            <br />
                            <br />
                            <b>D&eacute;part Boost</b> : Pour obtenir un d&eacute;part <b>boost</b>,
                            tu dois effectuer la bonne combinaison de touches durant le compte &agrave; rebours.
                            <br />
                            <br />

                            Un bonne combinaison est constitu&eacute;e de <b>5 touches</b>,
                            seules les touches directionnelles (les flèches) sont utilis&eacute;es.
                            <br />
                            <br />
                            Exemple d'une combinaison (fausse) : Fl&egrave;che Gauche, Fl&egrave;che Gauche, Fl&egrave;che Droite, Fl&egrave;che Haut, Fl&egrave;che Droite. (GGDHD)
                            <br />

                            <br />
                            <b>Indice</b> : pour <b>Burnin'Flak</b>,
                            la bonne combinaison commence par Fl&egrave;che Gauche, Fl&egrave;che Haut... (GH...)
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
            </table>


            <br />
            <!-- les modes -->
            <a name="modz"></a>

            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center">

                          <div class="titrebleu">Les modes</div>
                          <br />
                          Pour le moment, seul le mode <b>single</b> est accessible.
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
            </table>

            <br />
            <!-- les courses -->
            <a name="tracks"></a>

            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>

                          <div align="center" class="titrebleu">Les Courses</div>
                          <br />
                          <b>10 courses différentes</b>, plus ou moins difficiles.
                          Chaque jour une course différente, un classement différent !
                          <br />
                          <br />
                          Durant la phase de test de <b>Patojdur</b>, seule la course n°1
                          (<b>Burnin'Flak</b>) est accessible.
                      </td>

                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
            </table>

    		<br />

            <!-- records -->
            <a name="records"></a>
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>

                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center">
                          <div class="titrebleu">Record !</div>
                          <em>&quot;Ce jour là, il a comme volé sur l'eau...&quot;</em>
                          <br />
                          <br />

                          <table width="100%"  border="0" cellspacing="0" cellpadding="3">
                          <tr>
                           <td align="left" width="1%" nowrap="nowrap"><b>Course</b></td>
                           <td align="center" width="36%" nowrap="nowrap"><b>Record</b></td>
                           <td align="center" width="60%" nowrap="nowrap"><b>Membre</b></td>
                          </tr>

                                                <tr bgcolor=#EEF5FA>
                           <td valign="top" align="left" nowrap="nowrap"><b>Burnin'Flak</b></td>
<?php
$o = 0;
$sql = 'SELECT user_id, patojdur, username FROM phpbb_users WHERE patojdur > 1 ORDER BY patojdur LIMIT 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{
	$ulz = mysql_query('SELECT * FROM record_patoj');
	$ulz = mysql_fetch_assoc($ulz);
	$record = $ulz['time'];
	$toj = $data['patojdur'];
	if($toj < $record)
	{
		mysql_query('UPDATE record_patoj SET time = "'.$toj.'", id = "'.$data['user_id'].'", pseudo = "'.$data['username'].'"');
	}
	else
	{
	}

}
$COINCOIN = mysql_query('SELECT * FROM record_patoj');
$COINCOIN = mysql_fetch_assoc($COINCOIN);
$nux = $COINCOIN['time'];

$nu = substr($nux, 0, 2);
$nu.= "'";
$nu.= substr($nux, 2, 5);
echo '<td valign="top" align="center"><b>'.$nu.'</b></td> <td valign="top" align="center" width="60%"><a href="/annuaire/?mid='.$COINCOIN['id'].'">'.$COINCOIN['pseudo'].'</a></td><td valign="top" align="right" width="1%" nowrap="nowrap"><br /><em>1ere journée</em></td>';
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
            </table>
            <!-- records -->






            <!-- champions -->
            <br /><a name="day"></a>

            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>

                          <div align="center">
                          <span class="titrebleu">Les Champions du Jour !</span>
                          <br />
                          <em>&quot;Ce matin, ils ont cloué le bec des grenouilles... et des autres membres !&quot;</em>
                          <br /><br /><br />

                          <b>1er</b>: Casque patojdur Or<br />
                          <b>2eme</b>: Casque patojdur Argent<br />
                          <b>3eme</b>: Casque patojdur Bronze<br />
                          <b>4eme à 10eme</b>: Casque patojdur<br />
                          <br />
                          </div>
                          <br />

                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                        <tr>
                          <td valign="top" width="1%" align="center" nowrap="nowrap"><strong>#</strong></td>
                          <td valign="top" align="center" nowrap="nowrap"><strong>Membre</strong></td>

                          <td align="center" width="1%"><strong>Temps</strong></td>
                        </tr>
<?php
$i = 0;
$sql = 'SELECT user_id, patojdur, username FROM phpbb_users WHERE patojdur > 1 ORDER BY patojdur LIMIT 20'; 
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
$score = substr($data['patojdur'], 0, 2);
$score.= "'";
$score.= substr($data['patojdur'], 2, 5);
echo '<td align="center" valign="top" ><b>'.$i.'</b></td><td align="center" valign="top" ><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td><td align="center" valign="top" nowrap="nowrap"><b>'.$score.'</b></td></tr>';
	} ?>

                                              </table>
                   <br />
                      <div align="center">
                      </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>

                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
            </table><br />
            <!-- champions -->
<a name="champions"></a>
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>

                          <div align="center">
                          <span class="titrebleu">Classement general !</span>
                          <br />
                          <em>&quot;Hier, ils nous ont montré leurs potenciels... Aujourd'hui ils se la petent !&quot;</em>
                          <br />
                          <br />

                          </div>
                          <br />

                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                        <tr>
                          <td valign="top" width="1%" align="center" nowrap="nowrap"><strong>#</strong></td>
                          <td valign="top" align="center" nowrap="nowrap"><strong>Membre</strong></td>

                          <td align="center" width="1%"><strong>Score</strong></td>
                        </tr>
<?php
$i = 0;
$sql = 'SELECT user_id, classement_patojdur_h, username FROM phpbb_users WHERE classement_patojdur_h > 1 ORDER BY classement_patojdur_h DESC LIMIT 20'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 		
		$i++;
		$quetezzz = mysql_query('UPDATE phpbb_users SET rank_patojdur_a = "'.$i.'" WHERE username = "'.$data['username'].'"');
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
echo '<td align="center" valign="top" ><b>'.$i.'</b></td><td align="center" valign="top" ><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td><td align="center" valign="top" nowrap="nowrap"><b>'.$data['classement_patojdur_h'].'</b></td></tr>';
	} ?>

                                              </table>
                   <br />
                      <div align="center">

                      </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>

                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
            </table>
            <!-- general -->
      <br />
	              <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>

                          <div align="center">
                          <span class="titrebleu">Classement Groupes !</span>
                          <br />
                          <em>Les 10 meilleurs groupes à patojdur !</em>
                          <br />
                          <br />

                          </div>
                          <br />

                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                        <tr>
                          <td valign="top" width="1%" align="center" nowrap="nowrap"><strong>#</strong></td>
                          <td valign="top" align="center" nowrap="nowrap"><strong>Groupe</strong></td>

                          <td align="center" width="1%"><strong>Score</strong></td>
                        </tr>
<?php

$sqlx = 'SELECT * FROM phpbb_users WHERE classement_patojdur_h >= 1'; 
$reqx = mysql_query($sqlx) or die('Erreur SQL !<br>'.$sqlx.'<br>'.mysql_error()); 
while($datax = mysql_fetch_assoc($reqx))
{ 		
	$kete = mysql_query('UPDATE phpbb_user_group SET c_patojdur = "'.$datax['classement_patojdur_h'].'" WHERE user_id = "'.$datax['user_id'].'"');
}
?>
<?php
mysql_query('UPDATE phpbb_groups SET rank_patojdur = "0"');
$sql = 'SELECT * FROM phpbb_user_group WHERE c_patojdur >= 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{
	$fok = mysql_query('SELECT * FROM phpbb_groups WHERE group_id = "'.$data['group_id'].'"');
	$fok = mysql_fetch_assoc($fok);
	
	$total = $data['c_patojdur'] + $fok['rank_patojdur'];
	$ket = mysql_query('UPDATE phpbb_groups SET rank_patojdur = "'.$total.'" WHERE group_id = "'.$fok['group_id'].'"');

}
?>	
<?php
$b = 0;
$sql = 'SELECT * FROM phpbb_groups WHERE rank_patojdur >= 1 ORDER BY rank_patojdur DESC LIMIT 10'; 
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

echo '<td align="center" valign="top" ><b>'.$b.'<b></td><td align="center" valign="top" ><a href="/groups/?gid='.$data['group_id'].'">'.stripslashes($data['group_name']).'</a></td><td align="center" valign="top" ><b>'.$data['rank_patojdur'].'</b></td></tr>';
$kekete = mysql_query('UPDATE phpbb_groups SET c_patojdur = "'.$b.'" WHERE group_id = "'.$data['group_id'].'"');

	} ?>
                 
<?php
$i = 0;
$sql = 'SELECT user_id, classement_patojdur_h FROM phpbb_users WHERE classement_patojdur_h > 1 ORDER BY classement_patojdur_h DESC'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 		
		$i++;
		$quetezzz = mysql_query('UPDATE phpbb_users SET rank_patojdur_a = "'.$i.'" WHERE user_id = "'.$data['user_id'].'"');
	}
?>                             </table>
                   <br />
                      <div align="center">

                      </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>

                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
            </table>
            <!-- groupes -->

            <!-- in progress -->


            <br />
            <!-- fak -->
            <a name="fak"></a>
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>

                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                          <div align="center" class="titrebleu">Mini FaK</div>
                          <br />

                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                                                     <tr>

                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Comment abandonner la course ?</b>
                              </td>
                             </tr>
                             <tr>
                              <td>1. Tu ressors de la mare par la plage de gauche.<br />
           2. Tu cliques sur la petite croix au dessus du chrono,
           cela va t'emmener directement à l'arrivée.<br />

           3. Tu retournes dans le trou noir.<br /><br /></td>
                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Comment couper la musique ?</b>
                              </td>
                             </tr>

                             <tr>
                              <td>Cliques une fois sur le logo de <b>Patojdur</b>,
           recliques pour remettre la musique...<br />
           Tu peux t'entrainer sur celui en haut de cette page.<br /><br /></td>
                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">

                               <b style="color:#6090BE;">Ahhhhh, ça laaaaaaaaaaag !</b>
                              </td>
                             </tr>
                             <tr>
                              <td>Non, ça ne lag pas, c&#039;est ton ordi qui <b>rame</b> !
           <br /> Passe en moins bonne qualité (Clique 2 fois sur le bouton en haut à droite,
           pour avoir qualité basse).<br /><br /></td>

                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Comment passer devant les autres si il y a la queue ?</b>
                              </td>
                             </tr>
                             <tr>

                              <td>Tu ne peux pas <b>;)</b><br />
           Le meilleur moyen: place toi sur un plot et ne bouge plus !
           Si tu sors tu perds ta place !<br /><br /></td>
                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Est-ce qu'il y a un plot plus rapide qu'un autre ?</b>

                              </td>
                             </tr>
                             <tr>
                              <td>Non, vous passez dans votre ordre d'arrivée, le plot ne compte
           pas, premier arrivé, premier à nager !<br /><br /></td>
                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">

                               <b style="color:#6090BE;">Est-ce qu'on peut échanger sa place avec quelqu'un ?</b>
                              </td>
                             </tr>
                             <tr>
                              <td>Non ! Si tu sors tu perds ta place !<br /><br /></td>
                             </tr>
                                                     <tr>
                              <td>

                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Est-ce qu'on peut se baigner sans faire la course ?</b>
                              </td>
                             </tr>
                             <tr>
                              <td>Non ! Si tu veux juste faire trempette et t'amuser dans l'eau, va sur la plage de Kopakabana !<br /><br /></td>
                             </tr>
                                                     <tr>

                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Et une fois dans l'eau si je reste sur place ?</b>
                              </td>
                             </tr>
                             <tr>
                              <td>Au bout de 3 minutes les grenouilles te sortiront et tu auras un score de naze !<br /><br /></td>
                             </tr>

                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Comment clouer le bec aux grenouilles ?</b>
                              </td>
                             </tr>
                             <tr>
                              <td>Fais un super score !<br /><br /></td>

                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Comment aller plus vite ?</b>
                              </td>
                             </tr>
                             <tr>

                              <td>Entraines toi à mort !<br />
           Utiliser un accélérateur de jeu ne fonctionnera pas, puisqu'il accélerera aussi le chrono !<br /><br /></td>
                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">
                               <b style="color:#6090BE;">Comment ça se fait qu'on a le droit de se baigner sans maillot de bain ?</b>

                              </td>
                             </tr>
                             <tr>
                              <td>On avait peur que les filles soient trop sexy
           et que ça déconcentre les garçons pour la course...<br /><br /></td>
                             </tr>
                                                     <tr>
                              <td>
                               <img src="/img/index_body_cat_open.gif" border="0">

                               <b style="color:#6090BE;">Quand seront mis en place les autres courses et les autres modes ?</b>
                              </td>
                             </tr>
                             <tr>
                              <td><a href='#'>Règle n°0</a><br /><br /></td>
                             </tr>
                                                </table>

              			Encore une question ? <a href="#">Regarde si la réponse n'est pas sur le bbs</a>.
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
                <td align="left"><img src="/img/ensavoirplus_top.gif" width="168" height="37"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#A4C4E3">
                <table width="168"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td valign="top"> <div align="left"><a href="#" target="_self"> 
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle"> 
                          BBS de Patojdur </a> <br />

                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle"> 
                          Hier, il y a eu <b>699</b> Patojeurs. 
                          <br />
                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle"> 
                          Aujourd'hui, il y a <b>188</b> Patojeurs. 
                          <br />

                        </div>
                                                            <br />
                                    <div align="center">
                                         <b>Si tu es membre,
                                         <a href="/login/?redirect=/patojdur/">connecte toi</a>
                                         pour avoir plus d'infos !</b>
                                    </div>
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

                      <td valign="top" align="center">
                      <img src="http://img.chapatiz.com/d/ptjb.png">
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
$o = 0;
mysql_query('UPDATE phpbb_users SET rank_patojdur = "0"');
$sql = 'SELECT user_id, patojdur, username FROM phpbb_users WHERE patojdur > 1 ORDER BY patojdur'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req))
{ 		
	$o++;	
	$quetezzz = mysql_query('UPDATE phpbb_users SET rank_patojdur = "'.$o.'" WHERE username = "'.$data['username'].'"');
}
?>

<!-- end main content -->
</table>
<?php
include('../bbs/includes/bas.php'); 
?>