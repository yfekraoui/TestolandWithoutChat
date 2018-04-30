<form method="post" action="{S_SPLIT_ACTION}">

  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
	<td align="left">
		  <span style="color:#FF3399;">
				&nbsp;&nbsp;&nbsp;
				<a href="{U_INDEX}" class="forumlink" style="color:#FF3399;">{L_INDEX}</a>
				&raquo;
				<a href="{U_VIEW_FORUM}" class="forumlink" style="color:#FF3399;">{FORUM_NAME}</a>
		  </span>
	</td>
	</tr>
  </table>

{TPL_SLOT_BLUE_TOP}
  <table width="100%" cellpadding="4" cellspacing="0" border="0" class="forumline">
	<tr> 
	  <th height="25" class="thHead" colspan="3" nowrap="nowrap" background="/img/index_body_thead.gif">{L_SPLIT_TOPIC}</th>
	</tr>
	<tr>
	  <td class="row2" colspan="3" align="center"><span class="gensmall">{L_SPLIT_TOPIC_EXPLAIN}</span></td>
	</tr>
	<tr> 
	  <td class="row1" nowrap="nowrap"><span class="gen">{L_SPLIT_SUBJECT}</span></td>
	  <td class="row2" colspan="2"><input class="post" type="text" size="35" style="width: 350px" maxlength="60" name="subject" /></td>
	</tr>
	<tr> 
	  <td class="row1" nowrap="nowrap"><span class="gen">{L_SPLIT_FORUM}</span></td>
	  <td class="row2" colspan="2">{S_FORUM_SELECT}</td>
	</tr>
	<tr> 
	  <td class="catHead" colspan="3" height="28"> 
		<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  <tr> 
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" />
			</td>
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />
			</td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr> 
	  <th class="thLeft" nowrap="nowrap">{L_AUTHOR}</th>
	  <th nowrap="nowrap">{L_MESSAGE}</th>
	  <th class="thRight" nowrap="nowrap">{L_SELECT}</th>
	</tr>
	<!-- BEGIN postrow -->
	{postrow.TR_SEPARATOR}
	<tr> 
	  <td align="left" valign="top" class="{postrow.ROW_CLASS}"><span class="name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span></td>
	  <td width="100%" valign="top" class="{postrow.ROW_CLASS}"> 
		<table width="100%" cellspacing="0" cellpadding="3" border="0">
		  <tr> 
			<td valign="middle"><img src="templates/subSilver/images/icon_minipost.gif" alt="{L_POST}"><span class="postdetails">{L_POSTED}: 
			  {postrow.POST_DATE}&nbsp;&nbsp;&nbsp;&nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>
		  </tr>
		  <tr> 
			<td valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
			 <td align="left" background="/img/index_body_cat_sep.gif"><img src="/img/index_body_cat_sep_l.gif"/></td>
			 <td align="right" background="/img/index_body_cat_sep.gif"><img src="/img/index_body_cat_sep_r.gif"/></td>
			</tr></table>
			<br />
			<span class="postbody">{postrow.MESSAGE}</span>
			</td>
		  </tr>
		</table>
	  </td>
	  <td width="5%" align="center" class="{postrow.ROW_CLASS}">{postrow.S_SPLIT_CHECKBOX}</td>
	</tr>
	<tr>
	  <td colspan="3" height="1" class="row3"><img src="templates/subSilver/images/spacer.gif" width="1" height="1" alt="."></td>
	</tr>
	<!-- END postrow -->
	<tr> 
	  <td class="catBottom" colspan="3" height="28"> 
		<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  <tr> 
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" />
			</td>
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />
			  {S_HIDDEN_FIELDS} </td>
		  </tr>
		</table>
	  </td>
	</tr>
  </table>
{TPL_SLOT_WHITE_BOTTOM}

</form>
