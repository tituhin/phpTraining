<?php
	require_once 'dbcontext.php';
	require_once 'session.php';
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_SESSION['id'];
		$proname = $_POST['proname'];
		$proemail = $_POST['proemail'];
		$proimage = $_FILES['proimage'];
		print_r($proimage);
		if($proimage['type'] != 
	}
?>