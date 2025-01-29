<?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/whatToDo3-2";
include($root . "/Utils.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = addslashes($_POST["username"]);
  $email = addslashes($_POST["email"]);
  $password = addslashes($_POST["password"]);
  $date = date("Y-m-d H:i:s");
  $query = "insert into users (username,email,password,date) values ('$username','$email','$password','$date')";
  $result = mysqli_query($con,$query);
  header("Location: /whatToDo3-2/Login/Login.php");
  die;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <style>
      <?php 
        include("../global.scss"); 
        include("SignUp.scss"); 
      ?>
    </style>
  </head>
  <body>
    <?php include("../logo.php"); ?>
    <div class="SignUp">
      <h3>Sign Up</h3>
      <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="passwordConfirm" placeholder="Confirm password" required>
        <button type="submit" class="signUpBtn">Sign Up</button>
      </form>
      <div class="orDiv">
        <span class="line1"></span>
        <p class="or">or</p>
        <span class="line2"></span>
      </div>
      <a href='../Login/Login.php'>
        <button class="loginBtn">Login</button>
      </a>
    </div>
  </body>
</html>
