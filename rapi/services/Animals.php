<?php
include_once("Sql.php");
class Animals{ 
	function Animals() { 
		$this->methodTable = array(
			"getBacteriaPlayerLevel" => array(
				"description" => "No description given.",
				"arguments" => array('mid'),
				"access" => "remote"
			)
		);
	}
	public function GoOutWith($id){ 
		$idz = mysql_real_escape_string(htmlspecialchars($id));
		$this->db = new Sql();
		$sql = "SELECT animal FROM phpbb_users WHERE user_id = $idz";
   		$result = $this->db->query($sql);
		while($data = mysql_fetch_assoc($result))
		{
			$animal = $data['animal'];
			$eza = explode(",", $animal);
			$eza1 = explode(";", $eza[1]);
			$name = $eza1[0];



			$zazaz = explode(",", $animal);
			if($zazaz[0] == "0P0")
			{
				$animal = "hamster";
			}
			if($zazaz[0] == "0P1")
			{
				$animal = "hamster noir";
			}
			if($zazaz[0] == "0P2")
			{
				$animal = "korbak";
			}
			if($zazaz[0] == "0P6")
			{
				$animal = "hamster albinos";
			}
			if($zazaz[0] == "0P7")
			{
				$animal = "lapin";
			}
			if($zazaz[0] == "0P8")
			{
				$animal = "bloby";
			}
			if($zazaz[0] == "0P9")
			{
				$animal = "dinosaure";
			}
			if($zazaz[0] == "0P10")
			{
				$animal = "chien";
			}
			if($zazaz[0] == "0P11")
			{
				$animal = "perroquet";
			}
			if($zazaz[0] == "0P12")
			{
				$animal = "tigre";
			}
			if($zazaz[0] == "1P1")
			{
				$animal = "panda";
			}
			if($zazaz[0] == "1P2")
			{
				$animal = "ecureuil";
			}
		}
		return  array(
			'animal' => "$animal",
			'animal_name' => "$name");
	}
	public function Sortir($id){ 
		$idz = mysql_real_escape_string(htmlspecialchars($id));
		$this->db = new Sql();
		$sql = "SELECT sortir_avec FROM phpbb_users WHERE user_id = $idz";
   		$result = $this->db->query($sql);
		while($data = mysql_fetch_assoc($result))
		{
			$sortir = $data['sortir_avec'];
			if($sortir == "0")
			{
				$sql = "UPDATE phpbb_users SET sortir_avec = '1' WHERE user_id = $idz";
			}
			else if($sortir == "1")
			{
				$sql = "UPDATE phpbb_users SET sortir_avec = '0' WHERE user_id = $idz";
			}
		}
	}
} 
?>
