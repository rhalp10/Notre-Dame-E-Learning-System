<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from teacher where teacher_id='$id'");
	header('location:teacher.php');

?>