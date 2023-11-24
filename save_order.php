<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your database (Replace these variables with your actual database credentials)
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

    // Get the form data
    $patientName = $_POST["patientName"];
    $totalBill = $_POST["totalBill"];
    $toolIds = $_POST["tool_ids"];

    foreach ($toolIds as $toolId) {
        // Prepare and execute the SQL statement to insert into the orders table
        $sql = "INSERT INTO orders (patient_name, total_amount, tool_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdi", $patientName, $totalBill, $toolId);
        $stmt->execute();
    }
    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        // Return a success message
        echo "Order placed successfully!";
    } else {
        // Return an error message
        echo "Error placing order: " . $conn->error;
    }
    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request!";
}
?>

