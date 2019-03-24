<?php

include('db.php');
include("function.php");

if(isset($_POST["entry_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `ledger_entry` WHERE entry_ID = :entry_ID"
	);
	$result = $statement->execute(
		array(
			':entry_ID'	=>	$_POST["entry_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>