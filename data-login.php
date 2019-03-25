<?php
/**
 * @package    
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    MIT License version or later; see licensing/LICENSE.txt
 */

session_start(); // Starting Session

include('data-md5.php');
$error=''; // Variable To Store Error Message
function success(){
		echo "<script>alert('Successfully login');
											window.location='index.php';
										</script>";
}
function notallowed(){
		
	echo "<script>alert('You are not allowed to register');
											window.location='index.php';
										</script>";
}
function notmatch(){
	echo "<script>alert('Password Not match');
											window.location='index.php';
										</script>";
}
function error_Sql(){
	echo "<script>alert('Sql Error');
											window.location='index.php';
										</script>";
}
function error_credential(){
	echo "<script>alert('Wrong Username or Password!');
											window.location='index.php';
										</script>";
}
if (isset($_POST['submit_student'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Student Number or Password is empty !');
										window.location='index.php';
									</script>";
				// Change this to bootstrap alert

			
			}
		else
		{
			$level = 1;
			login($level);
			
		}
}
if (isset($_POST['submit_teacher'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='index.php';
				</script>";
				// Change this to bootstrap alert
			
			}
		
		else
		{
			$level = 2;
			login($level);
		}
}
if (isset($_POST['submit_admin'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='index.php';
				</script>";
				// Change this to bootstrap alert
			
			}
		
		else
		{
			$level = 3;
			login($level);
		}
}
function login($chk_level){

			include('dbconfig.php');
			// Define $username and $password
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($con,$username);
			$password = mysqli_real_escape_string($con,$password);
			
			
 			$input = "$password";
			$encrypted = encryptIt($input);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($con,"SELECT * FROM `user_accounts` WHERE `user_Name` = '$username' AND `user_Pass` = '$encrypted' AND `level_ID` = '$chk_level' AND `user_status` = 1");
			if (mysqli_num_rows($query) > 0) 
			{
				$rows = mysqli_fetch_assoc($query);
				// And error has occured while executing
			    if ($rows['level_ID']) 
				{
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: dashboard/"); //go to dashboard
					// success();
				} 

			}
			else
			{
			 error_credential();
			}
			mysqli_close($con); // Closing Connection
}




?>