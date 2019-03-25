<?php 
include('../session.php');
if (empty($_REQUEST['page'])) {
  $page = "";
}
else{
  $page = $_REQUEST['page'];
}
$PageTitle = "Sample Page";
$PageIcon = "";
$user_image = "assets/images/placeholder.jpg";
$user_name = $_SESSION['login_user'];
$user_level = $_SESSION['login_level'];
$user_fName = "NAME NAME";
$user_profile_image = "../img/avatar1_small.jpg";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include ("global_style.php");
?>
</head>
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
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
              <section class="panel" style="border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)">

                <div class="container">
                  <div style="height:20px;"></div>
                  <div class="panel panel-warning">
                    <div class="panel-title text-center">
                      <header class="panel-heading">
                       Vision
                      </header>
                    </div>
            
                    <div class="panel-body">
                      <h5>Notre Dame envinsions itself as an educational institution that is committed in the formation of the students to become capable, decent, and responsible individuals strength in character and love for God and love for their fellow men
                      </h5>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="panel panel-warning">
                    <div class="panel-title text-center">
                      <header class="panel-heading">
                       Mission
                      </header>
                    </div>
            
                    <div class="panel-body">
                      <h5>
                     As a learning community, Notre Dame is dedicated to design and operate a system and an environment that encourages students to:
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
                  </div>
                </div>

              </section>
            </div>

          
            <div class="col-lg-6">
              <section class="panel" style="border-radius: 5px;box-shadow: 0 15px 25px rgba(0,0,0,.9)">
                <div class="container">

                  <div style="height:20px;"></div>
                  <div class="panel panel-warning">
                    <div class="panel-title">
                      <header class="panel-heading">
                      
                      </header>
                    </div>

                <div class="panel-body">
                 <div class="panel-title text-center">
                    <img alt="" src="../img/e.jpg">
              
                </div>

              </div></div></div></section>
            </div>

          </div>

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

</html>
