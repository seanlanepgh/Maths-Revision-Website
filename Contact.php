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
								<h2 class="title">Contact Us</h2>
								
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<ul>
									<li>Address:The Duston School Berrywood Road Duston Northamptonshire England </li>
									<li>PostCode: NN5 6XA </li>  
									<li>Telephone Number: (01604) 460004</li>
									<li>Fax Number: (01604) 454005 </li>
									<li>Email Address: office@thedustonschool.org </li>
									</ul>
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
				<?php
				//references menu to get naviagation bar
					 include_once "menu.php";
				?>
				

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
								<h2 class="title">Contact Us</h2>
								
								<div class="entry">
									<p><a href="#" class="image-shadow"><img src="images/img01.jpg" width="500" height="75" alt="" /></a></p>
									<ul>
									<li>Address:The Duston School Berrywood Road Duston Northamptonshire England </li>
									<li>PostCode: NN5 6XA </li>  
									<li>Telephone Number: (01604) 460004</li>
									<li>Fax Number: (01604) 454005 </li>
									<li>Email Address: office@thedustonschool.org </li>
									</ul>
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


