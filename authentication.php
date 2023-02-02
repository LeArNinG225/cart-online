<?php  

$email = "";
$pwd = "";

if(!empty($_REQUEST['email'])){
  $email=$_REQUEST['email'];
}

if(!empty($_REQUEST['pwd'])){
  $pwd=$_REQUEST['pwd'];
}

//--------------------------------------------------------------------------------
                  // Connect to the Database 
//--------------------------------------------------------------------------------
include("db.php");
//--------------------------------------------------------------------------------
                    // user authentication \\
//--------------------------------------------------------------------------------
$sql = "SELECT * FROM `users` where `email` = '$email' and `pwd` = '$pwd'";
$result = mysqli_query($conn, $sql);
$rowcount = 0;
if ($result)
{
  $rowcount = mysqli_num_rows( $result );
  $row = mysqli_fetch_assoc($result);
  $uid = $row['uid'];
}
if ($rowcount <= 0)
{
  header("location: login.php?msg='login failed'");
}
else 
{
  // echo "session started<br>";
  session_start();
  $_SESSION['email'] = $email;
  $_SESSION['pwd'] = $pwd;
  $_SESSION['uid'] = $uid;
  // echo "email of session(authentication) :".$_SESSION['email']." <br>";
  header("location: index.php");
}
//--------------------------------------------------------------------------------

//--------------------------------------------------------------------------------
?>
