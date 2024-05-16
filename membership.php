<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membership Subscription</title>
  <link rel="stylesheet" href="./css/membership.css">
</head>
<body>
  <div class="container">
    <h2>Membership Subscription Form</h2>
    <form id="subscription-form">
      <div class="form-group">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" id="lastname" name="lastname" required>
        </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{7/8}" placeholder="Format: 123-4567890" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="payment-method">Payment Method</label>
        <select id="payment-method" name="payment-method" required>
          <option value="" disabled selected>Select Payment Method</option>
          <option value="visa">Visa</option>
          <option value="mastercard">MasterCard</option>
        </select>
      </div>
      <div class="form-group">
        <label for="card-number">Card Number</label>
        <input type="text" id="card-number" name="card-number" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="Enter 16-digit card number eg:1234-1234-1234-1234" required>
      </div>
      <div class="form-group">
        <label for="expiry-date">Expiry Date</label>
        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
      </div>
      <div class="form-group">
        <label for="cvv">CVV/CVC</label>
        <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" placeholder="Enter 3-digit CVV/CVC" required>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>

  <script src="./js/membership.js"></script>
</body>
</html>
