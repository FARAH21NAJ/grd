<html>
<head>
<title> pure health </title>
<body>
<?php


$db1=mysqli_connect("localhost","root","12345678");

mysqli_select_db($db1,"purehelth");


$phone=$_POST["phon"];
$city=$_POST["pasd"];


$b1="insert into tool (phone,city) values('$phone','$city')";



         mysqli_query($db1,$b1);
		 
   header("Location:http://localhost/grd/tools.html");

   


 mysqli_close($db1);
?>
</body>
</html>