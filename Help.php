<?php
session_start();
if (isset($_SESSION["username"])){
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
					//references  Student's menu to get navigation bar
					include_once "StudentMenu.php";
				}
				else{
					//references  Teacher's menu to get navigation bar
					include_once "TeacherMenu.php";
				}
				
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
							<div class="post">
								<h2 class="title"><a href="#">Help </a></h2>
						
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<p>
										To use this revision tool you must be a user.
										To be a user you need to click on the register button on the Home page.
										Once you are register use the navigation to move through the website.
										You can answer questions depending on the different topics and you can view your results by click results on the navigation.
										If you are a student you can only view your results whereas teacher can view all students results.  
									</p>
								</div>
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
//if user is not logged in show them this page
 ?>
<html>

	<head>
		<title>The Duston School Maths Revision Tool</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
							<div class="post">
								<h2 class="title"><a href="#">Help </a></h2>
						
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<p>
										To use this revision tool you must be a user.
										To be a user you need to click on the register button on the Home page.
										Once you are register use the navigation to move through the website.
										You can answer questions depending on the different topics and you can view your results by click results on the navigation.
										If you are a student you can only view your results whereas teacher can view all students results.  
									</p>
								</div>
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
<?php
}

?>

