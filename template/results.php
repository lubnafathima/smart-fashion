<?php include("header.php"); ?>
<head>
    <link rel="stylesheet" href="../static/results.css">
</head>
    <!-- main -->
    <main class="container search text-center w-75 p-5">
        <h2>search results</h2>
        <form method="POST">
            <div class="mb-3 search-box">
                <input class="form-control me-2 shadow-none border-0" type="search" name="search" placeholder="Search..." aria-label="Search" autocomplete="off">
                <button class="border-0 btn btn-r" name="submit" type="submit" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </button>
            </div>
        </form>
        
        <div class="container search-result w-100">
            <div class="res-left w-25 text-start card">
                <form action="" method="get">
                    <div class="card-header p-3">
                        <h5 class="h5-search">Filter
                            <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                        </h5>
                    </div>
                    <div class="card-body p-3">
                        <h4 class="h4-search">Collection</h4>
                        <hr>
                        <!-- This code is to get collection such as women, men, accessories name as radio btn -->
                        <?php 
                            $prod = "SELECT * FROM collection_table";
                            $prod_run = $con->query($prod);

                            if(mysqli_num_rows($prod_run) > 0) {
                                foreach($prod_run as $prod_list) {
                                    $radio=[]; //If user clicks the radio it will be recorded here
                                    if(isset($_GET['collection'])) {
                                        $radio = $_GET['collection'];
                                    }
                                    ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="collection[]" id="collection[]" value="<?= $prod_list['collection']; ?> "
                                            <?php if(in_array($prod_list['collection'], $radio)) { echo "radio"; } ?>
                                        >
                                        <label class="form-check-label" for="collection[]"><?= $prod_list['collection']; ?></label>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "No Collection Found"; //If no clothers from the selected collection is found
                            }
                        ?>
                    </div>
                    <div class="card-body p-3">
                        <h4 class="h4-search">Sort By</h4>
                        <hr>
                        <div class="form-check">
                            <!-- Sort by Price: Newest -->
                            <?php
                            $radio_new=[];
                            if(isset($_GET['new'])) {
                                $radio_new = $_GET['new'];
                            }
                            ?>
                            <input class="form-check-input" type="radio" name="new[]" id="new[]" value="new"
                                <?php if(in_array('new', $radio)) { echo "radio"; } ?>
                            >
                            <label class="form-check-label" for="new[]">Newest</label>
                        </div>
                        <div class="form-check">
                            <!-- Sort by Price: Low to High -->
                            <?php
                            $radio_asc=[];
                            if(isset($_GET['ASC'])) {
                                $radio_asc = $_GET['ASC'];
                            }
                            ?>
                            <input class="form-check-input" type="radio" name="ASC[]" id="ASC[]" value="ASC"
                                <?php if(in_array('ASC', $radio)) { echo "radio"; } ?>
                            >
                            <label class="form-check-label" for="ASC[]">Price: Low to High</label>
                        </div>
                        <div class="form-check">
                            <!-- Sort by Price: High to Low -->
                            <?php
                            $radio_desc=[];
                            if(isset($_GET['DESC'])) {
                                $radio_desc = $_GET['DESC'];
                            }
                            ?>
                            <input class="form-check-input" type="radio" name="DESC[]" id="DESC[]" value="DESC"
                                <?php if(in_array('DESC', $radio)) { echo "radio"; } ?>
                            >
                            <label class="form-check-label" for="DESC[]">Price: High to Low</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="res-right w-75">
                <div class="col-md-12">
                    <div class="row">
                        <!-- when USER searches for a prod in search box -->
                        <?php
                        if(isset($_POST['submit'])) {
                            $search=$_POST['search'];
                            $sql = "select * from products where pName like '%$search%'";
                            $result=mysqli_query($con,$sql);
                            if($result) {
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        echo '<div class="card border-0 col-md-4">
                                            <img src=" '.$row['pImg'].' " class="card-img-top" alt="new1">
                                            <div class="card-body">
                                                <p class="card-head text-center" style="text-transform: uppercase;"> '.$row['pName'].' </p>
                                                <p class="card-para text-center"> $ '.$row['pPrice'].' </p>
                                                <button type="button" class="btn btn-dark w-100">Add to cart</button>
                                            </div>
                                        </div>';
                                    }
                                } else {
                                    // when user makes an invalid search
                                    echo '
                                    <div class="container search-result w-100">
                                        <h5 class="h5-search text-start fw-light">No results found. Try a new search.</h5>
                                    </div>
                                    ';
                                }
                            } 
                        } else {
                            // whichever collection type user clicks, the result will show accourdingly (ie: womens collection,...)
                            if(isset($_GET['collection'])) {
                                $prod_radio = [];
                                $prod_radio = $_GET['collection'];
                                foreach($prod_radio as $row_collection) {
                                    $prod = "SELECT * FROM products WHERE pCollection IN ('$row_collection') ";
                                    $prod_run = $con->query($prod);
                                    if(mysqli_num_rows($prod_run) > 0) {
                                        foreach($prod_run as $prod_item) :
                                        ?>
                                            <div class="card border-0 col-md-4">
                                                <img src="<?= $prod_item['pImg']; ?>" class="card-img-top" alt="new1">
                                                <div class="card-body">
                                                    <p class="card-head text-center" style="text-transform: uppercase;"><?= $prod_item['pName']; ?></p>
                                                    <p class="card-para text-center">$ <?= $prod_item['pPrice']; ?></p>
                                                    <button type="button" class="btn btn-dark w-100">Add to cart</button>
                                                </div>
                                            </div>
                                        <?php
                                        endforeach;
                                    } else { ?>
                                    <!-- If there is no product in that collection -->
                                        <div class="container search-result w-100">
                                                <h5 class="h5-search text-start fw-light">No Collection Found</h5>
                                        </div>
                                    <?php } 
                                }
                            } elseif(isset($_GET['new'])) { // Newest
                                $prod_radio = [];
                                $prod_radio = $_GET['new'];
                                foreach($prod_radio as $row_new) {
                                    $prod = "SELECT * FROM products order by pId DESC";
                                    $prod_run = $con->query($prod);
                                    if(mysqli_num_rows($prod_run) > 0) {
                                        foreach($prod_run as $prod_item) :
                                        ?>
                                            <div class="card border-0 col-md-4">
                                                <img src="<?= $prod_item['pImg']; ?>" class="card-img-top" alt="new1">
                                                <div class="card-body">
                                                    <p class="card-head text-center" style="text-transform: uppercase;"><?= $prod_item['pName']; ?></p>
                                                    <p class="card-para text-center">$ <?= $prod_item['pPrice']; ?></p>
                                                    <button type="button" class="btn btn-dark w-100">Add to cart</button>
                                                </div>
                                            </div>
                                        <?php
                                        endforeach;
                                    } else { ?>
                                    <!-- If there is no product in that collection -->
                                        <div class="container search-result w-100">
                                                <h5 class="h5-search text-start fw-light">No Collection Found</h5>
                                        </div>
                                    <?php } 
                                }
                            } elseif(isset($_GET['ASC'])) { // Low to High
                                $prod_radio = [];
                                $prod_radio = $_GET['ASC'];
                                foreach($prod_radio as $row_ASC) {
                                    $prod = "SELECT * FROM products order by pPrice ASC";
                                    $prod_run = $con->query($prod);
                                    if(mysqli_num_rows($prod_run) > 0) {
                                        foreach($prod_run as $prod_item) :
                                        ?>
                                            <div class="card border-0 col-md-4">
                                                <img src="<?= $prod_item['pImg']; ?>" class="card-img-top" alt="new1">
                                                <div class="card-body">
                                                    <p class="card-head text-center" style="text-transform: uppercase;"><?= $prod_item['pName']; ?></p>
                                                    <p class="card-para text-center">$ <?= $prod_item['pPrice']; ?></p>
                                                    <button type="button" class="btn btn-dark w-100">Add to cart</button>
                                                </div>
                                            </div>
                                        <?php
                                        endforeach;
                                    } else { ?>
                                    <!-- If there is no product in that collection -->
                                        <div class="container search-result w-100">
                                                <h5 class="h5-search text-start fw-light">No Collection Found</h5>
                                        </div>
                                    <?php } 
                                }
                            } elseif(isset($_GET['DESC'])) { // High to Low
                                $prod_radio = [];
                                $prod_radio = $_GET['DESC'];
                                foreach($prod_radio as $row_DESC) {
                                    $prod = "SELECT * FROM products order by pPrice DESC";
                                    $prod_run = $con->query($prod);
                                    if(mysqli_num_rows($prod_run) > 0) {
                                        foreach($prod_run as $prod_item) :
                                        ?>
                                            <div class="card border-0 col-md-4">
                                                <img src="<?= $prod_item['pImg']; ?>" class="card-img-top" alt="new1">
                                                <div class="card-body">
                                                    <p class="card-head text-center" style="text-transform: uppercase;"><?= $prod_item['pName']; ?></p>
                                                    <p class="card-para text-center">$ <?= $prod_item['pPrice']; ?></p>
                                                    <button type="button" class="btn btn-dark w-100">Add to cart</button>
                                                </div>
                                            </div>
                                        <?php
                                        endforeach;
                                    } else { ?>
                                    <!-- If there is no product in that collection -->
                                        <div class="container search-result w-100">
                                                <h5 class="h5-search text-start fw-light">No Collection Found</h5>
                                        </div>
                                    <?php } 
                                }
                            } else {
                                // by default show all products
                                $prod = "SELECT * FROM products";
                                $prod_run = $con->query($prod);
                                if(mysqli_num_rows($prod_run) > 0) {
                                    foreach($prod_run as $prod_item) :
                                    ?>
                                        <div class="card border-0 col-md-4">
                                            <img src="<?= $prod_item['pImg']; ?>" class="card-img-top" alt="new1">
                                            <div class="card-body">
                                                <p class="card-head text-center" style="text-transform: uppercase;"><?= $prod_item['pName']; ?></p>
                                                <p class="card-para text-center">$ <?= $prod_item['pPrice']; ?></p>
                                                <button type="button" class="btn btn-dark w-100">Add to cart</button>
                                            </div>
                                        </div>
                                    <?php
                                    endforeach;
                                } else { ?>
                                <!-- When there is no products available at all -->
                                    <div class="container search-result w-100">
                                            <h5 class="h5-search text-start fw-light">No Collection Found</h5>
                                    </div>
                                <?php } 
                            }
                        }
                        ?>
                    </div>
                </div>
            
        </div>
    </main>
    <?php include("footer.php"); ?>