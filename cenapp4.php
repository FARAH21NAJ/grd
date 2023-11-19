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
  border: 1px solid #ccc;
  padding: 5px;
  margin-bottom: 5px;
  background-color: #fff;
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


</style>





</head>
<body>

<div class="calendar">
  <h2>  <img src="cen 4.png" height="5%" width="5%">  Available Appointments</h2>
  
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
        ["9:00 AM", "10:00 AM", "11:00 AM", "1:00 PM","3:00 PM","6:00 PM","7:00 PM","8:00 PM","10:00 PM","11:00 PM"], 
        ["9:00 AM", "10:00 AM", "11:00 AM", "2:00 PM","3:00 PM","6:00 PM","7:00 PM","8:00 PM","10:00 PM","11:00 PM"],
        ["9:00 AM", "10:00 AM", "1:00 PM", "3:00 PM","4:00 PM","6:00 PM","7:00 PM","8:00 PM","10:00 PM","11:00 PM"],
        ["10:00 AM", "11:00 AM", "2:00 PM", "3:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM","10:00 PM","11:00 PM"],
        ["9:00 AM", "10:00 AM", "11:00 AM", "1:00 PM","3:00 PM","6:00 PM","7:00 PM","8:00 PM","10:00 PM","11:00 PM"],
        ["9:00 AM", "10:00 AM", "11:00 AM", "2:00 PM","3:00 PM","6:00 PM","7:00 PM","8:00 PM","10:00 PM","11:00 PM"],
        ["9:00 AM", "10:00 AM", "1:00 PM", "3:00 PM","5:00 PM","6:00 PM","7:00 PM","8:00 PM","10:00 PM","11:00 PM"]
      ];

      // Loop through each day of the week
      for ($i = 0; $i < 7; $i++) {
        echo "<div class='timeslots' id='timeslots_$i'>";
        
        // Display available time slots for each day
        foreach ($availableAppointments[$i] as $timeSlot) {
          echo "<div class='slot' data-day='$i'>$timeSlot</div>";
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
<a href="appointment.html"> <button class="submit"> Back </button> </a>
    </div>



<script src="script3.js"></script>

</body>
</html>
