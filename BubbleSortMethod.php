<?php
session_start();
if($_SESSION["role"]=="T"){
		//Prevents Teachers from accessing the page
		header('location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');
	}
if(!isset($_SESSION["username"])) {
//if user is not logged in show them this page
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
						<h1>BubbleSort Methods</h1><br>
						<form method="post" "  target="_top" id="form">
						<p>Ascending BubbleSort Method</p>
						<table border="1">
						<tr>
						<td>Number 1 in the list</td>
							 <td>Number 2 in the list</td> 
							<td>Number 3 in the list</td>
							<td>Number 4 in the list</td>
							<td>Number 5 in the list</td>
							<td>Number 6 in the list</td>
						   </tr>
						  <tr>
							<td>5</td>
							 <td>2</td> 
							<td>4</td>
							<td>10</td>
							<td>5</td>
							<td>3</td>
						   </tr>
						</table>
						<p>
							To sort this list above in ascending order. 
							Start at the first number of the list and compare with the second number
							if the first number is greater than the second number then swap them around. 
							Keep going thorough  the list and compare and swap until you reach the sixth 
							number.Below, would be one pass of the list. 
						</p>
						 <table border="1">
						 <tr>
						 <td>Passes</td>
						 <td>Number 1 in the list</td>
							 <td>Number 2 in the list</td> 
							<td>Number 3 in the list</td>
							<td>Number 4 in the list</td>
							<td>Number 5 in the list</td>
							<td>Number 6 in the list</td>
						   </tr>
						  <tr>
						  <td>Pass 1</td>
							<td>2</td>
							 <td>4</td> 
							<td>5</td>
							<td>5</td>
							<td>3</td>
							<td>10</td>
						   </tr>
						   </table>
						 <p>Repeat going thorough the list until no swaps are made.</p>
						 
						 <table border="1">
						 <tr>
						 <td>Passes</td>
						 <td>Number 1 in the list</td>
							 <td>Number 2 in the list</td> 
							<td>Number 3 in the list</td>
							<td>Number 4 in the list</td>
							<td>Number 5 in the list</td>
							<td>Number 6 in the list</td>
						   </tr>
						  <tr>
						  <td>Pass 2</td>
							<td>2</td>
							 <td>4</td> 
							<td>5</td>
							<td>3</td>
							<td>5</td>
							<td>10</td>
							</td>
						  <tr>
						   <td>Pass 3</td>
							<td>2</td>
							 <td>4</td> 
							<td>3</td>
							<td>5</td>
							<td>5</td>
							<td>10</td>
						   </td>
							 <tr>
						   <td>Pass 4</td>
							<td>2</td>
							 <td>3</td> 
							<td>4</td>
							<td>5</td>
							<td>5</td>
							<td>10</td>
						   </td>
						   </table>
						 <p>The list took four passes to sort the list into ascending order. </p>

						</form>

						<form method="post" "  target="_top" id="form">
						<p>Descending BubbleSort Method</p>
						<table border="1">
						<tr>
						<td>Number 1 in the list</td>
							 <td>Number 2 in the list</td> 
							<td>Number 3 in the list</td>
							<td>Number 4 in the list</td>
							<td>Number 5 in the list</td>
							<td>Number 6 in the list</td>
						   </tr>
						  <tr>
							<td>5</td>
							 <td>2</td> 
							<td>4</td>
							<td>10</td>
							<td>5</td>
							<td>3</td>
						   </tr>
						</table>
						<p>
							To sort this list above in descending order. 
							Start at the first number of the list and compare with the second number if the first number 
							is lesser than the second number then swap them around.
							Keep going thorough  the list and compare and swap until you reach the sixth number.Below,
							would be one pass of the list. 
						</p>
						 <table border="1">
						 <tr>
						 <td>Passes</td>
						 <td>Number 1 in the list</td>
							 <td>Number 2 in the list</td> 
							<td>Number 3 in the list</td>
							<td>Number 4 in the list</td>
							<td>Number 5 in the list</td>
							<td>Number 6 in the list</td>
						   </tr>
						  <tr>
						  <td>Pass 1</td>
							<td>5</td>
							 <td>4</td> 
							<td>10</td>
							<td>5</td>
							<td>3</td>
							<td>2</td>
						   </tr>
						   </table>
						 <p>Repeat going thorough the list until no swaps are made.</p>
						 
						 <table border="1">
						 <tr>
						 <td>Passes</td>
						 <td>Number 1 in the list</td>
							 <td>Number 2 in the list</td> 
							<td>Number 3 in the list</td>
							<td>Number 4 in the list</td>
							<td>Number 5 in the list</td>
							<td>Number 6 in the list</td>
						   </tr>
						  <tr>
						  <td>Pass 2</td>
							<td>5</td>
							 <td>10</td> 
							<td>5</td>
							<td>4</td>
							<td>3</td>
							<td>2</td>
							</td>
						  <tr>
						   <td>Pass 3</td>
							<td>10</td>
							 <td>5</td> 
							<td>5</td>
							<td>4</td>
							<td>3</td>
							<td>2</td>
						   </td>
							
						   </table>
						 <p>The list took three passes to sort the list into descending order. </p>

						</form>
					</div>
					<!-- end #content -->
					<div id="sidebar">
						<a href= "BubbleSort.php" class = "button" >Click here to try another Question</a></li>
						
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
 

?>