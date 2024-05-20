<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Create New User Page"/>
		<meta name="keywords" content="HTML5, CSS, PHP"/>
		<meta name="author" content="Wong Kiing Xuan"/>
        <title> Admin - Edit User </title>
        <link rel="stylesheet" href="./css/admin.css">
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "FCMSUserMgmt";

                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }
                
                $name = "";
                $new_username = "";
                $new_email = "";
                $new_pasword = "";

                if (isset($_POST["name"])) { $Name = $_POST["name"]; } else { require ("error.php"); }
                if (isset($_POST["new_username"])) { $UserName = $_POST["new_username"]; } else { require ("error.php"); }
                if (isset($_POST["new_email"])) { $Email = $_POST["new_email"]; } else { require ("error.php"); }
                if (isset($_POST["new_psw"])) { $Password = $_POST["new_psw"]; } else { require ("error.php"); }

                $name = $_POST["name"];
                $new_username = $_POST["new_username"];
                $new_email = $_POST["new_email"];
                $new_pasword = $_POST["new_password"];
                
                $sql = "UPDATE UserList SET UserName = '$new_username', Email = '$new_email', Password = '$new_password' WHERE Name = $name";
            
                if (!mysqli_query($conn, $sql)) { echo "Error: " . $sql . "<br>" . mysqli_error($conn); }
            
                // Close the database connection
                $conn->close();

                header("Location: user_view.php");
            }
        ?>
    </body>
</html>