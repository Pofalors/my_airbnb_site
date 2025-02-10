<?php

$servername="localhost";
$username="root";
$password="";
$database="mmb_website";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("apotuxhmenh sundesh: ".mysqli_connect_error());
	
}


?>