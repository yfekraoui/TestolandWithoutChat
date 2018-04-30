

<?php

$pseudo_search=NULL; ?>
    <div align="center">

<td valign="top">


<!-- main content -->
<table width="630" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td valign="top">

<?php if(isset($_GET['srch_uname']) && !empty($_GET['srch_uname'])) { 
$pseudo_search=mysql_real_escape_string(addslashes(htmlspecialchars($_GET['srch_uname'])));
$message1='Aucun r&eacute;sultat !';
$message2='Un beau Rataj';
$while_autorisation=NULL;
$level=(int)$_GET['level'];
if(strlen($pseudo_search) < 3) 
{ 
	$message1='Les recherches débiles sont interdites'; 
	$message2='Try again !'; 
}
else
{
}
function star($star)
{ 
	$star=str_replace('*','%', $star); return $star; 
}
$pos = strpos($pseudo_search, '*');
if($pos !== false)
{
$requete_search=mysql_query('SELECT user_id, username FROM '.$pref.'users WHERE username LIKE "'.star($pseudo_search).'" AND user_active="1" AND user_level > '.$level.'') or die(mysql_error());
}
else
{
$requete_search=mysql_query('SELECT user_id, username FROM '.$pref.'users WHERE username = "'.$pseudo_search.'" AND user_active="1"') or die(mysql_error());
}
if(mysql_num_rows($requete_search) > 1)
{
if(strlen($pseudo_search) < 3) { $while_autorisation=0; } else {$while_autorisation=1; }

$message1='Trouvé !';
$message2='cherche bien....';
}
elseif(mysql_num_rows($requete_search) == 1)
 { $data_search=mysql_fetch_assoc($requete_search); 
 	header('location:./?mid='.intval($data_search['user_id']).''); exit(); } else { $autorisation_while=0; } ?>
<div style="margin-bottom:10px;">
          <!-- failed found slot -->
            <table width="468" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left"><img src="/img/annuaire/header_annuaire_small.gif"></td>
            </tr>
            <tr>
              <td bgcolor="#D5E6F3">
                <div align="center">

				<span class="titrebleu"><?php echo $message1; ?></span>
                  <br />
                  <em>&quot;<?php echo $message2; ?>&quot;</em>      <?php if($while_autorisation=1) { 
				  echo'<table><tr><th>Membre</th><th>pseudo</th></tr>';
				  while($data_search=mysql_fetch_assoc($requete_search)) { 
				  
				  echo'<tr>
				  <td>'.intval($data_search['user_id']).'</td>
				  <td>
				   		<a href="./?mid='.intval($data_search['user_id']).'">
				  		'.stripslashes($data_search['username']).'</a>
				  </td>
				  </tr>';
				  } echo'</table>';
				  } else { } ?>          </div>
                </td>
              </tr>
            <tr>
              <td>

                <table border="0" cellpadding="0" cellspacing="0">
					<tr>
					<!--footer slot-->
						<td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bg_klr.gif" width="12" height="12"></td>
						<td height="12" width="444"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_b_klr.gif" width="444" height="12"></td>
						<td width="12" height="12"><img src="http://01static.chapatiz.com/fr/hp/nav/bord_bd_klr.gif" width="12" height="12"></td>
					</tr>  
                </table>
				</td>

            </tr>
            </table>
            <!-- failed found slot -->

</div>
<?php } else { } ?>

            <!-- search slot -->
            <table width="468" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left">
                <table border="0" cellpadding="0" cellspacing="0">
					<tr>
					<!--footer slot-->

						<td width="12" height="12"><img src="/img/bord_hg_klr.gif" width="12" height="12"></td>
						<td height="12" width="444"><img src="/img/bord_h_klr.gif" width="444" height="12"></td>
						<td width="12" height="12"><img src="/img/bord_hd_klr.gif" width="12" height="12"></td>
					</tr>  
                </table>
				</td>
            </tr>
            <tr>
              <td align="center" bgcolor="#D5E6F3">

                <div align="center">
                       <span class="titrebleu">Recherche avanc&eacute;e</span>
                </div>

                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td align="center">

                <form action="/annuaire/advsearch.php" name="advsearch" method="GET">
                  <table  border="0" cellspacing="0" cellpadding="5">
                  <tr>
                      <td valign="top">
                          <b>Pseudo de celui/celle que tu recherches</b> <a href="#help">*</a>
                         
                      <table border="0" cellpadding="0" cellspacing="0">
                        <tr>

                          <td><input type="text" name="srch_uname" value="<?php echo $pseudo_search; ?>" style="color:#000000;font:11px Verdana;width:230px"><input type="hidden" name="go" /></td>
                          <td align="left">&nbsp;<input type="image" border="0" name="srch_uname_sbmt" id="srch_sbmt2" value="Go !" src="http://01static.chapatiz.com/fr/modif_lang//go.gif" width="27" height="18"></td>
                        </tr>
                      </table>
                          <br />
<table border="0" cellpadding="0" cellspacing="0">
<tr><td valign="top"><b>Niveau social minimum</b><br />
<select name="level" style="color:#000000;font:11px Verdana;">
<option value="-1" selected>tous</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>

</select></td>
<td><img src="/img/spacer.gif" width="50" height="1"></td>
<td valign="top"><table border="0" cellpadding="0" cellspacing="4">
<tr><td align="center"><img src="/img/annuaire/icone-iconnu.gif" width="50" height="50"><br /><input type="checkbox" name="es[g][0]" value="1" checked></td><td align="center"><img src="/img/annuaire/icone-mec.gif" width="50" height="50"><br /><input type="checkbox" name="es[g][1]" value="1" checked></td><td align="center"><img src="/img/annuaire/icone-fille.gif" width="50" height="50"><br /><input type="checkbox" name="es[g][2]" value="1" checked></td></tr>
</table></td>
</tr>
</table>

					<table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td colspan="2">
                          <b>R&eacute;sultats triés par</b><br />

                          <select name="srch_sort" style="color:#000000;font:11px Verdana;">
                           <option value="pseudo">Pseudo</option>
                           <option value="id">Num&eacute;ro de membre</option>
                          </select>
                                           </td>
                    </tr>
                    <tr>

                      <td>&nbsp;			    </td>
                      <td align="right">
                       <img src="/img/srch.gif"/>                      </td>
                    </tr>
                    </table>

                    </td>

                  </tr>
                  </table>
				  
                </form>
				</td>
                  </tr>
                </table>
                </td>
              </tr>
            <tr>

              <td>
                <table border="0" cellpadding="0" cellspacing="0">
					<tr>
					<!--footer slot-->
						<td width="12" height="12"><img src="/img/bord_bg_klr.gif" width="12" height="12"></td>
						<td height="12" width="444"><img src="/img/bord_b_klr.gif" width="444" height="12"></td>
						<td width="12" height="12"><img src="/img/bord_bd_klr.gif" width="12" height="12"></td>
					</tr>  
                </table>

			  </td>
            </tr>
            </table>
            <!-- search slot -->

            <br />


            <!-- help slot -->
            <a name="help"></a>

            <table width="468" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="left">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr>
					<!--footer slot-->
						<td width="12" height="12"><img src="/img/bord_hg_klr.gif" width="12" height="12"></td>
						<td height="12" width="444"><img src="/img/bord_h_klr.gif" width="444" height="12"></td>
						<td width="12" height="12"><img src="/img/bord_hd_klr.gif" width="12" height="12"></td>

					</tr>  
                </table>

			  </td>
            </tr>
            <tr>
              <td bgcolor="#D5E6F3">

                <div align="center">
                       <span class="titrebleu">&Agrave; l'aide !</span>

                </div>
                <br />
                  <table width="100%"  border="0" cellspacing="0" cellpadding="5">
                  <tr>
                      <td valign="top">
                          <br />
                          <div align="left">
                          
                          <br />
                          Le caractere <b>*</b> remplace plusieurs lettres.<br />Le caractere <b>?</b> remplace une seule lettre.<br /><br />Exemples:<br /> Si tu recherches <b>chapa*</b>, tu trouveras tous les membres dont le nom commence par <b>chapa</b><br />. <s>Si tu recherches <b>*tiz</b>, tu trouveras tous les membres dont le nom finit par <b>tiz</b></s> D&eacute;sactiv&ecute; !<br />. Si tu recherches <b>ch*tiz</b>, tu trouveras tous les membres dont le nom commence par <b>ch</b> et finit par <b>tiz</b>(chapatiz, chukitiz, chiwawawakouinitiz...)<br />. Si tu recherches <b>chap?tiz</b>, tu trouveras tous les membres avec des noms du genre chapatiz, chapitiz, chaputiz, chapptiz...
                        </td>

                  </tr>
                  </table>
                </td>
              </tr>
            <tr>
              <td>
                <table border="0" cellpadding="0" cellspacing="0">
					<tr>
					<!--footer slot-->

						<td width="12" height="12"><img src="/img/bord_bg_klr.gif" width="12" height="12"></td>
						<td height="12" width="444"><img src="/img/bord_b_klr.gif" width="444" height="12"></td>
						<td width="12" height="12"><img src="/img/bord_bd_klr.gif" width="12" height="12"></td>
					</tr>  
                </table>
			  </td>
            </tr>
            </table>
</td>