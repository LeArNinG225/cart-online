<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!-- https://youtube.com/playlist?list=PL9bD98LkBR7P8MYh0RzNSHgeVNTA8g0nB -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/90253a86bd.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="Blog.php">Blog</a></li>
                <li><a href="About.php">About</a></li>
                <li><a class="active" href="Contact.php">Contact</a></li>
                <i id="close" class="fa-solid fa-xmark"></i>
            </ul>
        </div>

        
        <div style="display:flex">
            <div id="user">
                <?php 
                    include("db.php");
                    session_start();
                    if (!isset($_SESSION['email'])){
                        echo "
                            <div id='signUp'>
                                <a href='signup.php'><button class='btn-small'>Sign Up</button></a>
                                <a href='login.php'><button class='btn-small'>Login</button></a>
                            </div>
                        ";
                    }
                    else {
                        echo "
                            <div id='signedIn'>
                                <a href='cart.php'><i class='fa-solid fa-cart-shopping'></i></a>
                                <a href='#'><i id='user-icon' class='fa-solid fa-user' onclick='show_element(`logout-wrapper`)'></i></a>
                            </div>
                        ";
                    }
                ?>
            </div>

            <div id="mobile">
                <!-- <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a> -->
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </div>
    </section>

    <div id="logout-wrapper">
        <div id="logout">
            <a href='cart.php'>Go to Cart</a>
            <a href='logout.php'>Log out</a>
        </div>
    </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear you!</p>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-map"></i>
                    <p>56 Glassford Street Glasgow G1 1UL New York</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <p>0000000000</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>Monday to Friday : 9:00 AM to 16:00 PM</p>
                </li>
            </div>

        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.273169612824!2d73.75945111475347!3d18.65173387001789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9e76c8fa205%3A0x1b210131915734fd!2sPCCOE%20-%20Pimpri%20Chinchwad%20College%20Of%20Engineering%20%7C%20Autonomous%20Engineering%20College%20in%20Pune!5e0!3m2!1sen!2sin!4v1670414726452!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="YourMessage"></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p>
                    <span>John Doe</span>
                    <br> Senior Marketing Manager 
                    <br> Phone: + 000 123 000 77 88
                    <br> email: contact@example.com
                </p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p>
                    <span>John Doe</span>
                    <br> Senior Marketing Manager 
                    <br> Phone: + 000 123 000 77 88
                    <br> email: contact@example.com
                </p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p>
                    <span>John Doe</span>
                    <br> Senior Marketing Manager 
                    <br> Phone: + 000 123 000 77 88
                    <br> email: contact@example.com
                </p>
            </div>
        </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Francisco</p>
            <p><strong>Phone:</strong> +01 2222 365 /(+91) 01 2345 6789</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p>© Copyright 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
        </div>
    </footer>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <br><br>
    <script src="script.js"></script>                                                              
</body>
</html>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->