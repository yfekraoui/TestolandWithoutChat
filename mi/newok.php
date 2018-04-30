
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
$title='Messagerie Interne';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
function colortr($i)
{
	$nb_retour = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39, 41, 43, 45, 47, 49, 51, 53, 55, 57, 59, 61, 63, 65, 67, 69, 71, 73, 75, 77, 79, 81, 83, 85, 87, 89, 91, 93, 95, 97, 99, 101);
	if(in_array($i, $nb_retour))
	{
		echo '<tr bgcolor=#FFFFFF>';;
	}
	else
	{
		echo '<tr>';
	}
}
function coup($phrase,$jusqua)
{
	if(strlen(@$phrase) >= $jusqua)
	{
		for($k=0;$k<=$jusqua;$k++)
		{
			@$phrase1 .= @$phrase[$k];
		}
		return @$phrase1;
	}
	else 
	{
		return @$phrase;
	}
}

if (!isset($userdata['session_logged_in'])) {
							
						}
						else if($userdata['username'] == "Anonymous"){
							
						}
						else {
?>

  <!-- main content -->
<td valign="top">

 <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<table width="560" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>
    <td height="11" bgcolor="#FFF4D5">
	<table> <!-- table menu bouton mi -->
	<tr>
	<td><img src="/img/spacer.gif" alt="spacer" width="20" height="2" /></td>
	<td><a href="new.php"><img src="nouveau.png" alt="envoyer" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	<td><a href="bc.php"><img src="boitereception.png" alt="boite_reception" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	<td><a href="be.php"><img src="boite-denvoie.gif" alt="boite_envoi" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	
	</tr>
	</table>
	</td>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>

  </tr>

 <tr>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>
    <td height="11" bgcolor="#FFF4D5">
	
	<img src="/img/spacer.gif" height="15" width="10" />
	
	<b><center> Envoie du message </b><img src="/img/spacer.gif" height="15" width="50" /></center>
	
	</td>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>

  </tr>

  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="45%" align="left">
		
		<?php
		
			$time_m120 = time() - 120;
			$vt = mysql_query('SELECT COUNT(*) AS vt FROM mi WHERE timestamp >= "'.$time_m120.'" AND timestamp <= "'.time().'" AND mid_e = "'.$userdata['user_id'].'"');
			$vt = mysql_fetch_assoc($vt);
			$vt = $vt['vt'];
			if($vt >= 1) // Securite 2 : Verification si il n'a pas envoyer un message il y a moins de 2min.
			{
				echo '<b>Erreur :</b> Tu doit attendre 2 minutes entre chaque envoi de message<br />';
			}
			else
			{
			
				$destinataire = mysql_real_escape_string(htmlspecialchars($_POST['destinataire']));
				$sujet = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['sujet']))); 
				$message = mysql_real_escape_string(htmlspecialchars(stripslashes($_POST['message'])));
				
				$nbc_sujet = strlen($sujet);
				if($nbc_sujet > 55) // Securite 3 : verification nombre de caracter dans le sujet.
				{
					echo '<b>Erreur :</b> Ton sujet doit contenir au maximum 55 caractère<br />';
				}
				else
				{
					$all_name = mysql_query('SELECT user_id, username FROM phpbb_users');
					while($an = mysql_fetch_array($all_name))
					{
						$min_destinataire = strtolower($destinataire);
						$min_username = strtolower($an['username']);
						if($min_username == $min_destinataire)
						{
							
							$exist = 1;
							$id_r = $an['user_id'];
							break;
						}
						else
						{
							$exist = 0;
						}
					}
					

					if($exist == 1) // Securite 4 : Verification si le pseudo existe bien.
					{
						// $nb_m_r : Nombre quel celui qui vas recevoir a de message.
						$nb_m_r = mysql_query('SELECT COUNT(*) AS nmr FROM mi WHERE mid_r = "'.$id_r.'"');
						$nb_m_r = mysql_fetch_assoc($nb_m_r);
						$nb_m_r = $nb_m_r['nmr'];
						if($nb_m_r >= 100) // Securite 5 : Verification que la personne vas recevoir le message n'a pas 100 message ou plus
						{
							echo '<b>Erreur :</b> La boite de réception de <b>'.$an['username'].'</b> est pleine.<br />';
						}
						else
						{
							if(!empty($sujet) && !empty($message))
							{
								$dr = mysql_query('SELECT * FROM phpbb_users WHERE user_id = "'.$id_r.'"');
								$dr = mysql_fetch_assoc($dr);
								$quete  = mysql_query('INSERT INTO mi VALUES ("", "'.$userdata['user_id'].'", "'.$id_r.'", "'.$sujet.'", "'.$message.'", "'.time().'", "0")');
								echo 'Message bien envoyé à <a href="/annuaire/?mid='.$id_r.'">'.$dr['username'].'</a>.';
							}
							else
							{
								echo '<b>Erreur :</b> tu ne peux pas envoyer de message/sujet vide';
							}
						}
					}
					else
					{
						echo '<b>Erreur :</b> Cette personne n\'existe pas.';
					}
				}
			}
	
	?>
	</table></td>
	
    <br />
    <br />
    <div align="center"></div>
    <td width="11" bgcolor="#FFF4D5"></td>

  </tr>
  <tr>
    <td width="11" height="11"><img src="/img/beige_bg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_bd.gif" width="11" height="11" /></td>
  </tr>
</table>
</form>

<head>
<style type="text/css">
.style1 {
	color: #FF3399;
}
.style2 {
	color: #FFFFFF;
}



</style>
</head>

<?php
}
include('../bbs/includes/bas.php');  
?>