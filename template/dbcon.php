<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "fashion";

$con = mysqli_connect($server,$user,$password,$db);

if(!$con) {
    ?>
    <script>
        alert("No Connection");
    </script>
    <?php
}

?>