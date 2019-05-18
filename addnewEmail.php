<?php
	include('conn.php');
	
	$email=$_POST['Email'];


	mysqli_query($conn,"insert into email (email) values ('$email')");


	header('location:index.html');


?>