<?php
// Establish a connection to your database (MySQL, for example)
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

// Handle form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patientName = $_POST["patientName"];
  $patientCareRating = $_POST["patientCare"];
  $rehabilitationRating = $_POST["rehabilitation"];
  $exercise=$_POST["exercise"];
$mobility=$_POST["mobility"];
$communication=$_POST["communication"];
$documentation=$_POST["documentation"];
  // Retrieve other skill ratings similarly

  // Insert data into the database
  $sql = "INSERT INTO patient_reviews (patient_name,patient_care_rating, rehabilitation_rating ,exercise_rating,mobility_rating,communication_rating,documentation_rating ) VALUES ('$patientName','$patientCareRating', '$rehabilitationRating' ,' $exercise','$mobility','$communication',' $documentation')";
  // Adjust the SQL query to include other skill ratings and respective columns in the database

  if ($conn->query($sql) === TRUE) {
    echo "Reviews saved successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
