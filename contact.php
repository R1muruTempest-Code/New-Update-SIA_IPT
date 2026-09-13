<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style/contact.css">
</head>
<body>
    <!-- Contact Section -->
<section id="contact" class="contact-section">

    <h2>Contact Us</h2>
    <p class="contact-subtitle">We'd love to hear from you!</p>

    <div class="contact-container">

        <div class="contact-info">

            <div class="contact-item">
                <span class="contact-icon">📍</span>
                <div>
                    <h3>Our Location</h3>
                    <p><a href="https://www.bing.com/maps/default.aspx?v=2&pc=FACEBK&mid=8100&where1=%23466%20Rizal%20Avenue%20Extension%20Brgy.%20Bancao-Bancao%2C%20Puerto%20Princesa%2C%20Philippines" target="_blank" rel="noopener noreferrer">
                        #466 Rizal Avenue Extension, Brgy. Bancao-Bancao,<br>
                        Puerto Princesa, Philippines, 5300
                    </a></p>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">📞</span>
                <div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+639454819617">0945 481 9617</a></p>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">✉️</span>
                <div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:nadinesaban@gmail.com">nadinesaban@gmail.com</a></p>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">💬</span>
                <div>
                    <h3>Facebook / Messenger</h3>
                    <p><a href="https://www.facebook.com/NadinesCateringServices" target="_blank" rel="noopener noreferrer">Nadine's Catering Services</a></p>
                </div>
            </div>

        </div>

        <form class="contact-form" id="contactForm">
            <h3>Send Us a Message</h3>

            <div class="form-row">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="What's this about?" required>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
            </div>

            <button type="submit" class="btn-gold">📩 Send Message</button>
            <p id="formMessage" class="form-message"></p>
        </form>

    </div>
</section>
</body>
</html>