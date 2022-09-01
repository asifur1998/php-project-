<?php
include("connection.php");
$editId = $_GET["id"];
$del = "DELETE FROM students where id = $editId";
$sqlDEL = mysqli_query($connect,$del);
if ($sqlDEL == true){
	header("location:view.php?deleted");
}else {
	echo "Data not deleted";
}
?>