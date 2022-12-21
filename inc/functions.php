<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ecommerce";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Sign up

if(isset($_POST['submit'])) {
  
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$pwd = $_POST['password'];
$pwdRepeat = $_POST['passwordmatch'];

// Error Handling

if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
  header('location: index.php?page=signup?error=emptyinput');
  exit();
}

if(invalidUid($username) !== false) {
  header('location: index.php?page=signup?error=invaliduid');
  exit();
}

if(invalidEmail($email) !== false) {
  header('location: index.php?page=signup?error=invalidemail');
  exit();
}

if(pwdMatch($pwd, $pwdRepeat) !== false) {
  header('location: index.php?page=signup?error=passwordsdontmatch');
  exit();
}

if(uidExists($conn, $username, $email) !== false) {
  header('location: index.php?page=signup?error=usernametaken');
  exit();
}

createUser($conn, $name, $email, $username, $pwd);

}

else {
  header('location: index.php?page=signup');
  exit();
}

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
  $result;
  if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidUid($username) {
  $result;
  if(!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if($pwd !== $pwdRepeat) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: ../index.php?page=signup?error=stmtfailed');
    exit();
  }

  mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: index.php?page=signup?error=stmtfailed');
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, 'ssss', $username, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("Location: http://".$_SERVER['HTTP_HOST'].':/dashboard-php/index.php?page=login');
    exit();

}