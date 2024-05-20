<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Admin Create New Menu"/>
		<meta name="keywords" content="HTML5, CSS, PHP"/>
		<meta name="author" content="Wong Kiing Xuan"/>
		<title> Admin - Add Menu </title>
		<link rel="stylesheet" href="./css/admin.css"/>
	</head>
	<body>
		<?php
			$foodName = "";
			$foodPrice = "";
			$description = "";
			$imagePath = "";

			if (isset($_POST["foodName"])) { $foodName = $_POST["foodName"]; } else { require ("error.php"); }
			if (isset($_POST["foodPrice"])) { $foodPrice = $_POST["foodPrice"]; } else { require ("error.php"); }
			if (isset($_POST["description"])) { $description= $_POST["description"]; } else { require ("error.php"); }
			if (isset($_FILES["imagePath"]) && $_FILES["imagePath"]["error"] == 0) {
                $targetDir = "./images/"; // Directory where the uploaded files will be saved
                $targetFile = $targetDir . basename($_FILES["imagePath"]["name"]);
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                $allowedTypes = array("jpg", "png", "jpeg", "gif");
        
                // Check file type
                if (in_array($imageFileType, $allowedTypes)) {
                    // Move file to target directory
                    if (move_uploaded_file($_FILES["imagePath"]["tmp_name"], $targetFile)) {
                        $imagePath = $targetFile;
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        exit;
                    }
                } else {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    exit;
                }
            } else { require ("error.php"); }

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "FCMSUserMgmt";
            
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }
            
            $foodName = $_POST["foodName"];
            $foodPrice = $_POST["foodPrice"];
            $description = $_POST["description"];
			$imagePath = $_POST["imagePath"];

            $sql = "REPLACE INTO menuitems4 (foodName, foodPrice, description, imagePath)
            VALUES ('$foodName', '$foodPrice', '$description', './images/$imagePath')";
            
            if (!mysqli_query($conn, $sql)) { echo "Error: " . $sql . "<br>" . mysqli_error($conn); }
            
            mysqli_close($conn);

			header("Location: menu_view4.php");
        ?>
	</body>
</html>