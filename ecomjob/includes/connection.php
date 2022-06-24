<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "job_ecommerce_management";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
       die("Connection failed: " . mysqli_connect_error());
    }
?>