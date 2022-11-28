<?php
include("header.php");

// if(!isset($_SESSION['username'])) {
//     echo "you are logged out";
//     header('location:home.php');
// }

$sql = "SELECT * FROM products LIMIT 3";
$all_product = $con->query($sql);
?>
<head>
    <title>Home | Smart Fashion</title>
    <link rel="stylesheet" href="../static/home.css">
</head>
    <!-- MAIN -->
    <main class="main-div">
        <div class="main-top">
            <div class="main main-1 main-blank main-blank-white"></div>
            <div class="main main-2 main-img"></div>
            <div class="main main-3 main-msg main-msg-white">
                <h2 class="h2-main-msg">Sultry & Smart</h2>
                <h3 class="h3-main-msg">Hot Spring Looks</h3>
                <div class="hr"></div>
                <a href="collection.php?collection=women" class="a-main-msg">Women's Fashion</a>
            </div>
            <div class="main main-4 main-blank main-blank-white"></div>
        </div>
        <div class="main-btm">
            <div class="main main-5 main-blank main-blank-green"></div>
            <div class="main main-6 main-msg main-msg-green">
                <h2 class="h2-main-msg">Elegant & Slick</h2>
                <h3 class="h3-main-msg">Suitable for all</h3>
                <div class="hr"></div>
                <a href="collection.php?collection=men" class="a-main-msg">Shop Now</a>
            </div>
            <div class="main main-7 main-img"></div>
            <div class="main main-8 main-blank main-blank-green"></div>
        </div>
    </main>

    <!-- New Arrivals -->
    <div class="container cont_new">
        <h2 class="h2_cont_new">New Arrivals</h2>
        <div class="cont-card">
            <?php while($row = mysqli_fetch_assoc($all_product)) { ?>
            <a href="product.php?pId=<?php echo $row['pId'] ?>" class="card border-0" style="width: 18rem;">
                <img src="<?php echo $row['pImg']; ?>" class="card-img-top" alt="new1">
            </a>
            <?php } ?>
        </div>
    </div>

    <!-- Get on the list -->
    <div class="container cont-on_list text-center" style="width: 45vw;">
        <h2 class="h2-on_list">GET ON THE LIST</h2>
        <p class="p-on_list">and be the first to shop new arrivals and exclusive promotions.</p>
        <form>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email address" required />
            </div>
            <!-- Button trigger modal -->
            <button type="submit" class="w-50 btn btn-lg text-light6" style="background-color: #A3C7BD;" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        </form>
    </div>

    <!-- black-section -->
    <div class="cont_new w-100 link-dark black p-2">
        <div class="cont-card">
            <a href="collection.php?collection=accessories" class="card border-0 black1 text-decoration-none" style="width: 30rem;height: 25rem;">
                <p class="card-head ch-black text-light">Swoon-worthy</p>
                <p class="card-para cp-black text-light">Accessories</p>
            </a>
            <a href="lookbook.php" class="card border-0 black2 text-decoration-none" style="width: 30rem;height: 25rem;">
                <p class="card-head ch-black text-light">Winter sale</p>
                <p class="card-para cp-black text-light">now 30% off</p>
            </a>
        </div>
    </div>

    <?php include("footer.php"); ?>