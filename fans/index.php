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
$title='Fans-sites';
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

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Fans-sites" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Fans-sites"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
  <table width="468" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_jon_klr.gif" border="0" height="12px" width="12px"/></td>
			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_jon_klr.gif" border="0" height="12px" width="444px"/></td>

			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_jon_klr.gif" border="0" height="12px" width="12px"/></td>
		</tr>
        <tr>
          <td width="11" bgcolor="#FFF4D5"> </td>
 <td bgcolor="#FFF4D5">
 <br />
      	 Retrouve sur cette page <b>la liste complète des sites de fans affichés les semaines précédentes</b>. Un petit florilège des plus actifs de tous les tiz de l'archipel. Que du bonheur pour les mirettes !
<br />
<br />
<?php
$kikoo = mysql_query("SELECT * FROM fansite ORDER BY timestamp DESC LIMIT 0,1");
$luve = mysql_fetch_assoc($kikoo)
?>
<i>Dernière mise à jour : <?php echo date('d/m/Y à H\hi', $luve['timestamp']);?></i>
<br />




          <td width="11" bgcolor="#FFF4D5"></td>
        </tr>

		<tr>
			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_jon_klr.gif" border="0" height="12px" width="12px"/></td>

			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_jon_klr.gif" border="0" height="12px" width="444px"/></td>
			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_jon_klr.gif" border="0" height="12px" width="12px"/></td>
		</tr>

	</td>
	</table>
</form>


<br />

<?php 

$CC = mysql_query("SELECT * FROM fansite ORDER BY id DESC LIMIT 0,6");
while ($CMWA = mysql_fetch_assoc($CC))
{
?>
 <table width="468" border="0" cellpadding="0" cellspacing="0">
	<tr>
	  <td align="left">
		<table cellpadding="0" cellspacing="0" border="0">

			<tr>
			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hg_klr.gif" border="0" height="12px" width="12px"/></td>
			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_h_klr.gif" border="0" height="12px" width="444px"/></td>

			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_hd_klr.gif" border="0" height="12px" width="12px"/></td>
			</tr>
		</table>
	  </td>
	</tr>
	<tr>

	  <td bgcolor="#D5E6F3">

	  <table width="100%"  border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td >
		  <table width='100%' border='0' cellpadding="0" cellspacing="0">
				<tr>
				  <td>
					<table border='0' cellspacing="0" cellpadding="0">

						<tr>
							<td width="11"></td>
							<td valign="top" width="160">
												<table>
									<tr><td><a href="<?php echo $CMWA['lien']; ?>" target="_blank"><img src="<?php echo $CMWA['image']; ?>" width="150" height="80" border="0"/></a><br></td></tr>
																	<br />
																
								
									<tr><td align="center">
																								<?php 
	$etoiles = $CMWA['etoiles'];																							
for($az = 0; $az < $etoiles; $az++)
{ 
echo("<img alt=\"Note\" align=\"absmiddle\" border=\"0\" src=\"etoile_on.png\">"); 
}

for($az = 0; $az < 5- $etoiles; $az++)
{ 
echo("<img alt=\"Note\" align=\"absmiddle\" border=\"0\" src=\"etoile_off.png\">"); 

}

?>
																	</table>
							</td>
								<?php
	$TKITOI = mysql_query('SELECT username FROM phpbb_users WHERE user_id = "'.$CMWA['user_id'].'"');
		$WESHGRO = mysql_fetch_assoc($TKITOI);
	
							?>
							  <td align="right">
							                                                             [X]
							<td valign="top"><a href="<?php echo $CMWA['lien']; ?>" target="_blank"><b><?php echo $CMWA['titre']; ?></b></a><br>
							
								par : <a href="/annuaire/?mid=<?php echo $CMWA['user_id']; ?>"><?php echo $WESHGRO['username']; ?></a><br/>
								<?php echo $CMWA['description']; ?>	
	                    
							<td width="11"></td>
						</tr>
					</table>
				</td></tr>
		  </table>
			</td></tr>
		</table>
	  </td></tr>
	<tr>

	  <td>
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
		<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_klr.gif" border="0" height="12px" width="12px"/></td>
			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_klr.gif" border="0" height="12px" width="444px"/></td>

			<td><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_klr.gif" border="0" height="12px" width="12px"/></td>
			</tr>
		</table>
	  </td>

	</tr>
  </table>
  <br />
<?php
}
?>




	  	<td valign="top"> <table border="0" cellpadding="0" cellspacing="0">
			<tr>



			  <td align="left">

  <!-- tips -->
  <table width="168" border="0" cellpadding="0" cellspacing="0">
	  <tr>

		<td align="left"><img src="http://01static.chapatiz.com/fr/spacer.gif" width="12" height="19"><br>
		<img src="http://01static.chapatiz.com/fr/modif_lang/trucetastuces_top.gif" width="168" height="37"></td>
	  </tr>
	  <tr>
		<td valign="top" bgcolor="#A4C4E3"> <table width="168"  border="0" cellspacing="0" cellpadding="5">
			<tr>
			<strong><center>Comment créer son site web ?</strong><br />Toi aussi tu peux créer ton propre site pour parler de tout ce qui te fait vibrer ! Il suffit d'ouvrir un compte sur ces sites et de suivre leurs instructions :</center><br><td valign='top' ><ul><li><a href='http://www.myspace.com/' target='_blank'>MySpace</a></li><li><a href='http://www.blogspot.com/' target='_blank'>Blogspot</a></li><li><a href='http://groups.msn.com/' target='_blank'>MSN Groups</a></li><li><a href='http://www.livejournal.com/' target='_blank'>Live Journal</a></li></ul></td>

			</tr>
		  </table></td>
	  </tr>
	  <tr style="padding-bottom:10px;">
		<td><img src="http://01static.chapatiz.com/fr/coldroite_bottom.gif" width="168" height="11"></td>
	  </tr>
  </table>

</td></td></table>



<?php
include('../bbs/includes/bas.php'); 
?>