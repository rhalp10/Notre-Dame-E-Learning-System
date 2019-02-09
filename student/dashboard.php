<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>NDTMCP E-Learning System</title>
  <link href="img/logo.jpg" rel="icon" type="image">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>
    <body class="top-navbar-fixed">
      
      <div class="main-wrapper">
        <?php  include ("header.php");?>
        <div class="content-wrapper">
          <div class="content-container">
            <?php include ("aside.php");?>
          </div>
        </div>
      </div>

      <section id="main-content">
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-home"></i> Home</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
                <li><i class="fa fa-calendar"></i>
                  <?php
                  $Today = date('y:m:d');
                  $new = date('l, F d, Y', strtotime($Today));
                  echo $new;
                  ?>
                </li>
              </ol>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-6">
              <section class="panel">
                <div class="container">
                  <div style="height:20px;"></div>
                  <div class="panel panel-warning">
                    <div class="panel-title text-center">
                      <header class="panel-heading">
                       Vision
                      </header>
                    </div>
            
                    <div class="panel-body">
                      <h5>Notre Dame envinsions itself as an educational institution that is committed in the formation of the students to become capable, decent, and responsible individuals strength in character and love for God and love for their fellow men
                      </h5>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="panel panel-warning">
                    <div class="panel-title text-center">
                      <header class="panel-heading">
                       Mission
                      </header>
                    </div>
            
                    <div class="panel-body">
                      <h5>
                     As a learning community, Notre Dame is dedicated to design and operate a system and an environment that encourages students to:
                    </h5>
                    <h5>
                     1. practice good habits that build character and promote integrity, leadership nad relationships
                    </h5>
                    <h5>
                    2. pursue academic excellence
                    </h5>
                    <h5>
                    3. persevere to develop their talent and potentials
                    </h5>
                    <h5>
                    4. promote the dignity of persons, and
                    </h5>
                    <h5>
                    5. participate in the development of the global community.
                    </h5>
                    </div>
                  </div>
                </div>

              </section>
            </div>

          
            <div class="col-lg-6">
              <section class="panel">
                <div class="container">
                  <div style="height:20px;"></div>
                  <div class="panel panel-warning">
                    <div class="panel-title">
                      <header class="panel-heading">
                      
                      </header>
                    </div>

                    <div class="panel-body">
                     <div class="panel-title text-center">
                        <img alt="" src="image/e.jpg">
                      </div>              
                    </div >
                  </div>
                </div>
              </section>
            </div>
          </div>    
        </section>
      </section>

  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>

        
    </body>

</html>