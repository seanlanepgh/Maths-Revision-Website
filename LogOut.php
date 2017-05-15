<?php
session_start();
session_destroy();
//takes the user to the home page after it has logged them out
header("location:Home.php");
?>