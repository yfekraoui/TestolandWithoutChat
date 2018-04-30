
<?php

define('IN_PHPBB', true);
$phpbb_root_path = '../../bbs/';
include($phpbb_root_path . 'extension.inc');
include($phpbb_root_path . 'common.'.$phpEx);

//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_PROFILE);
init_userprefs($userdata);
$title='Animaux';
$css='../../css/style2.css';
$include='../../bbs/includes/';
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
    <td>
	
	<img  src="header_pets.png" alt="www.testoland.com" width="456"  />
	</td> 
   
 
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
	echo 'Il faut se connecter pour pouvoir modifier son animal !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour changer son animal !";
}
else {
$moncompte = mysql_query("SELECT * FROM phpbb_users WHERE username = '".$userdata['username']."'");
$account2 = mysql_fetch_assoc($moncompte);
$pseudo = $account2['username'];
$animal = $account2['animal'];
$as = $account2['animal_special'];

if($_GET['p']==1)
{
?>
<img src="lapin.png" />
<br /><br /><br />
Nom de ton lapin :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="1" />
<input type="submit" name="tamere" />
</form>
<?php
}
elseif($_GET['p']==2)
{
?>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
			codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" 
			width="115" height="115" align="middle"> 
			<param name="allowScriptAccess" value="sameDomain" /> 
			<param name="movie" 
			value="/img/cabineoiseau.swf" /> 
			<param name="menu" value="false" /> 
			<param name="quality" value="high" /> 
			<param name="FlashVars" value="" /> 
			<param bgcolor="#FAE0A7" />
			<embed src="/img/cabineoiseau.swf" 
			flashvars="" menu="false" bgcolor="#FAE0A7" allowscriptaccess="sameDomain" quality="high" width="115" height="115" 
			align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />  
			</object>
<br /><br /><br />
Code :<br />
<form method="post" action="animalok.php">
<input type="text" name="code" value="0000" size="3" /><br />
Nom de ton corbeau :<br />

<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="2" />
<input type="submit" name="tamere" />
</form>
<?php
}
elseif($_GET['p']==3)
{
?>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
			codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" 
			width="115" height="115" align="middle"> 
			<param name="allowScriptAccess" value="sameDomain" /> 
			<param name="movie" 
			value="/img/cabinebloby.swf" /> 
			<param name="menu" value="false" /> 
			<param name="quality" value="high" /> 
			<param name="FlashVars" value="" /> 
			<param bgcolor="#FAE0A7" />
			<embed src="/img/cabinebloby.swf" 
			flashvars="" menu="false" bgcolor="#FAE0A7" allowscriptaccess="sameDomain" quality="high" width="115" height="115" 
			align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />  
			</object>
<br /><br /><br />
Code :<br />
<form method="post" action="animalok.php">
<input type="text" name="code" value="0" size="1" /><br />
Nom de ta bacterie :<br />

<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="3" />
<input type="submit" name="tamere" />
</form>
<?php
}
elseif($_GET['p']==4)
{
?>
<img src="hamster.png" />
<br /><br /><br />
Normale : <b>1</b><br />
Blanc : <b>2</b><br />
Noir : <b>3</b><br />
Choix : <br />
<form method="post" action="animalok.php">
<input type="text" name="code" value="1" size="1" /><br />
Nom de ton hamster :<br />

<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="4" />
<input type="submit" name="tamere" />
</form>
<?php
}
elseif($_GET['p']==5)
{
?>
<img src="panda.png" />
<br /><br /><br />
Nom de ton panda :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="5" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']==6)
{
?>
<img src="trex.png" />
<br /><br /><br />
Nom de ton T-Rex :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="6" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']==7)
{
?>
<img src="ecureuil.png" />
<br /><br /><br />
Nom de ton écureuil :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="7" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']==8)
{
?>
<img src="chien.png" />
<br /><br /><br />
Nom de ton chien :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="8" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']==9)
{
?>
<img src="chat.png" />
<br /><br /><br />
Nom de ton chat :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="9" />
<input type="submit" name="tamere" />
<?php
}		
elseif($_GET['p']==10)
{
?>
<img src="perroquet.png" />
<br /><br /><br />
Nom de ton perroquet :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="10" />
<input type="submit" name="tamere" />
<?php
}	
elseif($_GET['p']==11)
{
?>
<br /><br /><br />
Nom de ton Hamster gelé :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="11" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']==12)
{
?>

<br /><br /><br />
Nom de ton Big Hamster :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="12" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']==13)
{
?>

<br /><br /><br />
Nom de ton Hamster Noël :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="13" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']==14)
{
?>

<br /><br /><br />
Nom de ton Korbak Noël :<br />
<form method="post" action="animalok.php">
<input type="text" name="nom" value="Un nom" />
<input type="hidden" name="value" value="14" />
<input type="submit" name="tamere" />
<?php
}
elseif($_GET['p']=="delete")
{
mysql_query('UPDATE phpbb_users SET animal = "0" WHERE username = "'.$pseudo.'"');
?>
Ok, ton animal est bien enlevé !
<?php
}	
else
{
?>
Nouveaux vous pouvez maintenant choisir votre animal gratuitement !
<a href="?p=1"><img src="lapin.png" /></a>
<a href="?p=2"><img src="corbeau.png" /></a>
<a href="?p=3"><img src="bacterie.png" /></a>
<a href="?p=4"><img src="hamster.png" /></a>
<a href="?p=5"><img src="panda.png" /></a>
<br />
<a href="?p=6"><img src="trex.png" /></a>
<a href="?p=7"><img src="ecureuil.png" /></a>
<a href="?p=8"><img src="chien.png" /></a>
<a href="?p=9"><img src="chat.png" /></a>
<a href="?p=10"><img src="perroquet.png" /></a><br />
<?php
$ass = preg_split("/,/",$as);
		// ------------------------------------------------------------------
		// Tableau Numéro animaux (recup sur la page pour mettre les animaux)
		// ------------------------------------------------------------------
		// 4 : hamster gelé.
		// 1 : Big hamster.
		// 2 : hamster noel.
		// 3 : corbeau noel.
		// ------------------------------------------------------------------
foreach($ass as $aa => $a)
	{
		for($i=0;$i<=4; $i++)
		{
			if($a == $i)
			{
				if($i==4)
				echo '<a href="?p=11">Mettre on Hamster Gelé</a><br />';
				elseif($i==1)
				echo '<a href="?p=12">Mettre mon Big Hmaster</a><br />';
				elseif($i==2)
				echo '<a href="?p=13">Mettre mon Hamster Noël</a><br />';
				elseif($i==3)
				echo '<a href="?p=14">Mettre mon Korbak Noël</a><br />';
			}
		}
	}
	?>
( Clique sur un animal )
<br /><br /><br />
<a href="?p=delete">Enlever mon animal !</a>
<?php
}
}
?>
 


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
    <td><img src="foot_pets.gif" width="456"></td> 
    <td></td> 
 
	
	
	
  </tr> 
</table> 

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
include('../../bbs/includes/bas.php');  
?>