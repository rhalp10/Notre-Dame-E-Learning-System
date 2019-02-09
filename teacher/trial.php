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
<style>
body {
  font: 11px/1.4em Verdana, Arial, Helvetica, sans-serif;
}
h1 {
  color: #99CC00;
  margin: 0px 0px 5px;
  padding: 0px 0px 3px;
  font: bold 18px Verdana, Arial, Helvetica, sans-serif;
  border-bottom: 1px dashed #E6E8ED;
}
#container1 {
    background-color: transparent;
  background-image:url(tablet.jpg);
  background-size:650px 750px;
  background-repeat:no-repeat;
  background-position:center;
}

.centered-form {
    margin-top: 121px;
    margin-bottom: 120px;
}

.centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 1px 4px 9px;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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

    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header" style="color: black"><i class="icon_document_alt" style="color: black"></i> File Uploaded</h3>
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
                

                      <div class="modal-body">
              <div class="text-center">
                <div role="tabpanel" class="login-tab" >
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist" >
                  <li role="presentation" class="active"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Sign In</a></li>
                  <li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
                  <li role="presentation"><a id="forgetpass-taba" href="#forget_password" aria-controls="forget_password" role="tab" data-toggle="tab">Forget Password</a></li>
                </ul>
            
                <!-- Tab panes -->
              <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active text-center" id="home">
                    &nbsp;&nbsp;
                    <span id="login_fail" class="response_error" style="display: none;">Loggin failed, please try again.</span>
                    <div class="clearfix"></div>
                    <form>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" id="login_username" placeholder="Enter Your Email..">
                        </div>
                        <span class="help-block has-error" id="email-error"></span>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <span class="help-block has-error" id="password-error"></span>
                      </div>
                      <button type="button" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In....">Login</button>
                      <div class="clearfix"></div>
                      <div class="login-modal-footer">
                        <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-8">
                          <i class="fa fa-lock"></i>
                          <a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>
                        
                        </div>
                        
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <i class="fa fa-check"></i>
                          <a href="javascript:;" class="signup-tab"> Sign Up </a>
                        </div>
                      </div>
                      </div>
                  </form>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="profile">
                      &nbsp;&nbsp;
                      <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
                    <div class="clearfix"></div>
                     <form role="form">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number.." required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="country" id="country" class="form-control input-sm" placeholder="Country.." required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address.." required>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="city" id="city" class="form-control input-sm" placeholder="City.." required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="zip" id="zip" class="form-control input-sm" placeholder="Zip.." required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="bio" id="bio" class="form-control input-sm" placeholder="About Yourself.." required>
                            </div>
                            
                            <div class="form-group">
                                <input type="email" name="email-1" id="last_name" class="form-control input-sm" placeholder="Your Email.." required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email-2" id="email" class="form-control input-sm" placeholder="Repeat Email Address" required>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </div>
                      <button type="button" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering....">Register</button>
                    <div class="clearfix"></div>
                    <div class="login-modal-footer">
                        <div class="row">
                        <div class="col-xs-8 col-sm-8 col-md-8">
                          <i class="fa fa-lock"></i>
                          <a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>
                        
                        </div>
                        
                        <div class="col-xs-4 col-sm-4 col-md-4">
                          <i class="fa fa-check"></i>
                          <a href="javascript:;" class="signin-tab"> Sign In </a>
                        </div>
                      </div>
                      </div>
                  </form>
                  </div>
                  <div role="tabpanel" class="tab-pane text-center" id="forget_password">
                    &nbsp;&nbsp;
                      <span id="reset_fail" class="response_error" style="display: none;"></span>
                    <div class="clearfix"></div>
                    <form>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" class="form-control" id="femail" placeholder="Email">
                        </div>
                        <span class="help-block has-error" data-error='0' id="femail-error"></span>
                      </div>
                      
                      <button type="button" id="reset_btn" class="btn btn-block bt-login" data-loading-text="Please wait....">Reset Password</button>
                    <div class="clearfix"></div>
                    <div class="login-modal-footer">
                        <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <i class="fa fa-lock"></i>
                          <a href="javascript:;" class="signin-tab"> Sign In </a>
                        
                        </div>
                        
                        <div class="col-xs-6 col-sm-6 col-md-6">
                          <i class="fa fa-check"></i>
                          <a href="javascript:;" class="signup-tab"> Sign Up </a>
                        </div>
                      </div>
                      </div>
                  </form>
                  </div>
                </div>
            </div>
                
              </div>
            </div>
            
        </div>
     </div>
  </div>
  <!-- - Login Model Ends Here -->


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script>
      $(document).ready(function(){
        $(document).on('click','.signup-tab',function(e){
           e.preventDefault();
           $('#signup-taba').tab('show');
        }); 
  
        $(document).on('click','.signin-tab',function(e){
           e.preventDefault();
           $('#signin-taba').tab('show');
        });
        
        $(document).on('click','.forgetpass-tab',function(e){
           e.preventDefault();
           $('#forgetpass-taba').tab('show');
        });
      }); 
    </script>
                        
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

  </body>
</html>
