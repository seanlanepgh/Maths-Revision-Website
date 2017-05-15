<?php
session_start();
if (isset($_SESSION["username"])){

 ?>

<html>
<head>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>The Duston School Maths Revision Tool</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
function randomInt(xmin,xmax) { 

	return Math.floor( Math.random() * (xmax + 1 - xmin) + xmin ); 
	}
	function descendingbubbleSort(array)
			{
			var temp;
				for(var i=0; i<=5; i++) 
				{
					for (var j=0; j <= 4; j++) {
						if (array[j] < array[j+1]) {
							temp = array[j];
							array[j] = array[j+1];
							array[j+1] = temp;
						}
					}
				}
			 }
			
	function AscendingbubbleSort(array)
			{
			var temp;
				for(var i=0; i<=5; i++) 
				{
					for (var j=0; j <= 4; j++) {
						if (array[j] > array[j+1]) {
							temp = array[j];
							array[j] = array[j+1];
							array[j+1] = temp;
						}
					}
				}
			 }
	
function GenerateBinQuestion() {

	var Type = document.getElementById("BinPackaging");
	if (!Type.value == ""){
	 var OriginalList = document.getElementById("OriginalList");
	 var xmin = 10;
	 var xmax = 100;
	 var array = [6];
	 var BinSize = document.getElementById("BinSize");
	 BinSize = randomInt(xmin,xmax);
	 var para = document.createElement("p");
	 var br = document.createElement("BR");
     var node = document.createTextNode("The Bin Size is "+ BinSize +".");
	 para.appendChild(node);
	   if(Type.value == "A"){
				
				var node2 = document.createTextNode("You have to sort this Ascending Sorted list of variables into Bins using First Fit Bin Packaging.To Select Multiple numbers for each bin press ctrl and then click your numbers." );
				para.appendChild(br);
						
						para.appendChild(br);
						para.appendChild(node2);
						document.getElementById("form").appendChild(para);	
					
			  // get the reference for the form
			  var form = document.getElementById("form")
			 
			  // creates a <table> element and a <tbody> element
			  var tbl = document.createElement("table");
			  var tblBody = document.createElement("tbody");
						
						
					for (var j = 0; j <= 5; j++) {
					  
					  var xmin = 1;
					  var xmax = BinSize;
					  
					  array[j] = randomInt(xmin,xmax);
					}
					BinSize.value = BinSize;
  				
			
	
	
             AscendingbubbleSort(array);

					
			 
			  // creating all cells
			  for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
			 
					for (var j = 1; j <=6 ; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					   var cell = document.createElement("td");
					  var cellText = document.createTextNode("This number  " + j +" in the List");
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
				
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				tbl.appendChild(tblBody);
				 var list = 0;
				for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
				 
					for (var j = 0; j <= 5; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					  var xmin = 1;
					  var xmax = BinSize.value;
					 
					 
					
					  
					  
					   list = list + array[j] + "," ;
					  
					  var cell = document.createElement("td");
					  var cellText = document.createTextNode(array[j]);
					  
					  
					  
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
					
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				
			
					  
					 
						OriginalList.value = list;
					  
			  // put the <tbody> in the <table>
			  tbl.appendChild(tblBody);
			  // appends <table> into <body>
			  form.appendChild(tbl);
			  // sets the border attribute of tbl to 2;
			  tbl.setAttribute("border", "2");
			  
			  document.getElementById("button").disabled = true;
			  document.getElementById("button").className = "dsubmit_btn";
			  
			  var br = document.createElement("BR");
			  form.appendChild(br);
			 
		} else if (Type.value =="D"){
				  var node2 = document.createTextNode("You have to sort this Descending Sorted list of variables into Bins using First Fit Bin Packaging.To Select Multiple numbers for each bin press ctrl and then click your numbers." );
		para.appendChild(br);
						para.appendChild(node);
						para.appendChild(br);
						para.appendChild(node2);
						document.getElementById("form").appendChild(para);	
					
			  // get the reference for the form
			  var form = document.getElementById("form")
			 
			  // creates a <table> element and a <tbody> element
			  var tbl = document.createElement("table");
			  var tblBody = document.createElement("tbody");
						
						
					for (var j = 0; j <= 5; j++) {
					  
					  var xmin = 1;
					  var xmax = BinSize;
					  
					  array[j] = randomInt(xmin,xmax);
					}
					BinSize.value = BinSize;
  				
			
   
	
	
descendingbubbleSort(array);

					
			 
			  // creating all cells
			  for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
			 
					for (var j = 1; j <=6 ; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					   var cell = document.createElement("td");
					  var cellText = document.createTextNode("This number  " + j +" in the List");
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
				
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				tbl.appendChild(tblBody);
				 var list = 0;
				for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
				 
					for (var j = 0; j <= 5; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					  var xmin = 1;
					  var xmax = BinSize.value;
					 
					 
					
					  
					  
					   list = list + array[j] + "," ;
					  
					  var cell = document.createElement("td");
					  var cellText = document.createTextNode(array[j]);
					  
					  
					  
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
					
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				
			
					  
					 
						OriginalList.value = list;
					  
			  // put the <tbody> in the <table>
			  tbl.appendChild(tblBody);
			  // appends <table> into <body>
			  form.appendChild(tbl);
			  // sets the border attribute of tbl to 2;
			  tbl.setAttribute("border", "2");
			  
			  document.getElementById("button").disabled = true;
			  document.getElementById("button").className = "dsubmit_btn";
			  
			  var br = document.createElement("BR");
			  form.appendChild(br);
		}
		 else if(Type.value =="C"){
		        BinSize = randomInt(xmin,xmax);
				var para = document.createElement("p");
						var br = document.createElement("BR");
						var node =document.createTextNode("The Bin Size is"+BinSize+".");
						var node2 = document.createTextNode("You have to sort this Unsorted list of variables into Bins using First Fit Bin Packaging." );
						var form = document.getElementById("form");
						
			            para.appendChild(br);
						para.appendChild(node);
						para.appendChild(br);
						para.appendChild(node2);
						document.getElementById("form").appendChild(para);	
			  // creates a <table> element and a <tbody> element
			  var tbl = document.createElement("table");
			  var tblBody = document.createElement("tbody");
						
						
					for (var j = 0; j <= 5; j++) {
					  
					  var xmin = 1;
					  var xmax = BinSize;
					  
					  array[j] = randomInt(xmin,xmax);
					}
					BinSize.value = BinSize;
  
			 
			  // creating all cells
			  for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
			 
					for (var j = 1; j <=6 ; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					   var cell = document.createElement("td");
					  var cellText = document.createTextNode("This number  " + j +" in the List");
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
				
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				tbl.appendChild(tblBody);
				 var list = 0;
				for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
				 
					for (var j = 0; j <= 5; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					  var xmin = 1;
					  var xmax = BinSize.value;
					 
					 
					
					  
					  
					   list = list + array[j] + "," ;
					  
					  var cell = document.createElement("td");
					  var cellText = document.createTextNode(array[j]);
					  
					  
					  
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
					
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				
			
					  
					 
			  OriginalList.value = list;
					  
			  // put the <tbody> in the <table>
			  tbl.appendChild(tblBody);
			  // appends <table> into <body>
			  form.appendChild(tbl);
			  // sets the border attribute of tbl to 2;
			  tbl.setAttribute("border", "2");
			  
			  document.getElementById("button").disabled = true;
			  document.getElementById("button").className = "dsubmit_btn";
			  
			  var br = document.createElement("BR");
			  form.appendChild(br);
						
		 }else if(Type.value =="F"){
		 
				BinSize = randomInt(xmin,xmax);
				var para = document.createElement("p");
						var br = document.createElement("BR");
						var node =document.createTextNode("The Bin Size is"+BinSize+".");
						var node2 = document.createTextNode("You have to sort this Unsorted list of variables into Bins using First Fit Bin Packaging." );
						var form = document.getElementById("form");
						
			            para.appendChild(br);
						para.appendChild(node);
						para.appendChild(br);
						para.appendChild(node2);
						document.getElementById("form").appendChild(para);	
			  // creates a <table> element and a <tbody> element
			  var tbl = document.createElement("table");
			  var tblBody = document.createElement("tbody");
						
						
					for (var j = 0; j <= 5; j++) {
					  
					  var xmin = 1;
					  var xmax = BinSize;
					  
					  array[j] = randomInt(xmin,xmax);
					}
					BinSize.value = BinSize;
  
			 
			  // creating all cells
			  for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
			 
					for (var j = 1; j <=6 ; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					   var cell = document.createElement("td");
					  var cellText = document.createTextNode("This number  " + j +" in the List");
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
				
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				tbl.appendChild(tblBody);
				 var list = 0;
				for (var i = 0; i < 1; i++) {
					// creates a table header row
					var row = document.createElement("tr");
				 
					for (var j = 0; j <= 5; j++) {
					  // Create a <td> element and a text node, make the text
					  // node the contents of the <td>, and put the <td> at
					  // the end of the table row
					  var xmin = 1;
					  var xmax = BinSize.value;
					 
					 
					
					  
					  
					   list = list + array[j] + "," ;
					  
					  var cell = document.createElement("td");
					  var cellText = document.createTextNode(array[j]);
					  
					  
					  
					  cell.appendChild(cellText);
					  row.appendChild(cell);
					}
					
				}
			   
				// add the row to the end of the table body
				tblBody.appendChild(row);
				
			
					  
					 
			  OriginalList.value = list;
					  
			  // put the <tbody> in the <table>
			  tbl.appendChild(tblBody);
			  // appends <table> into <body>
			  form.appendChild(tbl);
			  // sets the border attribute of tbl to 2;
			  tbl.setAttribute("border", "2");
			  
			  document.getElementById("button").disabled = true;
			  document.getElementById("button").className = "dsubmit_btn";
			  
			  var br = document.createElement("BR");
			  form.appendChild(br);
			 
		 }
		  
		  //Creating Bin 1
		  var para2 = document.createElement("p");
          var node3 =document.createTextNode("Bin 1");
		  para2.appendChild(node3);
		  form.appendChild(para2);
		 var Bin1 =document.createElement("SELECT");
			     Bin1.name ="Bin1";
				 Bin1.id ="Bin1";
				 Bin1.multiple =true;
				 
			for (var j = 0; j <= 5; j++) {
					  var Option = document.createElement("OPTION");
					  Option.text = array[j];
					  Option.value= array[j];
					 Bin1.appendChild(Option);
					}
				//appended Bin 1	
			 form.appendChild(Bin1);
			 
			 //Creating Bin 2
			 var para3 = document.createElement("p");
			 var node4 =document.createTextNode("Bin 2");
			     para3.appendChild(node4);
				 form.appendChild(para3);
			 
			 var Bin2 =document.createElement("SELECT");
			     Bin2.name ="Bin2";
				 Bin2.id ="Bin2";
				 Bin2.multiple =true;
				
				 
			for (var j = 0; j <= 5; j++) {
					  var Option = document.createElement("OPTION");
					  Option.text = array[j];
					  Option.value= array[j];
					 Bin2.appendChild(Option);
					}
			  //appending Bin2
			 form.appendChild(Bin2);
			 //creating Bin 3
			 var para4 = document.createElement("p");
			 var node5 =document.createTextNode("Bin 3");
			     para4.appendChild(node5);
				 form.appendChild(para4);
			 
			 var Bin3 =document.createElement("SELECT");
			     Bin3.name ="Bin3";
				 Bin3.id ="Bin3";
				 Bin3.multiple =true;
				 
				 
			for (var j = 0; j <= 5; j++) {
					  var Option = document.createElement("OPTION");
					  Option.text = array[j];
					  Option.value= array[j];
					 Bin3.appendChild(Option);
					}
			 //appending Bin 3
			 form.appendChild(Bin3);
			 // creating Bin 4
			 var para5 = document.createElement("p");
			 var node6 =document.createTextNode("Bin 4");
			     para5.appendChild(node6);
				 form.appendChild(para5);
			 
			 var Bin4 =document.createElement("SELECT");
			     Bin4.name ="Bin4";
				 Bin4.id ="Bin4";
				 Bin4.multiple =true;
				
				 
			for (var j = 0; j <= 5; j++) {
					  var Option = document.createElement("OPTION");
					  Option.text = array[j];
					  Option.value= array[j];
					 Bin4.appendChild(Option);
					}
			  //appending Bin 4
			  form.appendChild(Bin4);
			  // creating Bin 5
			 var para6 = document.createElement("p");
			 var node7 =document.createTextNode("Bin 5");
			     para6.appendChild(node7);
				 form.appendChild(para6);
			 
			 var Bin5 =document.createElement("SELECT");
			     Bin5.name ="Bin5";
				 Bin5.id ="Bin5";
				 Bin5.multiple =true;
				
				 
			for (var j = 0; j <= 5; j++) {
					  var Option = document.createElement("OPTION");
					  Option.text = array[j];
					  Option.value= array[j];
					 Bin5.appendChild(Option);
					}
			  //appending Bin 5
			  form.appendChild(Bin5);
			  // creating Bin 6
			 var para7 = document.createElement("p");
			 var node8 =document.createTextNode("Bin 6");
			     para7.appendChild(node8);
				 form.appendChild(para7);
			 
			 var Bin6 =document.createElement("SELECT");
			     Bin6.name ="Bin6";
				 Bin6.id ="Bin6";
				 Bin6.multiple =true;
				
				 
			for (var j = 0; j <= 5; j++) {
					  var Option = document.createElement("OPTION");
					  Option.text = array[j];
					  Option.value= array[j];
					 Bin6.appendChild(Option);
					}
			  //appending Bin 5
			  form.appendChild(Bin6);
			 
		 			  var button2 = document.createElement("input");
						button2.type ="button";
						button2.value="Enter Answer";
						button2.id ="Enter";
						button2.className = "submit_btn";
						button2.onclick = function confSubmit(){
						
						
						var NumofSelected =0;
						
						
						var Bin1Select =document.getElementById("Bin1");
						
						var Bin1Option = Bin1Select.options;
						
					    var Bin2Select =document.getElementById("Bin2");
						var Bin2Option = Bin2Select.options;
						
						var Bin3Select =document.getElementById("Bin3");
						var Bin3Option = Bin3Select.options;
						var Bin4Select =document.getElementById("Bin4");
						var Bin4Option = Bin4Select.options;
						var Bin5Select =document.getElementById("Bin5");
						var Bin5Option = Bin5Select.options;
						var Bin6Select =document.getElementById("Bin6");
						var Bin6Option = Bin6Select.options;
						
						var Bin1List = document.getElementById("Bin1List");
						var Bin2List = document.getElementById("Bin2List");
						var Bin3List = document.getElementById("Bin3List");
						var Bin4List = document.getElementById("Bin4List");
						var Bin5List = document.getElementById("Bin5List");
						var Bin6List = document.getElementById("Bin6List");
					
						
						

  // See if any other option is selected, start from second
  for (var i=1, OLen=Bin1Option.length; i<OLen; i++) {

    if (Bin1Option[i].selected == true) {
     NumofSelected = NumofSelected +1;
    }
	if (Bin2Option[i].selected == true) {
     NumofSelected = NumofSelected +1;
    }
	if (Bin3Option[i].selected == true) {
     NumofSelected = NumofSelected +1;
    }if (Bin4Option[i].selected == true) {
     NumofSelected = NumofSelected +1;
    }if (Bin5Option[i].selected == true) {
     NumofSelected = NumofSelected +1;
    }
	if (Bin6Option[i].selected == true) {
     NumofSelected = NumofSelected +1;
    }
  }

alert(NumofSelected);
if(NumofSelected ==6){
for (var i=1, OLen=Bin1Option.length; i<OLen; i++) {
if (Bin1Option[i].selected == true) {
    Bin1List = Bin1List + Bin1Option[i].value +",";
    }
	
	if (Bin2Option[i].selected == true) {
    Bin2List = Bin2List + Bin2Option[i].value +",";
    }
	if (Bin3Option[i].selected == true) {
     Bin3List = Bin3List + Bin3Option[i].value +",";
    }if (Bin4Option[i].selected == true) {
     Bin4List = Bin4List + Bin4Option[i].value +",";
    }if (Bin5Option[i].selected == true) {
    Bin5List = Bin5List + Bin5Option[i].value +"," ;
    }
	if (Bin6Option[i].selected == true) {
     Bin6List = Bin6List + Bin6Option[i].value +",";
    }
  }


document.getElementById("form").action = "BinPackagingAnswer.php";
document.getElementById("form").submit();
}
else if(NumofSelected <6){
    alert("Please put all 6 numbers into bins.");
	}else if (NumofSelected >6){
	alert("Please make sure you only have selected a total of 6 numbers for all the bins.");
}	
	
}
						
	                    form.appendChild(button2);
	}else{
	alert("Please Select a type of Bin Packaging")
	}
 }
</script>
</head>

<body>
<div id="menu-wrapper">
	
	<div id="menu">
	
		<?php
		     include_once "menu.php";
		?>
	</div>
	<!-- end #menu --> 
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
				<form method="post"  name="aform" target="_top" id="form" >
			     <p>What type of Bin Packaging Question would you like</p>
				 <select id="BinPackaging" name="BinPackagingType">
				  <option value=""> Select type ...</option>
				  <option value="A">First Fit Ascending</option>
				  <option value="D">First Fit Descending</option>
				  
				  <option value="F">First Fit Unsorted</option>
				</select>
			<input type="button" value="Confirm your Choice" id="button" class="submit_btn" onclick = "GenerateBinQuestion()"/>
            <input type="hidden" value="" id="BinSize" name="BinSize">
            <input type="hidden" value="" id="OriginalList" name="OriginalList">
			<input type="hidden" value="" id="Bin1List" name="Bin1List">
			<input type="hidden" value="" id="Bin2List" name="Bin2List">
			<input type="hidden" value="" id="Bin3List" name="Bin3List">
			<input type="hidden" value="" id="Bin4List" name="Bin4List">
			<input type="hidden" value="" id="Bin5List" name="Bin5List">
			<input type="hidden" value="" id="Bin6List" name="Bin6List">
			</form>
				</div>
				<!-- end #content -->
				<div id="sidebar">
				
	
	
  

                </div>

  
					
					
							
				
				<!-- end #sidebar -->
				
				<div id="sidebar2">
					
				</div>
				
		</div>
	</div>
	<!-- end #page --> 
</div>

<!-- end #footer -->
</body>
</html>
<?php }
else {header( 'location:http://10.15.17.195/student/seanlane/ComputingProjectWebsite/Home.php');}
?>