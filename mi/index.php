
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
?>

  <!-- main content -->
<td valign="top">

 <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>


<table width="400" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
    <td><img src="mi.png" alt="mi" border="0" /></td>
   

  </tr>
  <tr>
    <td width="0" bgcolor="#ffe2aa"></td>
    <td bgcolor="#ffe2aa"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      
      <tr>
        <td width="30%" align="left"><span class="gen">
		
		

	<center>
	
	
	<table border="0">
	
	
	<center>
	<tr>
	<td>
	<img src="/img/spacer.gif" width="60" height="10" />
	</td>
	<td>
	</td>
	<td>
	<img src="/img/spacer.gif" width="60" height="10" />
	</td>
	<td>
	</td>
	</tr>
	</table>
	<table>
	<tr>
	<?php
	$dm = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$userdata['username'].'"');
	$dm = mysql_fetch_assoc($dm);
	
	$message_nonvu = mysql_query('SELECT COUNT(*) AS msnv FROM mi WHERE mid_r = "'.$dm['user_id'].'" AND vue = "0"');
	$message_nonvu = mysql_fetch_assoc($message_nonvu);
	$message_nonvu = $message_nonvu['msnv'];
	
	$message_total = mysql_query('SELECT COUNT(*) AS mt FROM mi WHERE mid_r = "'.$dm['user_id'].'"');
	$message_total = mysql_fetch_assoc($message_total);
	$message_total = $message_total['mt'];
	
	if($message_nonvu >= 1)
	{
	?>
	

	<img src="/img/icon_minipost_new_r.gif" alt="new_message" border="0" />
	Messages ( <b><?php echo $message_total;?> </b>)</td>
	<td>
	<br /><br /><center><a href="bc.php"><img src="/img/moncompte_puce.gif" alt="goreception" border="0" /></a><br /><br /><b>Clique</b> sur la flèche bleue pour consulter tes <b>messages</b>
	</td>
	
	<?php
	}
	else
	{
	?>
	

	
	<img src="/img/icon_latest_reply.gif" alt="message" border="0" />
	Messages ( <?php echo $message_total;?> )</td>
	<td>
	<br /><br /><center><a href="bc.php"><img src="/img/moncompte_puce.gif" alt="goreception" border="0" /></a><br /><br /><b>Clique</b> sur la flèche bleue pour consulter tes <b>messages</b>
	</td>
	<?php
	}
	?>
	</tr>

	</center>

	
	</table>
</span></td>
      </tr>
    </table></td>
    <br />
    <br />
    <div align="center"></div>
    <td width="0" bgcolor="#ffe2aa"></td>

  </tr>
  <tr>
    <td></td>
    <td><img src="/img/foot_mi.gif" alt="mi" border="0" /></td>
    <td></td>
	
	
	
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

include('../bbs/includes/bas.php');  
?>