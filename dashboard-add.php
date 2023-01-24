
<div class="wrap">
  <div class="dashboard-main">
    <div class="left-side">
      <?php include 'sidenav.php' ?>
    </div>
    <div class="right-side">
      <div class="container">
        <div class="top-container d-flex my-5">
          <h1 class="heading">Add New Product</h1>
        </div>

        <div class="form-container">
          <form action="process-add-product.php" method="POST">
            <div class="form-group">
              <label for="product_name">Product Name</label>
              <input name="product_name" type="text" class="form-control" id="product_name" placeholder="Enter Product Name">
            </div>
            <div class="form-group">
              <label for="product_image">Feature Image</label>
              <input name="product_image" type="text" class="form-control" id="product_image" placeholder="Enter Product Image">
            </div>
            <div class="form-group">
              <label for="info">Info</label>
              <textarea name="info" class="form-control" id="info" placeholder="Enter Product Info" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="top_list">Top List</label>
              <textarea name="top_list" class="form-control" id="top_list" placeholder="Enter Product Top List" aria-describedby="topListsHelp" rows="3"></textarea>
              <small id="topListHelp" class="form-text text-muted">Seperate each feature with a comma.</small>
            </div>
            <div class="form-group">
              <label for="features">Features</label>
              <textarea name="features" class="form-control" id="features" placeholder="Enter Product Features" aria-describedby="featuresHelp" rows="3"></textarea>
              <small id="featuresHelp" class="form-text text-muted">Seperate each feature with a comma.</small>
            </div>
            <div class="form-group">
              <label for="item_num">Item Number</label>
              <input name="item_num" type="text" class="form-control" id="item_num" placeholder="Enter Product SKU">
            </div>
            
            <div class="form-group">
              <label for="price">Price</label>
              <input name="price" type="text" class="form-control" id="price" placeholder="Enter Product Price">
            </div>
            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter Quantity">
            </div>
            <div class="btn-container">
              <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
              <a href="index.php?page=dashboard-products" class="btn btn-third">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>