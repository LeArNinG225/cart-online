<?php
    include("db.php");
    session_start();
    $id = $_GET['id'];
    if (array_key_exists('msg', $_GET)) {
        $msg = $_GET['msg'];
        // if (isset($msg)) {
            echo "<script>alert('item added to cart successfully')</script>";
        // }
    }
    

    $sql = "SELECT * FROM `products` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    if(!$result ) {
        die('Could not get data: '.mysqli_error($conn));
    }
    else {
        $row = mysqli_fetch_assoc($result);   // will this var be available outside 
    }

    $adr = substr($row['imgAdr'], 0, -5);
    $simImgAdrs = array($adr."1.jpg", $adr."2.jpg", $adr."3.jpg", $adr."4.jpg");
    // similar image addresses 

    $currImgAdr = $row['imgAdr'];
    $currName = $row['name'];
    $currPrice = $row['price'];
    $currDetails = $row['details'];

?>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="Shop.php">Shop</a></li>
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
                                <a href='signup.php'><button>Sign Up</button></a>
                                <a href='login.php'><button>Login</button></a>
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
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <div id='MainImg'>
                <?php echo "<img src=$currImgAdr width='100%' alt=''>" ?>
            </div>
            <div class="small-img-group">
                <div class="small-img-col">
                    <?php echo "<img src=$simImgAdrs[0] width='100%' class='small-img' alt='X'>" ?>
                </div>
                <div class="small-img-col">
                    <?php echo "<img src=$simImgAdrs[1] width='100%' class='small-img' alt='X'>" ?>
                </div>
                <div class="small-img-col">
                    <?php echo "<img src=$simImgAdrs[2] width='100%' class='small-img' alt='X'>" ?>
                </div>
                <div class="small-img-col">
                    <?php echo "<img src=$simImgAdrs[3] width='100%' class='small-img' alt='X'>" ?>
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirts</h6>
            <h4>Men's Fashion T Shirt</h4>
            <h2>$139.00</h2>
            <!-- <form action="addToCart.php?pid=$id" method="GET"> -->
            <?php echo "<form action='addToCart.php?pid=$id' method='POST'>"; ?>
                <select name="size">
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1" name="quantity">
                <button class="normal" type="submit">Add To Cart</button>
            </form>
            <h4>Product Details</h4>
            <span>
                The Gilden Ultra Cotton T-shirts is made from a substantial 6.0 oz. per 
                sq. yd. fabric constructed from 100% cotton, this fit preshrunk jersey 
                knit provides unmatched comfort with each wear. Featuring a taped neck and
                shoulder, and a seamless double-needle collar, and available in a range of
                colors, it offers it all in the ultimate head-turning package. 
            </span>
        </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container"> 
            <!-- shouldn't pro-container be id  -->
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
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
            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
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
            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
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
            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
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

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;

        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
            // alert("clicked");
            // $currImgAdr = simImgAdrs[1];
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }

    </script>

    <script src="script.js"></script>                                                              
</body>
</html>
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------  -->