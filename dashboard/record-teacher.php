<div class="container">
  <div style="height:20px;"></div>
  <span class="pull-left"><button type="button" class="btn btn-success add" data-toggle="modal" data-target="#teacher_modal"><span class="fa fa-plus"></span> ADD TEACHER</button></span>
  <div style="height:50px;"></div>
  <div class="panel">
    <div class="panel panel-warning">
      <header class="panel-heading">
        <div class="fa fa-group"></div> Teacher Management
      </header>
    </div>
      <div class="panel-body">
        <div class="table-responsive" style="overflow-x: hidden;">
         <table id="teacher_data" class="table table-bordered table-striped">
           <thead>
             <tr>
                <th width="10%">ID</th>
                <th width="10%">Teacher ID</th>
                <th width="10%">Teacher</th>
                <th width="10%">Section</th>
                <th width="10%">Action</th>
             </tr>
           </thead>
         </table>
        </div>
      </div>
  </div>
</div>

  <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="teacher_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Teacher</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="teacher_form" enctype="multipart/form-data">

          <div class="modal-body">
            <div class="messages"></div>
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="EmpID">Teacher ID</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="EmpID" name="EmpID" placeholder="Employee ID Number">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="fname">First Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="mname">Middle Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="lname">Last Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="suffix">Suffix</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="suffix" id="suffix" >
                                <option value="">~~SELECT~~</option>
                                <?php 
                                  $sql = "SELECT * FROM `ref_suffixname`";
                                  $result = mysqli_query($con, $sql);

                                  if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                     <option value="<?php echo $row['suffix_ID']?>"><?php echo $row['suffix']?></option>
                                        <?php
                                      }
                                  } else {
                                     ?>
                                     <option value="">Error</option>
                                     <?php
                                  }
                                ?>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>  
              <br>
               <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="sex">Sex</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="sex" id="sex" >
                                <option value="">~~SELECT~~</option>
                                <?php 
                                  $sql = "SELECT * FROM `ref_sex`";
                                  $result = mysqli_query($con, $sql);

                                  if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                     <option value="<?php echo $row['sex_ID']?>"><?php echo $row['sex_Name']?></option>
                                        <?php
                                      }
                                  } else {
                                     ?>
                                     <option value="">Error</option>
                                     <?php
                                  }
                                ?>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>  
                               

          </div>
          <div class="modal-footer">
          <input type="hidden" name="rtd_ID" id="rtd_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->