<?php
session_start();
include('../config.php');

if(isset($_POST['admin_user_del']))
{
	$value1=$_POST['admin_user_del'];
	


$update1=mysql_query("update login set status='0' where id='$value1' ")or die(mysql_error());
if($update1)
{
	echo "1";
}
	else
	{
	echo "0";
	}
	
}

	
	
	if(isset($_POST['portfolio_del']))
{
	$value1=$_POST['portfolio_del'];
	


$update2=mysql_query("update product set status='0' where id='$value1' ")or die(mysql_error());
if($update2)
{
	echo "1";
}
	else
	{
	echo "0";
	}
}

	
		
	if(isset($_POST['home_del']))
{
	$value1=$_POST['home_del'];
	


$update3=mysql_query("update home set status='0' where id='$value1' ")or die(mysql_error());
if($update3)
{
	echo "1";
}
	else
	{
	echo "0";
	}
	
}

	
		if(isset($_POST['career_del']))
{
	$value1=$_POST['career_del'];
	


$update4=mysql_query("update career set status='0' where id='$value1' ")or die(mysql_error());
if($update4)
{
	echo "1";
}
	else
	{
	echo "0";
	}
	
}

			
	if(isset($_POST['cat_del']))
{
	$value1=$_POST['cat_del'];
	


$update5=mysql_query("update category_list set status='0' where id='$value1' ")or die(mysql_error());
if($update5)
{
	echo "1";
}
	else
	{
	echo "0";
	}
	
}
	
	
?>