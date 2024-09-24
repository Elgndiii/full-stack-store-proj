<?php include 'connection.php';?>
<?php include 'inc/header.php'; ?>
<?php 

if(isset($_GET['q1']))
{
    $s = $_GET['q1'];
    $r = $y->query("SELECT * FROM tbl_product WHERE productName LIKE '$s%'");
    
    if($r) {
        if($r->num_rows > 0) {
            while ($row = $r->fetch_array(MYSQLI_ASSOC)) {
                echo '
                <div id="pro">
                <div>';
                echo '
                <img class="img2" src="admin/';
                echo $row ["image"]; 
                echo'"><h2 class="proname">';
                echo $row ["productName"];
                echo'</h2>
                <p><span class="proprice">';
                echo $row ["price"];
                echo'<div class="button"><span><a href="details.php?proId=';
                 echo  $row['productId']; 
                 echo '" class="addtocart">Add to cart</a></span></div>';
            }
        } else {
            echo "No results found.";
        }
    } else {
        echo "Error executing the query.";
    }
    
    if(isset($_GET['s']) && $_GET['s'] == false) {
        header("Location: index.php"); 
    }
}


?>
<?php include 'inc/footer.php'; ?>