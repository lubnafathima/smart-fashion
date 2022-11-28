<?php
session_start();
require_once 'dbcon.php';
?>
<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link class="favicon" rel="shortcut icon" href="https://imgs.search.brave.com/ElF6Rl1nG5Uo7fMOxeZQ1yQA_e0iuclCbXNmuJWcL34/rs:fit:475:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5V/UVpOWFczTkM4OUhl/REZBb2hyNHp3SGFI/WiZwaWQ9QXBp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- navbar -->
    <header class="header-navbar">
        <div class="px-3 py-2 border-bottom mb-0" style="background-color: #E4E4E4;">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <form action="results.php" method="get" target="_blank" class="d-flex me-lg-auto" role="search">
                    </form>
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small float-end">
                        <li><a href="results.php" class="nav-link text-dark"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        <li><a href="cart.php" class="nav-link text-dark"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        <?php if(isset($_SESSION['username'])){ ?>
                        <li><a href="user_profile.php" class="nav-link text-dark" ><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li><a href="logout.php" class="nav-link text-bg-dark">Logout</a></li>
                        <?php } else { ?>
                        <li><a href="log-in.php" class="nav-link text-dark" ><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        <li><a href="log-in.php" class="nav-link text-bg-dark">Log In</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="px-3 py-2 text-bg-dark">
            <div class="container">
                <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="px-5 py-0 nav-item "><a href="#" class="nav-link nav-elem text-light fs-5 text-uppercase fw-light disabled me-5">Smart Fashion</a></li>
                    <li class="nav-item "><a href="home.php" class="nav-link nav-elem text-white mt-1 mx-5" aria-current="page">Home</a></li>
                    <li class="nav-item  dropdown">
                        <a href="#" class="nav-link nav-elem dropdown-toggle text-white mt-1 mx-3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Collection</a>
                        <ul class="dropdown-menu text-bg-dark">
                            <?php
                            $sql = "SELECT * FROM collection_table";
                            $all_product = $con->query($sql);
                            while($row = mysqli_fetch_assoc($all_product)) { 
                            echo '<li><a class="dropdown-item text-white link-dark" href="collection.php?collection='.$row['collection'].'">'.$row['collection'].'</a></li>';
                            } ?>
                        </ul>
                    </li>
                    <li class="nav-item "><a href="lookbook.php" class="nav-link nav-elem text-white mt-1 mx-3">Lookbook</a></li>
                    <li class="nav-item "><a href="customer_care.php" class="nav-link nav-elem text-white mt-1 mx-3">Customer Care</a></li>
                </ul>
                </header>
            </div>
        </div>
    </header>