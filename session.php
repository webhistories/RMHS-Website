<?php
session_start();

// initializing variables

$posted = false;
$Register_Fname    = "";
$Register_Lname    = "";
$Register_Pass    = "";
$Register_Type   = "";
$Register_Username ="";
$errors = array(); 

// connect to the database

$db = mysqli_connect('localhost:3309', 'root', '123456', 'epiz_23425579_rmhs');
//$db = mysqli_connect('sql103.epizy.com', 'epiz_23425579', 'zvWlkoFOeWy', 'epiz_23425579_rmhs');

// REGISTER USER
if (isset($_POST['reg_user'])) {
 
  // receive all input values from the form
  $Register_Username = mysqli_real_escape_string($db, $_POST['Register_Username']);
  $Register_Pass = mysqli_real_escape_string($db, $_POST['Register_Pass']);
  $Register_Fname = mysqli_real_escape_string($db, $_POST['Register_Fname']);
  $Register_Lname = mysqli_real_escape_string($db, $_POST['Register_Lname']);
  $Register_Type = mysqli_real_escape_string($db, $_POST['Register_Type']);
 

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username ='$Register_Username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Register_Username'] === $Register_Username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
 
  	$query = "INSERT INTO users (username, password, fname, lname, type) 
  			  VALUES('$Register_Username', '$Register_Pass','$Register_Fname', '$Register_Lname', '$Register_Type')";
  	$r1 = mysqli_query($db, $query);
     $posted = true;
  
    $_SESSION['posted'] = "Submitted successfuly!";
    $_SESSION['Register_Fname'] = $Register_Fname; 
    $_SESSION['Register_Username'] = $Register_Username;
  	$_SESSION['success'] = "You are now logged in";

   /** echo '<script type="text/javascript">';
    echo 'swal("Congrats!", ", Your account is created!", "success")';
    echo '</script>';**/
  	//header('location: index.php');

  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $Register_Username = mysqli_real_escape_string($db, $_POST['Register_Username']);
  $Password = mysqli_real_escape_string($db, $_POST['Password']);

  if (count($errors) == 0) {
    $query = "SELECT * FROM users WHERE username='$Register_Username' AND password='$Password'";
    $results = mysqli_query($db, $query);

    while($row = mysqli_fetch_array($results)){
          $Register_Fname =  $row['fname'];
           $Register_Lname =  $row['lname'];
          $Register_Type = $row['type'];
          $idnumber = $row['idnumber'];

        }
        
    if (mysqli_num_rows($results) == 1) {
      
      $_SESSION['username'] = $Register_Username;
      $_SESSION['fname'] = $Register_Fname;
      $_SESSION['lname'] = $Register_Lname;
       $_SESSION['type'] = $Register_Type;
        $_SESSION['idnumber'] = $idnumber;

      $_SESSION['success'] = "You are now logged in";
       $posted = true;
     //echo "<script type='text/javascript'>swal('Congrats!', ', Your account is created! Redirecting to log in page...', 'success'); window.location='index.php'</script> ";
      // First, echo headers
//header("location: index.php");

// Then send any other HTML-output
//echo "<script>";
//echo " alert('Log In successful!');      
//        window.location.href='index.php';
//</script>";
    }else {
      $posted= true;
      $results = 0;
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>