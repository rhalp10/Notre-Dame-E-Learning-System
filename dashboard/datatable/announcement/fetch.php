<?php
include('db.php');
include('function.php');
session_start();
$user_level = $_SESSION['login_level'];
$query = '';
$output = array();
$query .= "SELECT * FROM `room_announcements`";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE ann_Title LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY ann_ID DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	
  if ($user_level == 3 || $user_level == 2 ) {
	$actionbutton =  '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["ann_ID"].'" class="view">View</a></li><li><a href="#" id="'.$row["ann_ID"].'" class="update">Update</a></li><li><a href="#" id="'.$row["ann_ID"].'" class="delete">Delete</a></li></ul></div>';
  }
  else{
	$actionbutton =  '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["ann_ID"].'" class="view">View</a></li></ul></div>';
  }
	$sub_array = array();
	$sub_array[] = $row["ann_Date"];
	$sub_array[] = $row["ann_Title"];
	$sub_array[] = $actionbutton;
	// $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);

?>



        
