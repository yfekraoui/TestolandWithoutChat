<?php
class Membership{ 
	function Membership() { 
		$this->methodTable = array(
			"login" => array(
				"description" => "No description given.",
				"arguments" => array('rk','vk'),
				"access" => "remote"
			),
			"modifyRegistration" => array(
				"description" => "No description given.",
				"arguments" => array('reg'),
				"access" => "remote"
			)
		);
	}
	function login($rk,$vk){
		return array("pseudo" => "elliotg" , "visiteur" => 0 , "id" => 45, "date" => "456", "avatar_design" => "r;1;1;1;1", "attributes" => "1" , "ranks" => "1");
	} 
	function modifyRegistration($reg)
	{
		return;
	}
} 
?>
