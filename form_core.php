<?php
include("connection.php");
if (isset($_POST["submit"])){
	$name = $_POST["name"];
	$roll = $_POST["roll"];
	$class = $_POST["class"];
	
	$image_name = $_FILES["image"]["name"];
	$image_tmp_name = $_FILES["image"]["tmp_name"];
	$location = "images/";
	move_uploaded_file($image_tmp_name,$location."$image_name");
	if ($name != "" && $roll != "" && $class != "" && $image_name != ""){
		$query = "INSERT INTO students (name,roll,class,image) VALUES ('$name','$roll','$class','$image_name')";
		$runQuery = mysqli_query($connect,$query);
		if ($runQuery == true){
			
			header("location:form.php?inserted");
		}else{
			echo "Data not inserted";
		}
	}else{
		header("location:form.php");
	}
	}
?>