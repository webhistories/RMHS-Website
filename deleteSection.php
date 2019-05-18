<?php
	include('conn.php');
	$Id=$_GET['id'];
	$sql = "delete from section where id='$Id';delete from class where sectionId='$Id'; ";



	mysqli_multi_query($conn, $sql);
	header('location:section.php');

?>