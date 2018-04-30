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
$title='Testoradio';
$css='../css/style2.css';
$include='../bbs/includes/';
session_start();
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu




function random2($car2) {
$string2 = "";
$chaine2 = "0123456789ABCDEFGHIJKLMNOPRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
srand((double)microtime()*1000000);
for($i=0; $i<$car2; $i++) {
$string2 .= $chaine2[rand()%strlen($chaine2)];
}
return $string2;
}
?>

  <!-- main content -->
<td valign="top"><table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

 <table border="0" cellspacing="0" cellpadding="0" class="mainTable"> 
<tr> 
<td valign="top"> 
</td> 
<td valign="top"> 
<!-- main content --> 
<table width="630" border="0" cellspacing="0" cellpadding="5"> 
        <tr> 
          <td valign="top"> 
            <table width="435" border="0" cellpadding="0" cellspacing="0"> 
              <!-- MajMiN --> 
              <tr> 
                <td align="left"><img src="/img/bg_top_grandbleu.gif" width="620" height="11"></td> 
              </tr> 
              <tr> 
                <td background="/img/bg_tile_grandbleu.gif" bgcolor="#DCEAF5"> 
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5"> 
                    <tr> 
                      <td align="center"> 

                          <span class="titrebleu">Testoradio !!</span><br /> <br />
                            
                            <br> 
                            <br> 

							<b>Vous l'attendiez depuis un bon moment ?<br /> Alors je vous annonce que Lundi 28 février la testoradio sera mise en ligne.<br /> Le planning des radio'z est disponible sur le <a href="http://testoland.com/bbs/bbs.php?f=64">bbs testoradio</a>.<br />
						<br />
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="80" height="40" align="middle">

							<param name="movie" value="http://istreaming.fr/webradio/src/webplayer.swf?fichier=http://server2.istreaming.fr:8173" />
							<param name="quality" value="high" />
							<param name="align" value="middle" />					
						  <param name="wmode" value="transparent" />
	
							<embed src="http://istreaming.fr/webradio/src/webplayer.swf?fichier=http://server2.istreaming.fr:8173" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="80" height="40" align="middle"></embed>
						</object>
<br /><br />
<?php
/*
$fp = fsockopen('server2.istreaming.fr', 8173, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br>\n";
} else {
$on = false;
    fputs ($fp, "GET / / HTTP/1.0\r\nUser-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)\r\nHost: 213.186.33.19:8000\r\n\r\n");
    while (!feof($fp)) {
        $line = fgets ($fp,21048);
	if(@eregi( "<font class=default>Current Song: </font></td><td><font class=default><b>(.*)</b></td></tr></table>", $line, $regs )) {
    @eregi( "<font class=default>Current Song: </font></td><td><font class=default><b>(.*)</b></td></tr></table>", $line, $regs );
    $currentsong = htmlspecialchars($regs[1]);
    $exp = explode("|",$currentsong);
    if($exp[0] == "")
    {
$currentsong = htmlspecialchars($regs[1]);

    }
else { @$currentsong = $exp[1];
$animateur = $exp[0];
}
$on = true;
}
     }
fclose($fp);
}
if($on==true)
echo "<strong>".@$animateur."</strong><br>".$currentsong;
else
echo "<strong>Radio Fermer Aucun animateur</strong>";
*/
?>
<SCRIPT type="text/javascript"> 
		new Ajax.PeriodicalUpdater('title', 'src/title.php?server=server2.istreaming.fr&port=8173', {frequency: 20});
	</SCRIPT> 
 
	<SCRIPT type="text/javascript"> 
		new Ajax.PeriodicalUpdater('audit', 'src/audit.php?server=server2.istreaming.fr&port=8173', {frequency: 50});
	</SCRIPT> 
 
	<SCRIPT type="text/javascript"> 
		new Ajax.PeriodicalUpdater('radio_name', 'src/radio_name.php?server=server2.istreaming.fr&port=8173', {frequency: 500});
	</SCRIPT> 

<br />
<a href="http://istreaming.fr/webradio/index.php?server=server2.istreaming.fr&port=8173&style=2">Envie d'écouter la radio ?</a>
</b>

						</td> 
                    </tr> 
                  </table> 
                </td> 
              </tr> 
              <tr> 
                <td><img src="/img/bg_bottom_grandbleu.gif" width="620" height="11"></td> 
              </tr> 
 
 
 
 
 
 
            </table> 
          </td> 
		  


<!-- contenu du slot niouz-->



 

		  
		  
<?php
include('../bbs/includes/bas.php'); 
?>