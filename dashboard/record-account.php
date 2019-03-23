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
<!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="account_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Account</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="account_form" enctype="multipart/form-data">

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
                                <option value="2">Teacher</option>
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

    