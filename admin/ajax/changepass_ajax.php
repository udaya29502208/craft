<?php
session_start();
include('../config.php');
if(isset($_POST['changepassword']))
{
	$current=$_POST['curpass'];
$new=$_POST['newpass'];
$session_name=$_SESSION['user_inpws_name'];

$update=mysql_query("update login set password='$new' where username='$session_name' and password='$current' and status='1'")or die(mysql_error());
if($update)
{
	$_SESSION['user_inpws_name']=$_POST['newpass'];
	echo "Password Updated";
}
else
{
	echo "Password Not Updated. Try Again";
}
}

if(isset($_POST['pk']))
{
	$value1=$_POST['value'];
	
$pk=$_POST['pk'];

$update=mysql_query("update login set username='$value1' where id='$pk' and status='0'")or die(mysql_error());
}
?>