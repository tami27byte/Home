<?php
include 'contact_form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking Station</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <h1>Parking Station</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#" id="loginRegisterBtn">Login/Register</a></li>
            </ul>
        </div>
    </nav>

   <!-- Home Section -->
<section id="home">
    <div class="container">
        <div class="text-content">
            <h2>Welcome to Parking Station</h2>
            <p>Your parking solution simplified.</p>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p></p>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <h2>Features</h2>
            <ul>
                <li>Real-time parking availability</li>
                <li>Book and reserve spots easily</li>
                <li>Secure payment gateway</li>
            </ul>
        </div>
    </section>

    <!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <input type="text" name="name" id="name" placeholder="Your Name" required>
            <input type="email" name="email" id="email" placeholder="Your Email" required>
            <textarea name="message" id="message" placeholder="Your Message" required></textarea>
            <button type="submit" id="contactSubmit">Submit</button>
        </form>
    </div>
</section>

    <script src="HP.js"></script>

</body>
</html>
