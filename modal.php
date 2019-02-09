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
		<div class="modal-dialog">
	    	<div class="modal-content login-modal">
<div class="modal-header">
	        		
	        		<h4 class="modal-title text-center" id="loginModalLabel">Admin Login</h4>
	      		</div>
	      		<div class="modal-body">
	      			<div class="text-center">
		      			<div role="tabpanel" class="login-tab">
						  	<!-- Nav tabs -->
						  	<ul class="nav nav-tabs" role="tablist">
						    	
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