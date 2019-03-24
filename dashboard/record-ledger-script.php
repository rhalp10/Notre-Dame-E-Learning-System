<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  //select specific dropdown when updating 1 data
  $("select[value]").each(function(){
    $(this).val(this.getAttribute("value"));
  });


  var dataTable = $('#ledger_data').DataTable({
    "processing":true,
    "serverSide":true,
    "bAutoWidth": false,
    "order":[],
    "ajax":{
      url:"datatable/ledger/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });


    var trial_dataTable = $('#trialbalance_data').DataTable({
    "processing":true,
    "serverSide":true,
    "bAutoWidth": false,
    "order":[],
    "ajax":{
      url:"datatable/ledger_trialbalance/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });
  var journal_dataTable =  $('#journal_data').DataTable( {      
         "searching": false,
         "paging": true, 
         "info": false,         
         "lengthChange":false 
    } );
   $("entry_data").css("width","900px");

  $(document).on('submit', '#ledger_form', function(event){
    event.preventDefault();
    var ledger_Name = $('#ledger_Name').val();
    var ledger_Amount = $('#ledger_Amount').val();
    if(ledger_Name != '' && ledger_Amount != '')
    {
            $.ajax({
              url:"datatable/ledger/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#ledger_form')[0].reset();
                $('#ledger_modal').modal('hide');
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
    var ledger_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/ledger/fetch_single.php",
      type:"POST",
      data:{ledger_ID:ledger_ID},
      dataType:"json",
      success:function(data)
      {
        $('#ledger_modal').modal('show');
        $('#ledger_Name').val(data.ledger_Name);
        $('#ledger_Amount').val(data.ledger_Amount);
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Section Info");
        $('#ledger_ID').val(ledger_ID);
      }
    })
  });


  $(document).on('click', '.add', function(){
        document.getElementById("ledger_form").reset();
  });
  $(document).on('click', '.view_trialbalance', function(){
         $('#ledger_trialbalance').modal('show');
  });
  $(document).on('click', '.view_journal', function(){
         $('#ledger_journal_modal').modal('show');
  })
  $(document).on('click', '.entry', function(){
         $('#ledger_entry').modal('show');
  });
  $(document).on('click', '.delete', function(){
    var ledger_ID = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/ledger/delete.php",
        type:"POST",
        data:{ledger_ID:ledger_ID},
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
  
  

  var entry_dataTable = $('#entry_data').DataTable({
    "processing":true,
    "serverSide":true,
  "bAutoWidth": false,
    "order":[],
    "ajax":{
      url:"datatable/ledger_entry/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

    $(document).on('submit', '#ledgerentry_form', function(event){
    event.preventDefault();
    var ledgerentry_Name = $('#ledgerentry_Name').val();
    var ledgerentry_f = $('#ledgerentry_f').val();
    if(ledgerentry_Name != '' && ledgerentry_f != '')
    {
            $.ajax({
              url:"datatable/ledger_entry/insert.php",
              type:'POST',
              data:new FormData(this),
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#entry_operation').val("Add");

                alert(data);
                $('#ledgerentry_form')[0].reset();
                $('#ledgerentry_modal').modal('hide');
                entry_dataTable.ajax.reload();
              }
            }); 
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update_entry', function(){
    var entry_ID = $(this).attr("id");
    
    $.ajax({
      url:"datatable/ledger_entry/fetch_single.php",
      type:"POST",
      data:{entry_ID:entry_ID},
      dataType:"json",
      success:function(data)
      {
        $('#ledgerentry_modal').modal('show');
        $('#ledgerentry_Name').val(data.entry_Name);
        $('#ledgerentry_f').val(data.entry_F);
        $('#action').val("Edit");
        $('#entry_operation').val("Edit");
        $('.modal-title').text("Edit Entry Info");
        $('#entry_ID').val(entry_ID);
      }
    })
  });

});
</script>