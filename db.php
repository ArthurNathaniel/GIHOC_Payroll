<?php
// $host = 'localhost';
// $db = 'havenpay'; // Replace with your database name
// $user = 'root'; // Replace with your database username
// $pass = ''; // Replace with your database password


$host = 'therubhaven.com';
$db = 'u500921674_havenpay'; // Replace with your database name
$user = 'u500921674_havenpay'; // Replace with your database username
$pass = 'OnGod@123'; // Replace with your database password
// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
