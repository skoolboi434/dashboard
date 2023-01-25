<?php 

$id = $_GET['id'];
$sql = "SELECT * FROM `products` WHERE id = $id LIMIT 1";

$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

// var_dump($row);

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

  $sql = "UPDATE `products` SET `product_image`='$pimage',`product_name`='$pname',`info`='$pinfo',`price`='$pprice',`quantity`='$pquantity',`top_list`='$ptoplist',`features`='$pfeatures',`item_num`='$pitem_num', `created_at`=NULL WHERE id='$id'";

  $result = $conn->query($sql);

  // var_dump($result);

  if($result == true) { 
    
    header('Location: index.php?page=dashboard-products');   
    
  } else {
    echo "Error: " . $sql . " " . $conn->error;
  }

  $conn->close();
 
}

?>
<div class="wrap">
  <div class="dashboard-main">
    <div class="left-side">
      <?php include 'sidenav.php' ?>
    </div>
    <div class="right-side">
      <div class="container">
        <div class="top-container d-flex my-5">
          <h1 class="heading">Edit Product</h1>
        </div>

        <div class="form-container">
          <form action="" method="POST">
            <div class="form-row row">
              <div class="form-group col-6">
                <label for="product_name">Product Name</label>
                <input name="product_name" type="text" class="form-control" id="product_name" value="<?php echo $row['product_name']; ?>">
              </div>
              <div class="form-group col-6">
                <label for="product_image">Feature Image</label>
                <input name="product_image" type="text" class="form-control" id="product_image" value="<?php echo $row['product_image']; ?>">
              </div>
              <div class="form-group">
                <label for="info">Info</label>
                <textarea name="info" class="form-control" id="info" rows="6"><?php echo $row['info']; ?></textarea>
              </div>
              <div class="form-group col-6">
                <label for="top_list">Top List</label>
                <textarea name="top_list" class="form-control" id="top_list" aria-describedby="topListsHelp" rows="3"><?php echo $row['top_list']; ?></textarea>
                <small id="topListHelp" class="form-text text-muted">Seperate each feature with a comma.</small>
              </div>
              <div class="form-group col-6">
                <label for="features">Features</label>
                <textarea name="features" class="form-control" id="features" aria-describedby="featuresHelp" rows="3"><?php echo $row['features']; ?></textarea>
                <small id="featuresHelp" class="form-text text-muted">Seperate each feature with a comma.</small>
              </div>
              <div class="form-group col-4">
                <label for="item_num">Item Number</label>
                <input name="item_num" type="text" class="form-control" id="item_num" value="<?php echo $row['item_num']; ?>">
              </div>
              
              <div class="form-group col-4">
                <label for="price">Price</label>
                <input name="price" type="text" class="form-control" id="price" value="<?php echo $row['price']; ?>">
              </div>
              <div class="form-group col-4">
                <label for="quantity">Quantity</label>
                <input name="quantity" type="number" class="form-control" id="quantity" value="<?php echo $row['quantity']; ?>">
              </div>
              <div class="btn-container">
                <button type="submit" name="submit" class="btn btn-primary">Update Product</button>
                <a href="index.php?page=dashboard-products" class="btn btn-third">Cancel</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>