<?php
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "purehelth";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST["phone"];
    $password = $_POST["pas"];

    $query = "SELECT * FROM patients WHERE patient_phone='$phone' AND pass='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['logged_in_patient'] = $phone; // Store patient's phone in session
        $_SESSION['patient_name'] = $row['fname'] . " " . $row['lname']; // Store patient's name in session
        header("Location: patient.php");
        exit();
    } else {
        echo "Invalid phone number or password. Please try again.";
    }
}
?>






