<?php ob_start();
if(empty($title)) $title="Bienvenue sur le site"; 

$reqLastCount=mysql_query('SELECT COUNT(*) AS nbr_entrees FROM '.TABLE_USERS.' WHERE user_id > 0');
$dataCountL=mysql_fetch_assoc($reqLastCount);
$memberLast = $dataCountL['nbr_entrees'];
		$time_moins_cinq = time() - 300;
		$time_moins_24heure = time() - 86400;

		$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connecteds WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
		$donnees = mysql_fetch_assoc($retour);

		if ($donnees['nbre_entrees'] == 0) // L'ip ne se trouve pas dans la table, on va l'ajouter
		{
		    mysql_query('INSERT INTO connecteds VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
		}
		else // L'ip se trouve déjà dans la table, on met juste à jour le timestamp
		{
		    mysql_query('UPDATE connecteds SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
		}

		mysql_query('DELETE FROM connecteds WHERE timestamp < ' . $time_moins_24heure);

		$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM connecteds WHERE timestamp>\'' . $time_moins_cinq . '\'');
		$donnees = mysql_fetch_array($retour);
		$connected_header = $donnees['nbre_entrees'];

if(empty($css))
$css='./templates/sartay.css';
		
		
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
<title><?php echo $config_php['php_name'].' :: '.$title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>" />
</head>


   <body>
     <div class="global">
     <div class="background"><div class="header"></div>
     <div class="centre">
	 
	 
     <div class="corps">
	 <div class="menu">
	 <div class="haut_menu"></div>
	 <div class="contenu_menu">
	 <div class="texte_menu">
	 <a href="/">Accueil</a><br />
	 <a href="/forum/login.php">Connexion</a><br />
	 <a href="/forum/profile.php?mode=register">Inscription</a><br /><br />
	 <a href="/forum/">Le forum</a><br /><br />
	 <a href="/contact/">Contact</a>
	<?php echo' <br />'.$memberLast.' membres.<br /><strong>'.$connected_header.'</strong> connecté(s).'; ?>
	 </div>
	 </div>
	 <div class="bas_menu"></div>
	 </div><br />
	<!--[if lte IE 6]>
	<div class="centrer">Ce site est compatible avec Internet Explorer seulement qu'à partir de sa version 7 ! Veuillez faire une mise à jour ou changer de navigateur pour en profiter pleinement.</div>
	<![endif]-->
	 
