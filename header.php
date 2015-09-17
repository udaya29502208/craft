<div id="header" style="margin-top:-20px">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome!<strong> <?php if(isset($_SESSION['username'])) { echo $_SESSION['firstname']." ".$_SESSION['lastname']; } else {?>User <?php } ?> </strong></div>
	<div class="span6">
	<div class="pull-right">
		
	<!--	<span class="btn btn-mini">En</span>-->
   <?php if(isset($_SESSION['username'])) {?>
		<a href="account.php" ><span>My Account</span></a> |
	<!--	<span class="btn btn-mini">$155.00</span>-->
		<a href="logout.php"><span class="">Logout</span></a> |
        <?php } else{ ?>
        <a href="#login" role="button" data-toggle="modal" ><span class="">Login</span></a> | 
        <div id="login" class="modal hide fade in"  tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false"   >
		<center>  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>HomeCraft Login</h3>
		  </div></center>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" id="loginform">
			  <div class="control-group">								
				<input type="text" id="username" name="username" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="password" name="password" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>		
			<button type="button" onclick="logincheck();" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
		<a href="register.php"><span class="">New User</span></a> | 
        <?php } ?>
    <?php include('config.php');
	$sel=mysql_query("select sum(total_amount)as amount, count(*) as counter from cart where cart_status='1' && status='1'");
	//$count=mysql_num_rows($sel);
	$row1=mysql_fetch_array($sel);
	$count=$row1['counter'];
	$amount=$row1['amount'];
	
	?>
	   
	<a href="product_summary.php"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?=$count?> ] Itemes </span> </a> 
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo1.png" alt="Bootsshop"/></a>
		<!--<form class="form-inline navbar-search" method="post" action="products.php" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>All</option>
			<option>CLOTHES </option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>-->
    <ul id="topMenu" class="nav pull-right">
     <li class=""><a href="index.php">Home</a></li>
	 <li class=""><a href="special_offer.php">Product</a></li>
	 <li class=""><a href="normal.php">Services</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <!--<li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
	
	</li>-->
    </ul>
  </div>
</div>
</div>
</div>

