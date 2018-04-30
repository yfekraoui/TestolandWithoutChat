
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
$title='Administration';
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

  <!-- main content -->

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="http://www.chapatiz.com/img/subtop2.swf" />
  <param name="wmode" value="transparent" />

  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=Administration" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Administration"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
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
        <td width="45%" align="left"><span class="gen"><?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['username'] == "Anonymous"){
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
else if($userdata['user_level'] == "1")
{
	?>
	<center>
	<b><font style="color:rgb(255,47,151);">•••••••••••••••••••••••••••••••••••••••••••••••••<br></font></b>
	<p><b>Modification d'un pack : </b><br />
	<b><font style="color:rgb(255,47,151);">•••••••••••••••••••••••••••••••••••••••••••••••••<br></font></b><br /></p>
	<center>
	<?php
	$id=$_GET['id'];
	if(empty($id) || !is_numeric($id))
	{
		echo "Ce pack n'existe pas mon boby";
	}
	else
	{
		echo '<form action="editok.php" method="post">';
		$sql = mysql_query('SELECT id, name, prix, description, items, name_bd, type FROM shopping WHERE id = "'.intval($id).'"')  or die($error_sql());
		if(mysql_num_rows($sql) < 1)
		{
			echo "Ce pack n'existe pas mon bobby";
		}
		else
		{
			while($data = mysql_fetch_assoc($sql))
			{
				$name = $data['name'];
				$prix = $data['prix'];
				$type = $data['type'];
				$name_bd = $data['name_bd'];
				$items = $data['items'];
				$description = $data['description'];
				$iid = $data['id'];

			}
			echo '<input type="hidden" name="id" value="'.$iid.'">';
			echo '<br /><img src="/shopping/img/'.$name_bd.'.jpg">';
			echo '<br /><br /><br /><br />Nom du pack  : <input  type="texte" name="name" maxlength="50" value="'.$name.'"> <br /><br />';
			echo '<br />Prix  : <input  type="texte" name="price" maxlength="5" value="'.$prix.'"> <br /><br />';
			?>
			<br />Type  : <select name="type"><OPTION <?php if($type == "pack"){ echo 'selected'; } ?> value="pack">Pack</OPTION>
			<OPTION <?php if($type == "pack_packs"){ echo 'selected'; }?> value="packs">Pack avec item2</OPTION>
			<OPTION <?php if($type == "pack_solo"){ echo 'selected'; }?> value="pack_solo">Pack seul</OPTION>
			<OPTION <?php if($type == "pack_head"){ echo 'selected'; }?> value="pack_head">Chapeau seul</OPTION>
			<OPTION <?php if($type == "pack_spec"){ echo 'selected'; }?> value="pack_spec">Pack special</OPTION>
			<OPTION <?php if($type == "pack_body"){ echo 'selected'; }?> value="pack_body">Corps seul</OPTION>
			<OPTION <?php if($type == "pack_shoes"){ echo 'selected'; }?> value="pack_shoes">Chaussures seules</OPTION></select>
			<?php
			echo '<br /><br />';
			echo '<br />Nom image : <input  type="texte" name="name_bd" maxlength="50" value="'.$name_bd.'"> <br /><br />';
			echo '<br />Items : <input  type="texte" name="items" maxlength="25" value="'.$items.'"> <br /><br /><br />';
			echo 'Description  :<br /> <textarea name="description" cols="20" rows="10" maxlength="150">'.$description.'</textarea><br /><br />';
			echo 'Destruction du pack ? : <select name="delete"><OPTION selected value="non">Non</OPTION><OPTION value="oui">Oui</OPTION></select>';
			echo '<br /><br /><br /><br /><br /><input type="submit" value="Envoie la sauce papa !"><BR /></form><br />';
		}
	}
	?>










<b><br /><br /><br /><a href="/admin/viewshop.php"><font style="color:rgb(255,47,151);">• </font>Retour à la gestion du shopping !</a></b></center><br />
	</center>
	<?php
	
	
	
}
else
{
	echo 'Il faut se connecter et être créateur pour avoir acces a l\'administration !';
}
?></span></td>
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