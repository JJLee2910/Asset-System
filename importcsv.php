<?php
include('connect.php');

session_start();
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

    if(isset($_POST['submit']))
    {
         $fname = $_FILES['sel_file']['name'];
         
         $chk_ext = explode(".",$fname);
        
         if(strtolower(end($chk_ext)) == "csv")
         {
        
             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");
       
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
             {
                $sql = "INSERT into registration (Asset_number,Type, Cost, Student_ID, Name, Phone_Number, Coordinator_ID, Coordinator_Name, Coordinator_Class, Class) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]','$data[8]','$data[9]')";
                mysqli_query($con,$sql) or die(mysqli_error($con));
             }
       
             fclose($handle);
             echo "<script>alert('Successfully imported!')</script>";
            
         }
         else
         {
              echo "<script>alert('Invalid file type! Please try again later!')</script>";
         }   
    }
    
    
    ?>
    
    <html>
    <title>D.C.A IMPORT</title>
    <body>
    <h1>Import CSV file</h1>
    <form action='<?php echo $_SERVER["PHP_SELF"];?>' method='post' enctype="multipart/form-data">
        Import File : <input type='file' name='sel_file' size='1kb'>
        <input type='submit' name='submit' value='submit'>
    </form>
    <a href="menu.php" class="button1">Main Menu</a>
</body>
</html>

    <style>

    h1{
        text-align: center;
        margin-top: 100px;
         font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

    }

    form{

        text-align: center;
        margin-top: 50px;
         font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    body{

        background-image: url(images/image1.jpg);
         background-size:cover;
            background-position:center;
            display:flex;
            flex-direction:column;
           justify-content:center;
           align-items:center;
           text-align:center;
           padding:0 20px;
    }

    .button1 {
        font-size:18px;
        text-decoration:none;
        color:#FFF;
        border:#FFF 2px solid;
        padding:10px 20px;
        border-radius:10px;
        margin-top:25px;
        margin-bottom:15px;
        bottom: auto;
        background-color: darkgrey;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
       }

       .button1:hover{
       background:#3CF;
       color:#fff;
       }


    

