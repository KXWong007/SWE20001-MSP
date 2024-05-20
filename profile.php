<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="./css/profilestyle.css">
        <title>Profile Page</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

    </head>
    <body>
        <!--Header-->
        <?php include("header.php"); ?>
        
        <!--Code for the body-->
        <div class="profile-container">
            <div class="profile">
                <div class="profile-header">
                    <!--Here to put the user pic-->
                    <img src="./images/id-card-solid.png" alt="profile" class="profile-img">
                    <div class="profile-text-container">
                        <h1 class="profile-title">Welcome Back, User!</h1>
                        <div class="borderpage">
                            <!--Where we implement the section to click on account and etc-->
                            <a href="#" class="borderpage-link" data-section="account"><i class="fa-solid fa-circle-user menu-icon"> Account</i></a>
                            <a href="#" class="borderpage-link" data-section="notification"><i class="fa-solid fa-bell menu-icon"> Notification</i></a>
                            <a href="#" class="borderpage-link" data-section="security"><i class="fa-solid fa-gear menu-icon"> Security</i></a>
                            <a href="#" class="borderpage-link" data-section="subscription"><i class="fa-solid fa-dollar menu-icon"> Subscription</i></a>
                            <a href="#" class="borderpage-link" data-section="orderhistory"><i class="fa-solid fa-clock-rotate-left"> Order History</i></a>
                            <a href="#" class="borderpage-link" data-section="invoice"><i class="fa-solid fa-receipt"> Invoice</i></a>
                            <a href="#" class="borderpage-link" data-section="preference"><i class="fa-solid fa-heart"> Preference</i></a>
                            <a href="#" class="borderpage-link" data-section="feedback"><i class="fa-solid fa-comment"> Feedback</i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-container">
                <form class="account" id="account-section">
                    <!-- Account Edit Section -->
                    <div class="account-header">
                        <h1 class="account-title">Edit Account Details</h1>
                    </div>
                    <div class="account-edit">
                        <div class="input-container">
                            <label>First Name</label>
                            <input type="text" id="first-name" placeholder="First Name">
                        </div>
                        <div class="input-container">
                            <label>Last Name</label>
                            <input type="text" id="last-name" placeholder="Last Name">
                        </div>
                        <div class="input-container">
                            <label>Email Address</label>
                            <input type="email" id="email" placeholder="Email Address">
                        </div>
                        <div class="input-container">
                            <label>Phone Number</label>
                            <input type="text" id="phone-number" placeholder="Phone Number">
                        </div>
                        <div class="input-container">
                            <label>Home Address</label>
                            <textarea id="home-address" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="btn-container">
                        <button class="btn-cancel" onclick="cancelForm()">Cancel</button>
                        <button class="btn-save" type="button" onclick="saveForm()">Save</button>
                    </div>
                </form>

                <!-- Notification Section -->
                <form class="account" id="notification-section" style="display: none;">
                    <div class="account-header">
                        <h1 class="account-title">Notification Settings</h1>
                    </div>
                    <!-- Add content for notification settings -->
                    <div class="account-edit">
                        <div class="checkbox-container">
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1">Receive the latest notifications of our deals or updates</label>
                        </div>
                    </div>
                    <div class="account-edit">
                        <div class="checkbox-container">
                            <input type="checkbox" id="checkbox2">
                            <label for="checkbox2">Be informed when FoodEdge will be closed during certain holidays</label>
                        </div>
                    </div>
                </form>

                <!-- Security Section--> 
                <form class="account" id="security-section" style="display: none;">
                    <div class="account-header">
                        <h1 class="account-title">Change Password</h1>
                    </div>
                    <!-- Add content for general settings -->
                    <div class="account-edit">
                        <div class="input-container">
                            <label>Enter New Password</label>
                            <input type="password" placeholder="New Password">
                        </div>
                        <div class="input-container">
                            <label>Re-enter New Password</label>
                            <input type="password" placeholder="Re-enter Password">
                        </div>
                        <button class="btn-logout" onclick="">Change</button>
                    </div>
                </form>

                <!-- Subscription Section -->
                <form class="account" id="subscription-section" style="display: none;">
                    <div class="account-header">
                        <h1 class="account-title">Subscription</h1>
                    </div>
                    <h4>Would you like to subscribe to become a member?</h4>
                    <p>By becoming a member, you will be able to have members-only offers and speedy service!<br>
                        Click the button below to join FoodEdge Gourmet family!</p><br>
                    <div class="btn-container">
                        <a class="btn-membership" href="membership.php">Subscribe for Membership</a>
                    </div>
                </form>

                <!-- Order History Section -->
                <form class="account" id="orderhistory-section" style="display: none;">
                    <div class="account-header">
                        <h1 class="account-title">Order History</h1>
                    </div>
                    <div class="logout-edit">
                        <?php
                            // set the servername, username, and password
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "FCMSUserMgmt";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

                            $orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'OrderID';
                            $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

                            $sql = "SELECT * FROM orderhistory ORDER BY $orderBy $order";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<table border='1' width='100%'>
                                            <tr>
                                                <th><a href='?orderBy=OrderID&order=" . ($orderBy == 'OrderID' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>OrderID</a></th>
                                                <th><a href='?orderBy=ProductName&order=" . ($orderBy == 'ProductName' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>ProductName</a></th>
                                                <th><a href='?orderBy=Quantity&order=" . ($orderBy == 'Quantity' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Quantity</a></th>
                                                <th><a href='?orderBy=Price&order=" . ($orderBy == 'Price' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Price</a></th>
                                                <th><a href='?orderBy=DateOrdered&order=" . ($orderBy == 'DateOrdered' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>DateOrdered</a></th>
                                            </tr>";
    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                                <td>{$row['OrderID']}</td>
                                                <td>{$row['ProductName']}</td>
                                                <td>{$row['Quantity']}</td>
                                                <td>{$row['Price']}</td>
                                                <td>{$row['DateOrdered']}</td>
                                            </tr>";
                                    }
                                    echo "</table>";
                                } else { echo "0 records found"; }
                            } else { echo "Error: " . mysqli_error($conn); }
                            mysqli_close($conn);
                        ?>
                    </div>
                </form>

                <!-- Invoice Section -->
                <form class="account" id="invoice-section" style="display: none;">
                    <div class="account-header">
                        <h1 class="account-title">Invoice</h1>
                    </div>
                    <div class="account-edit">
                        <?php
                            // set the servername, username, and password
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "FCMSUserMgmt";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

                            $orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'InvoiceID';
                            $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

                            $sql = "SELECT * FROM Invoice ORDER BY $orderBy $order";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<table border='1' width='100%'>
                                            <tr>
                                                <th><a href='?orderBy=InvoiceID&order=" . ($orderBy == 'InvoiceID' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>InvoiceID</a></th>
                                                <th><a href='?orderBy=UserName&order=" . ($orderBy == 'UserName' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>UserName</a></th>
                                                <th><a href='?orderBy=OrderID&order=" . ($orderBy == 'OrderID' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>OrderID</a></th>
                                                <th><a href='?orderBy=Price&order=" . ($orderBy == 'Price' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Price</a></th>
                                                <th><a href='?orderBy=InvoiceDate&order=" . ($orderBy == 'InvoiceDate' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>InvoiceDate</a></th>
                                            </tr>";

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                                <td>{$row['InvoiceID']}</td>
                                                <td>{$row['UserName']}</td>
                                                <td>{$row['OrderID']}</td>
                                                <td>{$row['Price']}</td>
                                                <td>{$row['InvoiceDate']}</td>
                                            </tr>";
                                    }
                                    echo "</table>";
                                } else { echo "0 records found"; }
                            } else { echo "Error: " . mysqli_error($conn); }
                            mysqli_close($conn);
                        ?>
                    </div>
                </form>

                <!-- Preference Section -->
                <form class="account" id="preference-section" style="display: none;">
                    <div class="account-header">
                        <h1 class="account-title">Preference</h1>
                    </div>
                    <div class="account-edit">
                        <?php
                            // set the servername, username, and password
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "FCMSUserMgmt";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);

                            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

                            $orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'UserName';
                            $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

                            $sql = "SELECT * FROM Favourite ORDER BY $orderBy $order";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                if (mysqli_num_rows($result) > 0) {
                                    echo "<table border='1' width='100%'>
                                            <tr>
                                                <th><a href='?orderBy=UserName&order=" . ($orderBy == 'UserName' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>UserName</a></th>
                                                <th><a href='?orderBy=FoodName&order=" . ($orderBy == 'FoodName' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>FoodName</a></th>
                                            </tr>";

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                                <td>{$row['UserName']}</td>
                                                <td>{$row['FoodName']}</td>
                                            </tr>";
                                    }
                                    echo "</table>";
                                } else { echo "0 records found"; }
                            } else { echo "Error: " . mysqli_error($conn); }
                            mysqli_close($conn);
                        ?>
                    </div>
                </form>

                <!-- Feedback Section -->
                <form class="account" id="feedback-section" style="display: none;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-3">
                    <div class="account-header">
                        <h1 class="account-title">Feedback Form</h1>
                    </div>
                    <div class="account-edit">
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $name = htmlspecialchars($_POST['name']);
                                $email = htmlspecialchars($_POST['email']);
                                $review = htmlspecialchars($_POST['review']);
                                echo "<p>Thank you, $name, for your feedback!</p>";
                            }
                        ?>
                        <div class="input-container">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="input-container">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="input-container">
                            <label for="review">Feedback:</label>
                            <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="./js/profile.js"></script>

        <!--Footer-->
        <?php include("footer.php"); ?>
    </body>
</html>