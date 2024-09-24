<?php include 'inc/header.php'; ?>
<?php include 'connection.php'; ?>

<style>
.catt{
	margin-left:10px;
	color:red;
	font-size: 50px;
}
.catt:hover{
	color:green;
}
.sharta{
	color: white;
	margin-left:10px;
	font-size: 50px;
}
</style>

<?php
$r=$y->query("SELECT * FROM tbl_category");
while ($row=$r->fetch_array(MYSQLI_ASSOC)){
echo '<a class="catt" href="product.php?id='.$row['catId'].'">';
echo $row ["catName"];
echo '</a><b class="sharta">|</b>';
}




?><br><br><br><br><br><br>
<?php include 'inc/footer.php'; ?>

