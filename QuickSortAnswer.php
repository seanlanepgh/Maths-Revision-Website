<?php
session_start();
if($_SESSION["role"]=="T"){
		//Prevents Teachers from accessing the page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
if(!isset($_SESSION["username"])) {
	 header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	} 
	else {
	
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
									<h1>QuickSort Answers</h1><br>

									<?php
									include_once "phpScripts\dbConnect.php";
								
								function  AscendingQuickSort($Arr, $Left, $Right, $Passes) {
									   
									   $I = $Left;
									   $J = $Right;
									   
									   //Create Pivot Index
									   $PivotIndex = floor(($Left + $Right)/2); 
									   
									   //Select Pivot From Pivot Index
									   $Pivot = $Arr[$PivotIndex];
									 
									   /* partition */
									   while ($I <= $J) {
											 while ($Arr[$I] < $Pivot){
												   $I++;
												}
											 while ($Arr[$J] > $Pivot){
												   $J--;
												}
											/* Swap Elements Values */
											 if ($I <= $J) {
												   $Temp = $Arr[$I];
												   $Arr[$I] = $Arr[$J];
												   $Arr[$J] = $Temp;
												   $I++;
												   $J--;
												}
										 
										}
											//Gets the answer for each this pass
											$FAnswerList = $Arr;
							
										  /* recursion */
										  if ($Left < $J){

												AscendingQuickSort($Arr, $Left, $J,++$Passes);
											}
										  if ($I < $Right){

												AscendingQuickSort($Arr, $I, $Right,++$Passes);
											}
										return $FAnswerList;

									}
									function  DescendingQuickSort($Arr, $Left, $Right, $Passes) {
									   $I = $Left;
									   $J = $Right;
									   
									   //Create Pivot Index
									   $PivotIndex = floor(($Left + $Right)/2); 
									   
									   //Select Pivot From Pivot Index
									   $Pivot = $Arr[$PivotIndex];
									 
									  /* partition */
									  while ($I <= $J) {
											 while ($Arr[$I] > $Pivot){
												   $I++;
												}
											 while ($Arr[$J] < $Pivot){
												   $J--;
												}
											/* Swap Elements Values */	
											 if ($I <= $J) {
												   $Temp = $Arr[$I];
												   $Arr[$I] = $Arr[$J];
												   $Arr[$J] = $Temp;
												   $I++;
												   $J--;
											 }
										 
										}

										$FAnswerList = $Arr;
							
									  /* recursion */
									  if ($Left < $J){

											DescendingQuickSort($Arr, $Left, $J,++$Passes);
										}
									  if ($I < $Right){

											DescendingQuickSort($Arr, $I, $Right,++$Psses);
										}
										return $FAnswerList;

									}
									
										

									//Gets values from previous form on the bubble sort page
									$Choice = $_POST["ChoiceForm"];
									
									//Gets the Original List out of the concatenated list for the Original List
									$OrigList = $_POST["OriginalList"];
									$OriginalList = explode(",",$OrigList);
								
									//Gets values from previous form on the quick sort page
									$NumOfPasses = $_POST["NumofPasses"];
									
									$Marks= 0;
									$CorrectorIncorrectAnswer ="Incorrect";
									
									//Gets the User inputs of each pass from the rowlist hidden fields  and get it of the concatenated list for each pass to check

									$UAnswer = substr($_POST["rowlist1"], 0, strlen($_POST["rowlist1"])-1);
									$URowAnswerList = $UAnswer;
									$URow= $UAnswer;
									
                                    
									//Check if Choice is Ascending 
								if ($Choice =="A") {

									$AnswerList = AscendingQuickSort($OriginalList,0,6,1);
									//$AnswerList is an array of the concatenated list for each pass for the Original List 
									
									// Removes the concatenated list so you can compare each pass and stores it in another variable
									$AnswerNew="";
										for ( $J = 0; $J <= 6; $J++) {
								  
										  //Creates a Concatenated list of the Original List
										   $AnswerNew = $AnswerNew.$AnswerList[$J]. "," ;
										   
										}
									$AnswerNew = substr($AnswerNew, 0,strlen($AnswerNew) -1);
									

								}
								else if($Choice =="D"){

									$AnswerList = DescendingQuickSort($OriginalList,0,6,1);
									//$AnswerList is an array of the concatenated list for each pass for the Original List 
									
									// Removes the concatenated list so you can compare each pass and stores it in another variable
									$AnswerNew="";
										for ( $J = 0; $J <= 6; $J++) {
								  
										  //Creates a Concatenated list of the Original List
										   $AnswerNew = $AnswerNew.$AnswerList[$J]. "," ;
										   
										}
									$AnswerNew = substr($AnswerNew, 0,strlen($AnswerNew) -1);
								 

								}
								
								

								//Compares the correct answer with the users answer for each pass
								
									
									if ($AnswerNew == $URow){
										//if correct display this
										?>
										<p> On pass 1 you got it correct.</p>
										
										<?php $Marks= $Marks + 1;
									}
										else{
											//if incorrect display this
											?>
											<p> On pass 1 you got it wrong the Correct Answer was <?php echo $AnswerNew;?>.</p>

											<?php
										}
								
								

								 //Check if you got full marks
								 if ($Marks == $NumOfPasses){ 
									$CorrectorIncorrectAnswer = "Correct";
								 
								 }
								 else {
									$CorrectorIncorrectAnswer= "Incorrect";
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
									$Id = mysql_result($StudentId, 0);
									
									//Inserts the results from the question into the bubble sort table in the database 
									$QuickSortQuery = "INSERT INTO `quicksortresults`(`QuickSortResultsID`,`StudentID`,`QuickSortType`,`AnswerList`,`UserAnswerList`,`NumOfPasses`,`Marks`,`CorrectOrIncorrectAnswer`) VALUES (NULL,'$Id','$Choice','$AnswerNew','$URow',$NumOfPasses,'$Marks','$CorrectorIncorrectAnswer')";
									$Result = mysql_query($QuickSortQuery,$Connect);

									mysql_close($Connect);
										







														
									?>



									 

											



												
					
					
								</div>
								<!-- end #content -->
								<div id="sidebar">
									<a href= "QuickSort.php" class = "button" >Click here to try another Question</a>
									<a href= "Results.php" class = "button" >Click here to see your results table</a>
									<a href= "QuicksortMethod.php" class = "button" >Click here help for on your Question Method</a>
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

  