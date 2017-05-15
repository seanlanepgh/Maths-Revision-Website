<?php
session_start();
if($_SESSION["role"]=="T"){
		//Prevents Teachers from accessing the page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}

if (isset($_SESSION["username"])){
	//if user is logged in show them this page


?>
<html>
	<head>
		<title>The Duston School Maths Revision Tool</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript">

			
		function RandomInt(Min,Max) { 
				var Number = Math.floor( Math.random() * (Max + 1 - Min) + Min );
				
				return Number;
			}





			
		function GenerateBubbleTable() {

			var Min = 2;
			var Max = 6;
			//Get Number of Passes hidden field to store number of passes value
			var NumOfPasses = document.getElementById("NumOfPasses");
			var NPasses = Math.floor( Math.random() * (Max + 1 - Min) + Min );
			NumOfPasses.value = NPasses;
			
			//Get elements by id to reference the form
			var Choice = document.getElementById("Choice");
			var Form = document.getElementById("form"); 
			var Button = document.getElementById("button");
			if(!Choice.value==""){ 
							
							if(Choice.value == "A"){
								// Creating and adding the Ascending Question text to the form   
								
								var Para = document.createElement("p");
								var Br = document.createElement("BR");
								var Node =document.createTextNode("For each row of the table ,is a pass in the bubble sort algorithm can you sort the list up to "+ NPasses +" passes?");
								var Node2 = document.createTextNode("You have to sort this list of variables in ascending order from left to right." );
								var Node3 = document.createTextNode("Enter Only Numbers!");
								
								Para.appendChild(Node);
								Para.appendChild(Br);
								Para.appendChild(Node2);
								Para.appendChild(Br);
								Para.appendChild(Node3);
								Form.appendChild(Para);
								
								//End of Creating and adding the Ascending Question text to the form
							} 
							else if(Choice.value =="D"){
							
								//Creating and adding the Descending Question text to the form 
									
								var Para = document.createElement("p");
								var Br = document.createElement("BR");
								var Node =document.createTextNode("For each row of the table ,is a pass in the bubble sort algorithm can you sort the list up to "+ NPasses +" passes?");
								var Node2 = document.createTextNode("You have to sort this list of variables in descending order from left to right." );
								var Node3 = document.createTextNode("Enter Only Numbers!");
								
								Para.appendChild(Node);
								Para.appendChild(Br);
								Para.appendChild(Node2);
								Para.appendChild(Br);
								Para.appendChild(Node3);
								Form.appendChild(Para);
								//End Creating and adding the Descending Question text to the form
								
							}
							
						
					 
					 
					  // creates a <table> element and a <tbody> element
					  var Table = document.createElement("table");
					  var TableBody = document.createElement("tbody");
								
								
					 
					  // creating  the first row of the table which says the position of the number in the list
					  for (var I = 0; I < 1; I++) {
							// creates a table header row
							var Row = document.createElement("tr");
					 
							for (var J = 1; J <= 6; J++) {
							  // Create a <td> element and a text node, make the text
							  // node the contents of the <td>, and put the <td> at
							  // the end of the table row
							  
							  
							  
							  
							  var Cell = document.createElement("td");
							  var CellText = document.createTextNode("This number  " + J +" in the List");
							  Cell.appendChild(CellText);
							  Row.appendChild(Cell);
							}
						
						}
						// End Creating  the first row of the table which says the position of the number in the list	
						
						// add the row to the end of the table body
						TableBody.appendChild(Row);
						
						//Creates list variable to store the Original List of numbers
						 var List = 0;
						for (var I = 0; I < 1; I++) {
							// creates a table header row
							var Row = document.createElement("tr");
						 
							for (var J = 1; J <= 6; J++) {
							  // Create a <td> element and a text node, make the text
							  // node the contents of the <td>, and put the <td> at
							  // the end of the table row
							  var Min = 1;
							  var Max = 200;
							  var Array = [6];
							 
							
							  
							  Array[J] = RandomInt(Min,Max);
							  //Creates a Concatenated list of the Original List
							   List = List + Array[J] + "," ;
							  
							  var Cell = document.createElement("td");
							  var CellText = document.createTextNode(Array[J]);
							  
							  
							  
							  Cell.appendChild(CellText);
							  Row.appendChild(Cell);
							}
							
						}
					   
						// add the row to the end of the table body
						TableBody.appendChild(Row);
						
					
						//Gets a Hidden Field by Id and stores the concatenated list of the Original List in the field
						var OriginalList = document.getElementById("OriginalList");
						OriginalList.value = List;
							  
						
						
						 //Creating rows for user input depending on the numbers of pivots
						for (var I = 1; I <= NPasses ; I++) {
							// creates a table header row
							var Row = document.createElement("tr");
					 
							for (var J = 1; J <= 6; J++) {
							  /** 
							Create a <td> element and a input field, make the input field 
							the contents of the <td>, and put the <td> at
							the end of the table row 
							**/
							  
							  var Cell = document.createElement("td");
							  var ListVal = document.createElement("input")
							  
							  var ListValId ="listval"+I+J;
							  var ListValName ="listval"+I+J;
							  ListVal.name = ListValName;
							  ListVal.type= "text";
							  
							  ListVal.maxLength = 3;
							  
							  ListVal.id = ListValId;
							  ListVal.className = "input";
										
							  
							  Cell.appendChild(ListVal);
							  Row.appendChild(Cell);
							}
							TableBody.appendChild(Row);
						}
						
					  // put the <tbody> in the <table>
					  Table.appendChild(TableBody);
					  // appends <table> into <body>
					  Form.appendChild(Table);
					  // sets the border attribute of tbl to 2;
					Table.setAttribute("border", "2");
					  
					 // Disabling the first button to prevent displaying more than one question.	
					  Button.disabled = true;
					  Button.className = "dsubmit_btn";
					  
					  var Br = document.createElement("BR");
					  Form.appendChild(Br);
					  
					  //Generates a new Button
					  var Button2 = document.createElement("input");
								Button2.type ="button";
								Button2.value="Enter Answer";
								Button2.id ="Enter";
								Button2.className = "submit_btn";
								Button2.onclick = function ConfBubbleSubmit(){
											//	Uses regular expression to check that all inputs are numbers
											var Input =/^[0-9]+$/;
											var Flag = true ;
											
											for (var I = 1; I <= NPasses; I++) {
												for (var J = 1; J <= 6; J++) {
													var TListId = "listval" + I + J;
													var ListVal = document.getElementById(TListId);
													//Check that all the user input is not empty before submitting
														if (ListVal.value ==""){
															Flag = false;
														} else if (!ListVal.value.match(Input)){
																Flag = false;
													
															}
															
												}
											}
											//Stores the User input into a hidden fields and submits the form based on the boolean variable				
											if(Flag) {
											
												for(var I = 1;I <= NPasses; I++){
													var UserList ="";
													for(var J =1; J <= 6; J++){ 
														var TListId = "listval"+ I + J;
														var Number = document.getElementById(TListId);
														//Get User input for each pass and stores it as a concatenated list of each pass
														UserList = UserList + Number.value +",";
													}
													//Stores it in the RowList hidden fields that are created
													var RowList = document.createElement("input");
													RowList.setAttribute("type", "hidden");
													RowList.name ="rowlist"+I;
													RowList.value = UserList;
																		  
													Form.appendChild(RowList);
												}
																	Form.action = "BubbleSortAnswer.php";
																	Form.submit();
											}
											else{
												// Display this alert if field are empty or have numbers in them
												alert("Complete all fields or Enter Numbers Only");
											}
						
						
										}
					 //Appends the new button
					 Form.appendChild(Button2);


				}
				else{ 
				// Displays this alert when the drop down select box is empty
				alert("Please Select Ascending or Descending");
				}

			}



					
			</script>



		</head>
	<body>
		
				<?php
					//references  Student's menu to get navigation bar
					include_once "StudentMenu.php";
				?>
			
				<!-- end #menu --> 
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
							<h1>Bubble Sort</h1>
							<form method="post"  name="aform" target="_top" id="form" >
								<p>Which Bubble sort question type do you want, Ascending or Descending ?</p>
								<select name="ChoiceForm" id="Choice">
								  <option value="">Select...</option>
								  <option value="A">Ascending</option>
								  <option value="D">Descending</option>
								 </select>
								<input type="button" value="Confirm your Choice of Question " id="button" class="submit_btn" onclick="GenerateBubbleTable()"> 
								<input type="hidden" value="" id="NumOfPasses" name="NumOfPasses"> 
								<input type="hidden" value="" id="OriginalList" name="OriginalList">
							</form>
						</div>
						<!-- end #content -->
						
						<div id="sidebar">
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
<?php }
else { // if user is not logged in show them this page
header( 'location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');}
?>