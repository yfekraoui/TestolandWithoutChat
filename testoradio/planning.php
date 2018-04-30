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
$title='Testoradio - Planning';
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

                          <span class="titrebleu">Testoradio - Planning !!</span><br /> <br />
                            
                            <br> 
                            <br> 
<table border="1" bgcolor="#FFFFFF">
 <tr>
   <td width="5" height="10"></td>
  <td width="5" height="10"><center><b>Lundi</b></center></td>
  <td width="5" height="10"><center><b>Mardi</b></center></td>
    <td width="5" height="10"><center><b>Mercredi</b></center></td>
	  <td width="5" height="10"><center><b>Jeudi</b></center></td>
	    <td width="5" height="10"><center><b>Vendredi</b></center></td>
		  <td width="5" height="10"><center><b>Samedi</b></center></td>
		    <td width="5" height="10"><center><b>Dimanche</b></center></td>
			
			
				 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>9h/10h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100"  ><center><b></b></center></td>
      <td height="100" width="100"><center><b></b></center></td>
 </tr>
			
			
			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>10h/11h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" bgcolor="#A00BE1"><center><b>Ptidark : Heure'Zik</b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 
 
 
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>11h/12h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 
 
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>12h/13h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>13h/14h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>14h/15h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="100" width="100" ><center><b>15h/16h</b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
 <td height="100" width="100"  bgcolor="#E81414"><center><b>Kinder : Cartoon' Quizz</b></center></td>
	  	  <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>16h/17h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>17h/18h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>18h/19h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" bgcolor="#E81414"><center><b>Kinder : Le Super' Clash !</b></center></td>
  <td height="100" width="100" bgcolor="#29C3AE" ><center><b>Yhoan : Chaise'Musical</b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" bgcolor="#29C3AE" ><center><b>Yhoan : 100% infos testoland  </b></center></td>
     <td height="100" width="100" bgcolor="#A00BE1" ><center><b>PtiDark : Trouv' musik</b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 			 </tr><tr  bgcolor="#FFFFFF">
  <td height="10"><center><b>20h/21h</b></center></td>
  <td height="100" width="100" ><center><b></b></center></td>
    <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
	      <td height="100" width="100" ><center><b></b></center></td>
	  <td height="100" width="100" ><center><b></b></center></td>
   <td height="100" width="100" ><center><b></b></center></td>
      <td height="100" width="100" ><center><b></b></center></td>
 </tr>
 
</table>


							
							
							
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
<?php
include('../bbs/includes/bas.php'); 
?>