<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middle_name=$_POST['middle_name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$section=$_POST['section'];
	$section2=$_POST['section2'];
	$section3=$_POST['section3'];
	$section4=$_POST['section4'];
	$section5=$_POST['section5'];
	
	
	mysqli_query($conn,"update teacher set firstname='$firstname', lastname='$lastname', middle_name='$middle_name', username='$username', password='$password', section='$section', section2='$section2', section3='$section3', section4='$section4', section5='$section5' where teacher_id='$id'");
	header('location:teacher.php');

?>