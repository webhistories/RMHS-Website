<?php
/* Database connection start */

$servername = "localhost:3309";
$username = "root";
$password = "123456";
$dbname = "epiz_23425579_rmhs";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>