<?php
include("../Utils.php");
checkLogin();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <style>
      <?php 
        include("Profile.scss");
      ?>
    </style>
  </head>
  <body>
    <div class="mainContainer">
      <div class="Profile">
        <header class="profileHeader">
          <img src="/whatToDo3-2/Assets/2face.jpg"/>
          <h3 class="username">
            <?php 
              print_r($_SESSION["info"]["username"])
            ?>
          </h3>
        </header>
        <div class="profileOptions">

          <div class="profileOption">
            <h3 class="profileOptionBtn">Edit Profile</h3>
            <div class="options">
              <span id="changeProfilePicture">Change profile picture</span>
              <span>Change username</span>
              <span>Change phonenumber</span>
              <span>Delete Account </span>
            </div>
          </div>


          <div class="profileOption">
            <h3 class="profileOptionBtn">Edit Profile</h3>
            <div class="options">
              <span id="changeProfilePicture">Change profile picture</span>
              <span>Change username</span>
              <span>Change phonenumber</span>
              <span>Delete Account </span>
            </div>
          </div>


          <div class="profileOption">
            <h3 class="profileOptionBtn">Edit Profile</h3>
            <div class="options">
              <span id="changeProfilePicture">Change profile picture</span>
              <span>Change username</span>
              <span>Change phonenumber</span>
              <span>Delete Account </span>
            </div>
          </div>


          <div class="profileOption">
            <h3 class="profileOptionBtn">Edit Profile</h3>
            <div class="options">
              <span id="changeProfilePicture">Change profile picture</span>
              <span>Change username</span>
              <span>Change phonenumber</span>
              <span>Delete Account </span>
            </div>
          </div>



        </div>
      </div>
      <?php include("../Menu/Menu.php"); ?>
   </div>
    </div>
    <script src="./Profile.js"></script>
  </body>
</html>
