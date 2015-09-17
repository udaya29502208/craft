<?php 
session_start();
include('../config.php');
if(isset($_POST['cartcheck']))
{
	if(isset($_SESSION['username']))
	{
		$userid=$_SESSION['username'];
	}
	else
	{
		$userid='guest';
	}
	$date=date("d-m-Y h:i:s");
	$insert=mysql_query("INSERT INTO `cart`(`user_id`, `product_id`, `product_type`, `quantity`, `discount`, `total_amount`, `cart_status`, `session_id`, `session_date`, `status`) VALUES('$userid','".$_POST['cartcheck']."','".$_POST['type']."', '0','0','".$_POST['amount']."','1','','$date','1') ");
	if($insert)
	{
		echo "1";
	}
	else
	{
		echo "0";
	}
}

?>