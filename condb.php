<?php
	$conn= mysqli_connect("localhost","akarin","akarin42","my_db",3306) or die("Error: " . mysqli_error($conn));
	mysqli_query($conn, "SET NAMES 'utf8' ");
	date_default_timezone_set('Asia/Bangkok');
?>

