<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include("dbconfig.php");
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
	$ses_sql = mysqli_query($con,"SELECT user_Name,user_ID,level_ID FROM user_accounts WHERE user_Name='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session = $row['user_Name'];

	$_SESSION['login_level'] = $row['level_ID'];
	$_SESSION['login_id'] = $row['user_ID'];
	$_SESSION['user_Name'] = $row['user_Name'];


if (!isset($login_session))
{
  mysqli_close($con); // Closing Connection
  header('Location: ../index.php'); // Redirecting To Home Page
}

?>