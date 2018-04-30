
<?php
$erreur_m='Ce membre a été supprimé ou est banni. Sa fiche annuaire n\'est donc plus accessible.';
//l'erreur qui va s'afficher dans plusieurs cas donc j'en fais une variable....

$mid=$_GET['mid'];
//Je ne met pas le (int) pour la vérif du 'is_numeric', lje emt le intval dans la requete ^^
if(empty($mid) || !is_numeric($mid) || $mid == -1) 
//Si, le n° de membre pour l'indentification est vide ou que ce n'est pas un nombre...
{
echo'<td valign="top"><table width="468" border="0" cellpadding="0" cellspacing="0"><tr><td align="left"><table border="0" cellpadding="0" cellspacing="0"><tr><!--footer slot--><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_klr.gif" width="12" height="12"></td><td height="12" width="444"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_klr.gif" width="444" height="12"></td><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_klr.gif" width="12" height="12"></td></tr></table></td></tr><tr><td bgcolor="#D5E6F3"><table width="100%"  border="0" cellspacing="0" cellpadding="5"><tr><td align="center"><b>'.$erreur_m.'</b><br /></td></tr></table></td></tr><tr><td><table border="0" cellpadding="0" cellspacing="0"><tr><!--footer slot--><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_klr.gif" width="12" height="12"></td><td height="12" width="444"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_klr.gif" width="444" height="12"></td><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_klr.gif" width="12" height="12"></td></tr></table></td></tr></table><br class=\'clean\'/></td>';
}
else
{
$requete1=mysql_query('SELECT * FROM '.$pref.'users WHERE user_id="'.intval($mid).'"') or die($error_sql()); 
/*Notre premiere requete, qui va chercher quelques infos sur le membre WHERE mid= ce membre
Sinon, si il y a un probleme dans la requete, il affiche une variable fais dans config.php (dossier includes) pour nous excuser etc...politesse ^^*/
if(mysql_num_rows($requete1) < 1) //Si la requete n'a rien trouvé...
{

echo'<td valign="top"><table width="468" border="0" cellpadding="0" cellspacing="0"><tr><td align="left"><table border="0" cellpadding="0" cellspacing="0"><tr><!--footer slot--><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_klr.gif" width="12" height="12"></td><td height="12" width="444"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_klr.gif" width="444" height="12"></td><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_klr.gif" width="12" height="12"></td></tr></table></td></tr><tr><td bgcolor="#D5E6F3"><table width="100%"  border="0" cellspacing="0" cellpadding="5"><tr><td align="center"><b>'.$erreur_m.'</b><br /></td></tr></table></td></tr><tr><td><table border="0" cellpadding="0" cellspacing="0"><tr><!--footer slot--><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_klr.gif" width="12" height="12"></td><td height="12" width="444"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_klr.gif" width="444" height="12"></td><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_klr.gif" width="12" height="12"></td></tr></table></td></tr></table><br class=\'clean\'/></td>'; } else {
$data_member=mysql_fetch_assoc($requete1);
?>
  <!-- main content -->
	   <!--main content--><td valign="top">
	   
<table width="468" border="0" cellpadding="0" cellspacing="0">
<tr>
<td>
<?php
if($data_member['user_sexe'] == "meuf")
{
	$data_member['user_sexe'] = "fille";
}
else
{
	$data_member['user_sexe'] = "mec";
}
?>
<table width="468" border="0" cellpadding="0" cellspacing="0" background="/img/annuaire/header_<?php echo $data_member['user_sexe']; ?>.gif" style="background-repeat:repeat-x">


<!--header-->
<tr>
<?php
$title='Annuaire : '.stripslashes($data_member['username']).'';
$map = $data_member['map'];
$signe_astro = $data_member['sign'];
$classement_lapino = $data_member['classement_lapino'];
$rank_lapino = $data_member['rank_lapino'];
$classement_capture = $data_member['classement_capture'];
$rank_capture = $data_member['rank_capture'];
$classement_speedmaze = $data_member['classement_speedmaze'];
$classement_bacteria = $data_member['classement_bacteria'];
$patojdur = $data_member['patojdur'];
$rank_speedmaze = $data_member['rank_speedmaze'];
$clan = $data_member['clan'];
$rank_patojdur = $data_member['rank_patojdur'];
$rank_g_patoj = $data_member['rank_patojdur_a'];
$classement_g_patoj = $data_member['classement_patojdur_h'];
$rank_mazo = $data_member['rank_mazo'];
$rank_bacteria = $data_member['rank_bacteria'];
$mazo = $data_member['mazo'];
$ban = $data_member['ban'];
$date_inscription = $data_member['user_regdate'];
$level = $data_member['level'];
$classement_jour = $data_member['classement_popu_a'];
$classement_hier = $data_member['classement_popu_h'];
$classement_general = $data_member['classement_popu_g'];
$rank_hier = $data_member['rank_popu_h'];
$time_co = $data_member['tim_co'];
$spliterlolilol = substr($map, 0, 3);

if($map == "chimbo_gate"){$map = "Accueil";}
else if($map == "dispatcher"){$map = "Trou noir";}
else if($map == "kopakabana"){$map = "Kopakabana Beach";}
else if($map == "gate_to_pro"){$map = "Vers bacteria pros";}
else if($map == "bacteria_debutants"){$map = "Bacteria Debutant";}


else if($map == "bacteria_pros"){$map = "Bacteria Pros";}
else if($map == "chimbo_wedding"){$map = "La colline sacrée";}
else if($map == "gate_to_deb"){$map = "Vers bacteria debutant";}
else if($map == "gate_to_wedding"){$map = "Vers la colline sacrée";}
else if($map == "gate_to_swamps"){$map = "Vers les marécages";}
else if($map == "gate_to_divorce"){$map = "Un lieu bien sombre";}
else if($map == "gate_to_patojdur"){$map = "Vers Patojdur";}
else if($map == "patojdur"){$map = "Patojdur";}
else if($map == "kopakibini"){$map = "Kopakibini Beach";}
else if($map == "blueforest.to_ballades"){$map = "La foret bleu";}
else if($map == "blueforest.ballade2"){$map = "La foret bleu 2";}
else if($map == "blueforest.ballade1"){$map = "La foret bleu 1";}
else if($map == "blueforest.pv"){$map = "Privé foret";}
else if($map == "blueforest.reunion"){$map = "En reunion Officielle";}
else if($map == "blueforest.race"){$map = "Lapino's race";}
else if($map == "underground.divorce"){$map = "La salle de la honte et du divorce";}
else if($map == "underground.kchosalon"){$map = "Salon des bourreaux";}
else if($map == "underground.kchoa"){$map = "Cachot du balez";}
else if($map == "underground.kchob"){$map = "Cachot de la bête";}
else if($map == "underground.kchoc"){$map = "Cachot du poête";}
else if($map == "underground.kchod"){$map = "Cachot du malin";}
else if($map == "kopa2"){$map = "Une plage à Kopakabana ...";}
else if($map == "underground.kchokoridor"){$map = "Dans les souterains...";}
else if($map == "gate_to_kopakabana"){$map = "En route vers Kopakabana Beach";}
else if($map == "to_expo"){$map = "Grotte Mushlight";}
else if($map == "zonez"){$map = "Capture the flag forêt";}
else if($map == "zonez2"){$map = "Capture the flag sous terrain";}
else if($map == "blueforest.maisonOfficiels"){$map = "Maison des Officiels";}
else if($map == "embarcadaire_zx"){$map = "Ancien embarcadaire exterieur";}
else if($map == "speedmaze1"){$map = "SpeedMaze";}
else if($map == "speedmaze2"){$map = "SpeedMaze";}
else if($map == "speedmaze3"){$map = "SpeedMaze";}
else if($map == "speedmaze4"){$map = "SpeedMaze";}
else if($map == "speedmaze5"){$map = "SpeedMaze";}
else if($map == "speedmaze6"){$map = "SpeedMaze";}
else if($map == "speedmaze7"){$map = "SpeedMaze";}
else if($map == "speedmaze8"){$map = "SpeedMaze";}
else if($map == "speedmaze9"){$map = "SpeedMaze";}
else if($map == "speedmaze10"){$map = "SpeedMaze";}
else if($map == "chimboz"){$map = "Chimboz 2003";}
else if($map == "noobzone"){$map = "Noob zone";}
else if($map == "chapaport"){$map = "Chapaport";}
else if($map == "ile_abandonned"){$map = "Ile abandonnée ...";}
else if($map == "exploramap"){$map = "Exploramap";}
else if($map == "tresor"){$map = "Trou du cul du monde";}
else if($spliterlolilol == "bgd")
{
	$requetess1=mysql_query('SELECT username, user_id FROM '.$pref.'users WHERE map= "'.$map.'" AND online = "1" AND user_id != "'.$data_member['user_id'].'"') or die($error_sql()); 
	$joueur=mysql_fetch_assoc($requetess1);
	$map = 'En partie de Bacteria avec <a href="/annuaire/?mid='.$joueur['user_id'].'">'.$joueur['username'].'</a>';
}
else if($spliterlolilol == "bgw")
{
	$requetess1=mysql_query('SELECT username, user_id FROM '.$pref.'users WHERE map= "'.$map.'" AND online = "1" AND user_id != "'.$data_member['user_id'].'"') or die($error_sql()); 
	$joueur=mysql_fetch_assoc($requetess1);
	$map = 'En privé mariage avec <a href="/annuaire/?mid='.$joueur['user_id'].'">'.$joueur['username'].'</a>';
}
else if($spliterlolilol == "bpv")
{
	$requetess1=mysql_query('SELECT username, user_id FROM '.$pref.'users WHERE map= "'.$map.'" AND online = "1" AND user_id != "'.$data_member['user_id'].'"') or die($error_sql()); 
	$joueur=mysql_fetch_assoc($requetess1);
	$map = 'En privé foret avec <a href="/annuaire/?mid='.$joueur['user_id'].'">'.$joueur['username'].'</a>';
}
?>
         <td width="468" height="89">
		 <?php echo'<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="468" height="89" hspace="0" vspace="0" id="annuaire_member" align="middle">
           <param name="allowScriptAccess" value="always" />
           <param name="wmode" value="transparent" />
           <param name="movie" value="../swf/annuaire_member.swf" />
           <param name="menu" value="false" />
           <param name="quality" value="high" />
           <param name="FlashVars" value="&m='.$data_member['mood'].'&ad='.$data_member['avatar_design'].'&pseudo='.stripslashes($data_member['username']).'&sentence=&quot;'.stripslashes(htmlspecialchars(utf8_decode($data_member['user_sig']))).'&quot;" />
           <embed src="../swf/annuaire_member.swf" menu="false" quality="high" bgcolor="<?php echo $color; ?>" wmode="transparent" width="468" height="89" name="annuaire_member" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" flashvars="&m='.$data_member['mood'].'&ad='.$data_member['avatar_design'].'&pseudo='.stripslashes($data_member['username']).'&sentence=&quot;'.stripslashes(htmlspecialchars(utf8_decode($data_member['user_sig']))).'&quot;" pluginspage="http://www.macromedia.com/go/getflashplayer" />         
</object>'; ?></td>
       </tr><!--header--><!--content slot member-->
	   <tr>
	   <td style="padding-left:25px;">
	   <img src="/img/annuaire/top_slot1_<?php echo $data_member['user_sexe']; ?>.gif" width="417" height="14">	   </td>
	   </tr>
	   <tr>
	   <td style="padding-left:25px;">
	   <table border="0" cellpadding="0" cellspacing="0" width="417">
	   <tr>
	   <td valign="top" bgcolor="#EFF5FA">
	   <!--div style="width:295px;overflow:auto;"-->
	   <table border="0" align="left" cellpadding="0" cellspacing="0">
	   <tr>

<?php
$rwd = mysql_query('SELECT id, m_id_1, m_id_2, timestamp FROM wedding WHERE m_id_2 = "'.$data_member['user_id'].'"');
$rwd = mysql_fetch_assoc($rwd);

$rwdm = mysql_query('SELECT id, m_id_1, m_id_2, timestamp FROM wedding WHERE m_id_1 = "'.$data_member['user_id'].'"');
$rwdm = mysql_fetch_assoc($rwdm);
if($rwd > 0)
{
	date_default_timezone_set('Europe/Paris');
	$blz = mysql_query('SELECT username, user_id FROM phpbb_users WHERE user_id = "'.$rwd['m_id_1'].'"');
	$blz = mysql_fetch_assoc($blz);
	$xtime = time();
	$xsou = $xtime - $rwd['timestamp'];
	$xjx = $xsou / 86400;
	$xv = ceil($xjx);


						echo '<td style="padding-left: 5px;" width="303"> <b>Marié(e)</b> avec <a href="/annuaire/?mid='.$blz['user_id'].'">'.$blz['username'].'</a> depuis <b>'.$xv.' jour(s)</b>  <br><em>(Mariage n&deg;<a href="/mariage/?wid='.$rwd['id'].'">'.$rwd['id'].'</a>)</em>.<br>';
}
else if($rwdm > 0)
{
	date_default_timezone_set('Europe/Paris');
	$blz = mysql_query('SELECT username, user_id FROM phpbb_users WHERE user_id = "'.$rwdm['m_id_2'].'"');
	$blz = mysql_fetch_assoc($blz);
	$xtime = time();
	$xsou = $xtime - $rwdm['timestamp'];
	$xjx = $xsou / 86400;
	$xv = ceil($xjx);


						echo '<td style="padding-left: 5px;" width="303"> <b>Marié(e)</b> avec <a href="/annuaire/?mid='.$blz['user_id'].'">'.$blz['username'].'</a> depuis <b>'.$xv.' jour(s)</b>  <br><em>(Mariage n&deg;<a href="/mariage/?wid='.$rwdm['id'].'">'.$rwdm['id'].'</a>)</em>.<br>';
}
else
{
	echo '<td style="padding-left: 5px;" width="303"><a href="#">&raquo;</a> <b>Célib !</b><br>';
}
					
				?>
	  
	  
	   <br />
	   Int&eacute;r&ecirc;ts : <b><?php echo stripslashes(utf8_decode($data_member['interet1'])); ?> <?php echo stripslashes(utf8_decode($data_member['interet2'])); ?> <?php echo stripslashes(utf8_decode($data_member['interet3'])); ?> <?php echo stripslashes(utf8_decode($data_member['interet4'])); ?></b><br /><br />
	   Page perso : <a href="<?php echo utf8_decode($data_member['user_website']); ?>" target="_blank"><?php echo utf8_decode($data_member['user_website']); ?></a><br />
		<br />
		Groupes : <?php 
		$requete_group=mysql_query('SELECT u.group_id, g.group_name FROM '.$pref.'user_group u, 
		'.$pref.'groups g WHERE u.user_id="'.$mid.'" AND u.group_id = g.group_id  ');
		while($data_group=mysql_fetch_assoc($requete_group))
		{echo '<a href="/groups/?gid='.$data_group['group_id'].'">'.stripslashes($data_group['group_name']).'</a>, ';		}
		$requete_group2=mysql_query('SELECT group_id, group_name FROM '.$pref.'groups WHERE group_moderator="'.$mid.'"');
		while($data_group2=mysql_fetch_assoc($requete_group2))
		{echo '<a href="/groups/?gid='.$data_group2['group_id'].'">'.stripslashes($data_group2['group_name']).'</a>, ';		}
		
		?>
		 <br />
		 
		 <br />
		 
		  <br />
		 <table border="0" cellpadding="0" cellspacing="4">
		  <tr>
		  <td>
		  <img src="/img/sexe/icone-<?php echo $data_member['user_sexe']; ?>.gif" width="50" height="50">		  </td>
		  <td width="50" height="50" background="/img/annuaire/icone-nivo.gif" valign="bottom" align="center">
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
		   } ?>
		  
		  
		  
		  <?php 
//echo level($data_member['user_level']);
echo level($level);
 ?><br /> <?php
$sexe=$data_member['user_sexe']; 
$color='#A9CBE4';
if($sexe != 'fille') { $color='#A9CBE4'; } else { $color='#F581CC'; } 
?>
<img src="/img/spacer.gif" width="10" height="5" border="0"></td></tr></table>
		 <br />
		 V&eacute;rification du nom :
		  <b><?php echo strtolower($data_member['username']) .', '. strtoupper($data_member['username']); ?></b>
		  <br />Signe Astrologik : <b><?php echo $signe_astro ?></b>
		  <br />	</table>	  </td><!--rigth column-->
		  <td width="114" align="center" valign="top" bgcolor="#FFFFFF">
		  <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
		  <tr>
		  <td height="110" align="center" valign="top" background="/img/annuaire/decor.gif">
	<?php echo'	  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="100" height="95" hspace="0" vspace="0" align="middle"><param name="allowScriptAccess" value="always" /><param name="wmode" value="transparent" /><param name="movie" value="../img/member.swf" /><param name="quality" value="high" /><param name="menu" value="false" /><param name="bgcolor" value="#ffffff" /><param name="FlashVars" value="&m='.$data_member['mood'].'&ad='.$data_member['avatar_design'].'" /><embed src="../img/member.swf" width="100" height="95" hspace="0" vspace="0" align="middle" quality="high" bgcolor="#ffffff" allowScriptAccess="always" wmode="transparent" menu="false" FlashVars="&m='.$data_member['mood'].'&ad='.$data_member['avatar_design'].'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>		'; ?>  </td>
		  </tr>
		  <tr>
		  <td align="center" bgcolor="#FFFFFF" style="font-size:9px">
			<?php
			$co_s = mysql_query('SELECT COUNT(*) AS cs FROM co_today WHERE username = "'.$data_member['username'].'"');
			$co_s = mysql_fetch_assoc($co_s);
			$co_s = $co_s['cs'];
			if($data_member['online'] == "1")
			{
		
				echo '<img src="/img/icone-enligne.gif" alt="En ligne"><br />'.$map.''; 
	
			}
			elseif($data_member['online'] == "0" && $co_s == "1")
			{
				echo '<img src="/img/icone-enligne-site.gif" alt="En ligne">'; 
	
			}
			else
			{
			$timestamp = time();
	  $calcul = ($timestamp - $data_member['user_session_time'])/86400;    
	
				echo "dernière connection<br />le <b>"; 
				echo date('d/m/y \à H\hi',$data_member['user_lastvisit']);
            				echo '</b>';
			} 
			?>
		 </b>		  </td>
		  </tr>
		  </td>
<!--right column end-->
</tr></table></td></tr></table>
</td></tr><tr><td style="padding-left:25px;">
<img src="http://01static.chapatiz.com/fr/book/bottom_slot1_<?php echo $sexe; ?>.gif" width="417" height="14"></td>
</tr><!--end content slot member--></table></td></tr><!--content slot activity--><tr>
<td bgcolor="<?php if($sexe != 'fille') { echo '#D5E6F3'; } else { echo '#FF96DA'; } ?>" style="padding-left:25px;"><table border="0" cellpadding="0" cellspacing="0">
<br />
<?php if($classement_bacteria >= 1 || $classement_bacteria < 0)
{
?>
<tr><td colspan="2" >&nbsp;</td></tr><tr><td colspan="2" >
<img src="/img/annuaire/top_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr>

<tr>
<td bgcolor="<?php echo $color; ?>"><?php if($sexe != 'fille'){ echo '<img src="/img/games/game_bacteria_mec.gif" /></td>'; } else{ echo '<img src="/img/games/game_bacteria_fille.gif" /></td>';} ?>
</td><td valign="left"  bgcolor="<?php echo $color; ?>">
<b>Bacteria</b><br /><br />
Classement : <b><?php echo $rank_bacteria; if($rank_bacteria==1) echo'er';else echo 'ème'; ?></b><br />
<b><?php echo $data_member['partie_play']; ?></b> parties, <b><?php echo $data_member['partie_won'];?></b> gagnées, <b><?php echo $data_member['partie_lost']; ?></b> perdues <br />
<b><?php echo $data_member['classement_bacteria']; ?></b> points, niveau <b><?php echo $data_member['bac_level'];?></b>
</td>

</tr><tr><td colspan="2" ><img src="/img/annuaire/bottom_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr><tr>
</tr>

<?php
}
?>
<?php if($data_member['patojdur'] >= 1 || $data_member['classement_patojdur_h'] >= 1)
{
?>
<tr><td colspan="2" >&nbsp;</td></tr><tr><td colspan="2" >
<img src="/img/annuaire/top_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr>																	
<tr>
<td bgcolor="<?php echo $color; ?>"><?php if($sexe != 'fille'){ echo '<img src="/img/games/game_patojdur_mec.gif" /></td>'; } else{ echo '<img src="/img/games/game_patojdur_fille.gif" /></td>';} ?>
</td><td valign="left"  bgcolor="<?php echo $color; ?>">
<b>Patojdur</b><br /><br />
<?php if($data_member['patojdur'] >= 1) 
{ 
$scorep = substr($patojdur, 0, 2);
$scorep.= "'";
$scorep.= substr($patojdur, 2, 5);

	echo 'Aujourd\'hui, ';
	if($data_member['rank_patojdur'] >= 1 && $data_member['rank_patojdur'] < 20)
	{
		echo '<b>'.$data_member['rank_patojdur']; if($data_member['rank_patojdur'] == 1){ echo 'er'; } else { echo 'ème';} echo '</b> avec <b>'.$scorep.'</b>';
	}
	else
	{
		echo '<b>Non classé</b> avec <b>'.$scorep.'</b>';
	}
	echo '<br />';
}
if($data_member['classement_patojdur_h'] >= 1)
{
	echo 'Classement général, ';
	if($data_member['rank_patojdur_a'] >= 1 && $data_member['rank_patojdur_a'] < 20)
	{
		echo '<b>'.$data_member['rank_patojdur_a']; if($data_member['rank_patojdur_a'] == 1){ echo 'er'; } else { echo 'ème';} echo '</b> avec <b>'.$data_member['classement_patojdur_h'].'</b> points';
	}
	else
	{
		echo '<b>Non classé</b> avec <b>'.$data_member['classement_patojdur_h'].'</b> points';;
	}
	echo '<br />';
}

?>
</td>

</tr><tr><td colspan="2" ><img src="/img/annuaire/bottom_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr>

<?php
}
if($data_member['classement_popu_a'] != 0 || $data_member['classement_popu_h'] != 0 || $data_member['classement_popu_g'] != 0)
{
?>
<tr><td colspan="2" >&nbsp;</td></tr><tr><td colspan="2" >
<img src="/img/annuaire/top_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr>

<tr>
<td bgcolor="<?php echo $color; ?>"><?php if($sexe != 'fille'){ echo '<img src="/img/games/game_popu_mec.gif" /></td>'; } else{ echo '<img src="/img/games/game_popu_fille.gif" /></td>';} ?>
</td><td valign="left"  bgcolor="<?php echo $color; ?>">
<b>Popularité</b><br /><br />
<?php
if($data_member['classement_popu_a'] >= 1)
{
	echo 'Aujourd\'hui, ';
	echo '<b>'.$data_member['rank_popu_a']; if($data_member['rank_popu_a'] == 1){ echo 'er'; } else { echo 'ème';} echo '</b> avec <b>'.$data_member['classement_popu_a'].'</b> points<br />';	
}
if($data_member['classement_popu_h'] >= 1)
{
	echo 'Hier, ';
	if($data_member['rank_popu_h'] == 21)
	{
		echo '<b>Dernier</b> avec <b>'.$data_member['classement_popu_h'].'</b> points<br />';
	}
	else
	{
		echo '<b>'.$data_member['rank_popu_h']; if($data_member['rank_popu_h'] == 1){ echo 'er'; } else { echo 'ème';} echo '</b> avec <b>'.$data_member['classement_popu_h'].'</b> points<br />';	
	}
	
}
if($data_member['classement_popu_g'] >= 1)
{
	echo 'Classement général, ';
	echo '<b>'.$data_member['rank_popu_g']; if($data_member['rank_popu_g'] == 1){ echo 'er'; } else { echo 'ème';} echo '</b> avec <b>'.$data_member['classement_popu_g'].'</b> points<br />';	
}
?>
</td>

</tr><tr><td colspan="2" ><img src="/img/annuaire/bottom_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr><tr>
</tr>

<?php
}

if($data_member['mazo'] >= 1 || $data_member['classement_lapino'] >= 1 || $data_member['classement_speedmaze'] >= 1 || $data_member['classement_capture'] >= 1)
{
?>
<tr><td colspan="2" >&nbsp;</td></tr><tr><td colspan="2" >
<img src="/img/annuaire/top_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr>

<tr>
<td bgcolor="<?php echo $color; ?>"><?php if($sexe != 'fille'){ echo '<img src="/img/games/game_testo_mec.gif" /></td>'; } else{ echo '<img src="/img/games/game_testo_fille.gif" /></td>';} ?>
</td><td valign="left"  bgcolor="<?php echo $color; ?>">
<b>Jeux Divers</b><br /><br />
<?php 
if($data_member['mazo'] >= 1)
{
	echo 'MaZo, ';
	if($data_member['rank_mazo'] == 1)
	{
		echo '<b>1er</b>';
	}
	elseif($data_member['rank_mazo'] >= 2 && $data_member['rank_mazo'] < 20)
	{
		echo '<b>'.$data_member['rank_mazo'].'ème</b>';
	}
	else
	{
		echo '<b>Non classé</b>';
	}
	echo ' avec <b>'.$data_member['mazo'].'</b> points <br />';
}
if($data_member['classement_lapino'] >= 1)
{
	echo 'Lapino\'s Race, ';
	if($data_member['rank_lapino'] == 1)
	{
		echo '<b>1er</b>';
	}
	elseif($data_member['rank_lapino'] >= 2 && $data_member['rank_lapino'] < 20)
	{
		echo '<b>'.$data_member['rank_lapino'].'ème</b>';
	}
	else
	{
		echo '<b>Non classé</b>';
	}
	echo ' avec <b>'.$data_member['classement_lapino'].'</b> points <br />';
}	
if($data_member['classement_speedmaze'] >= 1)
{
	echo 'SpeedMaze, ';
	if($data_member['rank_speedmaze'] == 1)
	{
		echo '<b>1er</b>';
	}
	elseif($data_member['rank_speedmaze'] >= 2 && $data_member['rank_speedmaze'] < 20)
	{
		echo '<b>'.$data_member['rank_speedmaze'].'ème</b>';
	}
	else
	{
		echo '<b>Non classé</b>';
	}
	echo ' avec <b>'.$data_member['classement_speedmaze'].'</b> points <br />';
}
if($data_member['classement_capture'] >= 1)
{
	echo 'Capture The Flag, ';
	if($data_member['rank_capture'] == 1)
	{
		echo '<b>1er</b>';
	}
	elseif($data_member['rank_capture'] >= 2 && $data_member['rank_capture'] < 20)
	{
		echo '<b>'.$data_member['rank_capture'].'ème</b>';
	}
	else
	{
		echo '<b>Non classé</b>';
	}
	echo ' avec <b>'.$data_member['classement_capture'].'</b> points <br />';
}
?>
	</td>

</tr><tr><td colspan="2" ><img src="/img/annuaire/bottom_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr><tr>
</tr>

<?php
}
?>
<tr>
<td colspan="2" >&nbsp;</td></tr>

<tr><td colspan="2" >&nbsp;</td></tr><tr><td colspan="2" >
<img src="/img/annuaire/top_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr>

<tr>
<?php
function jour($n, $a)
{
	$sou = $n - $a;
	$jx = $sou /86400;
	$j = ceil($jx);
	return $j;
}
$time = time();
$Atime = $date_inscription;
?>
<td colspan="2" bgcolor="<?php echo $color; ?>">&nbsp; Membre n&deg; <b> <?php echo $mid; ?> </b> <br />
&nbsp; Dans la communaut&eacute; depuis le <b> <?php echo date('d/m/Y à H\hi', $Atime);?> (<?php echo jour($time, $Atime);?>&nbsp;jours) </b> <br /><br /></td>
</tr><tr><td colspan="2" ><img src="/img/annuaire/bottom_slot2_<?php echo $sexe; ?>.gif" width="417" height="9"></td></tr><tr>
<td colspan="2" >&nbsp;</td></tr><tr>
<td colspan="2" ><?php if($ban == "1")	{ echo '<b><FONT COLOR="#FF0000">CE MEMBRE EST BANNI</FONT></b><br />'; } ?>
>
Messages sur le forum: <a href="../bbs/search.php?search_author=<?php echo $data_member['username']; ?>&showresults=topics">
<b> <?php echo $data_member['user_posts']; ?> </b></a></td></tr></table></td>
</tr><!--end content slot activity--><!--footer slot content--><tr><td>
<table border="0" cellpadding="0" cellspacing="0"><tr><!--footer slot--><td width="12" height="12">
<img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_<?php if($sexe != "fille"){ echo'klr'; }else{ echo'roz';} ?>.gif" width="12" height="12"></td>
<td height="12" width="444"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_<?php if($sexe != "fille"){ echo'klr'; }else{ echo'roz';} ?>.gif" width="444" height="12">
</td><td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_<?php if($sexe != "fille"){ echo'klr'; }else{ echo'roz';} ?>.gif" width="12" height="12">
</td></tr></table></td></tr></table><br class='clean'/>	<img src="/img/spacer.gif" width="11" height="10"><!--end main content-->
</td>	

<?php
 }


}
?>
