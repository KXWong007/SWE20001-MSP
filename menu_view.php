<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu List</title>
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
                    <h2 class="heading"> Menu List </h2>
                    <div class="color-box">
                        <a href="menu_view1.php">
                            <button class="button red">
                                <h3> Menu Items 1 </h3>
                            </button>
                        </a>
                        <a href="menu_view2.php">
                            <button class="button green">
                                <h3> Menu Items 2 </h3>
                            </button>
                        </a>
                        <a href="menu_view3.php">
                            <button class="button yellow">
                                <h3> Menu Items 3 </h3>
                         </button>
                        </a>    
                        <a href="menu_view4.php">
                            <button class="button aqua">
                                <h3> Menu Items 4 </h3>
                         </button>
                        </a>            
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>