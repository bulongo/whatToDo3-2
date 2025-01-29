<?php
include("../Utils.php");
checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documents</title>
    <style>
      <?php 
        include("../global.scss"); 
        include("Documents.scss");
      ?>
    </style>
  </head>
  <body>
    <div class="mainContainer">
      DOCUMENTS
      <?php include("../Menu/Menu.php"); ?>
      </div>
    </div>
  </body>
</html>
