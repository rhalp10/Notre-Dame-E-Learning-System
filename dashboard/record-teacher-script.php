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