<?php
include('../../../data-md5.php');

function get_total_all_records()
{
	include('db.php');
	$statement = $conn->prepare("SELECT * FROM `teacher_subject_assign`");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}




?>