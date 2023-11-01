<!DOCTYPE html>
<!--DOCTYPE html-->
<html >
<head>
    <meta charset="UTF-8">

    <title>Pure Health</title>

    <link rel="shortcut icon" href="logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    
    <link
      rel="stylesheet" href="login.css"  />

       <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<style>

*{
    margin: 0px;
    padding: 0px;
    font-family: poppins;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

a{
    text-decoration: none;
    color:#122853;
}
ul{
    list-style: none;
}

/* width */
::-webkit-scrollbar {
    width: 7px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px rgb(233, 233, 233); 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: rgb(56, 56, 56); 
    border-radius: 10px;
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #1b1b1b; 
  }

body{
    min-height: 700px;
    background-color: #f5f7fb;
   background-image: url(front2.png);
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.navigation{
    display: flex;
    justify-content: space-between;

    align-items: center;
    max-width: 1200px;
    width: 90%;
    margin: 0px auto;
    padding: 30px 0px;
}
.logo{
    color:#122853;
    font-weight: 700;
    font-size: 1.4rem;
}
.logo span{
    background-color: #014dd5;
    color: #ffffff;
    padding: 0px 5px;
    border-radius: 5px;
    font-weight: 600;
    margin-right: 5px;
}
.menu{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: auto;
    margin-left: 40px;
     
}
.menu li a{
    margin: 0px 20px;

    font-weight: 500;
    transition: all ease 0.3s;
}
.menu li a:hover{
    color: #014dd5;
}


p{font-size:40px ;text-align:center ;border-style:solid ; margin-left:520px ; margin-right:540px;
	position:relative;left:380px ; ; padding-bottom:20px; padding-top:20px ; background-color: rgba(255,255,255,0.4);
    color:#122853;
    ;}





    .submit{
		background-color:#315bb0; 
	
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 40px;
	outline:none;
	color: #122853;
	cursor:pointer;
	transition:0.25px;
    position: relative;left:1020px;
bottom:20px

	}



</style>
</head>
<body >
 

    
        
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
  
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$n3=$_POST["n3"];
$n4=$_POST["n4"];
$n5=$_POST["n5"];
$n6=$_POST["n6"];
$n7=$_POST["n7"];
$n8=$_POST["n8"];
$n9=$_POST["n9"];
$n10=$_POST["n10"];
$n11=$_POST["n11"];
$n12=$_POST["n12"];
$sum=0;
if(isset($_POST["ch1"])){
	$sum1=0;
	$sum1=$n1*$_POST["ch1"];
	$sum=$sum+$sum1;
}
 if(isset($_POST["ch2"])){
	 $sum2=0;
	$sum2=$n2*$_POST["ch2"];
	$sum=$sum+$sum2;
} 
if(isset($_POST["ch3"])){
	 $sum3=0;
	$sum3=$n3*$_POST["ch3"];
	$sum=$sum+$sum3;
} 
if(isset($_POST["ch4"])){
	 $sum4=0;
	$sum4=$n4*$_POST["ch4"];
	$sum=$sum+$sum4;
} 
if(isset($_POST["ch5"])){
	 $sum5=0;
	$sum5=$n5*$_POST["ch5"];
	$sum=$sum+$sum5;
} 
if(isset($_POST["ch6"])){
	 $sum6=0;
	$sum6=$n6*$_POST["ch6"];
	$sum=$sum+$sum6;
} 
if(isset($_POST["ch7"])){
	 $sum7=0;
	$sum7=$n7*$_POST["ch7"];
	$sum=$sum+$sum7;
} 
if(isset($_POST["ch8"])){
	 $sum8=0;
	$sum8=$n8*$_POST["ch8"];
	$sum=$sum+$sum8;
}
 if(isset($_POST["ch9"])){
	 $sum9=0;
	$sum9=$n9*$_POST["ch9"];
	$sum=$sum+$sum9;
} 
if(isset($_POST["ch10"])){
	 $sum10=0;
	$sum10=$n10*$_POST["ch10"];
	$sum=$sum+$sum10;
} 
if(isset($_POST["ch11"])){
	 $sum1=0;
	$sum11=$n11*$_POST["ch11"];
	$sum=$sum+$sum11;
} 
if(isset($_POST["ch12"])){
	 $sum12=0;
	$sum12=$n12*$_POST["ch12"];
	$sum=$sum+$sum12;
}
print("<p> your bill = ".$sum."$"."</p>");


?>
<p > Dear Patient:<br>It will take up to 2 days for your order to arrive. We were happy to serve you.</p>

<form method="post" action="log.html">

<input class="submit" type="submit" value="Log out" style="width:5cm">
</form>







</body>

</html>