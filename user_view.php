<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Admin - User List </title>
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
                    <h2 class="heading"> User List </h2>
                    <?php
                        // set the servername, username, and password
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "FCMSUserMgmt";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error() . "\n");
                        }

                        $orderBy = isset($_GET['orderBy']) ? $_GET['orderBy'] : 'UserName';
                        $order = isset($_GET['order']) ? $_GET['order'] : 'ASC';

                        $sql = "SELECT * FROM UserList ORDER BY $orderBy $order";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            if (mysqli_num_rows($result) > 0) {
                                echo "<table border='1' width='100%'>
                                        <tr>
                                            <th><a href='?orderBy=UserName&order=" . ($orderBy == 'UserName' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Username</a></th>
                                            <th><a href='?orderBy=Name&order=" . ($orderBy == 'Name' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Name</a></th>
                                            <th><a href='?orderBy=Email&order=" . ($orderBy == 'Email' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Email</a></th>
                                            <th><a href='?orderBy=Password&order=" . ($orderBy == 'Password' ? ($order == 'ASC' ? 'DESC' : 'ASC') : 'ASC') . "'>Password</a></th>
                                        </tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                            <td>{$row['UserName']}</td>
                                            <td>{$row['Name']}</td>
                                            <td>{$row['Email']}</td>
                                            <td>{$row['Password']}</td>
                                        </tr>";
                                }

                                echo "</table>";
                            } else {
                                echo "0 records found";
                            }
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        mysqli_close($conn);
                    ?><br>

                    <div class="grid-container">
                        <div>
                            <h2 class="heading"> Add a new user account </h2>
                            <form class="cre-form" action="user_create.php" method="post">
                                <div class="cre-container">
                                    <label for="name"><b>Name</b></label><br>
                                    <input type="text" placeholder="Enter Name" id="name" name="name" required><br><br>

                                    <label for="username"><b>Username</b></label><br>
                                    <input type="text" placeholder="Enter Username" id="username" name="username" required><br><br>

                                    <label for="email"><b>Email</b></label><br>
                                    <input type="text" placeholder="Enter Email" id="email" name="email" required><br><br>

                                    <label for="psw"><b>Password</b></label><br>
                                    <input type="password" placeholder="Enter Password" id="psw" name="psw" required><br><br>

                                    <button type="submit" class="cre-btn">Create Account</button>
                                </div>
                            </form>
                        </div>

                        <div>
                            <h2 class="heading"> Delete an existing user account </h2>
                            <form class="cre-form" action="user_delete.php" method="post">
                                <div class="cre-container">
                                    <label for="name"><b>Name</b></label><br>
                                    <input type="text" placeholder="Enter Name" id="name" name="name" required><br><br>
                                    <button type="submit" class="cre-btn">Delete Account</button>
                                </div>
                            </form>
                        </div>

                        <div>
                            <h2 class="heading"> Edit an user account </h2>
                            <form class="cre-form" action="user_edit.php" method="post">
                                <div class="cre-container">
                                    <label for="name"><b>Name</b></label><br>
                                    <input type="text" placeholder="Enter Name" id="name" name="name" required><br><br>

                                    <label for="username"><b>New Username</b></label><br>
                                    <input type="text" placeholder="Enter New Username" id="username" name="new_username" required><br><br>

                                    <label for="email"><b>New Email</b></label><br>
                                    <input type="text" placeholder="Enter New Email" id="email" name="new_email" required><br><br>

                                    <label for="psw"><b>New Password</b></label><br>
                                    <input type="password" placeholder="Enter New Password" id="psw" name="new_psw" required><br><br>

                                    <button type="submit" class="cre-btn">Edit Account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>