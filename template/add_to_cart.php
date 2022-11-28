<?php 
include("header.php"); 

$pId = $_POST['pId'];
$uName = $_POST['uName'];
$pQty = $_POST['pQty'];

$sql = "INSERT INTO cart (pId, uName, pQty) VALUES ('$pId', '$uName', '$pQty');";

mysqli_query($con, $sql);

header("Location: product.php?pId={$pId}");
?>