<?php
	include('conn.php');
	
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
	
	mysqli_query($conn,"insert into teacher (firstname, lastname, middle_name, username, password, section, section2, section3, section4, section5) values ('$firstname', '$lastname', '$middle_name', '$username', '$password', '$section', '$section2', '$section3', '$section4', '$section5')");
	header('location:teacher.php');

?>