<?php  

session_start();

include('connect.php');

    $id = 0;
	$update = false;


 if (isset($_POST['update'])) {
    $Asset_number = mysqli_real_escape_string($con, $_POST['Asset_number']);
    $Type =  mysqli_real_escape_string($con,$_POST['Type']);
    $Cost =  mysqli_real_escape_string ($con,$_POST['Cost']);
    $Student_ID =  mysqli_real_escape_string($con,$_POST['Student_ID']);
	  $Name = mysqli_real_escape_string($con,$_POST['Name']);
    $Phone_Number = mysqli_real_escape_string($con, $_POST['Phone_Number']);
    $Coordinator_ID = mysqli_real_escape_string($con,$_POST['Coordinator_ID']);
    $Coordinator_Name = mysqli_real_escape_string($con, $_POST['Coordinator_Name']);
    $Coordinator_Class =  mysqli_real_escape_string($con,$_POST['Coordinator_Class']);
    $Class =  mysqli_real_escape_string($con,$_POST['Class']);

	
   $query4 ="UPDATE registration  SET Asset_number='$Asset_number', Type='$Type', Cost='$Cost', Student_ID='$Student_ID', Name='$Name', Phone_Number='$Phone_Number', Coordinator_ID='$Coordinator_ID', Coordinator_Name='$Coordinator_Name', Coordinator_Class='$Coordinator_Class', Class='$Class' WHERE `registration`.`Asset_number` = '$Asset_number'";
   $outcome4=mysqli_query($con, $query4);

    if(!$outcome4)

    {
       echo "<script>alert('PLEASE TRY AGAIN!')</script>";
       echo "<script>window.history.back('editform.php')</script>";
    }

    else
    {
      echo "<script>alert('Successfully edited!')</script>";
      echo "<script>window.location.replace('menu.php')</script>";    
    }

   mysqli_close($con);
  
 }





 ?>