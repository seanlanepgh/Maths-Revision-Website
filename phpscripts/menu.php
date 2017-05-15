<?php
//if user is logged in display this menu
if (isset($_SESSION ["username"])){ ?>
<div id="menu-wrapper">

   <div id="menu">
<ul>
 <li><div class ="current_page_item"> <a href="Home.php">Home</a><div></li>
<?php

?>
 <li> <a href="Module.php">Modules</a>
	<ul>
	<li><a href="D1.php">D1</a>
				  <ul>
					<li><a href="BubbleSort.php">BubbleSort</a></li>
					
					<li><a href= "Quicksort.php">QuickSort</a></li>
				  </ul>
	<li><a href="GCSE.php">GSCE</a>
       <ul>
	    <li><a href="Pythagoras.php">Pythagoras</a></li>
       </ul>
    </ul>
			<li><a href="Results.php">Results</a></li><li>
			<a href="Contact.php">Contact</a></li><li>
			<a href="Help.php">Help</a></li><li>
			<a href="LogOut.php">Log Out</a></li>
</ul>
    </div>
</div>

<?php
 }
 else{ 
 // if user not logged in display this menu
 ?>
 <div id="menu-wrapper">

   <div id="menu">
<ul>
   <li><div class ="current_page_item"> <a href="Home.php">Home</a></div></li>
   <li><a href="Contact.php">Contact</a></li><li>
   <a href="Help.php">Help</a></li><li>
</ul>
</div>
</div>
<?php
 }

?> 
			

