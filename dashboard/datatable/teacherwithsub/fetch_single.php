<?php
include('db.php');
include('function.php');
if(isset($_POST["roa_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `room_assign` `roa` 
		LEFT JOIN `record_teacher_detail` `rtd` ON `roa`.`rtd_ID` = `rtd`.`rtd_ID` 
		LEFT JOIN `ref_section` `rsec` ON `roa`.`section_ID` = `rsec`.`section_ID` 
		LEFT JOIN `ref_semester` `rsem` ON `roa`.`sem_ID` = `rsem`.`sem_ID`
		WHERE `roa`.roa_ID = '".$_POST["roa_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{


		$output["assign_EmpID"] = 	$row["rtd_EmpID"];
		$output["assign_section"] = 	$row["section_ID"];
		$output["assign_semester"] = 	$row["sem_ID"];
		$output["assign_rtdID"] = 	$row["rtd_ID"];
	
	}
	echo json_encode($output);
}
?>

