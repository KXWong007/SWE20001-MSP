<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Gateway</title>
        <link rel="stylesheet" href="./css/paystyle.css">
    </head>
    <body>
        <div class="container">
            <form action="emailsender.php" method="post">
                <div class="row">
                    <div class="col">
                        <h3 class="title">billing address</h3>
                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" placeholder="john deo">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="example@example.com">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="house no. ,streetname">
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input type="text" placeholder="Kuching">
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>state :</span>
                                <input type="text" placeholder="Sarawak">
                            </div>
                            <div class="inputBox">
                                <span>postcode :</span>
                                <input type="text" placeholder="12345">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h3 class="title">payment</h3>
                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="./images/card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" placeholder="mr. john deo">
                        </div>
                        <div class="inputBox">
                            <span>credit card number :</span>
                            <input type="number" placeholder="1111-2222-3333-4444">
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <input type="text" placeholder="january">
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="number" placeholder="2022">
                            </div>
                            <div class="inputBox">
                                <span>CVV :</span>
                                <input type="text" placeholder="1234">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="submit-btn">Pay Now</button>
            </form>
        </div>
    </body>
</html>