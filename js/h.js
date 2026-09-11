/**
 * Cart Functionality
 */
let cart = [];

    document.querySelectorAll('.food-card').forEach(card => {
        const btn = card.querySelector('button');
        const name = card.querySelector('h3').textContent.trim();
        const price = card.querySelector('p').textContent.trim();

        btn.addEventListener('click', () => {
            cart.push({ name, price });
            updateCartWidget();
        });
    });

    document.querySelector('.order-btn').addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('#menu').scrollIntoView({ behavior: 'smooth' });
    });

    function updateCartWidget() {
        const widget = document.getElementById('cartWidget');
        const countEl = document.getElementById('cartCount');
        countEl.textContent = cart.length;
        widget.classList.add('active');
    }

    document.getElementById('viewCartBtn').addEventListener('click', () => {
        if (cart.length === 0) return;
        sessionStorage.setItem('nadinesCart', JSON.stringify(cart));
        window.location.href = 'LoginForm.html';
    });