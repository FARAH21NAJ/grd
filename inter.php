<html>
<head>
<title> pure health</title>
</head>
<body>
<?php

$db=mysqli_connect("localhost","root","12345678");
mysqli_select_db($db,"purehelth");

    $id=$_POST["phone"];
    $password=$_POST["pas"]; 
	
	
$b="SELECT * FROM patients WHERE patient_phone='$id' and pass='$password'";

   $result=mysqli_query($db,$b);
 
   
 if(mysqli_num_rows($result)>0) {
	 header("Location:appointment.html");
	 }
else{
//header("Location:http://localhost/page1.html");	
print("<script type='text/javascript'>");
print("alert('Invalid Password or ID')");  
echo ("</script>");

}

mysqli_close($db);
?>

</body>
</html>




