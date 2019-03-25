<?php 
include('../session.php');


  $page = "room";

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
            <div class="col-lg-12">
              <section class="panel">
              <header class="panel-heading tab-bg-primary ">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#announcement">Announcement</a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#quiz_exam">Quiz & Exam</a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="announcement" class="tab-pane active">
                    <div style="height:20px;"></div>
                       <?php 
                       function add_announcement(){
                         ?><span class="pull-left"><button type="button" class="btn btn-success add" data-toggle="modal" data-target="#announcement_modal"><span class="fa fa-plus"></span> ADD ANNOUNCEMENT</button></span><?php
                      }
                       if ($user_level == 3 || $user_level == 2 ) {
                         add_announcement();
                       }
                       ?>
                        <div style="height:50px;"></div>
                     <div class="table-responsive" style="overflow-x: hidden;">
                    <table id="announcement_data" class="table table-bordered table-striped">
                       <thead>
                         <tr>
                            <th width="5%">DATE</th>
                            <th width="10%">ANNOUNCEMENT</th>
                            <th width="5%">Action</th>
                         </tr>
                       </thead>
                     </table>
                    </div>
                  </div>
                  <div id="quiz_exam" class="tab-pane">About</div>
                </div>
              </div>
            </section>
            </div>
          </div>

      </section>

   <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="announcement_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Announcement</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="announcement_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="announcement_title">Title</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="announcement_title" name="announcement_title">
                          </div>
                      </div>
                  </div>
              </div>   
              <br>   
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="announcement_content">Content</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                            <textarea class="form-control" id="announcement_content" name="announcement_content" style="height: 300px;"></textarea>
                          </div>
                      </div>
                  </div>
              </div> 
          </div>
          <div class="modal-footer">
          <input type="hidden" name="ann_ID" id="ann_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->
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
 <script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#announcement_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/announcement/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#announcement_form', function(event){
    event.preventDefault();
    var announcement_title = $('#announcement_title').val();
    var announcement_content = $('#announcement_content').val();
    if(announcement_title != '' && announcement_content != '')
    {
            $.ajax({
              url:"datatable/announcement/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#announcement_form')[0].reset();
                $('#announcement_modal').modal('hide');
                dataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update', function(){
    var ann_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/announcement/fetch_single.php",
      type:"POST",
      data:{ann_ID:ann_ID},
      dataType:"json",
      success:function(data)
      {
        $('#announcement_modal').modal('show');
        $('#announcement_title').val(data.ann_Title);
        $('#announcement_content').val(data.ann_desc);
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Announcement Info");
        $('#ann_ID').val(ann_ID);
      }
    })
  });
    $(document).on('click', '.view', function(){
    var ann_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/announcement/fetch_announmentcontent.php",
      type:"POST",
      data:{ann_ID:ann_ID},
      dataType:"html",
      success:function(data)
      {
        $('#announcement_modal').modal('show');
        $('.modal-body').html(data);
        $("#action").hide();
        $('.modal-title').text("View Announcement Info");
      }
    })
  });

  $(document).on('click', '.add', function(){
        document.getElementById("announcement_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var ann_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/announcement/delete.php",
        type:"POST",
        data:{ann_ID:ann_ID},
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
</body>

</html>
