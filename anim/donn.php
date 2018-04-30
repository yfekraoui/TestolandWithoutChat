
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
$title='Animateur';
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
$espacer = '<center><b><font style="color:rgb(255,47,151);">••••••••••••••••••••••••••••••••••••••••••••••••••••••<br></font></b>';
echo $espacer;

?>
<form method="post" action="animok.php">
<b>Donner des testoz :</b> <br /><br />
Pseudo du membre : <input type="text" name="id" size="3" /><br />
Don de testoz : <input type="text" name="don" /><br />
<input type="submit" value="Donner !" />
<br /><br />
</form>
<?php echo $espacer; ?>
<br />

<br />
<?php echo $espacer; ?>
<table width='100%' border='0' cellpadding="3" cellspacing="0">
                           <tr>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Donneur</b></td>

                             <td valign="top" align="center" nowrap="nowrap"><b>Mid</b></td>
                             <td valign="top" width="1%" align="center" nowrap="nowrap"><b>Don</b></td>
                             <td valign="top" align="center" nowrap="nowrap"><b>Date</b></td>
                           </tr>
						   <tr>____________________________________________________________</tr>
<?php
$i = 0;
$sql = 'SELECT * FROM don_anim'; 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
while($data = mysql_fetch_assoc($req)) 
	{ 		
		$i++;
		if($i == "1" OR $i == "3" OR $i == "5" OR $i == "7" OR $i == "9" OR $i == "11" OR $i == "13" OR $i == "15" OR $i == "17" OR $i == "19" OR $i == "21" OR $i == "23" OR $i == "25" OR $i == "27" OR $i == "29" OR $i == "31" OR $i == "33" OR $i == "35" OR $i == "37" OR $i == "39" OR $i == "41" OR $i == "43" OR $i == "45" OR $i == "47" OR $i == "49" OR $i == "51")
		{
			echo '<tr bgcolor=#FED678>';
		}
		else
		{
			echo '<tr>';
		}	
		
		$ulz = mysql_query('SELECT username FROM phpbb_users WHERE user_id = "'.$data['user_id'].'"');
		$ulz = mysql_fetch_assoc($ulz);
		$olz = mysql_query('SELECT username FROM phpbb_users WHERE user_id = "'.$data['don_id'].'"');
		$olz = mysql_fetch_assoc($olz);
?>


<td align="center" valign="top" ><b><?php echo $ulz['username']; ?><b></td>
<td align="center" valign="top" ><a href="/annuaire/?mid=<?php echo $data['don_id']; ?>"><?php echo $olz['username']; ?></a></td>
<td align="center" valign="top" ><b><?php echo $data['don_some'].'P'; ?></b></td>
<td align="center" valign="top" nowrap="nowrap"><?php echo date('d/m/Y à H\hi', $data['timestamp']);?></td></tr>
	<?php
	
	} ?>


                           </tr>
                      </table>
					  
					  
					  
<?php

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