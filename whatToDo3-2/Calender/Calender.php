<?php
$year = date("Y");
$month = date("m");
$myDate = date("M jS Y");
$todaysDay = date("j");
$N = date("w");

$days = cal_days_in_month(CAL_GREGORIAN,$month,$year);


// make the date the ID for queries
// First find out number of days in the daysInMonth;
// echo out days of the month
// find a way to increment and decrement days and show it with js

// for now just iterate from 1 t0 31
$daysInMonth = [];
for($i = 1;$i <= $days;$i++){
  $daysInMonth[] = $i;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      <?php include("Calender.scss"); ?>
    </style>
  </head>
  <body>
    <div class="Calender">
      <div class="header">
        <div class="headerTop">
          Today:<span class="today"> <?php echo $myDate;?></span>
        </div>
        <div class="headerMiddle"><?php echo $myDate; ?></div>
      </div>
      <div class="mainCalender">
        <div class="daysOfWeek">
          <span>Mon</span>
          <span>Tue</span>
          <span>Wed</span>
          <span>Thu</span>
          <span>Fri</span>
          <span>Sat</span>
          <span>Sun</span>
        </div>
        <ul class="daysInMonth">
          <?php 
            for ($i=1; $i <= $N ; $i++) { 
              echo "<li class='emptyDaysInMonth'></li>";
            }
            foreach ($daysInMonth as $key => $value) {
              if($todaysDay == $value) {
                echo "<li class='dayInMonth todaysDay'><a href='#'>" . $value . "</a></li>";
              } else {
                echo "<li class='dayInMonth'><a href='#'>" . $value . "</a></li>";
              }
            }?>
        </ul>
      </div>
      <?php include("./Tasks/Tasks.php"); ?>
    </div>
    <script><?php include("Calender.js"); ?></script>
  </body>
</html>
