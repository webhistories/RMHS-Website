<?php
	include('conn.php');
	$Id=$_GET['id'];
	$usertype = $_GET['typeID'];
	//mysqli_query($conn,"delete from users where id='$Id'");


	if($usertype==2){
	$sql = "delete from users where id='$Id';delete from faculty where facultyId='$Id'; ";

	}
	elseif($usertype==3){
	$sql = "delete from users where id='$Id';delete from student where studentId='$Id';delete from students_grades where studentId='$Id';";

	}
	else{
		$sql = "delete from users where id='$Id';";
	}



	mysqli_multi_query($conn, $sql);
	header('location:welcome.php');

?>