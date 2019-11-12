<?php 
if(isset($_POST['submit'])){
	if($_POST['firstname'] || $_POST['lastname']){
		echo "Welcome ".$_POST['firstname']." ".$_POST['lastname'].".<br/>";
	}else{
   		echo "Please write your name";}
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>
<form action="form.php" method="POST">
	First Name: <input type="text" name="firstname">
	Last Name: <input type="text" name="lastname">
	<button type="submit" name="submit">Submit</button>
	<button type="submit" name="reset">Clear</button>
</form>


</body>
</html>

<!--<?php 
//if(isset($_POST['submit'])){
	//if($_POST['firstname'] || $_POST['lastname']){
	//	echo "Welcome ".$_POST['firstname']." ".$_POST['lastname'].".<br/>";
	//}
  // }elseif(isset($_POST['test'])) {
   //	header ("Location: form.php");
   //}
//?>