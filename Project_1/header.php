<?php
include ('server.php');

if(isset($_SESSION['uemail'])){
	$print = $_SESSION['uemail'];
}else{
	echo "<script>document.location='login.php';</script>";
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


