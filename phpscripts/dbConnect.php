<?php
	$Servername = "localhost";
	$Username = "slane";
	$Password = "secret1234";
	$Dbname = "slane";

	// Create connection
	$Connect = mysql_connect($Servername, $Username, $Password);
	$Error = @mysql_error();
	// Check connection
	if (!$Connect) {
		echo "Database connection failed: ".$Error;
	} 
	else {
		$Dbselected = mysql_select_db($Dbname, $Connect);
	}

?>
