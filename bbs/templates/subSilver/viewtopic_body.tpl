<script src="/ac.js" type="text/javascript"></script>
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
<tr><td align="left" valign="middle"><span>&nbsp;&nbsp;&nbsp;
<a href="{U_INDEX}" class="forumlink" style="color:#ff0099;">BBS</a>
<span style="color:#ff0099;">&raquo;</span>
<a href="{U_VIEW_FORUM}" class="forumlink" style="color:#ff0099;">{FORUM_NAME}</a>
<span style="color:#ff0099;">&raquo;</span><br />&nbsp;
<a href="{U_VIEW_TOPIC}" class="forumlink" style="color:#ff0099;font-size:20px;">{TOPIC_TITLE}</a>
</span></td></tr></table>
{POLL_DISPLAY}
{TPL_SLOT_BLUE_TOP}
<table class="forumline" width="100%" cellspacing="0" cellpadding="3" border="0"><tr>
<td colspan="2" height="25" valign="top" background="templates/chimboz/images/index_body_thead.gif"><table class="forumline" width="100%" cellspacing="0" cellpadding="0" border="0">
<tr><td valign="top" align="left"><a href="{U_VIEW_OLDER_TOPIC}">&nbsp;&laquo; Sujet Pr&eacute;c&eacute;dent</a></td>
<td valign="top" align="right"><a href="{U_VIEW_NEWER_TOPIC}">Sujet Suivant &raquo;&nbsp;</a></td></tr></table></td></tr>
<!-- BEGIN need_several_pages -->
<tr><td colspan="6"><table width="100%"  border="0" cellspacing="3" cellpadding="3"><tr>
<td align="left" width="25%">{PAGE_PREVIOUS}</td>
<td align="center" width="50%">{PAGE_NUMBER}</td>
<td align="right" width="25%">{PAGE_NEXT}</a></td>
</tr></table></td></tr><tr><td colspan="6">
<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>
<td align="left" background="templates/chimboz/images/index_body_cat_sep.gif"><img src="templates/chimboz/images/index_body_cat_sep_l.gif"/></td>
<td align="right" background="templates/chimboz/images/index_body_cat_sep.gif"><img src="templates/chimboz/images/index_body_cat_sep_r.gif"/></td>
</tr></table></td></tr>
<!-- END need_several_pages -->
<!-- BEGIN postrow -->
<tr><td width="150" align="center" valign="top" class="{postrow.ROW_CLASS}"><p><a name="{postrow.U_POST_ID}"></a>
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="100" height="95" id="bbsmemb" align="middle">
          <param name="allowScriptAccess" value="always" />
          <param name="movie" value="{postrow.FLASHURL}" />
          <param name="quality" value="high" />
          <param name="menu" value="false" />
          <param name="bgcolor" value="#ffffff" />
          <param name="FlashVars" value="{postrow.FLASHVARS}" />
          <embed src="{postrow.FLASHURL}" quality="high" bgcolor="#ffffff" width="100" height="95" name="bbsmemb" align="middle" menu="false" allowScriptAccess="always" FlashVars="{postrow.FLASHVARS}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
        <br />
  <span class="name"><a href="/annuaire/?mid={postrow.POSTER_ID}"><b>{postrow.POSTER_NAME}</b></a></span><br />
        <span class="nav">{postrow.POST_DATE}</span>{postrow.POSTER_ONLINE_STATUS_IMG}<br />
{POSTER_FROM_ONLINE_STATUS_IMG}</p>
    <p>{postrow.POSTER_ONLINE_STATUS}</p></td>
<td class="{postrow.ROW_CLASS}" width="100%" height="28" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td width="100%"><table border="0" width="100%" cellpadding="0" cellspacing="0"><tr>
<td width="1%"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /></a></td>
<td class="postdetails">&nbsp;<b>{postrow.POST_SUBJECT}</b></td>
</tr></table></td><td valign="top" nowrap="nowrap">
{postrow.ANTIFLOOD}
{postrow.CENSURE}
{postrow.TEXT_CENSURE}
{postrow.QUOTE_IMG}
{postrow.EDIT_IMG}
{postrow.DELETE_IMG}
{postrow.IP_IMG}
</td></tr><tr><td colspan="2"><img src="templates/chimboz/images/spacer.gif" width="2" height="4"/></td></tr>
<tr><td colspan="2" align="left" background="templates/chimboz/images/index_body_cat_sep.gif"><img src="templates/chimboz/images/index_body_cat_sep_l.gif"/></td></tr>
<tr><td colspan="2"><img src="templates/chimboz/images/spacer.gif" width="2" height="4"/></td></tr><tr><td colspan="2"><span class="postbody">
{postrow.MESSAGE}<br /><br />
<em style="color:#333333;">{postrow.SIGNATURE}</em></span><br /><img src="templates/chimboz/images/spacer.gif" width="600" height="1"></td></tr></table></td></tr>
{postrow.TR_SEPARATOR}
<!-- END postrow -->
<tr><td colspan="6"><table width="100%"  border="0" cellspacing="3" cellpadding="3"><tr>
<td align="left" width="25%">{PAGE_PREVIOUS}</td>
<td align="center" width="50%">{PAGINATION}</td>
<td align="right" width="25%">{PAGE_NEXT}</a></td>
</tr></table></td></tr><tr align="center">
<td class="catBottom" colspan="2" height="28"><table cellspacing="0" cellpadding="0" border="0">
<tr><form method="post" action="{S_POST_DAYS_ACTION}">
<td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="3"><tr>
<td class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}</td>
<td class="gensmall">{S_SELECT_POST_ORDER}</td>
<td class="gensmall"><input type="image" border="0" name="submit" src="templates/chimboz/images/go.gif" value="{L_GO}" width="27" height="18"></td>
</tr></table></td></form></tr></table></td></tr></table>
{TPL_SLOT_WHITE_BOTTOM}
<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center"><tr>
<td align="left" valign="middle" nowrap="nowrap"><span class="nav">
<a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a>
</span></td></tr></table>
{TPL_SLOT_WHITE_TOP}
<table width="100%" cellspacing="2" border="0" align="center"><tr>
<td width="1%" nowrap="nowrap" valign="top" align="left">{S_TOPIC_ADMIN}</td>
<td align="center" valign="top" nowrap="nowrap">{JUMPBOX}</td>
</tr></table>
{TPL_SLOT_WHITE_BOTTOM}