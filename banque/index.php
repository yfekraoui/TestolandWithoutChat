
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
$title='Ma banque';
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
<table width="630" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left">
					<img src="/img/header_testoz.png" alt="lolol" width="504" />
                </td>
              </tr>
              <tr>
                <td bgcolor="#FFF4D5" align="center">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">

                    <tr>
                      <td style="padding-left: 10px;">
					  <?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter.';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter.';
}
else
{
	$dxb = mysql_query('SELECT times FROM banque WHERE user_id = "'.$userdata['user_id'].'" ORDER BY id DESC LIMIT 1');
	$dxb = mysql_fetch_assoc($dxb);
	$dnb = mysql_query('SELECT COUNT(*) AS nb FROM banque WHERE user_id = "'.$userdata['user_id'].'"');
	$dnb = mysql_fetch_assoc($dnb);
	
	echo '<font color="#9C8541">';
	echo 'Ouvert depuis le : <b> '.date('d/m/Y', $dxb['times']).'</b><br />';
	echo 'Nombre d\'opérations(s) : <b>'.$dnb['nb'].'</b>';
	echo '</font>';
	
					  
					  
					  

}

?> </td>
                    </tr>

                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/shopping/bottom_fringue.gif" width="504" height="11"></td>	
              </tr>
			  
			  <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
			  
			  <tr>
                <td align="left">
					<img src="/img/compte_ppt.png" alt="lolol" width="504" />
                </td>
              </tr>
              <tr>
                <td bgcolor="#ffe490" align="center">
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">

                    <tr>
                      <td>
					 <table cellpadding="3" cellspacing="0" border="0" width="100%">
					
					  <?php
					  if (!isset($userdata['session_logged_in'])) {
						echo 'Il faut se connecter.';
						}
						else if($userdata['username'] == "Anonymous"){
							echo 'Il faut se connecter.';
						}
						else
						{
							if($dnb['nb'] == 0) { 
							echo 'Aucune opération';
							}
							else
							{
					  $i=0;
						$db = mysql_query('SELECT * FROM banque WHERE user_id = "'.$userdata['user_id'].'" ORDER BY id DESC');
						while($dbb = mysql_fetch_assoc($db)) {
							$i++;
							$im = $i%2;
							if($im > 0) { echo '<tr bgcolor="#FDF6D9">'; }
							else { echo '<tr>';}
							echo '
							<td><font color="#987C28">'.date('d/m/Y', $dbb['times']).'<br />'.date('H:i:s', $dbb['times']).'</font></td>
							<td><b><font color="#987C28">'.$dbb['action'].'</font></b></td>
							<td><b><font color="#987C28">'.$dbb['prix'].'</font></b></td>';
							echo "</tr>";
						}
						}
						}
					  ?>
					  </table>
					  
					  </td>
                    </tr>

                  </table>
                </td>
              </tr>
              <tr>
                <td><img src="/img/compte_ppt_bottom.png" width="504" height="11"></td>	
              </tr>
			  
			  <tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
					  
			  

</table>
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
              <param name="FlashVars" value="p=<?php if($userdata['money'] == "" or $userdata['user_id'] == -1)
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?>" />
              <embed src="/img/pp_jauge.swf"
            flashvars="p=<?php if($userdata['money'] == "" or $userdata['user_id'] == -1)
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
<?php if($userdata['money'] == "" or $userdata['user_id'] == -1)
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