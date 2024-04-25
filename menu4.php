<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/cartstyle.css" />
    <title>Halal</title>
  </head>

  <body>
    <!--Header-->
    <?php include("header.php"); ?>
    <!--Main-->
    <section>
      <div class="menu-title">
        <h1>Halal Cuisine</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="shop-food-content">
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/rj.png" alt="Roti John" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Roti John</h3>
              <div class="shop-food-card-price">$8</div>
              <p class="shop-food-card-desc">Spicy omelette sandwich in French loaf.</p>
              <button class="btn btn-add" onclick="addToCart('Roti John', 8)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/mr.jpg" alt="Mee Rebus" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Mee Rebus</h3>
              <div class="shop-food-card-price">$8</div>
              <p class="shop-food-card-desc">Noodle dish in sweet potato gravy.</p>
              <button class="btn btn-add" onclick="addToCart('Mee Rebus', 8)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/nk.jpg" alt="Nasi Kandar" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Nasi Kandar</h3>
              <div class="shop-food-card-price">$10</div>
              <p class="shop-food-card-desc">Steamed rice with various curries and sides.</p>
              <button class="btn btn-add" onclick="addToCart('Nasi Kandar', 10)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/apc.jpeg" alt="Ayam Percik" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Ayam Percik</h3>
              <div class="shop-food-card-price">$8</div>
              <p class="shop-food-card-desc">Grilled chicken marinated in spicy coconut sauce.</p>
              <button class="btn btn-add" onclick="addToCart('Ayam Percik', 8)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/rb.jpg" alt="Roti Bakar" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Roti Bakar</h3>
              <div class="shop-food-card-price">$5</div>
              <p class="shop-food-card-desc">Toasted bread with butter and kaya jam.</p>
              <button class="btn btn-add" onclick="addToCart('Roti Bakar', 5)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/sa.jpg" alt="Soto Ayam" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Soto Ayam</h3>
              <div class="shop-food-card-price">$13</div>
              <p class="shop-food-card-desc">Chicken soup with noodles and herbs.</p>
              <button class="btn btn-add" onclick="addToCart('Soto Ayam', 13)">Add to cart</button>
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