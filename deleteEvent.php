<?php
	include('conn.php');
	$Id=$_GET['id'];
	$sql = "delete from events where id='$Id';";



	mysqli_multi_query($conn, $sql);
	header('location:addEvent.php');

?>