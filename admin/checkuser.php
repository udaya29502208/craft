
<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("myapp");
$username=$_POST['uname'];
$password=$_POST['pass'];
$log=mysql_query("select * from login where username='$username' and password='$password'");
$count=mysql_num_rows($log);
if($count>0)
{
	header("location:home.php");
	$_SESSION['username']=$username;
	$_SESSION['userpass']=$password;
}
else
{
	header("location:index.php?msg=err");
}


?>