<?php
	include('conn.php');
	
	$Id=$_GET['id'];
	
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	$Room=$_POST['Room'];
	$Faculty=$_POST['Faculty'];
	
	
	$sql = "update class set timeStart='$TimeStart', timeEnd='$TimeEnd', room='$Room', fac_username = '$Faculty' where id='$Id';";
	mysqli_query($conn, $sql);
	header("location:javascript://history.go(-1)");

?>