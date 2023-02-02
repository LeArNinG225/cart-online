<?php
    if (array_key_exists('msg', $_GET)) {
        $msg = $_GET['msg'];
        $email = "";
        $pwd = "";

        if(empty($_REQUEST['email']) || empty($_REQUEST['pwd'])){
            echo "
                <script>
                    alert('email and password cannot be empty')
                    window.location.href = 'signup.php';
                </script>
            ";
        }
        else {
            $email=$_REQUEST['email'];
            $pwd=$_REQUEST['pwd'];
            include('db.php');
            $sql = "INSERT INTO `users` (`uid`, `email`, `pwd`) VALUES (NULL, '$email', '$pwd')";
            // "INSERT INTO `cart` (`sr`, `uid`, `pid`, `quantity`) VALUES (NULL, $uid, $pid, $quantity)";
            $result = mysqli_query($conn, $sql);
            if (!$result){
                echo "<script>alert('sign up failed, you might be already registered')</script>";
                echo mysqli_error($conn);
            }
            else {
                $sql2 = "SELECT `uid` from `users` WHERE `email`='$email'";
                $result2 = mysqli_query($conn, $sql2);
                $uid = mysqli_fetch_assoc($result2)['uid'];
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['pwd'] = $pwd;
                $_SESSION['uid'] = $uid;
                header("location: index.php");
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-form">
        <form action="signup.php?msg=1" method = "POST">
            <h2>Sign Up</h2>
            <!-- <label for="email">Email</label> -->

            <input type="text" name="pwd" placeholder="Enter your name">

            <input type="text" name = "email" placeholder="Enter your email">

            <!-- <label for="pwd">Password</label> -->
            <input type="text" name="pwd" placeholder="Enter password">

            <!-- <button type="submit" id="btn1">Login</button> -->
            <!-- <button id="btn2">Forgot Password</button> -->
            <!-- <a href="signup.php"><button id="btn3">Sign Up</button></a> -->
            
            <button type='submit' onclick="window.location.href='signup.php'">Sign Up</button>
        </form>
        <p>Or</p>
        <a href='login.php'><button id='btn2'>Login</button></a>
    </div>
</body>
</html>