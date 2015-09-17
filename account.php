<?php session_start();
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Handicraft online Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<?php include("header.php"); ?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<!--<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart">3 Items in your cart  <span class="badge badge-warning pull-right">$155.00</span></a></div>-->
		<ul id="sideManu" class="nav nav-tabs nav-stacked" >
			<li ><a href="#" onClick="changepage('1');">Dashboard</a></li><br>
            <li ><a href="#" onClick="changepage('2');">User Information</a></li><br>
			<li><a href="#" onClick="changepage('3');">Order History</a></li><br>
			<li><a href="#" onClick="changepage('4');">Change Password</a></li><br>
			<li><a href="logout.php" >Logout</a></li><br>
		</ul>
		<br/>
		 <!-- <div class="thumbnail">
			<img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>-->
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9" id="mainCol">
    <div id="div1" class="divall">
    <ul class="breadcrumb"  >
		<li><a href="account.php">Myaccount</a> <span class="divider">/</span></li>
		<li>Dashboard</li>
        
    </ul>
      
                      <?php $select=mysql_query("select * from signup where email='".$_SESSION['username']."'"); 
					  $row=mysql_fetch_array($select);
					  
					  ?>
               
                                 <div class="span9">
                                               <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Firstname</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['firstname']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Lastname</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['lastname']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                  <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Email</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['email']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Company</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['company']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                   <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Address Line1</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['addr1']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Address Line1</strong>
                                                       </div>
                                                       <div class="span2">
                                                   <?=$row['addr2']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                   <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>City</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['city']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>State</strong>
                                                       </div>
                                                       <div class="span2">
                                                       <?=$row['state']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                   <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Picode</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['pincode']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Country</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['country']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                  
                                                    <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Mobile</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['mobile']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Alternative no</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['alt']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                               </div>
                
                    
                      
                      
                      
          <!--<table width="70%">
          <tr ><td style="padding-bottom:10px"><strong>Firstname</strong></td><td><?=$row['firstname']?></td><td>Lastname</td> <td><?=$row['lastname']?></td></tr>
           <tr ><td style="padding-bottom:10px"><strong>Lastname</strong></td><td><?=$row['lastname']?></td></tr>
            <tr ><td style="padding-bottom:10px"><strong>Username</strong></td><td><?=$row['email']?></td></tr>
             <tr><td  style="padding-bottom:10px"><strong>Password</strong></td><td><input type="password" value="<?=$row['password']?>" style="border:inherit; padding:inherit"></td></tr>
          </table>-->
         
                   
                         
    
    
    
	</div>
    
    <div id="div2" class="divall">
    <ul class="breadcrumb" style="margin-bottom:inherit; margin-bottom:5px" >
		<li><a href="account.php">Myaccount</a> <span class="divider">/</span></li>
		<li>User Information</li>
        
    </ul>
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myinfo" style="float:right;">
                          Edit
                  	  </button>
                      <?php $select=mysql_query("select * from signup where email='".$_SESSION['username']."'"); 
					  $row=mysql_fetch_array($select);
					  
					  ?>
               
                                 <div class="span9">
                                               <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Firstname</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['firstname']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Lastname</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['lastname']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                  <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Email</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['email']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Company</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['company']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                   <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Address Line1</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['addr1']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Address Line1</strong>
                                                       </div>
                                                       <div class="span2">
                                                   <?=$row['addr2']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                   <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>City</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['city']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>State</strong>
                                                       </div>
                                                       <div class="span2">
                                                       <?=$row['state']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                   <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Picode</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['pincode']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Country</strong>
                                                       </div>
                                                       <div class="span2">
                                                     <?=$row['country']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                                  
                                                    <div class="row">    
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Mobile</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['mobile']?>
                                                         
                                                          
                                                       </div>
                                                         <div class="span2">
                                                          <strong>Alternative no</strong>
                                                       </div>
                                                       <div class="span2">
                                                      <?=$row['alt']?>
                                                         
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                  </div><br>
                                               </div>
                
                    
                      
                      
                      
          <!--<table width="70%">
          <tr ><td style="padding-bottom:10px"><strong>Firstname</strong></td><td><?=$row['firstname']?></td><td>Lastname</td> <td><?=$row['lastname']?></td></tr>
           <tr ><td style="padding-bottom:10px"><strong>Lastname</strong></td><td><?=$row['lastname']?></td></tr>
            <tr ><td style="padding-bottom:10px"><strong>Username</strong></td><td><?=$row['email']?></td></tr>
             <tr><td  style="padding-bottom:10px"><strong>Password</strong></td><td><input type="password" value="<?=$row['password']?>" style="border:inherit; padding:inherit"></td></tr>
          </table>-->
         
                   
                         <div class="modal fade" id="myinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabellogin" style="color:#090">Edit Personal Information</h4>
                                  </div><br>
                                  <form name="mydata" id="mydata">
                                
  <div class="modal-body">

      <center>
               <div class="span6">
                   
          
                    
                       <div class="span2">
                          <strong>First name</strong>
                       </div>
                       <div class="span3">
                      
       <input type="text" id="fname" name="fname" readonly class="form-control" value="<?=$row['firstname']?>"  required  />
                          
                       </div>
                      
                       
                       
                   <br>
                     
                       <div class="span2">
                          <strong>Last Name</strong>
                       </div>
                       <div class="span3">
                        <input type="text" id="lname" name="lname" readonly class="form-control" value="<?=$row['lastname']?>"  required  />
                        
                       </div>
                       
                       
                   <br>
                     
                       <div class="span2">
                          <strong>Company</strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="company" class="form-control" name="company" value="<?=$row['company']?>"   required  />
                        
                   </div><br>
                   
                   
                    <div class="span2">
                          <strong>Email</strong>
                       </div>
                       <div class="span3">
                        <input type="text" id="email" name="email" readonly class="form-control" value="<?=$row['email']?>"   required  />
                        
                       </div>
                       
                       
                   <br>
                     
                       <div class="span2">
                          <strong>Address L1</strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="addr1" class="form-control" name="addr1" value="<?=$row['addr1']?>"   required  />
                        
                   </div><br>
                   
                    <div class="span2">
                          <strong>Address L2</strong>
                       </div>
                       <div class="span3">
                        <input type="text" id="addr2" name="addr2" class="form-control" value="<?=$row['addr2']?>"   required  />
                        
                       </div>
                       
                       
                   <br>
                     
                       <div class="span2">
                          <strong>City</strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="city" class="form-control" name="city" value="<?=$row['city']?>"   required  />
                        
                   </div><br>
                   
                    <div class="span2">
                          <strong>State</strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="state" class="form-control" name="state"  value="<?=$row['state']?>"  required  />
                        
                   </div><br>
                   
                    <div class="span2">
                          <strong>Pincode</strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="pincode" class="form-control" name="pincode" value="<?=$row['pincode']?>"   required  />
                        
                   </div><br>
                   
                    <div class="span2">
                          <strong>Country</strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="country" class="form-control" name="country"  value="<?=$row['country']?>"  required  />
                        
                   </div><br>
                   
                    <div class="span2">
                          <strong>Mobile</strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="mobile" class="form-control" name="mobile" value="<?=$row['mobile']?>"   required  />
                        
                   </div><br>
                    <div class="span2">
                          <strong>Alernative </strong>
                       </div>
                       <div class="span3">
                            <input type="text" id="alt" class="form-control" name="alt" value="<?=$row['alt']?>"   required  />
                        
                   </div><br>
                   
               </div>
          </center>    
           
  </div>
                                  <div class="modal-footer" style="margin-bottom:-16px">
                                 
                                    <button type="button" id="close" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                    <!--<button type="button" class="btn btn-success btn-sm" onClick="return save2();">Save Changes</button>-->
                                     <button type="button" class="btn btn-success" onClick="changeinfo()">Submit</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
    
    
    
	</div>
    
    <div id="div3" class="divall">
    <ul class="breadcrumb">
		<li><a href="account.php">Myaccount</a> <span class="divider">/</span></li>
		<li>Order History</li>
    </ul>
    
    
    
    
	</div>
    
    <div id="div4" class="divall">
    <ul class="breadcrumb">
		<li><a href="account.php">Myaccount</a> <span class="divider">/</span></li>
		<li>Login Information</li>
        
         
                       </ul>
                       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModallogin" style="float:right;">
                          Edit
                  	  </button>
                      <!--<?php $select=mysql_query("select * from signup where email='".$_SESSION['username']."'"); 
					  $row=mysql_fetch_array($select);
					  
					  ?>-->
          <table width="60%">
          <tr ><td style="padding-bottom:10px"><strong>Firstname</strong></td><td><?=$row['firstname']?></td></tr>
           <tr ><td style="padding-bottom:10px"><strong>Lastname</strong></td><td><?=$row['lastname']?></td></tr>
            <tr ><td style="padding-bottom:10px"><strong>Username</strong></td><td><?=$row['email']?></td></tr>
             <tr><td  style="padding-bottom:10px"><strong>Password</strong></td><td><input type="password" value="<?=$row['password']?>" style="border:inherit; padding:inherit"></td></tr>
          </table>
         
                   
                         <div class="modal fade" id="myModallogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabellogin" style="color:#090">Edit Login Information</h4>
                                  </div><br>
                                  <form name="mylogin" id="mylogin">
                                
                                  <div class="modal-body">
                            
                                      <center>
                                               <div class="span6">
                                                   
                                          
                                                    
                                                       <div class="span2">
                                                          <strong>Old Password</strong>
                                                       </div>
                                                       <div class="span3">
                                                      
                                                          <input type="password" id="oldpass" name="oldpass" class="form-control"  required  />
                                                          
                                                       </div>
                                                      
                                                       
                                                       
                                                   <br>
                                                     
                                                       <div class="span2">
                                                          <strong>New Password</strong>
                                                       </div>
                                                       <div class="span3">
                                                        <input type="password" id="newpass" name="newpass" class="form-control"  required  />
                                                        
                                                       </div>
                                                       
                                                       
                                                   <br>
                                                     
                                                       <div class="span2">
                                                          <strong>Re-Type Password</strong>
                                                       </div>
                                                       <div class="span3">
                                                            <input type="password" id="cpass" class="form-control" name="cpass"  required  />
                                                            
                                                      
                                                      
                                                      
                                                      
                                                   </div><br>
                                               </div>
                                          </center>    
                                           
                                  </div>
                                  <div class="modal-footer" style="margin-bottom:-16px">
                                 
                                    <button type="button" id="close" class="btn btn-info btn-sm" data-dismiss="modal">Close</button>
                                    <!--<button type="button" class="btn btn-success btn-sm" onClick="return save2();">Save Changes</button>-->
                                     <button type="button" class="btn btn-success" onClick="changepass()">Submit</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
   
    
    
    
    
	</div>
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<?php include("footer.php"); ?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>
	<script src="login.js"></script>
	<script>
	$( document ).ready(function() {
$('.divall').css("display","none");
		$('#div1').css("display","block");
});
	
	function changepage(id)
	{
		//alert(id);
		$('.divall').css("display","none");
		$('#div'+id).css("display","block");
	}
	</script>
    <script>
    
    function changepass()
{
	//alert("ij");
	var formid=$('#mylogin').serialize();
$.ajax({
	type:'POST',
	url:'ajax/login.php',
	data:formid+'&passcheck=1',
	success:function (data)
	{
		//alert(data);
		if(data==1)
		{
			alert("Password Changed");
			window.location.reload();
			//$('#close').trigger('click');
		}
	}
	
	
	
	})
}



function changeinfo()
{
	//alert("ij");
	var formid=$('#mydata').serialize();
$.ajax({
	type:'POST',
	url:'ajax/login.php',
	data:formid+'&infocheck=1',
	success:function (data)
	{
		//alert(data);
		if(data==1)
		{
			//alert("Password Changed");
			window.location.reload();
			//$('#close').trigger('click');
		}
	}
	
	
	
	});
}
    </script>
	<script src="themes/js/bootshop.js"></script>
    <script src="themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	
</div>
<span id="themesBtn"></span>
</body>
</html>