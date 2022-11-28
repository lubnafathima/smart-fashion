<?php 
include("header.php"); 
$pId = $_GET['pId']; 
$sql = "SELECT * FROM products where pId=$pId";
$all_product = $con->query($sql);
while($row = mysqli_fetch_assoc($all_product)) { ?>

<head>
    <link rel="stylesheet" href="../static/product.css">
</head>
    <!-- main -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-5">
                <div class="main-img">
                    <img class="img-fluid" src="<?php echo $row['pImg']; ?>" alt="ProductS">
                    <div class="row my-3 previews">
                        <div class="col-md-3">
                            <img class="w-100" src="<?php echo $row['pImg']; ?>" alt="Sale">
                        </div>
                        <div class="col-md-3">
                            <img class="w-100" src="<?php echo $row['pAImg']; ?>" alt="Sale">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="main-description px-2">
                    <div class="category text-bold">
                        Collection: <?php echo $row['pCollection']; ?>
                    </div>
                    <div class="product-title fw-semibold my-3 text-uppercase fs-3">
                        <?php echo $row['pName']; ?>
                    </div>


                    <div class="price-area my-4">
                        <!-- <p class="old-price mb-1"><del>$20.58</del> </p> -->
                        <p class="new-price text-bold mb-1">$ <?php echo $row['pPrice']; ?> 
                            <span class="old-price-discount text-danger fs-5 fw-normal">(20% off)</span>
                        </p>
                        <p class="text-secondary mb-1">(Additional tax may apply on checkout)</p>

                    </div>

                    <div class="product-details my-4">
                        <h4 style="color:green;">In Stock</h4>
                        <p class="new-price text-bold mb-1 fs-4">Quantity</p>
                        <!-- ----------------------------- -->
                        <form action="add_to_cart.php" method="POST">
                        <input type="number" class="form-control w-25" name="pQty" min="1" max="" value="1" placeholder="Enter the Quantity">
                        <input type="hidden" name="pId" value="<?php echo $row['pId']; ?>">
                        <?php if(isset($_SESSION['username'])) { ?>
                        <input type="hidden" name="uName" value="<?php echo $_SESSION['username']; ?>">
                        <div class="buttons d-flex my-5">
                            <div class="block text-white" style="background-color: #add0db">
                                <button type="submit" name="submit" class="shadow btn custom-btn">Add to cart</button>
                            </div>
                        </div> 
                        <?php } else {?>
                        <div class="buttons d-flex my-5">
                            <div class="block text-white" style="background-color: #add0db">
                                <a class="shadow btn custom-btn disabled">Add to cart</a>
                            </div>
                        </div>
                        <p class="description text-danger">Log in to add this item to cart!</p>
                        <?php } ?>
                        </form>
                    </div>
                </div>

                <div class="product-details my-4">
                    <p class="details-title text-color mb-1">Product Details</p>
                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat excepturi
                        odio recusandae aliquid ad impedit autem commodi earum voluptatem laboriosam? </p>
                </div>
                <div class="product-details my-4">
                    <p class="details-title text-color mb-2">Material & Care</p>
                    <ul>
                        <li>Cotton</li>
                        <li>Machine-wash</li>
                    </ul>
                </div>
                <div class="product-details my-4">
                    <p class="details-title text-color mb-2">Sold by</p>
                    <ul>
                        <li>Cotton</li>
                        <li>Machine-wash</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <div class="container similar-products my-4">
        <hr>
        <p class="display-5">Shop More</p>

        <div class="row">
            <?php
            $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 4";
            $similar = $con->query($sql);
            while($sRow = mysqli_fetch_assoc($similar)) { ?>
            <div class="col-md-3">
                <div class="similar-product text-center">
                    <img class="w-100" src="<?php echo $sRow['pImg']; ?>" alt="Preview">
                    <p class="title"><?php echo $sRow['pName']; ?></p>
                    <p class="price">$ <?php echo $sRow['pPrice']; ?></p>
                    <a href="product.php?pId=<?php echo $sRow['pId'] ?>" type="button" class="btn btn-dark w-100">Quick View</a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    
    <?php include("footer.php"); ?>