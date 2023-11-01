<html>
<head>
<title> pure health </title>
<body>
<?php


$db1=mysqli_connect("localhost","root","12345678");

mysqli_select_db($db1,"purehelth");


$phonee=$_POST["phnum"];
$dato=$_POST["datee"];
$ff=$_POST["fname"];
$ll=$_POST["lname"];
$gender=$_POST["gen"];
$age=$_POST["age1"];
$snn=$_POST["snn1"];
$past=$_POST["paso"]; 


$b1="insert into patients (patient_phone,	DateBirth, fname,	lname,	gender,	age, snn, pass) values('$phonee','$dato','$ff','$ll','$gender','$age','$snn','$past')";



         mysqli_query($db1,$b1);
		 
   header("Location:http://localhost/grd/login.html");

   


 mysqli_close($db1);
?>
</body>
</html>