<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
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

<body >

  <section id="container" class="">
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
<h6 style="background-image: url('image/adminbanner.png');background-size: cover;height: 100px;border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)"></h6>
            <ol class="breadcrumb" style="border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)">
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
            <section class="panel" style="border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)">
              <div class="container">
                <div style="height:20px;"></div>
                <span class="pull-left"><a href="#student" data-toggle="modal" class="btn btn-info"><span class="fa fa-plus"></span> Add Student</a></span>
                <div style="height:50px;"></div>
                  <div class="panel panel-warning">
                    <header class="panel-heading">
                      <div class="fa fa-group"></div> Student Information
                    </header>

                    <table class="table table-striped table-bordered table-hover">
                      <thead>
                        <th>Full Name</th>
                        <th>LRN</th>
                        <th>Password</th>
                        <th>Section</th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                      <?php
                        include('conn.php');
                        
                        $query=mysqli_query($conn,"select * from `student`");
                        while($row=mysqli_fetch_array($query)){
                          ?>
                          <tr>
                            <td><?php echo $row['firstname']; ?> <?php echo $row['middle_name']; ?> <?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><div class="fa fa-folder-open"></div> <?php echo $row['section']; ?></td>
                            <td>
                              <a href="#edit<?php echo $row['student_id']; ?>" data-toggle="modal" class="btn btn-success"><span class="fa fa-edit"></span> Update</a> || 
                              <a href="#del<?php echo $row['student_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="icon_trash_alt"></span> Delete</a>
                              <?php include('button.php'); ?>
                            </td>
                          </tr>
                          <?php
                        }?>
                      </tbody>
                    </table>
                  </div>

                  <?php include('add_modal.php'); ?>

                </div>
              </section>
            </div>
          </div>
        </section>
      </section>
    </section>

  
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
<?php } ?>
