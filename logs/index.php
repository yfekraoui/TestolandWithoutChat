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
$title='Logs';
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
  <param name="FlashVars" value="title=Logs" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Logs"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>




   <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/bg_top_petitbleu.gif" width="435" height="11"></td>
              </tr>
              <tr>

                <td background="/img/bg_tile_petitbleu.gif" bgcolor="#DCEAF5">

                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
					<div align="center" class="titrebleu">Les Logs</div>
                      <td>
                         
                          <br /><i><center>C'est quoi les logs ?</i><br /><br />
<b>Les logs sont des fichiers textes qui contiennent une trace de certaines actions sur le tchat ...</b><br /><br />
			<a href="/logs/bacteria/">Les logs de Bacteria sont accessible ici</a></center><br />

                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                                                     <tr>

 

                             </tr>
                                                     
                                                </table>

                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td><img src="/img/bg_bottom_petitbleu.gif" width="435" height="11"></td>

              </tr>
            </table>




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