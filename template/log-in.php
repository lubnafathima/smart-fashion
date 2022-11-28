<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in | Smart Fashion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../static/auth.css">
    <link rel="stylesheet" href="../static/auth.css">
    <link class="favicon" rel="shortcut icon" href="https://imgs.search.brave.com/ElF6Rl1nG5Uo7fMOxeZQ1yQA_e0iuclCbXNmuJWcL34/rs:fit:475:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5V/UVpOWFczTkM4OUhl/REZBb2hyNHp3SGFI/WiZwaWQ9QXBp" type="image/x-icon">
</head>
<body>
    <?php
    include 'dbcon.php';
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = " select * from registration where email='$email' ";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);

        if($email=='admin@admin.com' && $password='admin') {
            ?>
            <script>
                location.replace("admin_home.php");
            </script>
            <?php
        } elseif($email_count) {
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];
            $_SESSION['username'] = $email_pass['username'];
            $pass_decode = password_verify($password, $db_pass);
            if($pass_decode) {
                ?>
                <script>
                    location.replace("home.php");
                </script>
                <?php
            } else {
                echo "<script>alert('password Incorrect');</script>";
            }
        } else {
            echo "<script>alert('Invalid Email');</script>";
        }
    }
    ?>
    <div class="signup-form">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            <h2>Log In</h2>
            <p class="hint-text">Sign up with your social media account or email address</p>
            <div class="social-btn text-center">
                <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
                <a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
                <a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
            </div>
            <div class="or-seperator"><b>or</b></div>
            <div class="form-group">
                <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success btn-lg btn-block signup-btn">Log In</button>
            </div>
        </form>
        <div class="text-center">New to site? <a href="sign-up.php">Sign Up</a></div>
    </div>
</body>
</html>