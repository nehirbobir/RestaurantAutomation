<?php include ("temp/_head.php") ?>
<?php include ("temp/_navbar.php") ?>
<?php
session_start();
?>

    <div class="shopping-cart">
        <!-- Title -->
        <div class="titlesepet">
            Shopping Bag
        </div>

        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $index => $item) {
        ?>
        <!-- Product Item -->
        <div class="itemsepet" data-id="<?php echo $index; ?>">
            <div class="buttonsepet">
                <span class="delete-btn"><i class="fa-solid fa-xmark"></i></span>
            </div>

            <div class="imagesepet">
                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" />
            </div>

            <div class="description">
                <span><?php echo htmlspecialchars($item['name']); ?></span>
                <span><?php echo htmlspecialchars($item['category']); ?></span>
            </div>

            <div class="quantity">
                <button class="plus-btn" type="button" name="button">
                <i class="fa-solid fa-plus"></i>
                </button>
                <input type="text" name="name" value="1" readonly>
                <button class="minus-btn" type="button" name="button">
                <i class="fa-solid fa-minus"></i>
                </button>
            </div>

            <div class="total-price">$<?php echo htmlspecialchars($item['price']); ?></div>
        </div>
        <?php
            }
        } else {
            echo "<div class='empty-cart'>Your cart is empty.</div>";
        }
        ?>
    </div>

    <script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            let itemElement = this.closest('.itemsepet');
            let itemId = itemElement.getAttribute('data-id');

            fetch('remove_from_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: itemId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    itemElement.remove(); // Remove the item from the DOM
                    if (document.querySelectorAll('.itemsepet').length === 0) {
                        document.querySelector('.shopping-cart').innerHTML = "<div class='empty-cart'>Your cart is empty.</div>";
                    }
                } else {
                    alert('Failed to remove the item from the cart.');
                }
            });
        });
    });

    document.querySelectorAll('.plus-btn').forEach(button => {
        button.addEventListener('click', function() {
            let itemElement = this.closest('.itemsepet');
            let itemId = itemElement.getAttribute('data-id');

            fetch('update_cart_quantity.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: itemId, action: 'increase' })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let quantityInput = itemElement.querySelector('input[name="name"]');
                    quantityInput.value = parseInt(quantityInput.value) + 1;
                } else {
                    alert('Failed to update the item quantity.');
                }
            });
        });
    });

    document.querySelectorAll('.minus-btn').forEach(button => {
        button.addEventListener('click', function() {
            let itemElement = this.closest('.itemsepet');
            let itemId = itemElement.getAttribute('data-id');

            fetch('update_cart_quantity.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: itemId, action: 'decrease' })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let quantityInput = itemElement.querySelector('input[name="name"]');
                    let newQuantity = parseInt(quantityInput.value) - 1;
                    if (newQuantity > 0) {
                        quantityInput.value = newQuantity;
                    } else {
                        itemElement.remove(); // Remove the item from the DOM if quantity is 0
                        if (document.querySelectorAll('.itemsepet').length === 0) {
                            document.querySelector('.shopping-cart').innerHTML = "<div class='empty-cart'>Your cart is empty.</div>";
                        }
                    }
                } else {
                    alert('Failed to update the item quantity.');
                }
            });
        });
    });
    </script>
