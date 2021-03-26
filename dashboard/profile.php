<?php
	require_once 'dbcontext.php';
	require_once 'session.php';
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$id = $_SESSION['id'];
		$proname = $_POST['proname'];
		$proemail = $_POST['proemail'];
		$proimage = $_FILES['proimage'];
		$imageName = $proimage['name'];
		if (!empty($imageName)) {
			$imgexplode = explode(".", $imageName);
			$extention = end($imgexplode);
			$allowed_format = ["jpeg","jpg","png","gif"];
			if (in_array($extention, $allowed_format)) {
				if ($proimage['size'] < 500000) {
					// $new_name = rand(1, 3000).$id.".".$extention;
					$new_name = $id.".".$extention;
					$new_location = "upload/".$new_name;
					$img_check = " SELECT * FROM users WHERE id = $id ";
					$img_query = mysqli_query($connection, $img_check);
					$assoc = mysqli_fetch_assoc($img_query);
					$old_location = "upload/".$assoc['profileImage'];
					if ($assoc['profileImage'] != "upload/default.png") {
						if (file_exists($old_location)) {
							unlink($old_location);
						}
					}
					move_uploaded_file($proimage['tmp_name'], $new_location);
				}else{
					$_SESSION['allowed_size'] = "Image size can not exced 50 KB.";
					header("location: edit-Profile.php");
				}
			}else{
				$_SESSION['allowed_format'] = "Only jpeg jpg png format is allowed here.";
				header("location: edit-Profile.php");
			}
		}else{
			$_SESSION['null_image'] = "Please! select image.";
			header ("location: edit-Profile.php");
		}
		
	}
	/*function image_filter($proimage){
		$imageName = $proimage['name'];
		if (!empty($imageName)) {
			$imgexplode = explode(".", $imageName);
			$extention = end($imgexplode);
			$allowed_format = ["jpeg","jpg","png","gif"];
			if (in_array($extention, $allowed_format)) {
				if ($proimage['size'] < 50000) {
					$new_name = rand(int:min, int:max)
				}else{}
			}else{
				$_SESSION 
			}
		}else{
			header ("location: edit-Profile.php");
		}
	}*/
?>