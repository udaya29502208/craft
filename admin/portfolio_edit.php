
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
  <style>
  .inline_img {
	 display:inline;
	 float:left;
	 margin-right:10px;
  }
  </style>
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
					            <div class="panel-title">PortFolio Upload</div>
					          
					        </div>
			  				<div class="panel-body">
			  					<form action="portfolio_ins.php" method="post" enctype="multipart/form-data">
                              <?php
							  if(isset($_GET['msg']))
{
	$msg=$_GET['msg'];
	if($msg=='err')
	{
	?>
  <p align="center" style="color:#F00">Portfolio not updated</p>
  
  <?php
	}
	else	{
	?>
  <p align="center" style="color:#F00">Portfolio Updated</p>
  <?php
	}
}
?>

  <?php
  $id= $_GET['p_id'];
						include('config.php');
						$result=mysql_query("select * from product where status='1' and id='$id' ");
						while($row = mysql_fetch_array($result)) 
						{
						
						?>


									<fieldset>
                                   <!-- <div class="row">
	  				
	  				<div class="col-md-6">
										<div class="form-group">
                                         <input class="form-control" placeholder="Text field" type="hidden" name="folio_id" value="<?php echo $row['id'];?>">
											<label>Project Name</label>
											<input class="form-control" placeholder="Text field" type="text" name="pname1" value="<?php echo $row['projname'];?>"
										</div>
                                        </div></div>
                                     <div class="col-md-6">   
                                        <div class="form-group">
											<label>Project type</label>
											<input class="form-control" placeholder="Text field" type="text" name="ptype1" value="<?php echo $row['projtype'];?>">
										</div></div></div>
                                        
                                         <div class="row">
	  				
	  				<div class="col-md-6">
                                        
                                        
                                         <div class="form-group">
											<label>Client Address</label>
											<input class="form-control" placeholder="Text field" type="text" name="pclient1" value="<?php echo $row['caddress'];?>">
										</div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                        <div class="form-group">
											<label>Technology</label>
											<input class="form-control" placeholder="Text field" type="text" name="ptech1" value="<?php echo $row['Technology'];?>">
										</div>
                                       </div></div>
                                           <div class="row">
	  				
	  				<div class="col-md-12">
                                         
                                        <div class="form-group">
											<label>Description</label>
											<textarea class="form-control" placeholder="Textarea" rows="3" name="pdesc1" ><?php echo $row['description'];?></textarea>
										</div>
                                         </div></div>-->
                                         
                                           <div class="row">
	  				
	  				<div class="col-md-6">
                                        
                                         <div class="form-group">
                                         <input class="form-control" placeholder="Text field" type="hidden" name="folio_id" value="<?php echo $row['id'];?>">
											<label>Product Name</label>
											<input class="form-control" placeholder="Text field" type="text" name="pdom1" value="<?php echo $row['product_name'];?>" >
										</div>
                              </div>
                                        <div class="col-md-6">
										<div class="form-group">
											<label >Tags</label>
											<div >
												<select class="form-control" name="ptag1">
													<option <?php if($row['product_type']=='Latex')
													{
													?> selected<?php } ?> >Latex</option>
                                                    
													<option <?php if($row['product_type']=='Paper')
													{
													?> selected<?php } ?> >Paper</option>
													<option <?php if($row['product_type']=='Flower')
													{
													?> selected<?php } ?> >Flower</option>
													<option <?php if($row['product_type']=='Leaf')
													{
													?> selected<?php } ?>  >Leaf</option>
													<option<?php if($row['product_type']=='Others')
													{
													?> selected<?php } ?> >Others</option>
													
												</select>
											</div>
										</div>
                                        </div></div>
                                        
                                        
                                        
                                        
                                         <div class="row">
	  				<div class="col-md-6">
                                        
                                         <div class="form-group">
											<label>Price(Rupees)</label>
											<input class="form-control" placeholder="Text field" value="<?php echo $row['price']; ?>" type="text" name="price1">
										</div>
                              </div>
	  				<div class="col-md-6">
                                        
                                         <div class="form-group">
											<label >Main Image</label>
											
												<input type="file" class="btn btn-default" id="exampleInputFile1" name="pmain1">
												<!--<p class="help-block">
													some help text here.
												</p>-->
                                                <img src="<?php echo $row['image']; ?>" width="100" height="100">
											
					</div>
                                        
                          </div>
                                        
                                        
                   </div>
                      <!--<div class="row">
                     <div class="col-md-6">
										<div class="form-group">
											<label >Other Images</label>
											
												<input type="file" name="other_image1[]" multiple class="btn btn-default" id="exampleInputFile1" >
												<?php
												$file= $row['other'];
												$split=explode(',',$file);
												for($i=0;$i<count($split);$i++)
												{?>
                                                <div class="inline_img">
													 <img src="<?php echo $split[$i]; ?>" width="100" height="100"><br>
                                                     <a href="portfolio_ins.php?id=<?php echo $row['id']; ?>&pos=<?php echo $i ?>">Remove</a>
                                                     </div>
											<?php	
											} ?>
                                            <div class="clearfix"></div>
                                            <?php
						}
												?>
											
					</div>
                    						</div></div>-->
                                        
                                        
										<input type="submit" value="Update" name="edit"  class="btn btn-primary">
										
									</fieldset>
                                    
										
								</form>
			  				</div>
			  			</div>
	  				</div>
                    
                   <!--<div class="row">
  				
  				<div class="col-md-12">
  					<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Portfolio</div>
							<p align="center" style="color:#F00" id="data_del"></p>
							<p align="center" style="color:#F00" ></p>
						</div>
		  				<div class="panel-body">
                        <?php
						include('config.php');
						$result=mysql_query("select * from portfolio where status='1'  ");
						?>
                       
		  					<table class="table table-striped">
				              <thead>
				                <tr>
				                  <th>S.No</th>
				                  <th>Project Name</th>
				                  <th>Project Type</th>
                                    <th>Domain</th>
				                  <th>Main path</th>
                                  <th>Action</th>
				                
				                </tr>
				              </thead>
				              <tbody>
                               <?php
						while($row = mysql_fetch_array($result)) 
						{
						?>
				                <tr id="hide<?php echo $row['id'];?>">
                                <td><?php echo $row['id'];?></td>
				                  <td><a href="portfolio_edit.php?p_id=<?php echo $row['id'];?>"><?php echo $row['projname'];?></a></td>
				                  <td><?php echo $row['projtype'];?></td>
				                  <td><a href="<?php echo $row['domain'];?>"><?php echo $row['domain'];?></a></td>
                                   <td><a href="<?php echo $row['main'];?>"><img src="<?php echo $row['main'];?>" width="30" height="30"></a></td>
                                  <td> <a href="#" onClick="delete_user(<?php echo $row['id'];?>)" >Delete</a></td>
                                    
                                     
				                
				                </tr>
                                <?php
				                }
						?>
				              </tbody>
				            </table>
		  				</div>
		  			</div>
  				</div>
  			</div>--> 
                    
                    
                    
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
				data:'portfolio_del='+port_id,
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