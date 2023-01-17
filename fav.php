<?php 
require('./config.php');
require('./usersinfo.php');


if (empty($_SESSION)) {
    echo "<script>alert('Please sign up to add to favourites')</script>";
    echo "<script>window.open('form/', '_self')</script>";
    
}else{
   

        if(isset($_REQUEST['id']) ){
            $bookid = $_REQUEST['id'];

            if (empty($bookid)) {
                header('location: ./index.php');
            }else{

                $get = "INSERT INTO favourites(bookid,userid) VALUES ('$bookid','$userid')";
                $query = mysqli_query($conn, $get);

                if ($query) {
                 echo "<script>alert('your book has been added')</script>";
                 echo "<script>window.open('./account.php', '_self')</script>";
                }

            }
        }else{
            header('location: index.php');
        }

}


 ?>


