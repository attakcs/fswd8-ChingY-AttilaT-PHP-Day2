<!DOCTYPE html>
<html>
<head>
	<title>PHP DAY2 identify browser</title>
	<?php 
$viewer = getenv("HTTP_USER_AGENT");
$browser = "An undetified browser";
if(preg_match("/Chrome/i", "$viewer")){
	$browser = "Google Chrome";
	echo "<link rel='stylesheet' type='text/css' href='chrome.css'>";
}else if(preg_match("/Mozilla/i","$viewer")){
	$browser = "Mozilla";
	echo "<link rel='stylesheet' type='text/css' href='mozilla.css'>";
}else if(preg_match("/Safari/i","$viewer")){
	$browser = "Apple Safari";
}
$platform = "An undetified OS!";
if(preg_match("/Windows/i","$viewer")){
	$platform = "Windows!";
}else if(preg_match("/Linux/i","$viewer")){
	$platform = "Linux";
}else if(preg_match("/Mac/i","$viewer")){
	$platform = "Mac";
}
echo ("You are using $browser on $platform");


?>
</head>
<body>
	<h1>HELLO</h1>
</body>
</html>