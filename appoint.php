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
// Database connection
$db = mysqli_connect("localhost", "root", "12345678");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($db, "purehelth");

extract($_POST);
date_default_timezone_set('Asia/Amman');
// Get the current date and time
$currentDate = date("Y-m-d");
$currentTime = date("H:i");

// Calculate the date one day after the current date
$nextDay = date("Y-m-d", strtotime($currentDate . " +1 day"));

if ($appoint >= $nextDay) {
    // Check for duplicate appointments
    $checkQuery = "SELECT * FROM appointment WHERE date = '$appoint' AND time = '$apptime'";
    $checkResult = mysqli_query($db, $checkQuery);
    
    if (mysqli_num_rows($checkResult) > 0) {
        // Duplicate appointment found
        echo "The selected appointment date and time are already booked by another patient. Please choose a different date and time.";
    } else {
        // The appointment date is valid, so you can proceed to insert it into the database
        $insertQuery = "INSERT INTO appointment (name, location, center, date, time) VALUES ('$firstna', '$location', '$treat', '$appoint', '$apptime')";
        if (mysqli_query($db, $insertQuery)) {
            echo "<table>";
            echo "<caption>Your Appointment</caption>";

            echo "<tr>";
            echo "<th>Name</th>";
            echo "<td>$firstna</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Session location</th>";
            echo "<td>$location</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Center name</th>";
            echo "<td>$treat</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Appointment date</th>";
            echo "<td>$appoint</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<th>Appointment time</th>";
            echo "<td>$apptime</td>";
            echo "</tr>";

            echo "</table>";
        } else {
            echo "Error: " . mysqli_error($db);
        }
    }
} else {
    // The appointment date is not one day after the current date
    echo "Invalid appointment date. Please choose a date one day after the current day.";
}

// Close the database connection
mysqli_close($db);
?>

    <form method="post" action="log.html">
        <input class="submit" type="submit" value="Log out">
    </form>
</body>
</html>