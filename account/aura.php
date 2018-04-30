
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
$title='Mon compte';
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

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Mon compte" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Mon compte"
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
	echo 'Il faut se connecter pour pouvoir modifier son compte !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour changer son compte !";
}
else {
$moncompte = mysql_query("SELECT * FROM phpbb_users WHERE username = '".$userdata['username']."'");
$account2 = mysql_fetch_assoc($moncompte);
$pseudo = $account2['username'];
$money = $account2['money'];
$lapino = $account2['rank_lapino'];
$ctf = $account2['rank_capture'];
$sm = $account2['rank_speedmaze'];
$mazo = $account2['mazo'];
$clan = $account2['clan'];
$ad = $account2['avatar_design'];
$animal = $account2['animal'];
$sexe = $account2['user_sexe'];
$dad = preg_split("/;/", $ad);
$cad = ";$dad[1];$dad[2];$dad[3];$dad[4];$dad[5];$dad[6]";
if($sexe == "keum")
{
	$sexe = "Garçon";
}
else if($sexe == "meuf")
{
	$sexe = "Fille";
}
else
{
	$sexe = "Inconnu";
}
$partenaire = $account2['partenaire_name'];
$partenaire_id = $account2['partenaire_id'];
$barre = '<font style="color:rgb(70,157,244);">••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••<br></font>';

echo $barre;
$mode = mysql_real_escape_string(htmlspecialchars($_GET['value']));
if(isset($_GET['value']) && !empty($_GET['value']))
{
	
	
	if($mode == "ork")
	{
		mysql_query('UPDATE phpbb_users SET avatar_design = "ork'.$cad.'" WHERE username = "'.$pseudo.'"');
		echo'Ton aura Orkin est bien mise.';
	}
	else if($mode == "xtra")
	{
		mysql_query('UPDATE phpbb_users SET avatar_design = "xtra'.$cad.'" WHERE username = "'.$pseudo.'"');
		echo'Ton aura Xtrator est bien mise.';
	}
	elseif($mode == "r")
	{
		mysql_query('UPDATE phpbb_users SET avatar_design = "r'.$cad.'" WHERE username = "'.$pseudo.'"');
		echo'Ton aura est bien enlevée.';
	}
	else
	{
		echo'Epic Fail';
	}	
}
else
{
	echo'Epic Fail';
}

echo $barre;
}
?>

</span></td>

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
<td>
<img src="/img/spacer.gif" width="5" />
</td>
<td valign="top"><br /><br />


				<img src="/img/spacer.gif"  height="40" />
             <table width="175" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/spacer.gif" width="12" height="19"><br>
                  <img src="/img/header_testoz.png" width="180" height="37"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#FFF4D6">
                <table width="175"  border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td valign="top">
                          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="170" height="200" align="middle">
              <param name="allowScriptAccess" value="sameDomain" />
              <param name="movie" value="/img/pp_jauge.swf" />
              <param name="wmode" value="transparent" />
              <param name="menu" value="false" />
              <param name="quality" value="high" />
              <param name="FlashVars" value="p=<?php if($userdata['money'] == "")
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?>" />
              <embed src="/img/pp_jauge.swf"
            flashvars="p=<?php if($userdata['money'] == "")
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?>"
            menu="false" wmode="transparent" quality="high" width="170" height="200" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object><center>
			Tu as actuellement : <br /><b>
<?php if($userdata['money'] == "")
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?> Pepettes</b>
			
			</center></div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td><img src="/img/ppt_bottom.gif" width="180" height="11"></td>
              </tr>
            </table>




         




          </td>
			
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