<?php 

	require_once 'dbcontext.php';
	require_once 'session.php';
	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$id = $_SESSION['id'];
		$curentPass = $_POST['curentpass'];
		$newPass = $_POST['newpass'];
		$rePass = $_POST['repass'];
		if (strlen($curentPass) >5 && strlen($newPass) >5 && strlen($rePass) >5)
		{
			$result = mysqli_fetch_assoc(mysqli_query($connection,
														"SELECT password FROM users WHERE id = $id"));
			if (password_verify($curentPass, $result['password'])) 
			{
				if ($newPass == $rePass)
				{
					$newPass = password_hash($newPass, PASSWORD_DEFAULT);
					$setPass = mysqli_query($connection,
											"UPDATE users SET password = '$newPass' WHERE id = $id");
					$_SESSION['passchange']= "password change Successfully!";
					header("location: change-password.php");
				}
				else{
					$_SESSION['ComPassErr'] = "Password not matched!";
					header("location: change-password.php");
				}
			}
			else{
				$_SESSION['CurpassErr'] = "Wrong Password!";
				header("location: change-password.php");
			}

		}else{

			$_SESSION['CurpassErr'] = $_SESSION['CurpassErr'] = "Password too short!";

			header("location: change-password.php");
		}
	}else{
 		header("location: change-password.php");
 	}
 ?>