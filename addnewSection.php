<?php
	include('conn.php');
	
	$Section=$_POST['Section'];
	$Level=$_POST['Level'];
	$Syear=$_POST['Syear'];
	
	
	$English = "English";
    $Mathematics = "Mathematics";
    $Science = "Science";
    $AP = "AP";
    $EPP = "EPP";
    $MAPEH = "MAPEH";
    $Filipino = "Filipino";


	$sql = "insert into section (section, level, syear) values ('$Section','$Level', '$Syear');insert into class (sectionId, section, level, syear, subject) values (@id := @@IDENTITY,'$Section','$Level', '$Syear', '$English');insert into class (sectionId, section, level, syear, subject) values (@id,'$Section','$Level', '$Syear', '$Mathematics');insert into class (sectionId, section, level, syear, subject) values (@id,'$Section','$Level', '$Syear', '$Science');insert into class (sectionId, section, level, syear, subject) values (@id,'$Section','$Level', '$Syear', '$AP');insert into class (sectionId, section, level, syear, subject) values (@id,'$Section','$Level', '$Syear', '$EPP');insert into class (sectionId, section, level, syear, subject) values (@id,'$Section','$Level', '$Syear', '$MAPEH');insert into class (sectionId, section, level, syear, subject) values (@id,'$Section','$Level', '$Syear', '$Filipino');";
	mysqli_multi_query($conn, $sql);
	header('location:section.php');

	/**


	**/

?>