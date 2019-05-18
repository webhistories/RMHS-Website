<?php
	include('conn.php');
	
	$Id=$_GET['id'];
	
	$Section=$_POST['Section'];
	$Syear=$_POST['Syear'];
	$Level=$_POST['Level'];
	
	
	$sql = "update section set section='$Section', level='$Level', syear='$Syear' where id='$Id';update class set section='$Section', level='$Level', syear='$Syear' where id='$Id';update class set section='$Section', level='$Level', syear='$Syear' where id='$Id';update class set section='$Section', level='$Level', syear='$Syear' where id='$Id';";
	mysqli_multi_query($conn, $sql);
	header('location:section.php');

?>