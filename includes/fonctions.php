<?php
#################################
# FONCTION - 		
#################################

#Connexion BDD
function connexion_bdd($sql_host, $sql_user, $sql_password, $sql_db) {
	try
	{
		$db = new PDO('mysql:host='.$sql_host.';dbname='.$sql_db.'', '54', $sql_password);
	}
	catch (Exception $e)
	{
		erreur('SQL_c', $e->getMessage());
	}
}
#Erreur (redirection + enregistrement de l'erreur)
function erreur($type, $erreur) {
	$date = date('d-m-Y');
	if($type == 'SQL_c') {
		header('Location: ./erreur.php?type=SQL_c');
		if(!empty($erreur)) {
			$fichier_erreur = fopen('./admin/erreur/'.$date.'.txt', 'a+');
			fwrite($fichier_erreur, '
			---------------------------------------------------------------------------------------------- 
			 ['.date('H:i:s').']ERREUR -> CONNEXION SQL : '.$erreur.' 
			----------------------------------------------------------------------------------------------
			');
			fclose($fichier_erreur);
		}
	}
	else {
		header('Location: ./erreur.php?type=inconnu');
	}
}
# Mode de cryptage 
function czbx($chaine) {
	$nc = strlen($chaine);
	$nc = sha1($nc);
	$chaine = md5(sha1(sha1($chaine)));
	$chaine .= $nc.'czbx';
	$chaine = sha1(md5(sha1(sha1($chaine))));
	return $chaine;
}
# Renvois une chaine de character au hazard en fonction du nombre demandé
function chrand($nbc) {
	$string = "";
	$chaine = "abcdefghijklmnpqrstuvwxy0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	for($i=0; $i<$nbc; $i++) {
		$string .= $chaine[rand()%strlen($chaine)];
	}
	return $string;
}
?>