<?php 

	include "connect.php";

if(isset($_POST)){
	$employee_id = $_POST['employee_id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];

	echo $employee_id;

	$sql = "UPDATE `employees_agency` SET `first_name`='$first_name',`last_name`='$last_name' WHERE employee_id=$employee_id"; 

	if(mysqli_query($conn,$sql)){
		echo "Updated successfully <br><a href='basic3.php'>back</a>";
	}
} 

?>