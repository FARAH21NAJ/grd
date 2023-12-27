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
 
 
p{font-size:40px ;text-align:center ;margin-left:550px ; margin-right:540px;
    position:relative;left:370px ; padding-bottom:10px; padding-top:10px ;
   width:500px;
    color:#122853;
    background-color: rgba(255,255,255,0.8);
border-radius:50px;
 
margin-bottom:20px;
    ;}
 
 
    .reset {
              background-color: #315bb0;
              display: inline-block;
              text-align: center;
              border-radius: 12px;
              border: 2px solid rgb(173, 210, 244);
              padding: 14px 110px;
              outline: none;
              color: white;
              cursor: pointer;
              transition: 0.2s;
              margin: 0 10px; /* Adjusted margin */
              margin-top: 20px;
              position: relative;
              left: 68%;
          }
 
 
    table{
        border-collapse: collapse;
        background-color: rgba(255,255,255,0.8);
    width:550px;
   height: 350px;
   position: relative; bottom: 10px;
   right:20%;
 
   
 
    }
    th,td{
        color:#122853;
 
 
    }
 
td{
    text-align:center ;
 
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extracting input values from the form
    $firstName = $_POST['firstna'] ;
    $location = $_POST['location'] ;
    $chosenCenter = $_POST['treat'];
 
    // Handling the uploaded file
    $uploadedFileName = isset($_FILES['fileToUpload']['name']) ? $_FILES['fileToUpload']['name'] : '';
    $targetFile = '';
 
    // Check if a file was uploaded and it is a PDF
    if ($_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $fileExtension = strtolower(pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION));
 
        if ($fileExtension !== 'pdf') {
            echo "Error: Please upload a PDF file.";
            // Handle the error accordingly (display error message, redirect, etc.)
            // You might also want to consider not proceeding with further processing
        } else {
            // File is a PDF, proceed with moving the file
            $targetDirectory = 'uploads/';
            $targetFile = $targetDirectory . basename($uploadedFileName);
            move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile);
        }
    }
 
    // Creating an array with extracted form data
    $formData = array(
        'Name' => $firstName,
        'Location' => $location,
        'Chosen Center' => $chosenCenter,
        'Uploaded File Name' => ($targetFile !== '') ? "<a href='$targetFile' target='_blank'>$uploadedFileName</a>" : "No file"
    );
 
    // Displaying the extracted form data in a table
    echo "<p> <i class='fa-solid fa-calendar-check'></i> Your Appointments</p>";
    echo "<table border='1'>";
    echo "<tr> <th> <i class='fa-solid fa-person'></i> Patient Name</th><th> <i class='fa-solid fa-location-dot'></i> The location </th><th> <i class='fa-regular fa-hospital'></i> The center</th> <th> <i class='fa-solid fa-upload'></i> The File </th></tr>";
    echo "<tr>";
    echo "<td>" . $firstName. "</td>";
    echo "<td>" . $location . "</td>";
    echo "<td>" . $chosenCenter. "</td>";
    echo "<td>" . $formData['Uploaded File Name'] . "</td>";
    echo "</tr>";
    echo "</table>";
}
?>
 
 
 
 <a href="email-form.php"> <button class="reset"> send confirm email </button></a>
 
<a href="appointment.html"> <button class="reset"> Back </button></a>
 
 
 
 
 
</body>
 
</html>