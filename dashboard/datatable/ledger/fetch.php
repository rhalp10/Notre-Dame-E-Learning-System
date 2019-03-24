<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM `ledger`";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE ledger_Name LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY ledger_ID DESC ';
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
	

	$sub_array = array();
	$sub_array[] = $row["ledger_ID"];
	$sub_array[] = $row["ledger_Name"];
	$sub_array[] = $row["ledger_Amount"];
	$sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["ledger_ID"].'" class="view_ledger">View Ledger</a><a href="#" id="'.$row["ledger_ID"].'" class="view_journal">View Journal</a></li><li><a href="#" id="'.$row["ledger_ID"].'" class="update">Update</a></li></ul></div>';
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



        
