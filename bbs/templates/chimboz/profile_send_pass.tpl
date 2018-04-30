<form action="{S_LOGIN_ACTION}" method="post" target="_top">

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
	<td align="left">
		  <span>
				&nbsp;&nbsp;&nbsp;
				<a href="{U_INDEX}" class="forumlink" style="color:#FF3399;">{L_INDEX}</a>
		  </span>
	</td>
  </tr>
</table>

{TPL_SLOT_BLUE_TOP}
<table width="600" cellpadding="4" cellspacing="0" border="0" class="forumline" align="center">
  <tr>
	<th height="25" class="thHead" nowrap="nowrap"  background="/img/index_body_thead.gif">{L_SEND_PASSWORD}</th>
  </tr>
  <tr>
	<td class="row1"><table border="0" cellpadding="3" cellspacing="1" width="100%">
		  <tr>
			<td colspan="2" align="center">&nbsp;</td>
		  </tr>
		  <tr> 
	  <td class="row2" colspan="2"><span class="gensmall">{L_ITEMS_REQUIRED}</span></td>
	</tr>
		  <tr> 
			<td width="45%" align="right"><span class="gen">{L_USERNAME}*:</span></td>
			<td> 
			  <input type="text" name="username" size="25" maxlength="40" value="{USERNAME}" />
			</td>
		  </tr>
		  <tr> 
			<td align="right"><span class="gen">{L_EMAIL_ADDRESS}: *:</span></td>
			<td> 
			<input type="text" class="post" style="width: 200px" name="email" size="25" maxlength="255" value="{EMAIL}" />
			</td>
		  </tr>
		<tr> 
	  <td class="catBottom" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS} 
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
		&nbsp;&nbsp; 
		<input type="reset" value="{L_RESET}" name="reset" class="liteoption" />
	  </td>
	</tr>
		</table></td>
  </tr>
</table>
{TPL_SLOT_WHITE_BOTTOM}

</form>
