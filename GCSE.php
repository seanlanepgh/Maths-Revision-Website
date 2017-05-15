<?php
session_start();
if($_SESSION["role"]=="T"){
		//Prevents Teachers from accessing the page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
//if user is logged in show them this page
if (isset($_SESSION["username"])){

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
							<div class="post">
								<h2 class="title">GSCE </h2>
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<p>Welcome to GCSE, this revision tool covers one topic from GSCE ,the topic is Pythagoras.To go to these topic click on the button down below on this page or use the navigation bar.</p>
								</div>
							</div>
							
			
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<a href= "Pythagoras.php" class = "button" >Pythagoras</a>
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
	else {
		//if user is not logged in show them this page
		header( 'location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
?>