<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin - User Invoice </title>
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
                    <h2 class="heading"> User Payments </h2>
                    <?php
                        // set the servername, username, and password
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "FCMSUserMgmt";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

                        $orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'PaymentID';
                        $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

                        $sql = "SELECT * FROM Payments ORDER BY $orderBy $order";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table border='1' width='100%'>
                                        <tr>
                                            <th><a href='?orderBy=PaymentID&order=" . ($orderBy == 'PaymentID' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>PaymentID</a></th>
                                            <th><a href='?orderBy=OrderID&order=" . ($orderBy == 'OrderID' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>OrderID</a></th>
                                            <th><a href='?orderBy=Full_Name&order=" . ($orderBy == 'Full_Name' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Full_Name</a></th>
                                            <th><a href='?orderBy=Email&order=" . ($orderBy == 'Email' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Email</a></th>
                                            <th><a href='?orderBy=Address&order=" . ($orderBy == 'Address' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Address</a></th>
                                            <th><a href='?orderBy=City&order=" . ($orderBy == 'City' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>City</a></th>
                                            <th><a href='?orderBy=State&order=" . ($orderBy == 'State' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>State</a></th>
                                            <th><a href='?orderBy=Postcode&order=" . ($orderBy == 'Postcode' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Postcode</a></th>
                                            <th><a href='?orderBy=Name_on_Card&order=" . ($orderBy == 'Name_on_Card' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Name_on_Card</a></th>
                                            <th><a href='?orderBy=CardNumber&order=" . ($orderBy == 'CardNumber' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>CardNumber</a></th>
                                            <th><a href='?orderBy=ExpMonth&order=" . ($orderBy == 'ExpMonth' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>ExpMonth</a></th>
                                            <th><a href='?orderBy=ExpYear&order=" . ($orderBy == 'ExpYear' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>ExpYear</a></th>
                                            <th><a href='?orderBy=CVV&order=" . ($orderBy == 'CVV' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>CVV</a></th>
                                            <th><a href='?orderBy=PaymentDate&order=" . ($orderBy == 'PaymentDate' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>PaymentDate</a></th>
                                        </tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                            <td>{$row['PaymentID']}</td>
                                            <td>{$row['OrderID']}</td>
                                            <td>{$row['Full_Name']}</td>
                                            <td>{$row['Email']}</td>
                                            <td>{$row['Address']}</td>
                                            <td>{$row['City']}</td>
                                            <td>{$row['State']}</td>
                                            <td>{$row['Postcode']}</td>
                                            <td>{$row['Name_on_Card']}</td>
                                            <td>{$row['CardNumber']}</td>
                                            <td>{$row['ExpMonth']}</td>
                                            <td>{$row['ExpYear']}</td>
                                            <td>{$row['CVV']}</td>
                                            <td>{$row['PaymentDate']}</td>
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