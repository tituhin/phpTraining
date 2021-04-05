<?php 
	require_once "dbcontext.php"; 
	require_once "session.php";
	$id = $_GET['id'];
	$assoc= mysqli_fetch_assoc(mysqli_query($connection,"SELECT COUNT(*) AS total,status FROM messages WHERE id = $id"));
	// echo $assoc['status'];die();
	if ($assoc['status']==1) {
		$sql=mysqli_query($connection,"UPDATE messages SET status = 2 WHERE id = $id ");
		header("location: message.php");
	}else{
		$sql=mysqli_query($connection,"UPDATE messages SET status = 1 WHERE id = $id ");
		header("location: message.php");
	}
 ?>