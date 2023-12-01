<?php

// Establish a database connection (modify with your database credentials)
$db1 = mysqli_connect("localhost", "root", "12345678");

if (!$db1) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($db1, "purehelth");

// Function to check if a slot is booked
function checkIfSlotBooked($day, $timeSlot) {
    global $db1;
    $sql = "SELECT * FROM app_book1 WHERE day = $day AND time_slot = '$timeSlot'";
    $result = mysqli_query($db1, $sql);
    return mysqli_num_rows($result) > 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
        $patientName = $_POST['patientName'];
        $selectedDay = $_POST['selectedDay'];
        $selectedTime = $_POST['selectedTime'];
        
        // Check if payment is made
        $paymentStatus = isset($_POST['paymentMade']) && $_POST['paymentMade'] === 'true' ? 1 : 0;

        // Set the color based on payment status
       // Set the color based on payment status
// Set the color based on payment status
$color = $paymentStatus ? 'red' : 'orange';

$sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status, color) 
        VALUES ('$patientName', $selectedDay, '$selectedTime', $paymentStatus, '$color')
        ON DUPLICATE KEY UPDATE payment_status = $paymentStatus, color = '$color'";



        if (mysqli_query($db1, $sql)) {
            // Return payment status and color in the response
            echo json_encode(['success' => true, 'paymentStatus' => $paymentStatus, 'color' => $color]);
        } else {
            // Return an error message
            echo json_encode(['success' => false, 'error' => mysqli_error($db1)]);
        }
    }
}

// Close the database connection
mysqli_close($db1);

?>

<script>
// Additional JavaScript code can be added here if needed
</script>
