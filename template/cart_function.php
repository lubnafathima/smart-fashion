<?php
// PHP CODE FOR CART

// function to show total number of items in cart
$num = "SELECT cId FROM cart where uName='{$_SESSION["username"]}' ORDER BY cId";
$num_product = $con->query($num);
$num_row=mysqli_num_rows($num_product);
$total=0;

// Total of all the items in the cart
if(isset($_SESSION['username'])) {
    $pId_cart = "SELECT pId FROM cart where uName='{$_SESSION["username"]}' ";
    $pId_product = $con->query($pId_cart);
    while($pId_row = mysqli_fetch_assoc($pId_product)) { 
        $tot = "SELECT SUM(pPrice) AS sum FROM products where pId={$pId_row['pId']} ORDER BY pId";
        $tot_product = $con->query($tot);
        if(mysqli_num_rows($tot_product) > 0) {
            while($tot_row = mysqli_fetch_assoc($tot_product)) {
                $order=$tot_row['sum'];
                $total=$total+$order;
            }
        }
    }
}

// Total amount INCLUDING delivery charges
$total_price = $total + 5;
?>