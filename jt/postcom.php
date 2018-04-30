
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
$title='Le P\'tit Testoland';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>

  <!-- main content -->
<td valign="top"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>


<table width="554" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center"><span style="font-family: Arial, Helvetica, sans-serif;font-size: 30px;font-weight: bold;color: #A06526;">Le P'tit Testoland</span><br /><br /></td>
      </tr>
      <tr>
        <td width="45%" align="left"><span class="gen">	
		<?php
		if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour accèder à cette page !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour accèder à cette page !";
}
else {

if(isset($_POST['com']) && !empty($_POST['com']) && isset($_POST['article']) && !empty($_POST['article']))
{
	$vt = mysql_query('SELECT * FROM com_journal WHERE user_id = "'.$userdata['user_id'].'"');
	while(@$vtt = mysql_fetch_assoc($vt))
	{
		$tm2 = time() - 120;
		if($vtt['timestamp'] >= $tm2)
		{
			$error = 1;
			break;
		}
		else
		{
			$error = 0;
		}
	}
	if($error == 1)
	{
		echo 'Anti-Spam : Il faut que tu attende 2minutes aprés avoir posté ton commentaire pour en refaire un.';
	}
	else
	{
		$com = mysql_real_escape_string(htmlspecialchars($_POST['com']));
		$article = (int)mysql_real_escape_string(htmlspecialchars($_POST['article']));
		$time = time();
		mysql_query('INSERT INTO com_journal VALUES ("", "'.$userdata['user_id'].'", "'.$com.'", "'.$time.'", "'.$article.'")');
		echo 'Ton commentaire est bien poster ! :noel: <a href="/jt/?p='.$article.'&amp;com=view">Retour</a>.';
	}

}

}
?>
</center></span></td>
      </tr>
	  
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
</style>
</head>
<?php
include('../bbs/includes/bas.php'); 
?>