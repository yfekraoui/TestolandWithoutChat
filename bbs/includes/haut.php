<?php


ob_start();
date_default_timezone_set("Europe/Paris");

$p_cookie='phpbb2mysql_';
$pref='phpbb_';


function getIp()   //Permet d'avoir l'ip d'un membre (meme si proxy)
{
    if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $ip = $_SERVER['REMOTE_ADDR'];
                
    return $ip;
}



$ip = getIp();
$URL =  $_SERVER['REQUEST_URI'];
$URL = mysql_real_escape_string(htmlspecialchars($URL));
$YAY = mysql_query('SELECT COUNT(*) AS ne FROM co_today WHERE ip = "'.$ip.'"');
$YAY = mysql_fetch_assoc($YAY);
$YAY = $YAY['ne'];
$yatime = time();
if($YAY == 0)
{
	if(!isset($userdata['session_logged_in']))
	{
		mysql_query('INSERT INTO co_today (ip, timestamp, username, url) VALUES ("'.$ip.'", "'.$yatime.'", "Visiteur", "'.$URL.'")'); 
	}
	else if($userdata['username'] == "Anonymous")
	{
		mysql_query('INSERT INTO co_today (ip, timestamp, username, url) VALUES ("'.$ip.'", "'.$yatime.'", "Visiteur", "'.$URL.'")');
	}
	else 
	{
		mysql_query('INSERT INTO co_today (ip, timestamp, username, url) VALUES ("'.$ip.'", "'.$yatime.'", "'.$userdata['username'].'", "'.$URL.'")'); 
	}
}
else
{
	if(!isset($userdata['session_logged_in']))
	{
		mysql_query('UPDATE co_today SET timestamp = "'.$yatime.'", username = "Visiteur", url = "'.$URL.'" WHERE ip = "'.$ip.'"');
	}
	else if($userdata['username'] == "Anonymous")
	{
		mysql_query('UPDATE co_today SET timestamp = "'.$yatime.'", username = "Visiteur", url = "'.$URL.'" WHERE ip = "'.$ip.'"');
	}
	else 
	{
		mysql_query('UPDATE co_today SET timestamp = "'.$yatime.'", username = "'.$userdata['username'].'", url = "'.$URL.'" WHERE ip = "'.$ip.'"'); 
	}
}
$t5 = time() - (60 * 5); 
mysql_query('DELETE FROM co_today WHERE timestamp < ' . $t5);

$PD = mysql_query('SELECT COUNT(*) AS neS FROM co_24h WHERE ip = "'.$ip.'"');
$PD = mysql_fetch_assoc($PD);
$PD = $PD['neS'];
$PDtime = time();
if($PD == 0)
{
	if(!isset($userdata['session_logged_in']))
	{
		mysql_query('INSERT INTO co_24h (ip, timestamp) VALUES ("'.$ip.'", "'.$PDtime.'")'); 
	}
	else if ($userdata['username'] == "Anonymous")
	{
		mysql_query('INSERT INTO co_24h (ip, timestamp) VALUES ("'.$ip.'", "'.$PDtime.'")'); 
	}
	else 
	{
		mysql_query('INSERT INTO co_24h (ip, timestamp) VALUES ("'.$ip.'", "'.$PDtime.'")'); 
	}
}
else
{
	if(!isset($userdata['session_logged_in']))
	{
		mysql_query('UPDATE co_24h SET timestamp = "'.$PDtime.'" WHERE ip = "'.$ip.'"');
	}
	else if($userdata['username'] == "Anonymous")
	{
		mysql_query('UPDATE co_24h SET timestamp = "'.$PDtime.'" WHERE ip = "'.$ip.'"');
	}
	else 
	{
		mysql_query('UPDATE co_24h SET timestamp = "'.$PDtime.'" WHERE ip = "'.$ip.'"'); 
	}
}
$t24 = time() - (60 * 60 * 24); 
mysql_query('DELETE FROM co_24h WHERE timestamp < ' . $t24);



$ip = getIp();





$date = date('w');
$mois = date('N');
$rek = mysql_query('SELECT * FROM reboot_game');
$rek = mysql_fetch_assoc($rek);
$reboot = $rek['reboot'];
$dateddb = $rek['date'];
$semaineddb = $rek['semaine'];
$moisddb = $rek['mois'];
if($date == "0" && $dateddb == "6")
{
	mysql_query('UPDATE reboot_game SET reboot = "1"');
	$reboot = "1";

}
else if($date == "1" && $dateddb == "0")
{
	mysql_query('UPDATE reboot_game SET reboot = "1"');
	$reboot = "1";
}
else if($date > $dateddb)
{
	mysql_query('UPDATE reboot_game SET reboot = "1"');
	$reboot = "1";

}
if($mois > $moisddb)
{
	$moisddb++;
	mysql_query('UPDATE reboot_game SET mois = "'.$moisddb.'"');
	mysql_query('DELETE FROM phpbb_users WHERE user_lastvisit = "0"');

}
if($reboot == "1")
{
		$sql = 'SELECT rank_patojdur, classement_patojdur_h, classement_popu_a, classement_popu_g, money, user_id, patojdur FROM phpbb_users';
		$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
		while($db = mysql_fetch_assoc($req))		
		{
			if($db['rank_patojdur'] == "1" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 100;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "2" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 90;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "3" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 80;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "4" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 70;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "5" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 60;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "6" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 50;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "7" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 40;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "8" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 30;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "9" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 20;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			else if($db['rank_patojdur'] == "10" && $db['patojdur'] > 1 )
			{
				$score_patoj_general = $db['classement_patojdur_h'] + 10;
				$ket1 = mysql_query('UPDATE phpbb_users SET classement_patojdur_h = "'.$score_patoj_general.'" WHERE user_id = "'.$db['user_id'].'"');
			}
			$ket10 = mysql_query('UPDATE phpbb_users SET rank_popu_h = "0"');
			$ket3 = mysql_query('UPDATE phpbb_users SET classement_popu_h = "'.$db['classement_popu_a'].'" WHERE user_id = "'.$db['user_id'].'"');
			$score_general = $db['classement_popu_g'] + $db['classement_popu_a'];
			$ket4 = mysql_query('UPDATE phpbb_users SET classement_popu_g = "'.$score_general.'" WHERE user_id = "'.$db['user_id'].'"');
			$ket5 = mysql_query('UPDATE phpbb_users SET classement_popu_a = "0" WHERE user_id = "'.$db['user_id'].'"');
			$ket6 = mysql_query('DELETE FROM vote_use');
			$ket7 = mysql_query('UPDATE reboot_game SET reboot = "0"');
			$ket8 = mysql_query('UPDATE reboot_game SET date = "'.$date.'"');
			$ppt = $db['money'] + 2;
			$ket9 = mysql_query('UPDATE phpbb_users SET money = "'.$ppt.'" WHERE user_id = "'.$db['user_id'].'"');
		}
		$ket21 = mysql_query('UPDATE phpbb_users SET patojdur = "0"');
		

}

$nbres = mysql_query("SELECT COUNT(*) AS exist FROM ip_acces WHERE ip = '$ip'");
$aok = mysql_fetch_array($nbres);
if($aok['exist'] != 0)
{
	if(isset($userdata['session_logged_in']))
	{
		mysql_query('UPDATE phpbb_users SET ban = "1" WHERE user_id = "'.$userdata['user_id'].'"');
	}
	mysql_close($connexion_sql);
	header('Location: http://www.testoland.org/banip.swf');
}

?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11719312-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="/img/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Testoland est une communauté gratuite en ligne où tu vas pouvoir tchater, rencontrer du monde et te faire plein d'amis. C'est un fan site de Chapatiz.com"/>
<meta name="keywords" content="chat,discussion,forum,tchat,chapatiz,jeu,jeux,jeu en ligne,multijoueur,flash,RPG,MMORPG,communauté,ados,enfants,jeunes,communautaire,manga,kawai,bacteria,patojdur,chapaking,chimboz,bloby,mabrouk,bablu,créateurs,testoland" />
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>" />
<title>Testoland : <?php echo $title; ?></title>
    <script language="JavaScript" type="text/JavaScript"> 
    <!--
    function ow(u,n,f){window.open(u,n,f);}
    function owx(){window.open('/tchat/log/','chat','status=yes,resizable=no,width=920,height=665');}
    function help(myurl){window.open('/cms/'+myurl,'help','status=yes,resizable=no,width=1200,height=500,scrollbars=yes');}
    //-->
    </script> 
</head>