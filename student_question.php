<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>
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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add Question</h3>
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
                   <div class="fa fa-plus"></div> Add Question from <b>Section 1-1</b>
                  </header>

                  <div class="panel-body">
                    <div class="form">
                      <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                        <div class="form-group ">              
                          <div class="text-center">
                            <h3>Question Number 1</h3>
                          </div>
                        </div>

                        <div class="form-group ">
                          <label for="cname" class="control-label col-lg-2">Question Number :</label>
                          <div class="col-lg-1">
                            <input class="form-control" id="ccomment" name="question_number" minlength="5" type="number" >
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-lg-2">Question Text :</label>
                          <div class="col-lg-6">
                            <input class="form-control" type="email" name="question_text"/>
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-lg-2">Choice #1 :</label>
                          <div class="col-lg-6">
                            <input class="form-control " type="text" name="choice1" />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-lg-2">Choice #2 :</label>
                          <div class="col-lg-6">
                            <input class="form-control " type="text" name="choice2" />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-lg-2">Choice #3 :</label>
                          <div class="col-lg-6">
                            <input class="form-control " type="text" name="choice3" />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label class="control-label col-lg-2">Choice #4 :</label>
                          <div class="col-lg-6">
                            <input class="form-control " type="text" name="choice4" />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="curl" class="control-label col-lg-2">Choice #5 :</label>
                          <div class="col-lg-6">
                            <input class="form-control " type="text" name="choice5" />
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cname" class="control-label col-lg-2">Correct Choice Number :</label>
                          <div class="col-lg-1">
                            <input class="form-control" id="ccomment" name="question_number" minlength="5" type="number" >
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit">Add</button>
                            <button class="btn btn-default" type="button">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
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
