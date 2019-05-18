<?php

// Connection variables
/*$host = "sql103.epizy.com";
$user = "epiz_23425579";
$password = "zvWlkoFOeWy";
$database = "epiz_23425579_rmhs";*/

$host = "localhost:3309"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = "123456"; // MySQL user password (if password is not set for your root user then keep it empty )
$database = "epiz_23425579_rmhs"; // MySQL Database name


// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>