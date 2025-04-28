<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title>Swift Appointments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/font.css">
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/front.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/services.css">
    <link rel="stylesheet" href="styles/contact.css">
</head>
<body>
    <div class="nav-wrapper">
        <nav>
            <a href="index.php" class="logo">SWIFT</a>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="wrapper">
                <a href="user_register.php" class="signup">SIGN UP</a>
                <a href="user_login.php" class="login">LOG IN</a>
            </div>
        </nav>
    </div>
    <div class="front-wrapper">
        <section id="front">
            <h1>DentalClinic</h1>
            <p>Smile with confidence</p>
            <a>Get started now</a>
        </section>
    </div>
    <div class="about-wrapper">
        <section id="about">
            <div class="about-content-container">
                <div class="story">
                    <h2>Our Story</h2>
                    <p>Located at Binalonan, our clinic
                    has been proudly serving the community with high-quality,
                    personalized dental care. We’re a place where patients of all
                    ages feel cared for, listened to, and confident in their smile.
                    </p>
                </div>
                <div class="mission">
                    <h3>Our mission</h3>
                    <p>To provide exceptional dental care with compassion and
                    respect, creating a comfortable environment where patients feel
                    valued and confident in their treatment.</p>
                </div>
                <div class="img">
                    <img src="assets/about.jpg">
                </div>
            </div>
        </section>
    </div>
    <div class="services-wrapper">
        <section id="services">
            <h2>Some of the services we offered</h2>
        </section>
    </div>
    <div class="contact-wrapper">
        <section id="contact">
            <div>
                <h2>Contacts</h2>
                <ul>
                    <li><a>facebook.com</a></li>
                    <li><a>dentalclinic@gmail.com</a></li>
                    <li>0934-242-245</li>
                </ul>
            </div>
        </section>
    </div>
    <?php

    session_start();
    ?>
</body>
</html>
