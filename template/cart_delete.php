<!-- To delete item from cart -->
<?php 
session_start();
require_once 'dbcon.php';

$pId = $_GET['pId']; 
$username = $_GET['username']; 
$sql = "DELETE FROM cart WHERE pId={$pId} AND uName='{$username}' ";
$del = $con->query($sql);

header("Location: cart.php");


// echo $_SESSION["username"];
// echo $pId;
?>