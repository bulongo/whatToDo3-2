<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    <style>
      <?php 
        include("Tasks.scss");
      ?>
    </style>
  </head>
  <body>
    <div id="Tasks">
      <h2>TASKS</h2>
      <div class="allTasks">
        <?php 
          for ($i=0; $i < 100; $i++) { 
          include("Task/Task.php"); 
          }
        ?>
      </div>
    </div>
  </body>
</html>
