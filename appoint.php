<!DOCTYPE html>
<html>
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
        style>

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

        table {
            border-collapse: collapse;
            width: 30%;
            margin-top: 20px;
            
            position: relative; bottom: 60px;
        right:260px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
  
            color:#122853;
        }
        th {
            background-color: #f2f2f2;
        }

        td{
    text-align:center ;

}


        
h2{font-size:30px ;text-align:center ;margin-left:550px ; margin-right:540px;
	position:relative;left:380px ; padding-bottom:10px; padding-top:10px ;
    color:#122853;
    ;}


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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['firstna'];
    $location = $_POST['location'];
    $center = $_POST['treat'];

    echo "<h2>Appointment Details:</h2>";

   

    echo "<table>";
    echo "<tr><th>Patient Name</th><th>The location </th><th>The center</th></tr>";

    echo "<tr>";
    echo "<td>" . $name . "</td>";
    echo "<td>" . $location . "</td>";
    echo "<td>" . $center. "</td>";
    echo "</tr>";

}
?>

</body>
</html>
