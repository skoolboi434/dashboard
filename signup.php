<?php

require_once 'inc/db-connect.php';
// require_once 'inc/functions.php';

?>
<div class="page-container">
  <div class="container">
    <div class="form-container sign-up">
      <div class="heading-container text-center mb-5">
        <h1 class="heading">Create Account</h1>
        <h2 class="sub-heading">Already have an account? <a href="index.php?page=login">Login</a></h2>
      </div>

      <form id="signup" action="process-signup.php" method="POST" novalidate>
        <div class="signup-field form-group">
          <input class="form-control" type="text" name="name" placeholder="Enter Full Name">
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="text" name="email" placeholder="Email">
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="text" name="username" placeholder="Username">
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="password" name="password" placeholder="Password">
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="password" name="password_match" placeholder="Retype Password" required>
        </div>

        <button type="submit" name="submit" class="btn-primary btn">Sign Up</button>
      </form>
    </div>
  </div>
</div>