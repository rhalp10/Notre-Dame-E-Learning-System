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


</head>
<body>
    <div class="modal fade" id="del<?php echo $row['student_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
        <?php
          $del=mysqli_query($conn,"select * from student where student_id='".$row['student_id']."'");
          $drow=mysqli_fetch_array($del);
        ?>
        <div class="container-fluid">
          <h5><center>Full Name: <strong><?php echo $drow['firstname']; ?></strong> <strong><?php echo $drow['middle_name']; ?></strong> <strong><?php echo $drow['lastname']; ?></strong></center></h5> 
                </div> 
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt"></span> Cancel</button>
                    <a href="delete_student.php?id=<?php echo $row['student_id']; ?>" class="btn btn-danger"><span class="icon_trash_alt"></span> Delete</a>
                </div>
        
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['student_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Update</h4></center>
                </div>
                <div class="modal-body">
        <?php
          $edit=mysqli_query($conn,"select * from student where student_id='".$row['student_id']."'");
          $erow=mysqli_fetch_array($edit);
        ?>
        <div class="container-fluid">
        <form method="POST" action="edit_student.php?id=<?php echo $erow['student_id']; ?>">
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Firstname:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="firstname" class="form-control" value="<?php echo $erow['firstname']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Lastname:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="lastname" class="form-control" value="<?php echo $erow['lastname']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Middle Name:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="middle_name" class="form-control" value="<?php echo $erow['middle_name']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">LRN:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $erow['username']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Password:</label>
            </div>
            <div class="col-lg-9">
              <input type="password" name="password" class="form-control" value="<?php echo $erow['password']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Section:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="section" class="form-control" value="<?php echo $erow['section']; ?>">
            </div>
          </div>
                <div> 
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt"></span> Cancel</button>
                    <button type="submit" class="btn btn-success"><span class="icon_check_alt"></span> Update</button>
                </div>
        </form>
            </div>
        </div>
    </div>
  </div>
</div>


<div class="modal fade" id="delete<?php echo $row['teacher_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
        <?php
          $del=mysqli_query($conn,"select * from teacher where teacher_id='".$row['teacher_id']."'");
          $drow=mysqli_fetch_array($del);
        ?>
        <div class="container-fluid">
          <h5><center>Full Name: <strong><?php echo $drow['firstname']; ?></strong> <strong><?php echo $drow['middle_name']; ?></strong> <strong><?php echo $drow['lastname']; ?></strong></center></h5> 
                </div> 
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt"></span> Cancel</button>
                    <a href="delete_teacher.php?id=<?php echo $row['teacher_id']; ?>" class="btn btn-danger"><span class="icon_trash_alt"></span> Delete</a>
                </div>
        
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="update<?php echo $row['teacher_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Update</h4></center>
                </div>
                <div class="modal-body">
        <?php
          $edit=mysqli_query($conn,"select * from teacher where teacher_id='".$row['teacher_id']."'");
          $erow=mysqli_fetch_array($edit);
        ?>
        <div class="container-fluid">
        <form method="POST" action="edit_teacher.php?id=<?php echo $erow['teacher_id']; ?>">
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Firstname:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="firstname" class="form-control" value="<?php echo $erow['firstname']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Lastname:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="lastname" class="form-control" value="<?php echo $erow['lastname']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Middle Name:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="middle_name" class="form-control" value="<?php echo $erow['middle_name']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Username:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="username" class="form-control" value="<?php echo $erow['username']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Password:</label>
            </div>
            <div class="col-lg-9">
              <input type="password" name="password" class="form-control" value="<?php echo $erow['password']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Section:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="section" class="form-control" value="<?php echo $erow['section']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Section2:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="section2" class="form-control" value="<?php echo $erow['section2']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Section3:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="section3" class="form-control" value="<?php echo $erow['section3']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Section4:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="section4" class="form-control" value="<?php echo $erow['section4']; ?>">
            </div>
          </div>
          <div style="height:10px;"></div>
          <div class="row">
            <div class="col-lg-3">
              <label class="control-label" style="position:relative; top:7px;">Section5:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="section5" class="form-control" value="<?php echo $erow['section5']; ?>">
            </div>
          </div>
          <div> 
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt"></span> Cancel</button>
             <button type="submit" class="btn btn-success"><span class="icon_check_alt"></span> Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


<div class="modal fade" id="deleted"<?php echo $row['section_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
        <?php
          $del=mysqli_query($conn,"select * from section where section_id='".$row['section_id']."'");
          $drow=mysqli_fetch_array($del);
        ?>
        <div class="container-fluid">
          <h5><center>Full Name: <strong><?php echo $drow['section_name']; ?></center></h5> 
                </div> 
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt"></span> Cancel</button>
                    <a href="delete_section.php?id=<?php echo $row['section_id']; ?>" class="btn btn-danger"><span class="icon_trash_alt"></span> Delete</a>
                </div>
        
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="updated<?php echo $row['section_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Update</h4></center>
                </div>
                <div class="modal-body">
        <?php
          $edit=mysqli_query($conn,"select * from section where section_id='".$row['section_id']."'");
          $erow=mysqli_fetch_array($edit);
        ?>
        <div class="container-fluid">
        <form method="POST" action="edit_section.php?id=<?php echo $erow['section_id']; ?>">
          <div class="row">
            <div class="col-lg-3">
              <label style="position:relative; top:7px;">Section Name:</label>
            </div>
            <div class="col-lg-9">
              <input type="text" name="section" class="form-control" value="<?php echo $erow['section_name']; ?>">
            </div>
          </div>
          
          <div> 
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal"><span class="icon_close_alt"></span> Cancel</button>
             <button type="submit" class="btn btn-success"><span class="icon_check_alt"></span> Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


</body>
</html>