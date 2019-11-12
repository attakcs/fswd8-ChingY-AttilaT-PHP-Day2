<?php 

include "connect.php";

if(isset($_GET['id'])){
	$employee_id = $_GET['id'];
	$sql = "SELECT * FROM `employees_agency` WHERE employee_id=$employee_id";

	$result = mysqli_query($conn,$sql);
	$row = $result->fetch_assoc();
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="update_a.php" method="post">
	<input type="hidden" name="employee_id" value="<?php echo $row['employee_id']?>">
	<input type="text" name="first_name" value="<?php echo $row['first_name']?>">
	<input type="text" name="last_name" value="<?php echo $row['last_name']?>">
	<input type="submit" name="submit" value="update">
</form>
</body>
</html>