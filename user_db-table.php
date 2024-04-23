<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
        <meta name="description" content="Connect, Create Database and Table for User Management"/>
        <meta name="keywords" content="HTML5, PHP"/>
        <meta name="author" content="Wong Kiing Xuan"/>
		<title>User - Connect, Create Database and Table</title>
	</head>
	<body>
        <?php
            // set the servername, username, password and database name
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "FCMSUserMgmt";

            // Create connection
            //The mysqli_connect() function attempts to open a connection to the MySQL Server 
            //running on host which can be either a host name or an IP address. 
            $conn = mysqli_connect($servername, $username, $password);

            // Check connection
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error() . "\n");
            }

            // Create database
            //mysqli_query() function performs a query against a database.
            $sql = "CREATE DATABASE IF NOT EXISTS FCMSUserMgmt";
            if (!mysqli_query($conn, $sql))
            {
                echo "Error creating database: " . mysqli_error($conn) . "\n";
            }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error() . "\n");
            }

            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS UserList
                    (
                    UserName VARCHAR(50) NOT NULL PRIMARY KEY,
                    Name VARCHAR(50) NOT NULL,
                    Email VARCHAR(50) NOT NULL,
                    Password VARCHAR(50) NOT NULL
                    )";

            if (!mysqli_query($conn, $sql))
            {
                echo "Error creating table: " . mysqli_error($conn) ."\n";
            }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('admin', 'admin', 'admin@admin.com', 'admin');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('AiLing123', 'Ai Ling', 'ailing@gmail.com', '123456');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('JohnMike234', 'John Mike', 'johnmike@gmail.com', '234567');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('PaulLim345', 'Paul Lim', 'paullim@gmail.com', '345678');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('MeiMei456', 'Mei Mei', 'meimei@gmail.com', '456789')";

            if (!mysqli_multi_query($conn, $sql))
            {
                echo "Error inserting dummy data: " . mysqli_error($conn);
            }

            mysqli_close($conn);
		?>
    </body>
</html>