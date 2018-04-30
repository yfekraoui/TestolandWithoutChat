{TPL_SLOT_BLUE_TOP}
<form method="POST" action="{S_POLL_ACTION}">
<table class="forumline" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
	  <tr>
		<td height="25" valign="top" background="http://img.chapatiz.com/index_body_thead.gif" align="center"><span class="gen"><b>{POLL_QUESTION}</b></span></td>
	  </tr>
	  <tr>
		<td>&nbsp;</td>
	  </tr>
	  <tr>
		<td align="center">
		  <table cellspacing="0" cellpadding="2" border="0">
			<!-- BEGIN poll_option -->
			<tr>
				<td><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" />&nbsp;</td>
				<td><span class="gen">{poll_option.POLL_OPTION_CAPTION}</span></td>
			</tr>
			<!-- END poll_option -->
		  </table>
		</td>
	  </tr>
	  <tr>
		<td align="center"><br />
		 <input type="submit" name="submit" value="{L_SUBMIT_VOTE}" class="liteoption" />
		</td>
	  </tr>
	  <tr>
		<td align="center"><br /><span class="gensmall"><b><a href="{U_VIEW_RESULTS}" class="gensmall">{L_VIEW_RESULTS}</a></b></span></td>
	  </tr>
	</table>
{S_HIDDEN_FIELDS}</form>
{TPL_SLOT_WHITE_BOTTOM}
