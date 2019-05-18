<?php
	include('conn.php');
	
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Email=$_POST['Email'];
	$ContactNumber=$_POST['ContactNumber'];
	$IdNumber=$_POST['IdNumber'];
	$Address=$_POST['Address'];
	$Gender=$_POST['Gender'];
	$Bday=$_POST['Bday'];
	$Type=$_POST['Type'];
	/** <option value="Filipino">Filipino</option>
                        <option value="English">English</option>
                        <option value="Mathematics">Mathematics</option>
                         <option value="Science">Science</option>
                         <option value="AP">Araling Panlipunan</option>
                         <option value="EPP">Edukasyon sa Pantahanan at Pangkabuhayan</option>
                         <option value="MAPEH">MAPEH</option>
                         **/
    $English = "English";
    $Mathematics = "Mathematics";
    $Science = "Science";
    $AP = "AP";
    $EPP = "EPP";
    $MAPEH = "MAPEH";
    $Filipino = "Filipino";
//alert('$Type');
	if($Type == '3' ){
		//alert("HEY");
		$SchoolYear=$_POST['SchoolYear'];
		$Section=$_POST['Section'];
		$Grade=$_POST['Grade'];
//require 'conn.php';	
//$sql1 = "insert into student (fname, lname, email, contactnumber, idnumber, address, gender, bday, schoolyear, section, grade) values ('$FirstName', '$LastName', '$Email', '$ContactNumber', '$IdNumber', '$Address', '$Gender', '$Bday', '$SchoolYear', '$Section', '$Grade')";

		$sql = "insert into users (username, password, fname, lname, type, idnumber) values ('$Username','$Password', '$FirstName', '$LastName', '$Type', '$IdNumber');insert into students_grades (fname, lname, idnumber, section, level, subject, studentId) values ('$FirstName', '$LastName', '$IdNumber','$Section', '$Grade', '$English', @id := @@IDENTITY);insert into students_grades (fname, lname, idnumber, section, level, subject,studentId) values ('$FirstName', '$LastName', '$IdNumber','$Section', '$Grade', '$Mathematics', @id);insert into students_grades (fname, lname, idnumber, section, level, subject,studentId) values ('$FirstName', '$LastName', '$IdNumber','$Section', '$Grade', '$Science', @id);insert into students_grades (fname, lname, idnumber, section, level, subject, studentId) values ('$FirstName', '$LastName', '$IdNumber','$Section', '$Grade', '$AP', @id);insert into students_grades (fname, lname, idnumber, section, level, subject, studentId) values ('$FirstName', '$LastName', '$IdNumber','$Section', '$Grade', '$EPP', @id);insert into students_grades (fname, lname, idnumber, section, level, subject, studentId) values ('$FirstName', '$LastName', '$IdNumber','$Section', '$Grade', '$MAPEH', @id);insert into students_grades (fname, lname, idnumber, section, level, subject, studentId) values ('$FirstName', '$LastName', '$IdNumber','$Section', '$Grade', '$Filipino', @id);insert into student (fname, lname, email, contactnumber, idnumber, address, gender, bday, schoolyear, section, grade, studentId) values ('$FirstName', '$LastName', '$Email', '$ContactNumber', '$IdNumber', '$Address', '$Gender', '$Bday', '$SchoolYear', '$Section', '$Grade', @id);";
	}
	else{
		//alert($"HIE");
		//require 'conn.php';	
	$sql = "insert into users (username, password, fname, lname, type, idnumber) values ('$Username','$Password', '$FirstName', '$LastName', '$Type', '$IdNumber');insert into faculty (fname, lname, email, contactnumber, idnumber, address, gender, bday, facultyId) values ('$FirstName', '$LastName', '$Email', '$ContactNumber', '$IdNumber', '$Address', '$Gender', '$Bday', @id := @@IDENTITY);";


}

	if(mysqli_multi_query($conn, $sql)){
		echo "<script type = 'text/javascript'> alert('Success!'); </script>";

	}
	else {
		echo "<script type = 'text/javascript'> alert('Error!'); </script>";

	}

	
	header('location:welcome.php');

?>