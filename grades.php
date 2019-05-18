<?php 
session_start(); 
$idnumber = $_GET['idnumber'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMHS - Grades</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

      .navbar2 {
        height: 50px;
        background-color: #203864;
      }

      .title1 {
        text-align: center;
        color: #000080;
        font-family: Elephant;
        font-weight: bolder;
        font-size: 40px;
      }

      .table {
        font-family: Calibri Light;
        color: black;
        font-size: 18px;
        width: 70%;
        margin: 20px auto;
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
        <li><a href="login.php?logout='1'" >LOGOUT</a></li>

         <li> <a href="#button" data-toggle="modal"><span class="glyphicon glyphicon-bell"></span> </a> 
         </li>
         
      </ul>
  </div>
</nav><?php include('buttonSubscribe.php'); ?> 


<div style="margin-top: 90px;">
  <nav class="navbar2">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="welcome.php">Profile</a></li>
        <li><a href="grades.php">View Grades</a></li>
      </ul>
      
    </div>
  </nav>
</div>
<?php
include('conn.php');
$edit=mysqli_query($conn,"select * from student where idnumber='".$idnumber."'");
          $erow=mysqli_fetch_array($edit);

          ?>
<div style="margin-top: 30px">
  <p style="font-family: Calibri Light; font-size: 18px; margin-left: 30px;">
    <font style="color: #868B92;">Name:</font> <?php echo $erow['fname']; ?> <?php
    echo $erow['lname']; ?></br>
    <font style="color: #868B92;">ID No.:</font> <?php echo $erow['idnumber']; ?></br>
  </p>
  <h3 class="title1">Grades</h3>
    <p style="text-align: center; font-family: Calibri Light; font-size: 20px; color: #000080;">S.Y. 2018-2019</p>
    <div class="container">
      <div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="text-align: center; vertical-align: text-top;" rowspan="2">Subjects</th>
            <th style="text-align: center;" colspan="4">Periodic Rating</th>
            <th style="text-align: center; vertical-align: text-top;" rowspan="2">Final</br>Rating</th>
            <th style="text-align: center; vertical-align: text-top;" rowspan="2">Remarks</th>
          </tr>
          <tr>
            <th style="text-align: center;">1st</th>
            <th style="text-align: center;">2nd</th>
            <th style="text-align: center;">3rd</th>
            <th style="text-align: center;">4th</th>
          </tr>
        </thead>
        <tbody>
         

                  <?php
        require_once 'dbconfig2.php';
        
       $stmt = $db_con->prepare("SELECT * FROM students_grades WHERE idnumber = '$idnumber' ORDER BY idnumber ASC");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          $count = 0;
            ?>
 <tr>
            <td> <?php echo $row['subject']; ?></td>
            <td><?php echo $row['grade1'];?></td>
            <td><?php echo $row['grade2'];?></td>
            <td><?php echo $row['grade3'];?></td>
            <td><?php echo $row['grade4'];?></td>
            <td><?php

            if($row['grade1'])
             $count = $count + 1;
           if($row['grade2'])
             $count = $count + 1;
           if($row['grade3'])
             $count = $count + 1;
           if($row['grade4'])
             $count = $count + 1;
if($count!=0){
           $finalgrade = ($row['grade1'] + $row['grade2'] + $row['grade3'] + $row['grade4'])/$count;
           echo $finalgrade;}
           else
            $finalgrade = 0;
             ?></td>
            <td>
              
              <?php
if($finalgrade != 0){
              if($finalgrade>=75 && $finalgrade<=100)
                $Remarks = "Passed";
              else if($finalgrade>=74)
                $Remarks = "Failed";

              echo $Remarks;}
              ?>



            </td></tr>
          
<?php }?>
        </tbody>
      </table>
    </div>
  </div>
</div>


</body>
</html>
