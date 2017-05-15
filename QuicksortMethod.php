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
							<h1>Quick Sort Methods</h1><br>
							<form target="_top" id="Form">
								<p>Ascending Quick Sort Method</p>
								<table border="1">
								<tr>
								<td>Number 1 in the list</td>
									 <td>Number 2 in the list</td> 
									<td>Number 3 in the list</td>
									<td>Number 4 in the list</td>
									<td>Number 5 in the list</td>
									<td>Number 6 in the list</td>
									<td>Number 7 in the list</td>
								   </tr>
								  <tr>
									<td>5</td>
									 <td>2</td> 
									<td>4</td>
									<td>3</td>
									<td>7</td>
									<td>10</td>
									<td>8</td>
								   </tr>
								</table>
								<p>
									To sort this list above in ascending order.
									Start at the Midpoint of of the list which is Number 4
									in the list.We will use this as a pivot.
								</p>
								 <p>
									 Reorder the list so that all the numbers in the list with
									 values less than the pivot come before the pivot, while all
									 numbers in the list  with values greater than the pivot come
									 after it (equal values can go either way).The pivot is in its
									 final position.
								 </p>
								 
								 <table border="1">
								 <tr>
								 <td>Number of Pivots</td>
								 <td>Number 1 in the list</td>
									 <td>Number 2 in the list</td> 
									<td>Number 3 in the list</td>
									<td>Number 4 in the list</td>
									<td>Number 5 in the list</td>
									<td>Number 6 in the list</td>
									<td>Number 7 in the list</td>
								   </tr>
								  <tr>
								  <td>Pivot 1</td>
									<td>2</td>
									 <td>3</td> 
									<td>5</td>
									<td>4</td>
									<td>7</td>
									<td>10</td>
									<td>8</td>
								   </tr>
								   </table>
								 <p>
									Now pick two pivots on each side of the first pivot in this example I have picked number 1 in the list and Number five in the list.
									Reorder the list against so that all the numbers in the list that are not a pivot with values less than the pivot come before
									the pivots, while all numbers in the list that are not  with values greater than the pivots
									come after it (equal values can go either way).Repeat this process again and again until all of the Numbers in the List are Pivots.
								</p>
								 <table border="1">
								 <tr>
								 <td>Number of Pivots</td>
								 <td>Number 1 in the list</td>
									 <td>Number 2 in the list</td> 
									<td>Number 3 in the list</td>
									<td>Number 4 in the list</td>
									<td>Number 5 in the list</td>
									<td>Number 6 in the list</td>
									<td>Number 7 in the list</td>
								   </tr>
								  <tr>
								  <td>1 Pivot</td>
									<td>2</td>
									 <td>3</td> 
									<td>5</td>
									<td>4</td>
									<td>7</td>
									<td>10</td>
									<td>8</td>
								   </tr>
									<tr>
								  <td>3 Pivots </td>
									<td>2</td>
									 <td>3</td> 
									<td>4</td>
									<td>5</td>
									<td>7</td>
									<td>10</td>
									<td>8</td>
									<tr>
								  <td>5 Pivots </td>
									<td>2</td>
									 <td>3</td> 
									<td>4</td>
									<td>5</td>
									<td>7</td>
									<td>8</td>
									<td>10</td>
								   </tr>
								  
								  
								   </table>
								<p>This List used 5 pivots to sort it.</p>

							</form>

							<form method="post" "  target="_top" id="form">
								<p>Descending QuickSort Method</p>
								<table border="1">
								<tr>
								<td>Number 1 in the list</td>
									 <td>Number 2 in the list</td> 
									<td>Number 3 in the list</td>
									<td>Number 4 in the list</td>
									<td>Number 5 in the list</td>
									<td>Number 6 in the list</td>
									<td>Number 7 in the list</td>
								   </tr>
								  <tr>
									<td>5</td>
									 <td>2</td> 
									<td>4</td>
									<td>3</td>
									<td>7</td>
									<td>10</td>
									<td>8</td>
								   </tr>
								</table>
								<p>
									To sort this list above in Descending order. 
									Start at the Midpoint of of the list which is Number 4
									in the list.We will use this as a pivot.
								</p>
									 Reorder the list so that all the numbers in the list with
									 values greater than the pivot come before the pivot, while all
									 numbers in the list  with values less than the pivot come
									 after it (equal values can go either way).The pivot is in its
									 final position.
								 </p>
								 
								 <table border="1">
								 <tr>
								 <td>Number of Pivots</td>
								 <td>Number 1 in the list</td>
									 <td>Number 2 in the list</td> 
									<td>Number 3 in the list</td>
									<td>Number 4 in the list</td>
									<td>Number 5 in the list</td>
									<td>Number 6 in the list</td>
									<td>Number 7 in the list</td>
								   </tr>
								  <tr>
								  <td>Pivot 1</td>
									<td>8</td>
									 <td>10</td> 
									<td>7</td>
									<td>4</td>
									<td>5</td>
									<td>3</td>
									<td>2</td>
								   </tr>
								   </table>
								 <p>
									Now pick two pivots on each side of the first pivot in this example I have picked number 7 in the list and Number five in the list.
									Reorder the list against so that all the numbers in the list that are not a pivot with values less than the pivot come before
									the pivots, while all numbers in the list that are not  with values greater than the pivots
									come after it (equal values can go either way).Repeat this process again and again until all of the Numbers in the List are Pivots.
								</p>
								 <table border="1">
								 <tr>
								 <td>Number of Pivots</td>
								 <td>Number 1 in the list</td>
									 <td>Number 2 in the list</td> 
									<td>Number 3 in the list</td>
									<td>Number 4 in the list</td>
									<td>Number 5 in the list</td>
									<td>Number 6 in the list</td>
									<td>Number 7 in the list</td>
								   </tr>
								  <tr>
								  <td>1 Pivot</td>
									<td>8</td>
									 <td>10</td> 
									<td>7</td>
									<td>4</td>
									<td>5</td>
									<td>3</td>
									<td>2</td>
								   </tr>
									<tr>
								  <td>3 Pivots </td>
									<td>8</td>
									 <td>10</td> 
									<td>7</td>
									<td>5</td>
									<td>4</td>
									<td>3</td>
									<td>2</td>
									<tr>
								  <td>5 Pivots </td>
									<td>10</td>
									 <td>8</td> 
									<td>7</td>
									<td>5</td>
									<td>4</td>
									<td>3</td>
									<td>2</td>
								   </tr>
								  
								  
								   </table>
								<p>This List used 5 pivots to sort it.</p>
							</form>

							 

									



										
								
								
						</div>
						<!-- end #content -->
						<div id="sidebar">
							<a href= "BubbleSort.php" class = "button" >Click here to try another Question</a></li>
							<a href= "Results.php" class = "button" >Click here to see your results table</a></li>
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