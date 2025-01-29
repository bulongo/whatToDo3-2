<?php 
$currentPage = basename($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      <?php include("Menu.scss"); ?>
    </style>
  </head>
  <body>
    <div class="menu">
      <div class="menu">

      <a href="/whatToDo3-2/index.php" 
      class="<?php if($currentPage == 'index.php') {
        echo 'active';
      };?>"
      >Home</a>

      <a href="/whatToDo3-2/Notes/Notes.php" 
      class="<?php if($currentPage == 'Notes.php') {
        echo 'active';
      };?>"
      >Notes</a>

      <a href="/whatToDo3-2/Documents/Documents.php" 
      class="<?php if($currentPage == 'Documents.php') {
        echo 'active';
      };?>"
      >Docs</a>

      <a href="/whatToDo3-2/Dashboard/Dashboard.php" 
      class="<?php if($currentPage == 'Dashboard.php') {
        echo 'active';
      };?>"
      >Dash</a>

     </div>
    <script src="/whatToDo3-2/index.js"></script>
  </body>
</html>
