<div class="container">
  <div style="height:20px;"></div>
  <span class="pull-left"><button type="button" class="btn btn-success add" data-toggle="modal" data-target="#section_modal"><span class="fa fa-plus"></span> ADD SECTION</button></span>
  <div style="height:50px;"></div>
  <div class="panel">
    <div class="panel panel-warning">
      <header class="panel-heading">
        <div class="fa fa-group"></div> Section Management
      </header>
    </div>
      <div class="panel-body">
        <div class="table-responsive" style="overflow-x: hidden;">
         <table id="section_data" class="table table-bordered table-striped">
           <thead>
             <tr>
                <th width="10%">ID</th>
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
    <div class="modal fade" tabindex="-1" role="dialog" id="section_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Section</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="section_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="section_Name">Section Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="section_Name" name="section_Name" placeholder="Section Name">
                          </div>
                      </div>
                  </div>
              </div>                    

          </div>
          <div class="modal-footer">
          <input type="hidden" name="section_ID" id="section_ID" />
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
    <div class="modal fade" tabindex="-1" role="dialog" id="section_content_modal">
      <div class="modal-dialog" role="document" style=" width:900px;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span>Section Student</h4>
          </div>
          <div class="modal-body">
            <div id="section_student_content"></div>
          </div>
          <div class="modal-footer">
          <input type="hidden" name="section_ID" id="section_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->