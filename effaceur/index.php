
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
$title='Effaceur';
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
		
		
		<?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir se rendre sur le Shopping :P !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter pour pouvoir se rendre sur le Shopping :P !';
}
else //si connecté
{
?>
<table width="468" border="0" cellpadding="0" cellspacing="0"> 
        <tr> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_jon_klr.gif" border="0" width="12" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_jon_klr.gif" border="0" width="444" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_jon_klr.gif" border="0" width="12" height="12"/></td> 
        </tr> 
        <tr bgcolor="#FEF3D7"> 
        
          <td>&nbsp;</td> 
          <td align="center"> 
            <div class='jon_klr'> 
                        <p><img src="http://01static.chapatiz.com/fr/modif_lang/name_header.gif" width="412" height="84" alt="image hname_header.gif"><br/> 
              <span class="chztitre">SOS pseudo moisi<br/>changez de pseudo pour 100 pepettes !  
              ! </span></p> 
            <form method="post" action="effaceurok.php"> 
              <p> <br> 
                Nouveau pseudo : 
                <input type="text" name="newpseudo" />
                <input type="submit" name="Submit" value="OK man"> 
              </p> 
              
            </form> 
            <br class='clean'/> 
            <b>Attention</b>, tu ne peux avoir qu'un seul pseudo à la fois.Si tu possèdes déjà un pseudo et que tu en rachètes un, le nouveau remplacera l'ancien.  </div> 
                        </div> 
          </td> 
          <td>&nbsp;</td> 
          
        </tr> 
        <tr> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_jon_klr.gif" border="0" width="12" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_jon_klr.gif" border="0" width="444" height="12"/></td> 
          <td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_jon_klr.gif" border="0" width="12" height="12"/></td> 
        </tr> 
      </table> 
      
      <!-- end main content --> 
    </td> 
  </tr> 
</table> 

<?php
}
include('../bbs/includes/bas.php'); 
?>