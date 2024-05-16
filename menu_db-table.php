<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Menu Database Setup</title>
    </head>
    <body>
        <?php
            // Set the server details
            $servername = "localhost";
            $username = "root";
            $password = ""; // Specify the password if applicable
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

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS MenuItems1";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // SQL to create table
            $sql = "CREATE TABLE IF NOT EXISTS MenuItems1 (
                foodName VARCHAR(255) NOT NULL PRIMARY KEY,
                foodPrice DECIMAL(10, 2) NOT NULL,
                description TEXT,
                imagePath VARCHAR(255) NOT NULL
            )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            // Insert data
            $sql = "REPLACE INTO MenuItems1 (foodName, foodPrice, description, imagePath) 
            VALUES ('Nasi Lemak', 7.00, 'Fragrant rice dish with coconut milk and condiments.', './images/nl.jpg');";
            $sql .= "REPLACE INTO MenuItems1 (foodName, foodPrice, description, imagePath) 
            VALUES ('Roti Canai', 2.00, 'Flaky, crispy flatbread served with curry sauce.', './images/rc.jpg');";
            $sql .= "REPLACE INTO MenuItems1 (foodName, foodPrice, description, imagePath) 
            VALUES ('Char Kway Teow', 10.00, 'Stir-fried flat noodles with prawns and eggs.', './images/ckt.jpg');";
            $sql .= "REPLACE INTO MenuItems1 (foodName, foodPrice, description, imagePath) 
            VALUES ('Hainanese Chicken Rice', 8.00, 'Poached chicken with fragrant rice and sauce.', './images/hcr.png');";
            $sql .= "REPLACE INTO MenuItems1 (foodName, foodPrice, description, imagePath) 
            VALUES ('Laksa Sarawak', 8.00, 'Spicy noodle soup with coconut milk and seafood.', './images/ls.webp');";
            $sql .= "REPLACE INTO MenuItems1 (foodName, foodPrice, description, imagePath) 
            VALUES ('Satay', 5.00, 'Grilled skewered meat served with peanut sauce.', './images/sty.webp')";

            if (!mysqli_multi_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS MenuItems2";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // SQL to create table
            $sql = "CREATE TABLE IF NOT EXISTS MenuItems2 (
                foodName VARCHAR(255) NOT NULL PRIMARY KEY,
                foodPrice DECIMAL(10, 2) NOT NULL,
                description TEXT,
                imagePath VARCHAR(255) NOT NULL
            )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            // Insert data
            $sql = "REPLACE INTO MenuItems2 (foodName, foodPrice, description, imagePath) 
            VALUES ('Mee Goreng Mamak', 12.00, 'Spicy stir-fried noodles with Indian spices.', './images/mgm.png');";
            $sql .= "REPLACE INTO MenuItems2 (foodName, foodPrice, description, imagePath) 
            VALUES ('Ayam Penyet', 16.00, 'Fried chicken served with smashed spicy chili.', './images/ap.jpg');";
            $sql .= "REPLACE INTO MenuItems2 (foodName, foodPrice, description, imagePath) 
            VALUES ('Asam Pedas', 13.00, 'Tangy and spicy fish stew with tamarind broth.', './images/aps.jpg');";
            $sql .= "REPLACE INTO MenuItems2 (foodName, foodPrice, description, imagePath) 
            VALUES ('Nasi Ayam', 12.00, 'Chicken rice with flavorful broth and condiments.', './images/na.webp');";
            $sql .= "REPLACE INTO MenuItems2 (foodName, foodPrice, description, imagePath) 
            VALUES ('Murtabak', 6.00, 'Savory pancake filled with minced meat and onions.', './images/mtb.jpg');";
            $sql .= "REPLACE INTO MenuItems2 (foodName, foodPrice, description, imagePath) 
            VALUES ('Prawn Mee', 10.00, 'Noodle soup with prawns and spicy broth.', './images/pm.jpg')";

            if (!mysqli_multi_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS MenuItems3";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // SQL to create table
            $sql = "CREATE TABLE IF NOT EXISTS MenuItems3 (
                foodName VARCHAR(255) NOT NULL PRIMARY KEY,
                foodPrice DECIMAL(10, 2) NOT NULL,
                description TEXT,
                imagePath VARCHAR(255) NOT NULL
            )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            // Insert data
            $sql = "REPLACE INTO MenuItems3 (foodName, foodPrice, description, imagePath) 
            VALUES ('Chicken Chop', 24.00, 'Grilled or fried chicken cutlet with sauce.', './images/cc.webp');";
            $sql .= "REPLACE INTO MenuItems3 (foodName, foodPrice, description, imagePath) 
            VALUES ('Fish and Chips', 30.00, 'Fried fish fillets served with fries.', './images/fnc.jpeg');";
            $sql .= "REPLACE INTO MenuItems3 (foodName, foodPrice, description, imagePath) 
            VALUES ('Spaghetti Bolognese', 26.00, 'Pasta with meaty tomato sauce.', './images/sb.webp');";
            $sql .= "REPLACE INTO MenuItems3 (foodName, foodPrice, description, imagePath) 
            VALUES ('Grilled Lamb Chops', 45.00, 'Tender lamb chops grilled to perfection.', './images/lc.webp');";
            $sql .= "REPLACE INTO MenuItems3 (foodName, foodPrice, description, imagePath) 
            VALUES ('Beef Burger', 35.00, 'Grilled beef patty served in a bun.', './images/bb.jpg');";
            $sql .= "REPLACE INTO MenuItems3 (foodName, foodPrice, description, imagePath) 
            VALUES ('Caesar Salad', 23.00, 'Salad with romaine lettuce, croutons, and dressing.', './images/cs.webp')";

            if (!mysqli_multi_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error() . "\n"); }

            // Drop table if exists
            $sql = "DROP TABLE IF EXISTS MenuItems4";

            if (!mysqli_query($conn, $sql)) { echo "Error dropping table: " . mysqli_error($conn) . "\n"; }

            // SQL to create table
            $sql = "CREATE TABLE IF NOT EXISTS MenuItems4 (
                foodName VARCHAR(255) NOT NULL PRIMARY KEY,
                foodPrice DECIMAL(10, 2) NOT NULL,
                description TEXT,
                imagePath VARCHAR(255) NOT NULL
            )";

            if (!mysqli_query($conn, $sql)) { echo "Error creating table: " . mysqli_error($conn) ."\n"; }

            mysqli_close($conn);

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

            // Insert data
            $sql = "REPLACE INTO MenuItems4 (foodName, foodPrice, description, imagePath) 
            VALUES ('Roti John', 8.00, 'Spicy omelette sandwich in French loaf.', './images/rj.png');";
            $sql .= "REPLACE INTO MenuItems4 (foodName, foodPrice, description, imagePath) 
            VALUES ('Mee Rebus', 8.00, 'Noodle dish in sweet potato gravy.', './images/mr.jpg');";
            $sql .= "REPLACE INTO MenuItems4 (foodName, foodPrice, description, imagePath) 
            VALUES ('Nasi Kandar', 10.00, 'Steamed rice with various curries and sides.', './images/nk.jpg');";
            $sql .= "REPLACE INTO MenuItems4 (foodName, foodPrice, description, imagePath) 
            VALUES ('Ayam Percik', 8.00, 'Grilled chicken marinated in spicy coconut sauce.', './images/apc.jpeg');";
            $sql .= "REPLACE INTO MenuItems4 (foodName, foodPrice, description, imagePath) 
            VALUES ('Roti Bakar', 5.00, 'Toasted bread with butter and kaya jam.', './images/rb.jpg');";
            $sql .= "REPLACE INTO MenuItems4 (foodName, foodPrice, description, imagePath) 
            VALUES ('Soto Ayam', 13.00, 'Chicken soup with noodles and herbs.', './images/sa.jpg')";

            if (!mysqli_multi_query($conn, $sql)) { echo "Error inserting dummy data: " . mysqli_error($conn); }

            mysqli_close($conn);
        ?>
    </body>
</html>