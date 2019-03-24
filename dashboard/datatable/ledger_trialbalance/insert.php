<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		$ledger_Name = $_POST["ledger_Name"];
		$sql = "INSERT INTO `ledger` (`ledger_ID`, `ledger_Name`) VALUES (NULL, :ledger_Name);";
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
			array(
				':ledger_Name'			=>	$ledger_Name
			)
		);

		if(!empty($result))
		{
			echo 'Successfully Ledger Added';
		}
	}

	if($_POST["operation"] == "Edit")
	{
		
		$ledger_ID = $_POST["ledger_ID"];
		
		$ledger_Name = $_POST["ledger_Name"];
		$ledger_Amount = $_POST["ledger_Amount"];
		echo $sql ="UPDATE `ledger` SET `ledger_Name` = :ledger_Name,`ledger_Amount` = :ledger_Amount WHERE `ledger`.`ledger_ID` = :ledger_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':ledger_ID'			=>	$ledger_ID,
					':ledger_Name'			=>	$ledger_Name,
					':ledger_Amount'		=>	$ledger_Amount
					
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
