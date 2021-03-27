<?php 
	require_once 'dbcontext.php';
	if ($_SERVER['REQUEST_METHOD']== "POST") {
		$name = $_POST['name'];
		$icon = $_POST['icon'];
		$link = $_POST['link'];
		if (!empty($name)&&!empty($icon)&&!empty($link)) {
			$name = ucwords($name);
			$link = strtolower($link);
			if (!strpos($link,"https://")) {
				$link = "https://".$link;
				$insert_sql = " INSERT INTO socials (name,icon,link) VALUES ('$name','$icon','$link') ";
				$query = mysqli_query($connection,$insert_sql);
				if ($query) {
					header("location: social.php");
				}
			}else{
				
				$insert_sql = " INSERT INTO socials (name,icon,link) VALUES ('$name','$icon','$link') ";
				$query = mysqli_query($connection,$insert_sql);
				if ($query) {
					header("location: social.php");
			}
			}
			
		}

	}else{
		header("location: social-add.php");
	}
 ?>