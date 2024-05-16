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
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Create database
            //mysqli_query() function performs a query against a database.
            $sql = "CREATE DATABASE IF NOT EXISTS FCMSUserMgmt";
            if (!mysqli_query($conn, $sql)) { echo "Error creating database: " . mysqli_error($conn) . "\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS UserList
                    (
                    UserName VARCHAR(50) NOT NULL PRIMARY KEY,
                    Name VARCHAR(50) NOT NULL,
                    Email VARCHAR(50) NOT NULL,
                    Password VARCHAR(50) NOT NULL
                    )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            $sql = "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('admin', 'admin', 'admin@admin.com', 'admin');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('king', 'King', 'king@gmail.com', 'king');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('AiLing123', 'Ai Ling', 'ailing@gmail.com', '123456');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('JohnMike234', 'John Mike', 'johnmike@gmail.com', '234567');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('PaulLim345', 'Paul Lim', 'paullim@gmail.com', '345678');";
            $sql .= "REPLACE INTO UserList (UserName, Name, Email, Password)
            VALUES ('MeiMei456', 'Mei Mei', 'meimei@gmail.com', '456789')";

            if (!mysqli_multi_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS OrderHistory";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS OrderHistory
                    (
                    OrderID INT AUTO_INCREMENT PRIMARY KEY,
                    ProductName VARCHAR(100) NOT NULL,
                    Quantity INT NOT NULL,
                    Price DECIMAL(10, 2) NOT NULL,
                    DateOrdered DATE NOT NULL
                    )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            $sql = "INSERT INTO OrderHistory (ProductName, Quantity, Price, DateOrdered)
            VALUES ('Satay', 5, 25.00, '2024-05-01')";
            $sql .= ", ('Beef Burger', 3, 105.00, '2024-05-02')";
            $sql .= ", ('Murtabak', 2, 12.00, '2024-05-03')";
            $sql .= ", ('Mee Rebus', 1, 8.00, '2024-05-04')";
            $sql .= ", ('Roti Bakar', 4, 20.00, '2024-05-05')";

            if (!mysqli_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS Invoice";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS Invoice
                    (
                    InvoiceID INT AUTO_INCREMENT PRIMARY KEY,
                    UserName VARCHAR(100) NOT NULL,
                    OrderID INT NOT NULL,
                    Price DECIMAL(10, 2) NOT NULL,
                    InvoiceDate DATE NOT NULL
                    )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            $sql = "INSERT INTO Invoice (UserName, OrderID, Price, InvoiceDate)
            VALUES ('king', 1, 25.00, '2024-05-01')";
            $sql .= ", ('king', 2, 105.00, '2024-05-02')";
            $sql .= ", ('king', 3, 12.00, '2024-05-03')";
            $sql .= ", ('king', 4, 8.00, '2024-05-04')";
            $sql .= ", ('king', 5, 20.00, '2024-05-05')";

            if (!mysqli_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS UserFeedback";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS UserFeedback
                    (
                    FeedbackDate DATE NOT NULL PRIMARY KEY,
                    UserName VARCHAR(100) NOT NULL,
                    Email VARCHAR(100) NOT NULL,
                    Feedback VARCHAR(255) NOT NULL
                    )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            $sql = "INSERT INTO UserFeedback (FeedbackDate, UserName, Email, Feedback)
            VALUES ('2024-05-01', 'John Mike', 'johnmike@gmail.com', 'Great service!')";
            $sql .= ", ('2024-05-02', 'king', 'king@gmail.com', 'Loved the food!')";
            $sql .= ", ('2024-05-03', 'AiLing123', 'ailing@gmail.com', 'Excellent experience.')";
            $sql .= ", ('2024-05-04', 'PaulLim345', 'paullim@gmail.com', 'Will order again.')";
            $sql .= ", ('2024-05-05', 'MeiMei456', 'meimei@gmail.com', 'Very satisfied!')";

            if (!mysqli_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS Payments";
            
            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }
            
            // sql to create table
            $sql = "CREATE TABLE IF NOT EXISTS Payments (
                    PaymentID INT AUTO_INCREMENT PRIMARY KEY,
                    OrderID INT NOT NULL,
                    Full_Name VARCHAR(255) NOT NULL,
                    Email VARCHAR(255) NOT NULL,
                    Address VARCHAR(255) NOT NULL,
                    City VARCHAR(100) NOT NULL,
                    State VARCHAR(100) NOT NULL,
                    Postcode VARCHAR(20) NOT NULL,
                    Name_on_Card VARCHAR(255) NOT NULL,
                    CardNumber VARCHAR(20) NOT NULL,
                    ExpMonth VARCHAR(20) NOT NULL,
                    ExpYear VARCHAR(4) NOT NULL,
                    CVV VARCHAR(3) NOT NULL,
                    PaymentDate DATE
                    )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            $sql = "INSERT INTO Payments (OrderID, Full_Name, Email, Address, City, State, Postcode, Name_on_Card, CardNumber, ExpMonth, ExpYear, CVV, PaymentDate)
            VALUES (1, 'John Doe', 'john@example.com', '123 Main St', 'Kuching', 'Sarawak', '12345', 'Mr. John Doe', '1111222233334444', 'January', '2023', '123', '2024-05-01')";
            $sql .= ", (2, 'Jane Doe', 'jane@example.com', '456 Elm St', 'Kuching', 'Sarawak', '67890', 'Ms. Jane Doe', '5555666677778888', 'February', '2024', '456', '2024-05-02')";
            $sql .= ", (3, 'Alice Smith', 'alice@example.com', '789 Oak St', 'Kuching', 'Sarawak', '11223', 'Mrs. Alice Smith', '9999000011112222', 'March', '2025', '789', '2024-05-03')";
            $sql .= ", (4, 'Bob Johnson', 'bob@example.com', '101 Pine St', 'Kuching', 'Sarawak', '44556', 'Mr. Bob Johnson', '3333444455556666', 'April', '2026', '012', '2024-05-04')";
            $sql .= ", (5, 'Charlie Brown', 'charlie@example.com', '202 Birch St', 'Kuching', 'Sarawak', '77889', 'Mr. Charlie Brown', '7777888899990000', 'May', '2027', '345', '2024-05-05')";

            if (!mysqli_multi_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS Favourite";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // Insert into favorites table (create table if not exists)
            $sql = "CREATE TABLE IF NOT EXISTS Favourite (
                        ID INT AUTO_INCREMENT PRIMARY KEY,
                        UserName VARCHAR(255) NOT NULL,
                        FoodName VARCHAR(255) NOT NULL
                    )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);
		?>
    </body>
</html>