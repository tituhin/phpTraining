<?php 
	require_once 'dbcontext.php';
	require_once 'session.php';

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$name = ucwords($_POST['name']);
		$brandlogo = $_FILES['brandlogo'];
		if (!empty($name) && !empty($brandlogo) ) {
			$allowed_format = ["jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF"];
			$brand_logo_extension = explode(".",$brandlogo['name']);	
			$brand_logo_extension = end($brand_logo_extension);
			if (in_array($brand_logo_extension,$allowed_format)) {
					if ($brandlogo['size']<50000) {
							$logo_name = strtolower($name).".".$brand_logo_extension;
							$logo_location = "image/brand/".$logo_name;
							$query = mysqli_query($connection,"INSERT INTO partners (name,logo) VALUES ('$name','$logo_name')");
							if ($query) {
								move_uploaded_file($brandlogo["tmp_name"],$logo_location);
								header("location:partners.php");
							}else{
								die("Error: ".mysqli_error($connection));
							}
						}else{
						$_SESSION['thumsizeErr']= "Image size can not eexceeds 500KB!";
						header("location: portfolio-add.php");
					}				
				}else{
				$_SESSION['thumErr']= "Inavalid image format";
				header("location: portfolio-add.php");
			}
		}else{
			$_SESSION['fieldErr'] = "All Field required!";
			header("location: portfolio-add.php");
		}

	}else{
		header("location: portfolio-add.php");
	}
 ?>