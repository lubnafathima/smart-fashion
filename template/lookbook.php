<?php
include("header.php");
?>
<head>
    <title>Lookbook | Smart Fashion</title>
    <link rel="stylesheet" href="../static/lookbook.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
</head>
    <!-- main -->
    <main class="container-fluid">
        <h2 class="h2_cont_new text-center">Lookbook</h2>
        <div class="container-fluid my-6">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $sql = "SELECT * FROM products ORDER BY RAND()";
                        $all_product = $con->query($sql);
                        while($row = mysqli_fetch_assoc($all_product)) { ?>
                        <div class="item mb-4">
                            <a href="product.php?pId=<?php echo $row['pId'] ?>" class="card border-0 shadow">
                                <img src="<?php echo $row['pImg']; ?>" alt="" class="card-img-top">
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div> 
        <h2 class="h2_cont_new text-center lookbook-text">
            <a href="#">All Latest and trendy collections</a>
        </h2>
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $sql = "SELECT * FROM products ORDER BY RAND()";
                        $all_product = $con->query($sql);
                        while($row = mysqli_fetch_assoc($all_product)) { ?>
                        <div class="item mb-4">
                            <a href="product.php?pId=<?php echo $row['pId'] ?>" class="card border-0 shadow">
                                <img src="<?php echo $row['pAImg']; ?>" alt="" class="card-img-top">
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>  
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
<?php include("footer.php"); ?>