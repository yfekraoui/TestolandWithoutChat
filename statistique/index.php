
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
$title='Stats !';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu


function barre($n) {
	for($i=0;$i<$n;$i++)
	{
		$barre.= '<img src="/img/stat.png" alt="stat" border="0" />';
	}
	return $barre;
}

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
  <param name="FlashVars" value="title=Statistique !" />
  <embed src="/img/subtop2.swf"
            flashvars="title=Statistique !"
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
		<?php 
		$ds = mysql_query('SELECT * FROM stat');
		$ds = mysql_fetch_assoc($ds);
		?>
		 <b># Record du nombre de connecté : </b><font color="#F40B51"><b><?php echo $ds['record']; ?></b></font><br />
		 <br />
		 <br />
		 <b># Statistique de la semaine :</b> <br />
		 <table style="border: 1px ridge #F40B51;">
		  <tr><td style="border: 1px ridge #F40B51;"><b>Jour</b></td><td style="border: 1px ridge #F40B51;"><b>Nbr</b></td><td style="border: 1px ridge #F40B51;"><b><center>Bâton</center></b></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Lundi</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['lundi'];?></td><td><?php echo barre($ds['lundi']); ?></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Mardi</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['mardi'];?></td><td><?php echo barre($ds['mardi']); ?></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Mercredi</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['mercredi'];?></td><td><?php echo barre($ds['mercredi']); ?></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Jeudi</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['jeudi'];?></td><td><?php echo barre($ds['jeudi']); ?></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Vendredi</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['vendredi'];?></td><td><?php echo barre($ds['vendredi']); ?></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Samedi</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['samedi'];?></td><td><?php echo barre($ds['samedi']); ?></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Dimanche</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['dimanche'];?></td><td><?php echo barre($ds['dimanche']); ?></td></tr> 
		 </table>
		 [Record du nombre de connecté dans la journée]
		 <br />
		 <br />
		 <b># Statistique de l'année par mois : </b><br />
		 <table style="border: 1px ridge #F40B51;">
		 <tr><td style="border: 1px ridge #F40B51;"><b>Mois</b></td><td style="border: 1px ridge #F40B51;"><b>Nbr</b></td><td style="border: 1px ridge #F40B51;"><b><center>Bâton</center></b></td></tr>
		 <tr><td style="border: 1px ridge #F40B51;">Janvier</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['janvier'];?></td><td><?php echo barre($ds['janvier']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Février</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['fevrier'];?></td><td><?php echo barre($ds['fevrier']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Mars</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['mars'];?></td><td><?php echo barre($ds['mars']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Avril</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['avril'];?></td><td><?php echo barre($ds['avril']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Mai</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['mai'];?></td><td><?php echo barre($ds['mai']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Juin</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['juib'];?></td><td><?php echo barre($ds['juin']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Juillet</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['juillet'];?></td><td><?php echo barre($ds['juillet']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Août</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['aout'];?></td><td><?php echo barre($ds['aout']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Septembre</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['septembre'];?></td><td><?php echo barre($ds['septembre']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Octobre</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['octobre'];?></td><td><?php echo barre($ds['octobre']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Novembre</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['novembre'];?></td><td><?php echo barre($ds['novembre']);?></td></tr>
		<tr><td style="border: 1px ridge #F40B51;">Décembre</td><td style="border: 1px ridge #F40B51;"><?php echo $ds['decembre'];?></td><td><?php echo barre($ds['decembre']);?></td></tr>	
		</table>
		[Record du nombre de connecté dans le mois]<br /><br />
		<b># Statistique du forum : </b><br /><br />
		<?php
		$MessFo = mysql_query("SELECT COUNT(*) AS nbMessFo FROM phpbb_posts");
		$NbFo = mysql_fetch_assoc($MessFo);
		$NbTo = mysql_query("SELECT COUNT(*) AS nbTopicF FROM phpbb_topics");
		$Nbtopics = mysql_fetch_assoc($NbTo);
		?>
		<b>Message total sur le forum :</b> <font color="#F40B51"><b><?php echo $NbFo['nbMessFo']; ?></b></font> 
		<br />
		<b>Nombre de topic au total :</b> <font color="#F40B51"><b><?php echo $Nbtopics['nbTopicF']; ?></b></font> 
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
		
	
          </td> 
<?php
include('../bbs/includes/bas.php'); 
?>