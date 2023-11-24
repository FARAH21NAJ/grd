<html>
<head>
<title> pure health </title>
<body>
<?php
 
 
$db1=mysqli_connect("localhost","root","12345678");
 
mysqli_select_db($db1,"purehelth");
 
 
 
    // Get data from the form
    $patientName = $_POST['patientName'];
    $totalBill = $_POST['totalBill'];
    $toolId = $_POST['tool_id'];
 
 
    // Prepare and execute SQL query to insert data into the 'orders' table
    $sql = "INSERT INTO orders (patient_name, total_amount, tool_id) VALUES ('$patientName',  '$totalBill','$toolId')";
 
 
 
 
    mysqli_query($db1,$sql);
 
 
    header("Location:http://localhost/grd/tools.html");
    alert('Order placed successfully!');
 
 
 
 mysqli_close($db1);
    ?>
    </body>
    </html>
