<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#semester_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/semester/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#semester_form', function(event){
    event.preventDefault();
    var semester_Start = $('#semester_Start').val();
    var semester_End = $('#semester_End').val();
    var semester_Stat = $('#semester_Stat').val();
    if(semester_Start != '' && semester_End != '' && semester_Stat != '')
    {
            $.ajax({
              url:"datatable/semester/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#semester_form')[0].reset();
                $('#semester_modal').modal('hide');
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
    var semester_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/semester/fetch_single.php",
      type:"POST",
      data:{semester_ID:semester_ID},
      dataType:"json",
      success:function(data)
      {
        $('#semester_modal').modal('show');
        $('#semester_Start').val(data.sem_Start);
        $('#semester_End').val(data.sem_End);
        $('#semester_Stat').val(data.sem_Status).change();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Semester Info");
        $('#semester_ID').val(semester_ID);
      }
    })
  });



  $(document).on('click', '.add', function(){
        document.getElementById("semester_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var semester_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/semester/delete.php",
        type:"POST",
        data:{semester_ID:semester_ID},
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