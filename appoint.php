<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Health</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="appoint.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <style>
        table {
            width: 420px;
            background-color: rgba(255, 255, 255, 0.6);
            margin: 20px auto; /* Center the table */
            border-collapse: collapse; /* Merge borders */
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
        }

        .submit {
            background-color: #315bb0;
            display: block;
            margin: 20px auto; /* Center the button */
            text-align: center;
            border-radius: 12px;
            border: 2px solid rgb(173, 210, 244);
            padding: 14px 50px; /* Adjust padding */
            outline: none;
            color: #122853;
            cursor: pointer;
        }

        caption {
            color: #122853;
            font-size: 20px;
            padding-bottom: 10px;
        }
                /* Additional styles for the PHP output */
                .output-container {
            width: 80%;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.8);
            border: solid 3px #315bb0;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
        }

        .output-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .output-table th, .output-table td {
            border: 1px solid #000;
            padding: 8px;
        }

    </style>
</head>
<body>
    <nav class="navigation">
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <a href="" class="logo"><span>pure</span>health</a><img src="logo.png" alt="" width="80" height="80">
        <ul class="menu">
            <li><a href="log.html" style="font-weight: bolder;">Home</a></li>
            <li><a href="log.html">Find center</a></li>
            <li><a href="log.html">Our Services</a></li>
            <li><a href="log.html">Contact us</a></li>
            <li><a href="log.html">Location</a></li>
            <li><a href="log.html">Reviews</a></li>
        </ul>
    </nav>
    <div class="output-container">
    <?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "purehelth";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstName = $_POST['firstna'];
$location = $_POST['location'];
$chosenCenter = $_POST['treat'];

// Upload file
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["uploadBtn"]["name"]);
move_uploaded_file($_FILES["uploadBtn"]["tmp_name"], $targetFile);

$uploadedFile = $targetFile;

// Insert data into the database
$sql = "INSERT INTO Appointments (firstName, location, chosenCenter, uploadedFile) VALUES ('$firstName', '$location', '$chosenCenter', '$uploadedFile')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

    <form method="post" action="log.html">
        <input class="submit" type="submit" value="Log out">
    </form>
</body>
</html>