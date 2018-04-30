
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
					   $name = mysql_real_escape_string(htmlspecialchars($_POST['grp_name']));
					   $blason = mysql_real_escape_string(htmlspecialchars($_POST['grp_blason']));
					   
					   $nbc_name = strlen($name);
					   $rexopied = mysql_query('SELECT COUNT(*) AS nbn FROM phpbb_groups WHERE group_name = "'.$name.'"');
					   $rexgd = mysql_fetch_assoc($rexopied);
					   $nbn = $rexgd['nbn'];
					   
					   if($nbc_name > 50)
					   {
					   ?>
					   <b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						Il y a trop de caracter dans le nom de ton groupe !
                      </div> 
                      
					  
					   <?php
					   }
					   else if($nbc_name <= 5)
					   {
					   ?>
					   <b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						Le nom de ton groupe doit contenir au moins 5 lettres !
                      </div> 
					   <?php
					   }
					   else if($nbn > 0)
					   {
					   ?>
					    <b class="titrebleu">Erreur !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
						Ce nom de groupe a déjà été pris !
                      </div> 
					   <?php
					   }
					   else
					   {
					   
?>	
                       <b class="titrebleu">Assure toi que tout est correct !</b>
                       <br />
                       <br />
					   				   
					   <div align="center"> 
 
                      Ton nom de groupe: <b> <?php echo stripslashes($name); ?></b><br />
						Emblême de ton groupe: <br /> 
 <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
                              codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                              width="102" height="89" id="blason" align="middle">
                          <param name="allowScriptAccess" value="always" />
                          <param name="movie" value="http://01static.chapatiz.com/fr/swf/blason.swf" />
                          <param name="menu" value="false" />
                          <param name="quality" value="high" />
                          <param name="bgcolor" value="#4a89ab" />

                          <param name="wmode" value="transparent" />
                          <param name="FlashVars" value="bd=4ga70&" />
                              <embed src="http://01static.chapatiz.com/fr/swf/blason.swf" menu="false"
                              quality="high" bgcolor="#4a89ab"
                              width="102" height="89" name="blason"
                              align="middle" allowScriptAccess="always"
                              flashvars="bd=<?php echo $blason; ?>&"
                              type="application/x-shockwave-flash"
                              wmode="transparent"
                              pluginspage="http://www.macromedia.com/go/getflashplayer" />
                      </object>
                      </div> 
                      
					  
					
					  <br /><br />
					  <img src="/img/annuaire/puce_slot_small.png" alt="puce" />&nbsp;<a href="create_name.php?blason=<?php echo $blason; ?>">Changer de nom.</a><br />
					  <img src="/img/annuaire/puce_slot_small.png" alt="puce" />&nbsp;<a href="create_blason.php">Changer l'emblême.</a>
					  <br />
					  <br />
					  <img src="/img/annuaire/puce_slot_small.png" alt="puce" />&nbsp;<a href="create_confirmok.php?blason=<?php echo $blason; ?>&amp;name=<?php echo $name;?>">Ok, créer le groupe ! </a>
				<?php
}
}
}
?>				
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
