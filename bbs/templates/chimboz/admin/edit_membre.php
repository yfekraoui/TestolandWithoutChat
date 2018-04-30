<?php
$title='Accueil';
$css='./css/style2.css';
$include='./includes/';
include($include.'config.php');//infos SQL, version, error etc...
mysql_connect($serveur, $name, $password);
mysql_select_db($db);
include($include.'haut.php'); //<DOCTYPE...
include($include.'left.php'); // Header + menu
?>
<!-- main content -->
<script src="DWConfiguration/ActiveContent/IncludeFiles/AC_RunActiveContent.js" type="text/javascript"></script>

<td valign="top">
<table width="630" border="0" cellspacing="0" cellpadding="5">
		<tr>
		<td valign="top">
<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0','width','435','height','30','align','middle','src','/img/subtop2','flashvars','title=Gestion d'un membre :p','menu','false','wmode','transparent','quality','high','allowscriptaccess','sameDomain','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','/img/subtop2' ); //end AC code
</script><noscript><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="435" height="30" align="middle">
              <param name="allowScriptAccess" value="sameDomain" />
              <param name="movie" value="/img/subtop2.swf" />

              <param name="wmode" value="transparent" />
              <param name="menu" value="false" />
              <param name="quality" value="high" />
              <param name="FlashVars" value="title=Gestion d'un membre :p" />
              <embed src="/img/subtop2.swf"
            flashvars="title=Gestion d'un membre :p"
            menu="false" wmode="transparent" quality="high" width="435" height="30" align="middle" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
          </object></noscript>
<br />
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0','align','middle','height','268','width','430','src','/img/demo','quality','high','bgcolor','#2c4887','wmode','transparent','allowscriptaccess','sameDomain','flashvars','members_count=<?php echo $requete_lastmember['user_id']; ?>&connecteds_count=690','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','/img/demo' ); //end AC code
</script>
          <br />


        <!-- news -->
        <table width="435" border="0" cellpadding="0" cellspacing="0">


		        <tr>
            <td width="11" height="11"><img src="/img/beige_hg.gif" width="11" height="11"></td>
            <td height="11" bgcolor="#FFF4D5"> </td>
            <td width="11" height="11"><img src="/img/beige_hd.gif" width="11" height="11"></td>
        </tr>
        <tr>
            <td width="11" bgcolor="#FFF4D5"> </td>
            <td valign="top" bgcolor="#FFF4D5">
                <table width="0" border="0" cellspacing="0" cellpadding="1">
                  <tr>
                    <td rowspan="2" valign="top"><img src="/img/articles/chimboking.gif"></td>
                    <td><span class="titrebeige"><img src="/img/spacer.gif" width="10" height="65"></span></td>

                    <td valign="top"><p><span class="titrebeige"><?php
$action = (isSet($_GET['action']) ? $_GET['action'] : NULL );
     switch ($action) {
       case 'modif':
       			   /*
       			   echo '<pre>';
                   print_r($_POST);
                   echo '</pre>';

                    [pseudo] => Labyelo
				    [niveau] => 1
				    [ad] => r;1;2;75;8
				    [mood] => lol
				    [sexe] => mec
				    [packs] => 1,3,6
				    [attributes] => 1
				    [go] => soumettre
                 */

                   $Sql_Modif_Profil = "UPDATE  phpbb_users
                   							SET

                   							 username      = '".mysql_real_escape_string($_POST['pseudo'])."',
                   							 user_level    = '".mysql_real_escape_string($_POST['niveau'])."',
                   							 avatar_design = '".mysql_real_escape_string($_POST['ad'])."',
                   							 mood          = '".mysql_real_escape_string($_POST['mood'])."',
                   							 user_sexe     = '".mysql_real_escape_string($_POST['sexe'])."',
                   							 packs         = '".mysql_real_escape_string($_POST['packs'])."',
                   							 attributes    = '".mysql_real_escape_string($_POST['attributes'])."'

                   							WHERE user_id  = '".$_POST['user_id']."'";

                   $req = mysql_query($Sql_Modif_Profil) or die('Erreur SQL !'.$Sql_Modif_Profil.'<br>'.mysql_error());

                   echo 'Modification ok!<br>';
                   echo '<a href="index.php?action=">Retour</a>';


         break;
       case 1:

         break;
       case 'profil';
       			$Sql_Select_profil = "SELECT
       			                        user_id, username, user_level, avatar_design, mood, user_sexe, packs, attributes
       			                      FROM phpbb_users
       			                        WHERE user_id = '".$_POST['id_membre']."'";
       			 $ResultatProfil = mysql_query($Sql_Select_profil) or die('Erreur SQL !'.$Sql_Select_profil.'<br>'.mysql_error());

       			 $Data = mysql_fetch_array($ResultatProfil);


                 if($Data == 0)
                 	{
                 		echo 'Pas de données';
                    }

                    	else
                    	   {

				       			echo '<form action="index.php?action=modif" method="post">
										<table style="width: 100%">
											<tr>
												<td style="width: 113px">Id :</td>
												<td>'.$Data['user_id'].'</td>
												<input name="user_id" type="hidden" value="'.$Data['user_id'].'">
											</tr>
											<tr>
												<td style="width: 113px">Pseudo :</td>
												<td><input name="pseudo" type="text" value="'.$Data['username'].'"/></td>
											</tr>
											<tr>
												<td style="width: 113px">Niveau</td>
												<td><input name="niveau" type="text" value="'.$Data['user_level'].'"/></td>
											</tr>
											<tr>
												<td style="width: 113px">Ad :</td>
												<td><input name="ad" type="text" value="'.$Data['avatar_design'].'"/></td>
											</tr>
											<tr>
												<td style="width: 113px">Mood :</td>
												<td><input name="mood" type="text" value="'.$Data['mood'].'"/></td>
											</tr>
											<tr>
												<td style="width: 113px">Sexe :</td>
												<td><input name="sexe" type="text" value="'.$Data['user_sexe'].'"/></td>
											</tr>
											<tr>
												<td style="width: 113px">Packs :</td>
												<td><input name="packs" type="text" value="'.$Data['packs'].'"/></td>
											</tr>
											<tr>
												<td style="width: 113px">Grade :</td>
												<td><select name="attributes">
												<option value="'.$Data['attributes'].'">'.$Data['attributes'].'</option>
												<option value="99">Membre</option>
												<option value="1">Modo</option>
												<option value="6">Animateur</option>
												<option value="2">Aideur</option>
												<option value="5">Défailleur</option>
												</select></td>
											</tr>
											<tr>
												<td style="width: 113px">&nbsp;</td>
												<td><input name="go" type="submit" value="soumettre" /></td>
											</tr>
										</table>
									</form>';
                           }


         break;

       default;
                   echo '<form action="index.php?action=profil" method="post">
							<table style="width: 100%">
								<tr>
									<td style="width: 113px">Membre id :</td>
									<td><input name="id_membre" type="text" /></td>
								</tr>
								<tr>
									<td style="width: 113px">&nbsp;</td>
									<td><input name="go" type="submit" value="soumettre" /></td>
								</tr>
							</table>
						</form>';

         break;
     }
?></p>
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td align="right">
                     <span class="infobeige">Mercredi 09 Septembre 2009  - par Le chimboking </span>                    </td>
                  </tr>
                </table>            </td>
                <td width="11" bgcolor="#FFF4D5"> </td>
          </tr>
        <tr>
            <td width="11" height="11"><img src="/img/beige_bg.gif" width="11" height="11"></td>
            <td height="11" bgcolor="#FFF4D5"> </td>

            <td width="11" height="11"><img src="/img/beige_bd.gif" width="11" height="11"></td>
        </tr>
        <tr>
            <td colspan="3"><img src="/img/spacer.gif" width="11" height="10"></td>
        </tr>
          </table>
</td>
			</tr>
		  </table></td>