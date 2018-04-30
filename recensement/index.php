
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
		(Les résultats du questionnaire ne pourront être vus que par les créateurs et resteront confidentiels).
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
?>
<td width="80%" align="left"><span class="gen">
<b class="titrebleu">Le Questionnaire !</b>
<br /><br />
<form method="post" action="recensementok.php">

1) Que manque t-il niveau technique sur testoland ? C'est à dire quelque chose que tu voudrais<br /> que les créateurs réalisent ou améliorent ?<br />
<textarea name="r1" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
2) Comment trouves tu la modération de testoland ? Tu voudrais qu'elle soit plus sévère ou plus laxiste ?<br /> As tu un problème avec un modérateur en particulier ?<br />
<textarea name="r2" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
3) Comment trouves tu l'animation de testoland ? <br />
<textarea name="r3" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
4) Comment trouves-tu l'ambiance sur Testoland ? si tu ne la trouve pas bonne, propose nous tes <br />idées pour l'améliorer.<br />
<textarea name="r4" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
5) Que voudrais tu revoir de l'ancien chapatiz pour vraiment te sentir comme sur celui-ci ? <br />
<textarea name="r5" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
6) As tu remarqué un problème quelconque sur Testoland, qu'il faudrait rapidement régler ? <br />
<textarea name="r6" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
7) Trouves tu que les créateurs sont assez à l'écoute des membres ? Si non, sur quels sujets<br /> n'êtes vous pas assez écouté ? <br />
<textarea name="r7" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
8) Voudrais tu voir apparaitre de nouvelles créations sur testoland qui serait différentes de <br /> l'ancien chapatiz ? Si oui, as tu des idées à nous faire part ? <br />
<textarea name="r8" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
9) Quel est ton " point de vue " (avis) sur testoland en général ? <br />
<textarea name="r9" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
10) Selon toi, le <b>Lamasticot</b> est un être supérieur venu de l'au-délà pour dominer notre planète ?<br />
<textarea name="r10" rows="7" cols="90" style="background-color: #FFFFFF; border: 2px ridge #6699CC; color: #FC2698;">
</textarea> 
<br />
<br />
<center><input type="submit" value="Ok, envoyer !" /><center/>
</form>
</td></span>
<?php
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