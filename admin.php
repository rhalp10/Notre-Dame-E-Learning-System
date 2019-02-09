<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if(isset($_POST['submit']))
    {
$password=md5($_POST['password']);
$newpassword=md5($_POST['newpassword']);
$username=$_SESSION['alogin'];
    $sql ="SELECT Password FROM admin WHERE UserName=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update admin set Password=:newpassword where UserName=:username";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':username', $username, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";    
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

<body>

    <section id="container" class="">
      <div class="main-wrapper">
        
        <?php  include ("header.php");?>
     
        <div class="content-wrapper">
          <div class="content-container">

            <?php include ("aside.php");?>

          </div>
        </div>
      </div>                  
      <div class="main-page">
        <section id="main-content">
          <section class="wrapper">
             <div class="row">
               <div class="col-lg-12">
 <h6 style="background-image: url('image/adminbanner.png');background-size: cover;height: 100px;border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)"></h6>                <ol class="breadcrumb"  style="border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)">
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
                        <div class="panel panel-warning">
                          <header class="panel-heading">
                            <div class="fa fa-lock"></div> Admin Change Password
                          </header>

                          <?php if($msg){?>
                            <div class="alert alert-success left-icon-alert" role="alert">
                              <strong>Well done!</strong><?php echo htmlentities($msg); ?>
                            </div>
                          <?php } 
                            else if($error){?>
                              <div class="alert alert-danger left-icon-alert" role="alert">
                                  <strong>Oppps!</strong> <?php echo htmlentities($error); ?>
                              </div>
                          <?php } ?>
  
                          <div class="panel-body">
                            <form  name="chngpwd" class="form-validate form-horizontal" method="post" \ onSubmit="return valid();">
                              <div class="form-group">
                                <label for="success" class="control-label col-lg-3">Current Password :</label>
                                <div class="col-lg-6">
                                  <input type="password" name="password" class="form-control" required="required" id="success">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="success" class="control-label col-lg-3">New Password :</label>
                                <div class="col-lg-6">
                                    <input type="password" name="newpassword" required="required" class="form-control" id="success">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="success" class="control-label col-lg-3">Confirm Password :</label>
                                <div class="col-lg-6">
                                  <input type="password" name="confirmpassword" class="form-control" required="required" id="success">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="control-label col-lg-9">
                                  <button type="submit" name="submit" class="btn btn-success "><span class="btn-label btn-label-right"><i class="icon_check_alt2"></i></span> Change</button>
                                </div>
                              </div>
                            </form>
                          </div>

                        </div>
                      </section>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="js/ga.js"></script>
  <script src="js/bootstrap-switch.js"></script>
  <script src="js/jquery.tagsinput.js"></script>
  <script src="js/jquery.hotkeys.js"></script>
  <script src="js/bootstrap-wysiwyg.js"></script>
  <script src="js/bootstrap-wysiwyg-custom.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/bootstrap-colorpicker.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
  <script src="js/form-component.js"></script>
  <script src="js/scripts.js"></script>

</body>

</html>

<?php  } ?>
