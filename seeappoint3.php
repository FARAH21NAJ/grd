<html>
<head>
<title> pure health</title>
<meta charset="UTF-8">

<title>Pure Health</title>

<link rel="shortcut icon" href="logo.png">

<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link
  rel="stylesheet" href="appoint.css"  />

   <!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


<style>

    table{
        height:160px;
width: 420px;
background-color: rgba(255,255,255,0.6);
position: relative;left:900px;
bottom:150px

    }

    .submit{
		background-color:#315bb0; 
	
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 110px;
	outline:none;
	color: #122853;
	cursor:pointer;
	transition:0.25px;
    position: relative;left:980px;
bottom:300px

	}
caption{    color:#122853;}

    th{    color:#122853;}

</style>

</head>
<body>


        
<nav class="navigation">
                <label for="menu-btn" class="menu-icon">
                <span class="nav-icon"></span>
            </label>
           
            <a href="" class="logo"><span>pure</span>health</a><img src="logo.png" alt="" width="80" height="80">
            
            
     
    <ul class="menu">
        <li><a href="log.html"; style="font-weight: bolder;">Home  </a></li>
        <li><a href="log.html";>Find center </a></li>
        <li><a href="log.html">Our Services</a></li>
        <li><a href="log.html"> Contact us </a></li>
        <li><a href="log.html"> Location </a></li>
        <li><a href="log.html"> Reviws</a></li> </ul>


    </nav>


<?php










extract($_POST);


print("<table border=1>"); 
print("<caption style='font-size:20px;padding-bottom: 10px;'> <b>Your Appointment </b>  </caption>"); 

print("<tr>");
print("<th> Name </th>");
print("<th> $firstna</th>");
print("</tr>");

print("<tr>");
print("<th> Session location </th>");
print("<th> $location </th>");
print("</tr>");


print("<tr>");
print("<th> Center name </th>");
print("<th> $treat </th>");
print("</tr>");

print("<tr>");
print("<th> Appointment date </th>");
print("<th> $appoint </th>");
print("</tr>");




print("<tr>");
print("<th> Appointment time </th>");
print("<th> $apptime </th>");
print("</tr>");
print("</table>");



/*

$db1=mysqli_connect("localhost","root","12345678");

mysqli_select_db($db1,"purehelth");


$answer = $_POST['treat'];  
if ($answer == "Creativity") {  

    $b1="insert into physiotherapy (appiontmen) values ($appoint) where physiotherapy_phone='0771111111'";
} 
         mysqli_query($db1,$b1);

 mysqli_close($db1);
*/

?>


<form method="post" action="cenapp3.php">

<input class="submit seeAppointment" type="submit" value="Log out">

</form>

</body>
</html>
