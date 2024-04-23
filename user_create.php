<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Admin Create New User Page"/>
		<meta name="keywords" content="HTML5, CSS, PHP"/>
		<meta name="author" content="Wong Kiing Xuan"/>
		<title> Admin - Add User </title>
		<link rel="stylesheet" href="./css/admin.css"/>
	</head>
	<body>
		<?php
			$Name = "";
			$UserName = "";
			$Email = "";
			$Password = "";

			if (isset($_POST["name"])) {
				$Name = $_POST["name"];
			} else {
				require ("error.php"); 
			}
			if (isset($_POST["username"])) {
				$UserName = $_POST["username"];
			} else {
				require ("error.php"); 
			}
			if (isset($_POST["email"])) {
				$Email = $_POST["email"];
			} else {
				require ("error.php"); 
			}
			if (isset($_POST["psw"])) {
				$Password = $_POST["psw"];
			} else {
				require ("error.php"); 
			}

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "FCMSUserMgmt";
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn)
            {
                die("Connection failed: " . mysqli_connect_error() . "\n");
            }
            
            $Name = $_POST["name"];
            $UserName = $_POST["username"];
            $Email = $_POST["email"];
            $Password = $_POST["psw"];

            $sql = "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('$UserName', '$Name', '$Email', '$Password')";
            
            if (!mysqli_query($conn, $sql))
            {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            mysqli_close($conn);

			header("Location: user_view.php");
        ?>
	</body>
</html>