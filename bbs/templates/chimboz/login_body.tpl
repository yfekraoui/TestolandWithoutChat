<form action="{S_LOGIN_ACTION}" method="post" target="_top">

<table width="100%" cellspacing="2" cellpadding="2" border="0" align="center">
  
</table>

<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
  <param name="allowScriptAccess" value="sameDomain" />
  <param name="movie" value="/img/subtop2.swf" />
  <param name="wmode" value="transparent" />
  <param name="menu" value="false" />
  <param name="quality" value="high" />
  <param name="FlashVars" value="title=S'identifier" />
  <embed src="/img/subtop2.swf"
            flashvars="title=S'identifier"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
</object>
<table width="504" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11" /></td>
  </tr>
  <tr>
    <td width="11" bgcolor="#FFF4D5"></td>
    <td bgcolor="#FFF4D5"><table border="0" cellpadding="3" cellspacing="1" width="100%">
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="45%" align="right"><span class="gen">{L_USERNAME}:</span></td>
        <td><input type="text" name="username" size="25" maxlength="40" value="{USERNAME}" />
        </td>
      </tr>
      <tr>
        <td align="right"><span class="gen">{L_PASSWORD}:</span></td>
        <td><input type="password" name="password" size="25" maxlength="32" />
        </td>
      </tr>
      <tr align="center">
        <td colspan="2"><span class="gen">{L_AUTO_LOGIN}:
          <input type="checkbox" name="autologin" />
        </span></td>
      </tr>
      <tr align="center">
        <td colspan="2">{S_HIDDEN_FIELDS}
              <input type="submit" name="login" class="mainoption" value="{L_LOGIN}" /></td>
      </tr>
      <tr align="center">
        <td colspan="2"><span class="gensmall"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></span></td>
      </tr>
    </table></td>
    <br />
    <br />
    <div align="center"></div>
    <td width="11" bgcolor="#FFF4D5"></td>
  </tr>
  <tr>
    <td width="11" height="11"><img src="/img/beige_bg.gif" width="11" height="11" /></td>
    <td height="11" bgcolor="#FFF4D5"></td>
    <td width="11" height="11"><img src="/img/beige_bd.gif" width="11" height="11" /></td>
  </tr>
</table>
</form>
