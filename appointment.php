<!DOCTYPE html>
<html>
<head>
<title>Pure Health</title>
<meta charset="utf-8">


<link rel="shortcut icon" href="logo.png">

<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

<link
  rel="stylesheet" href="appointment.css"  />

   <!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <style>
   *{
   margin:0;
   padding:0;
    }
	body{

		background-image: url(front2.png);
    background-size: cover; 
	
	margin-top:40px;
	}
	.regform{
	width:800px;
	background-color:#315bb0; 
	margin:auto;
	color: #122853;
	padding:10px 0px 10px 0px;
	text-align:center;
	border-radius:15px 15px  0px 0px;
	}
	
	.main{
	background-color: rgba(255,255,255,0.8);
	width:800px;
   border: solid  3px #315bb0; 
   height: 700px;
	margin:auto;
	}
	
	form{
	padding:10px;
	}
	
	#name{
	width:100%;
	height:100px;
	}
	.name{
	margin-left:25px;
	margin-top:30px;
	width:125px;
	color: #122853;
	font-size:18px;
	font-weight:700;

	
	}
	.firstname{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;

	}
	
	.lastname{
    position:relative;
	left:417px;
	top:-80px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}
	.firstlabel{
	position:relative;
	color:#E5E5E5;
	text-transform:capitalize;
	font-size:14px;
	left:203px;
	top:-45px;
	}
	.lastlabel{
	position:relative;
	color:#E5E5E5;
	text-transform:capitalize;
	font-size:14px;
	left:170px;
	top:-45px;
	}
	.age{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	
	}
	
	
	.password{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}
	.phone{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}
	
	.option{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}
	
	#gen{
	margin-left:25px;
	
	}
	.radio{
	display:inline-block;
	padding-right:70px;
	font-size:20px;
	margin-left:25px;
	margin-top:15px;
	color: #122853;
	}
	
	.radio input{
	width:15x;
	height:15px;
	border-radius:50%;
	cursor:pointer;
	outline:none;
}
	.rad{
	display:inline-block;
	padding-right:70px;
	font-size:20px;
	margin-left:25px;
	margin-top:15px;
	color: #122853;
	}
	.rad input{
	width:15x;
	height:15px;
	border-radius:50%;
	cursor:pointer;
	outline:none;
}
    .check{
		display:inline-block;
	padding-right:70px;
	font-size:20px;
	margin-left:25px;
	margin-top:15px;
	color: #122853;
	}
	.check input{
	width:15x;
	height:15px;
	cursor:pointer;
	outline:none;
	}
	.submit{
		background-color:#122853;
              color: white;
	
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 110px;
	outline:none;

	cursor:pointer;
	transition:0.25px;
	}
	.reset{
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 110px;
	outline:none;
    background-color:#122853;
              color: white;
	cursor:pointer;
	transition:0.25px;

position: relative; 
bottom: 70px;
left: 330px;

	
	}  
    .date{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}

	
.menu li a:hover{
   
	color: #014dd5;
	
    
}




.sub{
	
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
	}






	.shet{	
		display: none;
	margin:20px 0px 0px 5px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 110px;
	outline:none;
	color: #122853;
	cursor:pointer;
	transition:0.25px;

	position: relative; left: 30px;


	}



	.submit:hover{
	background-color:#5390F5;}
	.reset:hover{


	background-color:#5390F5;}



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
      <!--<li><a href="#testimonials"> Location </a></li>-->
	  <li><a href="logtool.html"> Tool </a></li>
<li><a href="log.html"> Reviws</a></li> </ul>
</nav>




<div class="regform"><h1>Appointment</h1></div>
<div class="main" >
<form method="POST" action="appoints.php"  enctype="multipart/form-data" >


<input type="hidden" value="<?php echo htmlspecialchars($_GET['phone'], ENT_QUOTES); ?>" name="phon">


<div id="name" style="position: relative; top:20px">
<h2 class="name" >The Name</h2> 
<label>
<input class="firstname" type="text" id="patientName" name="firstna"required ><br>
</div>


<h2 class="name" style="display: block;">The location</h2>
<label class="rad">
<input type="radio" name="location" value="our clinc"> Our Clinic
</label>
<label class="rad">
<input type="radio" name="location" value="your house"> Your House
</label>
<div style="display: block;">
<h2 class="name">Chose center</h2>
<div class="check">
<label>
<input type="radio" name="treat" value= "Creativity " style="margin-left: 10px;"> 
<img class="m" src="cen1.png" height="10%" width="10%">
<label>
<input type="radio" name="treat" value=" Mazaya " style="margin-left: 30px;">
<img class="m" src="cen2.png" height="10%" width="10%">
</label>
<label>
<input type="radio" name="treat" value="Tlaa"  style="margin-left: 30px;">
<img class="m" src="cen3.png" height="10%" width="10%">
<label>
<input type="radio" name="treat" value="Al Shorouq "  style="margin-left: 30px;">
<img class="m" src="cen 4.png" height="10%" width="10%">
</label></div></div>
<div class="sub">
    <label for="uploadBtn" style="padding-right: 90px;"><i class="fa-solid fa-upload"></i> Upload File (PDF only)</label>
	<br>
	<input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf">
</div>
<br>
<label> To select data and time 



<a href="javascript:void(0);" onclick="passNameToCenapp1()">
<input id="submitButton" class="shet" type="button"   value="Creativity"  >
</a>
</label>

<a href="javascript:void(0);" onclick="passNameToCenapp2()">
    <input id="submitButton1" class="shet" type="button" value="Mazaya">
</a>

<!-- Link to cenapp3.php -->
<a href="javascript:void(0);" onclick="passNameToCenapp3()">
    <input id="submitButton2" class="shet" type="button" value="Tla'a Al Ali">
</a>

<!-- Link to cenapp4.php -->
<a href="javascript:void(0);" onclick="passNameToCenapp4()">
    <input id="submitButton3" class="shet" type="button" value="Al Shorouq">
</a>
<br>
<input class="submit" type="submit" value="Book">
<input class="reset" type="reset" value="Cancel">

</form>
</div>


<script>
function passNameToCenapp1() {
    var patientName = document.getElementById('patientName').value;
    var encodedName = encodeURIComponent(patientName);
    var url = 'cenapp1.php?patient_name=' + encodedName;
    window.location.href = url;
}


function passNameToCenapp2() {
    var patientName = document.getElementById('patientName').value;
    var encodedName = encodeURIComponent(patientName);
    var url = 'cenapp2.php?patient_name=' + encodedName;
    window.location.href = url;
}




function passNameToCenapp3() {
    var patientName = document.getElementById('patientName').value;
    var encodedName = encodeURIComponent(patientName);
    var url = 'cenapp3.php?patient_name=' + encodedName;
    window.location.href = url;
}

function passNameToCenapp4() {
    var patientName = document.getElementById('patientName').value;
    var encodedName = encodeURIComponent(patientName);
    var url = 'cenapp4.php?patient_name=' + encodedName;
    window.location.href = url;
}

</script>


<!-- Inside appointments.php -->




<script src="tes.js"></script>
</body>
</html>