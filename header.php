<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Quiz System</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="css1/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="asset/style.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">


 

</head>

<body>


  <!--Header Part-->
  <header class="">
    <div class="header-all">
      <div class="header-top container-cs">
        <div class="header-top-left">
          <ul>
            <li><i class="fa-solid fa-envelope"></i> <a href="mailto:moontaha@info.com">info@ni_mo.com</a> </li>
            <li><i class="fa-solid fa-location-dot"></i><span> Dhaka, Bangladesh</span> </li>
          </ul>
        </div>
        <div class="header-top-right">
          <ul>
            <li><a href="#">English <i class="fa-solid fa-arrow-down-long"></i></a></li>
            <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href=""><i class="fa-brands fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
      <hr>
      <!-- middle section -->
      <div class="header-middle container-css">
        <div class="header-middle-logo">
          <a href="index.php"><img src="asset/img/logo.png" alt="logo"></a>
        </div>

        <div class="header-middle-menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="Features.php">Features</a></li>


            <?php
            if (!isset($_SESSION["exam_category"])) {
            ?>
              <li class="nav-item"><a href="select_exam.php" class="nav-link">Select Exam</a>
              </li>
              <li class="nav-item"><a href="old_exam_results.php" class="nav-link">Results</a>
              </li>
            <?php

            }
            ?>


            <?php
              if (isset($_SESSION["username"])) {
            ?>

            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a>
            </li>

            <?php

            }
            ?>

          </ul>
        </div>


        <?php
            if (!isset($_SESSION["username"])) {
            ?>
            <div class="header-middle-user">

              <a href="login.php"><i class="fa-solid fa-user"></i>login</a>

            </div>
            <?php

            }
            ?>

        
      </div>


  </header>

  <!-- Mobile Menu end -->



  <?php
            if (isset($_SESSION["username"])) {
            ?>
         
          
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6">welcome, <b><?php echo $_SESSION["username"]; ?></b></div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                                    <ul class="breadcome-menu">
                                        <li><div id="countdowntimer" style="display: block;"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        }
        ?>







  <script type="text/javascript">
    setInterval(function() {
      timer();
    }, 1000);

    function timer() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

          if (xmlhttp.responseText == "00:00:01") {
            window.location = "result.php";
          }

          document.getElementById("countdowntimer").innerHTML = xmlhttp.responseText;

        }
      };
      xmlhttp.open("GET", "forajax/load_timer.php", true);
      xmlhttp.send(null);
    }
  </script>