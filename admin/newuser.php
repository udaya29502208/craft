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
					          
					         
					        </div>
			  				<div class="panel-body">
			  					<form action="new_insert.php" method="post">
                                <?php
                                if(isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	if($msg=='err')
	{
	?>
  <p align="center" style="color:#F00">Create User Failed</p>
  
  <?php
	}
	else	{
	?>
  <p align="center" style="color:#F00">Admin Added</p>
  <?php
	}
}
?>
									<fieldset>
										<div class="form-group">
											<label>Username</label>
											<input class="form-control" placeholder="Enter Username" type="text" name="a_user">
										</div>
                                        
                                        <div class="form-group">
											<label>Password</label>
											<input class="form-control" placeholder="Enter Password" type="text" name="a_pass">
										</div>
										
										
											<input type="submit" value="Add"  class="btn btn-primary">
									</div>
								</form>
			  				</div>
			  			</div>
	  				</div>
                    
                 <div class="row">
  				
  				<div class="col-md-12">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Admin</div>
							
							<p align="center" style="color:#F00" id="data_del"></p>
						</div>
		  				<div class="panel-body">
                        <?php
						include('config.php');
						$result=mysql_query("select * from login where status='1' ");?>
                       
		  					<table class="table table-striped">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>Username</th>
				                  <th>Password</th>
				                
				                </tr>
				              </thead>
				              <tbody>
                               <?php
						while($row = mysql_fetch_array($result)) 
						{
						?>
				                <tr id="hide<?php echo $row['id'];?>">
				                  <td><?php echo $row['id'];?></td>
				                  <td><a href="#" data-type="text" data-pk="<?php echo $row['id'];?>" class="editable" data-value="<?php echo $row['username'];?>"><?php echo $row['username'];?></a></td>
				                  <td><?php echo $row['password'];?></td>
                                  <td><a href="#" onClick="delete_user('<?php echo $row['id'];?>')" >Delete</a></td>
				                
				                </tr>
                                <?php
				                }
						?>
				              </tbody>
				            </table>
		  				</div>
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
               Copyright 2014 <a href='#'>ipwns</a>
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

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="vendors/editable/bootstrap-editable.css" rel="stylesheet"/>
	<script src="vendors/editable/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
   <!-- <script src="js/forms.js"></script>-->
    <script>
	$('.editable').editable({
			url:'ajax/changepass_ajax.php',	
		});
	
	</script>
    <script>
	
	
	function delete_user(user_id)
	{
		var conform_del=confirm('Are You want to delete');
		if(conform_del)
		{
		$.ajax({
				type:'post',
				url:'ajax/delete_ajax.php',
				data:'admin_user_del='+user_id,
				success:function(response){
					$('#hide'+user_id).hide();
					if(response==1)
					$('#data_del').html("Admin deleted").delay(3000).slideUp();
					else
						$('#data_del').html("Admin not Deleted").delay(3000).slideUp();
				}
				
			})	
		}
	}
	
	</script>
    
    
    
    
  </body>
</html>