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
                                <a class='active' href='cart.php'><i class='fa-solid fa-cart-shopping'></i></a>
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
    <section>
        <br>
        <h2 style="text-align:center">My Cart</h2>
        <!-- <p>order and get safer and faster delivery</p> -->
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="cart-section" class="section-p1">
        <table width="100">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>

                <?php
                    // $sql = "SELECT * FROM `cart` WHERE `uid` = $_SESSION['uid']";
                    // how do I access array elemnt in "" then ==> concatenation
                    $total_cost = 0;
                    $uid = $_SESSION['uid'];
                    $sql = "SELECT * FROM `cart` WHERE `uid` = $uid";
                    $all_items = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($all_items))
                    {
                        $pid = $row['pid'];
                        $quantity = $row['quantity'];
                        $cart_id = $row['sr'];
                        $sql2 = "SELECT * FROM `products` WHERE `id` = $pid";                 
                        $result = mysqli_query($conn, $sql2);
                        $product = mysqli_fetch_assoc($result);
                        $imgAdr = $product['imgAdr'];

                        echo "
                            <tr>
                                <td><a style='color:red' href='removeFromCart.php?sr=$cart_id'><i class='fa-solid fa-trash'></i></a></td>
                                <td><img src=$imgAdr alt='image'></td>
                                <td>".$product['name']."</td> 
                                <td>".$product['price']."</td> 
                                <td><input type='number' value=$quantity></td> 
                                <td>".$product['price'] * $quantity."</td>
                            </tr>
                        ";
                        $total_cost += $product['price'] * $quantity;
                    }
                ?>

            </tbody>
        </table>
        <?php
            if (mysqli_num_rows($all_items) == 0)
                echo "<tr><td><p style='text-align:center'>Your cart is empty, please add some items to cart</p><td></tr>";
        ?>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <?php echo "<td>$$total_cost</td>" ?>
                    <!-- <td>$ 335</td> -->
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <?php echo "<td><strong>$$total_cost<strong></td>" ?>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

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