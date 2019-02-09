<!DOCTYPE html>
<!-- saved from url=(0047)http://localhost/finals/admin/pages/teacher.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Members | 
Scheduling System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="./Members _ Scheduling System_files/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./Members _ Scheduling System_files/dataTables.bootstrap.css">
    <link rel="stylesheet" href="./Members _ Scheduling System_files/AdminLTE.min.css">
    <link rel="stylesheet" href="./Members _ Scheduling System_files/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="./Members _ Scheduling System_files/_all-skins.min.css">
	<script src="./Members _ Scheduling System_files/jquery.min.js.download"></script>
	
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-yellow layout-top-nav" onload="myFunction()">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header" style="padding-left:20px">
			  
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Tasks Menu -->
                 <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="http://localhost/finals/admin/pages/home.php" class="" style="font-size:14px"><i class="glyphicon glyphicon-star-empty"></i> Class Schedule</a>
                  </li>
                  <!-- Tasks Menu -->
                  <!-- Tasks Menu -->
                 <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="http://localhost/finals/admin/pages/exam.php" class="" style="font-size:14px"><i class="glyphicon glyphicon-list-alt"></i> Exam Schedule</a>
                  </li>
                  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="http://localhost/finals/admin/pages/teacher.php#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-file"></i> Entry
                      
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/class.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Class
                            </a>
                          </li><!-- end notification -->
						 
                          <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/room.php">
                              <i class="glyphicon glyphicon-scale text-green"></i> Room
                            </a>
                          </li><!-- end notification -->
						
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/subject.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Subject
                            </a>
                          </li><!-- end notification -->
						  
						            <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/teacher.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Teacher
                            </a>
                          </li><!-- end notification -->
						              <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/signatories.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Signatories
                            </a>
                          </li><!-- end notification -->
                        </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                      </li>
                     
                    </ul>
                  </li>
				  <!-- Tasks Menu -->
				   <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="http://localhost/finals/admin/pages/teacher.php#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="glyphicon glyphicon-wrench"></i> Maintenance
                      
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <!-- Inner Menu: contains the notifications -->
                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
						  
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/department.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Department
                            </a>
                          </li><!-- end notification -->
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/designation.php">
                              <i class="glyphicon glyphicon-cutlery text-green"></i> Designation
                            </a>
                          </li><!-- end notification -->
              <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/program.php">
                              <i class="glyphicon glyphicon-cutlery text-green"></i> Program
                            </a>
                          </li><!-- end notification -->
						 
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/rank.php">
                              <i class="glyphicon glyphicon-send text-green"></i> Rank
                            </a>
                          </li><!-- end notification -->
                         
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/salut.php">
                              <i class="glyphicon glyphicon-user text-green"></i> Salutation
                            </a>
                          </li><!-- end notification -->
						  
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/sy.php">
                              <i class="glyphicon glyphicon-user text-green"></i> School Year
                            </a>
                          </li><!-- end notification -->
						  
						  <li><!-- start notification -->
                            <a href="http://localhost/finals/admin/pages/time.php">
                              <i class="glyphicon glyphicon-calendar text-green"></i> Time
                            </a>
                          </li><!-- end notification -->
						
                        </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                      </li>
                     
                    </ul>
                  </li>
                  <!-- Tasks Menu -->
					       <li class="">
                    <!-- Menu Toggle Button -->
                   <a href="http://localhost/finals/admin/pages/settings.php" style="color:#fff;" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-cog text-red"></i>Settings
                      				
                    </a>
                  </li>
                  <!-- Tasks Menu -->
				  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="http://localhost/finals/admin/pages/profile.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-user text-orange"></i>
                      Mrs Admin Admin                    </a>
                  </li>
                  <li class="">
                    <!-- Menu Toggle Button -->
                    <a href="http://localhost/finals/admin/pages/logout.php" class="dropdown-toggle">
                      <i class="glyphicon glyphicon-off text-red"></i> 
                      
                    </a>
                  </li>
                  
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>

      <!-- Full Width Column -->
      <div class="content-wrapper" style="min-height: 437px;">
        <div class="container">
          <!-- Content Header (Page header) -->
        

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-warning">
               <form method="post" id="reg-form" action="http://localhost/finals/admin/pages/teacher_save.php">
                <div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable no-footer" style="margin-right:-10px" role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 2px;"></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending" style="width: 39px;">Last Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 39px;">First Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rank: activate to sort column ascending" style="width: 38px;">Rank</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 78px;">Department</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Designation: activate to sort column ascending" style="width: 81px;">Designation</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending" style="width: 68px;">Username</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 43px;">Status</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 44px;">Action</th></tr>
              </thead>
              
    

                <tbody>

              
                

              
                

              
                

              
                

              
                

              
                

              
           
<tr role="row" class="odd">
                <td class="sorting_1">Dr</td>
                <td>apin</td>
                <td>aimee</td>
                <td>Assistant Professor I</td>
                <td>CAS</td>
                <td>Dean</td>
                <td>aimeecas</td>
                
                <td>admin</td>
                <td>
                  <a id="click" href="http://localhost/finals/admin/pages/teacher_edit.php?id=179">
                    <i class="glyphicon glyphicon-edit text-blue"></i></a>
                  <a id="removeme" href="http://localhost/finals/admin/pages/teacher_del.php?id=179">
                    <i class="glyphicon glyphicon-trash text-red"></i></a>
                  
                </td>
        
                </tr><tr role="row" class="even">
                <td class="sorting_1">Dr</td>
                <td>Espenida</td>
                <td>Christian</td>
                <td>Assistant Professor I</td>
                <td>CAS</td>
                <td>Dean</td>
                <td>christiancas</td>
                
                <td>student</td>
                <td>
                  <a id="click" href="http://localhost/finals/admin/pages/teacher_edit.php?id=180">
                    <i class="glyphicon glyphicon-edit text-blue"></i></a>
                  <a id="removeme" href="http://localhost/finals/admin/pages/teacher_del.php?id=180">
                    <i class="glyphicon glyphicon-trash text-red"></i></a>
                  
                </td>
        
                </tr><tr role="row" class="odd">
                <td class="sorting_1">Dr</td>
                <td>espenida</td>
                <td>aimertian</td>
                <td>Assistant Professor I</td>
                <td>COED </td>
                <td>Dean</td>
                <td>aimertiancoed </td>
                
                <td>student</td>
                <td>
                  <a id="click" href="http://localhost/finals/admin/pages/teacher_edit.php?id=181">
                    <i class="glyphicon glyphicon-edit text-blue"></i></a>
                  <a id="removeme" href="http://localhost/finals/admin/pages/teacher_del.php?id=181">
                    <i class="glyphicon glyphicon-trash text-red"></i></a>
                  
                </td>
        
                </tr><tr role="row" class="even">
                <td class="sorting_1">Dr</td>
                <td>Opinion</td>
                <td>Aimee</td>
                <td>Assistant Professor II</td>
                <td>CEIT</td>
                <td>Faculty</td>
                <td>aimee</td>
                
                <td>user</td>
                <td>
                  <a id="click" href="http://localhost/finals/admin/pages/teacher_edit.php?id=178">
                    <i class="glyphicon glyphicon-edit text-blue"></i></a>
                  <a id="removeme" href="http://localhost/finals/admin/pages/teacher_del.php?id=178">
                    <i class="glyphicon glyphicon-trash text-red"></i></a>
                  
                </td>
        
                </tr><tr role="row" class="odd">
                <td class="sorting_1">Dr</td>
                <td>Rizal</td>
                <td>Jose</td>
                <td>Assistant Professor I</td>
                <td>CAS</td>
                <td>Dean</td>
                <td>jose</td>
                
                <td>admin</td>
                <td>
                  <a id="click" href="http://localhost/finals/admin/pages/teacher_edit.php?id=177">
                    <i class="glyphicon glyphicon-edit text-blue"></i></a>
                  <a id="removeme" href="http://localhost/finals/admin/pages/teacher_del.php?id=177">
                    <i class="glyphicon glyphicon-trash text-red"></i></a>
                  
                </td>
        
                </tr><tr role="row" class="even">
                <td class="sorting_1">Mr</td>
                <td>apin</td>
                <td>tata</td>
                <td>Assistant Professor I</td>
                <td>CEIT</td>
                <td>Dean</td>
                <td>tataceit</td>
                
                <td>teacher</td>
                <td>
                  <a id="click" href="http://localhost/finals/admin/pages/teacher_edit.php?id=182">
                    <i class="glyphicon glyphicon-edit text-blue"></i></a>
                  <a id="removeme" href="http://localhost/finals/admin/pages/teacher_del.php?id=182">
                    <i class="glyphicon glyphicon-trash text-red"></i></a>
                  
                </td>
        
                </tr><tr role="row" class="odd">
                <td class="sorting_1">Mrs</td>
                <td>Admin</td>
                <td>Admin</td>
                <td>Assistant Professor I</td>
                <td>CIT</td>
                <td></td>
                <td>admin</td>
                
                <td>admin</td>
                <td>
                  <a id="click" href="http://localhost/finals/admin/pages/teacher_edit.php?id=27">
                    <i class="glyphicon glyphicon-edit text-blue"></i></a>
                  <a id="removeme" href="http://localhost/finals/admin/pages/teacher_del.php?id=27">
                    <i class="glyphicon glyphicon-trash text-red"></i></a>
                  
                </td>
        
                </tr></tbody></table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 7 of 7 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="http://localhost/finals/admin/pages/teacher.php#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="http://localhost/finals/admin/pages/teacher.php#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next disabled" id="example1_next"><a href="http://localhost/finals/admin/pages/teacher.php#" aria-controls="example1" data-dt-idx="2" tabindex="0">Next</a></li></ul></div></div></div></div>  
							  
		</div><!--col end -->
		<div class="col-md-6">
			
						
         </div><!--col end-->           
        </div><!--row end-->        
					
			
                </div><!-- /.box-body -->
              </form></div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            <div class="col-md-3">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  <div class="form-group">
							<label for="date">Salutation</label>
							
								<select class="form-control select2 select2-hidden-accessible" name="salut" required="" tabindex="-1" aria-hidden="true">
								  

										<option>Dr</option>
								  										<option>Engr</option>
								  										<option>Mr</option>
								  										<option>Mrs</option>
								  										<option>Ms</option>
								  										<option>Prof</option>
								  								</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 670px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-salut-ud-container"><span class="select2-selection__rendered" id="select2-salut-ud-container" title="Dr">Dr</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							
						  </div><!-- /.form group -->
              <div class="form-group">
              <label for="date">First Name</label><br>
                <input type="text" class="form-control" name="first" placeholder="First Name" required=""> 
              </div><!-- /.form group -->
						  <div class="form-group">
							<label for="date">Last Name</label><br>
								<input type="text" class="form-control" name="last" placeholder="Last Name" required="">	
						  </div><!-- /.form group -->
						  
						   <div class="form-group">
							<label for="date">Rank</label>
							
								<select class="form-control select2 select2-hidden-accessible" name="rank" required="" tabindex="-1" aria-hidden="true">
								  										<option>Assistant Professor I</option>
								  										<option>Assistant Professor II</option>
								  										<option>Assistant Professor III</option>
								  										<option>Assistant Professor IV</option>
								  										<option>Associate Professor I</option>
								  										<option>Associate Professor II</option>
								  										<option>Associate Professor III</option>
								  										<option>Associate Professor IV</option>
								  										<option>College Professor </option>
								  										<option>Instructor I</option>
								  										<option>Instructor II</option>
								  										<option>Instructor III</option>
								  										<option>Professor I</option>
								  										<option>Professor II</option>
								  										<option>Professor III</option>
								  										<option>Professor IV</option>
								  										<option>University Professor </option>
								  								</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 670px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-rank-jn-container"><span class="select2-selection__rendered" id="select2-rank-jn-container" title="Assistant Professor I">Assistant Professor I</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							
						  </div><!-- /.form group -->
						  <div class="form-group">
							<label for="date">Department</label>
							
								<select class="form-control select2 select2-hidden-accessible" name="dept" required="" tabindex="-1" aria-hidden="true">
								  										<option value="CAS">School of Arts and Sciences</option>
								  										<option value="CEIT">College of Engineering and Information Technology</option>
								  										<option value="COED ">College of Education</option>
								  								</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 670px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-dept-ta-container"><span class="select2-selection__rendered" id="select2-dept-ta-container" title="School of Arts and Sciences">School of Arts and Sciences</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							
						  </div><!-- /.form group -->
						  <div class="form-group">
							<label for="date">Designation</label>
							
								<select class="form-control select2 select2-hidden-accessible" name="designation" required="" tabindex="-1" aria-hidden="true">
								  										<option value="66">Dean</option>
								  										<option value="67">Faculty</option>
								  								</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 670px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-designation-cg-container"><span class="select2-selection__rendered" id="select2-designation-cg-container" title="Dean">Dean</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							
						  </div><!-- /.form group -->
						   <div class="form-group">
              <label for="date">Status</label>
              
                <select class="form-control select2 select2-hidden-accessible" name="status" required="" tabindex="-1" aria-hidden="true">
              
                    <option>teacher</option>
                    <option>student</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 670px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-status-7s-container"><span class="select2-selection__rendered" id="select2-status-7s-container" title="teacher">teacher</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              
              </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="form-group">
                    
                      <button class="btn btn-lg btn-primary" id="daterange-btn" name="save" type="submit">
                        Save
                      </button>
					  <button class="btn btn-lg" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  
					  
                   </div>
                  </div><!-- /.form group --><hr>
					
                </div><!-- /.box-body -->
				
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      
<footer class="main-footer" style="text-align:center">
        <strong>Copyright © 2018</strong> Brought To You By <a href="http://code-projects.org/">code-projects.org</a>
</footer>    </div><!-- ./wrapper -->





	<script type="text/javascript" src="./Members _ Scheduling System_files/autosum.js.download"></script>
    <!-- jQuery 2.1.4 -->
    <script src="./Members _ Scheduling System_files/jQuery-2.1.4.min.js.download"></script>
	<script src="./Members _ Scheduling System_files/jquery.min.js.download"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="./Members _ Scheduling System_files/bootstrap.min.js.download"></script>
    <script src="./Members _ Scheduling System_files/select2.full.min.js.download"></script>
    <!-- SlimScroll -->
    <script src="./Members _ Scheduling System_files/jquery.slimscroll.min.js.download"></script>
    <!-- FastClick -->
    <script src="./Members _ Scheduling System_files/fastclick.min.js.download"></script>
    <!-- AdminLTE App -->
    <script src="./Members _ Scheduling System_files/app.min.js.download"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./Members _ Scheduling System_files/demo.js.download"></script>
    
<script src="./Members _ Scheduling System_files/jquery.dataTables.min.js.download"></script>
    <script src="./Members _ Scheduling System_files/dataTables.bootstrap.min.js.download"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
     <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  

</body></html>