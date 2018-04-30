<?php
session_start();

if(!isset($_SESSION['id1']))
{
echo'OK ;)';
}
else {
if($_SESSION['id1'] == '1')
{
?>

<?php } else {
echo 'Je ne te laisserais pas l\'honneur d\'accéder à tous les anciens packs du Chimboland :D'; }  }?>