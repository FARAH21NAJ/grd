<html>
<head>
<title> pure health</title>
</head>
<body>
<?php

$db=mysqli_connect("localhost","root","12345678");
mysqli_select_db($db,"purehelth");

	
$b=" SELECT appiontmen FROM physiotherapy where physiotherapy_phone ='0771111111'";

   $result=mysqli_query($db,$b);
 
   



mysqli_close($db);
?>

</body>
</html>
