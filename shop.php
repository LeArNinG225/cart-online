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
    <!-- why including this in script.js isn't working  -->
    <script>
        function showProduct(x) {
            window.location.href='sproduct.php?id='+x;
            // alert("ab");
            console.log("clicked");
        }   
    </script>
    
    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="Shop.php">Shop</a></li>
                <li><a href="Blog.php">Blog</a></li>
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
    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off!</p>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="product1" class="section-p1">
        <div class="pro-container"> 
            <!-- shouldn't pro-container be id  -->
            <!-- <div class="pro" onclick="window.location.href='sproduct.php?id=10';"> -->
            <div class="pro" onclick="showProduct(35)">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(36)">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(37)">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(38)">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(55)">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(56)">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(57)">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(58)">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(31)">
                <img src="img/products/b1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(32)">
                <img src="img/products/b2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(33)">
                <img src="img/products/b3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(34)">
                <img src="img/products/b4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(45)">
                <img src="img/products/w1.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(46)">
                <img src="img/products/w2.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(47)">
                <img src="img/products/w3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro" onclick="showProduct(48)">
                <img src="img/products/w4.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i id="cart" class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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