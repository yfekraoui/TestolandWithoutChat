
<?php

define('IN_PHPBB', true);
$phpbb_root_path = '../bbs/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
$title='Cabine Rapide';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu

if (!isset($userdata['session_logged_in'])) {
	
}
else if($userdata['username'] == "Anonymous"){
	
}
else {





					  if(isset($_POST['pseudo']))
					  {	
							$npseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
							$npseudo_min = strtolower($npseudo);
							$vpseudo_min = strtolower($userdata['username']);
							if($npseudo_min != $vpseudo_min)
							{
									header('Location: majmin.php');
							}
							else
							{
								mysql_query('UPDATE phpbb_users SET username = "'.$npseudo.'" WHERE username = "'.$userdata['username'].'"');
								header('Location: majmin.php');
								
							}
					}
}					
                      
					 
include('../bbs/includes/bas.php'); 


?>