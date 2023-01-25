<div class="dashboard-main">
  <div class="left-side">
    <?php include 'sidenav.php' ?>
  </div>
  <div class="right-side">

    <?php 
    
    $sql = 'SELECT * FROM products ORDER BY id ASC';
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // print_r($products);

    ?>

    <div class="product-list-container">
      <div class="container">
        <div class="top-container d-flex my-5">
          
          <h1 class="heading">Projects</h1>
          <a href="index.php?page=dashboard-add" class="btn btn-primary d-block">Add New</a>
        </div>
        <table class="table">
          <thead>
            <th>#ID</th>
            <th>Product Name</th>
            <th>Date Added</th>
            <th>Actions</th>
          </thead>
          <tbody>
            <?php foreach($products as $product) : ?>
              <tr>
                <td><?= $product['id'] ?></td>
                <td><a href="index.php?page=dashboard-edit&id=<?=$product['id']?>" class="edit-link"><?= $product['product_name'] ?></a></td>
                <td><?= $product['created_at'] ?></td>
                <td>
                  <a href="index.php?page=dashboard-edit&id=<?=$product['id']?>" class="btn btn-third">Edit</a>
                  <a href="index.php?page=dashboard-delete" class="btn btn-danger">Delete</a></td>
                  </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    
  </div>
</div>