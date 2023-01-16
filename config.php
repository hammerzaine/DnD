<?php
/* Database credentials. */
define('DB_SERVER', '192.168.0.147');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'Metallica!1');
define('DB_NAME', 'DandD');
 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>