<?php
$server_name = "localhost";
$username = "root";
$password ="";
$database_name ="socialdb";

$connect = mysqli_connect($server_name,$username,$password,$database_name);

if(!$connect){
	echo "Connection failed!";
	exit();
}
?>