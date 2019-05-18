<?php 
  //  include "facultyDashboard.php";
   // session_start();
    $connect = mysqli_connect('localhost:3309', 'root', '123456', 'epiz_23425579_rmhs');

    //$connect = mysqli_connect('sql103.epizy.com', 'epiz_23425579', 'zvWlkoFOeWy', 'epiz_23425579_rmhs');
 
header('Cache-Control: no cache'); //no cache
session_cache_limiter('private_no_expire'); // works
//session_cache_limiter('public'); // works too
session_start();
 $sub= $_GET['subject'];
$sec =$_GET['section']  ;
 $lev=$_GET['level']  ;
$flag = $_GET['flag']  ;
$idnum = $_GET['idnumber']  ;





?>

<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RMHS | Classes</title> 
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

      .panel {
        width: 100%;
        overflow: hidden;
        background: #203864;
        margin: 20px auto;
        height: 25%;
      }

      .description1 {
        text-align: justify;
        font-family: Calibri;
        font-size: 28px;
        color: black;
      }

      .description2 {
        text-align: justify;
        font-family: Calibri;
        font-size: 28px;
        color: white;
      }

      .title1 {
        text-align: center;
        color: #000080;
        font-family: Georgia Pro Black;
        font-weight: bolder;
        font-size: 40px;
      }

      .title2 {
        color: #cceeff;
        text-align: center;
        font-family: Georgia Pro Black;
        font-weight: bolder;
        font-size: 40px;
      }

      .navbar-toggle {
        background-color: #203864; 
      }

      .collapse {
        background-color: white;
      }
      </style>

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    
    $("#btn-view").hide();
    
    $("#btn-add").click(function(){
        $(".content-loader").fadeOut('slow', function()
        {
            $(".content-loader").fadeIn('slow');
            $(".content-loader").load('add_form.php');
            $("#btn-add").hide();
            $("#btn-view").show();
        });
    });
    
    $("#btn-view").click(function(){
        
        $("body").fadeOut('slow', function()
        {
            $("body").load('egradesEDIT.php');
            $("body").fadeIn('slow');
            window.location.href="egradesEDIT.php";
        });
    });
    
});
</script>

</head>

<body>

    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <img class="logo" src="pics\logo.png">
      <p class="navbar-brand">Ramon Magsaysay</br>High School</p>
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse navHeaderCollapse">
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
            <li><a href="#">LEADERSHIP</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
            <li><a href="#">BRIEF HISTORY</a></li>
          </ul>
        </li>
        <li><a href="faq.html">FAQs</a></li>
        <li><a href="welcome.php">BACK</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--
<br>
<br><br><br><br><br><br><br><br><br><br>
<?php 

//echo $sub; echo 'batadahandahan!'; echo $gr1; echo $gr2; 
?>-->
    <div class="container">



        
<?php 
           // if(isset($_POST['btnclassSubmit']))
    //{  
if($flag == 1){

  $subject =  $sub;
  $section = $sec;
  $level = $lvl;
  $idnumber = $idnum;

      $_SESSION['subject'] = $subject;
        $_SESSION['level'] = $level;
         $_SESSION['section'] = $section;

$hey = "batman";

}
else{
      //  $subject = mysqli_real_escape_string($connect, $_POST['subject']);
        $level = mysqli_real_escape_string($connect, $_POST['Grade']);
        $section = mysqli_real_escape_string($connect, $_POST['Section']);
        $syear = mysqli_real_escape_string($connect, $_POST['Syear']);

         $username = mysqli_real_escape_string($connect, $_POST['username']);


       // $_SESSION['subject'] = $subject;
        $_SESSION['level'] = $level;
         $_SESSION['section'] = $section;
         $_SESSION['syear'] = $syear;
         $_SESSION['username'] = $username;

       }
       // $_SESSION['fac_id'] = $fac_id;

?>   



       <br><br><br><br>
 <center>
    <h2>
Viewing/Editing of Classes
<!--<?php //echo $section; echo $subject;echo $idnumber; ?> -->
</h2></center>


<b>Grade/Level: </b><?php echo $_SESSION['level']; ?> <br>
<b>Section: </b> <?php echo $_SESSION['section']; ?> <br>
<b>School Year:</b> <?php echo $_SESSION['syear']; ?> <br>
     <?php  echo'       
       
          <div class="content-loader">
        
       <table class="table table-striped table-bordered table-hover" id="Accounts">
 <thead>
                <th>Subject</th>
                <th>Time Start</th>
                 <th>Time End</th>
                 <th>Room</th>
                 <th>Faculty</th>

                <th> </th>
              
            </thead>'

        ?>

        <?php
        include('dbconfig2.php');
        
       $stmt = $db_con->prepare("SELECT * FROM class WHERE level = '$level' AND syear = '$syear' AND section = '$section'");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
          $timeStart= 0;
            ?>

      <tbody>
         <tr>
    <td><?php echo $row['subject']; ?></td>
    <td><?php $timeStart = $row['timeStart']; if($timeStart!=''){echo date('h:i A', strtotime($timeStart));}  ?></td>
    <td><?php $timeEnd = $row['timeEnd']; if($timeEnd!=''){echo date('h:i A', strtotime($timeEnd));}  ?></td>
    <td><?php echo $row['room']; ?></td>
     <td><?php 

     $fac = $row['fac_username']; 

 include('conn.php');
  $queryFacID=mysqli_query($conn,"SELECT * FROM faculty WHERE idnumber = '$fac'");

  $rowFacID=mysqli_fetch_row($queryFacID);

  echo $rowFacID[1]; echo " ";echo $rowFacID[8];
     ?></td>
      <td align="center">
            <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning">
            <img src="pics/edit.png" width="20px" />
            </a></td>
             <?php include('editbuttonClass.php'); ?>
  </tr>
  </tbody>
       <?php
        }
        ?>
</table>
            

            <!-- THIS IS TO DELETE RECORDS
            <td align="center"><a id="<?php //echo $row['student_id']; ?>" class="delete-link" href="#" title="Delete">
            <img src="delete.png" width="20px" />
            </a></td> --> 

            


       
       
        

        </div>

    </div>
    

    <br />
    
<?php // }
 header("Refresh:1");?>

          <center><a href="#" class="btn btn-primary"> <span class="glyphicon glyphicon-print"></span> Print Report of Grades </a></center> 
 
<script type="text/javascript">
 $(document).ready(function(){  
      $('#Accounts').DataTable();  
 });  
 </script>    


</body>
</html>