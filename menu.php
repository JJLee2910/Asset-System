<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    echo "<script>alert('You have logged out!')</script>";
    echo "<script>window.location.replace('index.php')</script>"; 
  }
?>


<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>D.C.A SYSTEM V1.0</title>
</head>
<body>
 
<header id="showcase">
    <img src="images/avatar.png" alt="logo" height="175" width="175">
    <h1>DAMAGED CLASS ASSETS REGISTRATION SYSTEM</h1>
    <p>Please select the following menu:</p>
    <a href="Registrationform.php" class="button">Record</a>
    <a href="reports2.php" class="button1">Reports</a>
    <a href="search.php" class="button1">Search</a>
    <a href="importcsv.php" class="button1">Import</a>
    <a href="menu.php?logout='1'" class="button2">Log Out</a>
  </header>
  <section id="section-a">
    <p>Welcome To SMK USJ 12</p>
  </section>
  


</body>
</html>

<style>
*{
  margin:0;
  padding:0;
}

body{
  margin:0;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-size:17px;
  color:#FFF;
  line-height:1.6;
  
}

#showcase{
  background-image:url(images/images.jpg);
  background-size:cover;
  background-position:center;
  height:100vh;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:center;
  padding:0 20px;
}

#showcase h1{
  font-size:40px;
  line-height:1.2;
}

#showcase p{
  font-size:20px;
}

#showcase .button{
  font-size:18px;
  text-decoration:none;
  color:#FFF;
  border:#FFF 2px solid;
  padding:10px 20px;
  border-radius:10px;
  margin-top:20px;
}

#showcase .button:hover{
  background:#3CF;
  color:#fff;
}

#showcase .button1{
  font-size:18px;
  text-decoration:none;
  color:#FFF;
  border:#FFF 2px solid;
  padding:10px 20px;
  border-radius:10px;
  margin-top:20px;
}

#showcase .button1:hover{
  background:#3CF;
  color:#fff;
}

#showcase .button2{
  font-size:18px;
  text-decoration:none;
  color:#FFF;
  border:#FFF 2px solid;
  padding:10px 20px;
  border-radius:10px;
  margin-top:20px;
}

#showcase .button2:hover{
  background:#F00;
  color:#fff;
}

#section-a{
  padding:20px;
  background:#3CF;
  color:#fff;
  text-align:center;
}

</style>



