<div class="container">
  <div style="height:20px;"></div>
  <span class="pull-left"><button type="button" class="btn btn-success add" data-toggle="modal" data-target="#ledger_modal"><span class="fa fa-plus"></span> ADD LEDGER</button></span>
  <div style="height:50px;"></div>
  <div class="panel">
    <div class="panel panel-warning">
      <header class="panel-heading">
        <div class="fa fa-group"></div> Ledger Management
      </header>
    </div>
      <div class="panel-body">
        <div class="table-responsive" style="overflow-x: hidden;">
         <table id="ledger_data" class="table table-bordered table-striped">
           <thead>
             <tr>
                <th width="10%">ID</th>
                <th width="10%">Ledger Name</th>
                <th width="10%">Amount</th>
                <th width="10%">Action</th>
             </tr>
           </thead>
         </table>
        </div>
      </div>
  </div>
   <!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledger_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Ledger</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="ledger_form" enctype="multipart/form-data">

          <div class="modal-body">
            <div class="messages"></div>
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="ledger_Name">Ledger Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="ledger_Name" name="ledger_Name" placeholder="Ledger Name">
                          </div>
                      </div>
                  </div>
              </div>    
              <br>
               <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="ledger_Amount">Ledger Amount</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="ledger_Amount" name="ledger_Amount" placeholder="Ledger Amount">
                          </div>
                      </div>
                  </div>
              </div>                 

          </div>
          <div class="modal-footer">
          <input type="hidden" name="ledger_ID" id="ledger_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->



 <!-- add entry modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledger_entry">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Ledger</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="ledger_form" enctype="multipart/form-data">

          <div class="modal-body">
                             

               <table id="ledger_trialbalance_data" class="table table-bordered">
                 <thead>
                   <tr>
                     <th>Entry ID</th>
                     <th>Entry Name</th>
                     <th>Action</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>John</td>
                     <td>Doe</td>
                     <td>action</td>
                   </tr>
                   <tr>
                     <td>John</td>
                     <td>Doe</td>
                     <td>action</td>
                   </tr>
                   <tr>
                     <td>John</td>
                     <td>Doe</td>
                     <td>action</td>
                   </tr>
                 </tbody>
               </table>
             </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add entry modal -->


      <!-- trial balane modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledger_trialbalance">
      <div class="modal-dialog  modal-lg" role="document" style=" width:900px;">
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Ledger Trial Balance</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="trialbalance_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="ledger_Name">Entry</label>
                        <div class="form-group">
                          <div class="form-line">
                               <select class="form-control" name="status" id="status" >
                                <option value="">~~SELECT~~</option>
                                <?php 
                                  $sql = "SELECT * FROM `ledger_entry`";
                                  $result = mysqli_query($con, $sql);

                                  if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {
                                        ?>

                                     <option value="<?php echo $row['entry_ID']?>"><?php echo $row['entry_Name']?></option>
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
                       <label for="ledger_Name">Amount</label>
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                          </div>
                      </div>
                      <label for="ledger_Name">Type</label>
                      <div class="form-group">
                          <div class="form-line">
                              <label class="radio-inline"><input type="radio" name="optradio">Credit</label>
                              <label class="radio-inline"><input type="radio" name="optradio">Debit</label>
                          </div>
                      </div>

          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      
                        <table id="ledger_trialbalance_data" class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Description</th>
                              <th>Debit</th>
                              <th>Credit</th>
                              <th>Balance</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>John</td>
                              <td>Doe</td>
                              <td>john@example.com</td>
                              <td>john@example.com</td>
                              <td>john@example.com</td>
                            </tr>
                            <tr>
                              <td>Mary</td>
                              <td>Moe</td>
                              <td>mary@example.com</td>
                              <td>john@example.com</td>
                              <td>john@example.com</td>
                            </tr>
                            <tr>
                              <td>July</td>
                              <td>Dooley</td>
                              <td>july@example.com</td>
                              <td>john@example.com</td>
                              <td>john@example.com</td>
                            </tr>
                          </tbody>
                        </table>
                     
                  </div>
              </div>                    

          </div>
          <div class="modal-footer">
          <input type="hidden" name="ledger_ID" id="ledger_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /trial balane modal -->