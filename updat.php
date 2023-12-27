<html>
<head>
<title> pure health </title>
</head>
<body>
<?php
$db2=mysqli_connect("localhost","root","12345678");
mysqli_select_db($db2,"purehelth");
$ido=$_POST["phnn"];
$pao=$_POST["pasa"]; 
$b2="update patients set pass='$pao' where patient_phone='$ido'" ;
 mysqli_query($db2,$b2);
   header("Location:http://localhost/grd/login.html");
 mysqli_close($db2);
?> 
</body>
</html>