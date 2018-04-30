
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
$title='MaZo';
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

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="91" id="mazo_header" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="mazo_header.swf" />
<param name="menu" value="false" />
<param name="quality" value="high" />
<param name="bgcolor" value="#3c6686" />
<embed src="mazo_header.swf" menu="false" quality="high" bgcolor="#3c6686" width="435" height="91" name="mazo_header" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
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
                          <img alt="Un coup gagnant" src="htp2.gif" hspace="10" vspace="0" align="left">

                          <b>MaZo</b> est un pur jeu de hasard/chance style roulette-russe !
                          <br /><br />
                          Le principe est simple: gagner le plus de fois possibles !
                          <br />
                          Contrairement à des jeux comme <a href="/bacteria/">Bacteria</a> ou
                          <a href="/patojdur/">Patojdur</a> qui demandent des semaines d'entrainement
                          pour devenir pro et atteindre le haut du classement, <b>MaZo</b> est un jeu
                          ou tu peux devenir 1er du classement en quelques minutes...
                          ou passer des premières places à dernier du classement en un seul coup !!! <b>>)</b>

                          <br/><br/>
                          Qui s'arrêtera à temps ? Qui continuera une fois de trop ? <b>@@</b>
                          A toi de bien gérer, et... bonne chance <b>;)</b>
                          <br/><br/>
                          <b>Les meilleurs classés gagnent un casque MaZo ( 1er au 3eme )<br />
			  Et un trefle MaZo ( 4eme au 10eme ) ... :D</b>
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
                          <b>Attention : les visiteurs ne peuvent pas jouer !</b>
                          </div>
                          <br />
                          <b>MaZo !</b> se joue où tu veux, quand tu veux...<br />
                          <br />

                          Tout seul la nuit dans un coin sombre et reculé de la forêt bleue,
                          tôt le matin dans l'eau à Kopakabana,
                          après chaque 18/20 en Maths <b>&lt;:D</b>, à l'accueil à plusieurs encouragé par
                          des dizaines de tiz en délire, de la main gauche, avec une cuillere de nutella dans la bouche...  <br />
                          <br />
                          C'est comme tu le sens, n'oublie jamais: un coup de travers et tu perds !!!
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
                          <b>MaZo (alpha)</b> se joue avec une commande de chat:
                          tape <b>!mazo</b> pour jouer un coup, c'est tout !
                          <br /><br />
                          Tu as une chance sur deux de gagner.<br />
                          Chaque fois que tu gagnes, ton score <b>MaZo</b> augmente d'un point.<br />

                          Chaque fois que tu perds, ton score... reviens à zéro ! <b>:')</b>
                          <br />
                          <br />
                          Alors ? Est ce que tu vas savoir t'arrêter à temps ? <b>&lt;&lt;</b>
                          <br />
                          <br />
                          <b>Notes:</b><br />

                          - Tu as toujours une chance sur deux de gagner/perdre quelque soit le score,
                          ce n'est pas plus difficile avec un gros score.<br />
                          - Chaque coup est du pur hasard, il n'y a pas de moment meilleur, c'est quand tu le sens.<br />
                          - Le temps que met à s'afficher le résultat n'indique pas un bon/mauvais coup.<br />
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
                          <span class="titrebleu">Les 20 plus mazo de l'Archipel</span>

                          <br />
                          <em>&quot;Continuera ? Continuera pas ? &lt;:D&quot;</em>
                          <br />
                          <br />


                          <table width='100%' border='0' cellpadding="3" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>#</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Membre</b></td>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Score</b></td>
                             <td valign="top" align="center" nowrap="nowrap"><b>Date</b></td>
                           </tr>
<?php
$i = 0;
mysql_query('UPDATE phpbb_users SET rank_mazo = "0"');
$sql = 'SELECT user_id, mazo, username FROM phpbb_users WHERE mazo >= 1 ORDER BY mazo DESC LIMIT 20'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 		
		$i++;
		$quetezzz = mysql_query('UPDATE phpbb_users SET rank_mazo = "'.$i.'" WHERE user_id = "'.$data['user_id'].'"');
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

echo '<td align="center" valign="top" ><b>'.$i.'<b></td><td align="center" valign="top" ><a href="/annuaire/?mid='.$data['user_id'].'">'.$data['username'].'</a></td><td align="center" valign="top" ><b>'.$data['mazo'].'</b></td><td align="center" valign="top" nowrap="nowrap">2009-??-?? ??:??:??</td></tr>';
	} ?>
<?php
$f = 0;
$skl = mysql_query('SELECT user_id FROM phpbb_users WHERE mazo < 5');
while($dataf = mysql_fetch_assoc($skl))
{
	$f++;
	$quetexx = mysql_query('UPDATE phpbb_users SET rank_mazo = "0" WHERE user_id = "'.$dataf['user_id'].'"');
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
                          <b>MaZo</b> est actuellement en version alpha (version de test)
                          <br />
                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          <b>MaZo (alpha)</b> est accessible uniquement pour les membres de <b>niveau 15</b> et plus.
                          <br />

                          <br />
                          <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                          Le classement est mis à jour en temps <b>réel !</b>.
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