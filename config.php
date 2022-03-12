<!-- These are the connections to my databases one of which is on my local machine -->


<?php 
//local development database connection
$server = "localhost";
$user = "root";
$pass = "";
$database = "login_register";



$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>

<!-- The other connection is the remote connection my database for when I deploy the application online -->

<!-- // Remote database connection
// $server = "remotemysql.com";
// $user = "nHA3oxl9X1";
// $pass = "oy4DxxGTUk";
// $database = "nHA3oxl9X1"; -->