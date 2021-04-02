<?php 
	require_once 'dbcontext.php';
	require_once 'session.php';
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$title = $_POST['title'];
		$category = $_POST['category'];
		$summary = mysqli_real_escape_string($connection,$_POST['summary']);
		$thumb = $_FILES['thumbnail'];
		$feat = $_FILES['featured_image'];
		$thumb_name = "";
		$feat_name = "";
		if (!empty($title) && !empty($category) && !empty($summary) && !empty($thumb['name']) && !empty($feat['name']) ) {
			$allowed_format = ["jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF"];
			$thumb_extention = explode(".",$thumb['name']);	
			$thumb_extention = end($thumb_extention);
			$feat_extention = explode(".",$feat['name']);	
			$feat_extention= end($feat_extention);
			if (in_array($thumb_extention,$allowed_format)) {
				if (in_array($feat_extention, $allowed_format)) {
					if ($thumb['size']<500000) {
						if ($feat['size']<500000) {
							date_default_timezone_set("Asia/Dhaka");
							$thumb_name = "thumnail".rand(1,3000).date("i_s_a_M_Y").".".$thumb_extention;
							$feat_name = "featured_image".rand(1,300).date("i_s_a_M_Y").".".$feat_extention;
							$thumb_location = "image/".$thumb_name;
							$feat_location = "image/".$feat_name;
							$sql = "INSERT INTO `portfolios` (title,category,summary,thumbnail,featured_image,status) VALUES ('$title','$category','$summary','$thumb_name','$feat_name',true)";
							$portfolio_query = mysqli_query($connection,$sql);
							
							if ($portfolio_query) {
								move_uploaded_file($thumb['tmp_name'], "$thumb_location");
								move_uploaded_file($feat['tmp_name'],"$feat_location");
								header("location: portfolio.php");
							}else{
								die("Error: ".mysqli_error($connection));
							}
						}else{
							$_SESSION['featsizeErr']= "Image size can not eexceeds 500KB!";
							header("location: portfolio-add.php");
						}
					}else{
						$_SESSION['thumsizeErr']= "Image size can not eexceeds 500KB!";
						header("location: portfolio-add.php");
					}
				}else{
					$_SESSION['featErr']= "Inavalid image format";
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