<?php
$error_mode=1;

$mode=$_GET['mode'];
switch($mode)
{
case "manage":
$error_mode=0;
$name_in="manage";
break;
case "unsub":
$name_in="unsub";
$error_mode=0;
case "sub":
$name_in="sub";
$error_mode=0;
break;
case "create":
$name_in="create";
$error_mode=0;
break;
}

$way_mode='mode/';
if($error_mode !='1')
{
include($way_mode . $name_in .'.php');
}
else
{
include('style_index.php');
}

?>