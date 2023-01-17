<?php 
require('./config.php');


if(isset($_REQUEST['id']) ){
    $id = $_REQUEST['id'];

    if (empty($id)) {
    	header('location: ./index.php');
    }else{

    	$get = "SELECT * FROM books WHERE bookid = '$id'";
    	$query = mysqli_query($conn, $get);
    	$results = mysqli_fetch_array($query);

 				  $bookid = $results['bookid'];
                  $bname = $results['bname'];
                  $aname = $results['aname'];
                  $image = $results['image'];
                  $pdf = $results['pdf'];


    }
}else{
    header('location: ../index.php');
}

 ?>