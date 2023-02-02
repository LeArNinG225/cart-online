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
    
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a class="active" href="Blog.php">Blog</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Contact.php">Contact</a></li>
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
    <section id="page-header" class="blog-header">
        <h2>#readmore</h2>
        <p>Read all case studies about our products!</p>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>
                    Kickstarter man braid godard coloring book. Raclette waistcoat selfies
                    yr wolf chartreuse hexagon irony, godard...
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/09</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>How to style a Quiff</h4>
                <p>
                    Kickstarter man braid godard coloring book. Raclette waistcoat selfies
                    yr wolf chartreuse hexagon irony, godard...
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/04</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Must-Have Skater Girl Items</h4>
                <p>
                    Kickstarter man braid godard coloring book. Raclette waistcoat selfies
                    yr wolf chartreuse hexagon irony, godard...
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>12/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Runway-Inspired Trends</h4>
                <p>
                    Kickstarter man braid godard coloring book. Raclette waistcoat selfies
                    yr wolf chartreuse hexagon irony, godard...
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>16/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b5.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>AW20 Menswear Trends</h4>
                <p>
                    Kickstarter man braid godard coloring book. Raclette waistcoat selfies
                    yr wolf chartreuse hexagon irony, godard...
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>10/03</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/b6.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>
                    Kickstarter man braid godard coloring book. Raclette waistcoat selfies
                    yr wolf chartreuse hexagon irony, godard...
                </p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/09</h1>
        </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i>3</a>
    </section>
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
    <br><br>
    <script src="script.js"></script>                                                              
</body>
</html>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->