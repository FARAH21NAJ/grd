const radioButtons = document.querySelectorAll('input[value= "Creativity "]');
const submitButton = document.getElementById('submitButton');

radioButtons.forEach((radio) => {
  radio.addEventListener('change', function() {
    if (this.checked) {
      submitButton.style.display = 'inline';
     
    } else {
      submitButton.style.display = 'none';
  
    }
  });
});


const radioButtons1 = document.querySelectorAll('input[value=" Mazaya "]');
const submitButton1 = document.getElementById('submitButton1');

radioButtons1.forEach((radio) => {
  radio.addEventListener('change', function() {
    if (this.checked) {
      submitButton1.style.display = 'inline';

    } else {
      submitButton1.style.display = 'none';
 
    }
  });
});


const radioButtons2 = document.querySelectorAll('input[value="Tlaa"]');
const submitButton2= document.getElementById('submitButton2');

radioButtons2.forEach((radio) => {
  radio.addEventListener('change', function() {
    if (this.checked) {
      submitButton2.style.display = 'inline';
   
    } else {
      submitButton2.style.display = 'none';
  
    }
  });
});


const radioButtons3 = document.querySelectorAll('input[value="Al Shorouq " ]');
const submitButton3 = document.getElementById('submitButton3');

radioButtons3.forEach((radio) => {
  radio.addEventListener('change', function() {
    if (this.checked) {
      submitButton3.style.display = 'inline';
   
    } else {
      submitButton3.style.display = 'none';
   
    }
  });
});