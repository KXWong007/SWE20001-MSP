<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FCMSUserMgmt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the data from the request
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['foodName'])) {
    $foodName = $data['foodName'];
    $userName = 'king'; // Replace with actual user identification logic

    // Drop table if exists
    $sql = "DROP TABLE IF EXISTS Favourite";

    if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

    // Insert into favorites table (create table if not exists)
    $sql = "CREATE TABLE IF NOT EXISTS Favourite (
                ID INT AUTO_INCREMENT PRIMARY KEY,
                UserName VARCHAR(255) NOT NULL,
                FoodName VARCHAR(255) NOT NULL
            )";
    if ($conn->query($sql) === TRUE) {
        // Insert favorite item
        $stmt = $conn->prepare("INSERT INTO Favourite (UserName, FoodName) VALUES (?, ?)");
        $stmt->bind_param("ss", $userName, $foodName);

        if ($stmt->execute()) { echo json_encode(['success' => true]); } else { echo json_encode(['success' => false, 'error' => $stmt->error]); }

        $stmt->close();
    } else { echo json_encode(['success' => false, 'error' => $conn->error]); }
} else { echo json_encode(['success' => false, 'error' => 'Invalid input']); }

$conn->close();
?>