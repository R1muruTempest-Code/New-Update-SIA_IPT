<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Ordering System</title>
    <link rel="stylesheet" href="style/ui.css">
</head>
<body>
   <header id ="home">
    <div class="logo">
        <img src="image/logo.png" alt="Nadine's Catering">
    </div>
    <nav>
        <a href="#menu">Menu</a>
        <a href="src/about.html">About Us</a>
        <a href="#how-to-order">How to Order</a>
        <a href="#contact">Contact Us</a>
    </nav>

    <a href="LoginForm.html" class="nav-order">Login</a>
</header>

<section class="hero">

    <div class="hero-content">

        <p class="tagline">💛 Delicious Food, Made with Love</p>

        <h1>Nadine’s<br>Catering Services</h1>

        <p class="description">
            We provide mouth-watering meals for every occasion.<br>
            Order online and enjoy our best-seller!
        </p>

        <div class="hero-buttons">
            <a href="#menu" class="view-btn">🍴 View Menu</a>
            <a href="LoginForm.html" class="order-btn">🛒 Order Now</a>
        </div>

    </div>

    <div class="hero-image">
        <img src="image/Background.jpg" alt="Nadine's Catering Food">
    </div>

</section>

<section id="menu" class="menu-section">

    <h2>Popular Choices</h2>
    <div class="carousel">
        
        <button class="carousel-btn prev" onclick="moveSlide(-1)">❮</button>

         <div class="carousel-window">
           <div class="menu-container" id="menuSlider">
               
                <div class="food-card">
                    <img src="image/a.webp" id="Chicken Adobo">
                    <h3>Chicken Adobo</h3>
                    <p>₱50.00</p>
                    <button onclick="orderNow()">Order Now</button>
                </div>

                <div class="food-card">
                    <img src="image/c.webp" id="Chicken Adobo">
                    <h3>Chicken Curry</h3>
                    <p>₱50.00</p>
                    <button onclick="orderNow()">Order Now</button>
                </div>
                <div class="food-card">
                    <img src="image/t.webp" id="Chicken Teriyaki">
                    <h3>Chicken Teriyaki</h3>
                    <p>₱50.00</p>
                    <button onclick="orderNow()">Order Now</button>
                </div>
                <div class="food-card">
                    <img src="image/m.webp" id="Mixed Vegatables">
                    <h3>Mixed Vegatables</h3>
                    <p>₱50.00</p>
                    <button onclick="orderNow()">Order Now</button>
                </div>
                <div class="food-card">
                    <img src="image/p.webp" id="Pork Adobo">
                    <h3>Pork Adobo</h3>
                    <p>₱50.00</p>
                    <button onclick="orderNow()">Order Now</button>
                </div>
                <div class="food-card">
                    <img src="image/s.webp" id="Sizzling Sigsig">
                    <h3>Sizzling Sigsig</h3>
                    <p>₱50.00</p>
                    <button onclick="orderNow()">Order Now</button>
                </div>
                <div class="food-card">
                    <img src="image/l.webp" id="Crispy Lechon">
                    <h3>Crispy Lechon</h3>
                    <p>₱50.00</p>
                    <button onclick="orderNow()">Order Now</button>
                </div>
                <div>
                    <div class="food-card">
                        <img src="image/k.webp" id="Kare-Kare">
                        <h3>Kare-Kare</h3>
                        <p>₱50.00</p>
                        <button onclick="orderNow()">Order Now</button>
                    </div>
                </div>
           </div>
         </div>
         <button class="carousel-btn next" onclick="moveSlide(1)">❯</button>
    </div> 
    <br>
    <br>
           <a href ="#home"  class ="back-to-home">Back to Home</a>
  </section>

  <section class="features">

    <div class="feature">
        <span>🌿</span>
        <div>
            <h3>Quality Ingredients</h3>
            <p>Fresh & Natural</p>
        </div>
    </div>

    <div class="feature">
        <span>🚚</span>
        <div>
            <h3>Fast Delivery</h3>
            <p>On-time Service</p>
        </div>
    </div>

    <div class="feature">
        <span>💰</span>
        <div>
            <h3>Best Prices</h3>
            <p>Affordable Meals</p>
        </div>
    </div>

</section>

<section id="how-to-order" class="how-to-order">

    <h2>How to Order</h2>
    <p class="how-subtitle">Getting your favorite meal has never been easier</p>

    <div class="steps-container">

        <div class="step-card">
            <div class="step-number">1</div>
            <span class="step-icon">🍽️</span>
            <h3>Browse the Menu</h3>
            <p>Explore our Popular Choices and pick the meals you love.</p>
        </div>

        <div class="step-card">
            <div class="step-number">2</div>
            <span class="step-icon">🛒</span>
            <h3>Add to Cart</h3>
            <p>Click "Order Now" on any dish to add it to your cart.</p>
        </div>

        <div class="step-card">
            <div class="step-number">3</div>
            <span class="step-icon">🔐</span>
            <h3>Login & Checkout</h3>
            <p>Sign in to confirm your order details and delivery info.</p>
        </div>

        <div class="step-card">
            <div class="step-number">4</div>
            <span class="step-icon">🚚</span>
            <h3>Sit Back & Relax</h3>
            <p>We'll prepare and deliver your order fresh and on time.</p>
        </div>

    </div>

  </section>
   <div id="cartWidget" class="cart-widget">
      <span id="cartCount">0</span> items in cart
      <button id="viewCartBtn">View Cart</button>
  </div>
   <script src="js/c.js"></script>
   <script src="js/b.js"></script>
   <script src="js/h.js"></script>
 </body>
</html>