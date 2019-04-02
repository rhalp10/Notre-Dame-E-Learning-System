<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$assign_EmpID = $_POST["assign_EmpID"];
		$assign_section = $_POST["assign_section"];
		$assign_semester = $_POST["assign_semester"];
		$assign_rtdID = $_POST["assign_rtdID"];
		

		
		$sql = "SELECT * FROM `room_student` WHERE rtd_ID = :assign_rtdID and section_ID = :assign_section and sem_ID = :assign_semester;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':assign_rtdID', $assign_rtdID, PDO::PARAM_STR);
		$statement->bindParam(':assign_section', $assign_section, PDO::PARAM_STR);
		$statement->bindParam(':assign_semester', $assign_semester, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();

		if (empty($resultrows)) { 
		   

			$sql = "INSERT INTO `room_assign` (`roa_ID`, `rtd_ID`, `section_ID`, `sem_ID`) 
			VALUES (NULL, :assign_rtdID, :assign_section, :assign_semester);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':assign_rtdID'		=>	$assign_rtdID ,
					':assign_section'		=>	$assign_section ,
					':assign_semester'	 	=>	$assign_semester 
				)
			);

			if(!empty($result))
			{
				echo 'Successfully Assign Teacher ';
			}

		} 
		else {
			// if section is already assign 
			echo "Already Assign";
		  


		}

	
	}

	if($_POST["operation"] == "Edit")
	{
		$roa_ID = $_POST["roa_ID"];
		
		$assign_EmpID = $_POST["assign_EmpID"];
		$assign_section = $_POST["assign_section"];
		$assign_semester = $_POST["assign_semester"];
		$assign_rtdID = $_POST["assign_rtdID"];
		
		echo $sql ="UPDATE `room_assign` SET 
		`rtd_ID` = :assign_rtdID,
		`section_ID` = :assign_section,
		`sem_ID` = :assign_semester
		 WHERE `room_assign`.`roa_ID` = :roa_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':roa_ID'		=>	$roa_ID ,
					':assign_rtdID'		=>	$assign_rtdID ,
					':assign_section'		=>	$assign_section ,
					':assign_semester'	 	=>	$assign_semester 
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}

		print_r($_POST);
	}

}
?>
