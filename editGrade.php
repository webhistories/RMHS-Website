<?php
	include('conn.php');
	
	$Id=$_GET['id'];
	
	$Grade1=$_POST['Grade1'];
	$Grade2=$_POST['Grade2'];
	$Grade3=$_POST['Grade3'];
	$Grade4=$_POST['Grade4'];
	$idnumber=$_POST['IdNumber'];
	$subject=$_POST['Subject'];
	$level=$_POST['Level'];
	$section=$_POST['Section'];
	$username=$_POST['Username'];

			if($Grade1)
             $count = $count + 1;
           if($Grade2)
             $count = $count + 1;
           if($Grade3)
             $count = $count + 1;
           if($Grade4)
             $count = $count + 1;
if($count!=0){
           $ave =($Grade1 + $Grade2 + $Grade3 + $Grade4)/$count;
        $FinalGrade=$ave;  }
           else
            $FinalGrade = 0;

if($FinalGrade>=75 && $FinalGrade<=100)
                $Remarks = "Passed";
              else if($FinalGrade>=74)
                $Remarks = "Failed";

	
	
	mysqli_query($conn,"update students_grades set grade1='$Grade1', grade2='$Grade2', grade3='$Grade3', grade4='$Grade4', finalgrade='$FinalGrade', remarks='$Remarks', fac_username='$username' where id='$Id'");
	//header('location: '. $_SERVER['HTTP_REFERER']);
session_start();

$sub = $subject;
header("location:javascript://history.go(-1)");
//header("location:egradesEDIT.php?flag=1&subject=".$sub."&level=".$level."&section=".$section."&idnumber=".$idnumber);
	exit();


?>