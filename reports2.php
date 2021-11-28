<?php
include("connect.php");

session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

$sql = 'SELECT * 
       FROM registration';
    
$query = mysqli_query($con, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($con));
}


?>


<html>
<head>
  <title>D.C.A REPORTS</title>
  <style type="text/css">
    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      background-size:cover;
            background-position:center;
            display:flex;
            flex-direction:column;
           justify-content:center;
           align-items:center;
           text-align:center;
           padding:0 20px;
           background-image: url(images/image1.jpg);
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 30px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
      text-align: center;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
      background-color: #f4fbff;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align:center ;
    }
    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

 .button {
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
        display:inline-block;
       }

       .button:hover{
       background:#3CF;
       color:#fff;
       }

.button1 {
        font-size:18px;
        text-decoration:none;
        color:#FFF;
        border:#FFF 2px solid;
        padding:10px 20px;
        border-radius:10px;
        margin-top:0px;
        margin-bottom:15px;
        bottom: auto;
        background-color: darkgrey;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        display:inline-block;
       }

       .button1:hover{
       background:#3CF;
       color:#fff;
       }


    


    
  </style>
</head>
<body>
  <h1>Reports of Damaged Class Assets </h1>
  <br>
  <br>
   <form action="search.php" method="GET">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="text" name="q" autocomplete="off" required="required" placeholder="Search asset number">
  <input type="submit" value="Search">
</form>
  
  <table class="data-table">
    <caption class="title"></caption>
    <thead>
      <tr>
        <th>Asset Number</th>
        <th>Type</th>
        <th>Cost</th>
        <th>Student ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Coordinator ID</th>
        <th>Coordinator Name</th>
        <th>Coordinator Class</th>
        <th>Class</th>
     
      </tr>
    </thead>
    <tbody>
    <?php
    while($row = mysqli_fetch_array($query))
    {
      echo '<tr>
          <td>'.$row['Asset_number'].'</td>
          <td>'.$row['Type'].'</td>
          <td>'.$row['Cost'].'</td>
          <td>'.$row['Student_ID'].'</td>
          <td>'.$row['Name'].'</td>
          <td>'.$row['Phone_Number'].'</td>
          <td>'.$row['Coordinator_ID'].'</td>
          <td>'.$row['Coordinator_Name'].'</td>
          <td>'.$row['Coordinator_Class'].'</td>
          <td>'.$row['Class'].'</td>
          <td><a href ="delete.php?Asset_number='.$row['Asset_number'].'">Delete</a> <br> <a href="editform.php?Asset_number='.$row['Asset_number'].'">Edit</a></td> 



        </tr>';
    }
    ?>

    </tbody>
  </table>
  
  
   <a href="menu.php" class="button">Main Menu</a>
   <button onclick="myFunction()"class="button1">Print Report</button>
   <script>
     function myFunction() {
     window.print();
     }
     </script>
  
  
  
</body>
</html>