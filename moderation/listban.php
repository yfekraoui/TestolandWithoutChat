
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
$title='Modération';
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

  <!-- main content -->

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Administration" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Administration"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<table width="700" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="45%" align="left"><span class="gen"><?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et être modo pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être modo pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1" OR $userdata['rang'] >= "1")
{	
$espacer = '<b><font style="color:rgb(255,47,151);">••••••••••••••••••••••••••••••••••••••••••••••••••••••<br></font></b>';
echo '<center>';
echo $espacer;
echo 'Listes des ban en cours .<br />';
echo $espacer;
echo '<br /><br />';
echo '<b>ban temporaire en cours : </b><br /><br />';
$xx = 0;
$time = time();
$x1 = mysql_query('SELECT * FROM phpbb_users WHERE ban_D > "0"');
while($x2 = mysql_fetch_assoc($x1))
{
	$xx++;
	$hdx = $x2['ban_D'] - $time;
	$hd = $hdx / 60;
	echo $xx.' - MID : <b>'.$x2['user_id'].'</b> - PSEUDO : <a href="/annuaire/?mid='.$x2['user_id'].'">'.$x2['username'].'</a> - Debannis dans : <b>'.$hd.'</b>minutes.<br /> ';
	echo'<br />';
}
echo '<font style="color:rgb(58,179,243);">••••••••••••••••••••••••••••••••••••••••••••••••••<br></font><br /><br />';	
echo '<b>Ban definitif : </b><br /><br />';
$yy = 0;
$y1 = mysql_query('SELECT * FROM phpbb_users WHERE ban = "1" AND ban_D = "0"');
while($y2 = mysql_fetch_assoc($y1))
{
	$yy++;
	echo $yy.' - MID : <b>'.$y2['user_id'].'</b> - PSEUDO : <a href="/annuaire/?mid='.$y2['user_id'].'">'.$y2['username'].'</a> <br />';
}
echo '<br /><br />';
echo '<font style="color:rgb(58,179,243);">••••••••••••••••••••••••••••••••••••••••••••••••••<br></font><br /><br />';	
echo '<b>Ban ip: </b><br /><br />';
$yy = 0;
$y1 = mysql_query('SELECT * FROM ip_acces');
while($y2 = mysql_fetch_assoc($y1))
{
	$yy++;
	echo $yy.' : <b>'.$y2['ip'].'</b><br />';
}
echo' <br /><br />';
echo $espacer;
echo '</center>';

}
?></span></td>
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
<?php
include('../bbs/includes/bas.php'); 
?>