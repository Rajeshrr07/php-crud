<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mybd"

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_err){
	echo("connection failed" $conn->connect_err);
}
else{
	echo("connect the database is successfully");
}
?>