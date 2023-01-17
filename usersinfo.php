<?php 	

require('./config.php');
session_start();
$notify= "";

if (empty($_SESSION)) {
    $notify = "Hello World, welcome to Book Zone, Make sure to Sign Up";
    
}else{
    $user = $_SESSION['gmail'];

        $get = "SELECT * FROM users WHERE gmail = '$user'";
        $query = mysqli_query($conn, $get);
        $results = mysqli_fetch_array($query);

        $username = $results['username'];
        $gmail = $results['gmail'];
        $password = $results['password'];
        $userid = $results['userid'];
        

}



/*
if(isset($_REQUEST['gmail']) ){
    $profile = $_REQUEST['gmail'];

    if (empty($profile) || $profile != "adeolawintech@gmail.com") {
    	header('location: ../index.php');
    }else{

    	$get = "SELECT * FROM admin WHERE gmail = '$profile'";
    	$query = mysqli_query($conn, $get);
    	$results = mysqli_fetch_array($query);

    	$name = $results['name'];
    	$password = $results['password'];



    	$grab = "SELECT * FROM books";
    	$query = mysqli_query($conn, $grab);
    	$tbooks = mysqli_num_rows($query);

    }
}else{
    header('location: ../index.php');
}

*/

 ?>