<?php 
include_once "phpScripts\dbConnect.php";

$Username = $_POST["Username"];
$Password = $_POST["Password"];

$Role=$_POST["Role"];
If( $Username<>"" && $Password<>"" && $Role<>"")  {

$RegisterQuery = "INSERT INTO `users`(`UserID`,`username`,`password`,`Role`) VALUES (NULL,'$Username','$Password','$Role')";
$result = mysql_query($RegisterQuery,$conn);

header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/register2.php');
}
else { header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/register.php');
}

	
?>
