<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middle_name=$_POST['middle_name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$section=$_POST['section'];
	
	
	mysqli_query($conn,"update student set firstname='$firstname', lastname='$lastname', middle_name='$middle_name', username='$username', password='$password', section='$section' where student_id='$id'");
	header('location:student.php');

?>