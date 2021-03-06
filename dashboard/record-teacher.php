<section class="panel">
              <header class="panel-heading tab-bg-primary ">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#teacher_record">Teacher</a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#teacherwithsub_record">Assign Section</a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="teacher_record" class="tab-pane active">
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
                                      <th width="10%">Sex</th>
                                      <th width="10%">Action</th>
                                   </tr>
                                 </thead>
                               </table>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div id="teacherwithsub_record" class="tab-pane">
                    <div id="teacher_record" class="tab-pane active">
                      <div class="container">
                        <div style="height:20px;"></div>
                        <span class="pull-left"><button type="button" class="btn btn-success assign" data-toggle="modal" data-target="#ateacher_modal"><span class="fa fa-plus"></span> ASSIGN TEACHER</button></span>
                        <div style="height:50px;"></div>
                        <div class="panel">
                          <div class="panel panel-warning">
                            <header class="panel-heading">
                              <div class="fa fa-group"></div> Assign Section 
                            </header>
                          </div>
                            <div class="panel-body">
                              <div class="table-responsive" style="overflow-x: hidden;">
                               <table id="teacherwithsub_data" class="table table-bordered table-striped">
                                 <thead>
                                   <tr>
                                      <th width="10%">ID</th>
                                      <th width="10%">Teacher</th>
                                      <th width="10%">Section</th>
                                      <th width="10%">Semester</th>
                                      <th width="10%">Action</th>
                                   </tr>
                                 </thead>
                               </table>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
            </section>


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

     <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ateacher_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Assign Teacher</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="assign_teacher_form" enctype="multipart/form-data">

          <div class="modal-body">
                 
              <div class="row clearfix">
                  <button class="btn btn-info pull-right" data-toggle="modal" data-target="#rteacher_modal">Show Record</button>  
              </div>
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="assign_EmpID">Teacher ID</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="assign_EmpID" name="assign_EmpID" placeholder="Employee ID Number">
                              <input type="hidden" class="form-control" id="assign_rtdID" name="assign_rtdID" placeholder="Employee ID Number">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="assign_section">Section</label>
                  </div>
                   <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="assign_section" id="assign_section" >
                                <option value="">~~SELECT~~</option>
                                <?php 
                                  $sql = "SELECT * FROM `ref_section`";
                                  $result = mysqli_query($con, $sql);

                                  if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                     <option value="<?php echo $row['section_ID']?>"><?php echo $row['section_Name']?></option>
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
                      <label for="assign_semester">Semester</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="assign_semester" id="assign_semester" >
                                <option value="">~~SELECT~~</option>
                                <?php 
                                  $sql = "SELECT * FROM `ref_semester`";
                                  $result = mysqli_query($con, $sql);

                                  if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                         $sem_Start =  date_create($row['sem_Start']);
                                          $sem_End = date_create($row['sem_End']);
                                        ?>

                                     <option value="<?php echo $row['sem_ID']?>"><?php echo date_format($sem_Start,"Y").' - '. date_format($sem_End,"Y")?></option>
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
                               

          </div>
          <div class="modal-footer">
          <input type="hidden" name="roa_ID" id="roa_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" class="operation" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->



    <!-- SHOW RECORD OF TEACHER MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="rteacher_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Teacher</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="assign_teacher_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="table-responsive" style="overflow-x: hidden;">
               <table id="showteacher_data" class="table table-bordered table-striped">
                 <thead>
                   <tr>
                      <th width="10%">ID</th>
                      <th width="10%">Teacher ID</th>
                      <th width="10%">Teacher</th>
                      <th width="10%">Sex</th>  
                   </tr>
                 </thead>
               </table>
              </div>           

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /SHOW RECORD OF TEACHER MODAL -->