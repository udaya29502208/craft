<?php 
session_start();
include('../config.php');
if(isset($_POST['check']))
{
	$username=$_POST['username'];
		$password=$_POST['password'];
		$log1=mysql_query("select * from signup where email='$username' and password='$password'")or die(mysql_error());
$count=mysql_num_rows($log1);
if($count>0)
{
	$row=mysql_fetch_array($log1);
	
	$_SESSION['username']=$username;
	$_SESSION['userpass']=$password;
	$_SESSION['firstname']=$row['firstname'];
	$_SESSION['lastname']=$row['lastname'];
	//$_SESSION['userid']=$row['id'];
	echo "1";
}
else
{
	echo "0";
}

}

if(isset($_POST['regcheck']))
{
	$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$title=$_POST['title'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$dob=$_POST['dob'];
		$date=date("d-m-Y h:i:s");
		$insert=mysql_query("insert into signup (title,firstname, lastname,email,password, dob,session_date,last_session_date, status) values('$title','$fname','$lname','$email','$password','$dob','$date','$date','1')")or die(mysql_error());

if($insert)
{
	echo "1";
	$_SESSION['username']=$email;
	$_SESSION['userpass']=$password;
	$_SESSION['firstname']=$fname;
	$_SESSION['lastname']=$lname;
}
else
{
	echo "0";
}

}

if(isset($_POST['passcheck']))
{
	$oldpass=$_POST['oldpass'];
		$newpass=$_POST['newpass'];
		
		$date=date("d-m-Y h:i:s");
$update=mysql_query("update signup set password='$newpass',last_session_date='$date' where password='$oldpass' && email='".$_SESSION['username']."'")or die(mysql_error());

if($update)
{
	$_SESSION['userpass']=$newpass;
	echo "1";
	
	
	
}
else
{
	echo "0";
}

}


if(isset($_POST['infocheck']))
{
	//$oldpass=$_POST['oldpass'];
		//$newpass=$_POST['newpass'];
		
		$date=date("d-m-Y h:i:s");
$update=mysql_query("update signup set company='".$_POST['company']."', addr1='".$_POST['addr1']."', addr2='".$_POST['addr2']."',  city='".$_POST['city']."', state='".$_POST['state']."', pincode='".$_POST['pincode']."', country='".$_POST['country']."', mobile='".$_POST['mobile']."', alt='".$_POST['alt']."',last_session_date='$date' where email='".$_SESSION['username']."'")or die(mysql_error());

if($update)
{
	//$_SESSION['userpass']=$newpass;
	echo "1";
	
	
	
}
else
{
	echo "0";
}

}



if(isset($_POST['shipcheck']))
{
	$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$addr1=$_POST['addr1'];
		$addr2=$_POST['addr2'];
		$city=$_POST['city'];
		$state=$_POST['state'];
			$pincode=$_POST['pincode'];
				$country=$_POST['country'];
					$mobile=$_POST['mobile'];
					$alt=$_POST['alt'];
		//$date=date("d-m-Y h:i:s");
		$insert=mysql_query("insert into ship (firstname, lastname,email,addr1,addr2,city,state,pincode,country,mobile,alt, status) values('$fname','$lname','$email','$addr1','$addr2','$city','$state','$pincode','$country','$mobile','$alt','1')")or die(mysql_error());

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