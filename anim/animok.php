
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
$title='Administration';
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
<table width="504" border="0" cellpadding="0" cellspacing="0">
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
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1" OR $userdata['rang'] == "6") {

    $pseudo = mysql_real_escape_string(htmlspecialchars($_POST['pseudo']));
	$don = (int)mysql_real_escape_string(htmlspecialchars($_POST['don']));
	$anim = mysql_real_escape_string(htmlspecialchars($_POST['anim']));
	$id = $userdata['user_id'];
	$time = time();
    $test = mysql_query('SELECT user_id FROM phpbb_users WHERE username = "'.$pseudo.'"');
    $test45 = mysql_fetch_assoc($test);
	$sm = mysql_query('SELECT COUNT(*) AS nm FROM phpbb_users WHERE username = "'.$pseudo.'"');
	$sm = mysql_fetch_assoc($sm);
	$smv = $sm['nm'];
	
		if($don > 1)
		{
			if($smv > 0)
			{
				$cm = mysql_query('SELECT money FROM phpbb_users WHERE username = "'.$pseudo.'"');
				$cm = mysql_fetch_assoc($cm);
				$donm = $don + $cm['money'];
				mysql_query('UPDATE phpbb_users SET money = "'.$donm.'" WHERE username = "'.$pseudo.'"');
				mysql_query('INSERT INTO don_anim VALUES ("'.$id.'", "'.$don.'", "'.$time.'", "'.$pseudo.'")');
				mysql_query('INSERT INTO banque VALUES ("", "'.$test45['user_id'].'", "Animation : '.$anim.'", "'.$don.'", "'.$time.'")');
				echo 'Tu viens de donner <b>'.$don.'t</b> à <b>'.$pseudo.'</b>.';
				
			}
			else
			{
				'Hey boby ce membre n\'existe pas';
			}
		}
		else
		{
			echo 'Tu peux ne pas donner moins de 1 testoz sorry boby luv';
		}
	
}
else
{
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
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
</style>
</head>
<?php
include('../bbs/includes/bas.php'); 
?>