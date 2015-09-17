<?php
include("../config.php");
$name=$_POST['cname'];
$mail=$_POST['cmail'];
$mobile=$_POST['cno'];
$doc=$_FILES['cdoc'];
$skill=$_POST['cskill'];
$exp=$_POST['cexp'];
$dir='documents/';

if($doc['error']==0)
{
	$random=rand(1000,9999);
	$split=explode('.',basename($doc['name']));
	$split_name=$split[0];
	$split_ext=$split[1];
	
$doc_filepath=$dir.$random.$split_name.'.'.$split_ext;	
	
move_uploaded_file($doc['tmp_name'],$doc_filepath);

}

$insert=mysql_query("insert into career values('','$name','$mail','$mobile','$doc_filepath','$skill','$exp')");
if($insert)
{
header("location:../career.php?msg=suc");
	
}
else
{
	header("location:../career.php?msg=err");
}
?>