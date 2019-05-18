<?php
	include('conn.php');
	
	$Id=$_GET['id'];
	$IDen=$_POST['Id'];
	
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$Fname=$_POST['Fname'];
	$Lname=$_POST['Lname'];
	$Type=$_POST['Type'];
	$TypeID=$_POST['typeID'];
	

if($TypeID==1){
	$sql = "update users set username='$Username', password='$Password', fname='$Fname', lname='$Lname', type='$Type' where id='$IDen';";
}
elseif($TypeID==2){
	$sql = "update users set username='$Username', password='$Password', fname='$Fname', lname='$Lname', type='$Type' where id='$IDen';update faculty set fname='$Fname', lname='$Lname' where id='$IDen';";
}
elseif($TypeID==3){
	$sql = "update users set username='$Username', password='$Password', fname='$Fname', lname='$Lname', type='$Type' where id='$IDen';update students_grades set fname='$Fname', lname='$Lname' where id='$IDen';update student set fname='$Fname', lname='$Lname' where id='$IDen'";
}

mysqli_multi_query($conn, $sql);

	header('location:welcome.php');

?>