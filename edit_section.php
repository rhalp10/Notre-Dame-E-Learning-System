<?php
	include('conn.php');
	
	$id=$_GET['id'];

	$section_name=$_POST['section_name'];
	
	
	mysqli_query($conn,"update section set section_name='$section_name' where section='$id'");
	header('location:section.php');

?>