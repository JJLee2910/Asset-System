<h1> Search <h1>
    <a href="reports2.php">Back To show Data</a>

<script>
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
</script>

<button onclick="printDiv('printMe')">PRINT RECORD</button>

<body>
    <div id="printMe">
<table>
  <tr>
    <th>Asset_number</th> 
    <th>Type</th>
    <th>Cost</th>
    <th>Student_ID</th>
    <th>Name</th>
    <th>Phone_Number</th>
    <th>Coordinator_ID</th>
    <th>Coordinator_Name</th>
    <th>Coordinator_Class</th>
    <th>Class</th>s
  </tr>
  
<?php
    
    include'connect.php';

        $q = mysqli_real_escape_string($con,$_POST['q']);
        $sql = "SELECT * FROM registration WHERE Asset_number='$q' OR Type='q' OR Cost='q' OR Student_ID='q' OR Name='q' OR Phone_Number='q' OR Coordinator_ID='q' OR Coordinator_Name='q'OR Coordinator_Class='q'OR Class='q'";
        $con = mysqli_connect("localhost", "root","","damaged class assets registration");
   
            if(mysqli_connect_errno())
        {
            echo "Failed to connect: " . mysqli_connect_error();
            }

        $result = mysqli_query($con , $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0)   
        {
        while ($row = mysqli_fetch_assoc($result)) 
        {

?>
        <tr>
        <td><?php echo $row['Asset_number']; ?></td>
        <td><?php echo $row['Type'];?></td>
        <td><?php echo $row['Cost'];?></td>
        <td><?php echo $row['Student_ID'];?></td>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Phone_Number'];?></td>
        <td><?php echo $row['Coordinator_ID'];?></td>
        <td><?php echo $row['Coordinator_Name'];?></td>
        <td><?php echo $row['Coordinator_Class'];?></td>
        <td><?php echo $row['Class'];?></td>
</div>
            
<?php 
}
    } 
    else 
    {
        echo "<p>No results found.</p>
        <script type='text/javascript'>alert('No results found.')</script>" ;
    }
    
?>