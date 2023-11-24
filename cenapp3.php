<!DOCTYPE html5>
<html>
<head>

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
  background-color: rgb(93, 228, 88) ;
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
	color: #122853;
	cursor:pointer;
	transition:0.25px;
  position: relative;
  left:40%;
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
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
  color: #122853;
  background-color: #fefefe;
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
  <h2>  <img src="cen3.png" height="5%" width="5%">  Available Appointments</h2>
  
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

      // Loop through each day of the week
      for ($i = 0; $i < 7; $i++) {
        echo "<div class='timeslots' id='timeslots_$i'>";
        
        // Display available time slots for each day
        foreach ($availableAppointments[$i] as $timeSlot) {
          echo "<div class='slot' data-day='$i' data-time='$timeSlot'>$timeSlot</div>";
        }

        echo "</div>";
      }
    ?>
  </div>

  
  <div id="bookingForm" style="display: none;">
    <h3>Book an Appointment</h3>
    <form action="process_booking.php" method="post" id="appointmentForm">
      <input type="hidden" id="selectedDay" name="selectedDay">
      <input type="hidden" id="selectedTime" name="selectedTime">
      <label for="patientName">Your Name:</label>
      <input type="text" id="patientName" name="patientName" required>
      <input type="submit" value="Book Appointment">
    </form>
  </div>
</div>

  <div>
<button class="submit"  onclick="openModal()"> To pay </button> 
<a href="seeappoint3.php"><button class="submit seeAppointment" onclick="seeAppointment()">See Appointment</button></a>

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

  appointmentForm.addEventListener('submit', function(event) {
    event.preventDefault();
    // Handle form submission logic

    // Add this line to toggle the red background class when booking an appointment
    const selectedTimeslot = document.querySelector(`.slot[data-day='${selectedDayInput.value}'][data-time='${selectedTimeInput.value}']`);
    selectedTimeslot.classList.add('orangeBackground');

    
    alert('Appointment booked successfully!');
    bookingForm.style.display = 'none';
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

    // Add the redBackground class to the selected appointment slot after the modal is closed
    closeModal();

    // Check if the modal is fully closed before adding the class
    const checkModalClosed = setInterval(function () {
      if (document.getElementById('myModal').style.display === 'none') {
        clearInterval(checkModalClosed);

        const selectedTimeslot = document.querySelector(`.slot[data-day='${selectedDayInput.value}'][data-time='${selectedTimeInput.value}']`);
        selectedTimeslot.classList.add('redBackground');
      }
    }, 100); // Check every 100 milliseconds if the modal is closed
  } else {
    // Handle errors or incomplete form data
    alert('Please fill in all required fields.');
  }
}


  
</script>

<script src="credit.js"></script>
</body>
</html>

