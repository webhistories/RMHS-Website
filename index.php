<!DOCTYPE html>
<html lang="en">
<head>
  <title>RMHS - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="js/sweetalert.min.js"></script>
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

      * {
        margin: 0px;
        padding: 0px;
      }

      .main-banner {
        margin: 0 auto;
        width:900px;
        height: 400px;
        background-color: #203864;
        overflow: hidden;
        position: relative;
      }

      .main-banner .imgban {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0px;
        transition: all ease-in-out 500ms;
        -webkit-transition: all ease-in-out 500ms;
        -moz-transition: all ease-in-out 500ms;
        -o-transition: all ease-in-out 500ms;
      }

      .main-banner #imgban3 {
        background-image: url(pics/Picture3.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }

      .main-banner #imgban2 {
        background-image: url(pics/Picture2.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }

      .main-banner #imgban1 {
        background-image: url(pics/Picture1.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
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


  <div class="panel">
      <div class="main-banner" id="main-banner">
        <div class="imgban" id="imgban3">
        </div>
        <div class="imgban" id="imgban2">
        </div>
        <div class="imgban" id="imgban1">
        </div>
    </div>
  </div>

  <script>
        var bannerStatus = 1;
        var bannerTimer = 4000;

        window.onload = function(){
          bannerLoop();
        }

        var startBannerLoop = setInterval(function() {
          bannerLoop();
        }, bannerTimer);

        /*document.getElementById("main-banner").onmouseenter = function() {
          clearInterval(startBannerLoop);
        }

        document.getElementById("main-banner").onmouseleave = function() {
          startBannerLoop = setInterval(function() {
              bannerLoop();
          }, bannerTimer);
        }*/

        function bannerLoop() {
          if (bannerStatus === 1) {
            document.getElementById("imgban2").style.opacity = "0";
            setTimeout(function() {
              document.getElementById("imgban1").style.right = "0px";
              document.getElementById("imgban1").style.zIndex = "1000";
              document.getElementById("imgban2").style.right = "-900px";
              document.getElementById("imgban2").style.zIndex = "1500px";
              document.getElementById("imgban3").style.right = "900px";
              document.getElementById("imgban3").style.zIndex = "500";}, 500);

            setTimeout(function() {
              document.getElementById("imgban2").style.opacity = "1";
            }, 1000);
            
            bannerStatus = 2;
          }

          else if (bannerStatus === 2) {
            document.getElementById("imgban3").style.opacity = "0";
            setTimeout(function() {
              document.getElementById("imgban2").style.right = "0px";
              document.getElementById("imgban2").style.zIndex = "1000"
              document.getElementById("imgban3").style.right = "-900px";
              document.getElementById("imgban3").style.zIndex = "1500px";
              document.getElementById("imgban1").style.right = "900px";
              document.getElementById("imgban1").style.zIndex = "500";}, 500);

            setTimeout(function() {
              document.getElementById("imgban3").style.opacity = "1";
            }, 1000);
            
            bannerStatus = 3;
          }

          else if (bannerStatus === 3) {
            document.getElementById("imgban1").style.opacity = "0";
            setTimeout(function() {
              document.getElementById("imgban3").style.right = "0px";
              document.getElementById("imgban3").style.zIndex = "1000";
              document.getElementById("imgban1").style.right = "-900px";
              document.getElementById("imgban1").style.zIndex = "1500px";
              document.getElementById("imgban2").style.right = "900px";
              document.getElementById("imgban2").style.zIndex = "500";}, 500);

            setTimeout(function() {
              document.getElementById("imgban1").style.opacity = "1";
            }, 1000);
              
            bannerStatus = 1;
          }
        }
      </script>
  
<div style="margin-top:50px">
  <div class="container">
    <h3 class="title1">Overview</h3>
    <p class="description1">Ramon Magsaysay High School (RMHS) is a public high school in Manila, Philippines. It was founded as the Governor Forbes annex of Victorino Mapa High School in 1952. In 1959, it was renamed Ramon Magsaysay High School, in honor of former Philippine President Ramon Magsaysay.</br></br>Principals:</br>Mrs. Maria M. Ocampo (1959-1972)</br>Dr. William L. Estrada (1972-1976)</br>Mr. Mateo A. Angeles (1976-1987)</br>Mrs. Esperanza B. Bautista (1987-1995)</br>Ms. Elena R. Ruiz (1996-1997)</br>Mr. Leon R. San Miguel (1997-1999)</br>Dr. Cristina C. Reyes (1999-2011)</br>Mrs. Alma C. Tadina (2011-2017)</br>Mr. Gene T. Pangilinan (2017-Present)
    </p>
  </div>

  </br>
  <div class="panel">
    <div class="container">
      <h3 class="title2">RMHS Vision</h3>
      <p class="description2">Ramon Magsaysay High School is an institution of learning that forever upholds the culture of pride and excellence of its empowered teachers and self-motivated students who will eventually translate their roles as effective members of society; imbued with social and moral responsibility;  ever ready to face the challenges of the globalization.
      </p>
    </br>
    </div>
  </div>

  <div class="container">
    <h3 class="title1">RMHS Mission</h3>
    <p class="description1">Anchored in a firm belief in God, Ramon Magsaysay High school commits  itself to  continue discover, harness and hone the students’ potentials;  inculcate in them the Filipino values and attitudes; and equip them with life-long learning necessary to become productive, competitive, and useful members of society.
    </p>
  </div>

  </br>
  <div class="panel">
    <div class="container">
      <h3 class="title2">DepEd Vision</h3>
      <p class="description2">We dream of Filipinos who passionately love their country and whose values and competencies enable them to realize their full potential and contribute meaningfully to building the nation.</br></br> As a learner-centered public institution, the Department of Education continuously improves itself to better serve its stakeholders.
      </p>
    </br>
    </div>
  </div>

  <div class="container">
    <h3 class="title1">DepEd Mission</h3>
    <p class="description1">To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:</br></br>Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.</br>Teachers facilitate learning and constantly nurture every learner. Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.</br>Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.
    </p>
  </div>

  </br>
  <div class="panel">
    <div class="container">
      <h3 class="title2">Core Values</h3>
      <p class="description2" style="margin-left: 43%;">Maka-Diyos</br>Maka-tao</br>Makakalikasan</br>Makabansa
      </p>
    </br>
    </div>
  </div>

  <div class="container">
    <h3 class="title1">RMHS Mandate</h3>
    <p class="description1">The Department of Education was established through the Education Decree of 1863 as the Superior Commission of Primary Instruction under a Chairman. The Education agency underwent many reorganization efforts in the 20th century in order to better define its purpose vis a vis the changing administrations and charters. The present day Department of Education was eventually mandated through Republic Act 9155, otherwise known as the Governance of Basic Education act of 2001 which establishes the mandate of this agency.</br></br>The Department of Education (DepEd) formulates, implements, and coordinates policies, plans, programs and projects in the areas of formal and non-formal basic education. It supervises all elementary and secondary education institutions, including alternative learning systems, both public and private; and provides for the establishment and maintenance of a complete, adequate, and integrated system of basic education relevant to the goals of national development.
    </p>
  </div>

</div>

</body>
</html>
