<?php
include("connection.php");
if (isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	
	if ($name != "" && $email != ""&& $phone != ""&& $password != ""){
		$query = "INSERT INTO auth (name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
		$runQuery = mysqli_query($connect,$query);
		if ($runQuery == true){
			header("location:login.php");
		}else{
			header("location:signup.php");
		}
	}else{
		echo "Fill the form ";
	}
}
		
		
		


	
	
	





?>