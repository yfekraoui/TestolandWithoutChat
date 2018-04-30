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
$title='Changer son mot de passe';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($host,$name,$password);
mysql_select_db($db);
include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>
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
              <param name="FlashVars" value="title=Bienvenue sur Testoland !" />
              <embed src="/img/subtop2.swf"
            flashvars="title=Pamalin"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
            </object>
        <br>
		 <br />



        <!-- news -->
 <table border="0" cellpadding="0" cellspacing="0" width="435">
    <tbody>
        <tr>
        <td height="11" width="11">
		<img src="/img/beige_hg.gif" height="11" width="11" />
		 </td>
         <td bgcolor="#fff4d5" height="11">
         </td>
         <td height="11" width="11">
		 <img src="/img/beige_hd.gif" height="11" width="11" />
		 </td>
         </tr>
         <tr>
         <td bgcolor="#fff4d5" width="11">
         </td>
         <td bgcolor="#fff4d5" valign="top">
          <table border="0" cellpadding="1" cellspacing="0" width="0">
                <tbody>
                      <tr>
                        <td rowspan="2" valign="top"></td>
                     
                        <td align="top"><span
 class="titrebeige">Changer de mot de passe</span> <br />
                      
        

<?php
if (!isset($userdata['session_logged_in'])) {
	echo 'Il faut se connecter pour pouvoir modifier son compte !';
}
else if($userdata['username'] == "Anonymous"){
	echo "Il faut être connecté pour changer son compte !";
}
else {

if(isset($_POST['last_psswd']) && isset($_POST['nw_psswd']) && isset($_POST['cfnw_psswd']))
{

	if(!empty($_POST['last_psswd']) && !empty($_POST['nw_psswd']) && !empty($_POST['cfnw_psswd']))
	{
		$sql = mysql_query('SELECT * FROM phpbb_users WHERE username = "'.$userdata['username'].'"');
		$req = mysql_fetch_assoc($sql);
		$last_passx = mysql_real_escape_string(htmlspecialchars($_POST['last_psswd']));
		$nw_pass = mysql_real_escape_string(htmlspecialchars($_POST['nw_psswd']));
		$cfnw_pass = mysql_real_escape_string(htmlspecialchars($_POST['cfnw_psswd']));
		$mdp = $req['user_password'];
		$last_pass = md5($last_passx);
		if($mdp == $last_pass)
		{
			if($nw_pass == $cfnw_pass)
			{
				$b_pass = md5($nw_pass);
				mysql_query('UPDATE phpbb_users SET user_password = "'.$b_pass.'" WHERE username = "'.$userdata['username'].'"');
				echo 'Ton mot de pass est bien modifier !';
			}
			else
			{
				echo 'Erreur : ton nouveau mot de passe et la confirmation <br /> de ton nouveau mot de passe est different.';
			}
		}
		else
		{
			echo 'Erreur : ce n\'est pas ton bon mot de passe !';
		}
	}
	else
	{
		echo 'Erreur : Il faut remplire tout les champs';
	}
}
else
{
?>
		
	<form action="./" method="post" enctype="multipart/form-data">
	<table width="389" border="0" cellpadding="0" cellspacing="5">
	<!--<tr><td></td><td></td></tr>-->
	<tr><td width="154">Ancien mot de passe</td>
	<td width="237"><input type="password" name="last_psswd" /></td></tr>
	<tr><td>Nouveau mot de passe</td><td><input type="password" name="nw_psswd" /></td></tr>
	<tr><td>Confirmation nouveau mot de passe</td><td><input type="password" name="cfnw_psswd" /></td></tr>
	  <tr>
		  <td></td>
		  <td><input type="submit" name="submit" value="Fais péter !! :@" /></td>
		</tr>
	</table>
	</form>
             
<?php
}
} ?>			 <br />
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="right"> 
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
include($include.'right.php');
include($include.'bas.php');

?>