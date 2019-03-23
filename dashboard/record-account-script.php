<script type="text/javascript" language="javascript" >
$(document).ready(function(){

  $("select[value]").each(function(){
    $(this).val(this.getAttribute('value'));
  });


  var dataTable = $('#account_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"datatable/account/fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#account_form', function(event){
    event.preventDefault();
    var username = $('#username').val();
    var level = $('#level').val();
    var email = $('#email').val();
    var pass = $('#pass').val();
    var con_pass = $('#con_pass').val();
    var status = $('#status').val();
    if(username != '' && level != '' && email != '' && pass != '' && con_pass != '' && status != '')
    {


      if (pass == con_pass) 
        {

          if (pass.length > 6) {
            console.log(username + level + email + pass + status);
            $.ajax({
              url:"datatable/account/insert.php",
              type:'POST',
              data:new FormData(this),
              // data:"username="+username+"&level="+level+"&email="+email+"&pass="+pass+"&status="+status+"&operation="+operation,
              contentType:false,
              processData:false,
              success:function(data)
              {
                $('#action').val("Add");
                $('#operation').val("Add");

                alert(data);
                $('#account_form')[0].reset();
                $('#account_modal').modal('hide');
                dataTable.ajax.reload();
              }
            });
          } 
          else {
            alert("Minumum Password Length is 6 Character");
          }
        } 
        else {
          alert("Password not match");
        }
    }
    else
    {
      alert("Fields are Required");
    }
  });

  $(document).on('click', '.update', function(){
    var user_ID = $(this).attr("id");

    $.ajax({
        url:"datatable/account/fetch_single.php",
        type:"POST",
        data:{user_ID:user_ID},
        success:function(data)
        {
        $('#account_modal').modal('show');
        $("#username").prop("disabled", true);
        $('#username').val(data.user_Name);
        $('#email').val(data.user_Email);
        $('#pass').val(data.user_Pass);
        $('#con_pass').val(data.user_Pass);
        $('#level').val(data.level_ID).change();
        $('#status').val(data.user_status).change();
        $('#action').val("Edit");
        $('#operation').val("Edit");
        $('.modal-title').text("Edit Account Info");
        $('#user_ID').val(user_ID);
        }
      });
  });
  $(document).on('click', '.add', function(){
        $('#username').prop("disabled", false);
        document.getElementById('account_form').reset();
  });
  
  $(document).on('click', '.delete', function(){
    var user_ID = $(this).attr('id');
    console.log(user_ID);
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"datatable/account/delete.php",
        type:"POST",
        data:{user_ID:user_ID},
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