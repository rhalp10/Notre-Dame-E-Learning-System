<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#section_data').DataTable({
    "processing":true,
    "serverSide":true,
    
    "order":[],
    "ajax":{
      url:"datatable/section/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#section_form', function(event){
    event.preventDefault();
    var section_Name = $('#section_Name').val();
    if(section_Name != '')
    {
            $.ajax({
              url:"datatable/section/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#section_form')[0].reset();
                $('#section_modal').modal('hide');
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
    var section_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/section/fetch_single.php",
      type:"POST",
      data:{section_ID:section_ID},
      dataType:"json",
      success:function(data)
      {
        $('#section_modal').modal('show');
        $('#section_Name').val(data.section_Name);
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Section Info");
        $('#section_ID').val(section_ID);
      }
    })
  });
  $(document).on('click', '.add', function(){x
        document.getElementById("section_form").reset();
  });
  $(document).on('click', '.delete', function(){
    var section_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/section/delete.php",
        type:"POST",
        data:{section_ID:section_ID},
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