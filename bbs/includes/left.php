<div align="left">
<?php

if( $userdata['session_logged_in'] )
{
	if($userdata['ban'] == "1")
	{
		$sql = mysql_query('DELETE FROM phpbb_sessions WHERE session_id = "'.$userdata['session_id'].'" AND session_user_id = "'.$userdata['user_id'].'"');
	}
}
?>
 <?php


  echo' <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
  codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
  width="800" height="110" align="middle">
    <param name="allowScriptAccess" value="sameDomain" />
    <param name="movie" value="/img/header.swf" />
    <param name="menu" value="false" />
    <param name="quality" value="high" />
    <param name="FlashVars" value="t='.time().'&mid='.@$userdata['user_id'].'&ad='.@$userdata['avatar_design'].'&m='.@$userdata['mood'].'" />
    <embed src="/img/header.swf"
         flashvars="t='.time().'&mid='.@$userdata['user_id'].'&ad='.@$userdata['avatar_design'].'&m='.@$userdata['mood'].'"
         menu="false" allowscriptaccess="sameDomain" quality="high" width="800" height="110" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />  
</object> ';
$requete_lastmember=mysql_query('SELECT user_id, username, avatar_design, mood FROM phpbb_users ORDER BY user_id DESC');
					  $requete_lastmember=mysql_fetch_assoc($requete_lastmember); 
  ?>
</div>

<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top">
<div id="navbar">
    <table width="147" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td background="/img/chapa_tile_nav.gif"><img src="/img/top_navbar.gif"></td>
      </tr>
      <tr>
        <td valign="top" background="/img/chapa_tile_nav.gif">
          <table width="0" border="0" cellpadding="4" cellspacing="0" class="nav">

            <tr>
                <td width="130">
   
                
                <?php if($userdata['session_logged_in']) {  echo'  <img src="/img/spacer.gif" width="10" height="10" /><a href="/login/?logout=true&sid='.$_COOKIE[$p_cookie.'sid'].'"><b>[Me déconnecter]</b></a><br /> '; } else { echo'<img src="/img/spacer.gif" width="10" height="10" /><a href="/login/"><b>[Me connecter]</b></a><br />  <img src="/img/spacer.gif" width="10" height="10" /><a href="/register/">S\'enregistrer</a>'; } ?><br />
				  <?php if($userdata['session_logged_in']) {
				  
				
				$message_nonvu = mysql_query('SELECT COUNT(*) AS msnv FROM mi WHERE mid_r = "'.$userdata['user_id'].'" AND vue = "0"');
				$message_nonvu = mysql_fetch_assoc($message_nonvu);
				$message_nonvu = $message_nonvu['msnv'];
				
				$message_total = mysql_query('SELECT COUNT(*) AS mt FROM mi WHERE mid_r = "'.$userdata['user_id'].'"');
				$message_total = mysql_fetch_assoc($message_total);
				$message_total = $message_total['mt'];
				
				if($message_nonvu >= 1)
				{
				?>
				
				
				<a href="/mi/">
				<img src="/img/icon_minipost_new_r.gif" alt="new_message" border="0" />
				<b>Messages (<?php echo $message_total;?>)</b></a>
			
				
				<?php
				}
				else
				{
				?>
				
				
				<a href="/mi/">
				<img src="/img/icon_latest_reply.gif" alt="message" border="0" />
				<b>Messages (<?php echo $message_total;?>)</b></a>
				
				
				<?php
				}
				
				?>
				<br />
				<?php
				}
				?>
			  <img src="/img/spacer.gif" width="10" height="10" /><a href="/">Accueil</a><br>
                <img src="/img/separator.gif" width="130" height="13"><br>

           <span class="navtitle">Infos</span><br />
		   <?php if($userdata['session_logged_in']) {  echo'<img src="/img/spacer.gif" width="10" height="10" /><a href="/account/">Mon compte</a><br />'; } ?>
		
				<img src="/img/spacer.gif" width="10" height="10"><a href="/niveaux/">Niveaux</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/bbs/faq.php">F.A.Q</a><br />
				<?php if($userdata['user_level'] == "1") { echo '<img src="/img/spacer.gif" width="10" height="10"><a href="/admin/"><b>Administration</b></a><br />'; } ?>
                <?php if($userdata['user_level'] == "1" OR $userdata['rang'] == "1" OR $userdata['rang'] == "5" OR $userdata['rang'] == "2" OR $userdata['modopro'] == "1") { echo '<img src="/img/spacer.gif" width="10" height="10"><a href="/moderation/"><b>Moderation</b></a><br />'; } ?>
				 <?php if($userdata['user_level'] == "1" OR $userdata['rang'] == "6") { echo '<img src="/img/spacer.gif" width="10" height="10"><a href="/anim/"><b>Panel Anim</b></a><br />'; } ?>
				<?php if($userdata['user_level'] == "1" OR $userdata['modopro'] == "1"){echo '<img src="/img/spacer.gif" width="10" height="10"><a href="/mp/"><b>Panel Modopros</b></a><br />'; } ?>
			
				<img src="/img/separator.gif" width="130" height="13"><br />
				<span class="navtitle">Activités</span><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/lapino/">Lapino Race</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/capture/">Capture The Flag</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/pln/">Pecho La Noisette</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/bacteria/">Bacteria</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/mariage/">Mariage</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/mazo/">MaZo</a><br />
                <img src="/img/spacer.gif" width="10" height="10"><a href="/patojdur/">Patojdur</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/popularity/">Popularité</a><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/shopping/">Fringues</a><br />
				<img src="/img/separator.gif" width="130" height="13"><br />
				<span class="navtitle">Communauté</span><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/annuaire/">Annuaire</a><br />
                <img src="/img/spacer.gif" width="10" height="10"><a href="/bbs/">BBS (forums)</a><br />
                <img src="/img/spacer.gif" width="10" height="10"><a href="/groups/">Groupes</a><br />
				<img src="/img/separator.gif" width="130" height="13"><br />
				<span class="navtitle">Goodies</span><br />
				<img src="/img/spacer.gif" width="10" height="10"><a href="/fanart/">Albums</a><br />
				
				
               


	 <br />
<?php


if (!isset($userdata['session_logged_in'])) {
	
}
else if($userdata['username'] == "Anonymous"){
	
}
else {
}
echo'<p style="color:#3E6891"><a href="/annuaire/" style="color:#3E6891"><b>'.$requete_lastmember['user_id'].'</b> membres</a><br />';
		
		echo '<a href="/who/" style="color:#3E6891"><b>';
		
$NE2S = mysql_query('SELECT COUNT(*) AS nct FROM co_today');
$NE2S = mysql_fetch_assoc($NE2S);
$nct = $NE2S['nct'];
$ct = 0;
$testx = mysql_query('SELECT username FROM co_today');
while($tx = mysql_fetch_assoc($testx))
{
	$erk = mysql_query('SELECT COUNT(*) AS erk FROM phpbb_users WHERE username = "'.$tx['username'].'" AND online = "1"');
	$erk = mysql_fetch_assoc($erk);
	$erk = $erk['erk'];
	if($erk == 0){}else{$ct++;}
}
$nct = $nct + $ct;
$nc24 = mysql_query('SELECT COUNT(*) AS nc24 FROM co_24h');
$nc24 = mysql_fetch_assoc($nc24);
$nc24 = $nc24['nc24'];
 
echo "$nct </b>connectés</a><br />";
echo "<b>$nc24</b> passés depuis 24h.<br /><br />";

	
	 ?>


                </td>
            </tr>
          </table>
         </td>
      </tr>
      <tr>
        <td height="90" background="/img/chapa_bottom_nav.gif">&nbsp;</td>
      </tr>

    </table>
    </div>
    </td>