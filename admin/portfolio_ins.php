<?php
include("config.php");
if(isset($_POST['insert']))
{

echo $domain=$_POST['pdom'];
echo $tag=$_POST['ptag'];
echo $price=$_POST['price'];
 $main=$_FILES['pmain'];

$dir='product_images/';
$main_filepath="";
if($main['error']==0)
{
	
	echo $random=rand(1000,9999);
	$split=explode('.',basename($main['name']));
	echo $split_name=$split[0];
	echo $split_ext=$split[1];
	
echo $main_filepath=$dir.$random.$split_name.'.'.$split_ext;	
	
move_uploaded_file($main['tmp_name'],$main_filepath);

}

//echo count($_FILES['other_image']['name']);
$insert=mysql_query("insert into product values('','$domain','',$tag','$price','$main_filepath','1')");
if($insert)
{
	header("location:portfolio.php?msg=suc");
	
}
else
{
  header("location:portfolio.php?msg=err");
}
}




else if(isset($_POST['edit']))
					 {
echo $pid=$_POST['folio_id'];						 
echo $price=$_POST['price1'];
echo $domain1=$_POST['pdom1'];
echo $tag1=$_POST['ptag1'];
echo $dir='product_images/';
if($_FILES['pmain1']['name']!='')
{
	$main1=$_FILES['pmain1'];
	if($main1['error']==0)
		{
	$random=rand(1000,9999);
	$split=explode('.',basename($main1['name']));
	$split_name=$split[0];
	$split_ext=$split[1];
	
	$main_filepath1=$dir.$random.$split_name.'.'.$split_ext;	
		
	move_uploaded_file($main1['tmp_name'],$main_filepath1);
$update=mysql_query("update product set image='$main_filepath1' where id='$pid'");

}
}


					 
$update_edit=mysql_query("update product set product_type='$tag1',product_name='$domain1',price='$price' where id='$pid' ");	

				if($update_edit)
{
	header("location:portfolio.php");
	
}
else
{
header("location:portfolio_edit.php?p_id=$pid");
}
	 
					 }
					 
						
						
						

					 
					 if(isset($_GET['pos']))
									{
										$id=$_GET['id'];
$pos=$_GET['pos'];
$result=mysql_query("select other from portfolio where  id='$id' ");
						while($row = mysql_fetch_array($result)) 
						{
							$other=$row['other'];
							
						}
						$split=explode(',',$other);
							$other_filepath='';
for($i=0;$i<count($split);$i++)
{
	if($i!=$pos)
	{
		$other_filepath.=$split[$i].',';
		
	}
}
$other_filepath=substr($other_filepath,0,-1);
echo $other_filepath;
echo $id;
$update=mysql_query("update portfolio set other='$other_filepath' where id='$id'")or die(mysql_error());;
if ($update)
{
	//header("location:portfolio_edit.php?p_id=$id");
}
else
{
	//header("location:portfolio_edit.php?msg='err'");
}
	}// isset
?>


