<?php
// Replace with your database connection details
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

// Retrieve ratings for each skill from the database
$sql = "SELECT patient_care_rating, rehabilitation_rating, exercise_rating, mobility_rating, communication_rating, documentation_rating FROM patient_reviews3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Initialize variables to calculate total ratings for each skill
    $totalCare = 0;
    $totalRehabilitation = 0;
    $totalExercise = 0;
    $totalMobility = 0;
    $totalCommunication = 0;
    $totalDocumentation = 0;
    $rowCount = $result->num_rows;

    // Calculate total ratings for each skill
    while ($row = $result->fetch_assoc()) {
        $totalCare += $row['patient_care_rating'];
        $totalRehabilitation += $row['rehabilitation_rating'];
        $totalExercise += $row['exercise_rating'];
        $totalMobility += $row['mobility_rating'];
        $totalCommunication += $row['communication_rating'];
        $totalDocumentation += $row['documentation_rating'];
    }

    // Calculate average ratings for each skill
    $avgCare = (int) ($totalCare / $rowCount);
    $avgRehabilitation = (int)($totalRehabilitation / $rowCount);
    $avgExercise = (int) ($totalExercise / $rowCount);
    $avgMobility = (int) ($totalMobility / $rowCount );
    $avgCommunication = (int) ($totalCommunication / $rowCount );
    $avgDocumentation =(int) ($totalDocumentation / $rowCount);

    // Update HTML progress bars with calculated average ratings
    echo "<script>
    document.querySelector('.progress-bar-primary:nth-of-type(1)').style.width = '{$avgCare}%';
    document.querySelector('.progress-value:nth-of-type(1)').textContent = '{$avgCare}%';
    document.querySelector('.progress-bar-primary:nth-of-type(2)').style.width = '{$avgRehabilitation}%';
    document.querySelector('.progress-value:nth-of-type(2)').textContent = '{$avgRehabilitation}%';
    // Update the rest of the progress bars similarly
    // ... (for exercise, mobility, communication, and documentation)
  </script>";
  

  
} else {
    echo "0 results";
}
$conn->close();
?>
