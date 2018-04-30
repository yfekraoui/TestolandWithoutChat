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
	<th height="25" class="thHead" background="/img/index_body_thead.gif">{L_IP_INFO}</th>
  </tr>
  <tr> 
	<td class="catHead" height="28"><span class="cattitle"><b>{L_THIS_POST_IP}</b></span></td>
  </tr>
  <tr> 
	<td class="row1"> 
	  <table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr> 
		  <td>&nbsp;<span class="gen">{IP} [ {POSTS} ]</span></td>
		  <td align="right"><span class="gen">[ <a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a> 
			]&nbsp;</span></td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr> 
	<td class="catHead" height="28"><span class="cattitle"><b>{L_OTHER_USERS}</b></span></td>
  </tr>
  <!-- BEGIN userrow -->
  <tr> 
	<td class="{userrow.ROW_CLASS}"> 
	  <table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr> 
		  <td>&nbsp;<span class="gen"><a href="{userrow.U_PROFILE}">{userrow.USERNAME}</a> [ {userrow.POSTS} ]</span></td>
		  <td align="right"><a href="{userrow.U_SEARCHPOSTS}" title="{userrow.L_SEARCH_POSTS}"><img src="{SEARCH_IMG}" border="0" alt="{L_SEARCH}" /></a> 
			&nbsp;</td>
		</tr>
	  </table>
	</td>
  </tr>
  <!-- END userrow -->
  <tr> 
	<td class="catHead" height="28"><span class="cattitle"><b>{L_OTHER_IPS}</b></span></td>
  </tr>
  <!-- BEGIN iprow -->
  <tr> 
	<td class="{iprow.ROW_CLASS}"><table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr> 
		  <td>&nbsp;<span class="gen">{iprow.IP} [ {iprow.POSTS} ]</span></td>
		  <td align="right"><span class="gen">[ <a href="{iprow.U_LOOKUP_IP}">{L_LOOKUP_IP}</a> 
			]&nbsp;</span></td>
		</tr>
	  </table></td>
  </tr>
  <!-- END iprow -->
</table>
{TPL_SLOT_WHITE_BOTTOM}


