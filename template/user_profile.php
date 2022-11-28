<?php include("header.php"); 
include("user_function.php"); 

// When user updates their account details
if(isset($_POST['submit'])) {
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    
    $emailquery = " select * from registration where username='{$_SESSION["username"]}' ";
    $query = mysqli_query($con, $emailquery);
    
    $insertquery = "UPDATE registration SET number='$number', address='$address', password='$pass', cpassword='$cpass' WHERE username='{$_SESSION["username"]}' ";
    $iquery = mysqli_query($con, $insertquery);
    if($iquery) {
        ?>
        <script>
            location.replace("user_profile.php");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("No Connection");
        </script>
        <?php
    }
}
?>

<head>
    <title>Profile | Smart Fashion</title>
    <style>
        <?php include '../static/user_profile.css' ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="image-container px-5">
                                <img src="<?php echo $profile_pic; ?>" style="width: 150px; height: 150px; border-radius: 50%;" class="img-thumbnail" />
                            </div>
                            <div class="userData ml-3">
                                <h2 class="d-block text-uppercase" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php echo $username; ?></a></h2>
                                <h6 class="d-block"><?php echo $num_row; ?> Items in Cart</h6>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs px-5">
                        <li class="active"><a data-toggle="tab" href="#account">My Account</a></li>
                        <li><a data-toggle="tab" href="#orders">My Orders</a></li>
                    </ul>

                    <div class="tab-content p-5">
                        <div id="account" class="tab-pane fade in active">
                            <h3>My Account</h3>
                            <p>View and edit your personal info below.</p>
                            <div class="hr my-5"></div>
                            <div>
                                <p class="fw-lighter fs-2">Account</p>
                                <p>Update your personal information.</p>
                            </div><br>
                            <div>
                                <p class="fw-lighter fs-4">Login Username:</p>
                                <p><?php echo $username; ?></p>
                                <p class="fw-lighter fs-4">Login Email:</p>
                                <p><?php echo $email; ?></p>
                                <span class="text-secondary">Your Login username and email can't be changed</span>
                            </div><br>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="number" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="number" name="number" maxlength="10"  value="<?php echo $number; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea class="form-control" id="address" name="address" style="height: 100px" value="<?php echo $address; ?>"></textarea>
                                </div>
                                <button type="submit" name="submit" id="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                        <div id="orders" class="tab-pane fade">
                            <h3>My Orders</h3>
                            <p>View your order history or check the status of a recent order.</p>
                            <div class="hr m-5"></div>
                            <div class="text-center p-5">
                                <h3>You haven't placed any orders yet.</h3>
                                <a href="home.php" class="text-decoration-none">Start Browsing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>