<!DOCTYPE html5>
<html>
<head>
<meta charset="UTF-8">
      <title>Pure Health</title>
      <link rel="shortcut icon" href="logo.png">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<style>
 
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  color:#122853;
background-image: url(front2.png);
background-size: cover;
 
margin-top:40px;
 
}
 
.calendar {
  background-color: rgba(255,255,255,0.5);
  max-width: 900px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  height: 900px;
}
 
h2 {
  text-align: center;
}
 
.week {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  gap: 5px;
}
 
.day {
  text-align: center;
  font-weight: bold;
  border: 1px solid #ccc;
  padding: 5px;
  background-color: #f0f0f0;
}
 
.timeslots {
  display: flex;
  flex-direction: column;
  border: 1px solid #ccc;
  padding: 5px;
 
}
 
.slot {
  background-color:  rgb(93, 228, 88) ;
  border: 1px solid #ccc;
  padding: 5px;
  margin-bottom: 5px;
}
 

 
  .orangeBackground {
    background-color: orange;
  }
  .redBackground {
  background-color: red;
 
}
 
 
/* Add this CSS to your existing styles or in a separate style block */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}
 
.modal-content {
  color: #122853;
 
  background-color: rgba(255,255,255,0.8);
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}
 
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
 
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
 

.button-container {
              text-align: center;
              margin-top: 20px;
              position: relative;
            bottom: 210px;
          } 


          .submit, .reset {
              background-color: #315bb0;
              display: inline-block;
              text-align: center;
              border-radius: 12px;
              border: 2px solid rgb(173, 210, 244);
              padding: 14px 110px;
              outline: none;
              color: white;
              cursor: pointer;
              transition: 0.2s;
              margin: 0 10px; /* Adjusted margin */
              margin-top: 210px;


          }
          .submit {
              width: 8.4cm;
          }

          .navigation {
  text-align: center; /* Centers the navigation items */
}
.navigation {
  list-style: none; /* Removes bullet points */
  display: inline-block; /* Displays the list items horizontally */
  margin: 0; /* Removes default margin */
  padding: 0; /* Removes default padding */
}

.navigation {
  text-decoration: none; /* Removes underline from links */
  padding: 10px 15px; /* Adjust padding as needed */
}


.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}

.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}

 
.calendars {
  display: flex;
}
 
 

.calendar-content {
  display: none;
}


/*
h1{text-align:center ;}
*/
</style>
 
</head>
<body>
 
<div class="calendar">
  <h2>  <img src="cen1.png" height="5%" width="5%">  Available Appointments </h2>
 
  <div class="calendar-wrapper">
    <div class="navigation">
      <button onclick="previousCalendar()"><i class="fa-solid fa-backward"></i></button>
      <button onclick="nextCalendar()"><i class="fa-sharp fa-solid fa-forward"></i></button>
    </div>
  
      <div class="calendar-content ">
      
        <div class="tab-content gallery mt-5">
       <!-- Display days of the week -->
       <div  style="  position: relative;
            bottom: 20px;"> <h4 ><span style="margin-right: 30px;"></span>3/DEC<span style="margin-right: 90px;"></span>4/DEC<span style="margin-right: 75px;"></span>5/DEC<span style="margin-right: 78px;"></span>6/DEC<span style="margin-right: 83px;"></span>7/DEC<span style="margin-right: 80px;"></span>8/DEC<span style="margin-right: 80px;"></span>9/DEC  </h4>
    </div>
       <div class="week"   id="calendar1" style="position: relative;
            bottom:26.5px;">
    <div class="day">Sunday</div>
    <div class="day">Monday</div>
    <div class="day">Tuesday</div>
    <div class="day">Wednesday</div>
    <div class="day">Thursday</div>
    <div class="day">Friday</div>
    <div class="day">Saturday</div>
    <!-- Loop through time slots for each day -->
    <?php
      // Example of available appointments (replace this with your PHP logic)
      $availableAppointments = [
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],

 
      ];
 
      // Loop through each day of the week
      for ($i = 0; $i < 7; $i++) {
        echo "<div class='timeslots' id='timeslots_$i'>";
       
        // Display available time slots for each day
        foreach ($availableAppointments[$i] as $timeSlot) {
          echo "<div class='slot' data-day='$i' data-time='$timeSlot'>$timeSlot</div>";
        }
 
        echo "</div>";
      }  
      error_reporting(E_ALL);
ini_set('display_errors', 1);
 
   // Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehealth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Output POST data for debugging
  var_dump($_POST);
 
  if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
      $patientName = $_POST['patientName'];
      $selectedDay = $_POST['selectedDay'];
      $selectedTime = $_POST['selectedTime'];
 
      // Check if payment is made (you may need to adjust this logic based on your actual payment processing)
      $paymentStatus = isset($_POST['paymentMade']) && $_POST['paymentMade'] === 'true' ? 1 : 0;
 
      // Output values for debugging
      var_dump($patientName, $selectedDay, $selectedTime, $paymentStatus);
 
      // Insert the appointment into the database
      $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', $paymentStatus)";
 
      // Output the SQL query for debugging
      echo "SQL Query: $sql";
 
      // Check for errors during the query
      if (mysqli_query($db, $sql)) {
          echo "Appointment booked successfully!";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
      }
  }
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehelth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
        $patientName = $_POST['patientName'];
        $selectedDay = $_POST['selectedDay'];
        $selectedTime = $_POST['selectedTime'];
       
        // Insert the appointment into the database
        $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', false)";
       
        if (mysqli_query($db, $sql)) {
            echo "Appointment booked successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}
 
    ?>
        </div>
      </div>
</div><div id="bookingForm" style="display: none;">
    <h3>Book an Appointment</h3>
    <form action="seeapoint1.php" method="post" id="appointmentForm">
      <input type="hidden" id="selectedDay" name="selectedDay">
      <input type="hidden" id="selectedTime" name="selectedTime">
      <label for="patientName">Your Name:</label>
      <input type="text" id="patientName" name="patientName" required>
      <input type="submit" value="Book Appointment">
    </form>
  </div>
      <div class="calendar-content" >
      <div  style="  position: relative;
            top: 7px;"> <h4 ><span style="margin-right: 20px;"></span>10/DEC<span style="margin-right: 90px;"></span>11/DEC<span style="margin-right: 75px;"></span>12/DEC<span style="margin-right: 68px;"></span>13/DEC<span style="margin-right: 63px;"></span>14/DEC<span style="margin-right: 80px;"></span>15/DEC<span style="margin-right: 80px;"></span>16/DEC  </h4>
    </div>
      <div class="week"  id="calendar2" >
         <!-- Display days of the week -->
    <div class="day">Sunday</div>
    <div class="day">Monday</div>
    <div class="day">Tuesday</div>
    <div class="day">Wednesday</div>
    <div class="day">Thursday</div>
    <div class="day">Friday</div>
    <div class="day">Saturday</div>


      
 
    <!-- Loop through time slots for each day -->
    <?php
      // Example of available appointments (replace this with your PHP logic)
      $availableAppointments = [
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
 
 
 
      ];
 
      // Loop through each day of the week
      for ($i = 0; $i < 7; $i++) {
        echo "<div class='timeslots' id='timeslots_$i'>";
       
        // Display available time slots for each day
        foreach ($availableAppointments[$i] as $timeSlot) {
          echo "<div class='slot' data-day='$i' data-time='$timeSlot'>$timeSlot</div>";
        }
 
        echo "</div>";
      }  
      error_reporting(E_ALL);
ini_set('display_errors', 1);
 
   // Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehealth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Output POST data for debugging
  var_dump($_POST);
 
  if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
      $patientName = $_POST['patientName'];
      $selectedDay = $_POST['selectedDay'];
      $selectedTime = $_POST['selectedTime'];
 
      // Check if payment is made (you may need to adjust this logic based on your actual payment processing)
      $paymentStatus = isset($_POST['paymentMade']) && $_POST['paymentMade'] === 'true' ? 1 : 0;
 
      // Output values for debugging
      var_dump($patientName, $selectedDay, $selectedTime, $paymentStatus);
 
      // Insert the appointment into the database
      $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', $paymentStatus)";
 
      // Output the SQL query for debugging
      echo "SQL Query: $sql";
 
      // Check for errors during the query
      if (mysqli_query($db, $sql)) {
          echo "Appointment booked successfully!";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
      }
  }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehelth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
        $patientName = $_POST['patientName'];
        $selectedDay = $_POST['selectedDay'];
        $selectedTime = $_POST['selectedTime'];
       
        // Insert the appointment into the database
        $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', false)";
       
        if (mysqli_query($db, $sql)) {
            echo "Appointment booked successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}

    ?>
</div>
        </div>
        <div id="bookingForm" style="display: none;">
    <h3>Book an Appointment</h3>
    <form action="seeapoint1.php" method="post" id="appointmentForm">
      <input type="hidden" id="selectedDay" name="selectedDay">
      <input type="hidden" id="selectedTime" name="selectedTime">
      <label for="patientName">Your Name:</label>
      <input type="text" id="patientName" name="patientName" required>
      <input type="submit" value="Book Appointment">
    </form>
  </div>



      <div class="calendar-content">
      <div  style="  position: relative;
            top: 7px;"> <h4 ><span style="margin-right: 20px;"></span>17/DEC<span style="margin-right: 90px;"></span>18/DEC<span style="margin-right: 75px;"></span>19/DEC<span style="margin-right: 68px;"></span>20/DEC<span style="margin-right: 63px;"></span>21/DEC<span style="margin-right: 80px;"></span>22/DEC<span style="margin-right: 80px;"></span>23/DEC  </h4></div>
      <div class="week"  id="calendar3">
<!-- Display days of the week -->
<div class="day">Sunday</div>
    <div class="day">Monday</div>
    <div class="day">Tuesday</div>
    <div class="day">Wednesday</div>
    <div class="day">Thursday</div>
    <div class="day">Friday</div>
    <div class="day">Saturday</div>
  
 
    <!-- Loop through time slots for each day -->
    <?php
      // Example of available appointments (replace this with your PHP logic)
      $availableAppointments = [
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
 
 
 
      ];
 
      // Loop through each day of the week
      for ($i = 0; $i < 7; $i++) {
        echo "<div class='timeslots' id='timeslots_$i'>";
       
        // Display available time slots for each day
        foreach ($availableAppointments[$i] as $timeSlot) {
          echo "<div class='slot' data-day='$i' data-time='$timeSlot'>$timeSlot</div>";
        }
 
        echo "</div>";
      }  
      error_reporting(E_ALL);
ini_set('display_errors', 1);
 
   // Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehealth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Output POST data for debugging
  var_dump($_POST);
 
  if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
      $patientName = $_POST['patientName'];
      $selectedDay = $_POST['selectedDay'];
      $selectedTime = $_POST['selectedTime'];
 
      // Check if payment is made (you may need to adjust this logic based on your actual payment processing)
      $paymentStatus = isset($_POST['paymentMade']) && $_POST['paymentMade'] === 'true' ? 1 : 0;
 
      // Output values for debugging
      var_dump($patientName, $selectedDay, $selectedTime, $paymentStatus);
 
      // Insert the appointment into the database
      $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', $paymentStatus)";
 
      // Output the SQL query for debugging
      echo "SQL Query: $sql";
 
      // Check for errors during the query
      if (mysqli_query($db, $sql)) {
          echo "Appointment booked successfully!";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
      }
  }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehelth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
        $patientName = $_POST['patientName'];
        $selectedDay = $_POST['selectedDay'];
        $selectedTime = $_POST['selectedTime'];
       
        // Insert the appointment into the database
        $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', false)";
       
        if (mysqli_query($db, $sql)) {
            echo "Appointment booked successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}
    ?>
  </div>
</div>
<div id="bookingForm" style="display: none;">
    <h3>Book an Appointment</h3>
    <form action="seeapoint1.php" method="post" id="appointmentForm">
      <input type="hidden" id="selectedDay" name="selectedDay">
      <input type="hidden" id="selectedTime" name="selectedTime">
      <label for="patientName">Your Name:</label>
      <input type="text" id="patientName" name="patientName" required>
      <input type="submit" value="Book Appointment">
    </form>
  </div>



      <div class="calendar-content">
      <div  style="  position: relative;
            top: 7px;"> <h4 ><span style="margin-right: 20px;"></span>24/DEC<span style="margin-right: 90px;"></span>25/DEC<span style="margin-right: 75px;"></span>26/DEC<span style="margin-right: 68px;"></span>27/DEC<span style="margin-right: 63px;"></span>28/DEC<span style="margin-right: 80px;"></span>29/DEC<span style="margin-right: 80px;"></span>30/DEC  </h4>
    </div>
       <div class="week"  id="calendar4" >
       <!-- Display days of the week -->
    <div class="day">Sunday</div>
    <div class="day">Monday</div>
    <div class="day">Tuesday</div>
    <div class="day">Wednesday</div>
    <div class="day">Thursday</div>
    <div class="day">Friday</div>
    <div class="day">Saturday</div>
  
    <!-- Loop through time slots for each day -->
    <?php
      // Example of available appointments (replace this with your PHP logic)
      $availableAppointments = [
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
        ["8:00 AM", "9:00 AM", "10:00 AM", "11:00 AM", "12:00 PM", "1:00 PM","2:00 PM", "3:00 PM","4:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM"],
 
 
 
      ];
 
      // Loop through each day of the week
      for ($i = 0; $i < 7; $i++) {
        echo "<div class='timeslots' id='timeslots_$i'>";
       
        // Display available time slots for each day
        foreach ($availableAppointments[$i] as $timeSlot) {
          echo "<div class='slot' data-day='$i' data-time='$timeSlot'>$timeSlot</div>";
        }
 
        echo "</div>";
      }  
      error_reporting(E_ALL);
ini_set('display_errors', 1);
 
   // Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehealth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Output POST data for debugging
  var_dump($_POST);
 
  if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
      $patientName = $_POST['patientName'];
      $selectedDay = $_POST['selectedDay'];
      $selectedTime = $_POST['selectedTime'];
 
      // Check if payment is made (you may need to adjust this logic based on your actual payment processing)
      $paymentStatus = isset($_POST['paymentMade']) && $_POST['paymentMade'] === 'true' ? 1 : 0;
 
      // Output values for debugging
      var_dump($patientName, $selectedDay, $selectedTime, $paymentStatus);
 
      // Insert the appointment into the database
      $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', $paymentStatus)";
 
      // Output the SQL query for debugging
      echo "SQL Query: $sql";
 
      // Check for errors during the query
      if (mysqli_query($db, $sql)) {
          echo "Appointment booked successfully!";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($db);
      }
  }
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
// Establish a database connection
$db = mysqli_connect("localhost", "root", "12345678");
 
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
 
mysqli_select_db($db, "purehelth");
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['patientName']) && isset($_POST['selectedDay']) && isset($_POST['selectedTime'])) {
        $patientName = $_POST['patientName'];
        $selectedDay = $_POST['selectedDay'];
        $selectedTime = $_POST['selectedTime'];
       
        // Insert the appointment into the database
        $sql = "INSERT INTO app_book1 (patient_name, day, time_slot, payment_status) VALUES ('$patientName', $selectedDay, '$selectedTime', false)";
       
        if (mysqli_query($db, $sql)) {
            echo "Appointment booked successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}
    ?>

        </div>
      </div>
    </div>
  <div id="bookingForm" style="display: none;">
    <h3>Book an Appointment</h3>
    <form action="seeapoint1.php" method="post" id="appointmentForm">
      <input type="hidden" id="selectedDay" name="selectedDay">
      <input type="hidden" id="selectedTime" name="selectedTime">
      <label for="patientName">Your Name:</label>
      <input type="text" id="patientName" name="patientName" required>
      <input type="submit" value="Book Appointment">
    </form>
  </div>



<div  class="button-container">
<a href="#"> <button class="submit"  onclick="openModal()"> To Pay </button></a>
<a href="seeappoint1.php"><button class="reset" onclick="seeAppointment()">See Appointment</button></a>
</div>

    
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Enter Credit Card Details</h2>
    <form id="paymentForm">
      <label for="cardNumber">Card Number:</label>
      <input type="text" id="cardNumber" placeholder="1234 5678 9101 1121" required><br><br>
     
      <label for="expiry">Expiration Date:</label>
      <input type="text" id="expiry" placeholder="MM/YY" required><br><br>
     
      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" placeholder="123" required><br><br>
     
      <button type="button" onclick="processPayment()">Submit Payment</button>
    </form>
 
</div>
 
<script>
  const slots = document.querySelectorAll('.slot');
  const bookingForm = document.getElementById('bookingForm');
  const appointmentForm = document.getElementById('appointmentForm');
  const selectedDayInput = document.getElementById('selectedDay');
  const selectedTimeInput = document.getElementById('selectedTime');

  slots.forEach(slot => {
    slot.addEventListener('click', function() {
      const day = this.dataset.day;
      const time = this.textContent;

      selectedDayInput.value = day;
      selectedTimeInput.value = time;

      bookingForm.style.display = 'block';
    });
  });

  // Other existing code...

  function bookAppointment(paymentMade) {
    const selectedTimeslot = document.querySelector(`.timeslot[data-day='${selectedDayInput.value}'][data-time='${selectedTimeInput.value}']`);
    
    // Remove existing color classes
    selectedTimeslot.classList.remove('redBackground', 'orangeBackground');
    
    // Add the new color class
    const colorClass = paymentMade ? 'redBackground' : 'orangeBackground';
    selectedTimeslot.classList.add(colorClass);

    const formData = new FormData(appointmentForm);
    formData.append('paymentMade', paymentMade);

    fetch('process_booking.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Handle success, if needed
        } else {
            // Handle error, if needed
        }
    });
}

// Other existing code...

  appointmentForm.addEventListener('submit', function(event) {
    event.preventDefault();
    // Handle form submission logic for non-payment appointment
    bookAppointment(false);
  });

  function processPayment() {
    // Get credit card details from the form
    const cardNumber = document.getElementById('cardNumber').value;
    const expiry = document.getElementById('expiry').value;
    const cvv = document.getElementById('cvv').value;

    // Perform validation and payment processing (simulated)
    if (cardNumber && expiry && cvv) {
      // Simulate processing by displaying a message
      alert('Payment processed successfully!');

      // Handle form submission logic for payment appointment
      bookAppointment(true);
    } else {
      // Handle errors or incomplete form data
      alert('Please fill in all required fields.');
    }
  }
  let currentCalendar = 0;
const totalCalendars = 4;

function showCalendar(calendarIndex) {
  const calendars = document.querySelectorAll('.calendar-content');
  currentCalendar = (calendarIndex + totalCalendars) % totalCalendars;

  calendars.forEach((calendar, index) => {
    if (index === currentCalendar) {
      calendar.style.display = 'block';
    } else {
      calendar.style.display = 'none';
    }
  });
}

function previousCalendar() {
  showCalendar(currentCalendar - 1);
}

function nextCalendar() {
  showCalendar(currentCalendar + 1);
}

showCalendar(currentCalendar);


</script>
 
 
<script src="credit.js"></script>
</body>
</html>