<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/cartstyle.css" />
    <title>Featured</title>
  </head>

  <body>
    <!--Header-->
    <?php include("header.php"); ?>
    <!--Main-->
    <section>
      <div class="menu-title">
        <h1>Featured Cuisine</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="shop-food-content">
            <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "FCMSUserMgmt";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }

                // Query to fetch menu items
                $sql = "SELECT foodName, foodPrice, description, imagePath FROM MenuItems1";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='shop-food-card'>";
                        echo "<div class='shop-food-card-img'>";
                        echo "<img src='" . $row["imagePath"] . "' alt='" . $row["foodName"] . "' />";
                        echo "</div>";
                        echo "<div class='shop-food-card-text'>";
                        echo "<h3 class='shop-food-card-title'>" . $row["foodName"] . "</h3>";
                        echo "<div class='shop-food-card-price'>$" . number_format($row["foodPrice"], 2) . "</div>";
                        echo "<p class='shop-food-card-desc'>" . $row["description"] . "</p>";
                        echo "<button class='btn btn-add' onclick=\"addToCart('" . $row["foodName"] . "', " . $row["foodPrice"] . ")\">Add to cart</button>";
                        echo "<button class='btn btn-favourite' onclick=\"addToFavorites('" . $row["foodName"] . "')\">Add to favourites</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else { echo "<p>No menu items available.</p>"; }

                // Close connection
                mysqli_close($conn);
            ?>
        </div>
      </div>
    </section>
    <!--Cart-->
    <?php include("cart.php"); ?>
    <!--Footer-->
    <?php include("footer.php"); ?>
    <script src="./js/cart.js"></script>
    <script src="./js/favourite.js"></script>
  </body>
</html>