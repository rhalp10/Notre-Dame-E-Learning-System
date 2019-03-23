<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#student_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/student/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#student_form', function(event){
    event.preventDefault();
    var lrn = $('#lrn').val();
    var fname = $('#fname').val();
    var mname = $('#mname').val();
    var lname = $('#lname').val();
    var suffix = $('#suffix').val();
    var sex = $('#sex').val();
    if(lrn != '' && fname != '' && mname != '' && lname != '' && suffix != '' && sex != '')
    {
         
            $.ajax({
              url:"datatable/student/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#student_form')[0].reset();
                $('#student_modal').modal('hide');
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
    var rsd_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/student/fetch_single.php",
      type:"POST",
      data:{rsd_ID:rsd_ID},
      dataType:"json",
      success:function(data)
      {
        $('#student_modal').modal('show');
        $('#lrn').val(data.stud_lrn);
        $('#fname').val(data.stud_fname);
        $('#mname').val(data.stud_mname);
        $('#lname').val(data.stud_lname);
        $('#suffix').val(data.stud_suffix).change();
        $('#sex').val(data.stud_sex).change();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Student Info");
        $('#rsd_ID').val(rsd_ID);
      }
    })
  });
  $(document).on('click', '.add', function(){
        document.getElementById("account_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var rsd_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/student/delete.php",
        type:"POST",
        data:{rsd_ID:rsd_ID},
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