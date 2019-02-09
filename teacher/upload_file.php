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
            <h3 class="page-header"><i class="fa fa-upload"></i> Upload File</h3>
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
                    <div class="fa fa-upload"></div> Upload File
                  </header>
                  <div class="panel-body">

                    <form class="form-validate form-horizontal" method="POST" enctype="multipart/form-data" action="save_file.php">
                      <div class="form-group">
                        <label for="success" class="control-label col-lg-3">File :</label>
                        <div class="col-lg-3">
                        <input type="file" name="file" class="form-control"/>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="success" class="control-label col-lg-3">Name :</label>
                        <div class="col-lg-6">
                          <input type="text" name="name" class="form-control" required="required" id="success" placeholder="Example: Lecture 1">                            
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="success" class="control-label col-lg-3">Description :</label>
                        <div class="col-lg-6">
                          <input type="text" name="description" required="required" class="form-control" id="success" placeholder="Description of the file">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="success" class="control-label col-lg-3">Choose Section :</label>
                        <div class="col-lg-6">                     
                          <input type="radio" name="section" value=""  required /> 1-1
                          <input type="radio" name="section" value=""  required /> 1-2
                          <input type="radio" name="section" value=""  required /> 1-3
                          <input type="radio" name="section" value=""  required /> 1-4
                          <input type="radio" name="section" value=""  required /> 1-5 
                        </div>  
                      </div> 
                      <div class="form-group">
                        <label for="success" class="control-label col-lg-3"></label>
                        <div class="col-lg-6">                         
                          <div class="controls">
                            <button class="btn btn-success"><span class="fa fa-upload"></span> Upload</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="container">
                <div class="panel panel-warning">
                  <header class="panel-heading">
                    <div class="fa fa-folder-open"></div> File
                  </header>
                  
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead class="">
                        <tr>
                          <th>File Name</th>
                          <th>Description</th>
                          <th>Section</th>
                          <th>Date Upload</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Lecture 1 
                          </td>
                          <td>
                            Trial Balance
                          </td>
                          <td>
                            Section 1-1<br>
                            Section 1-2<br>
                            Section 1-3
                          </td>
                          <td>
                            10/26/2018 
                          </td>
                           <td>
                              <a href="#update<?php echo $row['teacher_id']; ?>" data-toggle="modal" class="btn btn-success"><span class="fa fa-download"></span> Download</a> ||
                              <a href="#delete<?php echo $row['teacher_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="icon_trash_alt"></span> Delete</a>
                             
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> 
            </section>             
          </div>
        </div>
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



</body>

</html>
