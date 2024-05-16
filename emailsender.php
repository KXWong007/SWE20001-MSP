<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postcode = $_POST['postcode'];
        $nameOnCard = $_POST['nameOnCard'];
        $creditCardNumber = $_POST['creditCardNumber'];
        $expMonth = $_POST['expMonth'];
        $expYear = $_POST['expYear'];
        $cvv = $_POST['cvv'];

        // Email content
        $to = "$email"; 
        $subject = 'Payment Confirmation';
        $message = "You have received a payment from: $fullName\n";
        $message .= "Email: $email\n";
        $message .= "Address: $address, $city, $state, $postcode\n";
        $message .= "Card Details: $nameOnCard, $creditCardNumber\n";

        $headers = "From: adletbek9@gmail.com"; 

        // Send email
        if(mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully!";
        } else {
            echo "Email sending failed.";
        }
    }
    echo '<script>
            alert("Thank you for your purchase! A receipt has been sent to your email.");
            window.location.href = "progbar.php";
          </script>';
?>