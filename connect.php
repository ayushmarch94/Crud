<?php
$hostname = "localhost";
$username = "root"; 
$password = ""; 
$database = "crud"; 

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: ");
}
?>
