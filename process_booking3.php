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
    $sql = "SELECT * FROM app_book3 WHERE day = $day AND time_slot = '$timeSlot'";
    $result = mysqli_query($db1, $sql);
    return mysqli_num_rows($result) > 0;
}

// Function to delete rows with the same time_slot and day values and orange color
function deleteRowsWithOrangeColor($day, $timeSlot) {
    global $db1;
    $sql = "DELETE FROM app_book3 WHERE day = $day AND time_slot = '$timeSlot' AND color = 'orange'";
    mysqli_query($db1, $sql);
}

// Function to update or insert a record
// Function to update or insert a record
function updateOrInsertRecord($selectedDay, $selectedTime, $paymentStatus, $color, $userName ) {
    global $db1;

    // Check if there is a record with the same time_slot and day values and orange color
    deleteRowsWithOrangeColor($selectedDay, $selectedTime);

    $dates = [];
    for ($i = 0; $i < 14; $i++) {
        $date = date('Y-m-d', strtotime("+$i days"));
        $dates[] = $date;
    }

    // Use the current date for the selected day
    $selectedDate = $dates[$selectedDay];

    // Update the existing record if it exists, otherwise insert a new record
   $sql = "INSERT INTO app_book3 (day, time_slot, payment_status, color, date, patient_name) 
            VALUES ($selectedDay, '$selectedTime', $paymentStatus, '$color', '$selectedDate', '$userName')
            ON DUPLICATE KEY UPDATE payment_status = $paymentStatus, color = '$color', date = '$selectedDate', patient_name = '$userName'";

    if (mysqli_query($db1, $sql)) {
        // Return payment status, color, and date in the response
        echo json_encode(['success' => true, 'paymentStatus' => $paymentStatus, 'color' => $color, 'date' => $selectedDate]);
    } else {
        // Return an error message
        echo json_encode(['success' => false, 'error' => mysqli_error($db1)]);
    }
}

// Function to cancel all appointments for the current month
function cancelAppointmentsForCurrentMonth() {
    global $db1;

    // Get the current month and year
    $currentMonth = date('n');
    $currentYear = date('Y');

    // Check if it's the first day of a new month
    if (date('j') == 1) {
        // Cancel all appointments for the current month
        $sql = "DELETE FROM app_book3 WHERE MONTH(CURDATE()) = $currentMonth AND YEAR(CURDATE()) = $currentYear";

        if (mysqli_query($db1, $sql)) {
            echo "All appointments for the current month have been canceled.";
        } else {
            echo "Error canceling appointments: " . mysqli_error($db1);
        }
    }
}

// Function to cancel all appointments for the current week
function cancelAppointmentsForCurrentWeek() {
    global $db1;

    // Get the current week
    $currentWeek = date('W');

    // Check if it's the beginning of a new week
    if (date('N') == 1) { // Assuming Monday is the first day of the week
        // Cancel all appointments for the current week
        $sql = "DELETE FROM app_book3 WHERE WEEK(CURDATE()) = $currentWeek";

        if (mysqli_query($db1, $sql)) {
            echo "All appointments for the current week have been canceled.";
        } else {
            echo "Error canceling appointments: " . mysqli_error($db1);
        }
    }
}

// Call the function to cancel appointments for the current month and week


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {

        $selectedDay = $_POST['selectedDay'];
        $selectedTime = $_POST['selectedTime'];
        $userName = $_POST['userName'];
        // Check if payment is made
        $paymentStatus = isset($_POST['paymentMade']) && $_POST['paymentMade'] === 'true' ? 1 : 0;

        // Set the color based on payment status
        $color = $paymentStatus ? 'red' : 'orange';

        // Update or insert the record with the appropriate checks
        updateOrInsertRecord($selectedDay, $selectedTime, $paymentStatus, $color, $userName );
    }
}

// Close the database connection
mysqli_close($db1);
?>