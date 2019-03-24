<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		$ledgerentry_Name = $_POST["ledgerentry_Name"];
		$ledgerentry_f = $_POST["ledgerentry_f"];
		
		$sql = "INSERT INTO `ledger_entry` (`entry_Name`, `entry_F`) VALUES (:ledgerentry_Name, :ledgerentry_f);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':ledgerentry_Name'			=>	$ledgerentry_Name,
				':ledgerentry_f'			=>	$ledgerentry_f
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Entry Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{
		
		$entry_ID = $_POST["entry_ID"];
		
		$ledgerentry_Name = $_POST["ledgerentry_Name"];
		$ledgerentry_f = $_POST["ledgerentry_f"];
		 $sql ="UPDATE `ledger_entry` SET `entry_Name` = :ledgerentry_Name,`entry_F` = :ledgerentry_f WHERE `ledger_entry`.`entry_ID` = :entry_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':entry_ID'			=>	$entry_ID,
					':ledgerentry_Name'	=>	$ledgerentry_Name,
					':ledgerentry_f'	=>	$ledgerentry_f
					
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
