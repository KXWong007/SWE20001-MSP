<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin - User Data </title>
        <link rel="stylesheet" href="./css/admin.css">
    </head>
    <body>
        <div class="warning">
            <h2> Sorry, this page doesn't support your device, Please use large screen device to see this page </h2>
        </div>

        <section>
            <!-- User Top Navigation Starts from Here -->
            <div class="main-content">
                <div class="main-top">
                    <h1> <img src="images/user-tie-solid.png" alt="Admin Logo"> Welcome Admin! </h1> <br>
                    <div class="admin">
                        <a class="btd-button" href="admin.php">
                            <button type="submit" name="btd"> <img src="images/arrow-left-solid.png"/> Back to Dashboard </button>
                        </a>
                    </div>
                </div>

                <!-- User Dashboard Starts from Here -->
                <div class="dashboard">
                    <h2 class="heading"> User Data </h2>
                    <div class="color-box">
                        <a href="user_view.php">
                            <button class="button red">
                                <img src="images/users-viewfinder-solid.png"/>
                                <h3> View User List </h3>
                            </button>
                        </a>
                        <a href="user_order_view.php">
                            <button class="button green">
                                <img src="images/rectangle-list-regular.png"/>
                                <h3> View User Order </h3>
                            </button>
                        </a>
                        <a href="user_invoice_view.php">
                            <button class="button yellow">
                                <img src="images/receipt-solid.png"/>
                                <h3> View User Invoice </h3>
                            </button>
                        </a>
                        <a href="user_fb_view.php">
                            <button class="button lightblue">
                                <img src="images/comments-solid.png"/>
                                <h3> View User Feedback </h3>
                            </button>
                        </a>
                        <a href="user_pay_view.php">
                            <button class="button lightgreen">
                                <img src="images/money-bill-1-solid.png"/>
                                <h3> View User Payments </h3>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>