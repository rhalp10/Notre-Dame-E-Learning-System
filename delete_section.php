<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from section where section_id='$id'");
	header('location:section.php');

?>