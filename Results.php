<?php
session_start();
if (isset($_SESSION["username"])){
	// if user is  logged in show them this page
	
 ?>

<html>
	<head>
		<title>The Duston School Maths Revision Tool</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		
	</head>
	<body>
<?php
	if($_SESSION["role"]=="S"){
	
	
	//references  Student's menu to get naviagation bar
	include_once "StudentMenu.php";
	}
	else{
		//references  Teacher's menu to get naviagation bar
		include_once "TeacherMenu.php";
	
	}
?>
			<!-- end #menu --> 

		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<img src="images/DustonSchool Logo.jpg" width="1200" height="150" alt="" />
				</div>
			</div>
		</div>
		<div id="wrapper"> 
			<!-- end #header -->
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
<?php
	//Gets Results for the student that is logged into the system
	if($_SESSION["role"]=="S"){
	
		//references the dbConnect page 
		include_once "phpScripts\dbConnect.php";
		$Username = $_SESSION["username"];
		//Gets Student ID by SQL query from student table
		$StudentIDQuery ="SELECT `UserID` FROM `users` WHERE `username` = '$Username'";
		$StudentId = mysql_query($StudentIDQuery,$Connect);
		$Id = mysql_result($StudentId, 0,"UserId");
		
		//Selects the results from the pythagoras table in the database  
		$PythagorasQuery = "SELECT * FROM `pythagorasresults` WHERE `StudentID` = '$Id'";
		$PythagResults = mysql_query($PythagorasQuery,$Connect);
			 
		// Gets the number of rows of selected data from the pythagoras results table in the database
		$NRows = mysql_num_rows($PythagResults);
		
		//Check if there is data in  the pythagoras table in the database
		if(!$NRows == 0){
			//Generates column heading for the pythagoras table
?>
											<h2 class="title">Pythagoras Results Table<h2>	
											<table class="tg">
											  <tr>
												<th class="tg-031e">Question Number</th>
												<th class="tg-031e">Pythagoras Type</th>
												<th class="tg-031e">Correct Answer for a</th>
												<th class="tg-031e">Correct Answer for b</th>
												<th class="tg-031e">Correct Answer for c</th>
												<th class="tg-031e">Your Answer for  a</th>
												<th class="tg-031e">Your Answer for  b</th>
												<th class="tg-031e">Your Answer for c</th>
												<th class="tg-031e">Correct Answer for a squared</th>
												<th class="tg-031e">Correct Answer for b squared</th>
												<th class="tg-031e">Correct Answer for c squared</th>
												<th class="tg-031e">Your Answer for  a squared</th>
												<th class="tg-031e">Your Answer for  b squared</th>
												<th class="tg-031e">Your Answer for c squared</th>
												<th class="tg-031e">Marks</th>
												<th class="tg-031e">Answered Question correctly</th>
											  </tr>
<?php
			// Displays each  row of selected data from the pythagoras results table in the database
			for($X=0;$X<$NRows; $X++){
			
				$QuestionNum = $X+1;
				$PythagorasType = mysql_result($PythagResults, $X, 'PythagorasType');	
				$A = mysql_result($PythagResults, $X, 'a');
				$B = mysql_result($PythagResults, $X, 'b');
				$C = mysql_result($PythagResults, $X, 'c');
				$UA = mysql_result($PythagResults, $X, 'usera');
				$UB = mysql_result($PythagResults, $X, 'userb');
				$UC = mysql_result($PythagResults, $X, 'userc');
				$A2 = mysql_result($PythagResults, $X, 'asquared');
				$B2 = mysql_result($PythagResults, $X, 'bsquared');
				$C2 = mysql_result($PythagResults, $X, 'csquared');
				$UA2 = mysql_result($PythagResults, $X, 'userasquared');
				$UB2 = mysql_result($PythagResults, $X, 'userbsquared');
				$UC2 = mysql_result($PythagResults, $X, 'usercsquared');
				$Marks = mysql_result($PythagResults, $X, 'marks');
				$CorrectOrIncorrect = mysql_result($PythagResults, $X, 'CorrectorIncorrectAnswer');
				echo"<tr>";
				echo"<td class=\"tg-031e\"> $QuestionNum </td>";
				echo"<td class=\"tg-031e\"> $PythagorasType </td>";
				echo"<td class=\"tg-031e\"> $A </td>";
				echo"<td class=\"tg-031e\"> $B </td>";
				echo"<td class=\"tg-031e\"> $C </td>";
				echo"<td class=\"tg-031e\">$UA</td>";
				echo"<td class=\"tg-031e\">$UB</td>";
				echo"<td class=\"tg-031e\">$UC</td>";
				echo"<td class=\"tg-031e\">$A2</td>";
				echo"<td class=\"tg-031e\">$B2</td>";
				echo"<td class=\"tg-031e\">$C2</td>";
				echo"<td class=\"tg-031e\">$UA2</td>";
				echo"<td class=\"tg-031e\">$UB2</td>";
				echo"<td class=\"tg-031e\">$UC2</td>";
				echo"<td class=\"tg-031e\">$Marks</td>";
				echo"<td class=\"tg-031e\">$CorrectOrIncorrect</td>";
				echo"</tr>";	
			
			
			}
		} else{
			//If no data in  pythagoras table in database display this
			echo"<p>No results for pythagoras ,please answer some questions on this topic to get some results</p>";
			echo"<br>";
		   }
?>
											</table>
											<br>
												
<?php
				//Selects the results from the  bubble sort table in the database 
				$BubbleSortQuery = "SELECT * FROM `bubblesortresults` WHERE `StudentID` = '$Id'";
				$BubbleResults = mysql_query($BubbleSortQuery,$Connect);
				
				// Gets the number of rows of selected data from the bubble sort results table in the database
				$NRows = mysql_num_rows($BubbleResults);
				
				//Check if there is data in  the bubble sort table in the database
				if(!$NRows == 0){
					//Generates column heading for the bubble sort table
?>
															<h2 class="title">BubbleSort Results Table<h2>
															<table class="tg">
															  <tr>
																<th class="tg-031e">Question Number</th>
																<th class="tg-031e">Bubble Sorted Type</th>
																<th class="tg-031e">Correctly Sorted List</th>
																<th class="tg-031e">User's Sort List</th>
																<th class="tg-031e">Marks</th>
																<th class="tg-031e">Answered Question correctly</th>
															  </tr>
<?php
						//Reset variable values
						$Marks = 0;
						$CorrectOrIncorrect = 0;
						
						// Displays each row of selected data from the bubble sort results table in the database
						for($X=0;$X<$NRows; $X++){
							$QuestionNum = $X+1;
							$BubbleSortType = mysql_result($BubbleResults, $X, 'BubbleSortType');	
							$AnswerList = mysql_result($BubbleResults, $X, 'AnswerList');
							$UserAnswerList = mysql_result($BubbleResults, $X, 'UserAnswerList');
							$Marks = mysql_result($BubbleResults, $X, 'Marks');
							$CorrectOrIncorrect = mysql_result($BubbleResults, $X, 'CorrectorIncorrectAnswer');
							
							
							
							echo"<tr>";
							echo"<td class=\"tg-031e\"> $QuestionNum </td>";
							echo"<td class=\"tg-031e\"> $BubbleSortType </td>";
							echo"<td class=\"tg-031e\"> $AnswerList </td>";
							echo"<td class=\"tg-031e\">	$UserAnswerList </td>";
							echo"<td class=\"tg-031e\"> $Marks </td>";
							echo"<td class=\"tg-031e\">	$CorrectOrIncorrect</td>";
							echo"</tr>";	
						
						
						}
				} else{
					//If no data in  bubble sort table in database display this
					echo"<p>No results for bubble sort ,please answer some questions on this topic to get some results</p>";
					echo"<br>";
				   }
?>
										</table>
										<br>
										
<?php
			//Selects the results from the  quick sort table in the database 
			$QuickSortQuery = "SELECT * FROM `quicksortresults` WHERE `StudentID` = '$Id'";
			$QuickResults = mysql_query($QuickSortQuery,$Connect);
			
			// Displays each  row of selected data from the quick sort results table in the database
			$NRows = mysql_num_rows($QuickResults);
			
			//Check if there is data in  the quick sort table in the database
			if(!$NRows == 0){
						//Generates column heading for the quick sort table
?>
													<h2 class="title">QuickSort Results Table<h2>	
													<table class="tg">
													  <tr>
														<th class="tg-031e">Question Number</th>
														<th class="tg-031e">Quick Sorted Type</th>
														<th class="tg-031e">Correctly Sort List</th>
														<th class="tg-031e">User's Sorted List</th>
														<th class="tg-031e">Marks</th>
														<th class="tg-031e">Answered Question correctly</th>
													  </tr>
<?php
					//Reset variable values
						$Marks = 0;
						$CorrectOrIncorrect = 0;
					// Displays each row of selected data from the quick sort results table in the database
					for($X=0;$X<$NRows; $X++){
						$QuestionNum = $X+1;
						$QuickSortType = mysql_result($QuickResults, $X, 'QuickSortType');	
						$AnswerList = mysql_result($QuickResults, $X, 'AnswerList');
						$UserAnswerList = mysql_result($QuickResults, $X, 'UserAnswerList');
						$Marks = mysql_result($QuickResults, $X, 'Marks');
						$CorrectOrIncorrect = mysql_result($QuickResults, $X, 'CorrectorIncorrectAnswer');
						
						echo"<tr>";
						echo"<td class=\"tg-031e\"> $QuestionNum </td>";
						echo"<td class=\"tg-031e\"> $QuickSortType </td>";
						echo"<td class=\"tg-031e\"> $AnswerList </td>";
						echo"<td class=\"tg-031e\">	$UserAnswerList </td>";
						echo"<td class=\"tg-031e\"> $Marks </td>";
						echo"<td class=\"tg-031e\">	$CorrectOrIncorrect</td>";
						echo"</tr>";	
					
					
					}
?>
												</table>
												<br>
<?php	
			} else{
					//If no data in  quick sort table in database display this
					echo"<p>No results for quick sort ,please answer some questions on this topic to get some results</p>";
					echo"<br>";
				}
	}	
	//Gets Results for all the students for the teacher that is logged into the system
	else if($_SESSION["role"]=="T"){
		
			//references the dbConnect page 
			include_once "phpScripts\dbConnect.php";
			$Username = $_SESSION["username"];
			//Gets  User ID by SQL query from users table
			$UserIDQuery ="SELECT `UserID` FROM `users` WHERE `username` = '$Username'";
			$UserId = mysql_query($UserIDQuery,$Connect);
			$NRow = mysql_num_rows($UserId);
			$Id = mysql_result($UserId, 0,"UserId");
			
			
			//Get the Teachers Class by their id
			$ClassQuery ="SELECT `Class` FROM `teachers` WHERE `TeacherID` = '$Id'";
			$ClassResult = mysql_query($ClassQuery,$Connect);
			$Class = mysql_result($ClassResult,0);
		
			
			//Gets all the students in the teacher's class
			$StudentIdQuery ="SELECT `StudentID`,`Firstname`,`Surname`,`Year` FROM `tstudent` WHERE `Class` = '$Class'";
			$StudentIdResults = mysql_query($StudentIdQuery,$Connect);
			$NRowStudent = mysql_num_rows($StudentIdResults);
			print"$NRowStudent";
			if(!$NRowStudent == 0){
			//if Number of studemt is not zero do this
?>				
												<h2 class="title">Pythagoras Results Table<h2>	
												<table class="tg">
												  <tr>
													<th class="tg-031e">Firstname</th>
													<th class="tg-031e">Surname</th>
													<th class="tg-031e">Year Group</th>
													<th class="tg-031e">Questions Attempted for Pythagoras</th>
													<th class="tg-031e">Number of Correct Answers for Pythagoras</th>
													<th class="tg-031e">Percentage of Correct Answers for Pythagoras </th>
													<th class="tg-031e">Total Marks for Pythagoras</th>
													<th class="tg-031e">Percentage of Marks for Pythagoras </th>
												  </tr>
<?php
			
				//For each student  get data from pythagoras results table and display it
				for($X=0;$X<$NRowStudent; $X++){
					
					$Firstname = mysql_result($StudentIdResults, $X, 'Firstname');
					$Surname = mysql_result($StudentIdResults, $X, 'Surname');
					$Year = mysql_result($StudentIdResults, $X, 'Year');
					$StudentId = mysql_result($StudentIdResults, $X, 'StudentId');
					
					//Selects the results from the pythagoras table in the database  
					$PythagorasQuery = "SELECT * FROM `pythagorasresults` WHERE `StudentID` = '$StudentId'";
					$PythagResults = mysql_query($PythagorasQuery,$Connect);
					
					// Gets the Num of Questions Attempted
					$NumAttempt = mysql_num_rows($PythagResults);
					//Reset variable values
						$Marks = 0;
						$CorrectOrIncorrect = 0;
					
					//Declaring Variables for each iteration 
					$StudentMarks = 0;
					$TotalCorrect = 0;
					$TotalMarks = 0;
					$PercentCorrect = 0;
					$PercentMarks = 0;
					
					//Uses the Num of Question Attempted to get generate stats from the student
					for($J=0;$J<$NumAttempt; $J++){
						
						//Gets Mark for a Question
						$Marks = mysql_result($PythagResults, $J, 'marks');
						//Add all the marks together
						$StudentMarks = $StudentMarks + $Marks;
						
						$CorrectOrIncorrect = mysql_result($PythagResults, $J, 'CorrectorIncorrectAnswer');
						//Check to see if the student got a question correct
						if($CorrectOrIncorrect ="Correct"){
							//increment the number of correctly answered questions
							$TotalCorrect++;
						}
						
					
					}
					//Get the Total Amount of marks from the number questions attempted
					$TotalMarks = $NumAttempt *6;
					
					//Prevent Divide Zero errors and display student's info and stats on this topic
					if ($NumAttempt == 0||$TotalMarks == 0){
						$NumAttempt = 0;
						
						echo"<tr>";
						echo"<td class=\"tg-031e\"> $Firstname </td>";
						echo"<td class=\"tg-031e\"> $Surname </td>";
						echo"<td class=\"tg-031e\"> $Year </td>";
						echo"<td class=\"tg-031e\"> $NumAttempt </td>";
						echo"<td class=\"tg-031e\"> $TotalCorrect </td>";
						echo"<td class=\"tg-031e\"> $PercentCorrect % </td>";
						echo"<td class=\"tg-031e\"> N / A </td>";
						echo"<td class=\"tg-031e\"> $PercentMarks % </td>";
						echo"</tr>";
						
					
					}else{
						$PercentCorrect = ROUND(($TotalCorrect /$NumAttempt)*100,1);
						$PercentMarks = ROUND(($StudentMarks /$TotalMarks)*100,1);
						echo"<tr>";
						echo"<td class=\"tg-031e\"> $Firstname </td>";
						echo"<td class=\"tg-031e\"> $Surname </td>";
						echo"<td class=\"tg-031e\"> $Year </td>";
						echo"<td class=\"tg-031e\"> $NumAttempt </td>";
						echo"<td class=\"tg-031e\"> $TotalCorrect </td>";
						echo"<td class=\"tg-031e\"> $PercentCorrect % </td>";
						echo"<td class=\"tg-031e\"> $StudentMarks / $TotalMarks </td>";
						echo"<td class=\"tg-031e\"> $PercentMarks % </td>";
						echo"</tr>";
						
					}
					
				}
?>
												</table>
												<h2 class="title">Bubble Sort Results Table<h2>	
												<table class="tg">
												  <tr>
													<th class="tg-031e">Firstname</th>
													<th class="tg-031e">Surname</th>
													<th class="tg-031e">Year Group</th>
													<th class="tg-031e">Questions Attempted for Bubble Sort</th>
													<th class="tg-031e">Number of Correct Answers for Bubble Sort</th>
													<th class="tg-031e">Percentage of Correct Answers for Bubble Sort </th>
													<th class="tg-031e">Total Marks for Bubble Sort</th>
													<th class="tg-031e">Percentage of Marks for Bubble Sort </th>
												  </tr>
													
													
<?php
				
				//For each student  get data from bubblesort results table and display it
				for($X=0;$X<$NRowStudent; $X++){
				
					$Firstname = mysql_result($StudentIdResults, $X, 'Firstname');
					$Surname = mysql_result($StudentIdResults, $X, 'Surname');
					$Year = mysql_result($StudentIdResults, $X, 'Year');
					$StudentId = mysql_result($StudentIdResults, $X, 'StudentId');
					//Selects the results from the bubble sort table in the database  
					$BubbleSortQuery = "SELECT * FROM `bubblesortresults` WHERE `StudentID` = '$StudentId'";
					$BubbleResults = mysql_query($BubbleSortQuery,$Connect);
					
					// Gets the Num of Questions Attempted
					$NumAttempt = mysql_num_rows($BubbleResults);
					
					//Reset variable values
						$Marks = 0;
						$CorrectOrIncorrect = 0;
						
					//Declaring Variables for each iteration 
					
					$StudentMarks = 0;
					$TotalCorrect = 0;
					$TotalMarks = 0;
					$PercentCorrect = 0;
					$PercentMarks = 0;
					
					
					//Uses the Num of Question Attempted to get generate stats from the student
					for($J=0;$J<$NumAttempt; $J++){
					 
						//Gets Mark for a Question
						$Marks = mysql_result($BubbleResults, $J, 'Marks');
						
						//Add all the marks together
						$StudentMarks = $StudentMarks + $Marks;
						
						$NumOfPasses = mysql_result($BubbleResults, $J, 'NumOfPasses');
						$CorrectOrIncorrect = mysql_result($BubbleResults, $J, 'CorrectOrIncorrectAnswer');
						
						//Get the Total Amount of marks from the number of passes because the  total mark for a question is based on the num of passes
						$TotalMarks = $TotalMarks + $NumOfPasses;
						
						//Check to see if the student got a question correct
						if($CorrectOrIncorrect ="Correct"){
							//increment the number of correctly answered questions
							$TotalCorrect++;
						}
						
					
					}
					
					
					//Prevent Divide Zero errors and display student's info and stats on this topic
					if ($NumAttempt == 0||$TotalMarks == 0){
						$NumAttempt = 0;
						
						echo"<tr>";
						echo"<td class=\"tg-031e\"> $Firstname </td>";
						echo"<td class=\"tg-031e\"> $Surname </td>";
						echo"<td class=\"tg-031e\"> $Year </td>";
						echo"<td class=\"tg-031e\"> $NumAttempt </td>";
						echo"<td class=\"tg-031e\"> $TotalCorrect </td>";
						echo"<td class=\"tg-031e\"> $PercentCorrect % </td>";
						echo"<td class=\"tg-031e\"> N / A </td>";
						echo"<td class=\"tg-031e\"> $PercentMarks % </td>";
						echo"</tr>";
						
					
					}else{
						$PercentCorrect = ROUND(($TotalCorrect /$NumAttempt)*100,1);
						$PercentMarks = ROUND(($StudentMarks /$TotalMarks)*100,1);
						echo"<tr>";
						echo"<td class=\"tg-031e\"> $Firstname </td>";
						echo"<td class=\"tg-031e\"> $Surname </td>";
						echo"<td class=\"tg-031e\"> $Year </td>";
						echo"<td class=\"tg-031e\"> $NumAttempt </td>";
						echo"<td class=\"tg-031e\"> $TotalCorrect </td>";
						echo"<td class=\"tg-031e\"> $PercentCorrect % </td>";
						echo"<td class=\"tg-031e\"> $StudentMarks / $TotalMarks </td>";
						echo"<td class=\"tg-031e\"> $PercentMarks % </td>";
						echo"</tr>";
						
					}
					
				}		
?>
												</table>
												<h2 class="title">Quick Sort Results Table<h2>	
												<table class="tg">
												  <tr>
													<th class="tg-031e">Firstname</th>
													<th class="tg-031e">Surname</th>
													<th class="tg-031e">Year Group</th>
													<th class="tg-031e">Questions Attempted for Quick Sort</th>
													<th class="tg-031e">Number of Correct Answers for Quick Sort</th>
													<th class="tg-031e">Percentage of Correct Answers for Quick Sort </th>
													<th class="tg-031e">Total Marks for Quick Sort</th>
													<th class="tg-031e">Percentage of Marks for Quick Sort </th>
												  </tr>
													
													
<?php
				  
				//For each student  get data from quick sort results table and display it
				for($X=0;$X<$NRowStudent; $X++){	
				$Firstname = mysql_result($StudentIdResults, $X, 'Firstname');
					$Surname = mysql_result($StudentIdResults, $X, 'Surname');
					$Year = mysql_result($StudentIdResults, $X, 'Year');
					$StudentId = mysql_result($StudentIdResults, $X, 'StudentId');
						
						//Selects the results from the quick sort table in the database  
						$QuickSortQuery = "SELECT * FROM `quicksortresults` WHERE `StudentID` = '$StudentId'";
						$QuickResults = mysql_query($QuickSortQuery,$Connect);
						// Gets the Num of Questions Attempted
						$NumAttempt =0;
					$NumAttempt = mysql_num_rows($QuickResults);
					
					//Reset variable values
						$Marks = 0;
						$CorrectOrIncorrect = 0;
						
					//Declaring Variables for each iteration 
					
					$StudentMarks = 0;
					$TotalCorrect = 0;
					$TotalMarks = 0;
					$PercentCorrect = 0;
					$PercentMarks = 0;
					
					
					//Uses the Num of Question Attempted to get generate stats from the student
					for($J=0;$J<$NumAttempt; $J++){
						
						//Gets Mark for a Question
						$Marks = mysql_result($QuickResults, $J, 'Marks');
						
						//Add all the marks together
						$StudentMarks = $StudentMarks + $Marks;
						
						$NumOfPasses = mysql_result($QuickResults, $J, 'NumOfPasses');
						$CorrectOrIncorrect = mysql_result($QuickResults, $J, 'CorrectOrIncorrectAnswer');
						
						//Get the Total Amount of marks from the number of passes because the  total mark for a question is based on the num of passes
						$TotalMarks = $TotalMarks + $NumOfPasses;
						
						//Check to see if the student got a question correct
						if($CorrectOrIncorrect ="Correct"){
							//increment the number of correctly answered questions
							$TotalCorrect++;
						}
						
					
					}
					
					
					//Prevent Divide Zero errors and display student's info and stats on this topic
					if ($NumAttempt == 0||$TotalMarks == 0){
						$NumAttempt = 0;
						
						echo"<tr>";
						echo"<td class=\"tg-031e\"> $Firstname </td>";
						echo"<td class=\"tg-031e\"> $Surname </td>";
						echo"<td class=\"tg-031e\"> $Year </td>";
						echo"<td class=\"tg-031e\"> $NumAttempt </td>";
						echo"<td class=\"tg-031e\"> $TotalCorrect </td>";
						echo"<td class=\"tg-031e\"> $PercentCorrect % </td>";
						echo"<td class=\"tg-031e\"> N / A </td>";
						echo"<td class=\"tg-031e\"> $PercentMarks % </td>";
						echo"</tr>";
						
					
					}else{
						$PercentCorrect = ROUND(($TotalCorrect /$NumAttempt)*100,1);
						$PercentMarks = ROUND(($StudentMarks /$TotalMarks)*100,1);
						echo"<tr>";
						echo"<td class=\"tg-031e\"> $Firstname </td>";
						echo"<td class=\"tg-031e\"> $Surname </td>";
						echo"<td class=\"tg-031e\"> $Year </td>";
						echo"<td class=\"tg-031e\"> $NumAttempt </td>";
						echo"<td class=\"tg-031e\"> $TotalCorrect </td>";
						echo"<td class=\"tg-031e\"> $PercentCorrect % </td>";
						echo"<td class=\"tg-031e\"> $StudentMarks / $TotalMarks </td>";
						echo"<td class=\"tg-031e\"> $PercentMarks % </td>";
						echo"</tr>";
						
					}
					
					
						
						
						
					
				}
			}	
			//No Students have been registered in this  class
			else{
			echo"No results, get your students to register so that they are in your class";
			echo"<br>";
			}
		}
	

?>
						</div>
								<div style="clear: both;">&nbsp;</div>
					</div>
					<!-- end #content -->
				</div>
			</div>
		</div>
		<!-- end #page -->
	</body>
</html>
<?php 
}else {
	// if user is not logged in show them this page
	header( 'location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
}

?>