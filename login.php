<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Login</title>
    </head>
    <body>
        <!--Navigation-->
        <?php include("header.php"); ?>
        
        <section>
            <div class="menu-title">
                <h1>Login</h1>
            </div>
        </section>

        <?php
            // PHP code for handling login
            session_start();

            // set the servername, username, password and database name
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "FCMSUserMgmt";
            
            $UserName = "";
            $Password = "";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error() . "\n");
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
                $UserName = $_POST["username"];
                $Password = $_POST["psw"];

                // Assuming you have a database connection established
                $sql = "SELECT * FROM UserList WHERE UserName = '$UserName' AND Password = '$Password'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    if ($UserName == "admin" && $Password = "admin") {
                        header("Location: admin.php");
                    } else {
                        header("Location: index.php");
                    }
                    exit();
                } else {
                    echo "<p class='error'>Invalid username or password</p>";
                }
            }
            mysqli_close($conn);
        ?>

        <form id="log-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="log-container">
                <label for="username"><b>Username</b></label></br>
                <input type="text" placeholder="Enter Username" id="username" name="username" required></br></br>

                <label for="psw"><b>Password</b></label></br>
                <input type="password" placeholder="Enter Password" id="psw" name="psw" required></br></br>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <span class="psw"><a href="#">Forgot password?</a></span></br></br>
                <button type="submit" name="login" class="loginbtn">Login</button></br>
                <p>Not a member? <a href="register.php">Register here!</a></p>
            </div>
        </form>

        <!--Footer-->
        <?php include("footer.php"); ?>
    </body>
</html>