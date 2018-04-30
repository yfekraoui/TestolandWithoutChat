
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
	
	<b><center>Effacer des messages</b><img src="/img/spacer.gif" height="15" width="50" /></center>
	
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
		$nm = mysql_query('SELECT id FROM mi ORDER BY id DESC LIMIT 1');
		$nm = mysql_fetch_assoc($nm);
		$nm = $nm['id'];
		$req_final = '<b>Message Delete :</b> <br />';
		for($i=0;$i<=$nm;$i++)
		{
			$name_box = 'delete_msg'.$i;
			if(isset($_POST[$name_box]) && $_POST[$name_box] == $i)
			{		
				$msid = (int)mysql_real_escape_string(htmlspecialchars($_POST[$name_box]));
				
				$verif_msg = mysql_query('SELECT COUNT(*) AS vms FROM mi WHERE mid_r = "'.$userdata['user_id'].'" AND id = "'.$msid.'"');
				$verif_msg = mysql_fetch_assoc($verif_msg);
				$vms = $verif_msg['vms'];
				if($vms == 1)
				{
					$req = mysql_query('SELECT sujet FROM mi WHERE mid_r = "'.$userdata['user_id'].'" AND id = "'.$msid.'"');
					$data_s = mysql_fetch_assoc($req);
					
					$req_final .= 'Message ['.$msid.'] : '.$data_s['sujet'].'<br />';
					mysql_query('DELETE FROM mi WHERE mid_r = "'.$userdata['user_id'].'" AND id = "'.$msid.'"');
				}
			}
		}
		
			echo $req_final;
				
		
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