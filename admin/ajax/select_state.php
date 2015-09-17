<?php
	include('../config.php');
if(isset($_POST['country']))
{
	$value1=$_POST['country'];
	$result=mysql_query("select state from state where country='$value1'");
	if(mysql_num_rows($result)>0)
	{
	?>
						<select class="form-control" name="state" id="state_db">
                        
				<?php	while($row = mysql_fetch_array($result)) 
						{
							$state=explode(',',$row['state']);
							for($i=0;$i<count($state);$i++)
							{
								
							?> 
                            <option><?php echo $state[$i]; ?></option>
                            <?php }
							
						}
						?>
                            </select>
                           <?php  
						   }
                            else
                            {
                            ?>
                            <input class="form-control" type="text" name="state" />
                            <?php
                            }
							
                            
                            }
							?>