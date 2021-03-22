<?php
	require_once 'dbcontext.php';
	require_once 'session.php';
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_SESSION['id'];
		$proname = $_POST['proname'];
		$proemail = $_POST['proemail'];
		$proimage = $_FILES['proimage'];
		
		image_filter($proimage);
		// if($proimage['type'])
	}
	function image_filter($proimage){
		$imageName = $proimage['name'];
		if (!empty($imageName)) {
			$imgexplode = explode(".", $imageName);
			$extention = end($imgexplode);
			$allowed_format = ["jpeg","jpg","png","gif"];
			if (in_array($extention, $allowed_format)) {
				if ($proimage['size'] < 50000) {
					
				}else{}
			}else{
				$_SESSION 
			}
		}else{
			header ("location: edit-Profile.php");
		}
	}
?>