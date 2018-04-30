<td valign="top">
<table width="468" border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="170" background="/img/header_annuaire.gif" align="right" valign="bottom">
<div style="margin:0px 10px 0px 190px;">Tu cherches &agrave; en savoir plus sur un copain<br/> 
ou une nouvelle rencontre ?<br />
<br />
</div>
</td>
</tr>
<tr>
<td>
<table border="0" cellpadding="0" cellspacing="0">
<tr><!--footer slot intro-->
<td width="12" height="12">
<img src="http://01static.chapatiz.com/fr//hp/beige_bg.gif" width="12" height="12"></td>
<td height="12" width="444"><img src="http://01static.chapatiz.com/fr//hp/beige_b.gif" width="444" height="12"></td>
<td width="12" height="12"><img src="http://01static.chapatiz.com/fr//hp/beige_bd.gif" width="12" height="12"></td>
</tr> 
 </table>
 </td>
 </tr>
 </table>
 
 <div>
 <br />
<table width="468" border="0" cellpadding="0" cellspacing="0"><tr><td align="left"><img src="/img/bg_top_petitbleu.gif" width="468" height="11"></td></tr><tr><td background="/img/bg_tile_petitbleu.gif" bgcolor="#eff5fa">
<table width="100%"  border="0" cellspacing="0" cellpadding="5">
<tr>
<td align="center">


<br />

<form name="annuaire_search" action="advsearch.php" method="GET">

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td align="right">
<img src="/img/annuaire/srch.gif" width="107" height="71">
</td>
<td align="left">
<table  border="0" cellspacing="0" cellpadding="3">
<tr>
<td colspan="2">
<b class="titrebleu">
</b>
</td>
</tr>
<tr>
<td>
<input type="text" name="srch_uname" style="color:#000000;font:11px Verdana;">
<input type="hidden" name="srch_sort" value="pseudo"><input type="hidden" name="go" />
<input type="hidden" name="level" value="0" />
<input type="hidden" name="es[g][0]" value="1" />
<input type="hidden" name="es[g][2]" value="1" />
<input type="hidden" name="srch_sort" value="pseudo" />
</td>
<td>
<input type="image" border="0" name="srch_sbmt" id="srch_sbmt2" value="Go!" src="/img/annuaire/go.gif" width="27" height="18">
</td>
</tr>
<tr>
<td colspan="2">
<img src="http://01static.chapatiz.com/fr/content/nav/puce.png" width="14" height="14" class='puce'/>
 <a href="advsearch.php">
 Recherche avanc&eacute;e</a>
 </td>
 </tr>
 </table>
</td>
</tr>
 </table>
 </form>




</tr></table></td></tr><tr><td><img src="/img/bg_bottom_petitbleu.gif" width="468" height="11"></td></tr></table>
 </div> <div>
 <br />

<table width="468" border="0" cellpadding="0" cellspacing="0"><tr><td align="left"><img src="/img/bg_top_petitbleu.gif" width="468" height="11"></td></tr><tr><td background="/img/bg_tile_petitbleu.gif" bgcolor="#eff5fa">
<table width="100%"  border="0" cellspacing="0" cellpadding="5">
<tr>
<td align="center">
<table width="100%"  border="0" cellspacing="0" cellpadding="5">
<tr>
<td align="center">
<H5 class="titrebleu">Liste des 20 derniers membres</H5>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
<tr>
<td width="1%" align="right" nowrap="nowrap" valign="top">
<b>Membre</b>
</td>
<td align="center">
<b>Pseudo</b>
</td>
<td align="center"> </td>

<?php
$td=0;

$sql="SELECT user_id, username FROM ".$pref."users ORDER BY user_id DESC LIMIT 0,20";
$requete_20=mysql_query($sql);
if(mysql_num_rows($requete_20) < 2){
echo'<tr><th>0</th><th>Undefined</th><th></th></tr><tr><th>1</th></th>Undefined</th></tr>'; } else {
echo'<tr bgcolor=#EEF5FA>';
while($data_20=mysql_fetch_assoc($requete_20))
{

	if($td== "0" OR $td=="2" OR $td=="4" OR $td=="6" OR $td=="8" OR $td=="10" OR $td=="12" OR $td=="14" OR $td=="16" OR $td=="18" OR $td=="20")
	{ 
		$td++;
		$get_td='<td></tr></td>';
	}
	else
	{

		$td++;
		$get_td='</tr><tr><tr bgcolor=#EEF5FA>';
	} 


 echo'

<td valign="top" width="1%" align="center" nowrap="nowrap">
<b>'.$data_20['user_id'].'</b></td>
<td valign="top" align="center">
<a href="/annuaire/?mid='.$data_20['user_id'].'">'.stripslashes(htmlspecialchars($data_20['username'])).'</a>
</td>'.$get_td;  }  echo'
 </tr></table>'; } ?>
 </td>
 </tr>
 </table>
 </td>
 </tr>
 </table>
 </tr></table></td></tr><tr><td><img src="/img/bg_bottom_petitbleu.gif" width="468" height="11"></td></tr></table>
 </div>
 </td>