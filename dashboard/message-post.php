<?php 
	require_once "dbcontext.php"; 
	require_once "session.php";
	if ($_SERVER["REQUEST_METHOD"]=="POST") {
		$name = ucwords($_POST['name']);
		$email = $_POST['email'];
		$message = mysqli_real_escape_string($connection,$_POST['message']);
		if (!empty($name) && !empty($email)  && !empty($message)) {
			$sql=mysqli_query($connection,"INSERT INTO messages (name,email,message) VALUES ('$name','$email','$message')");
			if ($sql) {
				header("location: ../index.php");
			}header("location: ../index.php");
		}else{
			header("location: ../index.php");
		}
	}else{
		header("location: ../index.php");
	}
?>