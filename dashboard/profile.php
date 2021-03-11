<?php
	require_once 'dbcontext.php';
	require_once 'session.php';
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_SESSION['id'];
		$proname = $POST['proname'];
		$proemail = $POST['proemail'];
		$proimage = $POST['proimage'];

	}
?>