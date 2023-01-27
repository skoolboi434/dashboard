<div class="db-container">
  <?php include 'sidenav.php' ?>

  <div class="db-content">
    <div class="db-content-header">
      <h1 class="db-content-header-text">Products</h1>
      <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
          <defs></defs>
          <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
      </button>
      <a href="index.php?page=dashboard-add" class="btn btn-primary d-block">Add Product</a>
    </div>

    <div class="db-content-actions">
      <input class="search-bar" placeholder="Search..." type="text">
      <div class="db-content-action-wrapper">
        <button class="action-button list active" title="List View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
        </button>
        <button class="action-button grid" title="Grid View">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
        </button>
      </div>
    </div>

    <?php 
    
    $sql = 'SELECT * FROM products ORDER BY id ASC';
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // print_r($products);

    ?>

    <div class="product-list-container">
      <div class="container">
        
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
                  <a href="index.php?page=process-delete&id=<?=$product['id']?>" class="btn btn-danger">Delete</a></td>
                  </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  

</div>