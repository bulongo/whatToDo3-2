<?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/whatToDo3-2";
include($root . "/Utils.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = addslashes($_POST["email"]);
  $password = addslashes($_POST["password"]);
  $query = "select * from users where email = '$email' && password = '$password' limit 1";
  $result = mysqli_query($con,$query);
  if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['info'] = $row;
    /* print_r($_SESSION["info"]); */
    header("Location: ../index.php");
    die;
  } else {
    $error = "wrong email or password";
  }
}
/* print_r($_SERVER["info"]); */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      <?php 
        include("../global.scss"); 
        include("Login.scss"); 
      ?>
    </style>
  </head>
  <body>
    <?php include("../logo.php");?>
    <div class="Login">
      <h3>Login</h3>
      <div class="socialLogin">
        <div><a href="#">G+</a></div>
        <div><a href="#">G+</a></div>
      </div>
      <form method="post">
        <input type="email" name="email" placeholder="Email" required/>
        <input type="password" name="password" placeholder="Password" required/>
        <button type="submit" class="loginBtn">Login</button>
      </form>
      <div class="orDiv">
        <span class="line1"></span>
        <p class="or">or</p>
        <span class="line2"></span>
      </div>
      <a href='../SignUp/SignUp.php'>
        <button class="signUpBtn">
          Sign Up
        </button>
      </a>
    </div>
  </body>
</html>
