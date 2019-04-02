<?php

include('db.php');
include("function.php");

if(isset($_POST["roa_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `room_assign` WHERE roa_ID = :roa_ID"
	);
	$result = $statement->execute(
		array(
			':roa_ID'	=>	$_POST["roa_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>