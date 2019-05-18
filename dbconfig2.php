<?php

	$db_host = "localhost:3309";
	$db_name = "epiz_23425579_rmhs";
	$db_user = "root";
	$db_pass = "123456";


/**$db_host = "sql103.epizy.com";
	$db_name = "epiz_23425579_rmhs";
	$db_user = "epiz_23425579";
	$db_pass = "zvWlkoFOeWy";
	**/
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>