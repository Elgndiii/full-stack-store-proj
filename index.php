<?php include 'inc/header.php'; ?>
<?php include 'inc/slider.php'; ?>


 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php 
              $getFpd = $pd->getFeaturedProduct();
              if ($getFpd) {
                  while ($pro = $getFpd->fetch_assoc()) {
                      ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $pro['productId']; ?>"><img src="admin/<?php echo $pro['image']; ?>" alt="" /></a>
					 <h2><?php echo $pro['productName']; ?></h2>
					 <p><span class="price"><?php echo $pro['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proId=<?php echo $pro['productId']; ?>" class="details">Add to cart</a></span></div>
				</div>
				<?php
                  }
              } ?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
              $getNpd = $pd->getNewProduct();
              if ($getNpd) {
                  while ($pro = $getNpd->fetch_assoc()) {
                      ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $pro['productId']; ?>"><img class="img" src="admin/<?php echo $pro['image']; ?>" alt="" /></a>
					 <h2><?php echo $pro['productName']; ?></h2>
					 <p><span class="price"><?php echo $pro['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proId=<?php echo $pro['productId']; ?>" class="details">Add to cart</a></span></div>
				</div>
				
				<?php
                  }
              } ?>
				
			</div>
    </div>
 </div>

<?php include 'inc/footer.php'; ?>
