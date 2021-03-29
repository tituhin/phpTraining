<?php 
	require_once 'dbcontext.php';
	if ($_SERVER['REQUEST_METHOD']== "POST") {
		$name = $_POST['name'];
		$icon = $_POST['icon'];
		$link = $_POST['link'];
		if (!empty($name)&&!empty($icon)&&!empty($link)) {
			$name = ucwords($name);
			$link = strtolower($link);
			$contain_http = strpos($link,"https://");
			if ($contain_http!==0) { // https na thakle
				$link = "https://".$link;
				/*echo "in If<br>".$link; 
				die();*/
				$insert_sql = " INSERT INTO socials (name,icon,link) VALUES ('$name','$icon','$link') ";
				$query = mysqli_query($connection,$insert_sql);
				if ($query) {
					header("location: social.php");
				}
			}else{ // https  thakle
				// echo "in else<br>".$link;  die();
				$insert_sql = " INSERT INTO socials (name,icon,link) VALUES ('$name','$icon','$link') ";
				$query = mysqli_query($connection,$insert_sql);
				if ($query) {
					header("location: social.php");
			}
			}
		
			
		}else{
			$_SESSION['blank_field']= "Require all field! Please!";
			header("location: social-add.php");
		}

	}else{
		header("location: social-add.php");
	}
 ?>