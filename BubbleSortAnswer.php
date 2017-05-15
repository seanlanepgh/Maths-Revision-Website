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
							<h1>BubbleSort Answers</h1><br>

								<?php

								//Gets the Correct Answer for the Orignal List sorted in Ascending order, so I can compare it with the User's Answer
								function AscendingBubbleSort ($OriginalList,$NumOfPasses) {  
								
									//Sorts the List in Ascending Order
									for ($I=1; $I<=$NumOfPasses; $I++) {  
										for ($J=0; $J<=4; $J++) {  
											if ($OriginalList[$J] > $OriginalList[$J+1]) {  
												$Temp = $OriginalList[$J];
												$OriginalList[$J] = $OriginalList[$J+1];
												$OriginalList[$J+1] = $Temp;
												  
											} 
											  
										}
										 // Uses this variable to store the concatenated list for each pass
										 $FAnswer="";
										for($X=0; $X<=5; $X++){
											$FAnswer = $FAnswer.$OriginalList[$X].",";
										}
										//Stores the concatenated list of each pass into an array and removes the end comma
										$FAnswerList[$I] = substr($FAnswer,0,strlen($FAnswer)-1) ;
									  
									}  
									//Returns this array that contains the concatenated list of each pass
									return $FAnswerList;  
								} 
								//Gets the Correct Answer for the Orignal List sorted in Ascending order, so I can compare it with the User's Answer
								function DescendingBubbleSort ($OriginalList,$NumOfPasses) {  
									//Sorts the List in Ascending Order
									for ($I=1; $I<=$NumOfPasses; $I++) {  
										for ($J=0; $J<=4; $J++) {  
											if ($OriginalList[$J] < $OriginalList[$J+1]) {  
												$Temp = $OriginalList[$J];
												$OriginalList[$J] = $OriginalList[$J+1];
												$OriginalList[$J+1] = $Temp;
												  
											} 
											  
										}
										// Uses this variable to store the concatenated list for each pass
										$FAnswer="";
										for($X=0; $X<=5; $X++){
											$FAnswer = $FAnswer.$OriginalList[$X].",";
										}
										//Stores the concatenated list of each pass into an array and removes the end comma
										$FAnswerList[$I] = substr($FAnswer,0,strlen($FAnswer)-1) ;
									  
									}  
									//Returns this array that contains the concatenated list of each pass
									return $FAnswerList;  
								} 
								
								//Gets values from previous form on the bubble sort page
								$Choice = $_POST["ChoiceForm"];
								
								//Gets the Original List out of the concatenated list for the Original List
								$OrigList = substr($_POST["OriginalList"], 0, strlen($_POST["OriginalList"])-1);
								$OriginalList = explode(",",$OrigList);
								
								//Gets values from previous form on the bubble sort page
								$NumOfPasses =$_POST["NumOfPasses"];
								
								$Marks= 0;
								$CorrectorIncorrectAnswer ="Incorrect";
								
								
								//Gets the User inputs of each pass from the rowlist hidden fields  and get it of the concatenated list for each pass to check
								for ($I=1 ;$I <=$NumOfPasses;$I++){
									$UAnswer = substr($_POST["rowlist".$I], 0, strlen($_POST["rowlist".$I])-1);
									$URowAnswerList[$I] = $UAnswer;
									$URow[$I]= explode(",",$UAnswer);
								}

								
								 


								//Check if Choice is Ascending 
								if ($Choice =="A") {

									$AnswerList = AscendingBubbleSort($OriginalList, $NumOfPasses); 
									//$AnswerList is an array of the concatenated list for each pass for the Original List 
									
									// Removes the concatenated list so you can compare each pass and stores it in another variable
									for ($I=1 ;$I <=$NumOfPasses;$I++){
										$AnswerNew[$I]= explode(",",$AnswerList[$I]);
									}
									

								}
								else if($Choice =="D"){

									$AnswerList = DescendingBubbleSort($OriginalList, $NumOfPasses);
									//$AnswerList is an array of the concatenated list for each pass for the Original List 
									
									// Removes the concatenated list so you can compare each pass and stores it in another variable
									for ($I=1 ;$I <=$NumOfPasses;$I++){
										$AnswerNew[$I]= explode(",",$AnswerList[$I]);
									}
								 

								}
								
								

								//Compares the correct answer with the users answer for each pass
								for ($J=1; $J <= $NumOfPasses; $J++){
									if ($AnswerNew [$J] == $URow[$J]){
										//if correct display this
										?>
										<p> On pass <?php Echo "$J"; ?> you got it correct.</p>
										
										<?php $Marks= $Marks + 1;
									}
										else{
											//if incorrect display this
											?>
											<p> On pass <?php Echo "$J"; ?> you got it wrong the Correct Answer was <?php echo $AnswerList[$J];?>.</p>

											<?php
										}

								}

								 //Check if you got full marks
								 if ($Marks == $NumOfPasses){ 
									$CorrectorIncorrectAnswer = "Correct";
								 
								 }
								 else {
									$CorrectorIncorrectAnswer= "Incorrect";
								 }



								//Displays the number of marks and if you got the full amount of marks
								?>
								 <p>You got <?php ECHO"$Marks"; ?> marks for this Question and you got this Question <?php ECHO "$CorrectorIncorrectAnswer";?>.</p>
								<?php
								//references the dbConnect page 
								include_once "phpScripts\dbConnect.php";
								 
								$Username = $_SESSION["username"];
								
								//Gets Student ID by SQL query from student table
								$StudentIDQuery ="SELECT `UserID` FROM `users` WHERE `username` = '$Username'";
								$StudentId = mysql_query($StudentIDQuery,$Connect);
								$Id = mysql_result($StudentId, 0,"UserId");
								
								//Inserts the results from the question into the bubble sort table in the database 
								$BubbleSortQuery = "INSERT INTO `bubblesortresults`(`BubbleSortResultsID`,`StudentID`,`BubbleSortType`,`AnswerList`,`UserAnswerList`,`NumOfPasses`,`Marks`,`CorrectOrIncorrectAnswer`) VALUES (NULL,'$Id','$Choice','$AnswerList[$NumOfPasses]','$URowAnswerList[$NumOfPasses]','$NumOfPasses','$Marks','$CorrectorIncorrectAnswer')";
								$Result = mysql_query($BubbleSortQuery,$Connect);

								mysql_close($Connect);
									
									
								?>



		 
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<a href= "BubbleSort.php" class = "button" >Click here to try another Question</a></li>
							<a href= "Results.php" class = "button" >Click here to see your results table</a></li>
							<a href= "BubbleSortMethod.php" class = "button" >Click here help for on your Question Method</a>	
						</div>
						<!-- end #sidebar -->
						
						
					</div>
				</div>
			</div>
		</div>
		<!-- end #page --> 


	</body>
</html>
<?php 
	}
?>