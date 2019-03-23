<?php
include('db.php');
include('function.php');
if(isset($_POST["ledger_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `ledger`
		WHERE ledger_ID = '".$_POST["ledger_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["ledger_Name"] = $row["ledger_Name"];
		$output["ledger_Amount"] = $row["ledger_Amount"];
	
	}
	echo json_encode($output);
}
?>