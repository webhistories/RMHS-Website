<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMHS - Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">


    window.onload=function(){
      
var term = 0;
var price = 0;
var additional = 0;
var fix = 0;
var plan = document.getElementById('Grade');
plan.addEventListener('change', enableBilling, false);
var select = document.getElementById('Section');
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
        document.getElementById('Section').disabled=false;
        var planName = plan.options[plan.selectedIndex].text.toLowerCase();
        populateBilling(planName);

}



    }

</script>
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
        width: 40%;
        overflow: hidden;
        background: #203864;
        margin: 20px auto;
      }

      .title1 {
        text-align: center;
        color: #000080;
        font-family: Elephant;
        font-weight: bolder;
        font-size: 40px;
      } 

      select {
        width: 43%;
        height: 30px;
        margin-bottom: 10px;
        border: 1px solid grey;
      }

      form {
        width: 40%;
        margin-left: 13px;
      }

      input {
        padding: 8px;
        font-size: inherit;
      }

      input[type="text"] {
        height: 30px;
        margin-bottom: 10px;
        border: 1px solid grey;
      }

      input[type="password"] {
        height: 30px;
        margin-bottom: 10px;
        border: 1px solid grey;
      }

      input[type="date"] {
        width: 44%;
        height: 30px;
        margin-bottom: 10px;
        border: 1px solid grey;
      }

      input[type="number"] {
        height: 30px;
        margin-bottom: 10px;
        border: 1px solid grey;
      }

      textarea {
        width: 93%;
        height: 70px;
        margin-bottom: 20px;
      }

      .container {
        padding: 30px;
      }

      button {
        margin-left: 32%;
        width: 30%;
        background-color: #00b0f0;
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
              <li><a href="addNews.php">Manage News</a></li>
           
          </ul></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <!--  <li><a href="login.html">Logout</a></li>-->
      </ul>
    </div>
  </nav>
</div> 
<div style="margin-top: 100px">
  <h3 class="title1">Create an Account</h3>
  <div class="panel">
    <div class="container">
      <form method="POST" action="registerUser.php">
        <input name="FirstName" type="text" placeholder="First Name" required>&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="LastName" type="text" placeholder="Last Name" required></br>
        <input name="Password" id="Password" type="password" placeholder="Password" onkeyup='check();' required>&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="CPassword" id="CPassword" type="password" placeholder="Confirm Password" onkeyup='check();' required> <span id='message'></span></br>
        <input name="Username" type="text" id="Username" placeholder="Username" required><div id="status"></div>
        <input name="Email" type="text" placeholder="Email" required>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="Gender" required>
                              <option value="" selected="true" disabled>--Select Gender--</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>     
        </select></br>
        <input name="ContactNumber" type="text" placeholder="Contact No.">&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="Bday" type="date" required>
        <select name="Type" onchange="yesnoCheck(this);" required>
                              <option value="" selected="true" disabled>--Select User Type--</option>
                              <option value="2">Faculty</option>
                              <option value="3">Student</option>
                            
        </select></br>

    <div id="ifYes" style="display: none;">
<!--&nbsp;&nbsp;&nbsp;&nbsp;-->
    <input name="SchoolYear" type="text" style = "width: 190px" placeholder="SchoolYear"><br>

  <!--<select name="Grade"  style = "width: 190px" id="Grade">
                  <option  selected="true" disabled>Choose grade/level</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                         <option value="10">10</option>
                </select> -->
                &nbsp;&nbsp;
            <!--      <select id="Section" style = "width: 190px" name="Section" disabled required>
                  <option value="0">Choose section</option>
                </select>
               
<div class="card-charge-info">
   <span id="payment-total" style="display:none;"></span><span id="payment-rebill" style="display:none;"></span>  <span id="test" style="display:none;"></span>
            </div>-->

            <?php


include('conn.php');
                
$query=mysqli_query($conn,"SELECT * FROM section");

?>
<select id="Grade" name='Grade' onchange="get_states();">
<option value=''>Select</option>
<option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                         <option value="10">10</option>
</select>
<div id="get_state"></div> 
                          


                          
</div>
        <input name="IdNumber" type="text" placeholder="ID No." required></br>
        <textarea name="Address" placeholder="Address"></textarea>
        <button type="submit" id="submit">Submit</button>
      </form>
    </div>
  </div>
</div>

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

<script>

    function yesnoCheck(that) {
        if (that.value == "3") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }

     var check = function() {
      if (document.getElementById('Password').value ==
          document.getElementById('CPassword').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = '✔';
          document.getElementById("submit").disabled = false;
      } else {
            document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = '✘';
          document.getElementById("submit").disabled = true;
      }
  }

  $(document).ready(function(){
// check change event of the text field
$("#Username").keyup(function(){
// get text username text field value
var Username = $("#Username").val();

// check username name only if length is greater than or equal to 3
if(Username.length >= 3)
{
$("#status").html('<img src="pics/loader.gif" /> Checking availability...');
// check username
$.post("username_check.php", {Username: Username}, function(data, status){
$("#status").html(data);


//alert('<?php echo $flag; ?>');
});
}


});

});
</script>

</body>
</html>
