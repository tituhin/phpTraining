<?php 
	require_once 'dbcontext.php';
	if ($_SERVER['REQUEST_METHOD']== "POST") {
		$name = $_POST['name'];
		$icon = $_POST['icon'];
		$summery = $_POST['summery'];
		if (!empty($name)&&!empty($icon)&&!empty($summery)) {
			$name = ucwords($name);
				$insert_sql = " INSERT INTO services (name,icon,summery) VALUES ('$name','$icon','$summery') ";
				$query = mysqli_query($connection,$insert_sql);
				if ($query) {
					header("location: service.php");				
				}
			}
			
		}else{
		header("location: social-add.php");
	}
 ?>