<?php 
	
	require_once 'dbcontext.php';
	require_once 'session.php';
	if (isset($_GET['user-delete'])){
		$id_to_delete = $_GET['user-delete'];
	
		$query = mysqli_query($connection,"update `users` set `status` = '2' where id = $id_to_delete");
		if ($query) {
			$_SESSION['user_deleted']= "User delete Successful.";
			header("location: index.php");
		}
		else{

			header("location: page-notfound.php");
		}
	}

	if ($_SERVER['REQUEST_METHOD'] =="POST") {

		$id = $_POST['idedit'];
		$name = $_POST['nameedit'];
		$email = $_POST['emailedit'];
		$query = "UPDATE `users` SET name='$name' ,email='$email' WHERE id = '$id' ";
		$update = mysqli_query($connection,$query);
		echo "string";
		if ($update) {
			mysqli_close($connection);
			$_SESSION['user_edited'] = "user successfully edited.";
			header("location: index.php");
		}
	}
 ?>