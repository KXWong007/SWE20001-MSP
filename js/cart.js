function toggleCartSidebar() {
    console.log("Basket button clicked");
    const sidebar = document.getElementById("cart-sidebar");
    if (sidebar.style.right === "0px") {
        sidebar.style.right = "-300px"; // Hide the sidebar
    } else {
        sidebar.style.right = "0px"; // Show the sidebar
    }
}


// Add an item to the cart with a "remove" button
function addToCart(name, price) {
    const cartItems = document.getElementById("cart-items");
    const cartItem = document.createElement("li");
    
    cartItem.setAttribute("data-name", name); // Important for the remove function
    cartItem.classList.add("cart-item");
    
    // Create a text span for the item description
    const itemText = document.createElement("span");
    itemText.textContent = `${name} - $${price}`;

    // Create a remove button
    const removeButton = document.createElement("button");
    removeButton.textContent = "Remove";
    removeButton.onclick = function () {
        removeItem(name, price);
    };

    // Add the item text and remove button to the cart item
    cartItem.appendChild(itemText);
    cartItem.appendChild(removeButton);
    
    // Append the cart item to the cart list
    cartItems.appendChild(cartItem);

    // Update total price
    updateTotal(price);
}

// Function to remove an item from the cart
function removeItem(name, price) {
    const cartItem = document.querySelector(`[data-name="${name}"]`);
    if (cartItem) {
        const itemTotal = price;
        cartItem.remove();
        updateTotal(-itemTotal); // Adjust the total price
    }
}

// Function to update the total price in the cart
function updateTotal(price) {
    const cartTotal = document.getElementById("cart-total");
    const currentTotal = parseFloat(cartTotal.textContent.replace("Total: $", ""));
    const newTotal = currentTotal + price;
    cartTotal.textContent = `Total: $${newTotal.toFixed(2)}`;
}

// Functions to increase or decrease item quantity
function increaseQuantity(name, price) {
    const cartItem = document.querySelector(`[data-name="${name}"]`);
    const quantitySpan = cartItem.querySelector(".cart-item-quantity");
    const currentQuantity = parseInt(quantitySpan.textContent, 10);
    quantitySpan.textContent = currentQuantity + 1;
    updateTotal(price);
}

function decreaseQuantity(name, price) {
    const cartItem = cartItem.querySelector(".cart-item-quantity");
    if (currentQuantity > 1) {
        quantitySpan.textContent = currentQuantity - 1;
        updateTotal(-price);
    }
}

// Function to proceed to checkout
function proceedToCheckout() {
    alert("Proceeding to checkout...");
}