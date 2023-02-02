<?php
    include("db.php");
    session_start();
    $sr = $_GET['sr'];  // serial no of cart entry 

    
    $sql = "DELETE FROM `cart` WHERE `sr` = $sr";    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "failed to add".mysqli_error($conn);
    } 
    else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    // $sql = "DELETE FROM `cart` WHERE `cart`.`sr` = 11";
    
?>