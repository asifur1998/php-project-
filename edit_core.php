<?php
include("connection.php");
if (isset($_POST["submit"])){
	$name = $_POST["name"];
	$roll = $_POST["roll"];
	$class = $_POST["class"];
	$image = $_POST["image"];
	$editingId = $_POST["editingId"];
	$sql = "UPDATE students SET name='$name',roll='$roll',class='$class',image='$image' WHERE id = '$editingId'";
	$runQuery = mysqli_query($connect,$sql);
	if ($runQuery == true){
		header("location:view.php?edited");
	}else {
		echo "Data not edited";
	}
}
?>