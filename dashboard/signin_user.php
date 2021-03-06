<?php 
	require_once 'dbcontext.php';
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$email = $_POST['email'];
		$password  = $_POST['password'];
		if (empty($email) || empty($password) || strlen($email)<6 || strlen($password)<6 ) {
			
			$_SESSION['danger']="Wrong Password or email.";
			header("location: signin.php");
		}
		else{
			$select = "SELECT COUNT(*) as total, id,name,email,password,status,role FROM users WHERE email = '$email' ";
			$query = mysqli_query($connection,$select);
			$assoc = mysqli_fetch_assoc($query);
			if ($assoc>0) {
				$hash = $assoc['password'];
				if (password_verify($password, $hash)) {
					$_SESSION['email'] = $assoc['email'];
					$_SESSION['id'] = $assoc['id'];
					$_SESSION['name'] = $assoc['name'];
					mysqli_close($connection);
					header("location: index.php");
				}else{
					header("location: signin.php");
				}
			}else{
				die('Error: '.mysqli_error($connection));
				
			}
		}
	}
 ?>