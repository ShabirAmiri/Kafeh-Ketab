<?php 
$hostname = 'localhost';
$username = 'winning';
$password = 'wintech11';
$dbname = 'bookvillage';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    echo mysqli_connect_error();
}
