<?php
include("config.php");
$username=$_POST['a_user'];
$password=$_POST['a_pass'];
$insert=mysql_query("insert into login values('','$username','$password','1')");
if($insert)
{
	header("location:newuser.php?msg=suc");
	
}
else
{
	header("location:newuser.php?msg=err");
}
?>