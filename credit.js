// Functions to open and close the modal
function openModal() {
    document.getElementById('myModal').style.display = 'block';
  }
  
  function closeModal() {
    document.getElementById('myModal').style.display = 'none';
  }
  
  // Function to simulate payment processing
  function processPayment() {
    // Get credit card details from the form
    const cardNumber = document.getElementById('cardNumber').value;
    const expiry = document.getElementById('expiry').value;
    const cvv = document.getElementById('cvv').value;
    
    // Perform validation and payment processing (simulated)
    if (cardNumber && expiry && cvv) {
      // Simulate processing by displaying a message
      alert('Payment processed successfully!');
      
      // Close the modal after successful payment (you'd typically redirect or perform other actions here)
      closeModal();
    } else {
      // Handle errors or incomplete form data
      alert('Please fill in all required fields.');
    }
  }
  