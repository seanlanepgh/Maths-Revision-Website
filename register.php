<html>
	<head> 
		<title>The Duston School Maths Revision Tool</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		
		<script type="text/javascript">
		function ConfSubmit()
		{ 
			var Username = document.getElementById("Username");
			var Password = document.getElementById("Password");
			var Role = document.getElementById("Role");
			var Form = document.getElementById("form");
			var U = Username.value;
			var P = Password.value;
			var Flag = true;
			//Checks that the Username ,Password and Role Fields are not empty
			if (Username.value == '' || Password.value == ''|| Role.value ==''){
				Flag = false;
				alert("Please complete all fields in the form.");
			} 
			//Checks that the Username is not less than 6 characters and that it is not greater than 16 characters
			else if(U.length > 16 || U.length < 6 ){
					Flag = false;
					alert("Username should not be longer than 16 characters or shorter than 6 characters");
			} 
			//Checks that the Password is not less than 6 characters and that it is not greater than 16 characters
			else if (P.length > 16 || P.length < 6  ){
				   Flag = false;
				   alert("Password should not be longer than 16 characters or shorter than 6 characters");
			}
			//Submits the form based on the boolean variable called Flag		
			if(Flag == true)
			{
				
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
						<h2 class="title"><a href="#">Welcome to the Registration Process </a></h2>
						<div class="entry">
							<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
							<p>
								To register for an account ,please enter the correct information in the account form. 
								You need to create a User name and password and then select your role as student or teacher.  
							</p>
						</div>
						
						<div id="login">
		  
							<h1>Register an Account</h1>
							<form method="post" action="register2.php" name="aform" target="_top" id="form">
								<fieldset id="inputs" border="none">
									<input type="text"  id ="Username" name="Username" placeholder="Username" /> 
									<input type="Password"  id ="Password" name="Password" placeholder="password" />
									<select name="Role" id ="Role">
									  <option value="">Select Role ...</option>
									  <option value="S">Student</option>
									  <option value="T">Teacher</option>
									</select>
								</fieldset>

								<input type="button" value="Register" id="submit_btn" class="submit_btn"  onClick = 'javascript: ConfSubmit();'/>


							</form>
						</div>
					</div>
					<!-- end #content -->
				</div>
			</div>
		</div>
	<!-- end #page --> 

	</body>
</html>