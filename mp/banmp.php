
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
else if($userdata['user_level'] == "1" OR $userdata['modopro'] == "1")
{
$idid = mysql_real_escape_string(htmlspecialchars($_POST['idid']));
		$ban = mysql_real_escape_string(htmlspecialchars($_POST['ban']));
	if(!empty($_POST['idid']) AND !empty($_POST['ban']))
	{
		
		$nbre = mysql_query("SELECT COUNT(*) AS exist FROM phpbb_users WHERE user_id ='$idid'");
		$donnees = mysql_fetch_array($nbre);
		if($donnees['exist'] != 0)
		{
			$quete = mysql_query("SELECT * FROM phpbb_users WHERE user_id ='$idid'");
			$infos = mysql_fetch_array($quete);
			if($ban == "ip")
			{
				$nbre = mysql_query('SELECT COUNT(*) AS exists FROM ip_acces WHERE ip = "'.$infos["lastip"].'"');
				$donneess = mysql_fetch_array($nbre);
				if($donneess['exists'] != 0)
				{
					echo 'Cette ip est deja bannit ;)';
				}
				else
				{
					
					mysql_query('INSERT INTO ip_acces VALUES ("'.$infos["lastip"].'")');
					mysql_query('UPDATE phpbb_users SET ban = "1" WHERE user_id ="'.$idid.'"');
					mysql_query('INSERT INTO phpbb_banlist VALUES ("", "'.$infos['user_id'].'", "", "")');
					echo '<b>'.$infos['username'].'</b> a bien été banni <b>ip</b>';
				}
			}
			else
			{
				$bann = (int)$ban;
				if($bann == 0)
				{
					echo 'Merci de bien mettre une valeur au ban ;)';
				}
				else if($bann > 0)
				{
					$time = time();
					$hdx = $bann * 3600;
					$hd = $hdx + $time;
					mysql_query('UPDATE phpbb_users SET ban = "1", ban_D = "'.$hd.'" WHERE user_id ="'.$idid.'"');
					mysql_query('INSERT INTO phpbb_banlist VALUES ("", "'.$infos['user_id'].'", "", "")');
					echo '<b>'.$infos['username'].'</b> est bien bannis pendant <b>'.$bann.'</b>';
				}
			
			}
		}
		else
		{
			echo 'Eh Bobby, j\'crois que ce membre n\'existe pas !';
		}
	}
	else
	{
		echo 'Il faut remplir tout les champs :) .';
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
<?php
include('../bbs/includes/bas.php'); 
?>