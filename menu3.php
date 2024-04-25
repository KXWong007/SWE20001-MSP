<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/cartstyle.css" />
    <title>Western</title>
  </head>

  <body>
    <!--Header-->
    <?php include("header.php"); ?>
    <!--Main-->
    <section>
      <div class="menu-title">
        <h1>Western Cuisine</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="shop-food-content">
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/cc.webp" alt="Chicken Chop" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Chicken Chop</h3>
              <div class="shop-food-card-price">$24</div>
              <p class="shop-food-card-desc">Grilled or fried chicken cutlet with sauce.</p>
              <button class="btn btn-add" onclick="addToCart('Chicken Chop', 24)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/fnc.jpeg" alt="Fish and Chips" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Fish and Chips</h3>
              <div class="shop-food-card-price">$30</div>
              <p class="shop-food-card-desc">Fried fish fillets served with fries.</p>
              <button class="btn btn-add" onclick="addToCart('Fish and Chips', 30)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/sb.webp" alt="Spaghetti Bolognese" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Spaghetti Bolognese</h3>
              <div class="shop-food-card-price">$26</div>
              <p class="shop-food-card-desc">Pasta with meaty tomato sauce.</p>
              <button class="btn btn-add" onclick="addToCart('Spaghetti Bolognese', 26)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/lc.webp" alt="Grilled Lamb Chops" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Grilled Lamb Chops</h3>
              <div class="shop-food-card-price">$45</div>
              <p class="shop-food-card-desc">Tender lamb chops grilled to perfection.</p>
              <button class="btn btn-add" onclick="addToCart('Grilled Lamb Chops', 45)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/bb.jpg" alt="Beef Burger" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Beef Burger</h3>
              <div class="shop-food-card-price">$35</div>
              <p class="shop-food-card-desc">Grilled beef patty served in a bun.</p>
              <button class="btn btn-add" onclick="addToCart('Beef Burger', 35)">Add to cart</button>
            </div>
          </div>
          <div class="shop-food-card">
            <div class="shop-food-card-img">
              <img src="./images/cs.webp" alt="Caesar Salad" />
            </div>
            <div class="shop-food-card-text">
              <h3 class="shop-food-card-title">Caesar Salad</h3>
              <div class="shop-food-card-price">$23</div>
              <p class="shop-food-card-desc">Salad with romaine lettuce, croutons, and dressing.</p>
              <button class="btn btn-add" onclick="addToCart('Caesar Salad', 23)">Add to cart</button>
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