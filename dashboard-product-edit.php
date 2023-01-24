<?php
// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
    $sql = 'SELECT * FROM products ORDER BY created_at';
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
} else {
    // Simple error to display if the id wasn't specified
    exit('Product does not exist!');
}
?>
<div class="dashboard-main">
  <div class="left-side">
    <?php include 'sidenav.php' ?>
  </div>
  <div class="right-side">
    
  </div>
</div>