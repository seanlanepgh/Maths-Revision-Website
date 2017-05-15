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

		<script>
	function GeneratePythag(){ 
		  
		  var Min =1;
		  var Max =50;
		  var Val1=0;
		  var Val2=0;
		  var Form = document.getElementById("form");
		  var Button = document.getElementById("button");
		  //Get Missing Side from form by Id
		  var Side = document.getElementById("side");
		 //Checks if the Side value is not empty
		if(!Side.value ==""){ 
			//Generates Value 1 and Value2 and makes sure that Value 1 and Value 2 are not equal
		  do {
			  Val1 = Math.floor(Math.random()*(Max-Min+1)+Min);
			  Val2 = Math.floor(Math.random()*(Max-Min+1)+Min);
			} while(Value1 == Val2);
			//Checks if the Side value is the Hypotenuse side
		   if(Side.value == "H"){
				//Adds the Val1 and Val2 to hidden fields Value 1 and Value 2
				var Value1 = document.createElement("INPUT");
				Value1.type ="hidden";
				Value1.id="value1";
				Value1.name="val1";
				Value1.value = Val1;
				Form.appendChild(Value1);
			 
				var Value2 = document.createElement("INPUT");
				Value2.type = "hidden";
				Value2.id="value2";
				Value2.value = Val2;
				Value2.name="val2";
				Form.appendChild(Value2);
				
				 // Generates Text for the Hypotenuse Question and then appends it to the form
				 var Para = document.createElement("p");
				 var Node3 = document.createTextNode("Find the missing side called  the hypotenuse and round your answer to two decimals places.");
				 var Br = document.createElement("BR");
				 var Node = document.createTextNode("The Opposite Side of the triangle has a lenght of :" + document.getElementById("value1").value + ".");
				 var Node2 = document.createTextNode("The Adjacent Side of the triangle has a lenght of :" + document.getElementById("value2").value + ".");	
				 var Node4 = document.createTextNode("Enter Only Numbers!");
				 
				Para.appendChild(Node3);
				Para.appendChild(Br);
				Para.appendChild(Br);
				
				Para.appendChild(Node);
				Para.appendChild(Br);
				Para.appendChild(Node2);
				Para.appendChild(Br);
				Para.appendChild(Node4);
				Form.appendChild(Para);
				
				//Generates the  user input fields for the Opposite ,Opposite Squared ,Adjacent, Adjacent Squared ,Hypotenuse ,Hypotenuse Squared
			
				//Generates the Opposite Input Field
				var O = document.createElement("input");
				O.placeholder ="a";
				O.name = "a";
				O.type= "text";
				O.id= "O";
				O.className = "input";
				O.maxLength = 10;
				Form.appendChild(O);
				
			 
				//Generates the Adjacent Input Field
				var A = document.createElement("input");
				A.placeholder ="b";
				A.name = "b";
				A.type= "text";
				A.id= "A";
				A.className = "input";
				A.maxLength = 10;
				Form.appendChild(A);
				
				//Generates the Opposite Squared Input Field
				var O2 = document.createElement("input");
				O2.placeholder ="a Squared";
				O2.name = "a2";
				O2.type= "text";
				O2.id= "O2";
				O2.className = "input";
				O2.maxLength = 10;
				Form.appendChild(O2);
				 
				//Generates the Adjacent Squared Input Field
				var A2 = document.createElement("input");
				A2.placeholder ="b Squared";
				A2.name = "b2";
				A2.type= "text";
				A2.id= "A2";
				A2.className = "input";
				A2.maxLength = 10;
				Form.appendChild(A2);
				
				 //Generates the Hypotenuse Squared Input Field
				var H2 = document.createElement("input");
				H2.placeholder ="c Squared";
				H2.name = "c2";
				H2.type= "text";
				H2.id= "H2";
				H2.className = "input";
				H2.maxLength = 10;
				Form.appendChild(H2);
				
				//Generates the Hypotenuse Input Field	   
				var H  = document.createElement("input");
				H.placeholder ="c";
				H.name = "c";
				H.type= "text";
				H.id= "H";
				H.className = "input";
				H.maxLength = 10;
				Form.appendChild(H);

				//Disables the First Button which says Confirm your Choice
				Button.disabled = true;
				Button.className = "dsubmit_btn";
				
				//Creates New Button Enter Answer	
				var Button2 = document.createElement("input");
					Button2.type ="button";
					Button2.value="Enter Answer";
					Button2.className = "submit_btn";
					Button2.id ="button2";
					Button2.onclick = function ConfPythagSubmit(){
										
											//Gets input fields values by id 
											var A = document.getElementById("A");
											var O = document.getElementById("O");
											var H = document.getElementById("H");
											var A2 = document.getElementById("A2");
											var H2 = document.getElementById("H2");
											var O2 = document.getElementById("O2");
											
											//Uses Regular Expression to check  inputs fields are numbers only and decimal numbers only 
											var Input =/^[0-9]+$/;
											var Input2=/^[0-9]+(\.[0-9]+)+$/;
											
											var Flag = true;
											
											//Checks  all  the input fields that they should not be empty
											if (A.value == '' || O.value == ''|| H.value ==''||A2.value ==''||H2.value==''|| O2.value=='')
											{
												Flag = false;
												alert("Please complete all fields in the form.");
											} 
											// Checks the Opposite , Adjacent ,Adjacent Squared ,Hypotenuse Squared and Opposite Square are numbers only
											else if (!O.value.match(Input)||!A.value.match(Input)||!A2.value.match(Input)||!H2.value.match(Input)||!O2.value.match(Input)){
													Flag = false;
													alert("Enter Numbers Only");
												}
												//Checks the Hypotenuse is a decimal
												else if(!H.value.match(Input2)){
													Flag = false;
													alert("Enter a Decimal Number Only");
												}	
											//Submits the form based on the boolean variable called Flag	
											if(Flag){
												Form.submit();
											}
											
											
										}
					//Add Enter Answer button to form
					Form.appendChild(Button2);
			} 
			//Checks if the Side value is the Adjacent side
			else if (Side.value =="A"){
					
					//Makes sure that the Val2 is greater than the Val1
					if (Val1 > Val2){
						var Temp = 0;
						Temp = Val1;
						Val1 = Val2;
						Val2 = Temp;
					}
						//Adds the Val1 and Val2 to hidden fields Value 1 and Value 2
						var Value1 = document.createElement("INPUT");
						Value1.type ="hidden";
						Value1.id="value1";
						Value1.name="val1";
						Value1.value = Val1;
						Form.appendChild(Value1);
					 
						var Value2 = document.createElement("INPUT");
						Value2.type = "hidden";
						Value2.id="value2";
						Value2.value = Val2;
						Value2.name="val2";
						Form.appendChild(Value2);
					
					 // Generates Text for the Adjacent Question and then appends it to the form
					var Para = document.createElement("p");
					var Br = document.createElement("BR");
					var Node3 = document.createTextNode("Find the missing side called  the adjacent and round your answer to two decimals places.");
					
					var Node = document.createTextNode("The Opposite Side of the triangle has a lenght of :" + document.getElementById("value1").value + " ." );
					
					var Node2 = document.createTextNode("The Hypotenuse Side of the triangle has a lenght of :" + document.getElementById("value2").value + " .");
					var Node4 = document.createTextNode("Enter Only Numbers!");
					
					
					
					Para.appendChild(Node3);
					Para.appendChild(Node);
					Para.appendChild(Br);
					Para.appendChild(Node2);
					Para.appendChild(Br);
					Para.appendChild(Node4);
					Form.appendChild(Para);
					
					//Generates the  user input fields for the Opposite ,Opposite Squared ,Adjacent, Adjacent Squared ,Hypotenuse ,Hypotenuse Squared
					
					//Generates the Opposite Input Field
					var O = document.createElement("input");
					O.placeholder ="a";
					O.name = "a";
					O.type= "text";
					O.id= "O";
					O.className = "input";
					O.maxLength = 10;
					Form.appendChild(O);
				  
					//Generates the Hypotenuse Input Field	 
					var H  = document.createElement("input");
					H.placeholder ="c";
					H.name = "c";
					H.type= "text";
					H.id= "H";
					H.className = "input";
					H.maxLength = 10;
					Form.appendChild(H); 
					
					//Generates the Opposite Squared Input Field	
					var O2 = document.createElement("input");
					O2.placeholder ="a Squared";
					O2.name = "a2";
					O2.type= "text";
					O2.id= "O2";
					O2.className = "input";
					O2.maxLength = 10;
					Form.appendChild(O2);
				  
					//Generates the Hypotenuse Squared Input Field
					var H2 = document.createElement("input");
					H2.placeholder ="c Squared";
					H2.name = "c2";
					H2.type= "text";
					H2.id= "H2";
					H2.className = "input";
					H2.maxLength = 10;
					Form.appendChild(H2);
				   
					//Generates the Adjacent Squared Input Field
					var A2 = document.createElement("input");
					A2.placeholder ="b Squared";
					A2.name = "b2";
					A2.type= "text";
					A2.id= "A2";
					A2.className = "input";
					A2.maxLength = 10;
					Form.appendChild(A2);
					
					//Generates the Adjacent Input Field
					var A = document.createElement("input");
					A.placeholder ="b";
					A.name = "b";
					A.type= "text";
					A.id= "A";
					A.className = "input";
					A.maxLength = 10;
					Form.appendChild(A);
			  
					//Disables the First Button which says Confirm your Choice
					Button.disabled = true;
					Button.className = "dsubmit_btn";
					
					//Creates New Button Enter Answer	
					var Button2 = document.createElement("input");
					Button2.type ="button";
					Button2.value="Enter Answer";
					Button2.id ="button2";
					Button2.className = "submit_btn";
					Button2.onclick = function ConfPythagSubmit(){
					
											//Gets input fields values by id 
											var A = document.getElementById("A");
											var O = document.getElementById("O");
											var H = document.getElementById("H");
											var A2 = document.getElementById("A2");
											var H2 = document.getElementById("H2");
											var O2 = document.getElementById("O2");
											
											//Uses Regular Expression to check  inputs fields are numbers only and decimal numbers only 
											var Input =/^[0-9]+$/;
											var Input2=/^[0-9]+(\.[0-9]+)+$/;
											
											var Flag = true;
											//Checks  all  the input fields that they should not be empty
											if (A.value == '' || O.value == ''|| H.value ==''||A2.value ==''||H2.value==''|| O2.value=='')
											{
												Flag = false;
												alert("Please complete all fields in the form.");
											} 
											// Checks the Opposite , Hypotenuse ,Adjacent Squared ,Hypotenuse Squared and Opposite Square are numbers only
											else if (!O.value.match(Input)||!H.value.match(Input)||!A2.value.match(Input)||!H2.value.match(Input)||!O2.value.match(Input)){
													Flag = false;
													alert("Enter Numbers Only");
												}
												//Checks the Adjacent is a decimal
												else if(!A.value.match(Input2)){
													Flag = false;
													alert("Enter a Decimal Number Only");
												}	
											//Submits the form based on the boolean variable called Flag	
											if(Flag){
												Form.submit();
											}
											
											
										}
					//Add Enter Answer button to form					
					Form.appendChild(Button2);
				
				}  // Generates Text for the Opposite Question and then appends it to the form
				else if (Side.value =="O"){
						if (Val1 > Val2){
							var Temp = 0;
							Temp = Val1;
							Val1 = Val2;
							Val2 = Temp;
						}
						//Adds the Val1 and Val2 to hidden fields Value 1 and Value 2
						var Value1 = document.createElement("INPUT");
						Value1.type ="hidden";
						Value1.id="value1";
						Value1.name="val1";
						Value1.value = Val1;
						Form.appendChild(Value1);
					 
						var Value2 = document.createElement("INPUT");
						Value2.type = "hidden";
						Value2.id="value2";
						Value2.value = Val2;
						Value2.name="val2";
						Form.appendChild(Value2);
					
						//Generates the  user input fields for the Opposite ,Opposite Squared ,Adjacent, Adjacent Squared ,Hypotenuse ,Hypotenuse Squared
				 
						var Para = document.createElement("p");
						var Br = document.createElement("BR");
						var Node3 = document.createTextNode("Find the missing side called the opposite and round your answer to two decimals places.");
						var Node = document.createTextNode("The Adjacent Side of the triangle has a lenght of :" + document.getElementById("value1").value + " .");
						var Node2 = document.createTextNode("The Hypotenuse Side of the triangle has a lenght of :" + document.getElementById("value2").value +" .");
						var Node4 = document.createTextNode("Enter Only Numbers!");
				 
					   
						 
						Para.appendChild(Node3);
						Para.appendChild(Br);
						Para.appendChild(Node);
						Para.appendChild(Br);
						Para.appendChild(Node2);
						Para.appendChild(Br);
						Para.appendChild(Node4);
						Form.appendChild(Para);
						
						
						//Generates the Adjacent Input Field
						var A = document.createElement("input");
						A.placeholder ="b";
						A.name = "b";
						A.type= "text";
						A.id= "A";
						A.className = "input";
						A.maxLength = 10;
						Form.appendChild(A);
						
						//Generates the Hypotenuse Input Field	 
						var H =  document.createElement("input");
						H.placeholder ="c";
						H.name = "c";
						H.type= "text";
						H.id= "H";
						H.className = "input";
						H.maxLength = 10;
						Form.appendChild(H);
						
						//Generates the Adjacent Squared Input Field
						var A2 = document.createElement("input");
						A2.placeholder ="b Squared";
						A2.name = "b2";
						A2.type= "text";
						A2.id= "A2";
						A2.className = "input";
						A2.maxLength = 10;
						Form.appendChild(A2);
						
						//Generates the Hypotenuse Squared Input Field
						var H2 = document.createElement("input");
						H2.placeholder ="c Squared";
						H2.name = "c2";
						H2.type= "text";
						H2.id= "H2";
						H2.className = "input";
						H2.maxLength = 10;
						document.getElementById("form").appendChild(H2);
			
						//Generates the Opposite Squared Input Field
						var O2 = document.createElement("input");
						O2.placeholder ="a Squared";
						O2.name = "a2";
						O2.type= "text";
						O2.id= "O2";
						O2.className = "input";
						O2.maxLength = 10;
						Form.appendChild(O2);
						
						//Generates the Opposite Input Field	
						var O = document.createElement("input");
						O.placeholder ="a";
						O.name = "a";
						O.type= "text";
						O.id= "O";
						O.className = "input";
						O.maxLength = 10;
						Form.appendChild(O);

						//Disables the First Button which says Confirm your Choice
						Button.disabled = true;
						Button.className = "dsubmit_btn";
							
						//Creates New Button Enter Answer	
						var Button2 = document.createElement("input");
							Button2.type ="button";
							Button2.value="Enter Answer";
							Button2.id ="enter";
							Button2.className = "submit_btn";
							Button2.onclick = function ConfPythagSubmit(){
							
													//Gets input fields values by id 
													var A = document.getElementById("A");
													var O = document.getElementById("O");
													var H = document.getElementById("H");
													var A2 = document.getElementById("A2");
													var H2 = document.getElementById("H2");
													var O2 = document.getElementById("O2");
													
													//Uses Regular Expression to check  inputs fields are numbers only and decimal numbers only 
													var Input =/^[0-9]+$/;
													var Input2=/^[0-9]+(\.[0-9]+)+$/;
													
													var Flag = true;
													//Checks  all  the input fields that they should not be empty
													if (A.value == '' || O.value == ''|| H.value ==''||A2.value ==''||H2.value==''|| O2.value=='')
													{
														Flag = false;
														alert("Please complete all fields in the form.");
													} 
													// Checks the Adjacent , Hypotenuse ,Adjacent Squared ,Hypotenuse Squared and Opposite Square are numbers only
													else if (!H.value.match(Input)||!A.value.match(Input)||!A2.value.match(Input)||!H2.value.match(Input)||!O2.value.match(Input)){
															Flag = false;
															alert("Enter Numbers Only");
														}
														//Checks the Opposite is a decimal
														else if(!O.value.match(Input2)){
															Flag = false;
															alert("Enter a Decimal Number Only");
														}	
													//Submits the form based on the boolean variable called Flag
													if(Flag){
														Form.submit();
													}
													
													
												}
						//Add Enter Answer button to form
						Form.appendChild(Button2);
					} 
						 

						
						
		}
		else{
		//Display this alert if no missing side is selected
		 alert("Select a Missing Side!");
		}
	}


		</script>

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


							The Pythagoras Theorem

							<tt>( a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> )</tt>
							<form method="post" action="PythagorasAnswer.php" name="aform" target="_top" id="form">
								<p>Choose Which side of the Triangle is Missing?:</p>
								<select id="side" name="Missingside" >
								  <option value=""> Select...</option>
								  <option value="A">Adjacent</option>
								  <option value="O">Opposite</option>
								  <option value="H">Hypotenuse</option>
								</select>
								<input type="button" value="Confirm your Choice" id="button" class="submit_btn" onclick = "GeneratePythag()"/>
							</form>
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<img src="images/Triangle.jpg" width="500" height="250" alt="" />
							<a href= "PythagorasMethod.php" class = "button" >Click here for help on your Question </a></li>
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

?>