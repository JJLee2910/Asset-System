<?php

include("connect.php");

if (isset($_POST['submit'])) {

$Name = mysqli_real_escape_string($con,$_POST['FullName']);
$Phone_Number = mysqli_real_escape_string($con, $_POST['phone']);
$Class =  mysqli_real_escape_string($con,$_POST['Class']);
$Student_ID =  mysqli_real_escape_string($con,$_POST['studentid']);
$Asset_Number = mysqli_real_escape_string($con, $_POST['AssetNumber']);
$Type =  mysqli_real_escape_string($con,$_POST['type']);
$Cost =  mysqli_real_escape_string ($con,$_POST['cost']);
$Coordinator_ID = mysqli_real_escape_string($con,$_POST['CoordinatorID']);
$Coordinator_Name = mysqli_real_escape_string($con, $_POST['CoordinatorName']);
$Coordinator_Class =  mysqli_real_escape_string($con,$_POST['CoordinatorClass']);


  
  	
   $query ="INSERT INTO student_info (Name, Phone_Number, Student_ID)VALUES('$Name','$Phone_Number' ,'$Student_ID')";
   $outcome=mysqli_query($con, $query);
   $query1 ="INSERT INTO asset_info (Asset_Number, Type, Cost)VALUES('$Asset_Number' ,'$Type' ,'$Cost')";
   $outcome1=mysqli_query($con, $query1);
   $query2 ="INSERT INTO coordinator_info (Coordinator_ID, Coordinator_Name, Coordinator_Class)VALUES('$Coordinator_ID','$Coordinator_Name' ,'$Coordinator_Class')";
   $outcome2=mysqli_query($con, $query2);
   $query3 ="INSERT INTO student_name (Name, Class) VALUES('$Name','$Class')";
   $outcome3=mysqli_query($con, $query3);
   $query4 ="INSERT INTO registration (Asset_Number, Type, Cost, Student_ID, Name, Class, Phone_Number, Coordinator_ID, Coordinator_Name, Coordinator_Class)VALUES('$Asset_Number', '$Type', '$Cost', '$Student_ID', '$Name', '$Class', '$Phone_Number', '$Coordinator_ID', '$Coordinator_Name', '$Coordinator_Class')";
   $outcome4=mysqli_query($con, $query4);
   $query5="INSERT INTO types_of_registration (Asset_Number, Student_ID,Coordinator_ID) VALUES('$Asset_Number','$Student_ID','$Coordinator_ID')";
   $outcome5=mysqli_query($con, $query5);


    if(!$outcome AND !$outcome1 AND !$outcome2 AND !$outcome3 AND !$outcome4 AND !$outcome5)

    {
      echo 'Please try again!';
    }

    else
    {
      echo "<script>alert('Successfully Added!')</script>";
      echo "<script>window.location.replace('menu.php')</script>";    
    }

   mysqli_close($con);
  
 }

?>