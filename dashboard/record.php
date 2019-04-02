<?php 
include('../session.php');
if (empty($_REQUEST['manage'])) {
  $manage = "";
}
else{
  $manage = $_REQUEST['manage'];
}
$manageTitle = "Sample Page";
$manageIcon = "";
$user_image = "assets/images/placeholder.jpg";
$user_name = $_SESSION['login_user'];
$user_level = $_SESSION['login_level'];
$user_fName = "NAME NAME";
$user_profile_image = "../img/avatar1_small.jpg";

?>
<!DOCTYPE html>
<html lang="en">

<?php 
include ("global_style.php");
?>

<body>
  <!-- container section start -->
  <section id="container" class="">

      <?php 
      include('global_topnav.php');
      include("global_sidebar.php");
      ?>
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <!-- <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3> -->
            <h6 style="background-image: url('../img/adminbanner.png');background-size: cover;height: 100px;border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)"></h6>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index">Home</a></li>
              <?php 
              if ($manage == "account") {
               ?>
                <li><i class="fa fa-laptop"></i>Account Management</li>
               <?php
              }
              if ($manage == "student") {
               ?>
                <li><i class="fa fa-laptop"></i>Student Management</li>
               <?php
              }
               if ($manage == "teacher") {
               ?>
                <li><i class="fa fa-laptop"></i>Teacher Management</li>
               <?php
              }
               if ($manage == "semester") {
               ?>
                <li><i class="fa fa-laptop"></i>Semester Management</li>
               <?php
              }
               if ($manage == "section") {
               ?>
                <li><i class="fa fa-laptop"></i>Section Management</li>
               <?php
              }
               if ($manage == "ledger") {
               ?>
                <li><i class="fa fa-laptop"></i>Ledger Management</li>
               <?php
              }
              ?>
              
            </ol>
          </div>
        </div>

        <?php 
            if (file_exists("record-".$manage.".php")) {
              include ("record-".$manage.".php");
            }
            else{
              if (empty($manage)) {
                include ("record-content.php");
              }
              else{
                header ("location: 404.php");
              }
              
            }
          ?>

      </section>
      <div class="text-center">
        NDTMCP E-Learning System &copy; 2019
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

 <?php 
  include("global_script.php");
 ?>
</body>
<?php 
   if (file_exists("record-".$manage.".php")) {
     include ("record-".$manage."-script.php");
   }
   else{
      header ("location: 404.php");
   }
 ?>
 
</html>
