<?php
ob_start();
session_start();
if($_SESSION['user_inpws_name']!="" || $_SESSION['user_inpws_pass']!=""){
	header('login.php');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  		<?php
			include('header.php');
			?>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php
			include('side_menu.php');
			?>
		  </div>
		  <div class="col-md-10">

	  			<div class="row">
	  				
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Add New Admin</div>
					          
					            <!--<div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>-->
					        </div>
			  				<div class="panel-body">
			  					<form id="form_chane_pass" method="post">
      
  <p align="center" id="ajax_change" style="color:#F00"></p>
 
									<fieldset>
                                    <input type="hidden" value="<?php echo $_SESSION['user_inpws_pass'];?>" name="sess_pass" id="sess_pass">
										<div class="form-group">
											<label>Current Password</label>
											<input class="form-control" placeholder="Enter Username" type="text" name="curpass" id="curpass">
										</div>
                                        
                                        <div class="form-group">
											<label>New Password</label>
											<input class="form-control" placeholder="Enter Password" type="text" name="newpass" id="newpass" >
										</div>
                                         <div class="form-group">
											<label>Confirm Paasword</label>
											<input class="form-control" placeholder="Enter Password" type="text" name="conpass" id="conpass">
										</div>
										
										
											<input type="submit" value="Update"  class="btn btn-primary">
									</div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>

	  			


	  		<!--  Page content -->
		  </div>
		</div>
    </div>
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>




    <script src="js/custom.js"></script>
    <script>
	$('#form_chane_pass').on('submit',function(event){
											   event.preventDefault();
		var old=$('#curpass').val();	
		var newp=$('#newpass').val();	
		var con=$('#conpass').val();	
		var session_pass=$('#sess_pass').val();
		if(old!= session_pass)
		{
			alert("Password doesnt match");
		}
		else if(newp!=con)
		{
			alert("Check confirm password");								   
				
		}
		else
		{
			var formvalues=$('#form_chane_pass').serialize();
			$.ajax({
				type:'post',
				url:'ajax/changepass_ajax.php',
				data:formvalues+'&changepassword' ,
				success:function(response){
					$('#ajax_change').html(response).delay(3000).slideUp();
				}
				
			})	
		}
	})
	</script>
    
  </body>
</html>