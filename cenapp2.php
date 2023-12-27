<!DOCTYPE html5>
<html>
<head>
<meta charset="UTF-8">
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
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  height: 750px;
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
  margin-bottom: 5px;
} 

.slot,
.orangeBackground,
.redBackground {
  border: 1px solid #ccc;
  padding: 5px;
  margin-bottom: 5px;
  border-radius: 8px; /* Add border-radius for a rounded look */
  cursor: pointer; /* Add pointer cursor to indicate interactivity */
  transition: background-color 0.3s ease-in-out; /* Add smooth transition for background color */
  position: relative; /* Add position relative for overlay positioning */
}

/* Add this CSS to include a transparent white overlay */


.bookedSlot {
  background-color: #d6e8fa; /* You can use a different color for booked slots */
}


.slot {
  background-color: #3EC70B; /* Default background color for available slots */
}
.slot:hover,
.orangeBackground:hover,
.redBackground:hover {
  box-shadow: 0 0 5px rgba(29, 59, 117, 0.3);
}

/* Add this CSS to make the selected time slot stand out */
.selected-time-slot {
  border: 2px solid #1d3b75; /* Change border color as needed */
  animation: moveFrame 1s infinite; /* Adjust animation duration as needed */
  transition: box-shadow 0.3s ease-in-out; /* Add smooth transition for box-shadow */
}
.month-year {
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: #122853;
    margin-bottom: 10px;
  } 


.submit{
		background-color:#315bb0; 
	
	display:block;
	margin:20px 0px 0px 20px;
	text-align:center;
	border-radius:12px;
	border:2px solid rgb(173, 210, 244);
	padding :14px 110px;
	outline:none;
	color: #122853;
	cursor:pointer;
	transition:0.25px;
  position: relative;
  left:40%;
	}

  .orangeBackground {
    background-color: #FF9209;
  } 
  .redBackground {
  background-color: #E21818;
  
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
/* Add this CSS to your existing styles or in a separate style block */

@keyframes moveFrame {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
    box-shadow: 0 0 10px rgba(29, 59, 117, 0.5);
  }
  100% {
    transform: scale(1);
  }
}

.selected-time-slot {
  border: 2px solid #1d3b75; /* Change border color as needed */
  animation: moveFrame 1s infinite; /* Adjust animation duration as needed */
  transition: box-shadow 0.3s ease-in-out; /* Add smooth transition for box-shadow */
}

.slot {
  /* Add a smooth transition for the border */
  transition: border 0.3s ease-in-out;
}

/* Adjust the box-shadow for the non-selected slots */
.slot:not(.selected-time-slot):hover {
  box-shadow: 0 0 5px rgba(29, 59, 117, 0.3);
}

 
 

.calendar-content {
  display: none;
}



</style>







</head>
<body>  


<div class="calendar">
  
  <h2>  <img src="cen2.png" height="5%" width="5%">  Available Appointments</h2>
  <div class="calendar-wrapper">
   
 
  <div id="currentMonthYear" class="month-year" ></div>
  
  <div class="calendar-content ">
        <div class="tab-content gallery mt-5">
  <div class="week" id="calendar1">
    <!-- Display days of the week -->
    <div class="day"></div>
    <div class="day"></div>
    <div class="day"></div>
    <div class="day"></div>
    <div class="day"></div>
    <div class="day"></div>
    <div class="day"></div>

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

error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Amman');
 

// Establish a database connection (modify with your database credentials)
$db1 = mysqli_connect("localhost", "root", "12345678");

if (!$db1) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($db1, "purehelth");

// Function to check if a slot is booked
function checkIfSlotBooked($day, $timeSlot) {
    global $db1;
    $sql = "SELECT * FROM app_book2 WHERE day = $day AND time_slot = '$timeSlot'";
    $result = mysqli_query($db1, $sql);
    return mysqli_num_rows($result) > 0;
}

// Function to get the color of a slot
function getSlotColor($day, $timeSlot) {
    global $db1;
    $sql = "SELECT color FROM app_book2 WHERE day = $day AND time_slot = '$timeSlot'";
    $result = mysqli_query($db1, $sql);
    $row = mysqli_fetch_assoc($result);
    return isset($row['color']) ? $row['color'] : 'orange'; // Default to orange if color is not set
} 
$currentMonth = date('n');
$currentYear = date('Y');
function getCurrentDate() {
  return date('Y-m-d');
}

// Loop through each day of the week
for ($i = 0; $i < 7; $i++) {
  echo "<div class='timeslots' id='timeslots_$i'>";

  // Display available time slots for each day with an index
  foreach ($availableAppointments[$i] as $index => $timeSlot) {
    $isBooked = checkIfSlotBooked($i, $timeSlot);
    $color = getSlotColor($i, $timeSlot);
    $class = $isBooked ? $color : 'slot';

    // Add the class 'orangeBackground' or 'redBackground' based on the booking status
    if ($isBooked) {
      $class .= ($color == 'orange') ? ' orangeBackground' : ' redBackground';
    }

    echo "<div class='timeslot $class' data-day='$i' data-index='$index' data-time='$timeSlot'>$timeSlot</div>";
  }

  echo "</div>";
}

// Pass the current month and year to the showCalendar function
echo "<script>showCalendar(currentCalendar, $currentMonth, $currentYear );</script>"; 



// Close the database connection
mysqli_close($db1);




?>

</div>
      </div>

  </div>
  <div id="bookingForm" style="display: none;">
    <h3>Book an Appointment</h3>
    <form action="seeapoint1.php" method="post" id="appointmentForm">
      <input type="hidden" id="selectedDay" name="selectedDay">
      <input type="hidden" id="selectedTime" name="selectedTime">
      
      
      <label style="font-weight: bold;">Book without setting an appointment: <input type="submit" value="Book Appointment"></label>
    </form> 
    <div id="toPayContainer" style="display: none;"> <label style="font-weight: bold;">Book with fixed appointment: 
  <button  onclick="openModal()">To Pay</button> </label>
  </div>
  </div>
</div>
</div>
 

  <a href="appointment.html" ><button class="submit seeAppointment" >Back</button></a>

    
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2>Enter Credit Card Details</h2>
    <form id="paymentForm" action="seeapoint1.php">
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
  const orangeSlots = document.querySelectorAll('.orangeBackground');
  const bookingForm = document.getElementById('bookingForm');
  const appointmentForm = document.getElementById('appointmentForm');
  const selectedDayInput = document.getElementById('selectedDay');
  const selectedTimeInput = document.getElementById('selectedTime');
  const toPayContainer = document.getElementById('toPayContainer');

  function handleSlotClick(slot) {
    const day = slot.dataset.day;
    const time = slot.textContent;

    selectedDayInput.value = day;
    selectedTimeInput.value = time;

    // Remove existing selected slots
    slots.forEach(s => s.classList.remove('selected-time-slot'));

    // Add the selected-time-slot class to the clicked slot
    slot.classList.add('selected-time-slot');

    // Display the booking form
    bookingForm.style.display = 'block';

    // Check if the clicked slot has an orange background
    if (slot.classList.contains('orangeBackground')) {
      showToPayContainer();
    } else {
      toPayContainer.style.display = 'none';
    }
  }

  // Attach click event listeners to all slots (including orange ones)
  slots.forEach(slot => {
    slot.addEventListener('click', function () {
      handleSlotClick(this); 
      showToPayContainer();
    });
  });

  // Attach click event listeners to orange slots
  orangeSlots.forEach(orangeSlot => {
    orangeSlot.addEventListener('click', function () {
      handleSlotClick(this);
    });
  });

  function showToPayContainer() {
    toPayContainer.style.display = 'block';
  }

  appointmentForm.addEventListener('submit', function (event) {
    event.preventDefault();
    bookAppointment(false);
  });

  function bookAppointment(paymentMade) {
    const selectedTimeslot = document.querySelector(
      `.timeslot[data-day='${selectedDayInput.value}'][data-time='${selectedTimeInput.value}']`
    );

    // Remove existing color classes
    selectedTimeslot.classList.remove('redBackground', 'orangeBackground');

    // Add the new color class
    const colorClass = paymentMade ? 'redBackground' : 'orangeBackground';
    selectedTimeslot.classList.add(colorClass);

    const formData = new FormData(appointmentForm);
    formData.append('paymentMade', paymentMade);

    fetch('process_booking2.php', {
      method: 'POST',
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          // Handle success, if needed
        } else {
          // Handle error, if needed
        }
      });
  }

  function processPayment() {
    const cardNumber = document.getElementById('cardNumber').value;
    const expiry = document.getElementById('expiry').value;
    const cvv = document.getElementById('cvv').value;

    if (cardNumber && expiry && cvv) {
      alert('Payment processed successfully!');
      bookAppointment(true);
    } else {
      alert('Please fill in all required fields.');
    }
  }  
  let currentCalendar = 0;
  const totalCalendars = 4;
  <!-- Modify the showCalendar function to display the current date above each day -->



// Function to get the current month, year, and week
<!-- Modify the getCurrentMonthYear function to include the current date -->



// Function to get the current month, year, and date
function getCurrentMonthYear() {
    const currentDate = new Date();
    const currentMonth = currentDate.toLocaleString('default', { month: 'long' });
    const currentYear = currentDate.getFullYear();
    const currentDay = currentDate.getDate();
    const firstDayOfMonth = new Date(currentYear, currentDate.getMonth(), 1);
    const lastDayOfMonth = new Date(currentYear, currentDate.getMonth() + 1, 0);

    // Calculate the total weeks in the month
    const totalWeeks = Math.ceil((lastDayOfMonth.getDate() - firstDayOfMonth.getDate() + 1) / 7);

    return { month: currentMonth, year: currentYear, day: currentDay, totalWeeks };
}

// Modify the showCalendar function to take the week parameter
// Modify the showCalendar function to take the week parameter
function showCalendar(calendarIndex, month, year, week) {
    const calendars = document.querySelectorAll('.calendar-content');
    currentCalendar = (calendarIndex + totalCalendars) % totalCalendars;

    calendars.forEach((calendar, index) => {
        if (index === currentCalendar) {
            calendar.style.display = 'block';
        } else {
            calendar.style.display = 'none';
        }
    });

    // Update the current month and year display
    const currentMonthYearElement = document.getElementById('currentMonthYear');
    currentMonthYearElement.textContent = `${month} ${year}`;

    // Update the URL to include the week parameter
    const newUrl = `${window.location.origin}${window.location.pathname}?week=${week}`;
    window.history.replaceState({}, document.title, newUrl);

    // Get the current date
    const currentDate = new Date();

    // Get the current day of the week (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
    const currentDayOfWeek = currentDate.getDay();

    // Update the days with the current date
    const days = document.querySelectorAll('.day');
    days.forEach((day, index) => {
        const dayOffset = (index + 7 - currentDayOfWeek) % 7; // Calculate the offset from the current day
        const dayDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate() + dayOffset);
        const formattedDate = `${dayDate.getFullYear()}-${('0' + (dayDate.getMonth() + 1)).slice(-2)}-${('0' + dayDate.getDate()).slice(-2)}`;
        day.textContent = `${formattedDate}: ${day.textContent}`;
    });
}
// Extract the week parameter from the URL
const urlParams = new URLSearchParams(window.location.search);
const weekParam = urlParams.get('week');

// Set the initial month, year, day, and week
const { month, year, totalWeeks, day } = getCurrentMonthYear();
showCalendar(currentCalendar, month, year, weekParam === 'true' ? true : 1, day);


   
</script>

  


<script src="credit.js"></script>
</body>
</html>
