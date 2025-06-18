<?php
$host = "localhost";
$user = "root"; // change if using cPanel or hosting
$pass = "";      // enter your DB password
$db = "martins_hotel";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
