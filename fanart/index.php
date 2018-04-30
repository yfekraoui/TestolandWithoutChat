
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
$title='Fan art';
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

 <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Fan art" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Fan art"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<table width="500" border="0" cellpadding="0" cellspacing="0">
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
	
        <td width="45%" align="left"><span>
		<div  style="overflow:auto;height:500px;">
		<table>
<?php
                    
	if(isset($_GET['f']))
	{
		$fx = mysql_real_escape_string(htmlspecialchars($_GET['f']));
		$f = (int)$fx;
		$RDF = mysql_query('SELECT COUNT(*) AS ne FROM fan_art WHERE id = "'.$f.'"');
		$DF = mysql_fetch_assoc($RDF);
		$ne = $DF['ne'];
		$donee = mysql_query('SELECT * FROM fan_art WHERE id = "'.$f.'"');
		$done = mysql_fetch_assoc($donee);
		
		if($ne > 0)
		{
			echo '<center>( <b>'.$done['descrip'].'</b> )<br /><br /> <img src="/img/fan_art/'.$f.'.png" alt="image('.$f.')" border="1" style="border:2px solid #726338" /></center>';
		}
		else
		{
			echo 'Erreur cette image n\'existe pas';
		}
	}
	else
	{
		
		echo '<center>';
		$i = 0;
		$l1x = mysql_query("SELECT * FROM fan_art");
		while ($l1 = mysql_fetch_array($l1x))
		{ 
			$i++;
			if($i == 1 || $i == 5 || $i == 9 || $i == 13 || $i == 17 || $i == 21 || $i == 25 || $i == 29 || $i == 33 || $i == 37 || $i == 41 || $i == 45 || $i == 49 || $i == 53 || $i == 57) 
			{
			echo '<tr>';
			echo '<td><img src="/img/spacer.gif" /></td>';
			}
		?>
			<td>
			<a href="?f=<?php echo $l1['id']?>">
			<img src="/img/fan_art/<?php echo $l1['id'];?>.png" border="1" style="border:2px solid #726338" width="100" height="100" /><br />
			</a>
			<center>( <b><?php echo $l1['descrip']; ?></b> )</center>
			
			</td>
		<?php
			if($i == 4 || $i == 8 || $i == 12 || $i == 16 || $i == 20 || $i == 24 || $i == 28 || $i == 32 || $i == 36 || $i == 40 || $i == 44 || $i == 48 || $i == 52 || $i == 56 || $i == 60)
			{
			echo '</tr>';
			echo '<tr><td><img src="/img/spacer.gif" /></td></tr>';
			}
		}
		
		
		echo '</center>';
		
	}
	
?>
</table>
</div>

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
</form>
<td>
<img src="/img/spacer.gif" width="5" />
</td>
<td valign="top"> 
          <table width="168" border="0" cellpadding="0" cellspacing="0"> 
              <tr> 
                <td align="left"><img src="http://01static.chapatiz.com/fr/spacer.gif" width="12" height="19"><br> 
                  <img src="/img/ensavoirplus_top.gif" width="168" height="37"></td> 
              </tr> 
              <tr> 
                <td valign="top" bgcolor="#A4C4E3"> 
                <table width="168"  border="0" cellspacing="0" cellpadding="5"> 
                    <tr> 
                      <td valign="top"> 
                      <div align="center"> 
                       <b>Comment fais-je pour publier mes oeuvres d'art?</b> 
                      </div> 
                      <br /> 
 
                      <br /> 
                      <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/> 
                      Aller sur le BBS <http://www.chapatiz.com/bbs/> .
                      <br /> 
 
                      <br /> 
                      <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/> 
                      Tu peux poster tes oeuvres d'art <a href="/bbs/bbs.php?f=11">ici</a>.                      <br /> 
 
                      <br /> 
                      <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/> 
                      Si tu as un problème, n'hésite pas à le poster sur les forums.
                      <br /> 
					  
                      <br /> 
                      <img src="http://01static.chapatiz.com/fr/hp/puce_slot_small.png" align="absmiddle" border="0"/> 
                      Tu peux aussi créer des véritables oeuvres d'art ! Télécharger :<br/> 
					  <a href="http://01static.chapatiz.com/fr/goodies/modele_1024x768.jpg">Jpeg 1024x768</a>, <a href="http://01static.chapatiz.com/fr/goodies/modele_A4rvb.jpg">Format A4</a>, <a href="http://01static.chapatiz.com/fr/goodies/modele.fla">Fichier flash</a>  
                      <br /> 
                      </td> 
                    </tr> 
                  </table> 
                </td> 
              </tr> 
              <tr> 
                <td><img src="http://01static.chapatiz.com/fr/coldroite_bottom.gif" width="168" height="11"></td> 
              </tr> 
            </table> 
          </td> 
			
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
<?php
include('../bbs/includes/bas.php');  
?>