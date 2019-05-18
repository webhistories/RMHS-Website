<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMHS - Class</title>
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

  <div class="title1"> Manage Classes</div>
          
            
        </div>
    </div>
                

      <div class="col-xs-12" style="width:500px;    position: fixed;
    top:10;
    bottom: 100;
    left: 0;
    right: 0;

    margin: auto;">
            <div class="panel panel-primary">
          <div class="panel-heading">
                     
                </div>

    <div class="panel-body">

    <form method = "post" action = "classEdit.php">   
    <div class="row"> 


    <label> &emsp;Class:</label>&emsp;
         <div class="col-md-12">

 <?php


include('conn.php');
                
$query=mysqli_query($conn,"SELECT * FROM section");

?>
<br>
Grade/Level:<select id="Grade" name='Grade' onchange="get_states();">
<option value=''>Select</option>
<option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                         <option value="10">10</option>
</select>
<br>
<div id="get_state">Section:</div> 
<br>
 School Year:<input name="Syear" type="text" id="Syear" placeholder="School Year" required>
 <input type="hidden" name = "username" value= '<?php echo $uname; ?>'/>

 <br><br>
          <button class="btn btn-success" id="classesButton" name="btnclassSubmit" >
                                    <i class="glyphicon glyphicon-search"></i> View Class
                                </button>
    </form>   </div> </form></div></div></div>

<script type="text/javascript">
function get_states() { // Call to ajax function
    var Grade = $('#Grade').val();
    var dataString = "Grade="+Grade;
    $.ajax({
        type: "POST",
        url: "getstates.php", // Name of the php files
        data: dataString,
        success: function(html)
        {
            $("#get_state").html(html);
        }
    });
}
</script>

</body>
<script type="text/javascript">
 $(document).ready(function(){  
      $('#Accounts').DataTable();  
 });  
 </script> 

</html>
