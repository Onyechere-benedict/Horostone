<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet"
          href="/CSS/login.css" />
    <link rel="stylesheet"
          href="/CSS/index.css" />
    <link rel="stylesheet"
          href="/CSS/main.css" />
    <script src="/js/login.js"></script>
</head>

<body>
    <div class="mobile-nav">
        <section class="top-bar container">
            <div class="inner">
                <div class="left">
                    <span class="address">
                        <i class="fa-solid fa-location-dot icon"></i>
                        J close First avenue Gwarimpa
                    </span>
                    <span class="phone">
                        <i class="fa-solid fa-phone-volume icon"></i>
                        (+1234) 816 186 6142
                    </span>
                </div>
                <div class="right">
                    <span class="socials">
                        <a href="#"><i class="fa-brands fa-facebook-f icon"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter icon"></i></a>
                        <a href="https://www.instagram.com/timbre.ng?igsh=MW5kbnAyZWJwc2lpYQ=="><i
                               class="fa-brands fa-instagram icon"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in icon"></i></a>
                    </span>
                    <span class="contact-btn">
                        <a href="#"
                           class="button button-main toggle-popup">Shop Now!</a>
                    </span>
                </div>
            </div>
        </section>

        <!-- <div class="popup-overlay" id="popupOverlay">
                <div class="popup" id="popup">
                    <span class="close" id="closePopup">&times;</span>
                </div>
            </div> -->

        <nav class="container">
            <div class="inner">
                <a href="#"
                   class="logo">
                    <img src="/images/lightLogo-removebg-preview.png"
                         alt="Company logo" />
                </a>
                <ul class="menu">
                    <li class="menu-item active hover">
                        <a href="index.html"
                           class="menu-link">Home</a>
                        <span class="toggle-menu fa-solid fa-angle-down"></span>
                    </li>

                    <li class="menu-item">
                        <a href="#services-container"
                           class="menu-link">About</a>
                        <span class="toggle-menu fa-solid fa-angle-down"></span>
                    </li>

                    <!-- <li class="menu-item">
                            <a href="#recruitment-process-container" class="menu-link">Services</a>
                            <span class="toggle-menu fa-solid fa-angle-down"></span>
                        </li> -->

                    <li class="menu-item">
                        <a href="#recruitment-process-container"
                           class="menu-link">Product</a>
                        <span class="toggle-menu fa-solid fa-angle-down"></span>
                    </li>

                    <li class="menu-item">
                        <a href="#"
                           class="menu-link">Blog</a>
                        <span class="toggle-menu fa-solid fa-angle-down"></span>
                    </li>

                    <li class="menu-item">
                        <a href="login.html"
                           class="menu-link">User</a>
                        <span class="toggle-menu fa-solid fa-angle-down"></span>
                    </li>

                    <li class="search-button">
                        <span>
                            <i class="fa-solid fa-cart-shopping"></i>

                    <li class="search-button">
                        <span>
                            <i class="fa-solid fa-search"></i>
                        </span>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="mobile-navbar container">
        <div class="inner">
            <i class="fa-solid fa-bars menu-open"></i>
            <i class="fa-solid fa-close menu-close"></i>
            <a href="#"
               class="logo">
                <img loading="lazy"
                     src="/images/logo-removebg-preview.png"
                     alt="" />
            </a>
        </div>
    </div>
    <div class="background">
        <div class="overlay">
            <div class="login-form">
                <h2>Login</h2>
                <form action="#"
                      method="post">
                    <label for="email">Email</label>
                    <input type="email"
                           id="email"
                           name="email"
                           placeholder="Enter your email"
                           required>

                    <label for="password">Password</label>
                    <input type="password"
                           id="password"
                           name="password"
                           placeholder="Enter your password"
                           required>

                    <button type="submit">Login</button>
                </form>
                <p>Don't have an account? <a href="registration.html">Click here to register</a></p>
            </div>
        </div>
    </div>
</body>
<script src="/js/login.js"></script>

</html>