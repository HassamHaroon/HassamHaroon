<?php
$connect = mysqli_connect("localhost", "root", "", "project_one");

if($_GET['id'])
{
	$urlid = $_GET['id'];
}

	
	if($urlid>0)
	{
		$del = "DELETE FROM add_record WHERE id = '$urlid'";

		mysqli_query($connect, $del);

		header('location:delete_record.php');

	}
	else
	{
		header('location:delete_record.php');
	}

?>