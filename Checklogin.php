<?php 
//references the dbConnect page 
include_once "phpScripts\dbConnect.php";

//Prevent SQL Injection
$Username = mysql_real_escape_string(stripslashes($_POST["username"]));
$Password = mysql_real_escape_string(stripslashes($_POST["password"]));


$LoginQuery ="SELECT * FROM `users` WHERE `username` = '$Username' AND `password`= '$Password' ";
$LoginResult = mysql_query($LoginQuery,$Connect);
$NumRows = mysql_num_rows($LoginResult);
if ($NumRows > 0) {
	 session_start();
	 //Create Session variables for the user
	 $_SESSION['username'] = $Username;
	 $_SESSION['role'] = mysql_result($LoginResult, 0,"Role");
	 
	 //if user is in the database take them to this page
	 header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
 else{ 
	 // if user is not in the database take them to this page
	  header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/IncorrectLogin.php');
	}
  
  mysql_close($Connect);
?>