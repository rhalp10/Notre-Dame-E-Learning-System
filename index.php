<?php
session_start();
if(isset($_SESSION['login_user']))
{      
     header('location: dashboard');
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="NDTMCP E-Learning System - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="rhalp10">
  <meta name="keyword" content="NDTMCP E-Learning System, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/logo.png">

  <title>NDTMCP E-Learning System</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style type="text/css">
 .navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .navbar-collapse {
  text-align: center;
}  
    </style>
</head>

<body class="login-img3-body">

  <div class="container">
    <div class="login-form" >
      <div class="login-wrap">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#student" id="student_tab">Student</a></li>
            <li><a data-toggle="tab" href="#teacher" id="teacher_tab">Teacher</a></li>
            <li><a data-toggle="tab" href="#admin" id="admin_tab">Admin</a></li>
          </ul>

          <div class="tab-content">
            <div id="student" class="tab-pane fade in active">
              <form class="form-horizonal"action="data-login.php" method="POST"  role="form">
                  <p class="login-img"><i class="icon_lock_alt"></i></p>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus>
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                  <label class="checkbox">
                          <input type="checkbox" value="remember-me"> Remember me
                          <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                      </label>
                  <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit_student">Login</button>
               
              </form>
            </div>
            <div id="teacher" class="tab-pane fade">
              <form class="form-horizonal" action="data-login.php" method="POST"  role="form">
                  <p class="login-img"><i class="icon_lock_alt"></i></p>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus >
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Password">
                  </div>
                  <label class="checkbox">
                          <input type="checkbox" value="remember-me"> Remember me
                          <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                      </label>
                  <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit_teacher">Login</button>
               
              </form>
            </div>
            <div id="admin" class="tab-pane fade">
              <form class="form-horizonal" action="data-login.php" method="POST"  role="form">
                  <p class="login-img"><i class="icon_lock_alt"></i></p>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" name="username" id="username"   placeholder="Username" autofocus>
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" name="password" id="password"   placeholder="Password">
                  </div>
                  <label class="checkbox">
                          <input type="checkbox" value="remember-me"> Remember me
                          <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                      </label>
                  <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit_admin">Login</button>
               
              </form>
            </div>
          </div>
      </div>
    </div>
<nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">

        <div class="navbar-header">
          <img src="img/logo.png" alt="NDTMCP E-Learning System" style="width: 40px; margin-top: 6px; ">
          <a class="navbar-brand" href="#">NDTMCP E-Learning System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav list-inline">
            <li class="active"><a href="#login-student" data-toggle="tab">Log-in</a></li>
            <li><a href="#" data-toggle="modal" data-target="#objective">Vission</a></li>
            <li><a href="#" data-toggle="modal" data-target="#goal">Mission</a></li>
            <li><a href="#" data-toggle="modal" data-target="#Overview">Overview</a></li>
            <li><a href="#" data-toggle="modal" data-target="#SystemDeveloper">System Developer</a></li>
          </ul>
          </div><!--/.nav-collapse -->
      </div>
      <div style="background-color: #444; color :white;">
      <center>
          NDTMCP E-Learning System<br>
All Rights Reserved<br>Copyright 2019
      </center>
      </div>

    </nav>
  </div>
 <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->

  <script src="js/bootstrap.min.js"></script>
  <script>
    $("#student_tab").click(function(){
      document.body.style.backgroundImage = "url('img/bg-1.jpg')";
      $("login-img3-body").fadeIn(1000);
    });

    $("#teacher_tab").click(function(){
      document.body.style.backgroundImage = "url('img/bg-2.jpg')";
      $("login-img3-body").fadeIn(1000);
    });

    $("#admin_tab").click(function(){
      document.body.style.backgroundImage = "url('img/bg-3.jpg')";
      $("login-img3-body").fadeIn(1000);
    });

</script>

</body>

</html>

