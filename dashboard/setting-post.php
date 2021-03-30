<?php  
	require_once "dbcontext.php";	require_once "session.php";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$tagline = $_POST['tagline'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$office_address = $_POST['office_address'];
		$copyright = $_POST['copyright'];
		$about= mysqli_real_escape_string($connection,$_POST['about']);
		$logo = $_FILES['logo'];

		## INSERT BLOCK HERE
		if ($_POST['submit'] == 'add') { 
			## INSERT CODE HERE
			if ( !strlen($tagline)<3 &&  !strlen($email)<3 &&  !strlen($phone)<3 &&  !strlen($office_address)<3 && !strlen($copyright)<3 && !strlen($about)<3 ) {
				$insert_sql = "INSERT INTO `settings` (tagline,email,phone,office_address,copyright,about) VALUES ('$tagline','$email',$phone,'$office_address','$copyright','$about') ";
				$insert_query = mysqli_query($connection,$insert_sql);
				if ($insert_query) {
					header("location: setting.php");
				}else{
					die("Error:".mysqli_error($connection));
				}

			}else{
				$_SESSION["fieldErr"] = "Please! All field required here.";
				header("location: setting-add.php");
				}

		}else{  // UPDATE BLOCK HERE
			if ( !strlen($tagline)<3 &&  !strlen($email)<3 &&  !strlen($phone)<3 &&  !strlen($office_address)<3 && !strlen($copyright)<3 && !strlen($about)<3 ) {
				// UPDATE CODE HERE
				$id = $_POST['id'];
				$update_sql = "UPDATE `settings` SET tagline='$tagline',email='$email',phone=$phone,office_address='$office_address',copyright='$copyright',about='$about' WHERE id = $id";
				$update_query = mysqli_query($connection,$update_sql);
				if ($update_query) {
					header("location: setting.php");
				}
				else{
					die("Error:".mysqli_error($connection));
				}

			}else{
				$_SESSION["fieldErr"] = "Please! All field required here.";
				header("location: setting-add.php");
				}
		}
	}else{
		header("location: setting.php");
	}

?>