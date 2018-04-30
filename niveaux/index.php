
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
$title='Niveaux';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>

<td valign="top">

 <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<td>
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />

  <param name="movie" value="/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Niveaux" />
  <embed src="/img/subtop2.swf"
            flashvars="title=Niveaux"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />

</object>	  
          <table width="620" border="0" cellpadding="0" cellspacing="0">
            <tr>

            <tr>

              <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11"></td>
              <td height="11" bgcolor="#FFF4D5"> </td>
              <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11"></td>
            </tr>
            <tr> 
              <td width="11" bgcolor="#FFF4D5"> </td>
              <td valign="top" bgcolor="#FFF4D5"> <p><span class="titrebeige"> 
                  </span>Chaque Membre a un niveau qui est d&eacute;termin&eacute;

                  par tout un tas de paramètres comme l'anciennet&eacute; du personnage et le nombre de visites
                  sur le site (regarde en savoir plus). <br />
                  <br />
                  Avoir un bon niveau est tr&egrave;s important car il te permet
                  par exemple de pouvoir &ecirc;tre recrut&eacute; pour &ecirc;tre
                  modo. Il te permet aussi d'avoir de nouveaux costumes ou de
                  nouveaux pouvoirs !<br>
                </p>

                </td>
              <td width="11" bgcolor="#FFF4D5"> </td>
            </tr>
            <tr> 
              <td width="11" height="11"><img src="/img/beige_bg.gif" width="11" height="11"></td>
              <td height="11" bgcolor="#FFF4D5"> </td>
              <td width="11" height="11"><img src="/img/beige_bd.gif" width="11" height="11"></td>
            </tr>

          </table>
          <br>
          <table width="619" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left"><img src="/img/bg_top_grandbleu.gif" width="620" height="11"></td>
            </tr>
            <tr>
              <td background="/img/bg_tile_grandbleu.gif" bgcolor="#DCEAF5"> <table width="100%"  border="0" cellspacing="0" cellpadding="8">

</style>
<?php
function NombreLevel($level) {
	$sql = "SELECT `username` FROM `phpbb_users` WHERE `level` = $level";
	$query = mysql_query($sql) or die(mysql_error());
	$nb_level = mysql_num_rows($query);
	echo $nb_level;
}
?><style type="text/css">
td.levSelLeft {
   border-bottom:3px solid #FF3399;
   border-top:3px solid #FF3399;
   border-left:3px solid #FF3399;
}
td.levSelRight {
   border-bottom:3px solid #FF3399;
   border-top:3px solid #FF3399;
   border-right:3px solid #FF3399;
}
td.levSelMiddle {
   border-bottom:3px solid #FF3399;
   border-top:3px solid #FF3399;
}
span.levSel {
   border:3px solid #FF3399;
}
</style>            <tr>
                    <td align="center">
                    <span class="titrebleu">Tableau des niveaux</span>
                        <br />
                        <br />
                        Voici la liste des niveaux avec <b>ce que tu gagnes</b>
                        &agrave; chaque &eacute;tape:<br />

                        Tout n'est pas encore dévoilé, mise à jour toutes les semaines.
                        <br />
                        <br />
                        					  <table width='100%' border='0' cellpadding="4" cellspacing="0">
                        <tr>
                          <td valign="top" width="1%" nowrap="nowrap"><strong>Niveau</strong></td>
                          <td valign="top" width="1%" nowrap="nowrap"><strong>Nom</strong></td>
                          <td valign="top" width="1%" nowrap="nowrap"><strong>Membres</strong></td>

                          <td valign="top" width="98%"><strong>Avantages</strong></td>
                        </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "0"){ echo 'class="levSelLeft"'; } ?>><a name="level_0"></a><strong>0</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "0"){ echo 'class="levSelMiddle"'; } ?>><strong>A l'essai</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "0"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(0); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "0"){ echo 'class="levSelRight"'; } ?>><b>Chat:</b> Module 'Mes actions'<br /><b>Messagerie interne:</b> Pour envoyer des messages à tous les membres même quand ils ne sont pas là.</td>

                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "1"){ echo 'class="levSelLeft"'; } ?>><a name="level_1"></a><strong>1</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "1"){ echo 'class="levSelMiddle"'; } ?> ><strong>Noob</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "1"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(1); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "1"){ echo 'class="levSelRight"'; } ?>><b>BBS:</b> Peut s'inscrire<br /><b>Popularit&eacute;:</b> Peut voter<br /><b>Site de fans:</b> Peut proposer un site<br /></td>

                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "2"){ echo 'class="levSelLeft"'; } ?>><a name="level_2"></a><strong>2</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "2"){ echo 'class="levSelMiddle"'; } ?> ><strong>Bizutable</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "2"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(2); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "2"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> Kagoul<br /></td>
                                                </tr>

                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "3"){ echo 'class="levSelLeft"'; } ?>><a name="level_3"></a><strong>3</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "3"){ echo 'class="levSelMiddle"'; } ?> ><strong>Bleu</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "3"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(3); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "3"){ echo 'class="levSelRight"'; } ?>>&nbsp;</td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>

                          <td valign="top" <?php if($userdata['level'] == "4"){ echo 'class="levSelLeft"'; } ?>><a name="level_4"></a><strong>4</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "4"){ echo 'class="levSelMiddle"'; } ?> ><strong>Neophyte</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "4"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(4); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "4"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> Maillots de bains, badges Pays<br /><b>Groupes:</b> Peut s'inscrire à 1 groupe</td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "5"){ echo 'class="levSelLeft"'; } ?>><a name="level_5"></a><strong>5</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "5"){ echo 'class="levSelMiddle"'; } ?> ><strong>Classe C.</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "5"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(5); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "5"){ echo 'class="levSelRight"'; } ?>>&nbsp;</td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "6"){ echo 'class="levSelLeft"'; } ?>><a name="level_6"></a><strong>6</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "6"){ echo 'class="levSelMiddle"'; } ?> ><strong>Inited</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "6"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(6); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "6"){ echo 'class="levSelRight"'; } ?>><b>Chat:</b> Moods supplémentaires Volume 1<br /><b>Fringue:</b> 2 coiffures supplémentaires</td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "7"){ echo 'class="levSelLeft"'; } ?>><a name="level_7"></a><strong>7</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "7"){ echo 'class="levSelMiddle"'; } ?> ><strong>Apprentice</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "7"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(7); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "7"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> fringues Redromic<br /></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "8"){ echo 'class="levSelLeft"'; } ?>><a name="level_8"></a><strong>8</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "8"){ echo 'class="levSelMiddle"'; } ?> ><strong>Panawak</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "8"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(8); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "8"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> Babouches, lunettes de ski<br /></td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "9"){ echo 'class="levSelLeft"'; } ?>><a name="level_9"></a><strong>9</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "9"){ echo 'class="levSelMiddle"'; } ?>><strong>Trustable</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "9"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(9); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "9"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> Pattes de lapin<br /></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "10"){ echo 'class="levSelLeft"'; } ?>><a name="level_10"></a><strong>10</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "10"){ echo 'class="levSelMiddle"'; } ?>><strong>Classe B.</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "10"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(10); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "10"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> 2 paires de chaussures, un sac à dos, tenue spartiate bleue<br /></td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "11"){ echo 'class="levSelLeft"'; } ?>><a name="level_11"></a><strong>11</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "11"){ echo 'class="levSelMiddle"'; } ?>><strong>Nice</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "11"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(11); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "11"){ echo 'class="levSelRight"'; } ?>><b>Annuaire:</b> Meilleure Recherche Avancée<br /></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "12"){ echo 'class="levSelLeft"'; } ?>><a name="level_12"></a><strong>12</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "12"){ echo 'class="levSelMiddle"'; } ?>><strong>Used</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "12"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(12); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "12"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> 2 maillots de bain<br /></td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "13"){ echo 'class="levSelLeft"'; } ?>><a name="level_13"></a><strong>13</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "13"){ echo 'class="levSelMiddle"'; } ?>><strong>Confirmed</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "13"){ echo 'class="levSelMiddle"'; } ?> ><?php NombreLevel(13); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "13"){ echo 'class="levSelRight"'; } ?>><b>Popularité:</b> Ton vote compte pour 2<br /></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "14"){ echo 'class="levSelLeft"'; } ?>><a name="level_14"></a><strong>14</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "14"){ echo 'class="levSelMiddle"'; } ?>><strong>Aideurizable</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "14"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(14); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "14"){ echo 'class="levSelRight"'; } ?>>&nbsp;</td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "15"){ echo 'class="levSelLeft"'; } ?>><a name="level_15"></a><strong>15</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "15"){ echo 'class="levSelMiddle"'; } ?>><strong>Classe A.</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "15"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(15); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "15"){ echo 'class="levSelRight"'; } ?>><b>Groupes:</b> Peut s'inscrire à 2 groupes<br /><b>Groupes:</b> Peut ouvrir 1 groupe<br /><b>Fringue:</b> planches de snowboard, etnic et royal</br ></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "16"){ echo 'class="levSelLeft"'; } ?>><a name="level_16"></a><strong>16</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "16"){ echo 'class="levSelMiddle"'; } ?>><strong>Experimented</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "16"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(16); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "16"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> Coiffure Ketou<br /></td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "17"){ echo 'class="levSelLeft"'; } ?>><a name="level_17"></a><strong>17</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "17"){ echo 'class="levSelMiddle"'; } ?>><strong>Acharné</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "17"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(17); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "17"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> 2 coiffures supplémentaires<br /></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "18"){ echo 'class="levSelLeft"'; } ?>><a name="level_18"></a><strong>18</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "18"){ echo 'class="levSelMiddle"'; } ?>><strong>Respekt</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "18"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(18); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "18"){ echo 'class="levSelRight"'; } ?>><b>Popularité:</b> Ton vote compte pour 3<br /></td>
                                                </tr>
                                                <tr>
                         <td valign="top" <?php if($userdata['level'] == "19"){ echo 'class="levSelLeft"'; } ?>><a name="level_19"></a><strong>19</strong></td>
                         <td valign="top" <?php if($userdata['level'] == "19"){ echo 'class="levSelMiddle"'; } ?>><strong>2High</strong></td>
                         <td valign="top" <?php if($userdata['level'] == "19"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(19); ?></td>
                         <td valign="top" <?php if($userdata['level'] == "19"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> 1 paire de chaussures<br /></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "20"){ echo 'class="levSelLeft"'; } ?>><a name="level_20"></a><strong>20</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "20"){ echo 'class="levSelMiddle"'; } ?>><strong>Classe Z.</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "20"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(20); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "20"){ echo 'class="levSelRight"'; } ?>><b>Groupes:</b> Peut s'inscrire à 3 groupes<br /><b>Popularité:</b> Ton vote compte pour 4<br /></td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "21"){ echo 'class="levSelLeft"'; } ?>><a name="level_21"></a><strong>21</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "21"){ echo 'class="levSelMiddle"'; } ?>><strong>Modoizable</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "21"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(21); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "21"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> 2 tenues complètes Ultimoz<br /></td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "22"){ echo 'class="levSelLeft"'; } ?>><a name="level_22"></a><strong>22</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "22"){ echo 'class="levSelMiddle"'; } ?>><strong>Ultimoz C.</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "22"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(22); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "22"){ echo 'class="levSelRight"'; } ?>>&nbsp;</td>
                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "23"){ echo 'class="levSelLeft"'; } ?>><a name="level_23"></a><strong>23</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "23"){ echo 'class="levSelMiddle"'; } ?>><strong>Ultimoz B.</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "23"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(23); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "23"){ echo 'class="levSelRight"'; } ?>>&nbsp;</td>
                                                </tr>
                                                <tr bgcolor=#EEF5FA>
                          <td valign="top" <?php if($userdata['level'] == "24"){ echo 'class="levSelLeft"'; } ?>><a name="level_24"></a><strong>24</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "24"){ echo 'class="levSelMiddle"'; } ?>><strong>Ultimoz A.</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "24"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(24); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "24"){ echo 'class="levSelRight"'; } ?>><b>Fringue:</b> Coupe Spéciale<br /></td>

                                                </tr>
                                                <tr>
                          <td valign="top" <?php if($userdata['level'] == "25"){ echo 'class="levSelLeft"'; } ?>><a name="level_25"></a><strong>25</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "25"){ echo 'class="levSelMiddle"'; } ?>><strong>Ultimoz</strong></td>
                          <td valign="top" <?php if($userdata['level'] == "25"){ echo 'class="levSelMiddle"'; } ?>><?php NombreLevel(25); ?></td>
                          <td valign="top" <?php if($userdata['level'] == "25"){ echo 'class="levSelRight"'; } ?>><b>Groupe:</b> Peut créer un deuxième groupe<br /></td>
                                                </tr>

                                              </table>

                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td><img src="/img/bg_bottom_grandbleu.gif" width="620" height="11"></td>

            </tr>
          </table>
        </td>
          <td valign="top">
           <!-- stats levels -->

		   <table width="168" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/spacer.gif" width="12" height="17"><br>

                <img src="/img/ensavoirplus_top.gif" width="168" height="37"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#A4C4E3">
                    <table width="168"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                     <td valign="top" >
                   
                     <br/>
                     <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                     Pour savoir comment le niveau est calculé, <a href="/img/equation_niveau.gif" target="_blank">clique ici.</a><br />
                     <br />
                     <img src="/img/coldroite_puce.gif" width="17" height="12" border="0" align="absmiddle">
                     Si tu ne connais pas ton niveau, il est indiqué sous la cabine où tu changes de fringues, <a href="/niveaux/how.gif" target="_blank">exemple ici.</a><br/>

                     </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>
              </tr>
            </table>

           <!-- skyscraper -->
          </td>
        </tr>
            </table>
<!-- end main content -->
</td>
</tr>
</table>
<div align="center" class="footer">




<?php
include('../bbs/includes/bas.php'); 
?>
