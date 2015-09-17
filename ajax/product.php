<?php 
session_start();
include('../config.php');
if(isset($_POST['prod_type']))
{
	//$select=mysql_query("select * from product where product_id='".$_POST['prod_type']."' ");
	
	//$selrow=mysql_fetch_array($select);
	
	$selectcol=mysql_query("select * from product where product_id='".$_POST['prod_type']."' ");
	$cnt=mysql_num_rows($selectcol);
	$selectrow=mysql_fetch_array($selectcol);
		?>
	
  
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Special offers</li>
    </ul>
	<h4> 20% Discount Special offer<small class="pull-right"> 40 products are available </small></h4>	
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>
	<div id="myTab" class="pull-right">
	 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
	 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
	</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
    
    <?php 
												$log=mysql_query("select * from product  where status='1' && product_id='".$selectrow['product_id']."'");
												while($row=mysql_fetch_array($log))
												{
												$log1=mysql_query("select * from cart  where status='1' and product_id='".$row['id']."' ");
												$rowdata=mysql_fetch_array($log1);	
												 ?>
		<div class="row">	  
			<div class="span2">
			<img src="admin/<?=$row['image']?>" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5><?=$row['product_type']?></h5>
				<p>
				<?=$row['product_name']?>
				</p>
				<a class="btn btn-small pull-right" href="product_details.php?id=<?=$row['id']?>">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3>INR <?=$row['price']?></h3>
		
			  <a href="#" class="btn btn-large btn-primary" <?php if($row['id']!=$rowdata['product_id']) {?>  onClick="cart('<?=$row['id']?>','<?=$row['product_type']?>','<?=$row['price']?>')"  <?php } else { ?>style="background:green ; text-shadow:none; color:white "<?php } ?>> Add to <i class=" icon-shopping-cart"></i></a>
			  <a href="product_details.php?id=<?=$row['id']?>" class="btn btn-large"><i class="icon-zoom-in"></i></a>
				</form>
			</div>
	</div>
	<hr class="soft"/>
    
    <?php } ?>
    
    
	
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
         <?php 
												$log=mysql_query("select * from product  where status='1' && product_id='".$selectrow['product_id']."'");
												while($row=mysql_fetch_array($log))
												{
												$log1=mysql_query("select * from cart  where status='1' and product_id='".$row['id']."' ");
												$rowdata=mysql_fetch_array($log1);	
												 ?>
			<li class="span3">
			  <div class="thumbnail">
				<a href="product_details.php"><img src="admin/<?=$row['image']?>" alt=""/></a>
				<div class="caption">
				  <h5><?=$row['product_type']?></h5>
				  <p> 
					<?=$row['product_name']?>
				  </p>
				  <h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?=$row['image']?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#" <?php if($row['id']!=$rowdata['product_id']) {?>  onClick="cart('<?=$row['id']?>','<?=$row['product_type']?>','<?=$row['price']?>')"  <?php } else { ?>style="background:green ; text-shadow:none; color:white "<?php } ?>>Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><img src="rup1.png"  style="height:18px; margin-top:-5px"?> <?=$row['price']?></a></h4>
				</div>
			  </div>
			</li>
            
            <?php } ?>
            
            
			
		  </ul>


	<hr class="soft"/>
	</div>
</div>
<!--<a href="compair.php" class="btn btn-large pull-right">Compair Product</a>
	<div class="pagination">
		<ul>
		<li><a href="#">&lsaquo;</a></li>
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">...</a></li>
		<li><a href="#">&rsaquo;</a></li>
		</ul>
	</div>-->
<br class="clr"/>

<?php
	
}

?>