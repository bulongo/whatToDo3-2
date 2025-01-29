<?php
$root = $_SERVER["DOCUMENT_ROOT"] . "/whatToDo3-2";
$currentPage = basename($_SERVER["REQUEST_URI"]);
include($root . "/Connection.php");

if($currentPage == "Login.php" || $currentPage == "SignUp.php") {
  return;
} else {
  include($root . "/Header/Header.php");
  include($root . "/Options/Options.php");
};

function checkLogin() {
  if(empty($_SESSION["info"])){
    header("Location: /whatToDo3-2/Login/Login.php");
    die;
  }
};
?>

<html>
  <head>
  <style>
    <?php 
      include("../global.scss"); 
      include("../Header/Header.scss");
    ?>
  </style>
  </head>
  <script src="/whatToDo3-2/index.js"></script>
</html>
