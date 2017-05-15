
<html>
<head>
<script>
function GenerateQuestion(){ 
	  var min =1;
	  var max =50;
	  var val1=0;
	  var val2=0;
      var side = document.getElementById("side");
	  
	  do {
	  val1 = Math.floor(Math.random()*(max-min+1)+min);
	  val2 = Math.floor(Math.random()*(max-min+1)+min);
	 } while(val1 == val2);

	 var value1 = document.createElement("INPUT");
     value1.type ="hidden";
	 value1.id="value1";
	 value1.name="val1";
	 value1.value = val1;
	 document.getElementById("form").appendChild(value1);
	 
	 var value2 = document.createElement("INPUT");
     value2.type = "hidden";
	 value2.id="value2";
	 value2.value = val2;
	 value2.name="val2";
	 document.getElementById("form").appendChild(value2);
	  if(side.value == "H"){
      var para = document.createElement("p");
	  var node3 = document.createTextNode("Find the Missing Side called  the Hypotenuse!");
     para.appendChild(node3);
     var node = document.createTextNode("The Opposite Side of the triangle has a lenght of :"+ document.getElementById("value1").value);
     para.appendChild(node);
	  var node2 = document.createTextNode("The Adjacent Side of the triangle has a lenght of :"+ document.getElementById("value2").value);
     para.appendChild(node2);
	 document.getElementById("form").appendChild(para);
	 var O = document.createElement("input");
	 O.placeholder ="a";
     O.name = "a";
	 O.type= "text";
	 O.id= "O";
	 document.getElementById("form").appendChild(O);
	 
	 var A = document.createElement("input");
	 A.placeholder ="b";
	 A.name = "b";
	 A.type= "text";
	 A.id= "A";
	 document.getElementById("form").appendChild(A);
	
     var O2 = document.createElement("input");
	 O2.placeholder ="a Squared";
     O2.name = "a2";
	 O2.type= "text";
	 O2.id= "O2";
	 document.getElementById("form").appendChild(O2);
	 
	 
	 var A2 = document.createElement("input");
	 A2.placeholder ="b Squared";
	 A2.name = "b2";
	 A2.type= "text";
	 A2.id= "A2";
	 document.getElementById("form").appendChild(A2);
	  
	  var H2 = document.createElement("input");
	       H2.placeholder ="c Squared";
		   H2.name = "c2";
	       H2.type= "text";
	       H2.id= "H2";
	       document.getElementById("form").appendChild(H2);
		   
	  var H  = document.createElement("input");
	       H.placeholder ="c";
		   H.name = "c";
	       H.type= "text";
	       H.id= "H";
	       document.getElementById("form").appendChild(H);

	
	} /** else if (side.value =="A"){
	   var value1 = document.createElement("INPUT");
     value1.setAttribute("type", "hidden");
	 value1.id="value1";
	 value1.name="val1";
	 value1.value = val1;
	var value2 = document.createElement("INPUT");
     value2.setAttribute("type", "hidden");
	 value2.id="value2";
	 value2.value = val2;
	 value2.name="val2";
	 if (value1.value > value2.value){
	 var temp = 0;
	 temp = value1.value ;
	 value1.value = value2.value;
	  value2.value = temp;
	 }
	 document.getElementById("form").appendChild(value1);
	 document.getElementById("form").appendChild(value2);
	  var para = document.createElement("p");
	  var node3 = document.createTextNode("Find the Missing Side called  the Adjacent!");
	 document.getElementById("form").appendChild(para);
     para.appendChild(node3);
     var node = document.createTextNode("The Opposite Side of the triangle has a lenght of :"+ document.getElementById("value1").value );
     para.appendChild(node);
	  var node2 = document.createTextNode("The Hypotenuse Side of the triangle has a lenght of :"+ document.getElementById("value2").value);
     para.appendChild(node2);
	      var O = document.createElement("input");
	       O.placeholder ="a";
           O.name = "a";
	       O.type= "text";
	       O.id= "O";
		    
	       document.getElementById("form").appendChild(O);
	      
		  
	      var H  = document.createElement("input");
	       H.placeholder ="c";
		   H.name = "c";
	       H.type= "text";
	       H.id= "H";
		   
	       document.getElementById("form").appendChild(H); 
		   var O2 = document.createElement("input");
	        O2.placeholder ="a Squared";
	        O2.name = "a2";
	        O2.type= "text";
	        O2.id= "O2";
	        document.getElementById("form").appendChild(O2);
		  
	      var H2 = document.createElement("input");
	       H2.placeholder ="c Squared";
		   H2.name = "c2";
	       H2.type= "text";
	       H2.id= "H2";
		   
	       document.getElementById("form").appendChild(H2);
		   
		   var A2 = document.createElement("input");
	        A2.placeholder ="b Squared";
	        A2.name = "b2";
	        A2.type= "text";
	        A2.id= "A2";
	        document.getElementById("form").appendChild(A2);
	    var A = document.createElement("input");
	        A.placeholder ="b";
	        A.name = "b";
	        A.type= "text";
	        A.id= "A";
	        document.getElementById("form").appendChild(A);
	  
	 
	     
	} else if (side.value =="O"){
		 var value1 = document.createElement("INPUT");
     value1.setAttribute("type", "hidden");
	 value1.id="value1";
	 value1.name="val1";
	 value1.value = val1;
	var value2 = document.createElement("INPUT");
     value2.setAttribute("type", "hidden");
	 value2.id="value2";
	 value2.value = val2;
	 value2.name="val2";
	 if (value1.value > value2.value){
	 var temp = 0;
	 temp = value1.value ;
	  value1.value = value2.value;
	  value2.value = temp;
	 }
	 document.getElementById("form").appendChild(value1);
	 document.getElementById("form").appendChild(value2);
	 
		 var para = document.createElement("p");
	     var node3 = document.createTextNode("Find the Missing Side called the Opposite!");
		  document.getElementById("form").appendChild(para);
         para.appendChild(node3);
         var node = document.createTextNode("The Adjacent Side of the triangle has a lenght of :" + document.getElementById("value1").value);
         para.appendChild(node);
	     var node2 = document.createTextNode("The Hypotenuse Side of the triangle has a lenght of :" + document.getElementById("value2").value);
         para.appendChild(node2);
	      var A = document.createElement("input");
	        A.placeholder ="b";
	        A.name = "b";
	        A.type= "text";
	        A.id= "A";
		

      		var H =  document.createElement("input");
	       H.placeholder ="c";
		   H.name = "c";
	       H.type= "text";
	       H.id= "H";
		   
	       document.getElementById("form").appendChild(H);
		   
	      var A2 = document.createElement("input");
	        A2.placeholder ="b Squared";
	        A2.name = "b2";
	        A2.type= "text";
	        A2.id= "A2";
	        document.getElementById("form").appendChild(A2);
		  
	      var H2 = document.createElement("input");
	       H2.placeholder ="c Squared";
		   H2.name = "c2";
	       H2.type= "text";
	       H2.id= "H2";
		   
	       document.getElementById("form").appendChild(H2);
     var O2 = document.createElement("input");
	 O2.placeholder ="a Squared";
     O2.name = "a2";
	 O2.type= "text";
	 O2.id= "O2";
	 document.getElementById("form").appendChild(O2);
	 var O = document.createElement("input");
	       O.placeholder ="a";
           O.name = "a";
	       O.type= "text";
	       O.id= "O";
	       document.getElementById("form").appendChild(O);

		  
		} **/
		
		document.getElementById("side").disabled =true;
		document.getElementById("button").disabled = true;
       	var button2 = document.createElement("input");
		button2.setattribute("type","button");
	
		button2.value="Enter Answer";
		button2.id ="button2";
		button2.classname="btn";
		
		document.getElementById("form").appendChild(button2);
	  }
	 

	
</script>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>The Duston School Maths Revision Tool</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
	.button{
  width:100px;
  background:#3399cc;
  display:block;
  margin:0 auto;
  margin-top:1%;
  padding:10px;
  text-align:center;
  text-decoration:none;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

.button:hover{
  background:#2288bb;
}

#login{
  width:400px;
  margin:0 auto;
  margin-top:8px;
  margin-bottom:2%;
  transition:opacity 1s;
  -webkit-transition:opacity 1s;
}


#login h1{
  background:#3399cc;
  padding:10px 0;
  font-size:140%;
  font-weight:300;
  text-align:center;
  color:#fff;
}

form{
  background:#f0f0f0;
  padding:6% 4%;
}

#inputs input, textarea, select {
  width:92%;
  background:#fff;
  margin-bottom:4%;
  border:1px solid #ccc;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:95%;
  color:#555;
}

#submit_btn{
  width:100%;
  background:#3399cc;
  border:0;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  color:#fff;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}
#input2 select{
  width:92%;
  background:#fff;
  margin-bottom:4%;
  border:1px solid #ccc;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:95%;
  color:#555;
}

#input[type="submit"]:hover{
  background:#2288bb;}
  
.inv2 {
	display: none;
	}
	</style>

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
<h1>Pythagoras</h1><br>


The Pythagoras Theorem
<p>

<tt>( a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup> )</tt>
<form method="post" action="PythagorasAnswer.php" name="aform" target="_top" id="form">
<p>Choose Which side of the Triangle is Missing?:</p>
<select id="side" name="Missingside" >
  <option value=""> Select...</option>
  <option value="A">Adjacent</option>
  <option value="O">Opposite</option>
  <option value="H">Hypotenuse</option>
</select>
 <input type="button" value="Confirm your Choice" id="button" onclick = "GenerateQuestion()"/>
   




</form>
 

		



			
	
	
</div>
				<!-- end #content -->
				<div id="sidebar">
				<img src="images/Triangle.jpg" width="500" height="250" alt="" />
	
	
  

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
