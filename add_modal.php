<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>NDTMCP E-Learning System</title>
  <link href="img/logo.jpg" rel="icon" type="image">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />


</head><!-- Add New -->
    <div class="modal fade" id="student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content student-modal">
                <div class="modal-header student-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Student</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="add_student.php">
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">First Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="firstname" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Last Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="lastname" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Middle Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="middle_name" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">LRN:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="username" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Password:</label>
						</div>
						<div class="col-lg-9">
							<input type="password" class="form-control" name="password" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Section:</label>
						</div>
						<div class="col-lg-9">
							<select class="form-control select" name="section" >
                                
                                	<?php
			                        include('conn.php');
			                        
			                        $query=mysqli_query($conn,"select * from section order by section_name");
			                        while($row=mysqli_fetch_array($query)){
			                        ?>
			                       		<option></option>
			                            <option><?php echo $row['section_name']; ?></option>
			                        
			                        <?php
                        			}?> 
                    			
                            </select>
						</div>
					</div>
                <div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt "></span> Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="icon_check_alt2"></span> Save</button>
                </div>
				</form>
                </div>
				
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="teacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content teacher-modal">
                <div class="modal-header teacher-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add teacher</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="add_teacher.php">
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">First Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="firstname" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Last Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="lastname" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Middle Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="middle_name" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Username:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="username">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Password:</label>
						</div>
						<div class="col-lg-9">
							<input type="password" class="form-control" name="password" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Section:</label>
						</div>
						<div class="col-lg-9">
							<select class="form-control select2" name="section" >
                                
                                	<?php
			                        include('conn.php');
			                        
			                        $query=mysqli_query($conn,"select * from section order by section_name");
			                        while($row=mysqli_fetch_array($query)){
			                        ?>
			                       		<option></option>
			                            <option><?php echo $row['section_name']; ?></option>
			                        
			                        <?php
                        			}?> 
                    			
                            </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Section2:</label>
						</div>
						<div class="col-lg-9">
							
                          	<select class="form-control select2" name="section2" >
                                
                                	<?php
			                        include('conn.php');
			                        
			                        $query=mysqli_query($conn,"select * from section order by section_name");
			                        while($row=mysqli_fetch_array($query)){
			                        ?>
			                       		<option></option>
			                            <option><?php echo $row['section_name']; ?></option>
			                        
			                        <?php
                        			}?> 
                    			
                            </select>

                            
                        </div>
                     </div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Section3:</label>
						</div>
						<div class="col-lg-9">
							<select class="form-control select2" name="section3" >
                                
                                	<?php
			                        include('conn.php');
			                        
			                        $query=mysqli_query($conn,"select * from section order by section_name");
			                        while($row=mysqli_fetch_array($query)){
			                        ?>
			                       		<option></option>
			                            <option><?php echo $row['section_name']; ?></option>
			                        
			                        <?php
                        			}?> 
                    			
                            </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Section4:</label>
						</div>
						<div class="col-lg-9">
							<select class="form-control select2" name="section4" >
                                
                                	<?php
			                        include('conn.php');
			                        
			                        $query=mysqli_query($conn,"select * from section order by section_name");
			                        while($row=mysqli_fetch_array($query)){
			                        ?>
			                       		<option></option>
			                            <option><?php echo $row['section_name']; ?></option>
			                        
			                        <?php
                        			}?> 
                    			
                            </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Section5:</label>
						</div>
						<div class="col-lg-9">
							<select class="form-control select2" name="section5">
                                
                                	<?php
			                        include('conn.php');
			                        
			                        $query=mysqli_query($conn,"select * from section order by section_name");
			                        while($row=mysqli_fetch_array($query)){
			                        ?>
			                       		<option></option>
			                            <option><?php echo $row['section_name']; ?></option>
			                        
			                        <?php
                        			}?> 
                    			
                            </select>
						</div>
					</div>
                <div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt "></span> Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="icon_check_alt2"></span> Save</button>
                </div>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>
				

<div class="modal fade" id="section" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content section-modal">
                <div class="modal-header section-modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Section</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="add_section.php">
					<div class="row">
						<div class="col-lg-3">
							<label class="control-label" style="position:relative; top:7px;">Section Name:</label>
						</div>
						<div class="col-lg-9">
							<input type="text" class="form-control" name="section_name" required>
						</div>
					</div>	
                <div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt "></span> Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="icon_check_alt2"></span> Save</button>
                </div>
				</form>
                </div>
				
            </div>
        </div>
    </div>
</div>

