<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/sprout.png">
    <title>ESprout</title>
    <link rel="stylesheet" href="land.css">
    <script src="https://kit.fontawesome.com/cf1d4ca410.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="header-container">
            <a class="logo" href="main.php"><img src="images/sprout.png" alt="ESprout_logo"></a>
            <div class="header-quote">
                <h1><b>ESprout</b></h1>
                <p class="slogan">The Money That Grows.</p>
                <br><!---space --></br>
                <a href="#features" onclick="scrollToInfo()" class="cta-button">Why Us?</a>
            </div>
        </div>
        <div class="hamburger">
            <i class="fa-solid fa-bars"></i>
            <a class="hamburger_bar" href="#combobox"><img src="images/Hamburger_icon.png" alt="hamburger_bar"></a>
        </div>
    </header>
    <br>

    <section id="products"> 
    <h2 class="content">Our Products</h2>
    <br>
        <div class="feature_box" href="#eplant">
            <img src="images/eplant_logo.png" alt="Why Choose ESprout" class="feature-img">
            <h3>EPlant</h3>
            <p>Stay notified from the latest rise in stocks with our advanced data-driven security algorithms.</p>
        </div>
        <div class="feature_box" id="oddOne">
            <img src="images/einvest_logo.png" alt="User Friendly" class="feature-img">
            <h3>EInvest</h3>
            <p>Investing in large amount of quantity? EInvest is here to create a investing schedule for your benefits.</p>
        </div>
        <div class="feature_box">
            <img src="images/eanalysis_logo.jpg" alt="Weekly Report" class="feature-img">
            <h3>EAnalysis</h3>
            <p>Can't figure what,when, and how to invest in stocks? EAnalysis helps analyze the current trend in stocks.</p>
        </div>
        <div class="feature_box">
            <img src="images/ebot_logo.png" alt="Weekly Report" class="feature-img">
            <h3>EBot</h3>
            <p>EBot can be implemented in your website, application or your project, helping to keep track of the current trend in stocks & crypto!</p>
        </div>
        <div class="feature_box">
            <img src="images/coming_soon.gif" alt="Weekly Report" class="feature-img">
            <h3>Coming Soon</h3>
            <p>We are currently developing something new...</p>
        </div>
    </section>
    <br> 
    <section id="features"> 
    <h2 class="content">Why Choose ESprout</h2>
        <div class="feature_box">
            <img src="images/realtimeanalysis.gif" alt="Why Choose ESprout" class="feature-img">
            <h3>Real-Time Analysis</h3>
            <p>Stay notified from the latest threats with our advanced data-driven security algorithms.</p>
        </div>
        <div class="feature_box" id="oddOne">
            <img src="images/userfriendly.gif" alt="User Friendly" class="feature-img">
            <h3>User Friendly</h3>
            <p>Simple UI with powerful features, suitable for everyone.</p>
        </div>
        <div class="feature_box">
            <img src="images/report_gif.gif" alt="Weekly Report" class="feature-img">
            <h3>Weekly Report</h3>
            <p>Given to those who are using in big organizations.</p>
        </div>
    </section>

    <div class = "footer">
        <div class = "col-1">
            <h3>USEFUL LINKS</h3>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="#products">Products</a>
            <a href="#blog">Blog</a>
        </div>
        <div class = "col-2">
            <h3>NEWSLETTER</h3>
            <form>
                <input type="email" placeholder="Your Email Address:" required>
                <br>
                <button type="submit">Subscribe Now</button>
            </form>
        </div>
        <div class = "col-3">
            <h3>CONTACT</h3>
            <p>123, XYZ Road <br>Kualar Lumpur, Malaysia, MY</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/"><i class ="fab fa-facebook"></i></a>
                <a href="https://x.com/?&"><i class="fab fa-x-twitter"></i></a>
                <a href="https://www.instagram.com/ethan.jz/"><i class ="fab fa-instagram"></i></a>
                <a href="#snapchat"><i class ="fab fa-snapchat"></i></a>
            </div>
        </div>
    </div>

    <script src="script.js"></script> <!-- Link to JavaScript -->

    <footer>
        <p><h6>&copy; 2025 ESprout Company & Co. All rights reserved.</h6></p>
    </footer>
</body>
</html>


