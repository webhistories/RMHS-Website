<?php
	include('conn.php');
	
	$title=$_POST['title'];
	$status=$_POST['status'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	


	/**$sql = "insert into events (title, start_date, end_date, status) values ('$title','$start_date', '$end_date', '$status');";
	mysqli_query($conn, $sql);**/



	mysqli_query($conn,"insert into events (title, start_date, end_date, status) values ('$title','$start_date', '$end_date', '$status')");


	header('location:addEvent.php');


?>