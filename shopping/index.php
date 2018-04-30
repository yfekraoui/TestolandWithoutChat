
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
$title='Shopping';
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
<?php
if($userdata['user_id'] != -1)
{
?>

		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="730" name="chz5rgyi" align="middle"> 
		<param name="movie" value="/tchat/fringues.swf" /> 
		<param name="menu" value="false" /> 
		<param name="quality" value="high" /> 
		<param value="#6090BE" name="bgcolor" /> 
		<param name="wmode" value="transparent" />
		<param value="always" name="allowscriptaccess" /> 
		<param name="FlashVars" value="url_img=testoland.org"/> 
		<embed src="/tchat/fringues.swf" flashvars="url_img="url_img=testoland.org" menu="false" quality="high" wmode="transparent" width="435" height="730" name="chz5rgyi" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
		</object>

 <td valign="top">
 <img src="/img/spacer.gif"  width="10" />
 </td>
  <td valign="top">

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
              <param name="FlashVars" value="p=<?php echo $userdata['money'];?>" />
              <embed src="/img/pp_jauge.swf"
            flashvars="p=<?php echo $userdata['money'];?>"
            menu="false" wmode="transparent" quality="high" width="170" height="200" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object><center>
			Tu as actuellement : <br /><b><?php echo $userdata['money'];?> Pepettes</b>
			
			</center></div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td><img src="/img/ppt_bottom.gif" width="180" height="11"></td>
              </tr>
<?php
}
else
{
?>
  <!-- main content -->
<td valign="top">

 <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>


<table width="456" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
    <td><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="457.6" height="182.7" name="chz5rgyi" align="middle"> 
		<param name="movie" value="/img/header_shop.swf" /> 
		<param name="menu" value="false" /> 
		<param name="quality" value="high" /> 
		<param value="#6090BE" name="bgcolor" /> 
		<param name="wmode" value="transparent" />
		<param value="always" name="allowscriptaccess" /> 
		<param name="FlashVars" /> 
		<embed src="/img/header_shop.swf" menu="false" quality="high" wmode="transparent" width="457.6" height="182.7" name="chz5rgyi" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
</object></td>

  </tr>
  <tr>
    <td width="0" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      
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
	Il faut être connecté pour avoir accès à la boutique

	</center>

	
	</table>
</span></td>
      </tr></td>
    <br />
    <br />
    <div align="center"></div>
    <td width="0" bgcolor="#FFF4D5"></td>

  </tr>
<?php
}
?>
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
</style>
</head>
<?php
include('../bbs/includes/bas.php'); 
?>