<?php 

$is_invalid = false;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

  $conn = require __DIR__ . '/inc/db-connect.php';

  $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $conn->real_escape_string($_POST["email"]));

  $result = $conn->query($sql);

  $user = $result->fetch_assoc();

  if($user) {
    if(password_verify($_POST["password"], $user["password_hash"])) {
      session_start();

      session_regenerate_id();

      $_SESSION["user_id"] = $user["id"];

      header("Location: index.php");
      exit;
    }
  }

  $is_invalid = true;
}

?>
<div class="page-container">
  <div class="container">
    <?php if($is_invalid) : ?>
      <div class="alert alert-danger mt-3" role="alert">
        <h3>Invalid Login.</h3>
      </div>
    <?php endif; ?>
    <div class="form-container sign-up">
      <div class="heading-container text-center mb-5">
        <h1 class="heading">Login</h1>
        <h2 class="sub-heading">Don't have an account? <a href="index.php?page=sign-up">Sign Up</a></h2>
      </div>

      <form action="">
        <div class="signup-field form-group">
          <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div>


        <div class="signup-field form-group">
          <input class="form-control" type="text" name="email" placeholder="Email" value="<?php htmlspecialchars($_POST["email"] ?? ""); ?>">
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="password" name="password" placeholder="Password">
        </div>

        <button class="btn-primary btn">Log in</button>
      </form>
    </div>
  </div>
</div>