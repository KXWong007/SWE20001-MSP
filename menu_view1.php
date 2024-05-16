<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin - Menu List </title>
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
                        <a class="btd-button" href="menu_view.php">
                            <button type="submit" name="btd"> <img src="images/arrow-left-solid.png"/> Back to Menu List </button>
                        </a>
                    </div>
                </div>

                <!-- User Dashboard Starts from Here -->
                <div class="dashboard">
                    <h2 class="heading"> Menu Items 1 </h2>
                    <?php
                        // set the servername, username, and password
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "FCMSUserMgmt";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

                        $orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'foodName';
                        $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

                        $sql = "SELECT * FROM MenuItems1 ORDER BY $orderBy $order";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table border='1' width='100%'>
                                        <tr>
                                            <th><a href='?orderBy=foodName&order=" . ($orderBy == 'foodName' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Food Name</a></th>
                                            <th><a href='?orderBy=foodPrice&order=" . ($orderBy == 'foodPrice' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Food Price</a></th>
                                            <th><a href='?orderBy=description&order=" . ($orderBy == 'description' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Description</a></th>
                                        </tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                            <td>{$row['foodName']}</td>
                                            <td>{$row['foodPrice']}</td>
                                            <td>{$row['description']}</td>
                                        </tr>";
                                }
                                echo "</table>";
                            } else { echo "0 records found"; }
                        } else { echo "Error: " . mysqli_error($conn); }
                        mysqli_close($conn);
                    ?><br>

                    <div class="grid-container">
                        <div>
                            <h2 class="heading"> Add a new menu </h2>
                            <form class="cre-form" action="menu_create1.php" method="post">
                                <div class="cre-container">
                                    <label for="foodName"><b> Food Name</b></label><br>
                                    <input type="text" placeholder="Enter Food Name" id="foodName" name="foodName" required><br><br>

                                    <label for="foodPrice"><b>Food Price</b></label><br>
                                    <input type="text" placeholder="Enter Food Price" id="foodPrice" name="foodPrice" required><br><br>

                                    <label for="description"><b>Description</b></label><br>
                                    <input type="text" placeholder="Enter Description" id="description" name="description" required><br><br>

                                    <label><b>Food Image</b></label><br>
                                    <input type="file" name="imagePath" required><br><br>
                                    
                                    <button type="submit" class="cre-btn" name="addItem">Add Menu</button>
                                </div>
                            </form>
                        </div>

                        <div>
                            <h2 class="heading"> Remove an existing menu </h2>
                            <form class="cre-form" action="menu_delete1.php" method="post">
                                <div class="cre-container">
                                    <label for="foodName"><b>Food Name</b></label><br>
                                    <input type="text" placeholder="Enter Food Name" id="foodName" name="foodName" required><br><br>
                                    <button type="submit" class="cre-btn">Remove Menu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>