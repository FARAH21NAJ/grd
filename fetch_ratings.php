<?php
// Database connection details
$servername = "localhost"; // Change to your server name if not localhost
$username = "root"; // Change to your MySQL username
$password = "12345678"; // Change to your MySQL password
$dbname = "purehelth"; // Change to your database name
try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement to fetch patient care rating
    $stmt = $conn->prepare("SELECT patient_care_rating FROM patient_reviews");

    // Execute the query
    $stmt->execute();

    // Fetch patient care rating
    $patientCareRating = $stmt->fetchColumn();

    // Return patient care rating as JSON
    echo json_encode(['patient_care_rating' => $patientCareRating]);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage(); // Display any errors
}
$conn = null; // Close the connection
?>