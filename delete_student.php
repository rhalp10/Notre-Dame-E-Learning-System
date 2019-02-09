<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from student where student_id='$id'");
	header('location:student.php');

?>