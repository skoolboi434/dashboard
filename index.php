<?php include 'header.php'; 

session_start();


if (isset($_SESSION["user_id"])) {
  $conn = require __DIR__ . '/inc/db-connect.php';

  $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

  $result = $conn->query($sql);

  $user = $result->fetch_assoc(); ?>

  <div class="container">
    <div class="alert alert-success mt-3" role="alert">
      <h3>Welcome, You are logged in.</h3>
      <div class="logout-container">
        <a href="index.php?page=logout">Log out</a>
      </div>
    </div>
  </div>
<?php }




// Page is set to home (home.php) by default, so when the visitor visits that will be the page they see.
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';

?>



<?php include 'footer.php'; ?>