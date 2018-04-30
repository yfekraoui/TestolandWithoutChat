
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
$title='Groupes';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>
<td valign="top">
<!-- main content -->
<table width="630" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td valign="top">
            <table width="435" border="0" cellpadding="0" cellspacing="0">

            <!-- slot speech -->
              

            <!-- slot pendings on demand -->

            <tr><td><img src="http://01static.chapatiz.com/fr/spacer.gif" width="435" height="11"></td></tr>

            <!-- slot my groups -->
              <tr>

                <td align="left">
					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_blu_ext.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_blu_ext.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_blu_ext.gif" border="0" width="12" height="12"/></td>
					</tr></table>				</td>
              </tr>
              <tr>

                <td bgcolor="#6EBEF0">
                  <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td align="center">
<?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir créer un groupe !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour pouvoir créer un groupe!";
}
else {

$verifx = mysql_query('SELECT COUNT(*) AS mm FROM phpbb_groups WHERE group_moderator = "'.$userdata['user_id'].'"');
		$verif = mysql_fetch_assoc($verifx);
		$mm = $verif['mm'];
		if($mm > 0)
		{
		?>
		<b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						Tu as déjà créer un groupe !
                      </div> 
          <?php
		  }
		 else
		 {

?>
                       <b class="titrebleu">Sélectionne le blason de ton groupe ! </b>
                       <br />
                       <br />
					   <b>Attention ! Tu ne peux pas changer une fois le groupe créé. Tu ne pourras pas dire que tu n'as pas été prévenu ! </b>
					   <br /><br /><br />
					   <form action="create_name.php" method="POST">
				      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
                        codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                        width="180" height="200" id="blason_ed" align="middle">
                        <param name="allowScriptAccess" value="always" />
                        <param name="movie" value="blason_ed.swf" />
                        <param name="quality" value="high" />
                        <param name="menu" value="false" />
                        <param name="wmode" value="transparent" />
                        <param name="bgcolor" value="#d7e7f4" />
                        <param name="FlashVars" value="" />
                        <embed src="blason_ed.swf" quality="high"
                    bgcolor="#d7e7f4" width="180" height="200"
                    name="blason_ed" align="middle"
                    menu="false" wmode="transparent"
                    flashvars=""
                    allowscriptaccess="always" type="application/x-shockwave-flash"
                    pluginspage="http://www.macromedia.com/go/getflashplayer" />                      
</object></form>
<?php
} 
}
?>
                      <br />
                           <table width="100%" cellspacing="0" cellpadding="1">
                              <tr>
                                  <td align="center"></td>
                                  <td width="1%">&nbsp;</td>
                              </tr>
							  
							 
                                                            </table>

                    
                     
                
				

                                                      </td>
                    </tr>
                  </table>               </td>
              </tr>
              <tr>
                <td>

					<table width="468" border="0" cellpadding="0" cellspacing="0"><tr>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_blu_ext.gif" border="0" width="12" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_blu_ext.gif" border="0" width="444" height="12"/></td>
					<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_blu_ext.gif" border="0" width="12" height="12"/></td>
					</tr></table>				</td>
              </tr>

            <!-- slot my groups -->
            </table>
      </td>





       <?php include('right.php');

include('../bbs/includes/bas.php');  
	   ?>
        </tr>
</table>
