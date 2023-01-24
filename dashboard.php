<div class="dashboard-main">
  <div class="left-side">
    <?php include 'sidenav.php' ?>
  </div>
  <div class="right-side">
    <?php
      if (isset($_SESSION["user_id"])) {
      $conn = require __DIR__ . '/inc/db-connect.php';

      $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

      $result = $conn->query($sql);

      $user = $result->fetch_assoc(); 
      
      ?>

      <div class="container text-center py-3">
        <h2>Welcome, <?php echo $user["name"]; ?></h2>
      </div>
    <?php } ?>
    <div class="container">
      <h2 class="heading">Dashboard Admin</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="orders table-container">
            <div class="table-responsive">
              <div class="tb-heading-container">
                <h5 class="heading">Recent Orders</h5>
                <a href="index.php?page=dashboard" class="pull-right">View All Orders</a>
              </div>
              <table class="table">
                <tbody>
                  <thead>
                    <th>Order #</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Total</th>
                  </thead>
                  <tr>
                    <td>00450</td>
                    <td>Design Works</td>
                    <td>Silingo</td>
                    <td>Total</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="users table-container">
            <div class="table-responsive">
              <div class="tb-heading-container">
                <h5 class="heading">Recently Added Users</h5>
                <a href="index.php?page=dashboard" class="pull-right">View All Users</a>
              </div>
              <table class="table">
                <thead>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                  </thead>
                <tbody>
                  <tr>
                    <td>00450</td>
                    <td>Design Works</td>
                    <td>Silingo</td>
                    <td>Total</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

