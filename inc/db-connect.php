<?php

$servername = "localhost";
$username = "admin";
$password = "password1234";
$db = "ecommerce";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

return $conn;
