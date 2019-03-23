<?php

include('db.php');
include("function.php");

if(isset($_POST["ledger_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `ledger` WHERE ledger_ID = :ledger_ID"
	);
	$result = $statement->execute(
		array(
			':ledger_ID'	=>	$_POST["ledger_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>