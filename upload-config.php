<?php 
require('config.php');

if (isset($_POST['add'])) {
	$book_id = rand(1000, 2550);
	$bname = mysqli_real_escape_string($conn, $_POST['bname']);
   $aname = mysqli_real_escape_string($conn, $_POST['aname']);
	$pn = mysqli_real_escape_string($conn, $_POST['pn']);
	$py= mysqli_real_escape_string($conn, $_POST['py']);
   $edition= mysqli_real_escape_string($conn, $_POST['edition']);
   $genre= mysqli_real_escape_string($conn, $_POST['genre']);

        //first banner function//
        $v_filename = $_FILES["image"]["name"];
        $v_tempname = $_FILES["image"]["tmp_name"];
        $image = "images/". $v_filename;
        move_uploaded_file($v_tempname,$image);


        //pdf upload function//
        $v_filename = $_FILES["pdf"]["name"];
        $v_tempname = $_FILES["pdf"]["tmp_name"];
        $pdf = "books/". $v_filename;
        move_uploaded_file($v_tempname,$pdf);

	 $db = "INSERT INTO books(bname,aname,pn,py,edition,genre,image,pdf,bookid) VALUES ('$bname', '$aname','$pn','$py','$edition','$genre','$image','$pdf','$book_id')"; 
    $query = mysqli_query($conn, $db);

        if ($query) {
           echo "<script>alert('upload')</script>";
        }else{
        	echo "<script>alert('coudn't upload please retry)</script>";
        }
}elseif(isset($_POST['cancel'])) {
      header("location: index.php");
   }




 ?>