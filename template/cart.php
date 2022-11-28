<?php 
include("header.php");

?>
<head>
    <link rel="stylesheet" href="../static/cart.css">
</head>
    <!-- main -->
    <div class="card" style="min-height: 50vh;">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>My Shopping Cart</b></h4></div>
                    </div>
                </div>    
                <?php
                if(isset($_SESSION['username'])) { //Authorized user
                    include("cart_function.php");
                    $sql = "SELECT * FROM cart where uName='{$_SESSION["username"]}';";
                    $all_product = $con->query($sql);
                    if(mysqli_num_rows($all_product) > 0) { // If user has items in cart 
                        while($row = mysqli_fetch_assoc($all_product)) {
                            $new_sql = "SELECT * FROM products where pId={$row["pId"]};";
                            $new_product = $con->query($new_sql);
                            while($new_row = mysqli_fetch_assoc($new_product)) { ?>
                                <div class="row border-top border-bottom">
                                    <div class="row main align-items-center">
                                        <div class="col-2"><img class="img-fluid" src="<?php echo $new_row['pAImg']; ?>"></div>
                                        <div class="col">
                                            <div class="row text-muted"><?php echo $new_row['pCollection']; ?></div>
                                            <div class="row"><?php echo $new_row['pName']; ?></div>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col">&dollar; <?php echo $new_row['pPrice']; ?> 
                                            <a href="cart_delete.php?upId=<?php echo $new_row['pId']; ?>&username=<?php echo $_SESSION['username']; ?>" class="close text-decoration-none">&#10005;</a>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                            } 
                        } ?>
                                <div class="back-to-shop">
                                    <a href="home.php" class="text-decoration-none">&leftarrow;<span class="text-muted">Back to shop</span></a>
                                </div>
                            </div>
                            <div class="col-md-4 summary">
                                <div><h5><b>Summary</b></h5></div>
                                <hr>
                                <div class="row">
                                    <div class="col" style="padding-left:0;">ITEMS <?php echo $num_row ?></div>
                                    <div class="col text-right">&dollar; <?php echo $total ?></div>
                                </div>
                                <form>
                                    <p>SHIPPING</p>
                                    <select><option class="text-muted">Standard-Delivery- &dollar;5.00</option></select>
                                    <p>GIVE CODE</p>
                                    <input id="code" placeholder="Enter your code">
                                </form>
                                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                                    <div class="col">TOTAL PRICE</div>
                                    <div class="col text-right">&dollar; <?php echo $total_price ?></div>
                                </div>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">CHECKOUT</button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">We can't accept online orders right now</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">Please contact us to complete your purchase.</div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Got it</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ---- -->
                            </div>
                        </div>
                    </div>
                    <?php 
                    } else { ?> 
                    <!-- If user has no item in cart -->
                    <div class="row text-danger">Empty cart !</div>
                    <div class="back-to-shop">
                        <a href="home.php" class="text-decoration-none">&leftarrow;<span class="text-muted">Back to shop</span></a>
                    </div>
                </div>
                <div class="col-md-4 summary">
                    <div><img style="width: 25vw; height:40vh;" src="https://cdni.iconscout.com/illustration/premium/thumb/empty-cart-5521508-4610092.png"></div>
                </div>
            </div>
        </div>

                    <?php } 
                } else { ?>
                <!-- Unauthorized User -->
                <div class="row text-danger">Empty cart !</div>
                <div class="back-to-shop">
                    <a href="log-in.php" class="text-decoration-none fs-4 fw-bold"><i class="fa fa-sign-in" aria-hidden="true"></i> <span class="text-muted">Sign In to Shop Now</span></a>
                </div>
            </div>
            <div class="col-md-4 summary">
                <div><img style="width: 25vw; height:40vh;" src="https://cdni.iconscout.com/illustration/premium/thumb/empty-cart-5521508-4610092.png"></div>
            </div>
        </div>
    </div>
                <?php } ?>
            
<?php include("footer.php"); ?>