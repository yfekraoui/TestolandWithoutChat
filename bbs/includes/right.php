  <td valign="top"> <table border="0" cellpadding="0" cellspacing="0">
			<tr>




			  <td align="left">
				<img src="/img/newsdescreateurs_top.gif" width="169" height="75"></td>
			  </tr>
			  <tr>
				<td valign="top" bgcolor="#A4C4E3"> <table width="168"  border="0" cellspacing="0" cellpadding="5">
					<tr>


					<td valign="top" align="center">

                    <!-- NEWS --><?php
					$requete_hg=mysql_query('SELECT * FROM phpbb_topics WHERE forum_id = 2 ORDER BY topic_id DESC LIMIT 0, 2') or die('error'); 
					if(mysql_num_rows($requete_hg) < 1) { } else { 
				
					while($requete_hug = mysql_fetch_assoc($requete_hg))
					 { 
				echo'
                                                <font color="#FF0099"><b>'.stripslashes($requete_hug['topic_title']).'</b></font>
                            <br />
                            <br />
                           ...<br><a href="/bbs/topic.php?t='.$requete_hug['topic_id'].'">lire la suite</a>
                            <br />
                            <br />
'; } } ?>
                                        <!-- END NEWS -->


					  </td>
					</tr>
				  </table></td>
			  </tr>
			  <tr>
				<td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>
			  </tr>
			</table>




            <!-- petit_dernier -->
            <table width="168" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td valign="top" bgcolor="#A4C4E3" background="/img/ptinew.gif">
                <img src="/img/spacer.gif" width="12" height="40">
                <table width="168"  border="0" cellspacing="0" cellpadding="5">
                    <tr>

                      <td valign="top" align="center">
					  <?php
					  
					  echo'
					  
					  
					  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
                    codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                    width="100"
                    height="95"
                    id="bbsmemb"
                    align="middle">
            <param name="allowScriptAccess" value="sameDomain" />
            <param name="wmode" value="transparent" />
            <param name="movie" value="/img/member.swf" />
            <param name="quality" value="high" />
            <param name="menu" value="false" />
            <param name="bgcolor" value="#ffffff" />
            <param name="FlashVars" value="&m='.$requete_lastmember['mood'].'&ad='.$requete_lastmember['avatar_design'].'" />
            <embed src="/img/member.swf"
                   quality="high"
                   bgcolor="#ffffff"
                   width="100"
                   height="95"
                   name="bbsmemb"
                   align="middle"
                   allowScriptAccess="sameDomain"
                   wmode="transparent"
                   menu="false"
                   FlashVars="&m='.$requete_lastmember['mood'].'&ad='.$requete_lastmember['avatar_design'].'"
                   type="application/x-shockwave-flash"

                   pluginspage="http://www.macromedia.com/go/getflashplayer" />

            </object>'; ?></td>
            </tr>
            <tr>
            <td align="center" valign="top" bgcolor="#A4C4E3" >
          <?php echo'  <a href="/annuaire/?mid='.$requete_lastmember['user_id'].'">'.stripslashes(htmlspecialchars($requete_lastmember['username'])).'</a>
            <br />
            <br />
            Membre n°<b>'.$requete_lastmember['user_id'].'</b>'; ?>




                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
			     <tr>
                <td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>

              </tr>
</table>
	   <!-- petit_dernier -->




		</td>
		  <td valign="top">
			<!-- ici skyscraper -->
		  </td>

		</tr>
		<tr>
		  <td colspan="2">
</td><td></td>
		</tr>
			</table>
<!-- end main content -->
</td>
</tr>
</table>
<a href="/go/">.</a>


</div>
</body>
</html>
<?php ob_end_flush(); ?>






