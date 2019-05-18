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
<title>RMHS | EGrades</title> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="css/select2.min.css" rel="stylesheet">
        <link href="css/select2-bootstrap.min.css" rel="stylesheet">
        <link href="css/sweetalert2.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/custom2.css" rel="stylesheet">
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
      /**  $subject = mysqli_real_escape_string($connect, $_POST['subject']);
        $level = mysqli_real_escape_string($connect, $_POST['level']);
        $section = mysqli_real_escape_string($connect, $_POST['section']);
         $username = mysqli_real_escape_string($connect, $_POST['username']);


        $_SESSION['subject'] = $subject;
        $_SESSION['level'] = $level;
         $_SESSION['section'] = $section;
         $_SESSION['username'] = $username;
**/

 $id = mysqli_real_escape_string($connect, $_POST['class']);

 include('conn.php');
  $queryClass=mysqli_query($conn,"SELECT * FROM class WHERE id = '$id'");

  $rowClass=mysqli_fetch_row($queryClass);

 $section = $rowClass[1]; 
 $level = $rowClass[2];
 $fac_username = $rowClass[3];
 $subject = $rowClass[4]; 
  $room = $rowClass[7];
   


       }
       // $_SESSION['fac_id'] = $fac_id;

?>   



       <br><br><br><br>
 <center>
    <h2>
Viewing/Editing of Grades
<!--<?php //echo $section; echo $id;echo $level; ?> -->
</h2></center>
     <?php  echo'       
       
          <div class="content-loader">
        
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <col>
  <colgroup span="2"></colgroup>
  <colgroup span="2"></colgroup>
  <tr>
    <td rowspan="10"></td>
    <th colspan="1" scope="colgroup">Name</th>
    <th colspan="1" scope="colgroup">ID Number</th>
    <th colspan="1" scope="colgroup">Subject</th>
    <th colspan="4" scope="colgroup">Periodic Rating</th>
    <th colspan="1" scope="colgroup">Remarks</th>
    <th colspan="1" scope="colgroup">Final Rating</th>
    <th colspan="1" scope="colgroup">ADD/EDIT</th>
  </tr>
  <tr>
    <th scope="col"></th>
     <th scope="col"></th>
      <th scope="col"></th>
    <th scope="col">1</th>
    <th scope="col">2</th>
    <th scope="col">3</th>
    <th scope="col">4</th>
     <th scope="col"></th>
     <th scope="col"></th>
  </tr>
        
       
     <!--   <th>delete</th>-->
     
        '

        ?>

        <?php
        include('dbconfig2.php');
        
       $stmt = $db_con->prepare("SELECT * FROM students_grades WHERE subject = '$subject' AND level = '$level' AND section = '$section'ORDER BY idnumber ASC");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            ?>

      
         <tr>
    <th scope="row"><?php echo $row['lname']; echo ', '; echo $row['fname']; ?></th>
    <td><?php echo $row['idnumber']; ?></td>
    <td><?php echo $row['subject']; ?></td>
    <td><?php echo $row['grade1']; ?></td>
    <td><?php echo $row['grade2']; ?></td>
    <td><?php echo $row['grade3']; ?></td>
    <td><?php echo $row['grade4'];?></td>
    <td><?php echo $row['remarks'];?></td>
    <td><?php if($row['finalgrade']!=''){echo  number_format($row['finalgrade'],2);
    }?></td>  
      <td align="center">
            <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning">
            <img src="pics/edit.png" width="20px" />
            </a></td>
             <?php include('editbutton.php'); ?>
  </tr>
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
    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#example').DataTable();

    $('#example')
    .removeClass( 'display' )
    .addClass('table table-bordered');
});
</script>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
            $("#mainNav").addClass("hidden");
            $("#subNav").removeClass("hidden");

            $('#classesTable').DataTable({
                "language": {
                  "emptyTable": "No classes available."
                },
                "bDeferRender": true
            });

            $("select").select2();
        });

        $("#year, #term").change(function(){
            var year = $("#year").val(), term = $("#term").val();

            // if(year != null && term != null){
            //     $("#classesButton").attr("disabled", false);
            // }
            // else{
            //     $("#classesButton").attr("disabled", true);
            // }
        })

        $(".clickRow").click(function(){
            var id = this.id;

            $.ajax({
                type: "POST",
                url: "facultyAjax.php",
                data: "classid="+id+"&action=sessionClass",
                success:
                    function(msg){
                        window.location = ("egradesSub.php");
                    }
            })
        });
    </script> 


</body>
</html>