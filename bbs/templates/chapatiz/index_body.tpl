
{TPL_LEADER_BOARD}
<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
  <tr>
	<td align="left" valign="bottom">
		<span><a href="{U_INDEX}" class="forumlink" style="color:#FFFFFF;">BBS</a></span>
	</td>
	<td align="right" valign="bottom" class="gensmall">&nbsp;
		
	</td>
  </tr>
</table>
{TPL_SLOT_BLUE_TOP}
<table width="100%" cellpadding="2" cellspacing="0" border="0" class="forumline" bgcolor="FFFFFF">
  <tr>
	<th colspan="2" height="25" class="thCornerL" valign="top" height="25" nowrap="nowrap" 
	background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_FORUM}&nbsp;</th>
	<th width="50" height="25" class="thTop" valign="top" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_TOPICS}&nbsp;</th>
	<th width="50" height="25" class="thTop" valign="top" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_POSTS}&nbsp;</th>
	<th height="25" class="thCornerR" valign="top" nowrap="nowrap" background="templates/chimboz/images/index_body_thead.gif">&nbsp;{L_LASTPOST}&nbsp;</th>
  </tr>
  <!-- BEGIN catrow -->
  <tr>
	<td height="25" class="catLeft" valign="middle" colspan="2" height="28" background="templates/chimboz/images/index_body_cat_tile.gif"><span class="cattitle">&nbsp;<a href="{TPL_SLOT_CAT}"><img src="templates/chimboz/images/index_body_cat_close.gif" border="0"/></a><a href="{catrow.U_VIEWCAT}" class="cattitle"> {catrow.CAT_DESC}</a></span></td>
	<td height="25" class="rowpic" colspan="3" background="templates/chimboz/images/index_body_cat_tile.gif" align="right">&nbsp;</td>
  </tr>
  <!-- BEGIN forumrow -->
  {catrow.forumrow.SEPARATOR}
  <tr>
	<td class="row1" align="center" valign="middle" height="50"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></td>
	<td class="row1" width="100%" height="50"><span class="forumlink"><a href="{catrow.forumrow.U_VIEWFORUM}" class="forumlink">{catrow.forumrow.FORUM_NAME}</a><br />
	  </span><span class="genmed">{catrow.forumrow.FORUM_DESC}<br />
	  </span><span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span><br />
	  <img src="templates/chimboz/images/spacer.gif" width="400" height="1"></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.TOPICS}</span></td>
	<td class="row2" align="center" valign="middle" height="50"><span class="gensmall">{catrow.forumrow.POSTS}</span></td>
	<td class="row2" align="center" valign="middle" height="50" nowrap="nowrap">{catrow.forumrow.LAST_POST}</td>
  </tr>
  <tr>
  <!-- END forumrow -->
  <!-- END catrow -->
</table>
{TPL_SLOT_WHITE_BOTTOM}


<table width="100%" cellspacing="0" border="0" align="center" cellpadding="2">
  <tr>
	<td align="left">&nbsp; <a href="{U_MARK_READ}" class="gensmall" style="color:#D2E4F2;">{L_MARK_FORUMS_READ}</a></td>
  </tr>
</table>
                                         
<br clear="all" />

{TPL_SLOT_WHITE_TOP}
<table cellspacing="3" border="0" align="center" cellpadding="0">
  <tr>
	<td width="20" align="center"><img src="templates/chimboz/images/folder_new_big.gif" alt="{L_NEW_POSTS}"/></td>
	<td><span class="gensmall">{L_NEW_POSTS}</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/chimboz/images/folder_big.gif" alt="{L_NO_NEW_POSTS}" /></td>
	<td><span class="gensmall">{L_NO_NEW_POSTS}</span></td>
	<td>&nbsp;&nbsp;</td>
	<td width="20" align="center"><img src="templates/chimboz/images/folder_locked_big.gif" alt="{L_FORUM_LOCKED}" /></td>
	<td><span class="gensmall">{L_FORUM_LOCKED}</span></td>
  </tr>
</table>
{TPL_SLOT_WHITE_BOTTOM}


