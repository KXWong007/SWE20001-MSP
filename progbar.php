<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Order Status Tracking</title>
    </head>

    <body>
        <!--Navigation-->
        <?php include("header.php"); ?>
        
        <div class="prog-bar-container">
            <h1>Order Status Tracking</h1>
            <div class="status-container">
                <div class="status">
                    <div class="step">Order Placed</div>
                    <div class="step">Preparing</div>
                    <div class="step">Out for Delivery</div>
                    <div class="step">Delivered</div>
                </div>
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
            </div><br>
            <div id="order-completed" style="display: none;">
                <p>We Thank You for your order!</p>
                <button id="return-btn">Return to Home</button>
            </div>
        </div>

        <script src="./js/script.js"></script>

        <!--Footer-->
        <?php include("footer.php"); ?>
    </body>
</html>