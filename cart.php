<?php
    echo
        '
            <div class="cart-sidebar" id="cart-sidebar">
                <h2>Shopping Cart</h2>
                <ul id="cart-items"></ul>
                <div id="cart-total">Total: $0.00</div> <!-- Total price -->
                <button class="btn-checkout" onclick="window.location.href = \'paygate.php\';">Checkout</button>
            </div>
        ';
?>