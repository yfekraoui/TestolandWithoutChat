
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
$title='Orkin Vs XtraTor !!';
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
 <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="504" height="240" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="/img/o_vs_x.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <embed src="/img/o_vs_x.swf" menu="false" wmode="transparent" quality="high" width="504" height="240" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<table width="504" border="0" cellpadding="0" cellspacing="0"> 
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
        <td width="45%" align="left"> 
		<span class="gen">
		<center>
		<?php
		if (!isset($userdata['session_logged_in'])) {
				echo 'Il faut se connecter pour pouvoir choisir son armée';
			}
			else if($userdata['username'] == "Anonymous"){
				echo "Il faut être connecté pour choisir son armée !";
			}
			else {
			if(isset($_GET['clan']) && !empty($_GET['clan']))
			{
				$clan = (int)$_GET['clan'];
				if($userdata['clan'] != "orkin" && $userdata['clan'] != "xtrator") {
					if($clan == 1) {
						mysql_query('UPDATE phpbb_users SET clan = "orkin" WHERE user_id = "'.$userdata['user_id'].'"');
						echo "Tu fais maintenant partie de l'armée de <b>Orkin</b> !! <br /><br />";
					}
					else if($clan == 2) {
						mysql_query('UPDATE phpbb_users SET clan = "xtrator" WHERE user_id = "'.$userdata['user_id'].'"');
						echo "Tu fais maintenant partie de l'armée de <b>XtraTor</b> !! <br /><br />";
					}
					else {
						echo "Erreur : Attribut invalide.<br /><br />";
					}
				}
				else {
					echo 'Erreur : Tu fais déjà partie de l\'armée de <b>'.$userdata['clan'].'</b>.<br /><br />';
				}
			}
			else
			{
			?>
				
				<?php 
				if($userdata['clan'] != "orkin" && $userdata['clan'] != "xtrator") {
				?>
				<span class="titrebeige">Choisi ton clan !</span><br /><br />
				<a href="?clan=1">Je veux faire partie de l'armée de Orkin !</a><br />
				<a href="?clan=2">Je veux faire partie de l'armée de XtraTor !</a><br />
				
				<?php
				}
				else
				{
					echo '<span class="titrebeige">Tu fais partie de l\'armée de '.$userdata['clan'].'</span><br /><br />';
				}
			}
		}
		?>
		<font style="color:rgb(58,179,243);">••••••••••••••••••••••••••••••••••••••••••••••••••</font><br /><br />
		<span class="titrebeige">Score :</span><br /><br />
		<?php
			$sco = mysql_query('SELECT * FROM event');
			$sco = mysql_fetch_assoc($sco);
			?>
		<b>Orkin : <font color="#0099FF" size="20"><?php echo $sco['orkin']; ?></font><img src="/img/spacer.gif" height="1" width="40" />XtraTor : <font color="#80F40B" size="20"><?php echo $sco['xtrator']; ?></font></b>
		<font style="color:rgb(58,179,243);">••••••••••••••••••••••••••••••••••••••••••••••••••</font><br /><br />
		<span class="titrebeige">Aura :</span><br /><br />
		<?php if($userdata['clan'] == "orkin") {
				$ar = '<a href="/account/aura.php?value=ork">Mettre mon aura Orkin</a><br /><a href="/account/aura.php?value=r">Enlever mon aura</a><br />';
			}
			else if($userdata['clan'] == "xtrator"){
				$ar = '<a href="/account/aura.php?value=xtra">Mettre mon aura XtraTor</a><br /><a href="/account/aura.php?value=r">Enlever mon aura</a><br />';
		}
		echo $ar;
		?>
		
		<font style="color:rgb(58,179,243);">••••••••••••••••••••••••••••••••••••••••••••••••••</font><br /><br />
		<span class="titrebeige">Liste des armées :</span><br /><br />
		
		<table>
		<tr>
		
		<td valign="top" align="top">
		<table>
		<tr><td><b>Armée de Orkin</b></td></tr>
		<?php
		$ao = mysql_query('SELECT user_id, username FROM phpbb_users WHERE clan = "orkin"');
		while($fao = mysql_fetch_assoc($ao)) {
			echo '<tr><td><a href="/annuaire/?mid='.$fao['user_id'].'">'.$fao['username'].'</a></td></tr>';
		}
		?>
		</table>
		</td>
		<td ><img src="/img/spacer.gif" width="60" height="1" /></td>
		<td  valign="top" align="top">
		<table>
		<tr><td><b>Armée de Xtrator</b></td></tr>
		<?php
		$ax = mysql_query('SELECT user_id, username FROM phpbb_users WHERE clan = "xtrator"');
		while($fax = mysql_fetch_assoc($ax)) {
			echo '<tr><td><a href="/annuaire/?mid='.$fax['user_id'].'">'.$fax['username'].'</a></td></tr>';
		}
		?>
		</table>
		</td>
		</tr>
		</table>
		</center>
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