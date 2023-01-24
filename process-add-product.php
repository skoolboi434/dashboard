<?php 
$conn = require __DIR__ . '/inc/db-connect.php';
?>

<?php
if(isset($_POST['submit'])) {
  $pimage = $_POST['product_image'];
  $pname = $_POST['product_name'];
  $pinfo = $_POST['info'];
  $pcategory = $_POST['cat_id'];
  $pprice = $_POST['price'];
  $pquantity = $_POST['quantity'];
  $ptoplist = $_POST['top_list'];
  $pfeatures = $_POST['features'];
  $pitem_num = $_POST['item_num'];
 
  
}

$sql = "INSERT INTO `products` (`id`, `product_image`, `product_name`, `info`, `price`, `quantity`, `top_list`, `features`, `item_num` ) VALUES (NULL, ' ".$_POST['product_image']." ', ' ".$_POST['product_name']." ', ' ".$_POST['info']." ', ' ".$_POST['price']." ', ' ".$_POST['quantity']." ', ' ".$_POST['top_list']." ', ' ".$_POST['features']." ', ' ".$_POST['item_num']." ')";

$result = $conn->query($sql);

if($result == true) {
  echo "New Product added.";
  
} else {
  echo "Error: " . $sql . " " . $conn->error;
}
header('Location: index.php?page=dashboard-products');
  exit;
$conn->close();

?>