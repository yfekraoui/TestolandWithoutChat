
<form action="{S_MODCP_ACTION}" method="post">
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
  <table width="600" cellpadding="4" cellspacing="0" border="0" class="forumline">
	<tr> 
	  <th height="25" class="thHead" background="/img/index_body_thead.gif"><b>{MESSAGE_TITLE}</b></th>
	</tr>
	<tr> 
	  <td class="row1">
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		  <tr> 
			<td align="center"><span class="gen">{L_MOVE_TO_FORUM} &nbsp; {S_FORUM_SELECT}<br /><br />
			  <input type="checkbox" name="move_leave_shadow" />{L_LEAVESHADOW}<br />
			  <br />
			  {MESSAGE_TEXT}</span><br />
			  <br />
			  {S_HIDDEN_FIELDS} 
			  <input class="mainoption" type="submit" name="confirm" value="{L_YES}" />
			  &nbsp;&nbsp; 
			  <input class="liteoption" type="submit" name="cancel" value="{L_NO}" />
			</td>
		  </tr>
		  <tr> 
			<td>&nbsp;</td>
		  </tr>
		</table>
	  </td>
	</tr>
  </table>
{TPL_SLOT_WHITE_BOTTOM}


</form>
