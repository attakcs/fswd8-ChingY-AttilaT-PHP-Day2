<!DOCTYPE html>
<html>
<head>
	<title>PHP Basic 3</title>
</head>
<body>
	<?php 

	include "connect.php";

// //Connect php with database
// 	$servername = "localhost";
// 	$username = "root";
// 	$password = "";
// 	$dbname = "car_rental_agency";

// 	$conn = mysqli_connect($servername,$username,$password,$dbname);
// 	if(!$conn){
// 		die("Connection failed: ".mysqli_connect_error()."\n");
// 	}
// create table employees_agency
	$sql = "CREATE TABLE employees_agency(
	employee_id INT(6) AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(20),
	last_name VARCHAR(20),
	position VARCHAR(50))";

// insert data in table
	// $sql = "INSERT INTO employees_agency(first_name,last_name,position) VALUES ('Elias','Miller','CEO'),('Thomas','Meyer','CHR');";

// fetching

	$sql = "SELECT * FROM employees_agency";
	$result = mysqli_query($conn,$sql);

	if($result->num_rows ==0){
		$row = "No result";
		$res = 0;
	} elseif($result->num_rows ==1){
		$row = $result->fetch_assoc();
		$res = 1;
	}else{
		$row = $result->fetch_all(MYSQLI_ASSOC);
		$res = 2;
	}

	if($res==0){
		echo $row;
	}elseif($res==1){
		echo $row["last_name"]." ".$row["first_name"];
	}else{
		foreach ($row as $value) {
			echo $value["last_name"]." ".$value["first_name"]."<br><a href='delete.php?id=".$value['employee_id']."'>delete</a><br><a href='update.php?id=".$value['employee_id']."'>update</a><br>";
		}
	}

	mysqli_close($conn);

	?>
</body>
</html>