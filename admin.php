<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/admin.css" />
        <title>Admin Dashboard</title>
    </head>
    <body>
        <?php
            session_start();
            // Logout functionality
            if (isset($_POST["logout"])) {
                session_destroy();
                header("Location: index.php");
                exit();
            }
        ?>
        <div class="warning">
            <h2> Sorry, this page doesn't support your device, Please use large screen device to see this page </h2>
        </div>

        <section>
            <!-- User Top Navigation Starts from Here -->
            <div class="main-content">
                <div class="main-top">
                    <h1> <img src="images/user-tie-solid.png" alt="Exflora Logo"> Welcome Admin!</h1> <br>
                    <div class="admin">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <button type="submit" name="logout"> <img src="images/power-off-solid.png"/> Logout </button>
                        </form>
                    </div>
                </div>

                <!-- User Dashboard Starts from Here -->
                <div class="dashboard">
                    <h2 class="heading"> Dashboard </h2>
                    <div class="color-box">
                        <a href="user_view.php">
                            <button class="button red">
                                <img src="images/users-viewfinder-solid.png"/>
                                <h3> View User List </h3>
                            </button>
                        </a>
                        <a href="view_order.php">
                            <button class="button green">
                                <img src="images/rectangle-list-regular.png"/>
                                <h3> View FCMS Order List </h3>
                            </button>
                        </a>
                    </div>
                </div>

                <!-- User Activity Starts from Here -->
                <div class="activity">
                    <h2 class="heading"> Recent Activity </h2>
                    <div class="activities">
                        <table>
                            <thead>
                                <tr>
                                    <th> Username </th>
                                    <th> Email </th>
                                    <th> Joined Date </th>
                                    <th> Account Type </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> MeiMei456 </td>
                                    <td> meimei@gmail.com </td>
                                    <td> 01-12-2023 </td>
                                    <td> User </td>
                                    <td> Offline </td>
                                </tr>
                                <tr>
                                    <td> PaulLim345 </td>
                                    <td> paullim@gmail.com </td>
                                    <td> 01-11-2023 </td>
                                    <td> User </td>
                                    <td> Offline </td>
                                </tr>
                                <tr>
                                    <td> JohnMike234 </td>
                                    <td> johnmike@gmail.com </td>
                                    <td> 01-10-2023 </td>
                                    <td> User </td>
                                    <td> Offline </td>
                                </tr>
                                <tr>
                                    <td> AiLing123 </td>
                                    <td> ailing@gmail.com </td>
                                    <td> 01-09-2023 </td>
                                    <td> User </td>
                                    <td> Offline </td>
                                </tr>
                                <tr>
                                    <td> admin </td>
                                    <td> admin@admin.com </td>
                                    <td> 01-01-1970 </td>
                                    <td> Admin </td>
                                    <td> Active </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>