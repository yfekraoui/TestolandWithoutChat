
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

$nom = mysql_real_escape_string(htmlspecialchars($_POST['nom']));
$value = (int)mysql_real_escape_string(htmlspecialchars($_POST['value']));
$code = (int)mysql_real_escape_string(htmlspecialchars($_POST['code']));
$as = $account2['animal_special'];
$ass = preg_split("/,/",$as);
if(isset($value) && !empty($value))
{
	if($value==1)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P7, ;" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton lapin est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P7,'.$nom.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton lapin est bien mis';
		}
	}
	elseif($value==2)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P2, ,'.$code.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton corbeau est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P2,'.$nom.','.$code.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton corbeau est bien mis';
		}
	}
	elseif($value==2)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P2, ,'.$code.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton corbeau est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P2,'.$nom.','.$code.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton corbeau est bien mis';
		}
	}
	elseif($value==3)
	{
		if($_POST['code'] == "a" OR $_POST['code'] == "b" OR $_POST['code'] == "c" OR $_POST['code'] == "d" OR $_POST['code'] == "e" OR $_POST['code'] == "f" OR $_POST['code'] == "g" OR $_POST['code'] == "h" OR $_POST['code'] == "i")
		{
			$code = mysql_real_escape_string(htmlspecialchars($_POST['code']));
		}
		else
		{
			$code = (int)mysql_real_escape_string(htmlspecialchars($_POST['code']));
		}
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P8, ,'.$code.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ta bacterie est bien mise';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P8,'.$nom.','.$code.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ta bacterie est bien mise';
		}
	}
	elseif($value==4)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{	
			if($code==1)
			{
				mysql_query('UPDATE phpbb_users SET animal = "0P0, ;" WHERE username = "'.$pseudo.'"');
			}
			elseif($code==2)
			{
				mysql_query('UPDATE phpbb_users SET animal = "0P1, ;" WHERE username = "'.$pseudo.'"');
			}
			elseif($code==3)
			{
				mysql_query('UPDATE phpbb_users SET animal = "0P6, ;" WHERE username = "'.$pseudo.'"');
			}
			echo 'Ok ton hamster est bien mis';
		}
		else
		{
			if($code==1)
			{
				mysql_query('UPDATE phpbb_users SET animal = "0P0,'.$nom.';" WHERE username = "'.$pseudo.'"');
			}
			elseif($code==2)
			{
				mysql_query('UPDATE phpbb_users SET animal = "0P6,'.$nom.';" WHERE username = "'.$pseudo.'"');
			}
			elseif($code==3)
			{
				mysql_query('UPDATE phpbb_users SET animal = "0P1,'.$nom.';" WHERE username = "'.$pseudo.'"');
			}
			echo 'Ok ton hamster est bien mis';
		}
	}
	elseif($value==5)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "1P1, ;" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton panda est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "1P1,'.$nom.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton panda est bien mis';
		}
	}
	elseif($value==6)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P9, ;" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton T-Rex est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P9,'.$nom.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton T-Rex est bien mis';
		}
	}
	elseif($value==7)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "1P2, ;" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton écureuil est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "1P2,'.$nom.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton écureuil est bien mis';
		}
	}
	elseif($value==8)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P10, ;" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton chien est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P10,'.$nom.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton chien est bien mis';
		}
	}
	elseif($value==9)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P3, ;" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton chat est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P3,'.$nom.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton chat est bien mis';
		}
	}
	elseif($value==10)
	{
		if(eregi('[^a-zA-Z0-9_ .]', $nom))
		{
			echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/?p=1">Retour au choix de ton animal</a>.';
		}
		elseif(empty($nom))
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P11, ;" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton perroquet est bien mis';
		}
		else
		{
			mysql_query('UPDATE phpbb_users SET animal = "0P11,'.$nom.';" WHERE username = "'.$pseudo.'"');
			echo 'Ok ton perroquet est bien mis';
		}
	}
	elseif($value==11)
	{
		foreach($ass as $aa => $a)
		{
			if($a == 4)
			{
				$bla = 1;
				break;
			}
			else
			{
				$bla = 0;
			}
		}
		if($bla == 1)
		{
			if(eregi('[^a-zA-Z0-9_ .]', $nom))
			{
				echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/">Retour au choix de ton animal</a>.';
			}
			elseif(empty($nom))
			{
				mysql_query('UPDATE phpbb_users SET animal = "9P0, ;" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
			else
			{
				mysql_query('UPDATE phpbb_users SET animal = "9P0,'.$nom.';" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
		}
	}
	elseif($value==12)
	{
		foreach($ass as $aa => $a)
		{
			if($a == 1)
			{
				$bla1 = 1;
				break;
			}
			else
			{
				$bla1 = 0;
			}
		}
		if($bla1 == 1)
		{
			if(eregi('[^a-zA-Z0-9_ .]', $nom))
			{
				echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/">Retour au choix de ton animal</a>.';
			}
			elseif(empty($nom))
			{
				mysql_query('UPDATE phpbb_users SET animal = "CP1, ;" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
			else
			{
				mysql_query('UPDATE phpbb_users SET animal = "CP1,'.$nom.';" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
		}
	}
	elseif($value==13)
	{
		foreach($ass as $aa => $a)
		{
			if($a == 2)
			{
				$bla2 = 1;
				break;
			}
			else
			{
				$bla2 = 0;
			}
		}
		if($bla2 == 1)
		{
			if(eregi('[^a-zA-Z0-9_ .]', $nom))
			{
				echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/">Retour au choix de ton animal</a>.';
			}
			elseif(empty($nom))
			{
				mysql_query('UPDATE phpbb_users SET animal = "CP0, ;" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
			else
			{
				mysql_query('UPDATE phpbb_users SET animal = "CP0,'.$nom.';" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
		}
	}
	elseif($value==14)
	{
		foreach($ass as $aa => $a)
		{
			if($a == 3)
			{
				$bla3 = 1;
				break;
			}
			else
			{
				$bla3 = 0;
			}
		}
		if($bla3 == 1)
		{
			if(eregi('[^a-zA-Z0-9_ .]', $nom))
			{
				echo 'Il y a un caractère special dans le nom de ton animal<br /> <a href="/animal/">Retour au choix de ton animal</a>.';
			}
			elseif(empty($nom))
			{
				mysql_query('UPDATE phpbb_users SET animal = "AP2, ;" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
			else
			{
				mysql_query('UPDATE phpbb_users SET animal = "AP2,'.$nom.';" WHERE username = "'.$pseudo.'"');
				echo 'Ok ton animal est bien mis';
			}
		}
	}



	else
	{
		echo 'Erreur :@';
	}

}
else
{
	echo 'Epic Fail';
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