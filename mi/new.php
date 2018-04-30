
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
$title='Messagerie Interne';
$css='../css/style2.css';
$include='../bbs/includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);

include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
function colortr($i)
{
	$nb_retour = array(1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39, 41, 43, 45, 47, 49, 51, 53, 55, 57, 59, 61, 63, 65, 67, 69, 71, 73, 75, 77, 79, 81, 83, 85, 87, 89, 91, 93, 95, 97, 99, 101);
	if(in_array($i, $nb_retour))
	{
		echo '<tr bgcolor=#FFFFFF>';;
	}
	else
	{
		echo '<tr>';
	}
}
function coup($phrase,$jusqua)
{
	if(strlen(@$phrase) >= $jusqua)
	{
		for($k=0;$k<=$jusqua;$k++)
		{
			@$phrase1 .= @$phrase[$k];
		}
		return @$phrase1;
	}
	else 
	{
		return @$phrase;
	}
}

if (!isset($userdata['session_logged_in'])) {
							
						}
						else if($userdata['username'] == "Anonymous"){
							
						}
						else {
?>
 <head>
<script language="JavaScript" type="text/javascript"> 
<!--
// bbCode control by
// subBlue design
// www.subBlue.com
 
// Startup variables
var imageTag = false;
var theSelection = false;
 
// Check for Browser & Platform for PC & IE specific bits
// More details from: http://www.mozilla.org/docs/web-developer/sniffer/browser_type.html
var clientPC = navigator.userAgent.toLowerCase(); // Get client info
var clientVer = parseInt(navigator.appVersion); // Get browser version
 
var is_ie = ((clientPC.indexOf("msie") != -1) && (clientPC.indexOf("opera") == -1));
var is_nav = ((clientPC.indexOf('mozilla')!=-1) && (clientPC.indexOf('spoofer')==-1)
                && (clientPC.indexOf('compatible') == -1) && (clientPC.indexOf('opera')==-1)
                && (clientPC.indexOf('webtv')==-1) && (clientPC.indexOf('hotjava')==-1));
var is_moz = 0;
 
var is_win = ((clientPC.indexOf("win")!=-1) || (clientPC.indexOf("16bit") != -1));
var is_mac = (clientPC.indexOf("mac")!=-1);
 
// Helpline messages
b_help = "Texte gras : [b]texte[/b] (alt+b)";
i_help = "Texte italique : [i]texte[/i] (alt+i)";
u_help = "Texte souligné : [u]texte[/u] (alt+u)";
q_help = "Citation : [quote]texte cité[/quote] (alt+q)";
c_help = "Afficher du code : [code]code[/code] (alt+c)";
l_help = "Liste : [list]texte[/list] (alt+l)";
o_help = "Liste ordonnée : [list=]texte[/list] (alt+o)";
p_help = "Insérer une image : [img]http://image_url/[/img] (alt+p)";
w_help = "Insérer un lien : [url]http://url/[/url] ou [url=http://url/]Nom[/url] (alt+w)";
a_help = "Fermer toutes les balises BBCode ouvertes";
s_help = "Couleur du texte : [color=red]texte[/color] ce rouge fait partie du code, l'astuce : #FF0000 fonctionne aussi";
f_help = "Taille du texte : [size=x-small]texte en petit[/size]";
r_help = "";
 
// Define the bbCode tags
bbcode = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[hs]','[/hs]','[strike]','[/strike]');
imageTag = false;
 
// Shows the help messages in the helpline window
function helpline(help) {
	document.post.helpbox.value = eval(help + "_help");
}
 
 
// Replacement for arrayname.length property
function getarraysize(thearray) {
	for (i = 0; i < thearray.length; i++) {
		if ((thearray[i] == "undefined") || (thearray[i] == "") || (thearray[i] == null))
			return i;
		}
	return thearray.length;
}
 
// Replacement for arrayname.push(value) not implemented in IE until version 5.5
// Appends element to the array
function arraypush(thearray,value) {
	thearray[ getarraysize(thearray) ] = value;
}
 
// Replacement for arrayname.pop() not implemented in IE until version 5.5
// Removes and returns the last element of an array
function arraypop(thearray) {
	thearraysize = getarraysize(thearray);
	retval = thearray[thearraysize - 1];
	delete thearray[thearraysize - 1];
	return retval;
}
 
 
function checkForm() {
 
	formErrors = false;
 
	if (document.post.message.value.length < 2) {
		formErrors = "Vous devez entrer un message avant de poster.";
	}
 
	if (formErrors) {
		alert(formErrors);
		return false;
	} else {
		bbstyle(-1);
		//formObj.preview.disabled = true;
		//formObj.submit.disabled = true;
		return true;
	}
}
 
function emoticon(text) {
	var txtarea = document.post.message;
	text = ' ' + text + ' ';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
		txtarea.focus();
	} else {
		txtarea.value  += text;
		txtarea.focus();
	}
}
 
function bbfontstyle(bbopen, bbclose) {
	var txtarea = document.post.message;
 
	if ((clientVer >= 4) && is_ie && is_win) {
		theSelection = document.selection.createRange().text;
		if (!theSelection) {
			txtarea.value += bbopen + bbclose;
			txtarea.focus();
			return;
		}
		document.selection.createRange().text = bbopen + theSelection + bbclose;
		txtarea.focus();
		return;
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbopen, bbclose);
		return;
	}
	else
	{
		txtarea.value += bbopen + bbclose;
		txtarea.focus();
	}
	storeCaret(txtarea);
}
 
 
function bbstyle(bbnumber) {
	var txtarea = document.post.message;
 
	txtarea.focus();
	donotinsert = false;
	theSelection = false;
	bblast = 0;
 
	if (bbnumber == -1) { // Close all open tags & default button names
		while (bbcode[0]) {
			butnumber = arraypop(bbcode) - 1;
			txtarea.value += bbtags[butnumber + 1];
			buttext = eval('document.post.addbbcode' + butnumber + '.value');
			eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
		}
		imageTag = false; // All tags are closed including image tags :D
		txtarea.focus();
		return;
	}
 
	if ((clientVer >= 4) && is_ie && is_win)
	{
		theSelection = document.selection.createRange().text; // Get text selection
		if (theSelection) {
			// Add tags around selection
			document.selection.createRange().text = bbtags[bbnumber] + theSelection + bbtags[bbnumber+1];
			txtarea.focus();
			theSelection = '';
			return;
		}
	}
	else if (txtarea.selectionEnd && (txtarea.selectionEnd - txtarea.selectionStart > 0))
	{
		mozWrap(txtarea, bbtags[bbnumber], bbtags[bbnumber+1]);
		return;
	}
 
	// Find last occurance of an open tag the same as the one just clicked
	for (i = 0; i < bbcode.length; i++) {
		if (bbcode[i] == bbnumber+1) {
			bblast = i;
			donotinsert = true;
		}
	}
 
	if (donotinsert) {		// Close all open tags up to the one just clicked & default button names
		while (bbcode[bblast]) {
				butnumber = arraypop(bbcode) - 1;
				txtarea.value += bbtags[butnumber + 1];
				buttext = eval('document.post.addbbcode' + butnumber + '.value');
				eval('document.post.addbbcode' + butnumber + '.value ="' + buttext.substr(0,(buttext.length - 1)) + '"');
				imageTag = false;
			}
			txtarea.focus();
			return;
	} else { // Open tags
 
		if (imageTag && (bbnumber != 14)) {		// Close image tag before adding another
			txtarea.value += bbtags[15];
			lastValue = arraypop(bbcode) - 1;	// Remove the close image tag from the list
			document.post.addbbcode14.value = "Img";	// Return button back to normal state
			imageTag = false;
		}
 
		// Open tag
		txtarea.value += bbtags[bbnumber];
		if ((bbnumber == 14) && (imageTag == false)) imageTag = 1; // Check to stop additional tags after an unclosed image tag
		arraypush(bbcode,bbnumber+1);
		eval('document.post.addbbcode'+bbnumber+'.value += "*"');
		txtarea.focus();
		return;
	}
	storeCaret(txtarea);
}
 
// From http://www.massless.org/mozedit/
function mozWrap(txtarea, open, close)
{
	var selLength = txtarea.textLength;
	var selStart = txtarea.selectionStart;
	var selEnd = txtarea.selectionEnd;
	if (selEnd == 1 || selEnd == 2)
		selEnd = selLength;
 
	var s1 = (txtarea.value).substring(0,selStart);
	var s2 = (txtarea.value).substring(selStart, selEnd)
	var s3 = (txtarea.value).substring(selEnd, selLength);
	txtarea.value = s1 + open + s2 + close + s3;
	return;
}
 
// Insert at Claret position. Code from
// http://www.faqts.com/knowledge_base/view.phtml/aid/1052/fid/130
function storeCaret(textEl) {
	if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}
 
//-->

</script> 

</head>
  <!-- main content -->
<td valign="top">

 <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">

</table>

<table width="560" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>

  </tr>
  <tr>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>
    <td height="11" bgcolor="#FFF4D5">
	<table> <!-- table menu bouton mi -->
	<tr>
	<td><img src="/img/spacer.gif" alt="spacer" width="20" height="2" /></td>
	<td><a href="new.php"><img src="nouveau.png" alt="envoyer" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td><td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	<td><a href="bc.php"><img src="boitereception.png" alt="boite_reception" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	<td><a href="be.php"><img src="boite-denvoie.gif" alt="boite_envoi" border="0" /></a></td>
	<td><img src="/img/spacer.gif" alt="spacer" width="15" /></td>
	
	</tr>
	</table>
	</td>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>

  </tr>

 <tr>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>
    <td height="11" bgcolor="#FFF4D5">
	
	<img src="/img/spacer.gif" height="15" width="10" />
	
	<center><b> Envoyer un message </b><img src="/img/spacer.gif" height="15" width="50" /></center>
	
	</td>
    <td width="2" height="11" bgcolor="#FFF4D5"></td>

  </tr>

  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="45%" align="left">
		<?php
		$time_m120 = time() - 120;
		$vt = mysql_query('SELECT COUNT(*) AS vt FROM mi WHERE timestamp >= "'.$time_m120.'" AND timestamp <= "'.time().'" AND mid_e = "'.$userdata['user_id'].'"');
		$vt = mysql_fetch_assoc($vt);
		$vt = $vt['vt'];
		if($vt >= 1)
		{
			echo 'Erreur : Tu doit attendre 2 minutes entre chaque envoi de message';
		}
		else
		{
			if(isset($_POST['rep_eid']) && !empty($_POST['rep_eid']) && isset($_POST['rep_s']) && !empty($_POST['rep_s']))
			{
			$rep_eid = mysql_real_escape_string(htmlspecialchars($_POST['rep_eid']));
			$rep_s = mysql_real_escape_string(htmlspecialchars($_POST['rep_s']));
			$ihi = 1;
			$req = mysql_query('SELECT username FROM phpbb_users WHERE user_id = "'.$rep_eid.'"');
			$dt = mysql_fetch_assoc($req);
			$e_name = $dt['username'];
			}
			else if(!empty($_GET['rep_eid']))
			{
			$rep_eid = mysql_real_escape_string(htmlspecialchars($_GET['rep_eid']));
			$ihi = 1;
			$req = mysql_query('SELECT username FROM phpbb_users WHERE user_id = "'.$rep_eid.'"');
			$dt = mysql_fetch_assoc($req);
			$e_name = $dt['username'];
			}
			?>
			<table>
			<form method="post" action="newok.php" name="post" onsubmit="return checkForm(this)"> 
			<tr>
			<td><b>à :</b></td><td><input type="text" name="destinataire" value="<?php if($ihi == 1){ echo $e_name;}else{ echo 'Nom du tiz à qui tu veux envoyer'; }?>" size="45" maxlength="60" /></td>
			</tr>
			<tr>
			<td><b>Sujet :</b></td><td><input type="text" name="sujet" value="<?php if($ihi == 1){ echo stripslashes($rep_s);}else{ echo 'Titre de ton message'; }?>" size="45" maxlength="60" /></td>
			</tr>
			
			
			<tr>
			<td valign="top"><b>Message :<br />
			

			</b></td>
			
			<td valign="top">
			<table width="100%" border="0" cellspacing="0" cellpadding="1"> 
		  <tr> 
			
		  </tr> 
		  <tr> 
			<td valign="middle" align="center"> <br />
			
			  <table width="100" border="0" cellspacing="0" cellpadding="5">
			
	  
	  <td class="row2" valign="top"><span class="gen"> <span class="genmed"> </span> 
		<table width="450" border="0" cellspacing="0" cellpadding="2"> 
		  <tr valign="left"> 
						<td ><span class="genmed"> 
						  <input type="button" class="bouton" accesskey="b" name="addbbcode0" value="Gras" style="font-weight:bold;" onClick="bbstyle(0)" onMouseOver="helpline('b')" /> 
						  </span></td> 
						<td><span class="genmed"> 
						  <input type="button" class="bouton" accesskey="i" name="addbbcode2" value="Italique" style="font-style:italic" onClick="bbstyle(2)" onMouseOver="helpline('i')" /> 
						  </span></td> 
						<td><span class="genmed"> 
						  <input type="button" class="bouton" accesskey="u" name="addbbcode4" value="Souligné" style="text-decoration: underline;" onClick="bbstyle(4)" onMouseOver="helpline('u')" /> 
						  </span></td> 
						  <td><span class="genmed"> 
						  <input type="button" class="bouton" accesskey="w" name="addbbcode16" value="Lien" style="text-decoration: underline;" onClick="bbstyle(16)" onMouseOver="helpline('w')" /> 
						  </span></td>
						  
						  <td>
						  </td>
						  <td><img src="/img/spacer.gif" height="2" width="200" /></td>
						
		  </tr> 
		  <tr> 
			<td colspan="9"> 
			  <table width="100%" border="0" cellspacing="0" cellpadding="0"> 
				<tr> 
				  <td><span class="genmed"> &nbsp;Couleur:
 
<select name="addbbcode18" onChange="bbfontstyle('[color=' + this.form.addbbcode18.options[this.form.addbbcode18.selectedIndex].value + ']', '[/color]');this.selectedIndex=0;" onMouseOver="helpline('s')"> 
										  <option style="color:black; background-color: #FAFAFA" value="#444444" class="genmed">Défaut</option> 
 
<option style="color:#CECECE; background-color: #FAFAFA" value="#CECECE" class="genmed">Gris triste</option> 
<option style="color:#999999; background-color: #FAFAFA" value="#999999" class="genmed">Gris divorce</option> 
 
<option style="color:#FF0000; background-color: #FAFAFA" value="#FF0000" class="genmed">Rouge de chez rouge</option> 
<option style="color:#CC6600; background-color: #FAFAFA" value="#CC6600" class="genmed">Chocolat</option> 
 
<option style="color:#FE9E01; background-color: #FAFAFA" value="#FE9E01" class="genmed">Orange</option> 
 
<option style="color:#FFFF00; background-color: #FAFAFA" value="#FFFF00" class="genmed">Jaune de chez jaune</option> 
<option style="color:#ADE76B; background-color: #FAFAFA" value="#ADE76B" class="genmed">Fruitivert</option> 
<option style="color:#66CC00; background-color: #FAFAFA" value="#66CC00" class="genmed">Gilvert</option> 
<option style="color:#018352; background-color: #FAFAFA" value="#018352" class="genmed">Pelouse</option> 
<option style="color:#9412FE; background-color: #FAFAFA" value="#9412FE" class="genmed">Violet du marié</option> 
<option style="color:#376DA8; background-color: #FAFAFA" value="#376DA8" class="genmed">Bleu Chimbo foncé</option> 
<option style="color:#6699CC; background-color: #FAFAFA" value="#6699CC" class="genmed">Bleu Chimbo</option> 
<option style="color:#FE81C0; background-color: #FAFAFA" value="#FE81C0" class="genmed">Rose Dupatta</option> 
<option style="color:#FF3399; background-color: #FAFAFA" value="#FF3399" class="genmed">Rose Chimbo</option> 
<option style="color:#E40173; background-color: #FAFAFA" value="#E40173" class="genmed">Gurujiolet</option> 
 
<option style="color:white; background-color: #FAFAFA" value="white" class="genmed">Blanc caché</option> 
<option style="color:black; background-color: #FAFAFA" value="black" class="genmed">Korblack</option> 
 
										</select> 
 
					&nbsp;Taille:<select name="addbbcode20" onChange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]')" onMouseOver="helpline('f')"> 
					  <option value="7" class="genmed">Très petit</option> 
					  <option value="9" class="genmed">Petit</option> 
					  <option value="12" selected class="genmed">Normal</option> 
					  <option value="18" class="genmed">Grand</option> 
					  <option  value="24" class="genmed">Très grand</option> 
					</select> 
					</span></td> 
				 
				</tr> 
			  </table> 
			</td> 
		  </tr> 
		  <tr> 
			<td colspan="9"> <span class="gensmall"> 
			  <input type="text" name="helpbox" size="45" maxlength="100" style="width:450px; font-size:10px" class="helpline" value="Astuce : Une mise en forme peut être appliquée au texte sélectionné." /> 
			  </span></td> 
		  </tr> 
		  <tr> 
			<td colspan="9"><span class="gen"> 
			  <textarea name="message" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"></textarea> 
			  </span></table></td> </table>
		  </tr> 
		</table>
			
			</td> 
			</td>		
			</tr>
		</tr>
		<tr>
		<td><b>Smileys :</b></td>
		<td valign="top">
		<a href="javascript:emoticon(':noel:')"><img src="/bbs/images/smiles/11.gif" border="0" alt="noel" title="noel" /></a>
		<a href="javascript:emoticon(':hap:')"><img src="/bbs/images/smiles/18.gif" border="0" alt="inconscient" title="inconscient" /></a>
		<a href="javascript:emoticon(':?:')"><img src="/bbs/images/smiles/2.gif" border="0" alt="??" title="??" /></a>
		<a href="javascript:emoticon(':langue:')"><img src="/bbs/images/smiles/31.gif" border="0" alt="langue" title="langue" /></a>
		<a href="javascript:emoticon(':ok:')"><img src="/bbs/images/smiles/36.gif" border="0" alt="ok" title="ok" /></a>
		<a href="javascript:emoticon(':oui:')"><img src="/bbs/images/smiles/37.gif" border="0" alt="oui oui" title="oui oui" /></a>
		<a href="javascript:emoticon(':rire:')"><img src="/bbs/images/smiles/39.gif" border="0" alt="rire" title="rire" /></a>
		<a href="javascript:emoticon(':bave:')"><img src="/bbs/images/smiles/71.gif" border="0" alt="bave" title="bave" /></a>
		<a href="javascript:emoticon(':larme:')"><img src="/bbs/images/smiles/20.gif" border="0" alt="larme" title="larme" /></a>
		<a href="javascript:emoticon(':non:')"><img src="/bbs/images/smiles/35.gif" border="0" alt="non" title="non" /></a>
		<a href="javascript:emoticon(':bye:')"><img src="/bbs/images/smiles/48.gif" border="0" alt="bye" title="bye" /></a>
		<a href="javascript:emoticon(':dehors:')"><img src="/bbs/images/smiles/52.gif" border="0" alt="dehors" title="dehors" /></a>
		<a href="javascript:emoticon(':amour:')"><img src="/bbs/images/smiles/54.gif" border="0" alt="amour" title="amour" /></a>
		<a href="javascript:emoticon(':sors:')"><img src="/bbs/images/smiles/56.gif" border="0" alt="tu sors" title="tu sors" /></a>
		<a href="javascript:emoticon(':omg:')"><img src="/bbs/images/smiles/57.gif" border="0" alt="-_-" title="-_-" /></a>
		<a href="javascript:emoticon(':hs:')"><img src="/bbs/images/smiles/64.gif" border="0" alt="hors sujet" title="hors sujet" /></a>
		<a href="javascript:emoticon(':malade:')"><img src="/bbs/images/smiles/8.gif" border="0" alt="malade" title="malade" /></a>
		<a href="javascript:emoticon(':fou:')"><img src="/bbs/images/smiles/50.gif" border="0" alt=":fou:" title=":fou:" /></a>
		<a href="javascript:emoticon(':sarcastic:')"><img src="/bbs/images/smiles/43.gif" border="0" alt=":sarcastic:" title=":sarcastic:" /></a>
		<a href="javascript:emoticon(':colere:')"><img src="/bbs/images/smiles/15.gif" border="0" alt=":colere:" title=":colere:" /></a>
		</td>
			</table>
			
			<br /><br />
			
			<input type="image" src="envoi.png" alt="envoyer" border="0" />
			</form>
	</table></td>
	<?php
	}
	?>
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
}
include('../bbs/includes/bas.php');  
?>