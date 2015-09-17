
<?php
include('config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

$frommail=$email;

$to = 'inpws.com'; 
	$email_subject = "Quote From ".$name;
	$email_body ='

<table width="660" height="301" border="1">
  <tr>
    <td width="168"><blockquote>
      <p>Name</p>
    </blockquote></td>
    <td width="476"><blockquote>&nbsp;</blockquote></td>
  </tr>
  <tr>
    <td><blockquote>
      <p>Email</p>
    </blockquote></td>
    <td><blockquote>&nbsp;</blockquote></td>
  </tr>
  <tr>
    <td><blockquote>
      <p>Phone</p>
    </blockquote></td>
    <td><blockquote>&nbsp;</blockquote></td>
  </tr>
  <tr>
    <td><blockquote>
      <p>Comment</p>
    </blockquote></td>
    <td><blockquote>&nbsp;</blockquote></td>
  </tr>
</table>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $email\n"; 
	$headers .= "Reply-To: $email";
	
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("location:../contact.php?msg=suc");
	
?>