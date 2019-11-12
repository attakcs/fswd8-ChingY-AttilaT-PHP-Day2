<?php 
echo("<html><body>");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_rental_agency";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql = "SELECT * FROM `employees_agency`";
mysqli_query($conn,$sql);
 ?>