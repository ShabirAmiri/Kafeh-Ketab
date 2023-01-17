<?php 
require('./config.php');


$gen = "SELECT * FROM books";
$gen_que = mysqli_query($conn, $gen);
$gen_lists = mysqli_fetch_all($gen_que, MYSQLI_ASSOC);


$top = "SELECT * FROM books ORDER by id DESC LIMIT 3";
$top_que = mysqli_query($conn, $top);
$top_lists = mysqli_fetch_all($top_que, MYSQLI_ASSOC);



$mod = "SELECT * FROM books WHERE genre = 'modrn' LIMIT 4";
$mod_que = mysqli_query($conn, $mod);
$mod_lists = mysqli_fetch_all($mod_que, MYSQLI_ASSOC);



$clas = "SELECT * FROM books WHERE genre = 'classic' LIMIT 4";
$clas_que = mysqli_query($conn, $clas);
$clas_lists = mysqli_fetch_all($clas_que, MYSQLI_ASSOC);




$rom = "SELECT * FROM books WHERE genre = 'novel' LIMIT 4";
$rom_que = mysqli_query($conn, $rom);
$rom_lists = mysqli_fetch_all($rom_que, MYSQLI_ASSOC);


$child = "SELECT * FROM books WHERE genre = 'child' LIMIT 4";
$child_que = mysqli_query($conn, $child);
$child_lists = mysqli_fetch_all($child_que, MYSQLI_ASSOC);


 ?>