<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post" name="form">

{ERROR_BOX}

{TPL_SLOT_BLUE_TOP}
<table border="0" cellpadding="3" cellspacing="1" width="100%" class="forumline">
	<tr> 
		<th background="/bbs/templates/chimboz/images/index_body_thead.gif" style="margin:0;padding:0;" colspan="2" height="25" valign="middle">{L_REGISTRATION_INFO}</th>
	</tr>
	<tr> 
		<td class="row2" colspan="2"><span class="gensmall">{L_ITEMS_REQUIRED}</span></td>
	</tr>
	<!-- BEGIN switch_namechange_disallowed -->
	<tr> 
		<td class="row1" width="38%"><span class="gen">{L_USERNAME}: *</span></td>
		<td class="row2"><input type="hidden" name="username" value="{USERNAME}" /><span class="gen"><b>{USERNAME}</b></span></td>
	</tr>
	<!-- END switch_namechange_disallowed -->
	<!-- BEGIN switch_namechange_allowed -->
	<tr> 
		<td class="row1" width="38%"><span class="gen">{L_USERNAME}: *</span></td>
		<td class="row2"><input type="text" class="post" style="width:200px" name="username" size="25" maxlength="25" value="{USERNAME}" /></td>
	</tr>
	<!-- END switch_namechange_allowed -->
	<tr> 
		<td class="row1"><span class="gen">{L_EMAIL_ADDRESS}: *</span></td>
		<td class="row2"><input type="text" class="post" style="width:200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></td>
	</tr>
	<!-- BEGIN switch_edit_profile -->
	<tr> 
	  <td class="row1"><span class="gen">{L_CURRENT_PASSWORD}: *</span><br />
		<span class="gensmall">{L_CONFIRM_PASSWORD_EXPLAIN}</span></td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="cur_password" size="25" maxlength="32" value="{CUR_PASSWORD}" />
	  </td>
	</tr>
	<!-- END switch_edit_profile -->
	<tr> 
	  <td class="row1"><span class="gen">{L_NEW_PASSWORD}: *</span><br />
		<span class="gensmall">{L_PASSWORD_IF_CHANGED}</span></td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="new_password" size="25" maxlength="32" value="{NEW_PASSWORD}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="gen">{L_CONFIRM_PASSWORD}: * </span><br />
		<span class="gensmall">{L_PASSWORD_CONFIRM_IF_CHANGED}</span></td>
	  <td class="row2"> 
		<input type="password" class="post" style="width: 200px" name="password_confirm" size="25" maxlength="32" value="{PASSWORD_CONFIRM}" />
	  </td>
	</tr>
	<!-- Visual Confirmation -->
	<!-- BEGIN switch_confirm -->
	<tr>
		<td class="row1" colspan="2" align="center"><span class="gensmall">{L_CONFIRM_CODE_IMPAIRED}</span><br /><br />{CONFIRM_IMG}<br /><br /></td>
	</tr>
	<tr> 
	  <td class="row1"><span class="gen">{L_CONFIRM_CODE}: * </span><br /><span class="gensmall">{L_CONFIRM_CODE_EXPLAIN}</span></td>
	  <td class="row2"><input type="text" class="post" style="width: 200px" name="confirm_code" size="6" maxlength="6" value="" /></td>
	</tr>
	<!-- END switch_confirm -->
	<tr> 
	  <td class="row1"><span class="gen">{L_WEBSITE}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post" style="width: 200px"  name="website" size="25" maxlength="255" value="{WEBSITE}" />
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="gen">{L_SIGNATURE}:</span></td>
	  <td class="row2"> 
		<input type="text" class="post" style="width: 200px"  name="signature" size="25" maxlength="255" value="{SIGNATURE}"/>
	  </td>
	</tr>
	<tr> 
	  <td class="row1"><span class="gen">{L_TIMEZONE}:</span></td>
	  <td class="row2"><span class="gensmall">{TIMEZONE_SELECT}</span></td>
	</tr>
	<tr> 
	  <td class="catSides" colspan="2" height="28">&nbsp;</td>
	</tr>
	<tr> 
	  <th class="thSides" background="/bbs/templates/chimboz/images/index_body_thead.gif" style="margin:0;padding:0;" colspan="2" height="25" valign="middle">Avatar</th>
	</tr>
	<tr> 
	  <td class="row1" colspan="2" style="text-align:center;">
                          <table border="0" cellspacing="0" cellpadding="5" align='center'> 
                            <tr> 
                              <td valign="center" align="center"> 
                                Coiffure
                                <div id="selector_coiffure" align="center"></div> 
                                Corps
                                <div id="selector_corp" align="center"></div> 
                                Chaussure
                                <div id="selector_chaussure" align="center"></div> 
                              </td> 
                              <td  valign="center" align="center"> <div  name='cabine_swf' id='cabine_swf'>
<OBJECT codeBase='http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0'
width='96' height='96'  style='position:relative;left:0px;top:-10px;width:96px;height:96px;align:center;'
align='middle' CLASSID='CLSID:D27CDB6E-AE6D-11CF-96B8-444553540000'>
<PARAM NAME='allowScriptAccess' VALUE='sameDomain'> 
<PARAM NAME='wmode' VALUE='transparent'>
<PARAM NAME='movie' VALUE='/img/member.swf'> 
<PARAM NAME='quality' VALUE='high'>
<PARAM NAME='menu' VALUE='false'>
<PARAM NAME='FlashVars' VALUE='&amp;m={MOOD}&amp;ad={AVATAR_DESIGN}&amp;'>
<embed src='/img/member.swf' width='96' height='96' hspace='0' vspace='0' align='middle' quality='high' 
allowScriptAccess='sameDomain' wmode='transparent' menu='false' FlashVars='&amp;m={MOOD}&amp;ad={AVATAR_DESIGN}&amp;'
type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/go/getflashplayer'/>
</OBJECT></div>
                              </td> 
                            </tr> 
			</table>
		<input type="hidden" class="post" style="width: 200px"  name="avatar_design" id="avatar_design" size="35" maxlength="150" value="{AVATAR_DESIGN}" />
	  </td>
	</tr>
	<tr>
		<td class="catBottom" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />&nbsp;&nbsp;<input type="reset" value="{L_RESET}" name="reset" class="liteoption" /></td>
	</tr>
</table>
{TPL_SLOT_WHITE_BOTTOM}
</form>
