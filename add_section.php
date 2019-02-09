<?php
	include('conn.php');
	
	$section_name=$_POST['section_name'];
	
	mysqli_query($conn,"insert into section (section_name) values ('$section_name')");
	header('location:section.php');

?>