<?php
include('config.php');
$company=$_POST['qcname'];
$person=$_POST['qpname'];
$mob=$_POST['qno'];
$email=$_POST['qemail'];			
$country=$_POST['country'];
$state1=$_POST['qstate'];
if(isset($_POST['r1']))
{
$design=$_POST['r1'];
}else
{
	$design='';
}
$webref=$_POST['webref'];
if(isset($_POST['r2']))
{
$logo=$_POST['r2'];
}else
{
	$logo='';
}
if(isset($_POST['c1']))
{
$website=implode(',',$_POST['c1']);	
}else
{
	$website='';
}




$desc=$_POST['qdesc'];
$extra=$_POST['extra'];
$reff=$_POST['ref'];



	echo $table='						





<table width="679" border="1">
  <tr>
    <td height="50" colspan="3"><div align="center">Company Details</div></td>
  </tr>
  <tr>
    <td width="203" height="36"><dl>
      <dl>
        <dt>Company name</dt>
      </dl>
    </dl></td>
    <td colspan="2">'.$company.'</td>
  </tr>
  <tr>
    <td height="41"><dl>
      <dl>
        <dt>Person name</dt>
      </dl>
    </dl></td>
    <td colspan="2">'.$person.'</td>
  </tr>
  <tr>
    <td height="38"><dl>
      <dl>
        <dt>Mobile Number</dt>
      </dl>
    </dl></td>
    <td colspan="2">'.$mob.'</td>
  </tr>
  <tr>
    <td height="37"><dl>
      <dl>
        <dt>Email Address</dt>
      </dl>
    </dl></td>
    <td colspan="2">'.$email.'</td>
  </tr>
  <tr>
    <td height="36"><dl>
      <dl>
        <dt>State</dt>
      </dl>
    </dl></td>
    <td colspan="2">'$state1'</td>
  </tr>
  <tr>
    <td height="36"><dl>
      <dl>
        <dt>Country</dt>
      </dl>
    </dl></td>
    <td colspan="2">'.$country.'</td>
  </tr>
  <tr>
    <td height="52" colspan="3"><div align="center">Website Details</div></td>
  </tr>
  <tr>
    <td height="40"><blockquote>
      <p>Type of website</p>
    </blockquote></td>
    <td width="174">'.$design.'</td>
    <td width="209">'.$webref.'</td>
  </tr>
  <tr>
    <td height="39"><blockquote>
      <p>Logo</p>
    </blockquote></td>
    <td colspan="2">'.$logo.'</td>
  </tr>
  <tr>
    <td height="35"><blockquote>
      <p>website upgrades</p>
    </blockquote></td>
    <td colspan="2">'.$website.'</td>
  </tr>
  <tr>
    <td height="53" colspan="3"><div align="center">Project Details</div></td>
  </tr>
  <tr>
    <td><blockquote>
      <p>Project Description</p>
    </blockquote></td>
    <td colspan="2"><p>'.$desc.'</p>
   </td>
  </tr>
  <tr>
    <td><blockquote>
      <p>Extra Details</p>
    </blockquote></td>
    <td colspan="2"><p>'.$extra.'</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="40"><blockquote>
      <p>Reference</p>
    </blockquote></td>
    <td colspan="2">'.$reff.'</td>
  </tr>
</table>';
	
	
?>