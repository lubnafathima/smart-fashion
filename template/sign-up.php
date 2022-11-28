<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up | Smart Fashion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="../static/auth.css">
    <link class="favicon" rel="shortcut icon" href="https://imgs.search.brave.com/ElF6Rl1nG5Uo7fMOxeZQ1yQA_e0iuclCbXNmuJWcL34/rs:fit:475:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5V/UVpOWFczTkM4OUhl/REZBb2hyNHp3SGFI/WiZwaWQ9QXBp" type="image/x-icon">
    <?php

    include 'dbcon.php';

    if(isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = " select * from registration where email='$email' ";
        $query = mysqli_query($con, $emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount > 0) {
            echo "<script>alert('email already exists');</script>";
        } else {
            if($password === $cpassword) {
                $insertquery = "insert into registration(username, email, password, cpassword) values ('$username', '$email', '$pass', '$cpass')";
                $iquery = mysqli_query($con, $insertquery);
                if($iquery) {
                    ?>
                    <script>
                        location.replace("log-in.php");
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("No Connection");
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                    alert("Password not matching");
                </script>
                <?php
            }
        }

    }
    ?>
</head>
<body>
    <div class="signup-form">
        <form action="" method="post">
            <h2>Create an Account</h2>
            <p class="hint-text">Sign up with your social media account or email address</p>
            <div class="social-btn text-center">
                <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
                <a href="#" class="btn btn-info btn-lg"><i class="fa fa-twitter"></i> Twitter</a>
                <a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
            </div>
            <div class="or-seperator"><b>or</b></div>
            <div class="form-group">
                <input type="text" name="username" class="form-control input-lg" name="username" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
            </div>  
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success btn-lg btn-block signup-btn">Sign Up</button>
            </div>
        </form>
        <div class="text-center">Already have an account? <a href="log-in.php">Login here</a></div>
    </div>
</body>
</html>