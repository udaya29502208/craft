hvvghjvghvghg
<?php 
echo 'gfgggggggggggggfg';
include('config.php');
echo $name=$_GET['name'];
$email=$_POST['email1'];
$phone=$_POST['mno'];

echo "welcome";
echo $frommail=$email;

$to = 'info@inpws.com'; 
	$email_subject = "Quote From ".$name;
	$email_body ='


<table width="651" height="247" border="1">
  <tr>
    <td width="228"><blockquote>
      <p>Name</p>
    </blockquote></td>
    <td width="407"><blockquote>&nbsp;</blockquote></td>
  </tr>
  <tr>
    <td><blockquote>
      <p>Email Address</p>
    </blockquote></td>
    <td><blockquote>&nbsp;</blockquote></td>
  </tr>
  <tr>
    <td><blockquote>
      <p>Mobile Number</p>
    </blockquote></td>
    <td><blockquote>&nbsp;</blockquote></td>
  </tr>
</table>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: $email\n"; 
	$headers .= "Reply-To: $email";
	
	
	mail($to,$email_subject,$email_body,$headers);
	

	
	?>
