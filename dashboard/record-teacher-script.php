<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#teacher_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
     "bAutoWidth": false,
    "ajax":{
      url:"datatable/teacher/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
   var dataTableshowteacher_data = $('#showteacher_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
     "bAutoWidth": false,
    "ajax":{
      url:"datatable/teacher/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
  var dataTableTeacherWithSub = $('#teacherwithsub_data').DataTable({
    "processing":true,
    "serverSide":true,
     "bAutoWidth": false,
    "order":[],
    "ajax":{
      url:"datatable/teacherwithsub/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  //----------------------------------------------------------------
  //JQUERY FOR SELECTING SUBJECT ID WHEN BROWSING
  //----------------------------------------------------------------
    var teachRec = '#showteacher_data tbody';

    $(teachRec).on('click', 'tr', function(){
      
      var cursor = dataTableshowteacher_data.row($(this));//get the clicked row
      var data=cursor.data();// this will give you the data in the current row.
    
      $('#assign_teacher_form').find("input[name='assign_rtdID'][type='hidden']").val(data[0]);
      $('#assign_teacher_form').find("input[name='assign_EmpID'][type='text']").val(data[1]);
      $('#rteacher_modal').modal('hide');
      
    });





  $(document).on('submit', '#teacher_form', function(event){
    event.preventDefault();
    var EmpID = $('#EmpID').val();
    var fname = $('#fname').val();
    var mname = $('#mname').val();
    var lname = $('#lname').val();
    var suffix = $('#suffix').val();
    var sex = $('#sex').val();
    if(EmpID != '' && fname != '' && mname != '' && lname != '' && suffix != '' && sex != '')
    {
            $.ajax({
              url:"datatable/teacher/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#teacher_form')[0].reset();
                $('#teacher_modal').modal('hide');
                dataTable.ajax.reload();
                dataTableTeacherWithSub.ajax.reload();
              }
            });
    }
    else
    {
      alert("Fields are Required");
    }
  });
 
  $(document).on('click', '.update', function(){
    var rtd_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/teacher/fetch_single.php",
      type:"POST",
      data:{rtd_ID:rtd_ID},
      dataType:"json",
      success:function(data)
      {
        $('#teacher_modal').modal('show');
        $('#EmpID').val(data.teacher_EmpID);
        $('#fname').val(data.teacher_FName);
        $('#mname').val(data.teacher_MName);
        $('#lname').val(data.teacher_LName);
        $('#suffix').val(data.teacher_suffix).change();
        $('#sex').val(data.teacher_sex).change();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Teacher Info");
        $('#rtd_ID').val(rtd_ID);
      }
    })
  });
 
  $(document).on('click', '.add', function(){
      $('#action').val("Add");
      $('#operation').val("Add");
      $('.modal-title').text("Add Teacher");
      document.getElementById("account_form").reset();
  });

  $(document).on('click', '.delete', function(){
    var rtd_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/teacher/delete.php",
        type:"POST",
        data:{rtd_ID:rtd_ID},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
           dataTableTeacherWithSub.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });


 //ONCLICK SUBMIT OF ASSIGN TEACHER FORM
  $(document).on('submit', '#assign_teacher_form', function(event){
    event.preventDefault();
    var assign_EmpID = $('#assign_EmpID').val();
    var assign_section = $('#assign_section').val();
    var assign_semester = $('#assign_semester').val();
    var assign_rtdID = $('#assign_rtdID').val();

    if(assign_EmpID != '' && assign_section != '' && assign_semester != '' && assign_rtdID != '' )
    {
            $.ajax({
              url:"datatable/teacherwithsub/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#assign_teacher_form')[0].reset();
                // $('#rteacher_modal').modal('hide');
                $('#ateacher_modal').modal('hide');

                dataTableTeacherWithSub.ajax.reload();
              }
            });
    }
    else
    {
      alert("Fields are Required");
    }
  });
  //FETCH SINGLE PER CLICKING UPDATE
  $(document).on('click', '.update_assign', function(){
    var roa_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/teacherwithsub/fetch_single.php",
      type:"POST",
      data:{roa_ID:roa_ID},
      dataType:"json",
      success:function(data)
      {
        $('#ateacher_modal').modal('show');
        $('#assign_EmpID').val(data.assign_EmpID);
        $('#assign_section').val(data.assign_section);
        $('#assign_semester').val(data.assign_semester);
        $('#assign_rtdID').val(data.assign_rtdID);
        
        $('#action').val("Edit");
        $('.operation').val("Edit");
        $('.modal-title').text("Edit Teacher Assign Info");
        $('#roa_ID').val(roa_ID);
      }
    })
  });
  // WHEN USER CLICK ASSIGN 
  $(document).on('click', '.assign', function(){
      $('#action').val("Add");
      $('.operation').val("Add");
      $('.modal-title').text("Assign Teacher ");
      document.getElementById("assign_teacher_form").reset();
  });

  //WHEN USER DELETE ASSIGN TEACHER 
   $(document).on('click', '.delete_assign', function(){
    var roa_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/teacherwithsub/delete.php",
        type:"POST",
        data:{roa_ID:roa_ID},
        success:function(data)
        {
          alert(data);
           dataTableTeacherWithSub.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
  
});
</script>