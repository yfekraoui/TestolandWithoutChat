
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
$title='Shopping';
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


<table width="456" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
    <td><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="457.6" height="182.7" name="chz5rgyi" align="middle"> 
		<param name="movie" value="/img/header_shop.swf" /> 
		<param name="menu" value="false" /> 
		<param name="quality" value="high" /> 
		<param value="#6090BE" name="bgcolor" /> 
		<param name="wmode" value="transparent" />
		<param value="always" name="allowscriptaccess" /> 
		<param name="FlashVars" /> 
		<embed src="/img/header_shop.swf" menu="false" quality="high" wmode="transparent" width="457.6" height="182.7" name="chz5rgyi" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
</object></td>
   

  </tr>
  <tr>
    <td width="0" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      
      <tr>
        <td width="30%" align="left"><span class="gen">
		
		

	<center>
	
	
	<table border="0">
	
	
	<center>
	<tr>
	<td>
	<img src="/img/spacer.gif" width="60" height="10" />
	</td>
	<td>
	</td>
	<td>
	<img src="/img/spacer.gif" width="60" height="10" />
	</td>
	<td>
	</td>
	</tr>
	</table>
	<table>
	<tr>


		<?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir se rendre sur le Shopping :P !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter pour pouvoir se rendre sur le Shopping :P !';
}
else //si connecté
{
//INDEX - AVATAR
	?>

	

	
	<center>
	<table border="0"><span class="gen">
	<?php
	$pid = (int)mysql_real_escape_string(htmlspecialchars($_POST['pid']));
	if(isset($pid) && !empty($pid) && $pid > 0)
	{
		$req = mysql_query('SELECT COUNT(*) AS pid FROM shopping WHERE id = "'.$pid.'"');
		$req = mysql_fetch_assoc($req);
		$vpid = $req['pid'];
		if($vpid > 0)
		{
			$req3 = mysql_query('SELECT * FROM shopping WHERE id = "'.$pid.'"');
			$req3 = mysql_fetch_assoc($req3);
			$type = $req3['type'];
			if($type == "pack") // PACK EXEMPLE BIG BASTA SANS ITEM
			{
				$req4 = mysql_query('SELECT money, head, body, shoes FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$obtened_head_1 = 0;
				$obtened_head_2 = 0;
				$obtened_body_3 = 0;
				$obtened_body_4 = 0;
				$obtened_shoes_5 = 0;
				$obtened_shoes_6 = 0;

				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['head']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_head_1 = 1;
					}
   					if($coode == $_pack[1])
					{
						$obtened_head_2 = 1;
					}
					else
					{
					}
				}
				$code= explode(",",$req4['body']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[2])
					{
						$obtened_body_3 = 1;
					}
   					if($coode == $_pack[3])
					{
						$obtened_body_4 = 1;
					}
					else
					{
					}
				}
				$code= explode(",",$req4['shoes']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[4])
					{
						$obtened_shoes_5 = 1;
					}
   					if($coode == $_pack[5])
					{
						$obtened_shoes_6 = 1;
					}
					else
					{
					}
				}
				if($obtened_head_1 == 1 && $obtened_head_2 == 1 && $obtened_body_3 == 1 && $obtened_body_4 == 1 && $obtened_shoes_5 == 1 && $obtened_shoes_6 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					if($obtened_head_1 == 0)
					{
						$req4['head'].= ",$_pack[0]";
					}
					if($obtened_head_2 == 0)
					{
						$req4['head'].= ",$_pack[1]";
					}
					if($obtened_body_3 == 0)
					{
						$req4['body'].= ",$_pack[2]";
					}
					if($obtened_body_4 == 0)
					{
						$req4['body'].= ",$_pack[3]";
					}
					if($obtened_shoes_5 == 0)
					{
						$req4['shoes'].= ",$_pack[4]";
					}
					if($obtened_body_6 == 0)
					{
						$req4['shoes'].= ",$_pack[5]";
					}
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET head = "'.$req4['head'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					mysql_query('UPDATE phpbb_users SET body = "'.$req4['body'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					mysql_query('UPDATE phpbb_users SET shoes = "'.$req4['shoes'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					
			
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
			else if($type == "pack_solo") // PACK EXEMPLE PINGOUIN
			{
				$obtened_head_1 = 0;
				$obtened_body_2 = 0;
				$obtened_shoes_3 = 0;
				$req4 = mysql_query('SELECT money, head, body, shoes FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['head']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_head_1 = 1;
					}
					else
					{
					}
				}
				$code= explode(",",$req4['body']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[1])
					{
						$obtened_body_2 = 1;
					}
					else
					{
					}
				}
				$code= explode(",",$req4['shoes']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[2])
					{
						$obtened_shoes_3 = 1;
					}
					else
					{
					}
				}
				if($obtened_head_1 == 1 && $obtened_body_2 == 1 && $obtened_shoes_3 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					if($obtened_head_1 == 0)
					{
						$req4['head'].= ",$_pack[0]";
					}
					if($obtened_body_2 == 0)
					{
						$req4['body'].= ",$_pack[1]";
					}
					if($obtened_shoes_3 == 0)
					{
						$req4['shoes'].= ",$_pack[2]";
					}
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET head = "'.$req4['head'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					mysql_query('UPDATE phpbb_users SET body = "'.$req4['body'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					mysql_query('UPDATE phpbb_users SET shoes = "'.$req4['shoes'].'" WHERE user_id = "'.$userdata['user_id'].'"');
				
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
			else if($type == "pack_shoes") // PACK EXEMPLE PIED YETIZ
			{
				$obtened_shoes_1 = 0;
				$req4 = mysql_query('SELECT money, shoes FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['shoes']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_shoes_1 = 1;
					}
					else
					{
					}
				}
				if($obtened_shoes_1 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					if($obtened_shoes_1 == 0)
					{
						$req4['shoes'].= ",$_pack[0]";
					}
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET shoes = "'.$req4['shoes'].'" WHERE user_id = "'.$userdata['user_id'].'"');
				
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
			else if($type == "pack_head") // PACK EXEMPLE BONNET
			{
				$obtened_head_1 = 0;
				$req4 = mysql_query('SELECT money, head FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['head']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_head_1 = 1;
					}
					else
					{
					}
				}
				if($obtened_head_1 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					if($obtened_head_1 == 0)
					{
						$req4['head'].= ",$_pack[0]";
					}
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET head = "'.$req4['head'].'" WHERE user_id = "'.$userdata['user_id'].'"');
				
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
			else if($type == "pack_body") // PACK EXEMPLE YETIZ
			{
				$obtened_body_1 = 0;
				$req4 = mysql_query('SELECT money, body FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['body']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_body_1 = 1;
					}
					else
					{
					}
				}
				if($obtened_body_1 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					if($obtened_body_1 == 0)
					{
						$req4['body'].= ",$_pack[0]";
					}
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET body = "'.$req4['body'].'" WHERE user_id = "'.$userdata['user_id'].'"');
				
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
			else if($type == "packs") // PACK EXEMPLE GOTHIQUE AVEC UN ITEM2
			{
				$obtened_head_1 = 0;
				$obtened_head_2 = 0;
				$obtened_body_3 = 0;
				$obtened_body_4 = 0;
				$obtened_shoes_5 = 0;
				$obtened_shoes_6 = 0;
				$obtened_item0 = 0;
				$obtened_item1 = 0;
				$obtened_item2 = 0;
				$req4 = mysql_query('SELECT money, head, body, shoes, item2, item1, item0 FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['head']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_head_1 = 1;
					}
   					if($coode == $_pack[1])
					{
						$obtened_head_2 = 1;
					}

					else
					{
					}
				}
				$code= explode(",",$req4['body']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[2])
					{
						$obtened_body_3 = 1;
					}
   					if($coode == $_pack[3])
					{
						$obtened_body_4 = 1;
					}
					else
					{
					}
				}
				$code= explode(",",$req4['shoes']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[4])
					{
						$obtened_shoes_5 = 1;
					}
   					if($coode == $_pack[5])
					{
						$obtened_shoes_6 = 1;
					}
					else
					{
					}
				}
				if($_pack[7] != '1'); {
					$code= explode(",",$req4['item2']);
					foreach ( $code as $coode ) {
						if($coode == $_pack[7])
						{
							$obtened_item2 = 1;
						}
						else
						{
						}
					}
				}
				if($_pack[6] != '1'); {
					$code= explode(",",$req4['item1']);
					foreach ( $code as $coode ) {
						if($coode == $_pack[6])
						{
							$obtened_item1 = 1;
						}
						else
						{
						}
					}
				}
				if($_pack[8] != '1'); {
					$code= explode(",",$req4['item0']);
					foreach ( $code as $coode ) {
						if($coode == $_pack[8])
						{
							$obtened_item0 = 1;
						}
						else
						{
						}
					}
				}
				if($obtened_head_1 == 1 && $obtened_head_2 == 1 && $obtened_body_3 == 1 && $obtened_body_4 == 1 && $obtened_shoes_5 == 1 && $obtened_shoes_6 == 1 && $obtened_item2 == 1 && $obtened_item1 == 1 && $obtened_item0 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					if($obtened_head_1 == 0)
					{
						$req4['head'].= ",$_pack[0]";
					}
					if($obtened_head_2 == 0)
					{
						$req4['head'].= ",$_pack[1]";
					}
					if($obtened_body_3 == 0)
					{
						$req4['body'].= ",$_pack[2]";
					}
					if($obtened_body_4 == 0)
					{
						$req4['body'].= ",$_pack[3]";
					}
					if($obtened_shoes_5 == 0)
					{
						$req4['shoes'].= ",$_pack[4]";
					}
					if($obtened_body_6 == 0)
					{
						$req4['shoes'].= ",$_pack[5]";
					}
					if($_pack[7] != '1') {
						if($obtened_item2 == 0)
						{
							$req4['item2'].= ",$_pack[7]";
						}
					}
					if($_pack[6] != '1') {
						if($obtened_item1 == 0)
						{
							$req4['item1'].= ",$_pack[6]";
						}
					}
					if($_pack[8] != '1') {
						if($obtened_item0 == 0)
						{
							$req4['item0'].= ",$_pack[8]";
						}
					}
					$action = 'achat du pack : '.$req3['name'];
					$prix = $req3['prix'];
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET head = "'.$req4['head'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					mysql_query('UPDATE phpbb_users SET body = "'.$req4['body'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					mysql_query('UPDATE phpbb_users SET shoes = "'.$req4['shoes'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					$KFC = 'INSERT INTO banque VALUES("'.$userdata['user_id'].'", "'.$action.'", "'.$prix.'", "'.time().'")';
					$KENTUKI = mysql_query($KFC) or die('Erreur SQL !<br>'.$KFC.'<br>'.mysql_error()); 
					if($_pack[7] != '1' && $obtened_item2 == 0) {
					mysql_query('UPDATE phpbb_users SET item2 = "'.$req4['item2'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					}
					if($_pack[6] != '1' && $obtened_item1 == 0) {
					mysql_query('UPDATE phpbb_users SET item1 = "'.$req4['item1'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					}
					if($_pack[8] != '1' && $obtened_item0 == 0) {
					mysql_query('UPDATE phpbb_users SET item0 = "'.$req4['item0'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					}
				
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
			else if($type == "item0") // LUNETTE MASQUE
			{
				$obtened_item0 = 0;
				$req4 = mysql_query('SELECT money, item0 FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['item0']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_item0 = 1;
					}
					else
					{
					}
				}
				if($obtened_item0 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					$req4['item0'].= ",$_pack[0]";
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET item0 = "'.$req4['item0'].'" WHERE user_id = "'.$userdata['user_id'].'"');
				
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
			else if($type == "item1") // SAC AUTRE
			{
				$obtened_item1 = 0;
				$req4 = mysql_query('SELECT money, item1 FROM phpbb_users WHERE user_id = "'.$userdata['user_id'].'"');
				$req4 = mysql_fetch_assoc($req4);
				$_pack =preg_split("/,/", $req3['items']);
				$code= explode(",",$req4['item1']);
				foreach ( $code as $coode ) {
   					if($coode == $_pack[0])
					{
						$obtened_item1 = 1;
					}
					else
					{
					}
				}
				if($obtened_item1 == 1)
				{
				
					?>
					<font style="color:rgb(255,47,151);"><b> Erreur !<br /></b>
					Vous possèdez déjà le pack que vous tentez d'acheter !</font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else if($req4['money'] >= $req3['prix'])
				{
					$pined = $req4['money'] - $req3['prix'];
					$userdata['money'] = $pined;
					$req4['item1'].= "$_pack[0],";
					mysql_query('UPDATE phpbb_users SET money = "'.$pined.'" WHERE username = "'.$userdata['username'].'"');
					mysql_query('UPDATE phpbb_users SET item1 = "'.$req4['item1'].'" WHERE user_id = "'.$userdata['user_id'].'"');
					
					
					?>
					<font style="color:rgb(255,47,151);"><b> Bravo !<br />
					Tu viens d'acheter :
				
				
					<br /><br />
					<img src="/shopping/img/<?php echo $req3['name_bd'];?>.jpg" alt="pack" border="0" />
					<br /><br />
					Pour le prix de : <i><?php echo $req3['prix'];?>P.</i></b></font><br /><br /><a href="/shopping/">Retour au shopping</a>
					<?php
				}
				else
				{
					echo 'Desolé tu n\'as pas assez de pepettes !<br /><br /><a href="/shopping/">Retour au shopping</a>';
				}
			}
		}
		else
		{
		echo 'Erreur ce pack n\'existe pas';
		}
	}
	else
		{
		echo 'Erreur ce pack n\'existe pas';
		}
	?>
	</center>
	
</span></td>

      </tr>

	<?php
}
?></tr>

	</center>

	
	</table>
</span></td>
      </tr>
    </table></td>
    <br />
    <br />
    <div align="center"></div>
    <td width="0" bgcolor="#FFF4D5"></td>

  </tr>
  <tr>
    <td></td>
    <td><img src="bottom_fringue.gif" width="456"></td>
    <td></td>
	
	
	
  </tr>
</table>
</form>
<td>
<img src="/img/spacer.gif" width="5" />
</td>
<td valign="top"><br /><br />


				<img src="/img/spacer.gif"  height="40" />
             <table width="175" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td align="left"><img src="/img/spacer.gif" width="12" height="19"><br>
                  <img src="/img/header_testoz.png" width="180" height="37"></td>
              </tr>
              <tr>
                <td valign="top" bgcolor="#FFF4D6">
                <table width="175"  border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td valign="top">
                          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="170" height="200" align="middle">
              <param name="allowScriptAccess" value="sameDomain" />
              <param name="movie" value="/img/pp_jauge.swf" />
              <param name="wmode" value="transparent" />
              <param name="menu" value="false" />
              <param name="quality" value="high" />
              <param name="FlashVars" value="p=<?php if($userdata['money'] == "")
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?>" />
              <embed src="/img/pp_jauge.swf"
            flashvars="p=<?php if($userdata['money'] == "")
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?>"
            menu="false" wmode="transparent" quality="high" width="170" height="200" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object><center>
			Tu as actuellement : <br /><b>
<?php if($userdata['money'] == "")
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?> Pepettes</b>
			
			</center></div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td></td>
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