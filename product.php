<?php include 'connection.php';?>
<?php include 'inc/header.php'; ?>



<?php 

$r=$y->query("SELECT * FROM tbl_product WHERE catId=".$_GET['id']." ");

    while ($row=$r->fetch_array(MYSQLI_ASSOC)){
       ?>
               
				<div class="g4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $row['productId']; ?>"><img class="img" src="admin/<?php echo $row['image']; ?>" alt="" /></a>
					 <h2><?php echo $row['productName']; ?></h2>
					 <p><span class="price"><?php echo $row['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proId=<?php echo $row['productId']; ?>" class="details">Add to cart</a></span></div>
				</div>
				
				<?php
                  }
              ?>
				
			</div>
    </div>
 </div>