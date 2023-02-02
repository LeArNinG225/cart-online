<?php
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php?msg1=logged_out");
    // header("location: index.php");
?>