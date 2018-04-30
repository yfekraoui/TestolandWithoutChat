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
$title='Evenements';
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
  <param name="FlashVars" value="title=Evenements" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Evenements"
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
					<div align="center" class="titrebleu">Les Evenements</div>
                      <td>
                         
                          <br />

                       <table width='100%' border='0' cellpadding="3" cellspacing="0">
                                                     <tr>

 <?php
 
if(!empty($_GET['id'])) 
{


$id = (int)$_GET['id'];


		$dancefleure = mysql_query('SELECT * FROM events WHERE id = "'.$id.'"');
		$yeahh = mysql_fetch_assoc($dancefleure);
	     if(mysql_num_rows($dancefleure) != 1)
		 {
		 ?>
		<center><br />Evenement inexistant !<br /></center><br /><br />
		   <a href="/events/">Retour aux évènements</a><br />
		 <?php
		 }
	else 
	{
		?>
  <div align="center" class="titrebleu"><?php echo $yeahh['titre']; ?></div><br /><br />

   <center><p><?php echo $yeahh['description']; ?></p></center>
  <br /><br />
  <div align="right">
  Le <?php echo date('d/m/Y à H\hi', $yeahh['timestamp']);?></div>
  <br /><br />
  <a href="/events/">Retour aux évènements</a>
  
<?php
}
}
else 
	{
		$neko = mysql_query('SELECT * FROM events WHERE visible = "1"');
		if(mysql_num_rows($neko) < 1)
{
echo '<br /><br /><center><b>Aucun évènement enregistré.</b></center><br /><br />';
} 
else 
{ 
		while($ark = mysql_fetch_assoc($neko)) {
			
			echo '<center>• <a href="?id='.$ark['id'].'">'.$ark['titre'].'</a></center>';
		}
	}
	
	}
?>
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