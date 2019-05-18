<?php
 
//MySQLi Procedural
$conn = mysqli_connect('localhost:3309', 'root', '123456', 'epiz_23425579_rmhs');

//$conn = mysqli_connect('sql103.epizy.com', 'epiz_23425579', 'zvWlkoFOeWy', 'epiz_23425579_rmhs');


//$db = mysqli_connect('localhost:3309', 'root', '123456', 'epiz_22620330_saleso');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>