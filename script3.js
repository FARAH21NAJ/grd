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
  // Handle form submission via AJAX or form submission logic here
  // For example, you can use AJAX to send the booking details to the server
  // and process the appointment booking in process_booking.php
  // You need to implement process_booking.php to handle the booking logic.
  // After successful booking, you can show a success message or redirect the user.
  alert('Appointment booked successfully!');
  bookingForm.style.display = 'none';
  // Optionally, you can redirect the user to a success page:
  // window.location.href = 'success.html';
});