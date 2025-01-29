<?php
include("Utils.php");
/* print_r($_SESSION["info"]); */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
   <style>
      <?php include("index.scss"); ?>
    </style>
  </head>
  <body>
    <div class="mainContainer">
      <?php include($root . "/Calender/Calender.php"); ?>
      <?php include("./Menu/Menu.php"); ?>
    </div>
  </body>
</html>
