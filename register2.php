
<?php
if (isset($_POST["Username"])){
//if user is logged in show them this page
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Role = $_POST["Role"];
?>

<html>
	<head>

		<title>The Duston School Maths Revision Tool</title>

		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript">
		function ConfSubmitStudent()
		{
			
			var Firstname = document.getElementById("Firstname");
			var Surname = document.getElementById("Surname");
			var Year = document.getElementById("Year");
			var Classes = document.getElementById("Class");
			var Form = document.getElementById("form");
			var Flag = true;
			
			var F = Firstname.value;
			var S = Surname.value;
			var Y = Year.value;
			var C = Classes.value;
			//Checks that the Firstname,Surname ,Year and Class fields  are not empty
			if (F == '' || S == ''|| Y ==''||C ==''){
				Flag = false;
				alert("Please complete all fields in the form.");
			} 
				//Checks that the Firstname is not greater than 32 characters
				else if(F.length >32){
				
					Flag = false;
					alert("Firstname should not be longer than 32 characters");
				} 
				//Checks that the Surname is not greater than 32 characters
				else if(S.length > 32){
					Flag = false;
					alert("Surname should not be longer than 32 characters");
				}
				//Checks that the Year is not greater than 2 characters
				else if(Y.length > 2){
					Flag = false;
					alert("Year should not be longer than 2 characters");
				}
				//Checks that the Class is not greater than 4 characters
				else if(C.length > 4){
					Flag = false;
					alert("Class should not be longer than 4 characters");
				}
			//Submits the form based on the boolean variable called Flag
			if(Flag){
				Form.submit();
			}
			
			
		}
		function ConfSubmitTeacher(){
			var Firstname = document.getElementById("Firstname");
			var Surname = document.getElementById("Surname");
			var Classes = document.getElementById("Class");
			var Form = document.getElementById("form2");
			var Flag = true;
			
			var F = Firstname.value;
			var S = Surname.value;
			var C = Classes.value;
			
			//Checks that the Firstname ,Surname and Class Fields  are not empty
			if (F == '' || S == ''||C ==''){
				Flag = false;
				alert("Please complete all fields in the form.");
			} 
				//Checks that the Firstname is not greater than 32 characters
				else if(F.length > 32){
					Flag = false;
					alert("Firstname should not be longer than 32 characters");
				} 
				//Checks that the Surname is not greater than 32 characters
				else if(S.length > 32){
					Flag = false;
					alert("Surname should not be longer than 32 characters");
				}
				//Checks that the Class is not greater than 4 characters
				else if(C.length > 4){
					Flag = false;
					alert("Class should not be longer than 4 characters");
				}
			//Submits the form based on the boolean variable called Flag
			if(Flag){
				Form.submit();
			}
			
			
		}
		 
		 
		 
		</script>

	</head>
	<body>
		<div id="menu-wrapper">
			<div id="menu">
				<ul>
					<li class ="current_page_item"> <a href="Home.php">Home</a></li>
					<li><a href="Contact.php">Contact</a></li>
					<li><a href="Help.php">Help</a></li>
				</ul>
			</div>
		</div>
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
							<h2 class="title"><a href="#">Welcome  <?php echo"$Username";?> to the Registration Process </a></h2>
								<div style="clear: both;">&nbsp;</div>
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<p>
										To register for  an account ,please enter the correct information in the account form. 
										If you are a student enter your Firstname ,Surname , year group and your class.
										If you are a teacher enter your Firstname , Surname and your class.
									</p>
								</div>
							<div id="login">
									<h1>Register an Account</h1>
									<?php if($_POST["Role"] == "S"){ 
									//If user is a student show them student registeration form
									?>
								 
									<form method="post" action="RegisterPersonalDetails.php" name="aform" target="_top" id="form">
										<fieldset id="inputs" border="none">
											<input type="hidden"  id ="Username" name="Username" value =<?php echo"$Username";?> />
											<input type="hidden"  id ="Password" name="Password" value =<?php echo"$Password";?> />
											<input type="hidden"  id ="Role" name="Role" value =<?php echo"$Role";?> />
											<input type="text"  id ="Firstname" name = "Firstname" placeholder="Firstname" />
											<input type="text"  id ="Surname" name = "Surname" placeholder="Surname" />
											<input type="text"  id ="Year" name = "Year" placeholder="Year" />
											<input type="text"  id ="Class" name = "Class" placeholder="Class" />

										</fieldset>
										<input type="button" value="Register Personal Details" class="submit_btn" onClick ='javascript: ConfSubmitStudent();'/>
									</form>
								  <?php 	} elseif ($_POST["Role"] == "T"){
													//If users is a teacher show them teacher registeration form
								  ?>
								 
									<form method="post" action="RegisterPersonalDetails.php" name="aform2" target="_top" id="form2">
										<fieldset id="inputs" border="none">
											<input type="hidden"  id ="Username" name="Username" value =<?php echo"$Username";?> />
											<input type="hidden"  id ="Password" name="Password" value =<?php echo"$Password";?> />
											<input type="hidden"  id ="Role" name="Role" value =<?php echo"$Role";?> />
											<input type="text"  id ="Firstname" name = "Firstname" placeholder ="Firstname" />
											<input type="text"  id ="Surname" name = "Surname" placeholder ="Surname" />
											<input type="text"  id ="Class" name = "Class" placeholder="Class" />
										</fieldset>
										<input type="button" value="Register Personal Details" class="submit_btn" onClick ='javascript: ConfSubmitTeacher();'/>
									</form>
								 <?php 			} ?>
							</div>
						</div>
						<!-- end #content -->
					</div>  
				</div>
			</div>
		</div>
		<!-- end #page --> 
	</body>
</html>
<?php }
 else{
	 // if user is not logged in show them this page
	 header( 'location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/register.php');
 }
 ?>