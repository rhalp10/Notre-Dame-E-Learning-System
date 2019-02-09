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
            <h3 class="page-header"><i class="fa fa-file"></i> Add Activity</h3>
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
                   <div class="fa fa-plus"></div> Add Activity from <b>Section 1-1</b>
                  </header>

                  <div class="panel-body">
                    <div class="form">
                      <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                        <div class="form-group ">              
                          <div class="text-center">
                            <h3>Activity Number 1</h3>
                          </div>
                        </div>

                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>ACCOUNTS & DESCRIPTION</th>
                            <th>F</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                01
                              </td>
                              <td>
                                Cash<br>
                                Cars<br>
                                    Gomez Capital

                              </td>
                              <td>
                                101<br>
                                201<br>
                                501
                              </td>
                              <td>
                                50000<br>
                                750000<br>
                               
                              </td>
                              <td>
                                <br>
                                <br>
                                800000
                              </td>
                            </tr>

                            <tr>
                              <td>
                               
                              </td>
                              <td>
                                03
                              </td>
                              <td>
                                Cash<br>
                                Loans Payable

                              </td>
                              <td>
                                101<br>
                                302<br>
                                
                              </td>
                              <td>
                                100000
                                
                               
                              </td>
                              <td>
                                <br>
                                100000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                07
                              </td>
                              <td>
                                Furniture & Fixture<br>
                                Cash
                              </td>
                              <td>
                                203<br>
                                101
                              </td>
                              <td>
                                45000
                              </td>
                              <td>
                                <br>
                                45000
                              </td>
                            </tr>

                            <tr>
                              <td>
                               
                              </td>
                              <td>
                                10
                              </td>
                              <td>
                                Equipment<br>
                                Accounts Payable
                              </td>
                              <td>
                                200<br>
                                301
                              </td>
                              <td>
                                55000
                              </td>
                              <td>
                                <br>
                                55000
                              </td>
                            </tr>

                            <tr>
                              <td>
                               
                              </td>
                              <td>
                                18
                              </td>
                              <td>
                                Gomez Drawing<br>
                                Cash
                              </td>
                              <td>
                                502<br>
                                101
                              </td>
                              <td>
                                5000
                              </td>
                              <td>
                                <br>
                                5000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                20
                              </td>
                              <td>
                                Account Payable<br>
                                Cash
                              </td>
                              <td>
                                301<br>
                                101
                              </td>
                              <td>
                                55000
                              </td>
                              <td>
                                <br>
                                55000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                21
                              </td>
                              <td>
                                Cash<br>
                                Service Income
                              </td>
                              <td>
                                101<br>
                                601
                              </td>
                              <td>
                                15000
                              </td>
                              <td>
                                <br>
                                15000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                22
                              </td>
                              <td>
                                Gas & Oit Expense<br>
                                Repair Expense<br>
                                Cash
                              </td>
                              <td>
                                701<br>
                                703<br>
                                101
                              </td>
                              <td>
                                500<br>
                                1000
                              </td>
                              <td>
                                <br>
                                <br>
                                15000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                24
                              </td>
                              <td>
                                Account Receivable<br>
                                Service Income
                              </td>
                              <td>
                                102<br>
                                601
                              </td>
                              <td>
                                16000
                              </td>
                              <td>
                                <br>
                                16000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                25
                              </td>
                              <td>
                                Utility Expense<br>
                                Cash
                              </td>
                              <td>
                                705<br>
                                101
                              </td>
                              <td>
                                500
                              </td>
                              <td>
                                <br>
                                500
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                27
                              </td>
                              <td>
                                Account Receivable<br>
                                Service Income
                              </td>
                              <td>
                                102<br>
                                601
                              </td>
                              <td>
                                20000
                              </td>
                              <td>
                                <br>
                                20000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                30
                              </td>
                              <td>
                                Cash<br>
                                Account Receivable
                              </td>
                              <td>
                                101<br>
                                102
                              </td>
                              <td>
                                8000
                              </td>
                              <td>
                                <br>
                                8000
                              </td>
                            </tr>

                            <tr>
                              <td>
                                
                              </td>
                              <td>
                                31
                              </td>
                              <td>
                                Rent Expense<br>
                                Service Expense<br>
                                Cash
                              </td>
                              <td>
                                702<br>
                                704<br>
                                101
                              </td>
                              <td>
                                10000<br>
                                9000
                              </td>
                              <td>
                                <br>
                                <br>
                                19000
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" ><br>
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>101 CASH</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                01<br>
                                03<br>
                                07<br>
                                18<br>
                                20<br>
                                21<br>
                                22<br>
                                25<br>
                                30<br>
                                31<br>
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1<br>
                               J1<br>
                               J1<br>
                               J1<br>
                               J1<br>
                               J1<br>
                               J1<br>
                               J1<br>
                               J1<br>
                               J1<br> 
                              </td>
                              <td>
                                50000<br>
                                100000<br>
                                <br>
                                <br>
                                <br>
                                15000<br>
                                <br>
                                <br>
                                8000
                              </td>
                              <td>
                                <br>
                                <br>
                                45000<br>
                                5000<br>
                                55000<br>
                                <br>
                                1500<br>
                                500<br>
                                <br>
                                19000
                              </td>
                              <td style="color: red">
                                50000<br>
                                150000<br>
                                105000<br>
                                100000<br>
                                45000<br>
                                60000<br>
                                58500<br>
                                58000<br>
                                66000<br>
                                47000<br>
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>102 ACCOUNT RECEIVABLE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                24<br>
                                27<br>
                                30
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1<br>
                               J1<br>
                               J1
                              </td>
                              <td>
                                16000<br>
                                20000<br>
                              </td>
                              <td>
                                <br>
                                <br>
                                8000
                              </td>
                              <td style="color: red">
                                16000<br>
                                360000<br>
                                280000
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>201 CARS</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                01<br>
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1<br>
                              </td>
                              <td>
                                750000<br>
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                750000<br>
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>202 EQUIPMENT</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                10<br>
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1
                              </td>
                              <td>
                                55000<br>
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                55000<br>
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>203 FURNITURE FIXTURES</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                07
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1
                              </td>
                              <td>
                                45000
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                45000
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>301 ACCOUNTS PAYABLE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                10<br>
                                20
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1<br>
                               J1
                              </td>
                              <td>
                                <br>
                                55000
                              </td>
                              <td>
                                55000
                              </td>
                              <td style="color: red">
                              </td>
                              <td style="color: red">
                                <br>
                                0
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>302 LOANS PAYABLE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                03
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1
                              </td>
                              
                              <td>
                                100000
                              </td>
                              <td>
                               
                              </td>
                              <td style="color: red">
                                100000
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>501 GOMES CAPITAL</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                01
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1 
                              </td>
                              <td>
                              </td>
                              <td>
                                800000
                              </td>
                              <td style="color: red">
                              </td>
                              <td style="color: red">
                                800000
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>502 GOMES DRAWING</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                18
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1
                              </td>
                              <td>
                                5000
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                5000
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>601 SERVICE INCOME</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                21<br>
                                24<br>
                                27
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1<br>
                               J1<br>
                               J1
                              </td>
                              <td>
                              </td>
                              <td>
                                15000<br>
                                16000<br>
                                20000
                              </td>
                              <td style="color: red">
                              </td>
                              <td style="color: red">
                                15000<br>
                                31000<br>
                                51000
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>701 GAS & OIL EXPENSE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                22
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1 
                              </td>
                              <td>
                                500
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                500
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>702 RENT EXPENSE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                31
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1
                              </td>
                              <td>
                                10000
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                10000
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>703 REPAIR EXPENSE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                22
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1
                              </td>
                              <td>
                                1000
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                1000
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>704 SALARIES EXPENSE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                31
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1 
                              </td>
                              <td>
                                9000
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                9000<br>
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="input-group">
                          <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Enter Entries" >
                        </div>
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>705 UTILITY EXPENSE</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Balance</th>
                            <th>Balance</th>
                          </thead>
                          <thead>
                            <th>DATE</th>
                            <th></th>
                            <th>DESCRIPTION</th>
                            <th>REF</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                March
                              </td>
                              <td>
                                25
                              </td>
                              <td>
                                
                              </td>
                              <td>
                               J1
                              </td>
                              <td>
                                500
                              </td>
                              <td>
                              </td>
                              <td style="color: red">
                                500
                              </td>
                              <td style="color: red">

                              </td>
                            </tr>
                          </tbody>
                        </table>

                       
                        <br>
                        <table class="table table-striped table-bordered table-hover">
                          <thead>
                            <header class="panel-heading">
                              <center><b>TRIAL BALANCE AS OF MARCH</b></center>
                            </header>
                            
                          </thead>
                          <thead>
                            <th>ACCOUNT & DESCRIPTION</th>
                            <th>DEBIT</th>
                            <th>CREDIT</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                CASH<br>
                                ACCOUNTS RECEIVABLE<br>
                                CARS<br>
                                EQUIPMENT<br>
                                FURNITURE & FIXTURE<br>
                                ACCOUNTS PAYABLE<br>
                                LOANS PAYABLE<br>
                                GOMEZ CAPITAL<br>
                                GOMEZ DRAWING<br>
                                SERVICE INCOME<br>
                                GAS & OIL EXPENSE<br>
                                RENT EXPENSE<br>
                                REPAIR EXPENSE<br>
                                SALARIES EXPENSE<br>
                                UTILITY EXPENSE<br>
                                TOTAL
                              </td>
                              <td>
                                47000<br>
                                28000<br>
                                750000<br>
                                55000<br>
                                45000<br>
                                0<br>
                                <br>
                                <br>
                                5000<br>
                                <br>
                                500<br>
                                10000<br>
                                1000<br>
                                9000<br>
                                500<br>
                                <div style="color: red">951000</div>
                              </td>
                              <td>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                100000<br>
                                800000<br>
                                <br>
                                51000<br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div style="color: red">951000</div>
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="row">
                          <div class="col-md-4 pull-left">
                            <button type="submit" name="login" class="btn btn-success"> Sumbit</button>
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
