<?php 
require('../config.php');

if (isset($_POST['login'])) {
	$gmail = mysqli_real_escape_string($conn, $_POST['gmail']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$select_user = "SELECT * FROM users WHERE gmail = '$gmail' AND password = '$password'";
	$query = mysqli_query($conn, $select_user);
	$check_user = mysqli_num_rows($query);

	if($check_user == 1){
		session_start();
		$_SESSION['gmail']=$gmail;

		$update_msg = mysqli_query($conn, "UPDATE users SET status='Online' WHERE gmail = '$gmail'");



		$user = $_SESSION['gmail'];
		$get_user = "SELECT * FROM users WHERE gmail = '$user'";
		$run_user = mysqli_query($conn, $get_user);
		$row = mysqli_fetch_array($run_user);
		$userid = $row['userid'];
		$name = $row['username'];

		echo "<script>alert('Welcome $name')</script>";
		echo "<script>window.open('../account.php', '_self')</script>";
	}else{
		echo "<script>alert('please check your email and password');</script>";
	}	
}


 ?>