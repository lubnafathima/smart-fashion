<!-- PHP CODE FOR USER_PROFILE -->

<?php
if(isset($_SESSION['username'])) {
// Function to show user details
    $reg = "SELECT * FROM registration where username='{$_SESSION["username"]}' ";
    $reg_data = $con->query($reg);
    while($reg_row = mysqli_fetch_assoc($reg_data)) {
        $profile_pic = $reg_row['profile'];
        $username = $reg_row['username'];
        $email = $reg_row['email'];
        $number = $reg_row['number'];
        $address = $reg_row['address'];
    }

    // Function to show items count
    $num = "SELECT cId FROM cart where uName='{$_SESSION["username"]}' ORDER BY cId";
    $num_product = $con->query($num);
    $num_row=mysqli_num_rows($num_product);

}

?>