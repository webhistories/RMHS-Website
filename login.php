<?php include('session.php')
?>

<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: welcome.php");
  }

  //$Register_Username= $_SESSION['Register_Username'];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMHS - Log In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="js/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   <!--
 <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>-->

  <style>
      .navbar .navbar-brand {
        font-family: Elephant;
        padding-left: 20px;
        padding-top: 18px;
        color: #00004d;
        font-size: 18px;
        text-shadow: 2px 2px 20px #00264d;
      }
      
      .navbar {
        background-color: white !important;
        border-bottom-color: #006699;
        height: 80px;
      }

      .logo {
        width: 65px;
        height: 65px;
        float: left;
        margin-top: 6px;
      }

      .navbar .nav li a {
        margin-top: 15px;
        color: #006699;
        font-family: Calibri Light;
      }

      .navbar .nav li a:hover {
        color: #00004d;
        font-weight: bold;
        text-shadow: 1px 1px 4px #cce6ff;
        transition: .1s;
      }

      .navbar .nav li a:active {
        color: #00004d;
        font-weight: bold;
        text-shadow: 1px 1px 4px #cce6ff;
      }

      .navbar .nav .dropdown:hover .dropdown-menu {
        display: block;
        text-align: center;
      }

      .panels {
        width: 30%;
        overflow: hidden;
        background: #203864;
        opacity: .9;
        margin: 20px auto;
      }

      .title1 {
        text-align: center;
        color: #000080;
        font-family: Elephant;
        font-weight: bolder;
        font-size: 40px;
      }

      .loginform {
        text-align: center;
        margin: 20px auto;
        width: 70%;
        color: black;
        border-radius: 5px;
      }

      input {
        padding: 8px;
        font-size: inherit;
        border-radius: 5px;
      }

      input[type="text"] {
        margin-bottom: 10px;
        width: 100%;
        border: 1px solid grey;
      }

      input[type="password"] {
        margin-bottom: 30px;
        width: 100%;
        border: 1px solid grey;
      }

      .btn {
        width: 85%;
        height: 35px;
        border: 1px solid white;
        border-radius: 5px;
        font-family: Calibri(Body);
        font-weight: bold;
        color: white;
        background-color: #12203A;
        box-shadow: 3px 3px 10px #0C1526;
        margin-bottom: 15px;
      }

      .btn:hover {
        border: 1px solid #12203A;
        color: #12203A;
        background-color: white;
        box-shadow: 3px 3px 10px #0C1526;
      }

      .register { 
        text-decoration: underline;
        color: lightgrey;
      }

      .register:hover {
        color: white;
      }

      .navbar-toggle {
        background-color: #203864; 
      }

      .collapse {
        background-color: white;
      }
      </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img class="logo" src="pics/logo.png">
      <p class="navbar-brand">Ramon Magsaysay</br>High School</p>
    </div>
         <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="news.html">NEWS</a></li>
        <li><a href="announcements.php">ANNOUNCEMENTS</a></li>
        <li><a href="#">ALUMNI</a></li>
        <li><a href="#">GALLERY</a></li>
        <li class="dropdown">
          <a href="#" class="data-toggle" data-toggle="dropdown">PUBLICATIONS</a>
          <ul class="dropdown-menu">
            <li><a href="b&w.html">BLUE AND WHITE</a></li>
            <li><a href="silahis.html">ANG SILAHIS</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="data-toggle" data-toggle="dropdown">ABOUT</a>
          <ul class="dropdown-menu">
            <li><a href="#">AWARDS AND RECOGNITION</a></li>
            <li><a href="application_form.pdf">APPLY NOW!</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="#">BRIEF HISTORY</a></li>
          </ul>
        </li>
        <li><a href="faq.html">FAQs</a></li>
        <li><a href="welcome.php" >LOGIN</a></li>

         <li> <a href="#button" data-toggle="modal"><span class="glyphicon glyphicon-bell"></span> </a> 
         </li>
         
      </ul>
  </div>
</nav><?php include('buttonSubscribe.php'); ?> 


<div style="margin-top: 130px">
  <div class="title1">BE ONE OF US!</div>
  <div class="panels">
      <div class="loginform">
      <form name="loginform" align = "center" method="post" action="login.php">
    
         <?php
    if( $posted ) {
      if( $results ==1 ) {
        echo "<script type=text/javascript>swal('Log In Successful!', 'Click OK to continue.', 'success').then(function() {
    window.location = 'welcome.php';
}); </script>";

}
      else if($results != 1)
        {  echo "<script type=text/javascript>swal ( 'Oops' ,  'Incorrect username/password!' ,  'error' ).then(function() {
    window.location = 'login.php';
}); </script>";}
    }

     else  {
       

 }

  ?>
        
          <center>
            <input type = "text" name = "Register_Username" class="form-control" placeholder= "Username" required>
            <br>
            <input type = "password" name = "Password" class="form-control" placeholder = "Password" required>
            <button type="submit"  class="btn btn-info" name="login_user"><b>LOGIN</b></button>
            <br>
         <!--   <p>No Account yet? <a class = register href="register.php">Register Now!</a></p>-->
        </form>
    </div>

</div>

<!--<script src="http://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->

</body>
</html>


