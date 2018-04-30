<?php
include_once("Sql.php");
class Patojdur{ 
	function Patojdur() { 
		$this->methodTable = array(
			"getBacteriaPlayerLevel" => array(
				"description" => "No description given.",
				"arguments" => array('mid'),
				"access" => "remote"
			)
		);
	}
	public function saveGame($member_id, $runtime){ 
	$member_idz = (int)$member_id;
	$runtimez = (int)$runtime;
		$this->db = new Sql();
		$sql = "SELECT patojdur FROM phpbb_users WHERE user_id = $member_idz";
		$result = $this->db->query($sql);
		while($data = mysql_fetch_assoc($result))
		{
			$patoj = $data['patojdur'];
		}
		if($patoj == "0")
		{
			$sql = "UPDATE phpbb_users SET patojdur = $runtimez WHERE user_id = $member_idz";
   			$result = $this->db->query($sql);
		}
		else if($runtimez > $patoj)
		{
			$sql = "UPDATE phpbb_users SET patojdur = $patoj WHERE user_id = $member_idz";
   			$result = $this->db->query($sql);
		}
		else if($runtimez < $patoj)
		{
			$sql = "UPDATE phpbb_users SET patojdur = $runtimez WHERE user_id = $member_idz";
   			$result = $this->db->query($sql);
		}
		$o = 0;
		$sql = 'UPDATE phpbb_users SET rank_patojdur = "0"';
		$sql = 'SELECT user_id, patojdur, username FROM phpbb_users WHERE patojdur > 1 ORDER BY patojdur'; 
		$req = $this->db->query($sql);
		while($data = mysql_fetch_assoc($req))
		{ 		
			$o++;	
			$quetezzz = 'UPDATE phpbb_users SET rank_patojdur = "'.$o.'" WHERE username = "'.$data['username'].'"';
			$result = $this->db->query($quetezzz);
		}
		$sql = "SELECT rank_patojdur FROM phpbb_users WHERE user_id = $member_idz";
		$result = $this->db->query($sql);
		while($data = mysql_fetch_assoc($result))
		{
			$rank = $data['rank_patojdur'];
		}
		if($rank == "1")
		{
			return  array(
				'currentRank' => "1",
				'isBest' => "1",
				'wasFirst' => "1");
		}
		else
		{
			return  array(
				'currentRank' => "$rank");
		}

		


	} 
} 
?>
