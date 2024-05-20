<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FCMSUserMgmt";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

    // Start transaction
    $conn->autocommit(FALSE);

    // Drop tables if they already exist
    $sqlDrop_featured = "DROP TABLE IF EXISTS featuredsold";
    $sqlDrop_local = "DROP TABLE IF EXISTS localsold";
    $sqlDrop_western = "DROP TABLE IF EXISTS westernsold";
    $sqlDrop_halal = "DROP TABLE IF EXISTS halalsold";
    $sqlDrop_total_sales = "DROP TABLE IF EXISTS total_sales";

    if ($conn->query($sqlDrop_featured) === TRUE && $conn->query($sqlDrop_local) === TRUE && $conn->query($sqlDrop_western) === TRUE && $conn->query($sqlDrop_halal) === TRUE && $conn->query($sqlDrop_total_sales) === TRUE) {
        // SQL to create table featuredsold
        $sql_featured = "CREATE TABLE featuredsold (
            cuisine_name VARCHAR(50) PRIMARY KEY,
            items_sold INT(6) UNSIGNED
        )";

        // SQL to create table localsold
        $sql_local = "CREATE TABLE localsold (
            item_name VARCHAR(50) PRIMARY KEY,
            items_sold INT(6) UNSIGNED
        )";

        // SQL to create table westernsold
        $sql_western = "CREATE TABLE westernsold (
            item_name VARCHAR(50) PRIMARY KEY,
            items_sold INT(6) UNSIGNED
        )";

        // SQL to create table halalsold
        $sql_halal = "CREATE TABLE halalsold (
            item_name VARCHAR(50) PRIMARY KEY,
            items_sold INT(6) UNSIGNED
        )";

        // SQL to create table total_sales
        $sql_total_sales = "CREATE TABLE total_sales (
        month_year DATE PRIMARY KEY,
        total_sales INT(10) UNSIGNED
        )";

        // Execute all table creation queries
        if ($conn->query($sql_featured) === TRUE && $conn->query($sql_local) === TRUE && $conn->query($sql_western) === TRUE && $conn->query($sql_halal) === TRUE && $conn->query($sql_total_sales) === TRUE) {
            // Define data for featuredsold table
            $cuisines = array(
                "nasi lemak" => 50,
                "roti canai" => 30,
                "char kway teow" => 40,
                "hainanese chicken rice" => 60,
                "laksa sarawak" => 70,
                "satay" => 80
            );

            // Insert data into featuredsold table
            foreach ($cuisines as $cuisine => $itemsSold) {
                $insertSql_featured = "INSERT INTO featuredsold (cuisine_name, items_sold) VALUES ('$cuisine', '$itemsSold')";
                $conn->query($insertSql_featured);
            }

            // Define data for localsold table
            $items_local = array(
                "mee goreng mamak" => 50,
                "ayam penyet" => 30,
                "asam pedas" => 40,
                "nasi ayam" => 60,
                "murtabak" => 70,
                "prawn mee" => 80
            );

            // Insert data into localsold table
            foreach ($items_local as $item => $itemsSold) {
                $insertSql_local = "INSERT INTO localsold (item_name, items_sold) VALUES ('$item', '$itemsSold')";
                $conn->query($insertSql_local);
            }

            // Define data for westernsold table
            $items_western = array(
                "chicken chop" => 60,
                "fish and chips" => 40,
                "spaghetti bolognese" => 50,
                "grilled lamb chops" => 70,
                "beef burger" => 80,
                "caesar salad" => 30
            );

            // Insert data into westernsold table
            foreach ($items_western as $item => $itemsSold) {
                $insertSql_western = "INSERT INTO westernsold (item_name, items_sold) VALUES ('$item', '$itemsSold')";
                $conn->query($insertSql_western);
            }

            // Define data for halalsold table
            $items_halal = array(
                "roti john" => 40,
                "mee rebus" => 50,
                "nasi kandar" => 60,
                "ayam percik" => 70,
                "roti bakar" => 30,
                "soto ayam" => 80
            );

            // Insert data into halalsold table
            foreach ($items_halal as $item => $itemsSold) {
                $insertSql_halal = "INSERT INTO halalsold (item_name, items_sold) VALUES ('$item', '$itemsSold')";
                $conn->query($insertSql_halal);
            }

            // Define data for total_sales table
            $total_sales_data = array(
                "2023-12-01" => 9723,
                "2024-01-01" => 7672,
                "2024-02-01" => 3344,
                "2024-03-01" => 5452,
                "2024-04-01" => 3784,
                "2024-05-01" => 8834
            );

            // Sort the array by month
            ksort($total_sales_data);

            // Insert data into total_sales table
            foreach ($total_sales_data as $month_year => $total_sales) {
                $insertSql_total_sales = "INSERT INTO total_sales (month_year, total_sales) VALUES ('$month_year', '$total_sales')";
                $conn->query($insertSql_total_sales);
            }

            // Commit transaction
            $conn->commit();
        } else {
            echo "Error creating tables: " . $conn->error . "<br>";
            // Rollback transaction
            $conn->rollback();
        }
    } else { echo "Error dropping tables: " . $conn->error . "<br>"; }

    // Close connection
    $conn->close();
?>
