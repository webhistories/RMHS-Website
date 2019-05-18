<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMHS - Section</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 

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
        width: 40%;
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
        <li class="active"><a href="welcome.php">Accounts</a></li>
        <li><a href="register.php">Register Accounts</a></li>
         <li><a href="#" data-toggle="dropdown" class="data-toggle">Registry</a>
          <ul class="dropdown-menu">
            <li><a href="section.php">Add Section</a></li>
             <li><a href="class.php">Add Class</a></li>
            <li><a href="addEvent.php">Manage Events</a></li>
           
          </ul></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <!--  <li><a href="login.html">Logout</a></li>-->
      </ul>
    </div>
  </nav>
</div> 

  <div class="panel">
    <div class="well" style="margin:auto; padding:auto; width:100%;">
    <span style="font-size:25px; color:black"><center><strong>Manage Section</strong></center></span> 
        <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
        <div style="height:50px;"></div>
<table class="table table-striped table-bordered table-hover" id="Accounts">
            <thead>
                <th>Section</th>
                <th>Level</th>
                 <th>School Year</th>

                <th> EDIT </th>
              
            </thead>
            <tbody>
            <?php
                include('conn.php');
                
                $query=mysqli_query($conn,"SELECT * FROM section ORDER BY syear");
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><a href="cashier (item).html"><?php echo $row['section']; ?></a></td>
                        <td><?php echo $row['level']; ?></td>
                          <td><?php echo $row['syear']; ?></td>
                        <td>
                            <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
                            <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            <?php include('buttonSection.php'); ?>
                        </td>
                    </tr>
                    <?php
                }
            
            ?>
            </tbody>
        </table>
    </div>
    <?php include('add_modalSection.php');
?>


</body>

<script type="text/javascript">
 $(document).ready(function(){  
      $('#Accounts').DataTable();  
 });  
 </script> 

</html>
