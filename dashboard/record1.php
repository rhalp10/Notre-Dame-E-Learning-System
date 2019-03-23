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
$user_name = "User Sample";
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
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>

      <div class="container">
  <div style="height:20px;"></div>
  <span class="pull-left"><button type="button" class="btn btn-success add" data-toggle="modal" data-target="#account_modal"><span class="fa fa-plus"></span> ADD ACCOUNT</button></span>
  <div style="height:50px;"></div>
  <div class="panel">
    <div class="panel panel-warning">
      <header class="panel-heading">
        <div class="fa fa-group"></div> Account Management
      </header>
    </div>
      <div class="panel-body">
        <div class="table-responsive" style="overflow-x: hidden;">
         <table id="account_data" class="table table-bordered table-striped">
           <thead>
             <tr>
                <th width="10%">ID</th>
                <th width="10%">Level</th>
                <th width="10%">Username</th>
                <th width="10%">Status</th>
                <th width="10%">Register</th>
                <th width="10%">Action</th>
             </tr>
           </thead>
         </table>
        </div>
      </div>
  </div>


<?php 

  $query .= "SELECT * ";
$query .= "FROM record_student_details  rsd LEFT JOIN ref_sex rs ON rsd.sex_ID  = rs.sex_ID";
if(isset($_POST["search"]["value"]))
{
  $query .= 'WHERE rsd.rsd_StudNum LIKE "%'.$_POST["search"]["value"].'%" ';
  $query .= 'OR rsd.rsd_FName LIKE "%'.$_POST["search"]["value"].'%" ';
  $query .= 'OR rsd.rsd_MName LIKE "%'.$_POST["search"]["value"].'%" ';
  $query .= 'OR rsd.rsd_LName LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
  $query .= ' ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
  $query .= ' ORDER BY rsd.rsd_ID DESC ';
}
if($_POST["length"] != -1)
{
  $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
echo $query;
?>










<!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="account_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Account</h4>
          </div>
          
          <form class="form-horizontal" action="php_action/create.php" method="POST" id="account_form" enctype="multipart/form-data">

          <div class="modal-body">
            <div class="messages"></div>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="username">Username</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="username" name="username" placeholder="username">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="level">Level</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="level" id="level" >
                                <option value="">~~SELECT~~</option>
                                <option value="1">Student</option>
                                <option value="2">Researcher</option>
                                <option value="3">Admin</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="email">Email</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="pass">Password</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="con_pass">Retype</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="password" class="form-control" id="con_pass" name="con_pass" placeholder="Confirm Your Password">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="status">Active</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="status" id="status" >
                                <option value="">~~SELECT~~</option>
                                <option value="1">Activate</option>
                                <option value="0">Deactivate</option>
                                <option value="2">Ban</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>                    

          </div>
          <div class="modal-footer">
          <input type="hidden" name="user_ID" id="user_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->

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
 <script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#account_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/account/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#account_form', function(event){
    event.preventDefault();
    var username = $('#username').val();
    var level = $('#level').val();
    var email = $('#email').val();
    var pass = $('#pass').val();
    var con_pass = $('#con_pass').val();
    var status = $('#status').val();
    if(username != '' && level != '' && email != '' && pass != '' && con_pass != '' && status != '')
    {


      if (pass == con_pass) 
        {

          if (pass.length > 6) {
            $.ajax({
              url:"datatable/account/insert.php",
              method:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#account_form')[0].reset();
                $('#account_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
          } 
          else {
            alert("Minumum Password Length is 6 Character");
          }
        } 
        else {
          alert("Password not match");
        }
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update', function(){
    var user_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/account/fetch_single.php",
      method:"POST",
      data:{user_ID:user_ID},
      dataType:"json",
      success:function(data)
      {
        $('#account_modal').modal('show');
        $("#username").prop("disabled", true);
        $('#username').val(data.user_Name);
        $('#email').val(data.user_Email);
        $('#pass').val(data.user_Pass);
        $('#con_pass').val(data.user_Pass);
        $('#level').val(data.level_ID).change();
        $('#status').val(data.user_status).change();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Account Info");
        $('#user_ID').val(user_ID);
      }
    })
  });
  $(document).on('click', '.add', function(){
        $("#username").prop("disabled", false);
        document.getElementById("account_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var user_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/account/delete.php",
        method:"POST",
        data:{user_ID:user_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
  
});
</script>
</html>
