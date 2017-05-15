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
		<title>The Duston School Maths Revision Tool</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
		
		<div id="wrapper"> 
			<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">
						<div id="content">
							<h1>Pythagoras Methods</h1><br>




							<form method="post"  name="aform" target="_top" id="form">
								<p>Finding The Hypotenuse Method</p>
								The Pythagoras Theorem
								<tt>( a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> )</tt>
								<p>
									You are given the opposite and the adjacent side which are a and b in the formula
									In this example the opposite has a length of 9, so that a = 9.
									In this example the adjacent has a length of 5, so  that b = 5.
									The next step is to Square a,so that a<sup>2</sup> = 81.
									The next step is to Square b,so that b<sup>2</sup> = 25.
									After you have squared both sides a and b you would need to add them both together ,so that c<sup>2</sup>= 106.</p>
									To get c we would have to squared root c<sup>2</sup> , so that c = 10.295.
									We should round our answers to two decimal places ,so that c = 10.30.
								</p>
							</form>
							<br>
							<form method="post"  name= "aform" target="_top" id="form">
								<p>Finding The Opposite Method</p>
								The Pythagoras Theorem
								<tt>( a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> )</tt>
								<p>
									You need to Rearrange the Pythagoras Theorem <tt>( a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> )</tt>,so 
									that <tt>( a<sup>2</sup> = c<sup>2</sup> - b<sup>2</sup>)</tt>.
									You are given the Hypotenuse and the adjacent side which are c and b in the formula.
									In this example the Hypotenuse has a length of 10, so that c = 10.
									In this example the adjacent has a length of 5, so  that b = 5.
									The next step is to Square c,so that c<sup>2</sup> = 100. 
									The next step is to Square b,so that b<sup>2</sup> = 25. 
									After you have squared both sides c and b you would need to subtract b<sup>2</sup> from c<sup>2</sup> ,so that a<sup>2</sup>= 75.
									To get a we would have to squared root a<sup>2</sup> , so that a = 8.66.
									We should round our answers to two decimal places ,so that a = 8.70 .
								</p>
							</form>
							 <br>
							<form method="post"  name= "aform" target="_top" id="form">
								<p>Finding The Adjacent Method</p>
								The Pythagoras Theorem
								<tt>( a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> )</tt>
								<p>
									You need to Rearrange the Pythagoras Theorem <tt>( a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> )</tt>,so 
									that <tt>( b<sup>2</sup> = c<sup>2</sup> - a<sup>2</sup>)</tt>.
									You are given the hypotenuse and opposite the at side which are c and a in the formula.
									In this example the hypotenuse has a length of 12, so that c = 12.
									In this example the adjacent has a length of 4, so  that a = 4.
									The next step is to Square c,so that c<sup>2</sup> = 144. 
									The next step is to Square a,so that a<sup>2</sup> = 16.
									After you have squared both sides c and a you would need to subtract a<sup>2</sup> from c<sup>2</sup> ,so that b<sup>2</sup>= 128.
									To get b we would have to squared root b<sup>2</sup> , so that b = 11.31 .
									We should round our answers to two decimal places ,so that a = 11.3 .
								</p>
							</form>
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<img src="images/Triangle.jpg" width="500" height="250" alt="" />
							<a href= "Pythagoras.php" class = "button" >Click here to try another Question</a>
						</div>
					</div>
					
				</div>  
			</div>
		</div>
		<!-- end #page --> 
	</body>
</html>
<?php }	
?>	