
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
	<?php 
	$nmc = mysql_query('SELECT COUNT(*) AS nmc FROM mi WHERE mid_r = "'.$userdata['user_id'].'"');
	$nmc = mysql_fetch_assoc($nmc);
	$nmc = $nmc['nmc'];
	?>
	<b> <center>Boite de réception </b><img src="/img/spacer.gif" height="15" width="50" /></center>
	
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
		<div  style="overflow:auto;height:400px;">
		 <table width='100%' border='0' cellpadding="3" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>#</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>De</b></td>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Sujet</b></td>
                             <td valign="top" align="center" nowrap="nowrap"><b>Date</b></td>
							 <td valign="top" align="center" nowrap="nowrap"><b>Supprimer</b></td>
                           </tr>
						   <?php
						   if($nmc == 0)
						   {
								echo '<tr><td></td><td>Tu n\'as aucun message dans ta boite de réception</td></tr>';
						   }
						   else
						   {
						   ?>
						   <form method="post" action="msg_delete.php">
						  <?php
						  $data_reception = mysql_query('SELECT * FROM mi WHERE mid_r = "'.$userdata['user_id'].'" ORDER BY id DESC');
						  $i = 0;
						  while($dr = mysql_fetch_assoc($data_reception))
						  {
							$de = mysql_query('SELECT username FROM phpbb_users WHERE user_id = "'.$dr['mid_e'].'"');
							$de = mysql_fetch_assoc($de);
							$i++;
							echo colortr($i);
							?>
							
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><?php if($dr['vue'] == 0){ echo '<img src="/img/icon_minipost_new_r.gif" alt="new_message" border="0" />';} else { echo'<img src="/img/icon_latest_reply.gif" alt="message" border="0" />'; } ?></td>

                             <td valign="top" align="center" nowrap="nowrap"><?php echo '<a href="/annuaire/?mid='.$dr['mid_e'].'">'.$de['username'].'</a>'; ?></td>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><?php echo '<a href="view_msg.php?id='.$dr['id'].'">'.stripslashes(coup($dr['sujet'], 30)).'</a>';?> </td>
                             <td valign="top" align="center" nowrap="nowrap"><?php echo date('d/m/Y', $dr['timestamp']);?></td>
							 <td valign="top" align="center" nowrap="nowrap"><input type="checkbox" name="delete_msg<?php echo $dr['id'];?>" value="<?php echo $dr['id'];?>"  /></td>
                           </tr>
						   
						   <?php
						   }
						  }
						  ?>
						  
                            
							 
                           
						  
                      </table>
					  </div>
					  <br />
					  
					  <input type="image" src="delete.png" alt="delete" border="0" />
					  </form><br />Nombre de mails : <?php echo $nmc; ?>/100

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