<?php
	include('conn.php');
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$middle_name=$_POST['middle_name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$section=$_POST['section'];
	
	mysqli_query($conn,"insert into student (firstname, lastname, middle_name, username, password, section) values ('$firstname', '$lastname', '$middle_name', '$username', '$password', '$section')");
	header('location:student.php');

?>