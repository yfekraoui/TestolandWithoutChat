{TPL_SLOT_BLUE_TOP}
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
			  <td><span class="gen">{poll_option.POLL_OPTION_CAPTION}</span></td>
			  <td>
				<table cellspacing="0" cellpadding="0" border="0">
				  <tr>
					<td><img src="http://img.chapatiz.com/bbs/vote_lcap.gif" width="4" alt="" height="12" /></td>
					<td><img src="{poll_option.POLL_OPTION_IMG}" width="{poll_option.POLL_OPTION_IMG_WIDTH}" height="12" alt="{poll_option.POLL_OPTION_PERCENT}" /></td>
					<td><img src="http://img.chapatiz.com/bbs/vote_rcap.gif" width="4" alt="" height="12" /></td>
				  </tr>
				</table>
			  </td>
			  <td align="center"><b><span class="gen">&nbsp;{poll_option.POLL_OPTION_PERCENT}&nbsp;</span></b></td>
			  <td align="center"><span class="gen">[ {poll_option.POLL_OPTION_RESULT} ]</span></td>
			</tr>
			<!-- END poll_option -->
		  </table>
		</td>
	  </tr>
	  <tr> 
		<td align="center"><br /><span class="gen"><b>{L_TOTAL_VOTES} : {TOTAL_VOTES}</b></span><br /><br /></td>
	  </tr>
	</table>
{TPL_SLOT_WHITE_BOTTOM}
