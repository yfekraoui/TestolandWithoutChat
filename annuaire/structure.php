<?php

/*---PHP Strucure---Beta-------
  ---by DarkSATAN--------------
  ---Page Annuaire pour chimboland---*/


if(!isset($_COOKIE[$p_cookie.'sid']))
{ include($include.'connect.php'); } else {
if(isset($_GET['mid'])) // Si, la personne veut accéder au profil d'un membre
{
/*design : 1*/

include('style_view.php');
}
else 
//Revenons à nous moutons..A NOS PAPILLON *chante* ...Si il veut rechercher le membre ou comme un béta a cliqué simplement sur le lien "Annuaire"....*chante encore...*
{
/*design 3 */

include('style_search.php');
} }


?>
