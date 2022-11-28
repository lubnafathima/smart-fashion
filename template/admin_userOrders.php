<?php
session_start();
require_once 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Smart Fashion</title>
    <link rel="stylesheet" href="../static/admin.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row no-gutters">
            <div class="col-md-4 col-lg-4"><img src="../img/favicon.png" class="w-100 h-75"></div>
            <div class="col-md-8 col-lg-8">
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between align-items-center px-5 py-4 bg-dark text-white">
                        <h3 class="display-5">Welcome, Admin</h3>
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                      </div>
                    <div class="p-4 bg-black text-white">
                        <h6>200+ Online <i class="fa fa-circle text-success" aria-hidden="true"></i></h6>
                    </div>
                    <div class="d-flex flex-row text-white">
                        <div class="p-4 bg-primary text-center skill-block">
                            <h4>10K+</h4>
                            <h6>Customer</h6>
                        </div>
                        <div class="p-3 bg-success text-center skill-block">
                            <h4>2L+</h4>
                            <h6>Order</h6>
                        </div>
                        <div class="p-3 bg-warning text-center skill-block">
                            <h4>4.3</h4>
                            <h6>Rating</h6>
                        </div>
                        <div class="p-3 bg-danger text-center skill-block">
                            <h4>5+ years</h4>
                            <h6>of service</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- user order list -->
    <div class="container my-5">
        <ul class="list-group">
          <?php
          if(isset($_GET['username'])) { //Authorized user
            $sql = "SELECT * FROM cart where uName='{$_GET["username"]}';";
            $all_product = $con->query($sql);
            if(mysqli_num_rows($all_product) > 0) { // If user has items in cart 
                while($row = mysqli_fetch_assoc($all_product)) {
                    $new_sql = "SELECT * FROM products where pId={$row["pId"]};";
                    $new_product = $con->query($new_sql);
                    while($new_row = mysqli_fetch_assoc($new_product)) {
          ?>
          <li class="list-group-item clearfix">
            <img class="img-responsive img-rounded" src="<?php echo $new_row['pAImg'] ?>" alt=""/>
            <h3 class="list-group-item-heading">
              <?php echo $new_row['pName'] ?>
              <span class="label label-danger pull-right bg-success p-1 fs-6" style="font-size:.5em;">DELIVERED</span>
            </h3>
            <p class="list-group-item-text lead">
              Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.
              <br />
              <!-- <a href="#"><small>Details&#8230;</small></a> -->
            </p>
            <div class="btn-toolbar pull-right" role="toolbar" aria-label="">
              <a href="#" class="btn btn-primary">$ <?php echo $new_row['pPrice'] ?></a>
            </div>
          </li>
          <?php
          } } } else {
            ?>
            <div class="card p-5">
              <h3 class="list-group-item-heading">
                Oh No!
              </h3>
              <p class="list-group-item-text lead">
                This user haven't made any purchased yet :(
              </p>
            </div>
            <?php
          } }
          ?>
        </ul>
    </div>
</body>
</html>