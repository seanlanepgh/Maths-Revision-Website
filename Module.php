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
								<h2 class="title"><a href="#">Modules</a></h2>
								<p>
									These are the modules so far that Students can access, there would be more modules 
									that can be accessed later.The A-level Module is D1 which covers Quick Sort and Bubble Sort.
									The GCSE module only covers one topic which is Pythagoras as it is a experiment for GSCE students
									to use this revision tool. 
								</p>
								<a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" />
								
							</div>
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<a href= "D1.php" class = "button" >D1</a></li>
							<a href= "GSCE.php" class = "button" >GCSE</a></li>
						</div>
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
  
					
					
	