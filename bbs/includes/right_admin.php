  <td valign="top"> <table border="0" cellpadding="0" cellspacing="0">
			<tr>




			  <td align="left">
				<img src="/img/ensavoirplus_top.gif" width="169" height="35"></td>
			  </tr>
			  <tr>
				<td valign="top" bgcolor="#A4C4E3"> <table width="168"  border="0" cellspacing="0" cellpadding="5">
					<tr>


					<td valign="top" align="center">

                    <!-- NEWS --><?php
if($userdata['user_level'] == "1")
{
	echo '<a href="/admin/adminok.php?pseudo='.$data_member['username'].'">Je veux modifier ce membre</a><br /><br />';
}
if($userdata['user_id'] != "-1")
{
	echo '<a href="/mi/new.php?rep_eid='.$mid.'">Envoyer un message à ce membre</a>';
}

?>
                                        <!-- END NEWS -->


					  </td>
					</tr>
				  </table></td>
			  </tr>
			  <tr>
				<td><img src="/img/coldroite_bottom.gif" width="168" height="11"></td>
			  </tr>
			</table>









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






