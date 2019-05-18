<?php
	include('conn.php');
	
	$title1=$_POST['title1'];
	$title2=$_POST['title2'];
	$text=$_POST['text'];
	$date_published=$_POST['date_published'];
	
	
	mysqli_query($conn,"insert into doc (title1, title2, text, date_published) values ('$title1','$title2', '$text', '$date_published')");
	header('location:addNews.php');

?>