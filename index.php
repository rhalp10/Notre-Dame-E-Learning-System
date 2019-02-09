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
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
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
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>NDTMCP E-Learning System</title>
  <link href="img/logo.jpg" rel="icon" type="image">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/_all-skins.min.css">


</head>

    <body style="background-image: url('image/b.jpg');background-size: cover">  
        <span class="profile-ava">
           <div align="center"> <img alt="" src="image/logo.jpg" style="width: 150px; box-shadow: 0 15px 25px rgba(0,0,0,.9);margin-top: 20px"></div>
          </span>
        <div class="login-box">
          <div class="login-box-body" style="position: absolute; top:53%;left:50%; transform: translate(-50%,-50%);width: 450px; padding: 40px; background: rgba(0,0,0,.6);box-shadow: 0 15px 25px rgba(0,0,0,.9); border-radius: 5px ">
            <p class="login-box-msg" style="color: white; font-size: 20px; font-family: cooper black"><b>Admin Login</b></p>
            <form action="" method="post">
              <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                  <input type="text" name="username" class="form-control" id="inputEmal3" placeholder="Username" >
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
              <br>
              <div class="row">
                <div class="col-md-4 pull-right">
                  <button type="submit" name="login" class="btn btn-success"><b><i class="fa fa-sign-in"></i> Sign In</b></button>
                </div>
              </div>
            </form>
          </div>
        </div>

 <div class="text-center" style="margin-top: 350px;color: black;font-family: time new roman">
        <div class="credits">
         <b>NOTRE DAME OF TRECE MARTIRES CAVITE <i class="fa fa-calendar"></i>
                      <?php
                      $Today = date('y:m:d');
                      $new = date('l, F dS, Y ', strtotime($Today));
                      echo $new;
?>
                 </b> 
        </div>
      </div>
        
    </body>
</html>
