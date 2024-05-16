<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin - User Order </title>
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
                        <a class="btd-button" href="user_data.php">
                            <button type="submit" name="btd"> <img src="images/arrow-left-solid.png"/> Back to User Data </button>
                        </a>
                    </div>
                </div>

                <!-- User Dashboard Starts from Here -->
                <div class="dashboard">
                    <h2 class="heading"> User Order </h2>
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

                        $sql = "SELECT * FROM OrderHistory ORDER BY $orderBy $order";
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
                    ?><br>
                </div>
            </div>
        </section>
    </body>
</html>