<?php
	include('conn.php');
	
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Type=$_POST['Type'];
	
	
	mysqli_query($conn,"insert into users (username, password, fname, lname, type) values ('$Username','$Password', '$FirstName', '$LastName', '$Type')");
	header('location:welcome.php');

?>