
<?php 
	$connection = mysqli_connect("localhost","root","","base");	
	
	// here localhost is server, root is the username, "" Password of username, base is database name. 
	
	if (!$connection) {
		die("Error: ".mysqli_connect_error());
	}
	
 ?>