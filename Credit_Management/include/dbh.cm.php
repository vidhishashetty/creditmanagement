<?php 
	$dbserver="localhost";
	$uname="root";
	$pwd="";
	$dbname="internship";
	$conn=mysqli_connect($dbserver, $uname, $pwd,$dbname);
if(!$conn){
	die("connection failed".mysql_error());
 }
 
