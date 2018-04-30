<?php
include_once("Sql.php");
class fringues{ 
	function fringues() { 
		$this->methodTable = array(
			"packs" => array(
				"description" => "No description given.",
				"arguments" => array(),
				"access" => "remote"
			),
		);
	}
function packs()
{
	$this->db = new Sql();
	$i = 0;
	$sql1 = "SELECT MAX(id) FROM shopping";
   	$result11 = $this->db->query($sql1);
	$sql = "SELECT name, name_bd, prix, description, type, items FROM shopping";
   	$result = $this->db->query($sql);
	while($data = mysql_fetch_assoc($result))
	{
		$name_bd = $data['name_bd'];
		$name = $data['name'];
		$prix = $data['prix'];
		$description = $data['description'];
		$type = $data['type'];
		$items = $data['items'];
		if($type == "pack")
		{
			$code = preg_split("/,/",$items);
			$coiff_1 = $code[0];
			$coiff_2 = $code[1];
			$corps_1 = $code[2];
			$corps_2 = $code[3];
			$shoes_1 = $code[4];
			$shoes_2 = $code[5];
			$test[$i]= array("accroche" => $name,
				"name" => $name,
				"text" => $description,
				"prix" => $prix,
				"DemoCharacters" => array ("0" => array("ad" => "r;1;$coiff_1;$corps_1;$shoes_1;1;1", "mood" => "LOL"), "1" => array("ad" => "r;1;$coiff_2;$corps_2;$shoes_2;1;1", "mood" => "goot")),
				"img" => "$name_bd.jpg");
			$i++;

		}
		else if($type == "pack_solo")
		{
			$code = preg_split("/,/",$items);
			$coiff_1 = $code[0];
			$corps_1 = $code[1];
			$shoes_1 = $code[2];
			$test[$i]= array("accroche" => $name,
				"name" => $name,
				"text" => $description,
				"prix" => $prix,
				"DemoCharacters" => array ("0" => array("ad" => "r;1;$coiff_1;$corps_1;$shoes_1;1;1", "mood" => "LOL")),
				"img" => "$name_bd.jpg");
			$i++;
		}
		else if($type == "item1")
		{
			$code = preg_split("/,/",$items);
			$item_1 = $code[0];
			$test[$i]= array("accroche" => $name,
				"name" => $name,
				"text" => $description,
				"prix" => $prix,
				"DemoCharacters" => array ("0" => array("ad" => "r;1;1;1;1;$item_1;1", "mood" => "LOL")),
				"img" => "$name_bd.jpg");
			$i++;
		}
		else if($type == "item0")
		{
			$code = preg_split("/,/",$items);
			$item_0 = $code[0];
			$code = preg_split("/,/",$items);
			$shoes_1 = $code[0];
			$test[$i]= array("accroche" => $name,
				"name" => $name,
				"text" => $description,
				"prix" => $prix,
				"DemoCharacters" => array ("0" => array("ad" => "r;$item_0;1;1;;1;1", "mood" => "LOL")),
				"img" => "$name_bd.jpg");
			$i++;
		}
		else if($type == "pack_shoes")
		{
			$code = preg_split("/,/",$items);
			$shoes_1 = $code[0];
			$test[$i]= array("accroche" => $name,
				"name" => $name,
				"text" => $description,
				"prix" => $prix,
				"DemoCharacters" => array ("0" => array("ad" => "r;1;1;1;$shoes_1;1;1", "mood" => "LOL")),
				"img" => "$name_bd.jpg");
			$i++;
		}
		else if($type == "pack_body")
		{
			$code = preg_split("/,/",$items);
			$body_1 = $code[0];
			$test[$i]= array("accroche" => $name,
				"name" => $name,
				"text" => $description,
				"prix" => $prix,
				"DemoCharacters" => array ("0" => array("ad" => "r;1;1;$body_1;1;1;1", "mood" => "LOL")),
				"img" => "$name_bd.jpg");
			$i++;
		}
		else if($type == "pack_head")
		{
			$code = preg_split("/,/",$items);
			$coiff_1 = $code[0];
			$test[$i]= array("accroche" => $name,"name" => $name,"text" => $description,"prix" => $prix,"DemoCharacters" =>
				array ("0" =>
					array("ad" => "r;1;$coiff_1;1;1;1;1", "mood" => "LOL")),"img" => "$name_bd.jpg");
			$i++;
		}

	}

	return($test);
		

}
} 
?>