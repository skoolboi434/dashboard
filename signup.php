<?php

// require_once 'inc/db-connect.php';
// require_once 'inc/functions.php';

?>
<div class="page-container">
  <div class="container">
    <div class="form-container sign-up">
      <div class="heading-container text-center mb-5">
        <h1 class="heading">Create Account</h1>
        <h2 class="sub-heading">Already have an account? <a href="index.php?page=login">Login</a></h2>
      </div>

<<<<<<< HEAD
<<<<<<<< HEAD:signup.php
      <form id="signup" action="process-signup.php" method="POST" novalidate>
        <div class="signup-field form-group">
          <input class="form-control" type="text" name="name" placeholder="Enter Full Name">
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="text" name="email" placeholder="Email">
========
      <form action="./inc/functions.php" method="POST">
        <div class="signup-field form-group">
          <input class="form-control" type="text" name="name" placeholder="Enter Full Name" required>
>>>>>>>> 5552aa0a629497d89bc5ae46711c244177eb683d:sign-up.php
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="text" name="username" placeholder="Username">
        </div>

        <div class="signup-field form-group">
<<<<<<<< HEAD:signup.php
          <input class="form-control" type="password" name="password" placeholder="Password">
========
=======
      <form action="./inc/functions.php" method="POST">
        <div class="signup-field form-group">
          <input class="form-control" type="text" name="name" placeholder="Enter Full Name" required>
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="text" name="email" placeholder="Email" required>
        </div>

        <div class="signup-field form-group">
>>>>>>> 5552aa0a629497d89bc5ae46711c244177eb683d
          <input class="form-control" type="text" name="username" placeholder="Username" required>
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="text" name="password" placeholder="Password" required>
<<<<<<< HEAD
>>>>>>>> 5552aa0a629497d89bc5ae46711c244177eb683d:sign-up.php
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="password" name="password_match" placeholder="Retype Password" required>
=======
        </div>

        <div class="signup-field form-group">
          <input class="form-control" type="text" name="passwordmatch" placeholder="Retype Password" required>
>>>>>>> 5552aa0a629497d89bc5ae46711c244177eb683d
        </div>

        <button type="submit" name="submit" class="btn-primary btn">Sign Up</button>
      </form>
    </div>
  </div>
</div>