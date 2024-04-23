<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="css/paystyle.css">
    </head>
    <body>
        <div class="container">
            <h1>Payment Gateway</h1><br>
            <form id="payment-form">
                <div class="form-group">
                    <label for="card-number">Accepted Cards</label><br>
                    <img src="./images/pay.jpg" title ="Accepted Credit Cards" alt="Visa, Mastercard, American Express"/>
                </div>
                <div class="form-group">
                    <label for="card-number">Card Number</label>
                    <input type="text" id="card-number" placeholder="Enter your card number" required>
                </div>
                <div class="form-group">
                    <label for="expiry-date">Expiry Date</label>
                    <input type="text" id="expiry-date" placeholder="MM/YY" required>
                </div>
                <div class="form-group">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" placeholder="CVV" required>
                </div><br>
                <button type="submit">Pay Now</button>
                <button id="return-btn">Cancel Payment</button>
            </form>
            <div id="message"></div>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>