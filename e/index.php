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
$title='Erreur !';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($host,$name,$password);
mysql_select_db($db);
$byby = false;
?>
<style type="text/css">
body
{
background:url(/img/bg_fix.gif);
}
<?php 
if(!isset($_GET['r'])){ $message = 'Erreur, le serveur de tchat n\'est pas actif.'; }

elseif(isset($_GET['r'])){
 $e=$_GET['r'];
			if($e=='comdMod') {$message = 'Il y a trop de connecté au tchat, reviens plus tard :( !!';}
			else if($e=='bod') {$message = '<span style="font: normal 13px Verdana;color: #970B0B;">Tu viens d\'être renvoyé par le serveur à cause d\'une surcharge de requête. <br /> Pour te reconnecter <a href="/tchat/">Clique ici !</a></span>';}
			else if($e=='CreaMod') {
				$usernamee= mysql_real_escape_string(htmlspecialchars($_GET['name']));
				$dm = mysql_query('SELECT ban FROM phpbb_users WHERE username = "'.$usernamee.'"');
				$dm = mysql_fetch_assoc($dm);
				if($dm['ban'] == 1) {$byby = true;}
				else { $message = 'Erreur inconnue ...'; }
			}
			else if($e=='am') {$message = 'C\'est pas bien ArtMoney ! Les créateurs sont prévenu !';}
			else { $message = 'Erreur, le serveur de tchat n\'est pas actif.';  }
}
					  
					   ?>
</style>
</head>

<body>
<?php 
if($byby) {
			$usernamee= mysql_real_escape_string(htmlspecialchars($_GET['name']));
			$dm = mysql_query('SELECT ban, ban_P, ban_D, user_id, avatar_design FROM phpbb_users WHERE username = "'.$usernamee.'"');
			$dm = mysql_fetch_assoc($dm);
			if($dm['ban'] == 1) {
				$byby = true;
				if($dm['ban_P'] > 0) {
					$tb = $dm['ban_P'] * 3600;
					$trb = $tb + time();
					$rqt1 = mysql_query('UPDATE phpbb_users SET ban_D = "'.$trb.'" WHERE user_id = "'.$dm['user_id'].'"');
					$rqt2 = mysql_query('UPDATE phpbb_users SET ban_P = "0" WHERE user_id = "'.$dm['user_id'].'"');	
				}
				elseif($dm['ban_D'] > 0 && $dm['ban_P'] == 0) {
					$tb = $dm['ban_D'] - time();
				}
			}
			if(isset($_GET['tb'])) {
				$byby = true;
				$tb = $_GET['tb'];
			}
?>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="900" height="550" id="ban" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="/tchat/ban.swf?ad=<?php echo $dm['avatar_design'];?>&t=<?php echo $tb;?>" />
<param name="quality" value="high" />
<param name="bgcolor" value="#6699cc" />
<embed src="/tchat/ban.swf?ad=<?php echo $dm['avatar_design'];?>&t=<?php echo $tb;?>" quality="high" bgcolor="#6699cc" width="900" height="550" name="~ban" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<?php
}
else {
?>
<div align="center">	<table class="mainTable" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td align="center" valign="top"> 
             <table width="468" border="0" cellpadding="0" cellspacing="0">
              
              <tr><td>
                
				
				<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://img.chapatiz.com/e/er_hg.gif" width="14" height="14"></td>

					<td><img src="http://img.chapatiz.com/e/er_h.gif" width="440" height="14"></td>
					<td><img src="http://img.chapatiz.com/e/er_hd.gif" width="14" height="14"></td>
				</tr></table>
			  
			  </td></tr>
              <tr><td bgcolor="#FF5454" align="center">
                  
				  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr><td width="80" align="center" valign="center">
                          <img src="http://img.chapatiz.com/e/er_pic.gif"/><br />
                      </td>
<td><b>
<?php echo $message; ?>
					  
					  </b>
						</td>
                    </tr>
                  </table>
                
				</td>
              </tr>
              <tr><td>
			  
			  <table width="468" border="0" cellpadding="0" cellspacing="0"><tr>

              
				<td><img src="http://img.chapatiz.com/e/er_bg.gif" width="14" height="18"></td>
				<td><img src="http://img.chapatiz.com/e/er_b.gif" width="440" height="18"></td>
				<td><img src="http://img.chapatiz.com/e/er_bd.gif" width="14" height="18"></td>
              </tr></table>
			  
			  </td></tr>
            </table>
			
			
			 
          </td>
        </tr>
		
		<!--Slot Rulz-->

        <tr>
          <td align="center" valign="center"> 
            
			
						
			
      
    </td>
</tr>
</table>
</div>
<?php
} 
?>

</body>
</html>
