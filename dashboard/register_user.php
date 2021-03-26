<?php session_start();
	require_once 'dbcontext.php';
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$_SESSION['name'] = $name = $_POST['name'];
		$_SESSION['email'] = $email = $_POST['email'];
		$_SESSION['password'] = $password = $_POST['password'];
		$_SESSION['confirmpassword'] = $confirmpassword = $_POST['confirmpassword'];

		$name_match = preg_match("/^(?=.*[A-Za-z  .])[A-Za-z .]{4,50}$/", $name);
		$email_match = preg_match("/[a-z-.\d_+]{3,}@[a-z]{3,}.[a-z.]{2,}/", $email);
		$password_match = preg_match("/^(?=.*[a-z])(?=.*\d)(?=.*[^@$!%.*?&])[a-z\d@$!%.*?&^]{6,50}$/", 
								$password);
		
		if (!$name_match) {
			$_SESSION['nameErr']= "Name Invalid";
			header("location: signup.php");
		}
		elseif (!$email_match) {
			$_SESSION['emailErr']= "Invalid email";
			header("location: signup.php");
		}
		elseif (!$password_match) {
			$_SESSION["passErr"] = "Include one Charachter, letter, special Charachter.";
			header("location: signup.php");
		}
		elseif ($confirmpassword != $password) {
			$_SESSION['confirmpassErr']= "";
			header("location: signup.php");
		}

		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			$regQuery = "INSERT INTO users (name, email, password) VALUES ('$name','$email', '$password')"; 
			$insertUser = mysqli_query($connection,$regQuery);
			if($insertUser){
				mysqli_close($connection);
				$_SESSION['success'] = "Registration Succesfull.<br> Login please!";
				header("location: signin.php");
			}else{
				header("location: signup.php");
			}

		}
	}else{
		header("location: signup.php");
	}
 ?>