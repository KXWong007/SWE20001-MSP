<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Featured</title>
  </head>

  <body>
    <!--Header-->
    <?php include("header.php"); ?>

    <section>
      <div class="menu-title">
        <h1>Featured Cuisine</h1>
      </div>
    </section>
    <section class="shop-guitars">
      <div class="container">
        <div class="shop-food-content">
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/nl.jpg" alt="Nasi Lemak" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Nasi Lemak</h3>
              <div class="shop-food-card-price">$7</div>
              <p class="shop-food-card-desc">Fragrant rice dish with coconut milk and condiments.</p>
              <button class="btn btn-add" onclick="addToCart('Nasi Lemak', 7)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/rc.jpg" alt="Roti Canai" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Roti Canai</h3>
              <div class="shop-food-card-price">$2</div>
              <p class="shop-food-card-desc">Flaky, crispy flatbread served with curry sauce.</p>
              <button class="btn btn-add" onclick="addToCart('Roti Canai', 2)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/ckt.jpg" alt="Char Kway Teow" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Char Kway Teow</h3>
              <div class="shop-food-card-price">$10</div>
              <p class="shop-food-card-desc">Stir-fried flat rice noodles with prawns and eggs.</p>
              <button class="btn btn-add" onclick="addToCart('Char Kway Teow', 10)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/hcr.png" alt="Hainanese Chicken Rice" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Hainanese Chicken Rice</h3>
              <div class="shop-food-card-price">$8</div>
              <p class="shop-food-card-desc">Poached chicken with fragrant rice and sauce.</p>
              <button class="btn btn-add" onclick="addToCart('Hainanese Chicken Rice', 8)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/ls.webp" alt="Laksa Sarawak" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Laksa Sarawak</h3>
              <div class="shop-food-card-price">$8</div>
              <p class="shop-food-card-desc">Spicy noodle soup with coconut milk and seafood.</p>
              <button class="btn btn-add" onclick="addToCart('Laksa Sarawak', 8)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/sty.webp" alt="Satay" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Satay</h3>
              <div class="shop-food-card-price">$5</div>
              <p class="shop-food-card-desc">Grilled skewered meat served with peanut sauce.</p>
              <button class="btn btn-add" onclick="addToCart('Satay', 5)">Add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Footer-->
    <?php include("footer.php"); ?>
    <script src="./js/script.js"></script>
  </body>
</html>