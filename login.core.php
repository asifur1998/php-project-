<?php
include("connection.php");
if (isset($_POST["submit"])){
	$name =$_POST["name"];
	$password = $_POST["password"];
	if ($name != "" && $password != ""){
		$sql = "SELECT * FROM auth WHERE name = '$name' and password = '$password'";
		$runQuery = mysqli_query($connect,$sql);
		if (mysqli_num_rows($runQuery) == true){
			session_start();
			$_SESSION["auth"] = 'true';
			header("location:dashboard.php");
		}else{
			header("location:login.php");
		}
		
	}
	
}





?>