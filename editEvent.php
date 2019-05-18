<?php
	include('conn.php');
	
	$Id=$_GET['id'];
	
	$title=$_POST['title'];
	$status=$_POST['status'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	
	$sql = "update events set title='$title', start_date='$start_date', end_date='$end_date', status = '$status' where id='$Id';";
	mysqli_query($conn, $sql);
		header('location:addEvent.php');

?>