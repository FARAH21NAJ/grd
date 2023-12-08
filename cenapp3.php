<!DOCTYPE html5>
<html>
<head>
<meta charset="utf-8">
    <title>Tlaa AlAli Center</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
   
    <link rel="shortcut icon" href="cen3.png">

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
  margin-bottom: 5px;

} 
.bookedSlot {
    background-color: grey; /* You can use a different color for booked slots */
    border: 1px solid #ccc;
    padding: 5px;
    margin-bottom: 5px;
}


.slot {
  background-color:  rgb(93, 228, 88) ;
  border: 1px solid #ccc;
  padding: 5px;
  margin-bottom: 5px;
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
  color: white;
	cursor:pointer;
	transition:0.25px;
  position: relative;
  left:30%;
  float: left;
	}

  

  .reset {
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
              margin-top: 20px;
              position: relative;
              left: 30%;
              width:7.1cm;
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

</style>







</head>
<body>

<div class="calendar">
  <h2>  <img src="cen1.png" height="5%" width="5%">  Available Appointments</h2>

  
  <div class="week">
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

// Function to get the color of a slot
function getSlotColor($day, $timeSlot) {
    global $db1;
    $sql = "SELECT color FROM app_book3 WHERE day = $day AND time_slot = '$timeSlot'";
    $result = mysqli_query($db1, $sql);
    $row = mysqli_fetch_assoc($result);
    return isset($row['color']) ? $row['color'] : 'orange'; // Default to orange if color is not set
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


// Close the database connection
mysqli_close($db1);




?>



  </div>
  <div id="bookingForm" style="display: none;">
    <h3>Book an Appointment</h3>
    <form action="seeapoint1.php" method="post" id="appointmentForm">
      <input type="hidden" id="selectedDay" name="selectedDay">
      <input type="hidden" id="selectedTime" name="selectedTime">
      <label for="patientName">Your Name:</label>
      <input type="text" id="patientName" name="patientName" pattern="[A-Z][a-zA-Z]*\s[A-Z][a-zA-Z]*" 
         title="Please enter both names starting with a capital letter" required Autocomplete="off">
      <input type="submit" value="Book Appointment">
    </form>
  </div>
</div>
<div>


<button class="submit"  onclick="openModal()"> To Pay </button> 
<a href="appointment.html"><button class="reset" onclick="seeAppointment()">Back</button></a>
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

    fetch('process_booking3.php', {
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

  // Other existing code...
</script>



  


<script src="credit.js"></script>
</body>
</html>
