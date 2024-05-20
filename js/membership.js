document.getElementById('subscription-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Display notification
    alert("Thank you for subscribing. Have a nice day!");
  
    // Redirect user to index.html after displaying the notification
    window.location.href = "profile.php";
});
  
// Function to validate CVV/CVC input
document.getElementById('cvv').addEventListener('input', function(event) {
    var cvvInput = event.target.value;
    var cvvRegex = /^[0-9]{3}$/;

    if (!cvvRegex.test(cvvInput)) { event.target.setCustomValidity('Please enter a 3-digit CVV/CVC.'); } else { event.target.setCustomValidity(''); }
});