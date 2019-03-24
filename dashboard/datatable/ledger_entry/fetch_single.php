<?php
include('db.php');
include('function.php');
if(isset($_POST["entry_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `ledger_entry`
		WHERE entry_ID = '".$_POST["entry_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["entry_Name"] = $row["entry_Name"];
		$output["entry_F"] = $row["entry_F"];
	
	}
	echo json_encode($output);
}
?>