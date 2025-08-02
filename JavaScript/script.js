/* LOGIN REGISTER */
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btn_loginPopup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});
/* LOGIN REGISTER */



document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function (event) {
        event.preventDefault();

        let productId = this.getAttribute('data-id');
        let productName = this.getAttribute('data-name');
        let productCategory = this.getAttribute('data-category');
        let productPrice = this.getAttribute('data-price');
        let productImage = this.getAttribute('data-image');

        let productData = {
            id: productId,
            name: productName,
            category: productCategory,
            price: productPrice,
            image: productImage
        };

        fetch('add_to_cart.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(productData)
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Product added to cart successfully!');
                } else {
                    alert('Failed to add product to cart.');
                }
            });
    });
});



document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function () {
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
                    itemElement.remove(); 
                    if (document.querySelectorAll('.itemsepet').length === 0) {
                        document.querySelector('.shopping-cart').innerHTML = "<div class='empty-cart'>Your cart is empty.</div>";
                    }
                } else {
                    alert('Failed to remove the item from the cart.');
                }
            });
    });
});





