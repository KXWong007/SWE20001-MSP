/* Progess bar */
const progress = document.querySelector('.progress');
const orderCompleted = document.getElementById('order-completed');
const returnBtn = document.getElementById('return-btn');

let currentStep = 0;
const totalSteps = 8; // Total number of steps

// Function to update progress
function updateProgress(step) {
    const percent = (step / totalSteps) * 100;
    progress.style.width = percent + '%';
    if (step === totalSteps) {
        setTimeout(() => {
            orderCompleted.style.display = 'block';
        }, 500);
    }
}

// Function to handle next step button click
function nextStep() {
    if (currentStep < totalSteps) {
        currentStep++;
        updateProgress(currentStep);
    }
}

// Automatically progress (seconds)
const intervalId = setInterval(() => {
    nextStep();
    if (currentStep === totalSteps) {
        clearInterval(intervalId);
    }
}, 1000);

// Handle return to home button click
returnBtn.addEventListener('click', () => {
    // Replace this with the URL of your home page
    window.location.href = 'index.php';
});

//Paygate function (not working properly)
document.getElementById('payment-form').addEventListener('submit', function(event) {
  event.preventDefault();
  
  var cardNumber = document.getElementById('card-number').value.trim();
  var expiryDate = document.getElementById('expiry-date').value.trim();
  var cvv = document.getElementById('cvv').value.trim();
  
  // Basic validation
  if (!cardNumber || !expiryDate || !cvv) {
    document.getElementById('message').innerText = 'Please fill in all fields.';
    return;
  }

  // Simulate payment processing
  setTimeout(function() {
    document.getElementById('message').innerText = 'Payment successful!';
    // You can redirect the user to a success page or perform other actions here
    window.location.href = 'progbar.php';
  }, 2000);
});