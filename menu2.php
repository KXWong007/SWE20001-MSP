<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/cartstyle.css" />
    <title>Local</title>
  </head>

  <body>
    <!--Header-->
    <?php include("header.php"); ?>
    <!--Main-->
    <section>
      <div class="menu-title">
        <h1>Local Cuisine</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="shop-food-content">
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/mgm.png" alt="Mee Goreng Mamak" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Mee Goreng Mamak</h3>
              <div class="shop-food-card-price">$12</div>
              <p class="shop-food-card-desc">Spicy stir-fried noodles with Indian spices.</p>
              <button class="btn btn-add" onclick="addToCart('Mee Goreng Mamak', 12)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/ap.jpg" alt="Ayam Penyet" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Ayam Penyet</h3>
              <div class="shop-food-card-price">$16</div>
              <p class="shop-food-card-desc">Fried chicken served with smashed spicy chili.</p>
              <button class="btn btn-add" onclick="addToCart('Ayam Penyet', 16)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/aps.jpg" alt="Asam Pedas" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Asam Pedas</h3>
              <div class="shop-food-card-price">$13</div>
              <p class="shop-food-card-desc">Tangy and spicy fish stew with tamarind broth.</p>
              <button class="btn btn-add" onclick="addToCart('Asam Pedas', 13)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/na.webp" alt="Nasi Ayam" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Nasi Ayam</h3>
              <div class="shop-food-card-price">$12</div>
              <p class="shop-food-card-desc">Chicken rice with flavorful broth and condiments.</p>
              <button class="btn btn-add" onclick="addToCart('Nasi Ayam', 12)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/mtb.jpg" alt="Murtabak" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Murtabak</h3>
              <div class="shop-food-card-price">$6</div>
              <p class="shop-food-card-desc">Savory pancake filled with minced meat and onions.</p>
              <button class="btn btn-add" onclick="addToCart('Murtabak', 6)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/pm.jpg" alt="Prawn Mee" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Prawn Mee</h3>
              <div class="shop-food-card-price">$10</div>
              <p class="shop-food-card-desc">Noodle soup with prawns and spicy broth.</p>
              <button class="btn btn-add" onclick="addToCart('Prawn Mee', 10)">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Cart-->
    <?php include("cart.php"); ?>
    <!--Footer-->
    <?php include("footer.php"); ?>
    <script src="./js/cart.js"></script>
  </body>
</html>