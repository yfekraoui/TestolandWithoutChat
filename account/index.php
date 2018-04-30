
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
$title='Mon compte';
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
  <param name="FlashVars" value="title=Mon compte" />
  <embed src="http://www.chapatiz.com/img/subtop2.swf"
            flashvars="title=Mon compte"
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
	echo 'Il faut se connecter pour pouvoir modifier son compte !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour changer son compte !";
}
else {


$barre = '<font style="color:rgb(70,157,244);">••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••<br></font>';

echo $barre;
echo '<a href="/annuaire/?mid='.$userdata['user_id'].'"> Voir mon profil !</a><br />';
echo '<a href="/majmin/">Modifier mon MajMin</a><br />';
echo '<a href="/effaceur/">Changer de pseudo</a><br />';
echo '<a href="/account/animal/">Mon animal !</a><br />';
echo '<a href="/banque/">Ma Banque !</a><br /><br /><br />';
echo '<div align=center>Ton personnage : <br />
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="100" height="95" id="bbsmemb" align="middle">
 <param name="allowScriptAccess"value="always" /> 
 <param name="movie" value="../img/member.swf" /> 
 <param name="quality" value="high" />
 <param name="menu" value="false" />
 <param name="bgcolor" value="#FFF4D6" />
 <param name="FlashVars" value="ad='.$userdata['avatar_design'].'&amp;m='.$userdata['mood'].'" /> 
 <embed  src="../img/member.swf" quality="high" bgcolor="#FFF4D6" width="100" height="95" name="bbsmemb" 
 align="middle" menu="false" allowScriptAccess="always" FlashVars="ad='.$userdata['avatar_design'].'&amp;m='.$userdata['mood'].'"
 type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> </object> </div>';
 echo '<br />Ton lien de parrainage est :<br /><font color="#DC1B1B"><b>http://www.testoland.org/register/?pid='.$userdata['user_id'].'</b></font><br />';
echo $barre;
	switch($userdata['ph']) {
		case 1:
		echo ' - <a href="/account/avatar.php?type=sp">Mettre mon avatar Fantomatique</a><br />- <a href="/account/avatar.php?type=r">Mettre mon avatar Tiz</a><br />';
		break;
		case 2:
		echo ' - <a href="/account/avatar.php?type=sp">Mettre mon avatar Zombifié</a><br />- <a href="/account/avatar.php?type=r">Mettre mon avatar Tiz</a><br />';
		break;
		case 3:
		echo ' - <a href="/account/avatar.php?type=sp">Mettre mon avatar Vampirisé</a><br />- <a href="/account/avatar.php?type=r">Mettre mon avatar Tiz</a><br />';
		break;
		default:
		echo " ";
	}
}		
?>
</td>

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
<!-- debut change mdp -->
            <table width="435" border="0" cellspacing="0" cellpadding="0"> <img src="/img/spacer.gif" width="11" height="10">
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
				</table> 			  <td width="212"><table width="212" height="150" border="0" align="right" cellpadding="0" cellspacing="0">
				  <tr>
					<td height="56" align="left"><img src="/img/slotservices_parano.gif" width="212" height="56"></td>
				  </tr>
				  <tr>
					<td valign="top" bgcolor="#FFFFFF"> <table height="100%"  border="0" cellpadding="5" cellspacing="0" class="slotservices">
						<tr>
						  <td valign="top" bgcolor="#FFFFFF" > <p>Tu penses que quelqu'un se connecte à ta place quand tu n'es pas là ?<br>
							  Pourquoi tu n'irais pas vérifier ?<br>
							</p></td>
						</tr>
						<tr>
						  <td bgcolor="#FFFFFF" ><div align="right"><img src="/img/slotservices_puce.gif" width="8" height="8"><a href="/parano/">Vérifier sa page parano</a> </div></td>
						</tr>
					  </table></td>
				  </tr>
				  <tr>
					<td height="9"><img src="/img/slotservices_bottom.gif" width="212" height="9"></td>
				  </tr>
				</table></td>
<!-- fin change mdp -->
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
              <param name="FlashVars" value="p=<?php if($userdata['money'] == "" or $userdata['user_id'] == -1)
{
	echo "0";
}
else
{
	echo $userdata['money'];
}
?>" />
              <embed src="/img/pp_jauge.swf"
            flashvars="p=<?php if($userdata['money'] == "" or $userdata['user_id'] == -1)
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
<?php if($userdata['money'] == "" or $userdata['user_id'] == -1)
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
                <td><img src="/img/ppt_bottom.gif" width="180" height="11"></td>
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