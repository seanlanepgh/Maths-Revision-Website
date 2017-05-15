<?php 

//references the dbConnect page 
include_once "phpScripts\dbConnect.php";
//Get values from hidden fields that have been posted from the register page
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Role = $_POST["Role"];
//SQL Query that registers the user by adding the  Username ,Password and Role to the users table
$RegisterQuery = "INSERT INTO `users` VALUES (NULL,'$Username','$Password','$Role')";
$Result = mysql_query($RegisterQuery,$Connect);

//Gets User ID so that it is the same as the student id or teacher id
$UserIDQuery = "SELECT `UserID` FROM `users` WHERE `username` = '$Username'";
$UserID = mysql_query($UserIDQuery,$Connect);


//Student Registeration
if($Role =="S"){
       
	   //Get values from  fields that have been posted from the register page
       $Firstname = $_POST["Firstname"];
       $Surname = $_POST["Surname"];
	   $Year= $_POST["Year"];
       $Class = $_POST["Class"];
	   
	   $Id = mysql_result($UserID,0,"UserID");
	   
	   //SQL Query Inserts Student ID ,Firstname ,Surname , Class and Year  into the student table
	   $RegisterStudentQuery = "INSERT INTO `tstudent` VALUES ('$Id','$Firstname','$Surname','$Class','$Year')";
       $Result = mysql_query($RegisterStudentQuery,$Connect);
	   
	   // Creates a session
	   session_start();
	   //Creates Session variables
       $_SESSION['username'] = $Username;
	   $_SESSION['role'] = $Role;
	   // takes user to the home page
	   header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
//Teacher Registeration
if($Role =="T"){
		//Get values from  fields that have been posted from the register page
		$Firstname = $_POST["Firstname"];
		$Surname = $_POST["Surname"];
		$Class = $_POST["Class"];
		$Id = mysql_result($UserID,0, "UserID");
		
		
		//SQL Query Inserts Teacher ID ,Firstname,Surname and class  into the teachers table
		$RegisterTeacherQuery = "INSERT INTO `teachers` VALUES ('$Id','$Firstname','$Surname','$Class')";
		$Result = mysql_query($RegisterTeacherQuery,$Connect);

		// Creates a session
		session_start();
		//Creates Session variables
		$_SESSION['username'] = $Username;
		$_SESSION['role'] = $Role;
		// takes user to the home page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
	   mysql_close($Connect);
?>