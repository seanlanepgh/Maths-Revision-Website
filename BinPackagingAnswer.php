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
				<?php 
				$PBin1 = substr($_POST["Bin1List"], 0, strlen($_POST["Bin1List"])-1);
$PBin2 = substr($_POST["Bin2List"], 0, strlen($_POST["Bin2List"])-1);
$PBin3 = substr($_POST["Bin3List"], 0, strlen($_POST["Bin3List"])-1);
$PBin4 = substr($_POST["Bin4List"], 0, strlen($_POST["Bin4List"])-1);
$PBin5 = substr($_POST["Bin5List"], 0, strlen($_POST["Bin5List"])-1);
$PBin6 = substr($_POST["Bin6List"], 0, strlen($_POST["Bin6List"])-1);


$BinSize = $_POST["BinSize"];
$UBin1 = explode(",",$PBin1);
$UBin2 = explode(",",$PBin2);
$UBin3 = explode(",",$PBin3);
$UBin4 = explode(",",$PBin4);
$UBin5 = explode(",",$PBin5);
$UBin6 = explode(",",$PBin6);
print_r($UBin1);

$Bin1 = 0 ;
$Bin2 =0;
$Bin3 = 0;
$Bin4 = 0;
$Bin5 = 0;
$Bin6 =0;


$origList = substr($_POST["OriginalList"], 0, strlen($_POST["OriginalList"])-1);
$OriginalList = explode(",",$origList);
$i=0;
for($i=0; $i <=1;$i++){

for($j=0;$j<= 5;$j++){

if($Bin1 <= $BinSize){

$Bin1= $Bin1 + $OriginalList[$j];
}
}


}
Echo "$Bin1";
print_r($OriginalList);

				?>
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