<?php
include_once("Sql.php");
class Wedding{ 
	function Wedding() { 
		$this->methodTable = array(
			"getBacteriaPlayerLevel" => array(
				"description" => "No description given.",
				"arguments" => array('mid'),
				"access" => "remote"
			)
		);
		$this->db = new Sql();
	}
	function getWedding($id){ 
	$idz = (int)$id;
	$sql = "SELECT partenaire_id, date_wedding FROM phpbb_users WHERE user_id = $idz";
   	$result = $this->db->query($sql);
	while($data = mysql_fetch_assoc($result))
	{
		$partenaire_id = $data['partenaire_id'];
		$date_wedding = $data['date_wedding'];
	}
	if($partenaire_id  != 0 && $date_wedding != 0)
	{
		$sql2 = "SELECT * FROM wedding WHERE m_id_1 = $id OR m_id_2 = $idz";
		$result2 = $this->db->query($sql2);
		while($data2 = mysql_fetch_assoc($result2))
		{
			$time = time();
			$twx = $data2['timestamp'];
			$tw = $time - $twx;
			$nj = ceil($tw / 86400);
			$t_id_1 = $data2['t_id_1'];
			$t_id_2 = $data2['t_id_2'];
		}
		$sql3 = "SELECT username, avatar_design FROM phpbb_users WHERE user_id = $partenaire_id";
		$result3 = $this->db->query($sql3);
		while($data3 = mysql_fetch_assoc($result3))
		{
			$p_ad = $data3['avatar_design'];
			$p_name = $data3['username'];
		}
		$sql4 = "SELECT avatar_design FROM phpbb_users WHERE user_id = $t_id_1";
		$result4 = $this->db->query($sql4);
		while($data4 = mysql_fetch_assoc($result4))
		{
			$t1_ad = $data4['avatar_design'];
		}
		$sql5 = "SELECT avatar_design FROM phpbb_users WHERE user_id = $t_id_2";
		$result5 = $this->db->query($sql5);
		while($data5 = mysql_fetch_assoc($result5))
		{
			$t2_ad = $data5['avatar_design'];
		}
		return array("wedding" => array("can_divorce" => true,	       
				 "with_avatar_design" => "$p_ad",
				 "ad2" => "$t1_ad",
				 "ad3" => "$t2_ad",
				 "witz" => "$p_name",
				 "since_days" => "$nj",
				 "more" => array(
				 "p1name" => "La non plus",
				 "p2name" => "Ici non plus",
				 "p3name" => "On utilise pas")
				 ));
	}
	else
	{
		return array();
	}
	

} 
	function divorce($id,$kyid,$rk,$vk){
			$idz = (int)$id;
	
			$sql7 = 'SELECT partenaire_id, date_wedding, online, map FROM phpbb_users WHERE user_id = "'.$idz.'"';
			$result7 = $this->db->query($sql7);
			while($data7 = mysql_fetch_assoc($result7))
			{
				$partenaire_id7 = $data7['partenaire_id'];
				$date_wedding7 = $data7['date_wedding'];
				$online = $data7['online'];
				$map = $data7['map'];
			}
			if($partenaire_id7  != 0 && $date_wedding7 != 0 && $online == 1 && $map == "underground.divorce")
			{
				$sql8 = 'UPDATE phpbb_users SET partenaire_id = "0" WHERE user_id = "'.$idz.'"';
				$sql11 = 'UPDATE phpbb_users SET date_wedding = "0" WHERE user_id = "'.$idz.'"';
				$sql9 = 'UPDATE phpbb_users SET partenaire_id = "0" WHERE user_id = "'.$partenaire_id7.'"';
				$sql12 = 'UPDATE phpbb_users SET date_wedding = "0" WHERE user_id = "'.$partenaire_id7.'"';
				$sql10 = 'DELETE FROM wedding WHERE m_id_1 = "'.$id.'" OR m_id_2 = "'.$idz.'"';
				$result8 = $this->db->query($sql8);
				$result9 = $this->db->query($sql9);
				$result10 = $this->db->query($sql10);
				$result11 = $this->db->query($sql11);
				$result12 = $this->db->query($sql12);
			}
		
	}
} 
?>
