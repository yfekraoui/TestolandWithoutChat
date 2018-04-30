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
$title='Qui est en ligne ?';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($host,$name,$password);
mysql_select_db($db);
include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu

function Prive()
{
	$nac = mysql_query('SELECT COUNT(*) AS nac FROM phpbb_users WHERE online = 1 AND map LIKE "bgw%"');
	$nac = mysql_fetch_assoc($nac);
	$nac = $nac['nac'];
	if($nac != "0")
	{
		$salle = "En privé mariage";
		echo '<b>'.$salle.' ('.$nac.') </b><br />';
		$accueil = mysql_query('SELECT username, user_id, rang FROM phpbb_users WHERE online = 1 AND map LIKE "bgw%" ORDER BY username');
		$i1 = 0;
		while($d_accueil = mysql_fetch_assoc($accueil))
		{
			$i1++;
 			if($d_accueil['rang'] == "1")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#990000"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "2")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#326496"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "5")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#6A6A6A"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "6")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#FF3300"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
			else
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><b>'.$d_accueil['username'].'</b></a>, ';
			}
			if($i1 == 6 || $i1 == 12 || $i1 == 18 || $i1 == 24)
			{
				echo'<br />';
			}
		}
		if($i1 == 6 || $i1 == 12 || $i1 == 18 || $i1 == 24)
		{
			echo'<br />';
		}
		else
		{
			echo '<br /><br />';
		}
	}
}


function Game()
{
	$nac = mysql_query('SELECT COUNT(*) AS nac FROM phpbb_users WHERE online = 1 AND map LIKE "bgd%"');
	$nac = mysql_fetch_assoc($nac);
	$nac = $nac['nac'];
	if($nac != "0")
	{
		$salle = "En partie de Bacteria";
		echo '<b>'.$salle.' ('.$nac.') </b><br />';
		$accueil = mysql_query('SELECT username, user_id, rang FROM phpbb_users WHERE online = 1 AND map LIKE "bgd%" ORDER BY username');
		$i1 = 0;
		while($d_accueil = mysql_fetch_assoc($accueil))
		{
			$i1++;
 			if($d_accueil['rang'] == "1")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#990000"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "2")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#326496"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "5")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#6A6A6A"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "6")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#FF3300"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
			else
			{
			echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><b>'.$d_accueil['username'].'</b></a>, ';
			}
			if($i1 == 6 || $i1 == 12 || $i1 == 18 || $i1 == 24)
			{
				echo'<br />';
			}
		}
		if($i1 == 6 || $i1 == 12 || $i1 == 18 || $i1 == 24)
		{
			echo'<br />';
		}
		else
		{
			echo '<br /><br />';
		}
	}
}


function Who($map)
{
	$verif_map = substr("$map", 0, 3); 
	$nac = mysql_query('SELECT COUNT(*) AS nac FROM phpbb_users WHERE online = 1 AND map = "'.$map.'"');
	$nac = mysql_fetch_assoc($nac);
	$nac = $nac['nac'];
	if($nac != "0")
	{
		if($map == "chimbo_gate"){$salle = "Accueil";}
		else if($map == "dispatcher"){$salle = "Trou noir";}
		else if($map == "kopakabana"){$salle = "Kopakabana Beach";}
		else if($map == "gate_to_pro"){$salle = "Vers bacteria pros";}
		else if($map == "bacteria_debutants"){$salle = "Bacteria Debutant";}
		else if($map == "bacteria_pros"){$salle = "Bacteria Pros";}
		else if($map == "chimbo_wedding"){$salle = "La colline sacrée";}
		else if($map == "gate_to_deb"){$salle = "Vers bacteria debutant";}
		else if($map == "gate_to_wedding"){$salle = "Vers la colline sacrée";}
		else if($map == "gate_to_swamps"){$salle = "Vers les marécages";}
		else if($map == "gate_to_divorce"){$salle = "Un lieu bien sombre";}
		else if($map == "gate_to_patojdur"){$salle = "Vers Patojdur";}
		else if($map == "patojdur"){$salle = "Patojdur";}
		else if($map == "kopakibini"){$salle = "Kopakibini Beach";}
		else if($map == "blueforest.to_ballades"){$salle = "La foret bleu";}
		else if($map == "blueforest.ballade2"){$salle = "La foret bleu 2";}
		else if($map == "blueforest.ballade1"){$salle = "La foret bleu 1";}
		else if($map == "blueforest.pv"){$salle = "Privé foret";}
		else if($map == "blueforest.reunion"){$salle = "En reunion Officielle";}
		else if($map == "wedding_private"){$salle = "Privé mariage";}
		else if($map == "blueforest.race"){$salle = "Lapino's race";}
		else if($map == "underground.divorce"){$salle = "La salle de la honte et du divorce";}
		else if($map == "underground.kchosalon"){$salle = "Salon des bourreaux";}
		else if($map == "underground.kchoa"){$salle = "Cachot du balez";}
		else if($map == "underground.kchob"){$salle = "Cachot de la bête";}
		else if($map == "underground.kchoc"){$salle = "Cachot du poête";}
		else if($map == "underground.kchod"){$salle = "Cachot du malin";}
		else if($map == "kopa2"){$salle = "Une plage à Kopakabana ...";}
		else if($map == "warpzone"){$salle = "Warp Zone";}
		else if($map == "underground.kchokoridor"){$salle = "Dans les souterains...";}
		else if($map == "gate_to_kopakabana"){$salle = "En route vers Kopakabana Beach";}
		else if($map == "to_expo"){$salle = "Grotte Mushlight";}
		else if($map == "zonez"){$salle = "Capture the flag forêt";}
		else if($map == "zonez2"){$salle = "Capture the flag sous terrain";}
		else if($map == "blueforest.maisonOfficiels"){$salle = "Maison des Officiels";}
		else if($map == "embarcadaire_zx"){$salle = "Ancien embarcadaire Z exterieur";}
		else if($map == "embarcadaire_i"){$salle = "Ancien embarcadaire Z interieur";}
		else if($map == "speedmaze1"){$salle = "SpeedMaze";}
		else if($map == "speedmaze2"){$salle = "SpeedMaze";}
		else if($map == "speedmaze3"){$salle = "SpeedMaze";}
		else if($map == "speedmaze4"){$salle = "SpeedMaze";}
		else if($map == "speedmaze5"){$salle = "SpeedMaze";}
		else if($map == "speedmaze6"){$salle = "SpeedMaze";}
		else if($map == "speedmaze7"){$salle = "SpeedMaze";}
		else if($map == "speedmaze8"){$salle = "SpeedMaze";}
		else if($map == "speedmaze9"){$salle = "SpeedMaze";}
		else if($map == "speedmaze10"){$salle = "SpeedMaze";}
		else if($map == "chimboz"){$salle = "Chimboz 2003";}
		else if($map == "noobzone"){$salle = "Noob zone";}
		else if($map == "chapaport"){$salle = "Chapaport";}
		else if($map == "ile_abandonned"){$salle = "Ile abandonnée ...";}
		else if($map == "exploramap"){$salle = "Exploramap";}
		else if($map == "tresor"){$salle = "Trou du cul du monde";}
		else if($map == 'bac_game_deb'){$salle = "En partie de Bacteria";}
		else if($map == "room_games"){$salle = "Arène des jeux";}
		else if($map == "mdk"){$salle = "Maison Des Kings";}
		else if($map == "MDN"){$salle = "Maison De Noêl";}
		else if($map == "ctf"){$salle = "Capture The Flag";}
		else if($map == "race_1"){$salle = "Lapino's Race";}
		else if($map == "swamps_lucioles"){$salle = "La forêt des lucioles";}
		else if($map == "pln"){$salle = "Pecho La Noisette";}
		else if($verif_map == "bgd"){$salle = "En Partie Bacteria";}
		else if($map == "citrouille"){$salle = "Labyrinthe du jardin aux citrouilles";}
		
		echo '<b>'.$salle.' ('.$nac.') </b><br />';
		$accueil = mysql_query('SELECT username, user_id, rang FROM phpbb_users WHERE online = 1 AND map = "'.$map.'" ORDER BY username');
		$i1 = 0;
		while($d_accueil = mysql_fetch_assoc($accueil))
		{
	
		$i1++;
		
		
	 		if($d_accueil['rang'] == "1")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#990000"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "2")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#326496"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "5")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#6A6A6A"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
 			else if($d_accueil['rang'] == "6")
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><font color="#FF3300"><b>'.$d_accueil['username'].'</b></font></a>, ';
			}
			else
			{
				echo '<a href="/annuaire/?mid='.$d_accueil['user_id'].'"><b>'.$d_accueil['username'].'</b></a>, ';
			}
			if($i1 == 6 || $i1 == 12 || $i1 == 18 || $i1 == 24)
			{
				echo'<br />';
			}
		}
		if($i1 == 6 || $i1 == 12 || $i1 == 18 || $i1 == 24)
		{
			echo'<br />';
		}
		else
		{
			echo '<br /><br />';
		}
	}
}
?>
<head>
<META HTTP-EQUIV="Refresh" CONTENT="15; URL=/who/">

</head> 
<td valign="top">
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Qui est en ligne ?" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Qui est en ligne ?"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>


            <!-- slot connecteds -->
        <table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
         

            <br />
            <br />

            <table width="435" border="0" cellpadding="0" cellspacing="0">
 <tr>     
                 
                   
      
<?php
if(isset($_GET['sort']) && $_GET['sort'] == "location")
{
$ct = mysql_query('SELECT COUNT(*) AS ct FROM phpbb_users WHERE online = "1"');
					$ct = mysql_fetch_assoc($ct);
					$ct = $ct['ct'];
?>

                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>

                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                      <div align="center">
                          <span class="titrebleu">Les Connectés sur le Chat !</span><br />
						            <em>&quot;Il y avait <b><?php echo $ct;?></b> connectés...&quot;</em>
                  

                            <br />
                     

                          </div>
              
                         <br /> <br />
						 
  <div align="center"><img src="/who/index_body_cat_open.gif"/>
                          <a href="/who/">Trier par Pseudo</a>.</div>
  <br />
                          <br />





<?php
					  
	Who("dispatcher");
	Who("noobzone");
	Who("chimbo_gate");
	Who("bacteria_debutants");
	Who("bacteria_pros");
	Who("chimbo_wedding");
	Who("gate_to_wedding");
	Who("wedding_private");
	Who("gate_to_deb");
	Who("gate_to_pro");
	Who("gate_to_swamps");
	Who("gate_to_divorce");
	Who("gate_to_patojdur");
	Who("patojdur");
	Who("gate_to_kopakabana");
	Who("kopakabana");
	Who("kopakibini");
	Who("blueforest.to_ballades");
	Who("blueforest.ballade1");
	Who("blueforest.ballade2");
	Who("blueforest.pv");
	Who("blueforest.maisonOfficiels");
	Who("blueforest.reunion");
	Who("underground.kchokoridor");
	Who("underground.kchoa");
	Who("underground.kchob");
	Who("underground.kchoc");
	Who("underground.kchod");
	Who("underground.kchosalon");
	Who("underground.divorce");
	Who("to_expo");
	Who("kopa2");
	Who("warpzone");
	Who("bac_game_deb");
	Who("submarine");
	Who("chapaport");
	Who("ile_abandonned");
	Who("exploramap");
	Who("tresor");
	Who("labyrinthe");
	Who("embarcadaire_zx");
	Who("room_games");
	Who("chimboz");
	Who("race_1");
	Who("race_2");
	Who("race_3");
	Who("race_4");
	Who("race_5");
	Who("race_6");
	Who("speedmaze1");
	Who("speedmaze2");
	Who("speedmaze3");
	Who("speedmaze4");
	Who("speedmaze5");
	Who("speedmaze6");
	Who("speedmaze7");
	Who("speedmaze8");
	Who("speedmaze9");
	Who("speedmaze10");
	Who("mdk");
	Who("MDN");
	Who("ctf");
	Who("race_1");
	Who("citrouille");
	Who("swamps_lucioles");
	Who("pln");
	Game();
	Prive();
	?>
         			  <br />
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>

                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>

			 

			  
			  
				  <!-----------------------------------STOP------------------------------------- -->

<?php
 }
	
	else
	{
	$ct = mysql_query('SELECT COUNT(*) AS ct FROM phpbb_users WHERE online = "1"');
					$ct = mysql_fetch_assoc($ct);
					$ct = $ct['ct'];
?>

                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>

                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                      <div align="center">
                          <span class="titrebleu">Les Connectés sur le Chat !</span>
                            <br />
                          <em>&quot;Il y avait <b><?php echo $ct;?></b> connectés...&quot;</em>

                          </div>

                          <br />
                          <br />
                                     <div align="center"><img src="/who/index_body_cat_open.gif"/>
                          <a href="?sort=location">Trier par lieu</a>.</div>  
                          <br />
                          <br />

                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                        <tr>
                          <td align="right" valign="top" width="50%"><strong>Membre</strong></td>
                          <td align="left" width="50%"><strong>Lieu</strong></td>
                        </tr>

<?php
$i = 0;

$sql = 'SELECT username, map, rang, user_id FROM phpbb_users WHERE online = 1'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 	
	$map = $data['map'];
	$verif_map = substr("$map", 0, 3); 
	if($map == "chimbo_gate"){$salle = "Accueil";}
		else if($map == "dispatcher"){$salle = "Trou noir";}
		else if($map == "kopakabana"){$salle = "Kopakabana Beach";}
		else if($map == "gate_to_pro"){$salle = "Vers bacteria pros";}
		else if($map == "bacteria_debutants"){$salle = "Bacteria Debutant";}
		else if($map == "bacteria_pros"){$salle = "Bacteria Pros";}
		else if($map == "chimbo_wedding"){$salle = "La colline sacrée";}
		else if($map == "gate_to_deb"){$salle = "Vers bacteria debutant";}
		else if($map == "gate_to_wedding"){$salle = "Vers la colline sacrée";}
		else if($map == "gate_to_swamps"){$salle = "Vers les marécages";}
		else if($map == "gate_to_divorce"){$salle = "Un lieu bien sombre";}
		else if($map == "gate_to_patojdur"){$salle = "Vers Patojdur";}
		else if($map == "patojdur"){$salle = "Patojdur";}
		else if($map == "kopakibini"){$salle = "Kopakibini Beach";}
		else if($map == "blueforest.to_ballades"){$salle = "La foret bleu";}
		else if($map == "blueforest.ballade2"){$salle = "La foret bleu 2";}
		else if($map == "blueforest.ballade1"){$salle = "La foret bleu 1";}
		else if($map == "blueforest.pv"){$salle = "Privé foret";}
		else if($map == "blueforest.reunion"){$salle = "En reunion Officielle";}
		else if($map == "wedding_private"){$salle = "Privé mariage";}
		else if($map == "blueforest.race"){$salle = "Lapino's race";}
		else if($map == "underground.divorce"){$salle = "La salle de la honte et du divorce";}
		else if($map == "underground.kchosalon"){$salle = "Salon des bourreaux";}
		else if($map == "underground.kchoa"){$salle = "Cachot du balez";}
		else if($map == "underground.kchob"){$salle = "Cachot de la bête";}
		else if($map == "underground.kchoc"){$salle = "Cachot du poête";}
		else if($map == "underground.kchod"){$salle = "Cachot du malin";}
		else if($map == "kopa2"){$salle = "Une plage à Kopakabana ...";}
		else if($map == "warpzone"){$salle = "Warp Zone";}
		else if($map == "underground.kchokoridor"){$salle = "Dans les souterains...";}
		else if($map == "gate_to_kopakabana"){$salle = "En route vers Kopakabana Beach";}
		else if($map == "to_expo"){$salle = "Grotte Mushlight";}
		else if($map == "zonez"){$salle = "Capture the flag forêt";}
		else if($map == "zonez2"){$salle = "Capture the flag sous terrain";}
		else if($map == "blueforest.maisonOfficiels"){$salle = "Maison des Officiels";}
		else if($map == "embarcadaire_zx"){$salle = "Ancien embarcadaire Z exterieur";}
		else if($map == "embarcadaire_i"){$salle = "Ancien embarcadaire Z interieur";}
		else if($map == "speedmaze1"){$salle = "SpeedMaze";}
		else if($map == "speedmaze2"){$salle = "SpeedMaze";}
		else if($map == "speedmaze3"){$salle = "SpeedMaze";}
		else if($map == "speedmaze4"){$salle = "SpeedMaze";}
		else if($map == "speedmaze5"){$salle = "SpeedMaze";}
		else if($map == "speedmaze6"){$salle = "SpeedMaze";}
		else if($map == "speedmaze7"){$salle = "SpeedMaze";}
		else if($map == "speedmaze8"){$salle = "SpeedMaze";}
		else if($map == "speedmaze9"){$salle = "SpeedMaze";}
		else if($map == "speedmaze10"){$salle = "SpeedMaze";}
		else if($map == "chimboz"){$salle = "Chimboz 2003";}
		else if($map == "noobzone"){$salle = "Noob zone";}
		else if($map == "chapaport"){$salle = "Chapaport";}
		else if($map == "ile_abandonned"){$salle = "Ile abandonnée ...";}
		else if($map == "exploramap"){$salle = "Exploramap";}
		else if($map == "tresor"){$salle = "Trou du cul du monde";}
		else if($map == 'bac_game_deb'){$salle = "En partie de Bacteria";}
		else if($map == "room_games"){$salle = "Arène des jeux";}
		else if($map == "mdk"){$salle = "Maison Des Kings";}
		else if($map == "MDN"){$salle = "Maison De Noêl";}
		else if($map == "ctf"){$salle = "Capture The Flag";}
		else if($map == "race_1"){$salle = "Lapino's Race";}
		else if($map == "pln"){$salle = "Pecho La Noisette";}
		else if($map == "swamps_lucioles"){$salle = "La forêt des lucioles";}
		else if($verif_map == "bgd"){$salle = "En Partie Bacteria";}
		else if($map == "citrouille"){$salle = "Labyrinthe du jardin aux citrouilles";}
	
			$i++;
		$im = $i%2;
		if($im > 0)
		{
			echo '<tr bgcolor=#EEF5FA>';
		}
		else
		{
			echo '<tr>';
		}	
	
if($data['rang'] == "1")
	{
		echo '<td align="right" valign="top"><a href="/annuaire/?mid='.$data['user_id'].'"><font color="#990000"><b>'.$data['username'].'</b></font></a></td><td align="left" valign="top" nowrap="nowrap">'.$salle.'</td>';
	}
 	else if($data['rang'] == "2")
	{
		echo '<td align="right" valign="top"><a href="/annuaire/?mid='.$data['user_id'].'"><font color="#326496"><b>'.$data['username'].'</b></font></a></td> <td align="left" valign="top" nowrap="nowrap">'.$salle.'</td>';
	}
 	else if($data['rang'] == "5")
	{
		echo ' <td align="right" valign="top"><a href="/annuaire/?mid='.$data['user_id'].'"><font color="#6A6A6A"><b>'.$data['username'].'</b></font></a></td> <td align="left" valign="top" nowrap="nowrap">'.$salle.'</td>';
	}
 	else if($data['rang'] == "6")
	{
		echo '<td align="right" valign="top"><a href="/annuaire/?mid='.$data['user_id'].'"><font color="#FF3300"><b>'.$data['username'].'</b></font></a></td><td align="left" valign="top" nowrap="nowrap">'.$salle.'</td>';
	}
	else
	{
		echo '<td align="right" valign="top"><a href="/annuaire/?mid='.$data['user_id'].'"><b>'.$data['username'].'</b></a></td> <td align="left" valign="top" nowrap="nowrap">'.$salle.'</td>';
	}
	}
	
	
	?>
           
                                                   </td>
                        </tr>
                                              </table>

         
  						  <br />
                          <!--
                          <br />
                          <div align="center"><em></em></div>
                          -->
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
?>	
  <!-----------------------------------STOP------------------------------------- -->
			  <tr><td align="left"><img src="/img/spacer.gif" width="435" height="11"></td></tr>

			  <!-----------------------------------STOP------------------------------------- -->
			          <?php
		
					   $nco_site = mysql_query('SELECT COUNT(*) AS ncs FROM co_today WHERE username != "Visiteur"');
					  $nco_site = mysql_fetch_assoc($nco_site);
					  $ncs = $nco_site['ncs'];
				
					  
					    $nco_site2 = mysql_query('SELECT COUNT(*) AS ncs2 FROM co_today');
					  $nco_site2 = mysql_fetch_assoc($nco_site2);
					  $ncs2 = $nco_site2['ncs2'];
					  
					    $lol= mysql_query('SELECT COUNT(*) AS ncis FROM co_today WHERE username = "Visiteur"');
					  $salut = mysql_fetch_assoc($lol);
					  $salutall = $salut['ncis'];
					  ?>
   
	         <tr><td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td></tr>
              <tr>
                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">

                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td>
                      <div align="center">
                          <span class="titrebleu">Connectés sur le site mais pas sur le chat !</span>
                            <br />
                             <em>&quot;<b><?php echo $ncs2;?></b> flemmard(e)s:
                    <b><?php  
					echo $ncs ;?></b> membres
                    et <b><?php echo $salutall;?></b> visiteurs....&quot;</em>


                          </div>

                          <br />
                          <br />
                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                        <tr><td align="center" valign="top" width="100%"><strong>Membre</strong></td></tr>
				<tr><td colspan="2">
				<div style="height:250px;overflow:auto;">
				<table width='100%' border='0' cellpadding="3" cellspacing="0">
				<?php
					  $co_site = mysql_query('SELECT * FROM co_today');
					  $j = 0;
					  $k = 0;
					  $i = 0;
					  while($csite = mysql_fetch_assoc($co_site))
					  {
					  $i++;
					  	$im = $i%2;
		if($im > 0)
		{
			echo '<tr bgcolor=#EEF5FA>';
		}
		else
		{
			echo '<tr>';
		}	
					   	$j++;
						if($csite['username'] == "Visiteur")
						{
							$k++;
						}
						if($csite['username'] != "Visiteur")
						{
							$dcsite = mysql_query('SELECT user_id, rang FROM phpbb_users WHERE username = "'.$csite['username'].'"');
							$dcsite = mysql_fetch_assoc($dcsite);
							if($dcsite['rang'] == "1")
							{
								echo '<td align="center" valign="top"><a href="/annuaire/?mid='.$dcsite['user_id'].'"><font color="#990000"><b>'.$csite['username'].'</b></font></a></td>';
							}
							else if($dcsite['rang'] == "2")
							{
								echo '<td align="center" valign="top"><a href="/annuaire/?mid='.$dcsite['user_id'].'"><font color="#326496"><b>'.$csite['username'].'</b></font></a></td>';
							}
							else if($dcsite['rang'] == "5")
							{
								echo '<td align="center" valign="top"><a href="/annuaire/?mid='.$dcsite['user_id'].'"><font color="#6A6A6A"><b>'.$csite['username'].'</b></font></a></td> ';
							}
							else if($dcsite['rang'] == "6")
							{
								echo '<td align="center" valign="top"><a href="/annuaire/?mid='.$dcsite['user_id'].'"><font color="#FF3300"><b>'.$csite['username'].'</b></font></a></td>';
							}
							else
							{
								echo '<td align="center" valign="top"><a href="/annuaire/?mid='.$dcsite['user_id'].'"><b>'.$csite['username'].'</b></a></td>';
							}
						
						}
						else
						{
						
							echo '<td align="center" valign="top"><b>'.$csite['username'].$k.'</b></td>';


						}
						}?>
           
                        			</table>
</div>
</td></tr>
                      </table>
				  <br />
                      </td>
                    </tr>
                  </table>
                </td>

              </tr>
              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>
              </tr>
 

            <!-- slot connecteds -->

            </table>

          </td>

          <td valign="top">

          	  <!-- savoir_plus -->
              <table width="168" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/spacer.gif" width="12" height="13"><br>
                  <img src="/img/ensavoirplus_top.gif" width="168" height="37"></td>
              </tr>
              <tr>

                <td valign="top" bgcolor="#A4C4E3">
                <table width="168"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td valign="top">
                          Le nombre de connectés indiqué sur cette page est légèrement <b>plus précis</b>
                          que celui indiqué dans la barre de gauche, parcequ'il est mis à jour plus
                          souvent...
                          <br />
                          <br />

                          <div align="center"><a href="http://testoland.com/tchat/" target="_CHIMBOZ">Aller sur le chat</a></div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>

              </tr>
            </table>
            <!-- savoir_plus -->

          </td>

          <td valign="top">
            <!-- ici skyscraper -->
          </td>
        </tr>

</table>
<!-- end main content -->
</td>
</tr>
</table>
<div align="center" class="footer">

		  
	<?php

include($include.'bas.php');

?>