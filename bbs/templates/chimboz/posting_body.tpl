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
b_help = "{L_BBCODE_B_HELP}";
i_help = "{L_BBCODE_I_HELP}";
u_help = "{L_BBCODE_U_HELP}";
q_help = "{L_BBCODE_Q_HELP}";
c_help = "{L_BBCODE_C_HELP}";
l_help = "{L_BBCODE_L_HELP}";
o_help = "{L_BBCODE_O_HELP}";
p_help = "{L_BBCODE_P_HELP}";
w_help = "{L_BBCODE_W_HELP}";
a_help = "{L_BBCODE_A_HELP}";
s_help = "{L_BBCODE_S_HELP}";
f_help = "{L_BBCODE_F_HELP}";

// Define the bbCode tags
bbcode = new Array();
bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[hs]','[/hs]');
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
		formErrors = "{L_EMPTY_MESSAGE}";
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
<script language="JavaScript" type="text/javascript" src="subblue.js"></script>

<form action="{S_POST_ACTION}" method="post" name="post" onsubmit="return checkForm(this)">

{POST_PREVIEW_BOX}
{ERROR_BOX}

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr> 
		<td align="left">
		  <span>
				&nbsp;&nbsp;&nbsp;
				<a href="{U_INDEX}" class="forumlink" style="color:#FF3399;">{L_INDEX}</a>
				<span style="color:#FF3399;">&raquo;</span>
				<a href="{U_VIEW_FORUM}" class="forumlink" style="color:#FF3399;">{FORUM_NAME}</a>
		  </span>
		</td>
	</tr>
</table>

<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
  <tr>
	<td align="left" valign="bottom">
		<span><a href="index.php?sid=48c9a65487348e3f7c94d9becc918427" class="forumlink" style="color:#FFFFFF;">
		</a></span>

	</td>
	<td align="right" valign="bottom" class="gensmall">
		&nbsp;
	</td>
  </tr>
</table>
<table width="100%" cellspacing="0" border="0" cellpadding="0">
  <tr>
	<td width="8"><img src="templates/chimboz/images/index_body_header_left.gif" width="8" height="8"/></td>
	<td background="templates/chimboz/images/index_body_header_tile.gif"><img src="templates/chimboz/images/spacer.gif" width="8" height="8"/></td>

	<td width="8"><img src="templates/chimboz/images/index_body_header_right.gif" width="8" height="8"/></td>
  </tr>
</table>
<table width="100%" cellspacing="0" border="0" cellpadding="0">
  <tr>
	<td width="3" background="templates/chimboz/images/index_body_left.gif"><img src="templates/chimboz/images/spacer.gif" width="3" height="3"/></td>
	<td bgcolor="#FFFFFF">
<table border="0" cellpadding="4" cellspacing="0" width="100%" class="forumline">
	<tr> 
		<th class="thHead" colspan="2" height="25" background="templates/chimboz/images/index_body_thead.gif"><b>{L_POST_A}</b></th>
	</tr>
	<!-- BEGIN switch_username_select -->
	<tr> 
		<td class="row1"><span class="gen"><b>{L_USERNAME}</b></span></td>
		<td class="row2"><span class="genmed"><input type="text" class="post" tabindex="1" name="username" size="25" maxlength="25" value="{USERNAME}" /></span></td>
	</tr>
	<!-- END switch_username_select -->
	<!-- BEGIN switch_privmsg -->
	<tr> 
		<td class="row1"><span class="gen"><b>{L_USERNAME}</b></span></td>
		<td class="row2"><span class="genmed"><input type="text"  class="post" name="username" maxlength="25" size="25" tabindex="1" value="{USERNAME}" />&nbsp;<input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></span></td>
	</tr>
	<!-- END switch_privmsg -->
	<tr> 
	  <td class="row1" width="22%"><span class="gen"><b>{L_SUBJECT}</b></span></td>
	  <td class="row2" width="78%"> <span class="gen"> 
		<input type="text" name="subject" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="{SUBJECT}" />
		</span> </td>
	</tr>
	<tr> 
	  <td class="row1" valign="top"> 
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  <tr> 
			<td><span class="gen"><b>{L_MESSAGE_BODY}</b></span> </td>
		  </tr>
		  <tr> 
			<td valign="middle" align="center"> <br /><!--
			  <table width="100" border="0" cellspacing="0" cellpadding="5">
				<tr align="center"> 
				  <td colspan="{S_SMILIES_COLSPAN}" class="gensmall"><b>{L_EMOTICONS}</b></td>
				</tr>
				<!-- BEGIN smilies_row -->
				<tr align="center" valign="middle"> 
				  <!-- BEGIN smilies_col -->
				  <td><a href="javascript:emoticon('{smilies_row.smilies_col.SMILEY_CODE}')"><img src="{smilies_row.smilies_col.SMILEY_IMG}" border="0" alt="{smilies_row.smilies_col.SMILEY_DESC}" title="{smilies_row.smilies_col.SMILEY_DESC}" /></a></td>
				  <!-- END smilies_col -->
				</tr>
				<!-- END smilies_row -->
				<!-- BEGIN switch_smilies_extra -->
				<tr align="center"> 
				  <td colspan="{S_SMILIES_COLSPAN}"><span  class="nav"><a href="{U_MORE_SMILIES}" onclick="window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');return false;" target="_phpbbsmilies" class="nav">{L_MORE_SMILIES}</a></span></td>
				</tr>
				<!-- END switch_smilies_extra -->
			  </table>-->
			</td>
		  </tr>
		</table>
	  </td>
	  <td class="row2" valign="top"><span class="gen"> <span class="genmed"> </span> 
		<table width="450" border="0" cellspacing="0" cellpadding="2">
		  <tr align="center" valign="middle">
						<td><span class="genmed">
						  <input type="button" class="bouton" accesskey="b" name="addbbcode0" value="Gras" style="font-weight:bold;" onClick="bbstyle(0)" onMouseOver="helpline('b')" />
						  </span></td>
						<td><span class="genmed">
						  <input type="button" class="bouton" accesskey="i" name="addbbcode2" value="Italique" style="font-style:italic" onClick="bbstyle(2)" onMouseOver="helpline('i')" />
						  </span></td>
						<td><span class="genmed">
						  <input type="button" class="bouton" accesskey="u" name="addbbcode4" value="Souligné" style="text-decoration: underline;" onClick="bbstyle(4)" onMouseOver="helpline('u')" />
						  </span></td>
						<td><span class="genmed">
						  <input type="button" class="bouton" accesskey="r" name="addbbcode22" value="Rayé" style="text-decoration: line-through;" onClick="bbstyle(22)" onMouseOver="helpline('r')" />
						  </span></td>
						<td><span class="genmed">
						  <input type="button" class="bouton" accesskey="q" name="addbbcode6" value="Citer" style="" onClick="bbstyle(6)" onMouseOver="helpline('q')" />
						  </span></td>
						<td><span class="genmed">
						  <input type="button" class="bouton" accesskey="w" name="addbbcode16" value="Lien" style="text-decoration: underline;" onClick="bbstyle(16)" onMouseOver="helpline('w')" />
						  </span></td>
						<td><span class="genmed">
						  <input type="button" class="bouton" accesskey="h" name="addbbcode15" value="Hors-sujet" style="" onClick="bbstyle(24)" onMouseOver="helpline('hs')" id="addbbcode15" />
						  </span></td>
		  </tr>
		  <tr> 
			<td colspan="9"> 
			  <table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr> 
				  <td><span class="genmed"> &nbsp;{L_FONT_COLOR}:

<select name="addbbcode18" onChange="bbfontstyle('[color=' + this.form.addbbcode18.options[this.form.addbbcode18.selectedIndex].value + ']', '[/color]');this.selectedIndex=0;" onMouseOver="helpline('s')">
										  <option style="color:black; background-color: {T_TD_COLOR1}" value="{T_FONTCOLOR1}" class="genmed">{L_COLOR_DEFAULT}</option>

<option style="color:#CECECE; background-color: {T_TD_COLOR1}" value="#CECECE" class="genmed">Gris triste</option>
<option style="color:#999999; background-color: {T_TD_COLOR1}" value="#999999" class="genmed">Gris divorce</option>

<option style="color:#FF0000; background-color: {T_TD_COLOR1}" value="#FF0000" class="genmed">Rouge de chez rouge</option>
<option style="color:#CC6600; background-color: {T_TD_COLOR1}" value="#CC6600" class="genmed">Chocolat</option>

<option style="color:#FE9E01; background-color: {T_TD_COLOR1}" value="#FE9E01" class="genmed">Orange</option>

<option style="color:#FFFF00; background-color: {T_TD_COLOR1}" value="#FFFF00" class="genmed">Jaune de chez jaune</option>
<option style="color:#ADE76B; background-color: {T_TD_COLOR1}" value="#ADE76B" class="genmed">Fruitivert</option>
<option style="color:#66CC00; background-color: {T_TD_COLOR1}" value="#66CC00" class="genmed">Gilvert</option>
<option style="color:#018352; background-color: {T_TD_COLOR1}" value="#018352" class="genmed">Pelouse</option>
<option style="color:#9412FE; background-color: {T_TD_COLOR1}" value="#9412FE" class="genmed">Violet du marié</option>
<option style="color:#376DA8; background-color: {T_TD_COLOR1}" value="#376DA8" class="genmed">Bleu Chimbo foncé</option>
<option style="color:#6699CC; background-color: {T_TD_COLOR1}" value="#6699CC" class="genmed">Bleu Chimbo</option>
<option style="color:#FE81C0; background-color: {T_TD_COLOR1}" value="#FE81C0" class="genmed">Rose Dupatta</option>
<option style="color:#FF3399; background-color: {T_TD_COLOR1}" value="#FF3399" class="genmed">Rose Chimbo</option>
<option style="color:#E40173; background-color: {T_TD_COLOR1}" value="#E40173" class="genmed">Gurujiolet</option>

<option style="color:white; background-color: {T_TD_COLOR1}" value="white" class="genmed">Blanc caché</option>
<option style="color:black; background-color: {T_TD_COLOR1}" value="black" class="genmed">Korblack</option>

										</select>

					&nbsp;{L_FONT_SIZE}:<select name="addbbcode20" onChange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]')" onMouseOver="helpline('f')">
					  <option value="7" class="genmed">{L_FONT_TINY}</option>
					  <option value="9" class="genmed">{L_FONT_SMALL}</option>
					  <option value="12" selected class="genmed">{L_FONT_NORMAL}</option>
					  <option value="18" class="genmed">{L_FONT_LARGE}</option>
					  <option  value="24" class="genmed">{L_FONT_HUGE}</option>
					</select>
					</span></td>
				  <td nowrap="nowrap" align="right"><span class="gensmall"><a href="javascript:bbstyle(-1)" class="genmed" onMouseOver="helpline('a')">{L_BBCODE_CLOSE_TAGS}</a></span></td>
				</tr>
			  </table>
			</td>
		  </tr>
		  <tr> 
			<td colspan="9"> <span class="gensmall"> 
			  <input type="text" name="helpbox" size="45" maxlength="100" style="width:450px; font-size:10px" class="helpline" value="{L_STYLES_TIP}" />
			  </span></td>
		  </tr>
		  <tr> 
			<td colspan="9"><span class="gen"> 
			  <textarea name="message" rows="15" cols="35" wrap="virtual" style="width:450px" tabindex="3" class="post" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);">{MESSAGE}</textarea>
			  </span></td>
		  </tr>
		</table>
		</span></td>
	</tr>
	<tr> 
	  <td class="row1" valign="top"><span class="gen"><b>{L_OPTIONS}</b></span><br /><span class="gensmall">{HTML_STATUS}<br />{BBCODE_STATUS}<br />
<a href="faq.php?mode=moods" target="_phpbbcode">Moods</a>: <u>OK !</u><br />
      {SMILIES_STATUS}</span></td>
	  <td class="row2"><span class="gen"> </span> 
		<table cellspacing="0" cellpadding="1" border="0">
		  <!-- BEGIN switch_bbcode_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="disable_bbcode" {S_BBCODE_CHECKED} />
			</td>
			<td><span class="gen">{L_DISABLE_BBCODE}</span></td>
		  </tr>
		  <!-- END switch_bbcode_checkbox -->
		  <!-- BEGIN switch_smilies_checkbox -->
		  <tr>
			<td>
			  <input type="checkbox" name="disable_smilies" {S_SMILIES_CHECKED} />
			</td>
			<td><span class="gen">{L_DISABLE_SMILIES}</span></td>
		  </tr>
		  <!-- END switch_smilies_checkbox -->
		  <!-- BEGIN switch_signature_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="attach_sig" {S_SIGNATURE_CHECKED} />
			</td>
			<td><span class="gen">{L_ATTACH_SIGNATURE}</span></td>
		  </tr>
		  <!-- END switch_signature_checkbox -->
		  <!-- BEGIN switch_delete_checkbox -->
		  <tr> 
			<td> 
			  <input type="checkbox" name="delete" />
			</td>
			<td><span class="gen">{L_DELETE_POST}</span></td>
		  </tr>
		  <!-- END switch_delete_checkbox -->
		  <!-- BEGIN switch_type_toggle -->
		  <tr> 
			<td></td>
			<td><span class="gen">{S_TYPE_TOGGLE}</span></td>
		  </tr>
		  <!-- END switch_type_toggle -->
		</table>
	  </td>
	</tr>
	{POLLBOX} 
	<tr> 
	  <td class="catBottom" colspan="2" align="center" height="28">
	  {S_HIDDEN_FORM_FIELDS}
	  <input type="submit" tabindex="5" name="preview" class="button" value="{L_PREVIEW}" />
	
	  &nbsp;<input type="submit" accesskey="s" tabindex="6" name="post" class="button" value="{L_SUBMIT}" />
	
	  </td>
	</tr>
  </table>
<!-- end content -->
	</td>

	<td width="3" background="templates/chimboz/images/index_body_right.gif"><img src="templates/chimboz/images/spacer.gif" width="3" height="3"/></td>
  </tr>
</table>
<table width="100%" cellspacing="0" border="0" cellpadding="0">
  <tr>
	<td width="8"><img src="templates/chimboz/images/index_body_footer_left.gif" width="8" height="8"/></td>
	<td background="templates/chimboz/images/index_body_footer_tile.gif"><img src="templates/chimboz/images/spacer.gif" width="8" height="8"/></td>
	<td width="8"><img src="templates/chimboz/images/index_body_footer_right.gif" width="8" height="8"/></td>
  </tr>
</table>
</form>

<br clear="all" />

<table width="100%" cellspacing="0" border="0" cellpadding="0">
 <tr>

	<td width="8"><img src="templates/chimboz/images/index_body_footer_left_top.gif" width="8" height="8"/></td>
	<td background="templates/chimboz/images/index_body_footer_tile_top.gif"><img src="templates/chimboz/images/spacer.gif" width="8" height="8"/></td>
	<td width="8"><img src="templates/chimboz/images/index_body_footer_right_top.gif" width="8" height="8"/></td>
  </tr>
</table>
<table width="100%" cellspacing="0" border="0" cellpadding="0">
  <tr>
	<td width="3" background="templates/chimboz/images/index_body_left.gif"><img src="templates/chimboz/images/spacer.gif" width="3" height="3"/></td>
	<td bgcolor="#FFFFFF">
<table width="100%" cellspacing="2" border="0" align="center">
  <tr>
	<td valign="top" align="center">{JUMPBOX}</td>
  </tr>
</table>
<!-- end content -->
	</td>

	<td width="3" background="templates/chimboz/images/index_body_right.gif"><img src="templates/chimboz/images/spacer.gif" width="3" height="3"/></td>
  </tr>
</table>
<table width="100%" cellspacing="0" border="0" cellpadding="0">
  <tr>
	<td width="8"><img src="templates/chimboz/images/index_body_footer_left.gif" width="8" height="8"/></td>
	<td background="templates/chimboz/images/index_body_footer_tile.gif"><img src="templates/chimboz/images/spacer.gif" width="8" height="8"/></td>
	<td width="8"><img src="templates/chimboz/images/index_body_footer_right.gif" width="8" height="8"/></td>
  </tr>
</table>

