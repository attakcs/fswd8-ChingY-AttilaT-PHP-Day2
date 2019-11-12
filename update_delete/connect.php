<?php 
//Connect php with database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "car_rental_agency";

	$conn = mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed: ".mysqli_connect_error()."\n");
	} 

	?>