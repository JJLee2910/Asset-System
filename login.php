<?php
session_start();
//connect to database
include("connect.php");
if(isset($_POST['login_user'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    if(empty($username)){
    echo"<script>alert('Username is required!')</script>";

}
if(empty($password)){
    echo"<script>alert('Password is required!')</script>";
}
if (count($errors)==0){
    $password= md5($password);
    $query= "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results= mysqli_query($con,$query);
    if(mysqli_num_rows($results)==1){
    $_SESSION['username']= $username;
    $_SESSION['success']= "You are now logged in";
    header('location:menu.php');
}else{
    echo"<script>alert('Wrong Username/Password!')</script>";
}
}
}
    mysqli_close($con);
?>


<style>

body{
    margin: 0;
    padding: 0;
    background:url(images/image.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 320px;
    height: 420px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    font-family: Arial, Helvetica, sans-serif;
}
.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #1c8adb;
    color: #fff;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: red;

}
a:link, a:visited {
  background-color: red;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: black;
}
.login-box a

</style>






<?php include('server.php') ?>
<html>
<head>
    <title> Log In </title>  
</head>
    <body>
    <div class="login-box">
    <img src="images/avatar1.png" class="avatar">
        <h1>Log in to continue:</h1>
            <form name="login" method="post" action="login.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login_user" value="Login">
             <p><a href="register.php">Register</a>   
            </form>
    </body>
</html>