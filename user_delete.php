<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Create New User Page"/>
		<meta name="keywords" content="HTML5, CSS, PHP"/>
		<meta name="author" content="Wong Kiing Xuan"/>
        <title> Admin - Delete User </title>
        <link rel="stylesheet" href="./css/admin.css">
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "FCMSUserMgmt";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            if (isset($_POST["username"])) { $UserName = $_POST["username"]; } else { require ("error.php"); }

            // Escape the Name to prevent SQL injection
            $UserName = mysqli_real_escape_string($conn, $UserName);
        
            // Perform the SQL deletion
            $sql = "DELETE FROM UserList WHERE UserName = '$UserName'";
        
            if (!mysqli_query($conn, $sql)) { echo "Error: " . $sql . "<br>" . mysqli_error($conn); } else {
                header("Location: user_view.php");
                exit();
            }
            
            // Close the database connection
            mysqli_close($conn);
        ?>
    </body>
</html>