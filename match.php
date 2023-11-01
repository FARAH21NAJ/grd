<html>
<head>
<title> pure health </title>
<body>
<?php


$db1=mysqli_connect("localhost","root","12345678");

mysqli_select_db($db1,"purehelth");


$phonee=$_POST["telph"];
$past=$_POST["pasrod"]; 

$b1="select * from physiotherapy where 	physiotherapy_phone=$phonee and password=$past and age=35";
         $result=mysqli_query($db1,$b1);

         
$b2="select * from physiotherapy where 	physiotherapy_phone=$phonee and password=$past and age=30";
$result2=mysqli_query($db1,$b2);

    
$b3="select * from physiotherapy where 	physiotherapy_phone=$phonee and password=$past and age=32";
$result3=mysqli_query($db1,$b3);

    
$b4="select * from physiotherapy where 	physiotherapy_phone=$phonee and password=$past and age=34";
$result4=mysqli_query($db1,$b4);




		 
 if(mysqli_num_rows($result)>0) {
    header("Location:http://localhost/grd/ph1.html");
    }
	 
    if(mysqli_num_rows($result2)>0) {
        header("Location:http://localhost/grd/ph2.html");
        }

        if(mysqli_num_rows($result3)>0) {
            header("Location:http://localhost/grd/ph3.html");
            }
    

            if(mysqli_num_rows($result4)>0) {
                header("Location:http://localhost/grd/ph4.html");
                }
        
        





else{
//header("Location:http://localhost/page1.html");	
print("<script type='text/javascript'>");
print("alert('Invalid Password or ID')");  
echo ("</script>");

}



   


 mysqli_close($db1);
?>
</body>
</html>