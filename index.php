<?php
define('IN_PHPBB', true);
$phpbb_root_path = './bbs/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
$title='Accueil';
$css='css/style2.css';
$include='./bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($host,$name,$password);
mysql_select_db($db);
include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>
<style type="text/css">
.style1 {
	color: #FF3399;
}
.style2 { color: #FFFFFF; }
}
</style>
<td valign="top">
<table width="630" border="0" cellspacing="0" cellpadding="5">
		<tr>
		<td valign="top">
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
              <param name="allowScriptAccess" value="sameDomain" />
              <param name="movie" value="/img/subtop2.swf" />
              <param name="wmode" value="transparent" />
              <param name="menu" value="false" />
              <param name="quality" value="high" />
              <param name="FlashVars" value="title=Bienvenue <?php if($userdata['username'] == "Anonymous"){echo 'sur Testoland ';} else{ echo $userdata['username']; } ?> !" />
              <embed src="/img/subtop2.swf"
            flashvars="title=Bienvenue <?php if($userdata['username'] == "Anonymous"){echo 'sur Testoland ';} else{ echo $userdata['username']; } ?>!"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
        <br>
		  <font color="D5E6F3"><span class="style2"><b>Testoland</b> est un fan site de </font><a href="http://chapatiz.com"><font color="#FFFFFF"><b>Chapatiz.com</a></b></font></span> <br /><br />

<?php if($userdata['username'] == "Anonymous"){ ?>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="430" height="268" align="middle">
              <param name="allowScriptAccess" value="sameDomain" />
              <param name="movie" value="/img/demo.swf" />
              <param name="wmode" value="transparent" />
              <param name="menu" value="false" />
              <param name="quality" value="high" />
              <param name="FlashVars" value="members_count=<?php echo $requete_lastmember['user_id']; ?>" />
              <embed src="/img/demo.swf"
            flashvars="members_count=<?php echo $requete_lastmember['user_id']; ?>"
            menu="false" wmode="transparent" quality="high" width="430" height="268" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
			<?php
			} else { ?>
				
        <!-- news -->
            <table border="0" cellpadding="0"
 cellspacing="0" width="435">
              <tbody>
                <tr>
                  <td height="11" width="11"><img
 src="/img/beige_hg.gif" height="11" width="11" /></td>
                  <td bgcolor="#fff4d5" height="11">
                  </td>
                  <td height="11" width="11"><img
 src="/img/beige_hd.gif" height="11" width="11" /></td>
                </tr>
                <tr>
                  <td bgcolor="#fff4d5" width="11">
                  </td>
                  <td bgcolor="#fff4d5" valign="top">
                  <table border="0" cellpadding="1"
 cellspacing="0" width="0">
                    <tbody>
					<?php 
					$kk = mysql_query('SElECT id, titre, text, auteur, DATE_FORMAT(date, \'%d/%m/%Y %Hh%imin%ss\') AS date  FROM news_accueil');
					while($donnees = mysql_fetch_array($kk))
					{
					$titre = stripslashes($donnees['titre']);
					$text = nl2br(stripslashes($donnees['text']));?>
                      <tr>
                        <td rowspan="2" valign="top"><img src="/img/articles/chimboking.gif" /></td>
                        <td><span class="titrebeige"><img src="/img/spacer.gif" height="65" width="10" /></span></td>
                        <td align="top">
						<span class="titrebeige"><?php echo $titre; ?></span>
						<br />
                        <br />
                        <br />
                        <br />
						<?php echo ' '. $text . ' '; ?>
						
                        <br />
                        <br />
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="right"> <span class="infobeige"> <?php echo $donnees['date']; ?> - par <?php echo $donnees['auteur'];?></span>
						<?php } ?>

                    </td>
                  </tr>
                </table>
                </td>
                <td width="11" bgcolor="#FFF4D5"> </td>
              </tr>
        <tr>
            <td width="11" height="11"><img src="/img/beige_bg.gif" width="11" height="11"></td>
            <td height="11" bgcolor="#FFF4D5"> </td>
            <td width="11" height="11"><img src="/img/beige_bd.gif" width="11" height="11"></td>
        </tr>
        <tr>
            <td colspan="3"><img src="/img/spacer.gif" width="11" height="10"></td>
        </tr>
                </table>
<?php } ?>
            
			
			<img src="/img/spacer.gif" width="11" height="10">
			
            <table width="435" border="0" cellspacing="0" cellpadding="0">
			<tr>
			  <td width="223">
				<table width="212" height="150" border="0" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="56" align="left"><img src="/img/slotservices_pamalin.gif" width="212" height="56"></td>
				  </tr>
				  <tr>
					<td valign="top" bgcolor="#FFFFFF">
					  <table height="100%"  border="0" cellpadding="5" cellspacing="0" class="slotservices">
						<tr>
						  <td valign="top" bgcolor="#FFFFFF" > <p>Tu as donn&eacute;
							  ton mot de passe &agrave; quelqu'un et tu veux le
							  changer ?<br>
							  Clique vite l&agrave; pour avoir l'esprit tranquille
							  ! </p></td>
						</tr>
						<tr>
						  <td bgcolor="#FFFFFF" ><div align="right"><img src="/img/slotservices_puce.gif" width="8" height="8"><a href="/pamalin">Changer
							  son mot de passe</a> </div></td>
						</tr>
					  </table></td>
				  </tr>
				  <tr>
					<td height="9"><img src="/img/slotservices_bottom.gif" width="212" height="9"></td>
				  </tr>
				</table>




			  </td>
			  <td width="212"><table width="212" height="150" border="0" align="right" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="56" align="left"><img src="/img/slotservices_mobile.gif" width="212" height="56"></td>
				  </tr>
				  <tr>
					<td valign="top" bgcolor="#FFFFFF"> <table height="100%"  border="0" cellpadding="5" cellspacing="0" class="slotservices">
						<tr>
						  <td valign="top" bgcolor="#FFFFFF" > <p>Ton t&eacute;l&eacute;phone
							  mobile est super moderne, mais super moche ?<br>
							  Pourquoi ne pas lui mettre un fond d'&eacute;cran
							  Testoland ?<br>
							</p></td>
						</tr>
						<tr>
						  <td bgcolor="#FFFFFF" ><div align="right"><img src="/img/slotservices_puce.gif" width="8" height="8"><a href="/goodies">Testoland
							  sur mon Mobile !</a> </div></td>
						</tr>
					  </table></td>
				  </tr>
				  <tr>
					<td height="9"><img src="/img/slotservices_bottom.gif" width="212" height="9"></td>
				  </tr>
				</table></td>
			</tr>
		  </table></td>
		  
<?php
////////////////////////////////////////////////// INITIALISATIONS DES BAN ////////////////////////////////////////
$timestamp = time();
$ouh = mysql_query('SELECT username, ban, ban_P FROM phpbb_users WHERE ban_P > "0"');
while($done = mysql_fetch_assoc($ouh))
{
	if($done['ban'] == "1" && $done['ban_P'] > "0")
	{ // VEIRF
		$h = $done['ban_P'] * 3600;
		$td = $timestamp + $h;
		$rqt1 = mysql_query('UPDATE phpbb_users SET ban_D = "'.$td.'" WHERE username = "'.$done['username'].'"');
		$rqt2 = mysql_query('UPDATE phpbb_users SET ban_P = "0" WHERE username = "'.$done['username'].'"');	
		
	}
}
$sisi = mysql_query('SELECT user_id, username, ban, ban_D FROM phpbb_users WHERE ban_D > "0"');
while($owi = mysql_fetch_assoc($sisi))
{
	if($owi['ban_D'] > "0") // verif pour pas delete toute le table
	{
		if($owi['ban_D'] <= $timestamp) // si ban_D(timestamp deban) = le timestamp actuel 
		{
			$rx1 = mysql_query('DELETE FROM phpbb_banlist WHERE ban_userid = "'.$owi['user_id'].'"');
			$rx2 = mysql_query('UPDATE phpbb_users SET ban = "0" WHERE username = "'.$owi['username'].'"');
			$rx3 = mysql_query('UPDATE phpbb_users SET ban_D = "0" WHERE username = "'.$owi['username'].'"');
			
		}
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
include($include.'right.php');
include($include.'bas.php');

?>