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

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error() . "\n");
            }
            
            $Name = "";

            if (isset($_POST["name"])) {
				$Name = $_POST["name"];
			} else {
				require ("error.php"); 
			}

            $Name = $_POST["name"];
        
            // Perform the SQL deletion
            $sql = "DELETE FROM UserList WHERE Name = $Name";
        
            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            // Close the database connection
            $conn->close();

            header("Location: user_view.php");
        ?>
    </body>
</html>