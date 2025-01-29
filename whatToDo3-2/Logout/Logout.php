<?php
session_destroy();
session_unset();
session_regenerate_id();
header("Location: ../Login/Login.php");
die;
