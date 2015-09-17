<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png" alt="cart"><?=$count;?> Items in your cart  <span class="badge badge-warning pull-right"><img src="rup1.png"  style="height:15px; height:15px; margin-right:inherit"><?=$amount;?></span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<!--<li class="subMenu open"><a> ELECTRONICS [230]</a>
				<ul>
				<li><a class="active" href="products.php"><i class="icon-chevron-right"></i>Cameras (100) </a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul>
			</li>-->
            
          
         <?php include('config.php');
												$log=mysql_query("select * from product  where status='1' group by product_type ");
												$s=0;
												while($row=mysql_fetch_array($log))
												{
													$s=$s+1;
													
												 ?>
			<li class="subMenu <?php if($s==1){ ?> open <?php } ?>" ><a><?=$row['product_type']?></a>
				<ul  <?php if($s!=1){ ?>  style="display:none" <?php } ?> >
              <?php   $log1=mysql_query("select * from product  where product_type='".$row['product_type']."' group by product_name  ");
												while($row1=mysql_fetch_array($log1))
												{
													//echo $s=$s+1;
													?>
				<li><a <?php if($s==1){ ?>  class="active" <?php } ?> href="#"  onclick="productlist('<?=$row1['product_id']?>')"><i class="icon-chevron-right"></i><?=$row1['product_name']?> </a></li>
                <?php } ?>
                <!--href="special_offer.php?id=<?=$row1['id']?>"-->
				<!--<li><a href="products.php"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>-->
				</ul>
			</li>
            <?php } ?>
            
            
			<!--<li class="subMenu"><a> CLOTHES [840] </a>
			<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>												
			</ul>
			</li>-->
			<!--<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a>
				<ul style="display:none">
				<li><a href="products.php"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.php"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.php"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.php"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>-->
			<!--<li><a href="products.php">HEALTH & BEAUTY [18]</a></li>
			<li><a href="products.php">SPORTS & LEISURE [58]</a></li>
			<li><a href="products.php">BOOKS & ENTERTAINMENTS [14]</a></li>-->
		</ul>
		<br/>
        <?php include('config.php');
												$log=mysql_query("select * from product  where status='1' order by rand() limit 2 ");
												while($row=mysql_fetch_array($log))
												{
													$log1=mysql_query("select * from cart  where status='1' and product_id='".$row['id']."' ");
												$rowdata=mysql_fetch_array($log1);	
												 ?>
		  <div class="thumbnail">
			<img src="admin/<?=$row['image']?>" />
			<div class="caption">
			  <h5><?=$row['product_name']?></h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?=$row['id']?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#"  <?php if($row['id']!=$rowdata['product_id']) {?>  onClick="cart('<?=$row['id']?>','<?=$row['product_type']?>','<?=$row['price']?>')"  <?php } else { ?>style="background:green ; text-shadow:none; color:white "<?php } ?>>Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><img src="rup1.png"  style="height:18px; margin-top:-5px"?> <?=$row['price']?></a></h4>
			</div>
		  </div><br/>
         <?php } ?>
		<!--	<div class="thumbnail">
				<img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.php"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>-->
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div>
	</div>