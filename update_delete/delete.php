<?php 

include "connect.php";

if(isset($_GET['id'])){
	$employee_id = $_GET['id'];
	
	$sql = "DELETE FROM `employees_agency` WHERE employee_id=$employee_id";

	if(mysqli_query($conn,$sql)){
		echo "Record deleted<br><a href='basic3.php'>Back</a>";
	}
} 
?>