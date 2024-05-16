<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Create New User Page"/>
		<meta name="keywords" content="HTML5, CSS, PHP"/>
		<meta name="author" content="Wong Kiing Xuan"/>
        <title> Admin - Delete Menu </title>
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
            
            $foodName = "";

            if (isset($_POST["foodName"])) {
				$foodName = $_POST["foodName"];
			} else {
				require ("error.php"); 
			}

            $foodName = $_POST["foodName"];
        
            // Perform the SQL deletion
            $sql = "DELETE FROM menuitems1 WHERE foodName = '$foodName'";
        
            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            // Close the database connection
            $conn->close();

            header("Location: menu_view1.php");
        ?>
    </body>
</html>