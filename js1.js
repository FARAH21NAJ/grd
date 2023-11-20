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
  selectedTimeslot.classList.add('redBackground');

  
  alert('Appointment booked successfully!');
  bookingForm.style.display = 'none';
});

