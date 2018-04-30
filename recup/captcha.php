<?php
/* Fichier captcha.png.php */
session_start();

header("Content-type: image/png");

$img = imagecreate (50,15) or die ("Problème de création GD");
$background_color = imagecolorallocate ($img, 220, 234, 245);
$ecriture_color = imagecolorallocate($img, 225, 0, 0);
imagestring ($img, 20, 4, 0, $_SESSION['Captcha'] , $ecriture_color);
imagepng($img);

?>
