<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: welcome.php");
  }

  //$Register_Username= $_SESSION['Register_Username'];
  $uname = $_SESSION['username'];
  $idnum = $_SESSION['idnumber'];
?>
<!DOCTYPE html>
<html>
   <head>
        <title> Welcome </title>
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 



  <script type="text/javascript">


    window.onload=function(){
      
var term = 0;
var price = 0;
var additional = 0;
var fix = 0;
var plan = document.getElementById('level');
plan.addEventListener('change', enableBilling, false);
var select = document.getElementById('section');
select.addEventListener('change', updatePrice, false);

function populateBilling(planName) {
    var options = {
        7: { 
            "Option" : ["Charles", "Christopher"],
            "Value" : ["Charles", "Christopher"]
        },
        8: { 
            "Option" : ["Lorenzo Ruiz", "Lawrence"],
            "Value" : ["Lorenzo Ruiz", "Lawrence"]
        },
        9: { 
            "Option" : ["Placid", "Peregrine"],
            "Value" : ["Placid", "Peregrine"]
        },
         10: { 
            "Option" : ["Rafael", "Rita"],
            "Value" : ["Rafael", "Rita"]
        }
    }

    //RESET BILLING PERIOD OPTIONS
    select.options.length = 1;
    document.getElementById('payment-total').innerText = 0 + additional;
    document.getElementById('payment-rebill').innerText = 0 + additional;
    var data = options[planName];
    if (data) {
        for (var i = 0; i < data.Option.length; i++){
            var temp = document.createElement('option');
            temp.value = data.Value[i];
            temp.text = data.Option[i];
            select.appendChild(temp);
        }
    }
}
    
function enableBilling(e) {
        document.getElementById('section').disabled=false;
        var planName = plan.options[plan.selectedIndex].text.toLowerCase();
        populateBilling(planName);

}



    }

</script>

    </head>
<style>
body {
  
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
    margin: 2rem;
}

li{
    list-style-type: none;
}

th {
  background-color: white;
}
tr:nth-child(odd) {
  background-color: lightgrey;
}
th, td {
  padding: 0.5rem;
}
td:hover {
  background-color: lightgreen;
}

.paginate_button {
  border-radius: 0 !important;
}
   .title1 {
        text-align: center;
        color: #000080;
        font-family: Elephant;
        font-weight: bolder;
        font-size: 40px;
      }

.bg{
    background-color:#eeeeee;
}

.bg li a{
    padding: 6px 8px 6px 4px;
    text-decoration:none;
    font-size: 15px;
    font-weight:bold;
    color: black;
    background-color:#fff;
    display: block;
    border:1px;
}

.bg a:hover {
    color: white;
    background-color:rgba(0,51,0,0.80);
}

.logout{
    background-color:red;
    color:white;
    font-weight:bold;
}

.add{
    background-color:skyblue;
    color:black;
    font-weight:bold;
}

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

      .panel {
       
        overflow: hidden;
        background: #deebf7;
        float: left;
        margin: 20px auto;
        border-radius: 0px;
        border: 1px solid lightgrey;
      }

            .panel1 {
        width: 28%;
        height: 420px;
        overflow: hidden;
        background: #deebf7;
        float: left;
        margin: 20px auto;
        border-radius: 0px;
        border: 1px solid lightgrey;
      }

      .user1 {
        margin-top: 30px;
        margin-left: 65px;
      }

      .name1 {
        font-family: Calibri Light;
        text-align: center;
        margin-top: 10px;
      }

      .title11 {
        font-family: Calibri Light; 
        font-weight: bold;
        font-size: 25px; 
        text-shadow: 1px 1px 4px darkgrey;
      }

      hr {
        border-top: 1px solid lightblue;
      }

      .info1 {
        margin-top: 20px;
        font-family: Calibri Light;
        font-size: 23px;
      }
          .navbar2 {
        height: 50px;
        background-color: #203864;
      }



@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

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

    <!-- logged in user information -->

<?php 

if($_SESSION['type']==1){ ?>
<div class = "container-fluid">
    <div class = "row">
        <div class = "col-sm-12">

         
                <?php  if (isset($_SESSION['username'])) : ?>
     <br> <br><br><h1>Welcome <strong><?php echo $_SESSION['fname']; ?>!</strong></h1>
        <?php endif ?>
              
            
        </div>
    </div>
    <br>
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
           <li><a href="addNews.php">Manage News</a></li>
          </ul></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <!--  <li><a href="login.html">Logout</a></li>-->
      </ul>
    </div>
  </nav>
</div> 
        <div class="well" style="margin:auto; padding:auto; width:100%;">
    <span style="font-size:25px; color:black"><center><strong>Manage Accounts</strong></center></span> 
        <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
        <div style="height:50px;"></div>
        <table class="table table-striped table-bordered table-hover" id="Accounts">
            <thead>
                <th>Username</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Type</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
                include('conn.php');
                
                $query=mysqli_query($conn,"SELECT * FROM users");
                while($row=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><a href="cashier (item).html"><?php echo $row['username']; ?></a></td>
                        <td><?php echo $row['fname']; ?></td>
                         <td><?php echo $row['lname']; ?></td>
                        <td><?php if($row['type'] == 2) echo "Faculty";
                                    else if($row['type']==3) echo "Student"; 
                                     else if($row['type']==1) echo "Admin"; 
                                    else echo "";


                                    $_SESSION['typeID']= $row['type'];?></td>
                        <td>
                            <a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
                            <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            <?php include('button.php'); ?>
                        </td>
                    </tr>
                    <?php
                }
            
            ?>
            </tbody>
        </table>
    </div>
    <?php include('add_modal.php');


    }

    else if($_SESSION['type']==2){

    ?>


            <div class="container-fluid">
  <div class = "row">
        <div class = "col-sm-12">

         
                <?php  if (isset($_SESSION['username'])) : ?>
     <br> <br><br>You are now logged in as: <strong><?php echo $_SESSION['fname']; echo " "; echo $_SESSION['lname']; ?><br> </strong>User Type: <strong>Faculty</strong><br><div class="title1"> Viewing/Editing of Grades</div>
        <?php endif ?>
              
            
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

    <form method = "post" action = "egradesEDIT.php">   
    <div class="row"> 

    <label> &emsp;Class:</label>&emsp;
         <div class="col-md-12">

  <!--<select id="level" name="level" class="form-control" required>
                  <option  selected="true" disabled>Choose grade/level</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                         <option value="10">10</option>
                </select>-->
<?php
         include('conn.php');
       $queryClass=mysqli_query($conn,"SELECT * FROM class WHERE fac_username = $idnum");
       echo "<select name='class' class='form-control' required>";
       echo "<option value=''>Select</option>"; 
       while($rowClass=mysqli_fetch_array($queryClass)){
          echo "<option value='" . $rowClass['id'] . "'>" . $rowClass['subject'] ." - ".$rowClass['section']." (".date('h:i A', strtotime($rowClass['timeStart']))."-".date('h:i A', strtotime($rowClass['timeEnd'])).") ".$rowClass['room'] ."</option>";}
       echo "</select>";


       ?>
           </div>
           <br><br><br>
             
       <input type = "hidden" name = "Username" value="<?php echo $_SESSION['username']; ?>"></input>
 <input type="hidden" name = "username" value= '<?php echo $uname; ?>'/>
       &emsp;   <button class="btn btn-success" id="classesButton" name="btnclassSubmit" >
                                    <i class="glyphicon glyphicon-search"></i> View Students
                                </button>
    </form>   </div> </form></div></div></div>


<?php } 


else if ($_SESSION['type']==3){ 

         include('conn.php');
           $here=mysqli_query($conn,"select * from users where username='".$uname."'");
          $frow=mysqli_fetch_array($here);

          $idnumber = $frow['idnumber'];
          $edit=mysqli_query($conn,"select * from student where idnumber='".$idnumber."'");
          $erow=mysqli_fetch_array($edit);
  
  ?>

<div style="margin-top: 90px;">
  <nav class="navbar2">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="active"><a href="welcome.php">Profile</a></li>
        <li><a href="grades.php?idnumber=<?php echo $idnumber; ?>">View Grades</a></li>
      </ul>
    </div>
  </nav>
</div>

<div class="container1">
  <div class="panel1">
    <img class="user1" src="pics\user.png">
    <div class="name1">
      <font style="font-weight: bold; font-size: 25px; text-shadow: 1px 1px 4px darkgrey;"><?php echo $erow['lname']; ?>, <?php echo $erow['fname']; ?></font></br>
      <font style="font-size: 20px;"><?php echo $uname; ?></font>
    </div>
  </div>
  <div style="margin-top: 20px; margin-left: 33%;">
    <p class="title11">PERSONAL INFORMATION</p>
    <hr>
    <p class="info1"><font style="color: #868B92;">Birthday:</font> <?php echo $erow['bday']; ?></br>
        <font style="color: #868B92;">Address:</font> <?php echo $erow['address']; ?></br>
        <font style="color: #868B92;">Year Level:</font> Grade <?php echo $erow['grade']; ?>
    </p>
    </br>

    <p class="title11">CONTACT INFORMATION</p>
    <hr>
    <p class="info1"><font style="color: #868B92;">Email:</font> <?php echo $erow['email']; ?></br>
        <font style="color: #868B92;">Phone:</font> <?php echo $erow['contactnumber']; ?>
    </p>

  </div>
</div>


<?php } ?>


</body>
</html>
<script type="text/javascript">
 $(document).ready(function(){  
      $('#Accounts').DataTable();  
 });  
 </script> 