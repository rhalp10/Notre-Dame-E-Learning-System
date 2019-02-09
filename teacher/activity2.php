<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
?>
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

  <section id="container" class="">
    <?php
        include ("header.php");  
        include ("aside.php")
    ?>

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_document_alt"></i> Activity Report</h3>
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
          <div class="col-lg-12">
            <section class="panel">
              <div class="container">
                <div style="height:20px;"></div>
                  <div class="panel panel-warning">                  
                    <header class="panel-heading">
                      <div class="fa fa-folder-open"></div><a href="activity_report.php"> Activity 1</a> /  <a href="Activity2.php">Activity 2</a> /  <a href="#">Activity 3</a> /  <a href="#">Activity 4</a> /  <a href="#">Activity 5</a> /  <a href="#">Activity 6</a> /  <a href="#">Activity 7</a> /  <a href="#">Activity 8</a> /  <a href="#">Activity 9</a> /  <a href="#">Activity 10</a>
                    </header>                 
                </div>
              </div>

              <div class="container">
                <div class="panel panel-default">
                  <div class="panel-title">
                    <header class="panel-heading">
                      <div style="height:10px;"></div>
                      <span class="fa fa-group"></span> <b>Section : 1-1</b></span>
                       <div class="text-center"> <b>Activity # 2</b></div>
                       <div style="height:30px;"></div>
                    </header>
                  </div>
                
                  <table class="table table-striped table-bordered">
                    <thead>
                      <th>Name</th>
                      <th>Score</th>
                      <th>Date</th>
                    </thead>
                   <tbody>
                      <tr>
                        <td>
                          Tata Opinion Apin 
                        </td>
                        <td>
                          100
                        </td>
                        <td>
                          10/26/2018 
                        </td>
                      </tr>
                       <tr>
                        <td>
                          Biboy Codon Espenida
                        </td>
                        <td>
                          0
                        </td>
                        <td>
                          10/26/2018 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

    


  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

  <!-- jquery ui -->
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>
  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>

  <!-- colorpicker -->

  <!-- bootstrap-wysiwyg -->
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- ck editor -->
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custome script for all page -->
  <script src="js/scripts.js"></script>


</body>

</html>



</body>

</html>
