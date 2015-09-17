<?php 
session_start();
include('../config.php');
if(isset($_POST['cartid']))
{
	
	//$date=date("d-m-Y h:i:s");
	
	$update=mysql_query("update cart set status='0',cart_status='0' where id='".$_POST['cartid']."'")or die(mysql_error());
	
	
	if($update)
	{
		echo "1";
	}
	else
	{
		echo "0";
	}
}

?>