<?php
class Sql
{ 
	var $dbhost = "localhost";
	var $dbname = "testo";
	var $dbuser = "root";
	var $dbpass = "ilovelol";
 
 	// Constructor
	function Sql ()
	{
		$conn = mysql_pconnect($this->dbhost, $this->dbuser, $this->dbpass) 
		or NetDebug::trace(mysql_error());
		mysql_select_db($this->dbname, $conn) 
		or NetDebug::trace(mysql_error());	
	}
 
	// Executes a sql query with NetDebug support
	function query ($sql)
    { 
		$result = mysql_query($sql) 
		or NetDebug::trace(mysql_error());
		return $result;
    }
}
?>