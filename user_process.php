<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
        <meta name="description" content="Connect, Create Database and Table for User Management"/>
        <meta name="keywords" content="HTML5, PHP"/>
        <meta name="author" content="Wong Kiing Xuan"/>
		<title>User Account Process</title>
	</head>
	<body>
        <h1>Account Create Confirmation</h1>
        <?php
            //assign the variables to empty here
            $Name = "";
            $UserName = "";
            $Email = "";
            $Password = "";

            //checks if process was triggered by a form,
            //if not display an error message on another file
            if (isset($_POST["name"])) { $Name = $_POST["name"]; } else { /*using require make link to error.php*/ require ("error.php"); }

            //assign the rest of the form validation to PHP variables here
            if (isset($_POST["username"])) { $UserName = $_POST["username"]; } else { require ("error.php"); }
            if (isset($_POST["email"])) { $Email = $_POST["email"]; } else { require ("error.php"); }
            if (isset($_POST["psw"])) { $Password = $_POST["psw"]; } else { require ("error.php"); }
        ?>

        <form id="AccountConfirmform">
            <fieldset>
                <legend><em>User's Info:</em></legend>
                <p>Congratulation an creating your account, <?php echo $Name ?>!</p><br>
                <p><strong>Your info:</strong></p>
                <p>Username: <?php echo $_POST["name"]; ?></p>
                <p>Email: <?php echo $_POST["email"]; ?></p>
                <p>Password: <?php echo $_POST["psw"]; ?></p>
            </fieldset>
        </form>

        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "FCMSUserMgmt";
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }
            
            $Name = $_POST["name"];
            $UserName = $_POST["username"];
            $Email = $_POST["email"];
            $Password = $_POST["psw"];

            $sql = "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('$UserName', '$Name', '$Email', '$Password')";
            
            if (!mysqli_query($conn, $sql)) { echo "Error: " . $sql . "<br>" . mysqli_error($conn); }
            
            mysqli_close($conn);
        ?>
        <a class="btd-button" href="index.php">
            <button type="submit" name="btd" style="height: 28px; font-size: 16px; margin: 20px 3px; padding: auto; width: auto; border: 2px solid black; background-color: lightgreen; cursor: pointer;"> Back to Home Page </button>
        </a>
    </body>
</html>