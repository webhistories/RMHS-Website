<?php
	include('conn.php');
	$Id=$_GET['id'];
	$sql = "delete from doc where id='$Id';";



	mysqli_multi_query($conn, $sql);
	header('location:addNews.php');

?>