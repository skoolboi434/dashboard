<?php 
$conn = require __DIR__ . '/inc/db-connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM `products` WHERE id = $id";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

 if($result) {
  header('Location: index.php?page=dashboard-products');  
 } else {
  echo "Error: " . $sql . " " . $conn->error;
 }
 $conn->close();

?>