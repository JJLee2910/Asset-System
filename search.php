<?php

session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query =  "SELECT * FROM `registration` WHERE CONCAT(`Asset_Number`, `Type`, `Cost`,'Student_ID','Name','Class','Phone_Number', 'Coordinator_ID','Coordinator_Name','Coordinator_Class') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `registration`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include('connect.php');
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>


<html>
    <head>
        <title>D.C.A SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 2.5px solid #e1edff;
                padding: 7px 17px;
                text-align: center;
                font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;

            }

            .searchbox {
                position: center;
                text-align: center;
                margin-left: 40px;
            }

            .button{
                font-size:10px;
               text-decoration:none;
               color:#FFF;
               border:#FFF 2px solid;
               padding:10px 20px;
               border-radius:10px;
               position:center;
               background:darkgrey;
               margin-right:0px;
               margin-left: 40px;
            
               
            }

            .button:hover{
               background:#3CF;
               color:#fff;
                
            }


            h1 {
            text-align: center;
            text-transform: uppercase;
            font-size: 30px;
            margin-left: 40px;
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
        margin-left: 40px;
        bottom: auto;
        background-color: darkgrey;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
       }

       .button1:hover{
       background:#3CF;
       color:#fff;
       }

     

        </style>
    </head>
    <body>
        <h1>SEARCH</h1>
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search here..." class="searchbox"><br><br>
            <input type="submit" name="search" value="FILTER/RESET" class="button"><br><br>
            
            <table>
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

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Asset_number'];?></td>
                    <td><?php echo $row['Type'];?></td>
                    <td><?php echo $row['Cost'];?></td>
                    <td><?php echo $row['Student_ID'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Phone_Number'];?></td>
                    <td><?php echo $row['Coordinator_ID'];?></td>
                    <td><?php echo $row['Coordinator_Name'];?></td>
                    <td><?php echo $row['Coordinator_Class'];?></td>
                    <td><?php echo $row['Class'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

        
            <a href="menu.php" class="button1">Main Menu</a>
        
        
    </body>
</html>