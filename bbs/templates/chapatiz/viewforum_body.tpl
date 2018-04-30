<form method="post" action="{S_POST_DAYS_ACTION}">
{TPL_LEADER_BOARD}
  <table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
	<tr>
	  <td align="left" valign="middle" width="100%" colspan="2">
		  <span>
		   &nbsp;&nbsp;&nbsp;
		   <a href="{U_INDEX}" class="forumlink" style="color:#FFFFFF;">BBS</a>
		   <span class="forumlink" style="color:#FFFFFF;">&raquo;</span>
		   <a class="forumlink" style="color:#FFFFFF;" href="{U_VIEW_FORUM}">{FORUM_NAME}</a>
		  </span>
	  </td>
	  <td align="right" valign="bottom" nowrap="nowrap">
	   <span><a href="{U_MARK_READ}" class="gensmall" style="color:#73A1CD;">{L_MARK_TOPICS_READ}</a></span>
	  </td>
	</tr>
  </table>
  {TPL_SLOT_BLUE_TOP}
  <table border="0" cellpadding="4" cellspacing="0" width="100%" class="forumline" bgcolor="FFFFFF">
	<tr>
	  <th colspan="2" height="25" style="padding:0;" align="center" valign="top"  class="thCornerL" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_TOPICS}&nbsp;</th>
	  <th width="50" height="25" style="padding:0;" align="center" valign="top" class="thTop" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_REPLIES}&nbsp;</th>
	  <th width="100" height="25" style=";padding:0;" align="center" valign="top" class="thTop" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_AUTHOR}&nbsp;</th>
	  <th width="50" height="25" style="padding:0;" align="center" valign="top" class="thTop" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_VIEWS}&nbsp;</th>
	  <th align="center" height="25" style="padding:0;" valign="top" class="thCornerR" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_LASTPOST}&nbsp;</th>
	</tr>
	<!-- BEGIN topicrow -->
	<tr>
	  <td class="row1" align="center" valign="middle" width="20"><img src="{topicrow.TOPIC_FOLDER_IMG}"  alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  <td class="row1" width="100%">
      <span class="topictitle">
            <!--{topicrow.NEWEST_POST_IMG}-->
            <img src="templates/chimboz/images/spacer.gif" width="400" height="1"><br />{topicrow.TOPIC_TYPE}
            <a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">
               {topicrow.TOPIC_TITLE}
            </a>
      </span>
      <span class="gensmall"><br />
		{topicrow.GOTO_PAGE}
      </span></td>
	  <td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  <td class="row3" align="center" valign="middle"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	  <td class="row2" align="center" valign="middle"><span class="postdetails">{topicrow.VIEWS}</span></td>
	  <td class="row3Right" align="center" valign="middle" nowrap="nowrap"><span class="postdetails">{topicrow.LAST_POST_TIME}</span>
      <table border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td class="postdetails" align="right">{topicrow.LAST_POST_AUTHOR}&nbsp;&raquo;&nbsp;</td>
      <td align="left">{topicrow.LAST_POST_IMG}</td>
      </tr>
      </table></td>
	</tr>
<tr>
	<td colspan="6">
		{topicrow.TR_SEPARATOR}
	</td>
	</tr>
	<!-- END topicrow -->
	<!-- BEGIN switch_no_topics -->
	<tr>
	  <td class="row1" colspan="6" height="30" align="center" valign="middle"><span class="gen">{L_NO_TOPICS}</span></td>
	</tr>
	<!-- END switch_no_topics -->
    <tr>
      <td colspan="6">
          <table width="100%"  border="0" cellspacing="3" cellpadding="3">
          <tr>
           <td align="left" width="25%">{PAGE_PREVIOUS}</td>
           <td align="center" width="50%">{PAGINATION}</td>
           <td align="right" width="25%">{PAGE_NEXT}</a></td>
          </tr>
          </table>
      </td>
    </tr>
	<tr>
	  <td class="catBottom" align="center" valign="middle" colspan="6" height="28">
                <table border="0" cellspacing="0" cellpadding="3">
                <tr>
                  <td class="genmed">{L_DISPLAY_TOPICS}</td>
                  <td class="genmed">{S_SELECT_TOPIC_DAYS}</td>
                  <td class="genmed"><input type="image" border="0" name="submit" src="templates/chimboz/images/go.gif" value="{L_GO}" width="27" height="18"></td>
                </tr>
                </table>
      </td>
	</tr>
  </table>
  {TPL_SLOT_WHITE_BOTTOM}

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr>
	  <td align="left" valign="middle" width="50">
		  <a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a>
	  </td>
	  <td align="left" valign="middle" width="100%">
	  </td>
	</tr>
  </table>

</form>

{TPL_SLOT_WHITE_TOP}
<table width="100%" cellspacing="0" border="0" align="center" cellpadding="0">
	<tr>
	  <td align="center">{JUMPBOX}</td>
	</tr>
	<tr>
		<td align="left" valign="top">
		<table cellspacing="3" cellpadding="0" border="0">
			<tr>
				<td width="20" align="left"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}"  /></td>
				<td class="gensmall">{L_NEW_POSTS}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}"  /></td>
				<td class="gensmall">{L_NO_NEW_POSTS}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}"  /></td>
				<td class="gensmall">{L_ANNOUNCEMENT}</td>
			</tr>
			<tr>
				<td width="20" align="center"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}"  /></td>
				<td class="gensmall">{L_NEW_POSTS_HOT}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}"  /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}"  /></td>
				<td class="gensmall">{L_STICKY}</td>
			</tr>
			<tr>
				<td class="gensmall"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}"  /></td>
				<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
				<td>&nbsp;&nbsp;</td>
				<td class="gensmall"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}"  /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
			</tr>
		</table>
		</td>
		<!-- td align="right"><span class="gensmall">{S_AUTH_LIST}</span></td -->
	</tr>
</table>
{TPL_SLOT_WHITE_BOTTOM}
