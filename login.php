<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-form">
        <form action="authentication.php" method = "POST">
            <h2>Login</h2>
            <!-- <label for="email">Email</label> -->
            <input type="text" name = "email" placeholder="Enter your email">

            <!-- <label for="pwd">Password</label> -->
            <input type="text" name="pwd" placeholder="Enter password">

            <button type="submit" id="btn1">Login</button>
            <!-- <button id="btn2">Forgot Password</button> -->
            <!-- <a href="signup.php"><button id="btn3">Sign Up</button></a> -->
            
        </form>
        <p>Or</p>
        <a href="signup.php"><button id="btn2">Sign Up</button></a>
    </div>
</body>
</html>