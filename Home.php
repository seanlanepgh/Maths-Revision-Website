<?php
session_start();
if (!isset($_SESSION["username"])){
	// if user is not logged in show them this page
	
 ?>
<html>
	<head>
		<title>The Duston School Maths Revision Tool</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<script>
		function ConfSubmit(){ 
			var Username = document.getElementById("Username");
			var Password = document.getElementById("Password");
			var Form = document.getElementById("form");
			var U = Username.value;
			var P = Password.value;
			var Flag = true;
			//Checks that the Username ,Password and Role Fields are not empty
			if (Username.value == '' || Password.value == ''){
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
			if(Flag == true){
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
							<div class="post">
								<h2 class="title"><a href="#">Welcome to The Duston School Revision Tool </a></h2>
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<p>
										This is <strong>The Duston School's Maths Revision Tool </strong>, a free revision tool for
										students and Teachers.The Student can use this tool to a couple of key topics in GSCE and A-level
										and get feedback from answering our randomly generated questions.The Teachers can use the revision tool
										to track the students progress on these topics by viewing the students results from the randomly generated
										questions. 
									</p>
								</div>
							</div>
							<div class="post">
								<h2 class="title"><a href="#">Login</a></h2>
								<div class="entry">
									<p><a href="#"><img src="images/img02.jpg" width="500" height="75" alt="" /></a></p>
									<p>
										To Login to The Duston School Revision Maths Revision use your User name
										and Password if you have already registered as a Student or as a Teacher.
										If you don't have an account then you can
										<strong><a href="register.php"> click here to register </a></strong> or the click to register button.  
									</p>
								</div>
							</div>
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<div id="login">
								<h1>Log in</h1>
								<form method="post" action="Checklogin.php" name="aform" target="_top" id="form">
									<input type="text" name="username" placeholder="Username" Class="input" id="Username" />
									<input type ="password" name="password" placeholder="Password"Class="input" id="Password" />
									<input type="button" value="Login" class="submit_btn" onclick = "javascript:ConfSubmit();" />
								</form>
								<h1><a href="register.php"><h1>Click Here to Register<h1></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- end #page --> 
	</body>
</html>
<?php 
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
		<!-- end #header -->
		<div id="wrapper"> 
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">

						<div id="content">
							<div class="post">
								<h2 class="title"><a href="#">Welcome <?php Echo $_SESSION["username"]?>, The Duston School Revision Tool </a></h2>
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<p>
										This is <strong>The Duston School's Maths Revision Tool </strong>, a free revision tool
										for students and Teachers.The Student can use this tool to a couple of key topics in GSCE and A-level
										and get feedback from answering our randomly generated questions.The Teachers can use the revision tool
										to track the students progress on these topics by viewing the students results from the randomly generated
										questions. 
									</p>
								</div>
							</div>
						</div>
						<!-- end #content -->
					</div>
				</div>
			</div>
			<!-- end #page --> 
		</div>
	</body>
</html>
<?php }?>