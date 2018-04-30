
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
else if($userdata['user_level'] == "1")
{

	$username_1 = mysql_real_escape_string(htmlspecialchars($_POST['username_1']));
	$id_1 = mysql_real_escape_string(htmlspecialchars($_POST['id_1']));
	$username_2 = mysql_real_escape_string(htmlspecialchars($_POST['username_2']));
	$id_2 = mysql_real_escape_string(htmlspecialchars($_POST['id_2']));
	if($username_1 != NULL AND $username_2 != NULL AND $id_1 != NULL AND $id_2 != NULL)// si il y a quelque chose d'envoyer
	{
		$suuck = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$username_1.'"');
		$suuck1 = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$username_2.'"');
		 $mariage1 = mysql_fetch_assoc($suuck);
		 $mariage2 = mysql_fetch_assoc($suuck1);		
		
		
		

	
			if ($mariage1['partenaire_id'] == "0" OR $mariage1['partenaire_id'] == NULL)// si n'y a pas de mariage 
			{
			if ($mariage2['partenaire_id'] == "0" OR $mariage2['partenaire_id'] == NULL)
			{
				if($id_1 == $mariage1['user_id'] AND $id_2 == $mariage2['user_id']) // si le pseudo correspond  a un des deux id
				{
					mysql_query("INSERT INTO mariage VALUES('', '" .$username_1. "', '" .$id_1. "', '" .$username_2. "', '" .$id_2. "')");
					$idmariage = mysql_query('SELECT id FROM mariage WHERE username1 = "'.$username_1.'"');
					while ($idm = mysql_fetch_array($idmariage))
					{
					mysql_query('UPDATE phpbb_users SET partenaire_name = "'.$username_2.'", partenaire_id = "'.$id_2.'", wedding_id = "'.$idm['id'].'" WHERE username = "'.$username_1.'"');
					mysql_query('UPDATE phpbb_users SET partenaire_name = "'.$username_1.'", partenaire_id = "'.$id_1.'", wedding_id = "'.$idm['id'].'" WHERE username = "'.$username_2.'"');
					}
					echo 'Mariage entre '.$username_1.' et '.$username_2.' est confirmer !';
				}
				else
				{
					echo 'Hey louper boby l\'id des membres correspond pas avec leurs pseudo !';
				}
			}
			else
			{
				echo 'Hey boby un des membres est deja marier t\'es con ou bien ? z_z';
			}
			
			}
		
			else
			{
			echo 'Hey boby un des membres est deja marier t\'es con ou bien ? z_z';
			}
			
	}
	else
	{
	echo 'Hey boby bien de t\'amuser a essayer de marier des gens sans partenaire hein hein ? ( Mariage annuler ! )';
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