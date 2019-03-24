
   
    <section class="panel">
              <header class="panel-heading tab-bg-primary ">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a data-toggle="tab" href="#entry">Entry</a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#ledger">Ledger</a>
                  </li>
                  <li class="">
                    <a data-toggle="tab" href="#trialbalance">Trialbalance</a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <div id="entry" class="tab-pane active">
                      <!-- TABLE OF Entry -->
                     <div style="height:20px;"></div>
                        <span class="pull-left"><button type="button" class="btn btn-success add" data-toggle="modal" data-target="#ledgerentry_modal"><span class="fa fa-plus"></span> ADD ENTRY</button></span>
                        <div style="height:50px;"></div>

                        <div class="panel">
                          <div class="panel panel-warning">
                            <header class="panel-heading">
                              <div class="fa fa-group"></div> Entry Management
                            </header>
                          </div>
                            <div class="panel-body">
                              <div class="table-responsive" style="overflow-x: hidden;">
                               <table id="entry_data" class="table table-bordered table-striped" style="">
                                 <thead>
                                   <tr>
                                      <th >ID</th>
                                      <th >Entry Name</th>
                                      <th >F</th>
                                      <th >Action</th>
                                   </tr>
                                 </thead>
                               </table>
                              </div>
                            </div>
                        </div>
                     <!-- END TABLE OF Entry -->
                  </div>
                  <div id="ledger" class="tab-pane">
            <!-- TABLE OF LEDGER -->
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
          <!-- END TABLE OF LEDGER -->

                  </div>
                  <div id="trialbalance" class="tab-pane">
                     <!-- TABLE OF TRIALBALANCE -->

            <div style="height:20px;"></div>
              <span class="pull-left"><button type="button" class="btn btn-success add" data-toggle="modal" data-target="#ledger_modal"><span class="fa fa-plus"></span> ADD TRIALBALANCE</button></span>
              <div style="height:50px;"></div>
              <div class="panel">
                <div class="panel panel-warning">
                  <header class="panel-heading">
                    <div class="fa fa-group"></div> Trialbalance Management
                  </header>
                </div>
                  <div class="panel-body">
                    <div class="table-responsive" style="overflow-x: hidden;">
                     <table id="trialbalance_data" class="table table-bordered table-striped" >
                       <thead>
                         <tr>
                            <th width="10%">ID</th>
                            <th width="10%">Trialbalance Name</th>
                            <th width="10%">Date</th>
                            <th width="10%">Action</th>
                         </tr>
                       </thead>
                     </table>
                    </div>
                  </div>
              </div>
            <!-- END TABLE OF TRIALBALANCE -->

                  </div>
                </div>
              </div>
            </section>


   <!-- LEDGER MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledger_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Ledger</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="ledger_form" enctype="multipart/form-data">

          <div class="modal-body">
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
    <!-- /LEDGER MODAL -->
   <!-- LEDGER SUMMARY MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledgersummary_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Ledger</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          <input type="hidden" name="ledger_ID" id="ledger_ID" />
          <input type="hidden" name="operation" id="operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /LEDGER SUMMARY MODAL -->

   <!-- ENTRY MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledgerentry_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Add Entry</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="ledgerentry_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="ledgerentry_Name">Entry Name</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="ledgerentry_Name" name="ledgerentry_Name" placeholder="Entry Name">
                          </div>
                      </div>
                  </div>
              </div>    
              <br>
               <div class="row clearfix">
                  <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                      <label for="ledgerentry_f">F</label>
                  </div>
                  <div class="col-lg-9 col-md-9 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="ledgerentry_f" name="ledgerentry_f" placeholder="Entry F">
                          </div>
                      </div>
                  </div>
              </div>                 

          </div>
          <div class="modal-footer">
          <input type="hidden" name="entry_ID" id="entry_ID" />
          <input type="hidden" name="operation" id="entry_operation" value="Add" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- / ENTRY MODAL -->


   <!-- JOURNAL MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledger_journal_modal">
      <div class="modal-dialog  modal-lg" role="document" style=" width:900px;">
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> JOURNAL</h4>
          </div>
          
          <form action="" method="POST"  class="form-horizontal" id="journal_form" enctype="multipart/form-data">

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

                                     <option value="<?php echo $row['entry_ID']?>"><?php echo $row['entry_Name']?> (<?php echo $row['entry_F']?>)</option>
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
                              <input type="text" class="form-control" id="lname" name="lname" placeholder="Amount">
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
                              <th>DATE</th>
                              <th>ACCOUNT & DESCRIPTION</th>
                              <th>F</th>
                              <th>Debit</th>
                              <th>Credit</th>
                              <th>Balance</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>MARCH 01</td>
                              <td>CASH</td>
                              <td>101</td>
                              <td>100</td>
                              <td></td>
                            </tr>
                             <tr>
                              <td>MARCH 01</td>
                              <td>CASH</td>
                              <td>101</td>
                              <td></td>
                              <td>900</td>
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
    <!-- /JOURNAL MODAL -->




      <!-- TRIALBALANCE MODAL -->
    <div class="modal fade" tabindex="-1" role="dialog" id="ledger_trialbalance">
      <div class="modal-dialog  modal-lg" role="document" style=" width:900px;">
        <div class="modal-content ">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Trial Balance</h4>
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
    <!-- / TRIALBALANCE MODAL -->