<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management - Login</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body>
    <!-- Top Header -->
    <header>
        <img src="images/logo.png" alt="logo unavailable" id="logo">
        <div class="logo"><b>Green City</b></div>
        <div class="navbar-btn">
        <button class="nav-btn" id="home">Home</button>
        <button class="nav-btn">Services</button>
        <button class="nav-btn">Contact Us</button>
        </div>
        <button class="about-btn">About Us</button>
    </header>
    <div class="" style="width:100%; height:400px;  background: url('images/car.png') center/cover no-repeat; padding-top:20px;">

    <!-- Animated Slogan -->
    <div class="slogan-container">
        <h1 id="slogan">Keeping the Environment Clean for a Better Tomorrow</h1>
    </div>

    <!-- Login Sections -->
    <div class="login-container">
        <div class="user-type admin">
            <img src="images/admin.png" alt="Admin">
            <h2>Admin</h2>
            <button class="login-btn" onclick="location.href='admin_login_reg.php'">Access</button>
        </div>

        <div class="user-type collector">
            <img src="images/collector.jpg" alt="Collector">
            <h2>Collector</h2>
            <button class="login-btn" onclick="location.href='collector_login.php'">Login</button>
            <button class="register-btn" onclick=''>Register</button>
        </div>

        <div class="user-type client">
            <img src="images/waste-client.png" alt="Client">
            <h2>Client</h2>
            <button class="login-btn" onclick='location.href="login.php"'>Login</button>
            <button class="register-btn" onclick="location.href='register.php'">Register</button>
        </div>
    </div>
    </div>
<!-- cards -->
 <div class="cards-container">
    <div class="cards">
    <!-- Animated Title -->
    <div class="title-container">
        <span class="changing-text"></span>
    </div>

    <!-- Cards Section -->
    <div class="card-container">
        <!-- Solid Waste Card -->
        <div class="card">
            <img src="images/solidwaste.jpg" alt="Solid Waste">
            <h2>Solid Waste</h2>
            <p>Solid waste includes household garbage, plastics, and other materials that need proper disposal.</p>
        </div>

        <!-- Recycling Card -->
        <div class="card">
            <img src="images/recyclingwaste.png" alt="Recycling">
            <h2>Recycling</h2>
            <p>Recycling helps reduce pollution by converting waste materials into reusable products.</p>
        </div>

        <!-- Liquid Waste Card -->
        <div class="card">
            <img src="images/liquidwaste.webp" alt="Liquid Waste">
            <h2>Liquid Waste</h2>
            <p>Liquid waste includes wastewater, chemicals, and other fluids that require special treatment.</p>
        </div>
    </div>
    </div>

   
    <div class="floating-box">
            <img src="images/wastecall.jpeg" alt="">
        </div>
    </div>
    
          <!-- Two Column Layout -->
          <div class="content-container">
        <!-- Column 1 -->
        <div class="column">
            <h2>Solid Waste Management</h2>
            <p>Solid waste includes household garbage, plastics, and materials that require proper disposal. Efficient waste management reduces environmental pollution and promotes a cleaner, greener future.</p>
        </div>

        <!-- Column 2 -->
        <div class="column">
            <h2>Recycling & Liquid Waste</h2>
            <p>Recycling plays a major role in sustainability by converting waste into reusable materials. Proper liquid waste management ensures safe disposal of chemicals, wastewater, and other fluids.</p>
        </div>
    </div>

    <!-- Scrolling Info -->
    <div class="scrolling-info">
        <marquee>Welcome to Waste Management System | Keep your environment clean | We ensure effective waste collection and recycling</marquee>
    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <!-- Logo & Location -->
        <div class="footer-section">
            <img src="images/logo.png" alt="Company Logo" class="footer-logo">
            <p><i class="fas fa-map-marker-alt"></i> Location: Nsimeyong, Yaoundé</p>
        </div>

        <!-- Quick Links -->
        <div class="footer-section footer-links">
            <h3>Quick Links</h3>
            <a href="index.html"><i class="fas fa-home"></i> Home</a>
            <a href="services.html"><i class="fas fa-cogs"></i> Services</a>
            <a href="contact.html"><i class="fas fa-envelope"></i> Contact Us</a>
        </div>

        <!-- Contact Info -->
        <div class="footer-section">
            <h3>Contact</h3>
            <p><i class="fas fa-phone"></i> +237 681 24 97 30</p>
            <p><i class="fas fa-envelope"></i> abidambefavour2@gmail.com</p>
        </div>

        <!-- Social Media -->
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <!-- Email Subscription -->
        <div class="footer-section">
            <h3>Do you want to be part of us?</h3>
            <form class="subscribe-form">
                <span style="color:orange;">Submit your email here if you want to be a worker or an admin</span><br>

                <br>
                <input type="email" placeholder="Enter your email">
                <button type="submit">submit</button>
            </form>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="copyright">
        &copy; 2025 Waste Management | All Rights Reserved
    </div>
    <script src="js/index.js">


    </script>
</body>
</html>
