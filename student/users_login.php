<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'teacher/dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Username or Password');</script>";

}

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

<body style="background-image: url('image/3.jpg');background-size: cover">
      <span class="profile-ava">
           <div align="center"> <img alt="" src="image/logo.jpg" style="width: 120px; box-shadow: 0 15px 25px rgba(0,0,0,.9);margin-top: 10px;margin-bottom: 20px"></div>
          </span>
        <div class="row-fluid">
          <div class="col-lg-6" >
            <section  style="background: rgba(0,0,0,.6);box-shadow: 0 15px 25px rgba(0,0,0,.9); border-radius: 5px;margin-bottom: 20px;margin-top: ">
              <div class="panel-body" style="color: white">
             
                  <div class="panel panel-info">
                    <div class="panel-title text-center">
                      <header class="panel-heading">
                       Vision
                      </header>
                    </div>
                  </div>
                <h5>
                  Notre Dame envinsions itself as an educational institution that is committed in the formation of the 
                </h5>
                <h5>
                  students to become capable, decent, and responsible individuals strength in character and love for 
                </h5>
                <h5>
                  God and love for their fellow men
                </h5>
              </div>
            </section>

            <section style="background: rgba(0,0,0,.6);box-shadow: 0 15px 25px rgba(0,0,0,.9); border-radius: 5px ">
              <div class="panel-body" style="color:white">
              
                  <div class="panel panel-info">
                    <div class="panel-title text-center">
                      <header class="panel-heading">
                       Mission
                      </header>
                    </div>
                  </div>
                <h5>
                  As a learning community, Notre Dame is dedicated to design and operate a system and an 
                </h5>
                <h5>
                  environment that encourages students to:
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
            </section>
          </div>

          <div class="col-lg-6">
            <section ">
                  <div class="panel panel-info">
                    <div class="panel-title text-center">
                      <header class="panel-heading">
                       Welcom Users!
                      </header>
                    </div>
                  </div>
                  <div align="center">
                  <section id="container" class="">
                    <div class="btn-group">
                          <a class="btn btn-success" href=""><div class="fa fa-sign-in"></div> Login</a>
                          <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" ><span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li data-toggle="modal" data-target="#studentModal"><a href="" ><div class="fa fa-user"></div> Student</a></li>
                            <li data-toggle="modal" data-target="#teacherModal"><a href="" ><div class="fa fa-user-md"></div> Teacher</a></li>
                          </ul>
                        </div>
                      </div>
        </ul>
      </div>
    
  </section>
            </section>
          </div>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>
    <script src="js/scripts.js"></script>
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
  <div id="studentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Login Student! Please Enter the Details Below.
                </header>
                <div class="panel-body">
                  <div class="form">
                    <form role="form" class="form-validate form-horizontal" method="post" action="student/dashboard.php">
                      <div class="form-group ">
                        <label for="lrn" class="control-label col-lg-3">LRN:</label>
                        <div class="col-lg-6">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Username" >
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="pwd" class="control-label col-lg-3">Password:</label>
                        <div class="col-lg-6">
                          <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-12">
                           <button type="submit" name="login" class="btn btn-success"><i class="fa fa-sign-in"></i> Sign In</button>
                        </div>
                      </div>
                        <div class="modal-header" align="right">
                          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt "></span> Close</button>
                        </div>
                    </form>
                  </div>  
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div id="teacherModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Login Teacher! Please Enter the Details Below.
                </header>
                <div class="panel-body">
                  <div class="form">
                    <form class="form-validate form-horizontal" method="post" action="">
                      <div class="form-group ">
                        <label for="email" class="control-label col-lg-3">Username:</label>
                        <div class="col-lg-6">
                         
                            <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Username" >
                        </div>
                      </div>
                      <div class="form-group ">
                        <label for="pwd" class="control-label col-lg-3">Password:</label>
                        <div class="col-lg-6">
                          
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-12">
                          <button type="submit" name="login" class="btn btn-success"><i class="fa fa-sign-in"></i> Sign In</button>
                        </div>
                      </div>
                        <div class="modal-header" align="right">
                          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt "></span> Close</button>
                        </div>
                    </form>
                  </div>  
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
