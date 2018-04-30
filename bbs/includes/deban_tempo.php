<?php
include('../../bbs/includes/config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);


$timestamp = time();

$ouhouh = mysql_query('SELECT * FROM phpbb_banlist WHERE time_deban > 0');
while($donemoi = mysql_fetch_assoc($ouhouh))
{
	
	if(isset($donemoi['time_deban']) AND $donemoi['time_deban'] == $timestamp)
	{
		echo ' USERID DU DEBAN :'.$donemoi['ban_userid'].' - TIME DEBAN: '.$donemoi['time_deban'].' - TIMESTAMP ACTUEL : '.$timestamp.'';
		mysql_query('UPDATE phpbb_users SET ban = "0" WHERE user_id = "'.$donemoi['ban_userid'].'"');
		mysql_query('DELETE FROM phpbb_banlist WHERE ban_id = "'.$donemoi['ban_id'].'"');
		
	
	
	}
	else
	{
	}
}



?>