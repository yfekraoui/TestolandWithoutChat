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
$title='Popularité';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);
include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu


						if (!isset($userdata['session_logged_in'])) {
							echo 'Il faut se connecter pour pouvoir voter !';
						}
						else if($userdata['username'] == "Anonymous"){
							echo "Il faut être connecté pour voter!";
						}
						else {
					  $dmx = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$userdata['username'].'"');
					  $dm = mysql_fetch_assoc($dmx);
					  
					  $dp = mysql_query('SELECT COUNT(*) AS ne FROM vote_use WHERE id = "'.$dm['user_id'].'"');
					  $dp = mysql_fetch_assoc($dp);
					  $verif = $dp['ne'];
					  
					  $ipp = getIp();
					  $di = mysql_query('SELECT COUNT(*) AS ni FROM vote_use WHERE ip = "'.$ipp.'"');
					  $di = mysql_fetch_assoc($di);
					  $vip = $di['ni'];
					  
					  if($verif > 0)
					  {
							header('Location: vote.php');
						}
						elseif($vip > 0)
						{ 
							header('Location: vote.php');
						}
						else
						{ 
						
						if(!empty($_POST['pseudo']) && !empty($_POST['choix']))
						{
							
							  $pseudog = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
							  $choix = mysql_real_escape_string(htmlspecialchars($_POST['choix']));
							  $nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE username ='$pseudog'");
							  $donnees = mysql_fetch_array($nbre);
							  if($donnees['exist'] != 0)
							  {		
									if($choix == "pour")
									{
										$dv = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$pseudog.'"');
										$dv = mysql_fetch_assoc($dv);
										$don = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$userdata['username'].'"');
										$done = mysql_fetch_assoc($don);
										
										$score = $dv['classement_popu_a'];
										if($done['level'] >= 7)
										{
											$score_fin = $score + 2;
										}
										if($done['level'] >= 13)
										{
											$score_fin = $score + 3;
										}
										if($done['level'] >= 20)
										{
											$score_fin = $score + 4;
										}
										if($done['level'] < 7)
										{
											$score_fin = $score + 1;
										}
										header('Location: voteok.php');
										mysql_query('INSERT INTO vote_use VALUES ("'.$dm['user_id'].'", "'.$ipp.'", "1", "0")');
										mysql_query('UPDATE phpbb_users SET classement_popu_a = "'.$score_fin.'" WHERE username = "'.$pseudog.'"');
								
									}
									elseif($choix == "contre")
									{
										$dv = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$pseudog.'"');
										$dv = mysql_fetch_assoc($dv);
										
										$don = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$userdata['username'].'"');
										$done = mysql_fetch_assoc($don);
										
										$score = $dv['classement_popu_a'];
										if($done['level'] >= 7)
										{
											$score_fin = $score - 2;
										}
										if($done['level'] >= 13)
										{
											$score_fin = $score - 3;
										}
										if($done['level'] >= 20)
										{
											$score_fin = $score - 4;
										}
										if($done['level'] < 7)
										{
											$score_fin = $score - 1;
										}
										mysql_query('INSERT INTO vote_use VALUES ("'.$dm['user_id'].'", "'.$ipp.'", "0", "1")');
										mysql_query('UPDATE phpbb_users SET classement_popu_a = "'.$score_fin.'" WHERE username = "'.$pseudog.'"');
										
											header('Location: voteok.php');
									
									}
									else
									{
										header('Location: vote.php');
									}
							}
							else
							{
								header('Location: vote.php');
							}
						  
						  
						}
						else
						{
								header('Location: vote.php');
						}
					}  
				}	
						  
?>