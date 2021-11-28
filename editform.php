<style>


body{


              background-image:url('images/image1.jpg') ;
             margin: 0 auto;
             font-family: arial;
             background-size:cover;
            background-position:center;
            display:flex;
            flex-direction:column;
           justify-content:center;
           align-items:center;
           text-align:left;
           padding:0 20px;
            }

            h1{

             color: #09F;
             text-align: center;
            }
      label{

       color: #0CF;
       width: 15%;
       display: inline-block;

      }

      #container{


       padding: 20px;
       width: 60%;
       margin: 0 auto;
       margin-top: 1%;
       margin-bottom: 1%;
       background-color: white;
      }

   .userinput{

    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 5px;
    padding-right: 5px;
    margin-bottom: 30px;

   }
   label{

    color: #666;
    font-size: 14px;
   }
   textarea{
 color: #000;
    font-size: 14px;


   }

   select{

    color: #09F;
   }
  

   .sampleBtn{
      
       background-color: #FFF;
       width: 20%;
       height: 35px;
       font-size: 16px;

   }
   .sampleBtn:hover{

          color: white;
          background-color: red;
          cursor: pointer;
   }
   
   .sampleBtn1{
      
       background-color: #09F;
       width: 20%;
       height: 35px;
       font-size: 16px;
     color:white;

   }
   .sampleBtn1:hover{

          color: white;
          background-color: #09F;
          cursor: pointer;
   }
 
 h2{
   color:#666;
   text-align: center;
 }
</style>



<?php  
include('editvalidation.php');



  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

if (isset($_GET['no'])) {
    $no = $_GET['no'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM registration WHERE no=$no");

if (count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $assetnumber = $n['Asset number'];
      $type = $n['Type'];
      $cost = $n['Cost'];
      $studentid = $n['Student ID'];
      $name = $n['Name'];
      $phonenumber = $n['Phone Number'];
      $coordinatorid = $n['Coordinator ID'];
      $coordinatorname = $n['Coordinator Name'];
      $coordinatorclass = $n['Coordinator Class'];
      $class = $n['Class'];

    }
  }




 ?>



<html>
<head>
  <title>Edit</title>
</head>

<body>
<div id="container">
 <h1> DAMAGED CLASS ASSETS (EDIT) </h1>
 <form name="update" action="editvalidation.php" method="POST">
<input type="hidden" name="no" value="<?php echo $no; ?>">

 
  
  
  <h2> Asset details: </h2>
  
  <div class="userinput">
   <label> Asset Number  </label>
   <td><input type="text" name="Assetnumber" required= "required"></td>
  </div>
  
  <div class="userinput">
   <label> Type  </label>
   <td><input type="text" name="type" required="required"></td>
  </div>

  <div class="userinput">
   <label> Cost  </label>
   <td><input type="text" name="cost" required= "required"></td>
  </div>


  <h2> Student details: </h2>
 

  <div class="userinput">
   <label> Full Name  </label>
   <td><input type="text" name="FullName" required= "required"></td>
  </div>
  
  <div class="userinput">
   <label> Class   </label>
   <td><input type="text" name="Class" required= "required"></td>
  </div>
  
  <div class="userinput">
   <label> Phone Number </label>   
   <td><input type="text" name="phone" required= "required"></td>
  </div>
  
  <div class="userinput">
   <label> Student ID </label>   
   <td><input type="text" name="studentid" required= "required"></td>
  </div>
  
  
  
  
  <h2> Coordinator details: </h2>
  <div class="userinput">
   <label> Coordinator ID </label>
   <td><input type="text" name="CoordinatorID" required= "required"></td>
  </div>
  
  <div class="userinput">
   <label> Coordinator Name </label>
   <td><input type="text" name="CoordinatorName" required= "required"></td>
  </div>
  
  <div class="userinput">
   <label> Coordinator Class </label>   
   <td><input type="text" name="CoordinatorClass" required= "required"></td>
  </div>
  
  <div style="text-align:center">

   
   
   <button type="submit" class="sampleBtn1" name="update">Update</button>
  
  

  </div>
  
  
 </form>
 
 </div>
 
</body>

</html>