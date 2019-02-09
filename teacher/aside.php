<aside>
  
      <div id="sidebar">
        <ul class="sidebar-menu">
          <li>
            <a class="" href="dashboard.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
          </li>

          <li>
            <a class="" href="announcement.php">
              <i class="fa fa-globe"></i>
              <span>Announcement</span>
            </a>
          </li>

          <li class="sub-menu <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
            <a href="javascript:;" class="" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-edit"></i>
              <span>Quiz</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a href="question.php?q=4">Add Quiz</a></li>
              <li><a href="quiz.php">Quiz List</a></li>
            </ul>
          </li> 

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Trial Balance</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="trial.php">Add Activity</a></li>
              <li><a class="" href="activity.php">Activity List</a></li>
            </ul>
          </li> 

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Activity</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="activity1.php">Add Activity</a></li>
              <li><a class="" href="activity.php">Activity List</a></li>
            </ul>
          </li> 

          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="fa fa-group"></i>
              <span>Class Report</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="quiz_report.php">Quiz Report</a></li>
              <li><a class="" href="activity_report.php">Activity Report</a></li>
            </ul>
          </li>

           <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="fa fa-file"></i>
              <span>File</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="upload_file.php">Upload File</a></li>
              <li><a class="" href="file.php">Uploaded Files</a></li>
            </ul>
          </li> 
          
        </ul>
       
      </div>
    </aside>