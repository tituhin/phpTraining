<?php 
	require_once "dbcontext.php";
	require_once "session.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$degree = $_POST['degree'];
		$year = $_POST['year'];
		$percentage = $_POST['percentage'];
		if (!strlen($degree)<3 && !strlen($year)<3 && !strlen($percentage)<2) {
			if (is_numeric($year)) {
				$sql = "INSERT INTO education (degree,year,percentage) VALUES ('$degree','$year',$percentage)";
				$edu_query = mysqli_query($connection,$sql);
				if ($edu_query) {
					header("location: education.php");
				}else{
					die("ERROR: ".mysqli_error($connection));
				}
			}else{
				$_SESSION['yearErr'] = "Year is not correct!";
				header("location: education-add.php");
			}
		}else{
			header("location: education-add.php");
		}
	}else{
		header("location: education-add.php");
	}
 ?>