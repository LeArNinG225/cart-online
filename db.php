<?php
    
    $servername= "localhost";
    $username = "root";
    $password = "";
    $database = "e-commerce";
    $port = 4306;
	
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database, $port);
    // $conn = mysqli_connect($servername, $username, $password, $database);

    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    // else 
    // {
    //     echo "connection done";
    // }
?>




<!-- $servername= "sql112.epizy.com";
$username = "epiz_33171754";
$password = "sIUnvMqyz1K627";
$database = "epiz_33171754_cartonline"; -->
