<?php
session_start();
if($_SESSION["role"]=="T"){
		//Prevents Teachers from accessing the page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
if (isset($_SESSION["username"])){

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

		
		
	function GenerateQuickTable() {
	  
	  
	  // get the references from the form
	  var NumOfPasses = document.getElementById("NumofPasses");
	  
	
	  var Button =  document.getElementById("button");
	  var Form = document.getElementById("form"); 
	  var Choice = document.getElementById("Choice");
	  
	   
	if(Choice.value!=""){ 
				NPasses =1;
					if(Choice.value == "A"){
				// Creating and adding the Ascending Question text to the form   
				
				var Para = document.createElement("p");
				var Br = document.createElement("BR");
				var Node =document.createTextNode("For each row of the table ,is a pass in the quick sort algorithm can you sort the list up to "+ NPasses +" pass?");
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
					var Node =document.createTextNode("For each row of the table ,is a pass in the quick sort algorithm can you sort the list up to "+ NPasses +" pass?");
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
			 
					for (var J = 1; J <= 7; J++) {
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
				 
					for (var J = 1; J <= 7; J++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					  var Min = 1;
					  var Max = 200;
					  var Array = [7];
					 
					
					  
					  Array[J] = RandomInt(Min,Max);
					  List = List + Array[J] + "," ;
					  
					  var Cell = document.createElement("td");
					  var CellText = document.createTextNode(Array[J]);
					  
					  
					  
					  Cell.appendChild(CellText);
					  Row.appendChild(Cell);
					}
					
				}
				var Min = 0;
				var Max = 6;
				List = List.substring(0, List.length - 1);
				alert("Orignal"+ List);
				Clist = List.split(",");
				
				
				NumOfPasses.value = NPasses;
				// add the row to the end of the table body
				TableBody.appendChild(Row);
				
			
				//Gets a Hidden Field by Id and stores the list in the field
				var OriginalList = document.getElementById("OriginalList");
				OriginalList.value = List;
					  
				
				
				 //Creating rows for user input depending on the numbers of pivots
				for (var I = 1; I <= NPasses; I++) {
					// creates a table header row
					var Row = document.createElement("tr");
			 
					for (var J = 1; J <= 7; J++) {
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
						Button2.onclick = function ConfQuickSubmit(){
									var Input =/^[0-9]+$/;
									var Flag = true ;
									//Checks that all the user input are numbers
									for (var I = 1; I <=NPasses ; I++) {
										for (var J = 1; J <= 7; J++) {
											var TListId = "listval" + I + J;
											var ListVal = document.getElementById(TListId);
												if (ListVal.value ==""){
													Flag = false;
												} else if (!ListVal.value.match(Input)){
														Flag = false;
										
													}
										}
									}
													
									if(Flag) {
										//Check that all the user input is not empty before submiting
										for(var I = 1;I <= NPasses; I++){
											var UserList ="";
											for(var J =1; J <= 7; J++){ 
												var ListId = "listval"+ I + J;
												var Number = document.getElementById(ListId);
												UserList = UserList + Number.value +",";
											}
											var RowList = document.createElement("input");
											RowList.setAttribute("type", "hidden");
											RowList.name ="rowlist"+I;
											alert(UserList);
											RowList.value = UserList;
																  
											Form.appendChild(RowList);
										}
															Form.action = "QuickSortAnswer.php";
															Form.submit();
									}
									else{
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
							<h1>Quick Sort</h1>
							<form method="post"  name="aform" target="_top" id="form" >
								<p>Which Quick sort question type do you want, Ascending or Descending ?</p>
								<select name="ChoiceForm" id="Choice">
								  <option value="">Select...</option>
								  <option value="A">Ascending</option>
								  <option value="D">Descending</option>
								 </select>
								<input type="button" value="Confirm your Choice of Question " id="button" class="submit_btn" onclick='GenerateQuickTable()'> 
								<input type="hidden" value="" id="NumofPasses" name="NumofPasses"> 
								<input type="hidden" value="" id="OriginalList" name="OriginalList">
							</form>
						</div>
						<!-- end #content -->
						
						<div id="sidebar">
						<a href= "QuicksortMethod.php" class = "button" >Click here help for on your Question Method</a>
						</div>
						<!-- end #sidebar -->
						
						
					</div>
				</div>
			
			</div>
		<!-- end #page -->

	</body>
</html>
<?php }
else {header( 'location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');}
?>