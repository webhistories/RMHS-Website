<?php
	include('conn.php');
	
	$Id=$_GET['id'];
	
	$title1=$_POST['title1'];
	$title2=$_POST['title2'];
	$date_published=$_POST['date_published'];
	$text=$_POST['text'];
	
	$sql = "update doc set title1='$title1', title2='$title2', text='$text', date_published = '$date_published' where id='$Id';";
	mysqli_query($conn, $sql);
		header('location:addNews.php');

?>