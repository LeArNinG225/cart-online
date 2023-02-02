<?php
    session_start();
    $pid = $_GET['pid'];
    if (!array_key_exists('uid', $_SESSION))
    {
        header("location: sproduct.php?id=$pid&msg2=notSignedIn");
        echo "i am executed";
    }
    $uid = $_SESSION['uid'];
    $quantity = $_POST['quantity'];
    echo "this is addToCart page";
    include("db.php");
    $sql = "INSERT INTO `cart` (`sr`, `uid`, `pid`, `quantity`) VALUES (NULL, $uid, $pid, $quantity)";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "failed to add".mysqli_error($conn);
    } 
    else {
        header("Location: " . $_SERVER["HTTP_REFERER"]."&msg=1");
    }
    // onclick="history.back()"
    
?>