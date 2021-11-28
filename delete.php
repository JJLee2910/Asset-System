<?php
	$con = mysqli_connect("localhost", "root", "");
	if (!con)
	{
		die('Connection failed'.mysqli_connect_error());
	}
	mysqli_select_db($con, "damaged class assets registration");

	
	
	$asset_number = $_GET['Asset_number'];
	$type = $_POST['Type'];
	$cost = $_POST['Cost'];
	$student_id = $_POST ['Student_ID'];
	$name = $_POST['Name'];
	$phone_number = $_POST['Phone_Number'];
	$coordinator_id = $_POST['Coordinator_ID'];
	$coordinator_name = $_POST['Coordinator_Name'];
	$coordinator_class = $_POST['Coordinator_Class'];
	$class = $_POST['Class'];
	$sql = "DELETE FROM registration WHERE Asset_number = '$asset_number'";
	
	

	$result = mysqli_query($con, $sql);
	header('location:reports2.php');
?>