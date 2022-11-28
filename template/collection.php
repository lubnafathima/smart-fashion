<?php
include("header.php");

$collection="";
if(isset($_GET["collection"])) {
    $collection = $_GET["collection"];
}

$sql = "SELECT * FROM products WHERE pCollection = '$collection' ";
$all_product = $con->query($sql);

?>
<head>
    <link rel="stylesheet" href="../static/collection.css">
</head>
<!-- main -->
<div class="main">
    <h2 class="h2_cont_new text-center"><?php echo $collection; ?></h2>
    <div class="container cont_new col-md-12">
        <div class="cont-card row">
            <?php while($row = mysqli_fetch_assoc($all_product)) { ?>
            <div class="card border-0 col-md-3 mb-2" style="width: 18rem;">
                <img src="<?php echo $row['pImg']; ?>" style="width: 18rem; height: 18rem;" class="card-img-top" alt="women1">
                <img src="<?php echo $row['pAImg']; ?>" style="width: 18rem; height: 18rem;" class="img-top mx-3" alt="women1">
                <div class="card-body">
                    <p class="card-head text-center"><?php echo $row['pName']; ?></p>
                    <p class="card-para text-center">$ <?php echo $row['pPrice']; ?></p>
                    <a href="product.php?pId=<?php echo $row['pId'] ?>" type="button" class="btn btn-dark w-100">Quick View</a>
                </div> 
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>