<?php
session_start();
if($_SESSION["role"]=="T"){
		//Prevents Teachers from accessing the page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
if(!isset($_SESSION["username"])) {
		// if user is not logged in show them this page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	} 
	else {
	//if user is logged in show them this page
	
?>
<html>

	<head>
		<title>The Duston School Maths Revision Tool</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
				<?php
					//references  Student's menu to get navigation bar
					include_once "StudentMenu.php";
				?>
			
				

		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<img src="images/DustonSchool Logo.jpg" width="1200" height="150" alt="" />
				</div>
			</div>
		</div>
		<!-- end #header -->
		<div id="wrapper"> 
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
							<div id="content">
								<h1>Pythagoras</h1><br>

								<?php
								//references the dbConnect page
								include_once "phpScripts\dbConnect.php";
								//Get values from the form on the Pythagoras form
								$Side = $_POST["Missingside"];
								$Value1 =$_POST["val1"];
								$Value2 =$_POST["val2"];
								$Marks = 0;
								$CorrectorIncorrectAnswer = 0;
									
								//Checks if $Side is H
								if($Side=="H"){
									//Assign the Opposite and Adjacent Values from the generated value1 and value2 fields
									 $O = $Value1;
									 $A = $Value2;
									 
									 //Assign the Opposite and Adjacent Values that the User has entered
									 $UO = $_POST["a"];
									 $UA = $_POST["b"];
										
									//Compares the Opposite Answer and the User Opposite Answer
									if($O == $UO){
									
									$Marks = $Marks+1;	
									?>
									<p> You Got the Correct Opposite! </p>
									<?php
									}
										else if ($O <> $UO){
												
											?>
											<p> You Got the Wrong Opposite! The Correct Answer was :<?php ECHO "$O"; ?> </p>
											<?php
										}
									//Compares the Adjacent Answer and the User Adjacent Answer 
									if($A == $UA){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Adjacent! </p>
										<?php
									}
										else if ($A <> $UA){
											?>
											<p> You Got the Wrong Adjacent! The Correct Answer was :<?php ECHO"$A; "?> </p>
											<?php
										}
									// Finds the Opposite Squared and the Adjacent Squared	
									$O2 = $O*$O;
									$A2 =$A*$A;
									 
									//Gets the user input for the Opposite Squared and the Adjacent Squared
									$UO2 =$_POST["a2"];
									$UA2 =$_POST["b2"];
									 
									//Compares the Opposite Squared Answer and the User Opposite Squared Answer
									if($O2 == $UO2){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Opposite<sup>2</sup> ! </p>
										<?php

									}
										else if ($O2 <> $UO2){
											?>
											<p> You Got the Wrong Opposite<sup>2</sup> ! The Correct Answer was :<?php ECHO"$O2"; ?> </p>
											<?php
										}
									//Compares the Adjacent Squared Answer and the User Adjacent Squared Answer
									if($A2 == $UA2){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Adjacent<sup>2</sup> ! </p>
										<?php
									} 
										else if ($A2 <> $UA2){
											?>
											<p> You Got the Wrong Adjacent<sup>2</sup> ! The Correct Answer was :<?php ECHO"$A2"; ?> </p>
											<?php
										}
									//Finds the Hypotenuse Squared
									$H2 = $A2 + $O2;
									
									//Gets the user input for Hypotenuse Squared
									$UH2=$_POST["c2"];
									
									//Compares the Hypotenuse Squared Answer with the User Hypotenuse Squared Answer
									if($H2 == $UH2){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Hypotenuse<sup>2</sup> ! </p>
										<?php
									}
										else if ($H2 <> $UH2){
											?>
											<p> You Got the Wrong Hypotenuse<sup>2</sup> ! The Correct Answer was :<?php ECHO"$H2"; ?> </p>
											<?php
										}
									// Find the Hypotenuse Answer 
									$H =ROUND(sqrt($H2),2);
									
									//Get user input for Hypotenuse
									$UH=$_POST["c"];
									
									//Compares the Hypotenuse Answer with the User Hypotenuse Answer   
									if($H == $UH){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Hypotenuse! </p>
										<?php
									}
										else if ($H <> $UH){
											?>
											<p> You Got the Wrong Hypotenuse! The Correct Answer was :<?php ECHO"$H"; ?> </p>
											<?php
										   
										}
								}
								//Checks if $Side is A
								else if($Side == "A"){
									//Assign the Opposite and Hypotenuse Values from the generated value1 and value2 fields
									$O = $Value1;
									$H = $Value2;
									
									//Assign the Opposite and Hypotenuse Values that the User has entered
									$UO =$_POST["a"];
									$UH=$_POST["c"];
									
									//Compares the Opposite Answer and the User Opposite Answer
									if($O == $UO){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Opposite! </p>
										<?php
									}
										else if ($O <> $UO){
											?>
											<p> You Got the Wrong Opposite! The Correct Answer was :<?php ECHO "$O"; ?> </p>
											<?php
										}
									//Compares the Hypotenuse Answer with the User Hypotenuse Answer 
									if($H == $UH){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Hypotenuse! </p>
										<?php
									} 
										else if ($H <> $UH){
											?>
											<p> You Got the Wrong Hypotenuse! The Correct Answer was :<?php ECHO"$H; "?> </p>
											<?php
										}
									// Finds the Opposite Squared and the Hypotenuse Squared	
									$O2 = $O*$O;
									$H2 =$H*$H;
									
									//Gets the user input for the Opposite Squared and the Hypotenuse Squared
									$UO2 =$_POST["a2"];
									$UH2 =$_POST["c2"];
									
									//Compares the Opposite Squared Answer and the User Opposite Squared Answer
									if($O2 == $UO2){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Opposite<sup>2</sup> ! </p>
										<?php
									}
										else if ($O2 <> $UO2){
											?>
											<p> You Got the Wrong Opposite<sup>2</sup> ! The Correct Answer was :<?php ECHO"$O2"; ?> </p>
											<?php
										}
									//Compares the Hypotenuse Squared Answer and the User Hypotenuse Squared Answer
									if($H2 == $UH2){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Hypotenuse<sup>2</sup> ! </p>
										<?php
									}
										else if ($H2 <> $UH2){
											?>
											<p> You Got the Wrong 	Hypotenuse<sup>2</sup> ! The Correct Answer was :<?php ECHO"$H2"; ?> </p>
											<?php
										}
									// Finds the Adjacent Squared Answer 
									$A2 = $H2 - $O2;
									
									//Gets the user input for Adjacent Squared
									$UA2=$_POST["b2"];
									
									//Compares the Adjacent Squared Answer and the User Adjacent Squared Answer
									if($A2 == $UA2){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Adjacent<sup>2</sup> ! </p>
										<?php
									}
										else if ($A2 <> $UA2){
											?>
											<p> You Got the Wrong Adjacent<sup>2</sup> ! The Correct Answer was :<?php ECHO"$A2"; ?> </p>
											<?php
										}
									// Finds the Adjacent Answer
									$A =ROUND(sqrt($A2),2);
									
									//Gets the user input for Adjacent
									$UA=$_POST["c"];
									
									//Compares the Adjacent Answer and the User Adjacent Answer 
									if($A == $UA){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Adjacent! </p>
										<?php
									}
										else if ($A <> $UA){
											?>
											<p> You Got the Wrong Adjacent! The Correct Answer was :<?php ECHO"$A"; ?> </p>
											<?php
										   
										}
								}
								//Checks if $Side is O
							   else if($Side="O"){
									//Assign the Adjacent and Hypotenuse values from the generated value1 and value2 fields
									$A = $Value1;
									$H = $Value2;
									
									//Assign the Adjacent and Hypotenuse Values that the User has entered
									$UA =$_POST["b"];
									$UH=$_POST["c"];
									
									//Compares the Adjacent Answer and the User Adjacent Answer 
									if($A == $UA){
										$Marks = $Marks + 1;
										?>
										<p> You Got the Correct Adjacent! </p>
										<?php
									}
										else if ($A <> $UA){
											?>
											<p> You Got the Wrong Adjacent! The Correct Answer was :<?php ECHO "$A"; ?> </p>
											<?php
										}
										//Compares the Hypotenuse Answer with the User Hypotenuse Answer 
										if($H == $UH){
											$Marks = $Marks+1;
											?>
											<p> You Got the Correct Hypotenuse! </p>
											<?php
										} else if ($H <> $UH){
												?>
												<p> You Got the Wrong Hypotenuse! The Correct Answer was :<?php ECHO"$H; "?> </p>
												<?php
											}
									// Finds the Adjacent Squared Answer 		
									$A2 = $A*$A;
									
									// Finds the Hypotenuse Squared Answer 
									$H2 =$H*$H;
									
									//Gets the user input for the 	Adjacent Squared and the Hypotenuse Squared
									$UA2 =$_POST["b2"];
									$UH2 =$_POST["c2"];
									//Compares the Adjacent Squared Answer and the User Adjacent Squared Answer
									if($A2 == $UA2){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Adjacent<sup>2</sup> ! </p>
										<?php
									}else if ($A2 <> $UA2){
											?>
											<p> You Got the Wrong Adjacent<sup>2</sup> ! The Correct Answer was :<?php ECHO"$A2"; ?> </p>
											<?php
										}
									//Compares the Hypotenuse Squared Answer and the User Hypotenuse Squared Answer
									if($H2 == $UH2){
									   $Marks = $Marks+1;
										?>
										<p> You Got the Correct Hypotenuse<sup>2</sup> ! </p>
										<?php
									}else if ($H2 <> $UH2){
											?>
											<p> You Got the Wrong 	Hypotenuse<sup>2</sup> ! The Correct Answer was :<?php ECHO"$H2"; ?> </p>
											<?php
										}
									// Finds the Opposite Squared Answer 		
									$O2 = $H2 - $A2;
									
									//Gets the user input for Opposite Squared
									$UO2=$_POST["a2"];
									
									//Compares the Opposite Squared Answer and the User Opposite Squared Answer
									if($O2 == $UO2){
										 $Marks = $Marks+1;
										?>
										<p> You Got the Correct Opposite<sup>2</sup> ! </p>
										<?php
									}else if ($O2 <> $UO2){
											?>
											<p> You Got the Wrong Opposite<sup>2</sup> ! The Correct Answer was :<?php ECHO"$O2"; ?> </p>
											<?php
										}
									// Finds the Opposite Answer 	
									$O =ROUND(sqrt($O2),2);
									
									//Gets the user input for Opposite 
									$UO=$_POST["a"];
									
									//Compares the Opposite Squared Answer and the User Opposite Squared Answer
									if($O == $UO){
										$Marks = $Marks+1;
										?>
										<p> You Got the Correct Opposite! </p>
										<?php
									}else if ($O <> $UO){
											?>
											<p> You Got the Wrong Opposite! The Correct Answer was :<?php ECHO"$O"; ?> </p>
											<?php
									   
										}
								}
							 //Check if they got the question correct or incorrect
							 if ($Marks == 6){ 
							 $CorrectorIncorrectAnswer = "Correct";
							 
							 }else {
							 $CorrectorIncorrectAnswer= "Incorrect";
							 }
							 //Display Marks and if they got the question correct or incorrect
							 ?>
							 <p>You got <?php ECHO"$Marks"; ?> marks for this question and you got this question <?php Echo "$CorrectorIncorrectAnswer" ?> .</p>

								 <?php
								 
									//references the dbConnect page 
									include_once "phpScripts\dbConnect.php";
									  
									  
									  
									
									$UO = mysql_real_escape_string(stripslashes($UO));
									$UA= mysql_real_escape_string(stripslashes($UA));
									$UH =mysql_real_escape_string(stripslashes($UH)); 
									  
									$UO2 = mysql_real_escape_string(stripslashes($UO2));
									$UA2= mysql_real_escape_string(stripslashes($UA2));
									$UH2 =mysql_real_escape_string(stripslashes($UH2)); 

									
									$Username = $_SESSION["username"];
									//Gets Student ID by SQL query from student table
									$StudentIDQuery ="SELECT `UserID` FROM `users` WHERE `username` = '$Username'";
									$StudentId = mysql_query($StudentIDQuery,$Connect);
									$Id = mysql_result($StudentId, 0);
									//Inserts the results from the question into the pythagoras table in the database  
									$PythagorasQuery = "INSERT INTO `pythagorasresults`(`PythagorasResultsID`,`StudentID`,`PythagorasType`,`a`,`b`,`c`,`usera`,`userb`,`userc`,`asquared`,`bsquared`,`csquared`,`userasquared`,`userbsquared`,`usercsquared`,`marks`,`CorrectorIncorrectAnswer`) VALUES (NULL,'$Id','$Side','$O','$A','$H','$UO','$UA','$UH','$O2','$A2','$H2','$UO2','$UA2','$UH2','$Marks','$CorrectorIncorrectAnswer')";
									$Result = mysql_query($PythagorasQuery,$Connect);

									mysql_close($Connect);

								?>
							</div>
						<!-- end #content -->
						<div id="sidebar">
							<a href= "Pythagoras.php" class = "button" >Click here to try another Question</a>
							<a href= "Results.php" class = "button" >Click here to see your results table</a>
							<a href= "PythagorasMethod.php" class = "button" >Click here for help on your Question Method</a>
						</div>
					</div>
				</div>  
			</div>
		</div>
		<!-- end #page --> 
	</body>
</html>
<?php }	
?>	

  