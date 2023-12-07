<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the rating from the form
    $rating = $_POST['rating'];
    $patientName = $_POST["patientName"];

    // Store the rating in your database (You'll need to replace this with your database connection and query)
    // Example:
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

    // Insert the rating into your database table (replace 'ratings' and 'rating_value' with your table and column names)
     $sql = "INSERT INTO ratings2 (patient_name,rating_value) VALUES ('$patientName','$rating')";

     if ($conn->query($sql) === TRUE) {
        // Return success message as JSON
        $response = array("status" => "success", "message" => "Rating submitted successfully");
        echo json_encode($response);
    } else {
        // Return error message as JSON
        $response = array("status" => "error", "message" => "Error: " . $sql . "<br>" . $conn->error);
        echo json_encode($response);
    }

    // Close the connection
    $conn->close();
}
?>