document.addEventListener('DOMContentLoaded', function() {
    // Retrieve selected item's image source and price from session storage
    const itemImageSrc = sessionStorage.getItem('selectedItemImageSrc');
    const itemPrice = sessionStorage.getItem('selectedItemPrice');

    if (itemImageSrc) {
        // Create new image element
        const itemImage = document.createElement('img');
        itemImage.src = itemImageSrc;
        itemImage.alt = "Selected Car Image";

        // Append image to cart image container
        const cartImageContainer = document.getElementById('cart-image-container');
        cartImageContainer.appendChild(itemImage);
    }

    // Display the total price in the cart
    if (itemPrice) {
        const totalElement = document.getElementById('total');
        totalElement.textContent = `Total: €${itemPrice}`;
    }

    // Add event listener to the "Checkout" button
    document.getElementById('checkout-btn').addEventListener('click', function() {
        // You can add the logic for checkout functionality here
        alert('Checkout button clicked!');
    });
});
