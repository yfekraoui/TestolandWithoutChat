<?php
include_once("Sql.php");
class Bacteria{ 
	function Bacteria() { 
		$this->methodTable = array(
			"getBacteriaPlayerLevel" => array(
				"description" => "No description given.",
				"arguments" => array('mid'),
				"access" => "remote"
			)
		);
	}

	public function getBacteriaPlayerLevel($i){ 
		return array(
			'BacteriaPlayerLevel'=>1,
			'ROOMTITLE_BACTERIA_VS'=>'A VS ' . $i);
	}
	public function getBacteriaPlayerInfo($id){ 
		return  array(
			'rank' => "1",
			'score' => "1",
			'level' => "1",
			'played' => "1",
			'won' => "1",
			'lost' => "1",
			'draw' => "1");


	}
	public function saveGameAndLoadNulle($id, $pseudo){ 
		$idz = mysql_real_escape_string(htmlspecialchars($id));
		$pseudoz = mysql_real_escape_string(htmlspecialchars($pseudo));
		$this->db = new Sql();
		$sql = "SELECT partie_play, partie_nul, adversaire_bac, username FROM phpbb_users WHERE user_id = $idz";
   		$result = $this->db->query($sql);
		while($data = mysql_fetch_assoc($result))
		{
			$partie_play = $data['partie_play'];
			$partie_nul = $data['partie_nul'];
			$adversaire = $data['adversaire_bac'];
			$me = $data['username'];
		}
		if($pseudoz != $adversaire)
		{
			$sql = "UPDATE phpbb_users SET adversaire_bac = $pseudoz WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$partie_nul++;
			$partie_play++;
			$sql = "UPDATE phpbb_users SET partie_nul = $partie_nul WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$sql = "UPDATE phpbb_users SET partie_play = $partie_play WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			UnLogestunLogNULLE($me, $pseudoz);
		}
	}
	public function saveGameAndLoadLost($score, $id, $pseudo){ 
		$idz = mysql_real_escape_string(htmlspecialchars($id));
		$pseudoz = mysql_real_escape_string(htmlspecialchars($pseudo));
		$scorez = mysql_real_escape_string(htmlspecialchars($score));
		$this->db = new Sql();
		$sql = "SELECT partie_play, partie_lost, classement_bacteria, adversaire_bac, username FROM phpbb_users WHERE user_id = $idz";
   		$result = $this->db->query($sql);
		while($data = mysql_fetch_assoc($result))
		{
			$classement = $data['classement_bacteria'];
			$partie_play = $data['partie_play'];
			$partie_lost = $data['partie_lost'];
			$adversaire = $data['adversaire_bac'];
			$me = $data['username'];
		}
		if($pseudoz != $adversaire)
		{

			$sql = "UPDATE phpbb_users SET adversaire_bac = $pseudo WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$partie_lost++;
			$partie_play++;
			$score = 40 - $scorez;
			$classement = $classement - $scorez;
			$sql = "UPDATE phpbb_users SET partie_lost = $partie_lost WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$sql = "UPDATE phpbb_users SET partie_play = $partie_play WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$sql = "UPDATE phpbb_users SET classement_bacteria = $classement WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			UnLogestunLogLOST($me, $pseudoz, $scorez);
		}
	}
	public function saveGameAndLoadWin($score, $id, $pseudo){ 
		$idz = mysql_real_escape_string(htmlspecialchars($id));
		$pseudoz = mysql_real_escape_string(htmlspecialchars($pseudo));
		$scorez = mysql_real_escape_string(htmlspecialchars($score));
		$this->db = new Sql();
		$sql = "SELECT partie_play, partie_won, classement_bacteria, adversaire_bac, username FROM phpbb_users WHERE user_id = $idz";
   		$result = $this->db->query($sql);
		while($data = mysql_fetch_assoc($result))
		{
			$classement = $data['classement_bacteria'];
			$partie_play = $data['partie_play'];
			$partie_won = $data['partie_won'];
			$adversaire = $data['adversaire_bac'];
			$me = $data['username'];
		}
		if($pseudo != $adversaire)
		{
			$sql = "UPDATE phpbb_users SET adversaire_bac = $pseudoz WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$partie_won++;
			$partie_play++;
			$classement = $classement + $scorez;
			$sql = "UPDATE phpbb_users SET partie_won = $partie_won WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$sql = "UPDATE phpbb_users SET partie_play = $partie_play WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			$sql = "UPDATE phpbb_users SET classement_bacteria = $classement WHERE user_id = $idz";
   			$result = $this->db->query($sql);
			UnLogestunLogWIN($me, $pseudoz, $scorez);
		}
	}
	function UnLogestunLogWIN($me, $pseudo, $score){
	$mez = mysql_real_escape_string(htmlspecialchars($me));
	$pseudoz = mysql_real_escape_string(htmlspecialchars($pseudo));
	$scorez = mysql_real_escape_string(htmlspecialchars($score));
	$timestampe = time();
	$heuree = strftime("%H:%M","$timestampe" );
	$phraase = "( ".$heuree." ) ".$mez." a gagné contre ".$pseudoz." ( +".$scorez." )\n";
	$fp = fopen("bacteria.txt", "a+");
		if(fwrite($fp, $phraase)){
        		fclose($fp);
			return  array('rank' => "0");
		}
	}
	function UnLogestunLogLOST($me, $pseudo, $score){
	$timestampe = time();
	$heuree = strftime("%H:%M","$timestampe" );
	$phraase = "( ".$heuree." ) ".$mez." a perdu contre ".$pseudoz." ( -".$scorez." )\n";
	$fp = fopen("bacteria.txt", "a+");
		if(fwrite($fp, $phraase)){
        		fclose($fp);
			return  array('rank' => "0");
		}
	}
	function UnLogestunLogNULLE($me, $pseudo, $score){
	$timestampe = time();
	$heuree = strftime("%H:%M","$timestampe" );
	$phraase = "( ".$heuree." ) ".$mez." a fait match nul contre ".$pseudoz."\n";
	$fp = fopen("bacteria.txt", "a+");
		if(fwrite($fp, $phraase)){
        		fclose($fp);
			return  array('rank' => "0");
		}
	}
} 
?>
