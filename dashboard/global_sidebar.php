<?php 


function li_active_check_per_page($mtype,$dropdown){
  if (isset($_REQUEST['manage'])) {

    $req_manage_type = $_REQUEST['manage'];
    $manage_type_exp = explode("-", $req_manage_type );

     if ($dropdown == 1) {
        $sub_menu = "sub-menu";
      }
      else{
        $sub_menu = "";
      }

      if ($mtype == $manage_type_exp[0]) {
        echo "class=\"active\"".$sub_menu;
      }
      else{
        echo "class=\"".$sub_menu."\"";
      }
  }
  else{
    // echo "class=\"active\"";
  }
 



}
?>
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li>
            <div class="logo" style="background:#333;padding: 20px;box-shadow: 0 15px 35px rgba(0,0,0,.9)">
              <img class="" src="../img/logo.png" style=" margin-bottom: 20px; width: 100%; border-radius: 50%; display: block; margin:0 auto;box-shadow: 0 15px 25px rgba(0,0,0,.9)">
            </div>
          </li>
          <li <?php li_active_check_per_page("dashboard",0);?>>
            <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li <?php li_active_check_per_page("account",0);?>>
            <a class="" href="record.php?manage=account">
                          <i class="fa fa-user"></i>
                          <span>Account</span>
                      </a>
          </li>
          <li <?php li_active_check_per_page("student",0);?>>
            <a class="" href="record.php?manage=student">
                          <i class="fa fa-group"></i>
                          <span>Student</span>
                      </a>
          </li>
          <li <?php li_active_check_per_page("teacher",0);?>>
            <a class="" href="record.php?manage=teacher">
                          <i class="fa fa-group"></i>
                          <span>Teacher</span>
                      </a>
          </li>
          <li <?php li_active_check_per_page("section",0);?>>
            <a class="" href="record.php?manage=section">
                          <i class="fa fa-folder-open"></i>
                          <span>Section</span>
                      </a>
          </li>
          <li <?php li_active_check_per_page("ledger",0);?>>
            <a class="" href="record.php?manage=ledger">
                          <i class="fa fa-folder-open"></i>
                          <span>Ledger</span>
                      </a>
          </li>
       <!--    <li <?php li_active_check_per_page("file",1);?>>
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Report</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="record.php?manage=file-1-tb">Trial Balance</a></li>
            </ul>
          </li> -->
        </ul>
        <!-- sidebar menu end-->