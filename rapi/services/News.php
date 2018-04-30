<?php
date_default_timezone_set('Europe/Paris');
include_once("Sql.php");

class News{ 
	function News() { 
		$this->methodTable = array(
			"get" => array(
				"description" => "No description given.",
				"arguments" => array('i'),
				"access" => "remote"
			)
		);
		$this->db = new Sql();
	}
	/**
	 * @desc Retrieves the news from the database
	 * @access remote
	 */

	public function get($i){ 
		if($i == "0")
		{
			$timestamp = time();
			$heure = strftime("%H:%M","$timestamp" );
			$date = gmdate("d.m.y" );
			return  array('summary' => "Bienvenue sur <b>Testoland</b> !<br />Nous sommes le <b>$date</b> et il est <b>$heure</b><br /><br />Les Créateurs et les Officiels vous <br />souhaitent de <b>bonnes vacances .</b>");
		}
		elseif($i==1)
		{
		}
		else if($i==2)
		{
			$sql = "SELECT username, avatar_design, classement_bacteria FROM phpbb_users WHERE rank_bacteria = '1'";
   			$result = $this->db->query($sql);
			while($data = mysql_fetch_assoc($result))
			{
					$pseudol = $data['username'];
					$adl = $data['avatar_design'];
					$classementl = $data['classement_bacteria'];
			}
			$sql2 = "SELECT username, avatar_design, classement_bacteria FROM phpbb_users WHERE rank_bacteria = '2'";
   			$result2 = $this->db->query($sql2);
			while($data2 = mysql_fetch_assoc($result2))
			{
					$pseudol2 = $data2['username'];
					$adl2 = $data2['avatar_design'];
					$classementl2 = $data2['classement_bacteria'];
			}
			$sql3 = "SELECT username, avatar_design, classement_bacteria FROM phpbb_users WHERE rank_bacteria = '3'";
   			$result3 = $this->db->query($sql3);
			while($data3 = mysql_fetch_assoc($result3))
			{
					$pseudol3 = $data3['username'];
					$adl3 = $data3['avatar_design'];
					$classementl3 = $data3['classement_bacteria'];
			}
			$sql7 = "SELECT username, classement_popu_h FROM phpbb_users ORDER BY classement_popu_h DESC LIMIT 1";
   			$result7 = $this->db->query($sql7);
			while($data7 = mysql_fetch_assoc($result7))
			{
					$pseudo7 = $data7['username'];
					$ph = $data7['classement_popu_h'];
			}
			$sql8 = "SELECT username, classement_popu_h FROM phpbb_users ORDER BY classement_popu_h LIMIT 1";
   			$result8 = $this->db->query($sql8);
			while($data8 = mysql_fetch_assoc($result8))
			{
					$pseudo8 = $data8['username'];
					$ph2 = $data8['classement_popu_h'];
			}
			$sql9 = "SELECT username, mazo FROM phpbb_users WHERE rank_mazo = '1'";
   			$result9 = $this->db->query($sql9);
			while($data9 = mysql_fetch_assoc($result9))
			{
					$pseudo9 = $data9['username'];
					$mz = $data9['mazo'];
			}
			$sql10 = "SELECT username, mazo FROM phpbb_users WHERE rank_mazo = '2'";
   			$result10 = $this->db->query($sql10);
			while($data10 = mysql_fetch_assoc($result10))
			{
					$pseudo10 = $data10['username'];
					$mz2 = $data10['mazo'];
			}
			$sql11 = "SELECT username, mazo FROM phpbb_users WHERE rank_mazo = '3'";
   			$result11 = $this->db->query($sql11);
			while($data11 = mysql_fetch_assoc($result11))
			{
					$pseudo11 = $data11['username'];
					$mz3 = $data11['mazo'];
			}
			return  array('top3' => array('0' => array('pseudo' => $pseudol,'ad' => $adl, 'rank' => '1', 'summary' => "Premier de <b>Bacteria</b> avec $classementl <b>points</b>"),'1' => array('pseudo' => $pseudol2,'ad' => $adl2, 'rank' => '2', 'summary' => "Deuxième de <b>bacteria</b> avec <b>$classementl2</b> points"),'2' => array('pseudo' => $pseudol3,'ad' => $adl3, 'rank' => '3', 'summary' => "Troisième de <b>bacteria</b> avec $classementl3 <b>points</b>")),
				      'top20' => '<b> Champion du jour - Popularité :</b><br /> Premier : <b>'.$pseudo7.'</b> avec <b>'.$ph.'</b>pts.<br /> Dernier : <b>'.$pseudo8.'</b> avec <b>'.$ph2.'</b>pts.<br /><br /><b>Champion du jour - MaZo :</b> <br /> Premier : <b>'.$pseudo9.'</b> avec <b>'.$mz.'</b>Pts.<br /> Deuxième : <b>'.$pseudo10.'</b> avec <b>'.$mz2.'</b>Pts.<br /> Troisième : <b>'.$pseudo11.'</b> avec <b>'.$mz3.'</b>Pts.<br />');
		
		}
		else if($i==3)
		{
			$sql4 = "SELECT username, avatar_design, patojdur FROM phpbb_users WHERE rank_patojdur = '1'";
   			$result4 = $this->db->query($sql4);
			while($data4 = mysql_fetch_assoc($result4))
			{
				$pseudop1 = $data4['username'];
				$adp1 = $data4['avatar_design'];
				$classementp1 = substr($data4['patojdur'], 0, 2);
				$classementp1.= "'";
				$classementp1.= substr($data4['patojdur'], 2, 5);
			}
			$sql5 = "SELECT username, avatar_design, patojdur FROM phpbb_users WHERE rank_patojdur = '2'";
   			$result5 = $this->db->query($sql5);
			while($data5 = mysql_fetch_assoc($result5))
			{
				$pseudop2 = $data5['username'];
				$adp2 = $data5['avatar_design'];
				$classementp2 = substr($data5['patojdur'], 0, 2);
				$classementp2.= "'";
				$classementp2.= substr($data5['patojdur'], 2, 5);
			}
			$sql6 = "SELECT username, avatar_design, patojdur FROM phpbb_users WHERE rank_patojdur = '3'";
   			$result6 = $this->db->query($sql6);
			while($data6 = mysql_fetch_assoc($result6))
			{
				$pseudop3 = $data6['username'];
				$adp3 = $data6['avatar_design'];
				$classementp3 = substr($data6['patojdur'], 0, 2);
				$classementp3.= "'";
				$classementp3.= substr($data6['patojdur'], 2, 5);
			}
			$sql12 = "SELECT username, classement_lapino FROM phpbb_users ORDER BY classement_lapino DESC LIMIT 1";
   			$result12 = $this->db->query($sql12);
			while($data12 = mysql_fetch_assoc($result12))
			{
					$pseudo12 = $data12['username'];
					$lap = $data12['classement_lapino'];
			}
			$sql13 = "SELECT username, classement_speedmaze FROM phpbb_users ORDER BY classement_speedmaze DESC LIMIT 1";
   			$result13 = $this->db->query($sql13);
			while($data13 = mysql_fetch_assoc($result13))
			{
					$pseudo13 = $data13['username'];
					$sm = $data13['classement_speedmaze'];
			}

			
			return  array('top3' => array('0' => array('pseudo' => $pseudop1,'ad' => $adp1, 'rank' => '1', 'summary' => "Premier de <b>Patojdur</b> avec $classementp1 "),'1' => array('pseudo' => $pseudop2,'ad' => $adp2, 'rank' => '2', 'summary' => "Deuxième de <b>Patojdur</b> avec <b>$classementp2</b>"),'2' => array('pseudo' => $pseudop3,'ad' => $adp3, 'rank' => '3', 'summary' => "Troisième de <b>Patojdur</b> avec $classementp3 ")),
				      'summary' => '<b>Champion - Lapino \'s Race :</b><br /> Premier : <b>'.$pseudo12.'</b> avec <b>'.$lap.'</b>Pts.<br /><br /><b> Champion - SpeedMaze :</b><br /> Premier : <b>'.$pseudo13.'</b> avec <b>'.$sm.'</b>Pts');
		

		}
		
		
	} 
 }
?>