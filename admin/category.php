
<?php
ob_start();
session_start();
if($_SESSION['username']!="" || $_SESSION['userpass']!=""){
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
	  				
	  				<div class="col-md-12">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Category</div>
					          
					        </div>
			  				<div class="panel-body">
			  					<form  method="post" enctype="multipart/form-data">
                              <?php
							  if(isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	if($msg=='err')
	{
	?>
  <p align="center" style="color:#F00">Category not updated</p>
  
  <?php
	}
	else	{
	?>
  <p align="center" style="color:#F00">Category Updated</p>
  <?php
	}
}
?>
									<fieldset>
                                   
                                         
                                           <div class="row">
	  				
	  				<div class="col-md-6">
                                        
                                         <div class="form-group">
											<label>Category Name</label>
											<input class="form-control" placeholder="Text field" type="text" name="catname">
										</div>
                              </div>
                                        <div class="col-md-6">
										<div class="form-group">
                                       <br>
											<input type="submit" value="Add" name="insert" class="btn btn-primary">
										</div>
                                        </div></div>
                                	
									</fieldset>
										
								</form>
			  				</div>
			  			</div>
	  				</div>
                    
                    <?php if(isset($_POST['insert']))
					{
						include("config.php");
						$date=date("d-m-Y h:i:s");
						$insert=mysql_query("insert into category_list(`category_name`, `auth_person`, `status`, `session_date`) values('".$_POST['catname']."','".$_SESSION['username']."','1','$date')");
if($insert)
{
	header("location:category.php?msg=suc");
	
}
else
{
  header("location:category.php?msg=err");
}
					}
					
					?>
                    
                    
                   <div class="row">
  				
  				<div class="col-md-12">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Product</div>
							<p align="center" style="color:#F00" id="data_del"></p>
							<p align="center" style="color:#F00"></p>
						</div>
		  				<div class="panel-body">
                        <?php
						include('config.php');
						$result=mysql_query("select * from category_list where status='1' ");
						?>
                       
		  					<table class="table table-striped">
				              <thead>
				                <tr>
				                  <th>S.No</th>
				                  <th>Category Name</th>
				                  <th>Auth_person</th>
                                   <th>Date</th>
                                  <th>Action</th>
				                
				                </tr>
				              </thead>
				              <tbody>
                               <?php
							    $s=0;
						while($row = mysql_fetch_array($result)) 
						{
						?>
				                <tr id="hide<?php echo $row['id'];?>">
                                <td><?php echo $s=$s+1;?></td>
				                  <td><a href="category_edit.php?p_id=<?php echo $row['id'];?>"><?php echo $row['category_name'];?></a></td>
				                  <td><?php echo $row['auth_person'];?></td>
				                  <td><?php echo $row['session_date'];?></a></td>
                                  
                                  <td><a href="#" onClick="delete_user(<?php echo $row['id'];?>)">Delete</a></td>
                                    
                                   
				                
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
               Copyright 2014 <a href='#'>inpws</a>
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


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
    
    
     <script>
	
	
	function delete_user(port_id)
	{
		var conform_del=confirm('Are You want to delete');
		if(conform_del)
		{
		$.ajax({
				type:'post',
				url:'ajax/delete_ajax.php',
				data:'cat_del='+port_id,
				success:function(response){
					$('#hide'+port_id).hide();
					if(response==1)
					$('#data_del').html("Portfolio deleted").delay(3000).slideUp();
					else
						$('#data_del').html("Portfoliot Deleted").delay(3000).slideUp();
				}
				
			})	
		}
	}
	
	</script>
  </body>
</html>