<?php
    // Connect to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "FCMSUserMgmt";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

    // Fetch data from totalsales table
    $sql_total_sales = "SELECT month_year, total_sales FROM total_sales";
    $result_total_sales = $conn->query($sql_total_sales);

    $dataPoints = array();
    if ($result_total_sales->num_rows > 0) {
        while($row = $result_total_sales->fetch_assoc()) {
            $dataPoints[] = array("label" => $row["month_year"], "y" => $row["total_sales"]);
        }
    } else { echo "0 results"; }

    // Fetch data from the featuredsold table
    $sql_featured = "SELECT cuisine_name, items_sold FROM featuredsold";
    $result_featured = $conn->query($sql_featured);

    $dataPoints_featured = array();
    if ($result_featured->num_rows > 0) {
        while($row = $result_featured->fetch_assoc()) {
            // Push each row of data into the $dataPoints_featured array
            $dataPoints_featured[] = array("label" => $row["cuisine_name"], "y" => $row["items_sold"]);
        }
    } else { echo "0 results"; }

    // Fetch data from the localsold table
    $sql_local = "SELECT item_name, items_sold FROM localsold";
    $result_local = $conn->query($sql_local);

    $dataPoints_local = array();
    if ($result_local->num_rows > 0) {
        while($row = $result_local->fetch_assoc()) {
            // Push each row of data into the $dataPoints_local array
            $dataPoints_local[] = array("label" => $row["item_name"], "y" => $row["items_sold"]);
        }
    } else { echo "0 results"; }

    // Fetch data from the westernsold table
    $sql_western = "SELECT item_name, items_sold FROM westernsold";
    $result_western = $conn->query($sql_western);

    $dataPoints_western = array();
    if ($result_western->num_rows > 0) {
        while($row = $result_western->fetch_assoc()) {
            // Push each row of data into the $dataPoints_western array
            $dataPoints_western[] = array("label" => $row["item_name"], "y" => $row["items_sold"]);
        }
    } else { echo "0 results"; }

    // Fetch data from the halalsold table
    $sql_halal = "SELECT item_name, items_sold FROM halalsold";
    $result_halal = $conn->query($sql_halal);

    $dataPoints_halal = array();
    if ($result_halal->num_rows > 0) {
        while($row = $result_halal->fetch_assoc()) {
            // Push each row of data into the $dataPoints_halal array
            $dataPoints_halal[] = array("label" => $row["item_name"], "y" => $row["items_sold"]);
        }
    } else { echo "0 results"; }

    $conn->close();
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Analytic Dashboard</title>
        <link rel="stylesheet" href="./css/admin.css" />
        <link rel="stylesheet" type="text/css" href="./css/analyticstyle.css">
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script> 
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script>
            window.onload = function () {
                // Chart for total sales
                var data = [{
                    type: "line",                
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }];

                var options = {
                    zoomEnabled: true,
                    animationEnabled: true,
                    title: {
                        text: "Total Sales Over Past 6 Months"
                    },
                    axisY: {
                        title: "Total Sales",
                        lineThickness: 1
                    },
                    axisX: {
                        title: "Date"
                    },
                    data: data
                };

                var chart = new CanvasJS.Chart("chartContainer", options);
                chart.render();

                // Chart for featured cuisine
                var chart_featured = new CanvasJS.Chart("chartContainer_featured", {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light1",
                    title:{
                        text: "Featured Cuisine Sold"
                    },
                    axisY:{
                        title: "Items Sold"
                    },
                    data: [{
                        type: "column",
                        barThickness: 20,  // Set the bar thickness
                        dataPoints: <?php echo json_encode($dataPoints_featured, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart_featured.render();

                // Chart for locally sold items
                var chart_local = new CanvasJS.Chart("chartContainer_local", {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light1",
                    title:{
                        text: "Local Cuisine Sold"
                    },
                    axisY:{
                        title: "Items Sold"
                    },
                    data: [{
                        type: "column",
                        barThickness: 20,  // Set the bar thickness
                        dataPoints: <?php echo json_encode($dataPoints_local, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart_local.render();

                // Chart for western cuisine items sold
                var chart_western = new CanvasJS.Chart("chartContainer_western", {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light1",
                    title:{
                        text: "Western Cuisine Sold"
                    },
                    axisY:{
                        title: "Items Sold"
                    },
                    data: [{
                        type: "column",
                        barThickness: 20,  // Set the bar thickness
                        dataPoints: <?php echo json_encode($dataPoints_western, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart_western.render();

                // Chart for halal sold items
                var chart_halal = new CanvasJS.Chart("chartContainer_halal", {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light1",
                    title:{
                        text: "Halal Cuisine Sold"
                    },
                    axisY:{
                        title: "Items Sold"
                    },
                    data: [{
                        type: "column",
                        barThickness: 20,  // Set the bar thickness
                        dataPoints: <?php echo json_encode($dataPoints_halal, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart_halal.render();
            }
        </script>
    </head>

    <body>
        <section>
            <!-- User Top Navigation Starts from Here -->
            <div class="main-content">
                <div class="main-top">
                    <h1> <img src="images/user-tie-solid.png" alt="FCMS Logo"> Welcome Admin!</h1> <br>
                    <div class="admin">
                        <a class="btd-button" href="admin.php">
                            <button type="submit" name="btd"> <img src="images/arrow-left-solid.png"/> Back to Dashboard </button>
                        </a>
                    </div>
                </div>
        
                <h1 class="dashboard-title">Analytic Dashboard</h1>
                <div id="chartContainer"></div>

                <div class="chart-container">
                    <div id="chartContainer_featured" class="chart"></div>
                    <div id="chartContainer_local" class="chart"></div>
                </div>

                <div class="chart-container">
                    <div id="chartContainer_western" class="chart"></div>
                    <div id="chartContainer_halal" class="chart"></div>
                </div>
            </div>
        </section>
    </body>
</html>