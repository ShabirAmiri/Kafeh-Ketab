<?php 
require('../config.php');

if (isset($_POST['signup'])) {
	
					$username = mysqli_real_escape_string($conn, $_POST['username']);
					$gmail = mysqli_real_escape_string($conn, $_POST['gmail']);
					$password = mysqli_real_escape_string($conn, $_POST['password']);
					$userid = rand(1000000, 2550000);
					

					$sql = "INSERT INTO users(username,gmail,password,userid) VALUES('$username', '$gmail','$password','$userid')";

					//getting the email/name
					$check_email= "SELECT * FROM users where gmail = '$gmail'";
					$check_username = "SELECT * FROM users where username = '$username'";



					//making a query to it
					$run_email = mysqli_query($conn, $check_email);
					$run_username = mysqli_query($conn, $check_username);


					//running in respective of each rows
					$check_e = mysqli_num_rows($run_email);
					$check_u = mysqli_num_rows($run_username);


					//checking if i.e the name or gmail as been inputted already
					if($check_e==1 || $check_u == 1){
						echo "<script>alert('i.e The gmail, name, username or passcode already exists')</script>";
						echo "<script>windows.open('index.php', '_self')</script>";
						
					}else{
						if (mysqli_query($conn, $sql)) {
						echo "<script>alert('Welcome $username kindly login')</script>";
						echo "<script>windows.open('index.php', '_self')</script>";
					}else{
						echo mysqli_error($conn);
					}
					}
}

 ?>