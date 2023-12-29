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
	position:relative;left:47px ; bottom:-15px; padding-bottom:10px; padding-top:10px ;
   width:500px;
    color:#122853;
    background-color: rgba(255,255,255,0.8);
border-radius:50px;

margin-bottom:20px;
    ;}


    .button-container {
  text-align: center; /* Center align the buttons */
  margin-top: 20px; /* Adjust the top margin if needed */
}

.reset, .rese {
  background-color: #122853;
  display: inline-block;
  text-align: center;
  border-radius: 12px;
  border: 2px solid rgb(173, 210, 244);
  padding: 14px 40px; /* Adjusted padding for better display */
  outline: none;
  color: white;
  cursor: pointer;
  transition: 0.2s;
  margin: 0 10px; /* Adjusted margin */
}


          table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            position: relative;
              left: 3%;
              color:#122853;
             

        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        tr:last-child td {
            border-bottom: none;
        }

        td:last-child {
            text-align: left;
        }

        td a {
            color: #122853;
            text-decoration: underline;
        }

        /* Modal styles */
.modal {
  display: none; /* Hidden by default */
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
  
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 600px; /* Set a maximum width for the modal content */

}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Form styles */
.box {
  text-align: center;
  
}

.form-box {
  margin-bottom: 20px;
  
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  color: #122853;
}

input[type="email"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

button[type="submit"] {
  background-color: #122853;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;
}

button[type="submit"]:hover {
  background-color: #0e1c3b;
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

// Establish database connection (Replace DB_HOST, DB_USER, DB_PASS, and DB_NAME with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "purehelth";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extracting input values from the form
    $firstName = $_POST['firstna'];
    $location = $_POST['location'];
    $chosenCenter = $_POST['treat'];
    $phoneNumber = $_POST['phon'];

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
    // Insert into the database
    $sql = "INSERT INTO appointments (firstname, location, chosen_center, file_name, 	patient_ph) VALUES ('$firstName', '$location', '$chosenCenter', '$uploadedFileName', '$phoneNumber')";

    if ($conn->query($sql) === TRUE) {
        // Displaying the extracted form data in a table
        echo "<p> <i class='fa-solid fa-calendar-check'></i> Your Appointments</p>";
        echo "<table border='1'>";
        echo "<tr> <th> <i class='fa-solid fa-person'></i> Patient Name</th><th> <i class='fa-solid fa-location-dot'></i> The location </th><th> <i class='fa-regular fa-hospital'></i> The center</th> <th> <i class='fa-solid fa-upload'></i> The File </th></tr>";
        echo "<tr>";
        echo "<td>" . $firstName. "</td>";
        echo "<td>" . $location . "</td>";
        echo "<td>" . $chosenCenter. "</td>";
        echo "<td>" . "<a href='$targetFile' target='_blank'>$uploadedFileName</a>" . "</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>


<div class="button-container">

<a href="patient.php"> <button class="reset" style="width:6.5cm"> Back </button></a>

<button class="rese"  id="showMessageBox" > send confirmation email </button>
</div>

<div id="messageBox" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="box">
      <form method="post" action="send-email.php">
        <div class="form-box">
          <label for="user_email" style="color:#122853;font-weight:bold;">Email:</label>
          <input type="email" id="user_email" name="user_email" placeholder="Enter your Email" required> <br> <br>
          <button type="submit"> Send Email</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

// Get the modal element
var modal = document.getElementById('messageBox');

// Get the button that opens the modal
var btn = document.getElementById('showMessageBox');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close')[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = 'block';
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = 'none';
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}







</script>
</body>

</html>