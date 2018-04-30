<?php
if(!isset($_COOKIE[$p_cookie.'sid']))
{$name_redirect="groups";
include('../includes/connect.php');}
else{
if(isset($_POST['edit_group_submit']))
{
mysql_query("UPDATE ".$pref."groups
SET group_description='".mysql_real_escape_string(htmlspecialchars($_POST['edit_description']))."',
group_type='".mysql_real_escape_string(htmlspecialchars($_POST['edit_enter_type']))."',
devise='".mysql_real_escape_string(htmlspecialchars($_POST['edit_devise']))."',
localisation='".mysql_real_escape_string(htmlspecialchars($_POST['edit_localization']))."',
type='".mysql_real_escape_string(htmlspecialchars($_POST['type']))."' WHERE group_id='".$_POST['go']."'
 AND group_moderator='".$sid_me['user_id']."'");
include('mode/modifier.php');


}
elseif(isset($_POST['validate']))
{
include('/mode/blason_choose.php');
}
else
{

if(isset($_GET['gid']) && !isset($_GET['mode']))
{
include('style_view.php');
}
elseif(isset($_GET['mode']) && !empty($_GET['mode']))
{

include('style_mode.php');
}
else
{
include('style_index.php');
}
}
}

?>