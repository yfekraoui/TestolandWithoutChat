
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
$title='Recensement';
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

 <table border="0" cellspacing="0" cellpadding="0" class="mainTable"> 

<tr> 

<td valign="top"> 
<!-- main content --> 
 <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Grand recensement du testoland" />
  <embed src="/img/subtop2.swf"
            flashvars="title=Grand recensement du testoland"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<table width="620" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td width="45%" align="left"><span class="gen">
		Le Testoking, dans sa volonté de mieux connaitre ses sujets, vous propose ce questionnaire. Mais en fait,
		qui êtes vous vraiment ?<br />
		Qu'est ce qui vous ferais plaisir pour l'évolution de Testoland ?<br />
		<b>Les participants au Grand Recensement gagnent automatiquement 100 pépettes ! Alors n'hésitez plus !</b><br />
		(Les résultats du questionnaire ne pourront être vue que par les créateurs et resteront confidentiels).
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
		
	<tr><td><img src="/img/spacer.gif" width="435" height="10"></td></tr>
              <!-- MajMiN --> 
              <tr> 
                <td align="left"><img src="/img/bg_top_grandbleu.gif" width="620" height="11"></td> 
              </tr> 
              <tr> 
                <td background="/img/bg_tile_grandbleu.gif" bgcolor="#DCEAF5"> 
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5"> 
                    <tr> 
                     
					  <?php
if (!isset($userdata['session_logged_in'])) {
	echo '<td width="80%" align="left"><span class="gen">Il faut se connecter pour pouvoir participer au recensement! !</td>';
}
else if($userdata['username'] == "Anonymous"){
	echo '<td width="80%" align="left"><span class="gen">Il faut être connecté pour participer au recensement!</td>';
}
else {
if($userdata['recensement'] == 0) {

	$r1 = mysql_real_escape_string(htmlspecialchars($_POST['r1']));
	$r2 = mysql_real_escape_string(htmlspecialchars($_POST['r2']));
	$r3 = mysql_real_escape_string(htmlspecialchars($_POST['r3']));
	$r4 = mysql_real_escape_string(htmlspecialchars($_POST['r4']));
	$r5 = mysql_real_escape_string(htmlspecialchars($_POST['r5']));
	$r6 = mysql_real_escape_string(htmlspecialchars($_POST['r6']));
	$r7 = mysql_real_escape_string(htmlspecialchars($_POST['r7']));
	$r8 = mysql_real_escape_string(htmlspecialchars($_POST['r8']));
	$r9 = mysql_real_escape_string(htmlspecialchars($_POST['r9']));
	$r10 = mysql_real_escape_string(htmlspecialchars($_POST['r10']));
	if(!empty($r1) && !empty($r2) && !empty($r3) && !empty($r4) && !empty($r5) && !empty($r6) && !empty($r7) && !empty($r8) && !empty($r9) && !empty($r10))
	{
		mysql_query('INSERT INTO recensement VALUES ("'.$userdata['user_id'].'", "'.$r1.'", "'.$r2.'", "'.$r3.'", "'.$r4.'", "'.$r5.'", "'.$r6.'", "'.$r7.'", "'.$r8.'", "'.$r9.'", "'.$r10.'")');
		$money = $userdata['money'] + 100;
		mysql_query('UPDATE phpbb_users SET money = "'.$money.'", recensement = "1" WHERE user_id = "'.$userdata['user_id'].'"');
		echo '<td width="80%" align="left"><span class="gen">Ton questionnaire est bien enregistré ! <br /> Merci de ta participation, tu remporte 100 pépettes.</td>';
	}
	else 
	{
		echo '<td width="80%" align="left"><span class="gen">Erreur :@ : Merci de remplir tout les champs. <a href="/recensement/">Retour</a>.</td>';
	}
} 
else {
echo '<td width="80%" align="left"><span class="gen">Désolé tu ne peux participer qu\'une seule fois au recensement !<br /> Merci de ta participation.</td>';
}

}




 ?>
                          
						
                    </tr> 
                  </table> 
                </td> 
              </tr> 
              <tr> 
                <td><img src="/img/bg_bottom_grandbleu.gif" width="620" height="11"></td> 
              </tr> 
 
            </table> 
          </td> 
<?php
include('../bbs/includes/bas.php'); 
?>