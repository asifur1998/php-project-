<?php
$host_name = "localhost";
$user_name ="root";
$pass_word = "";
$db_name = "student_management";
$connect = mysqli_connect($host_name,$user_name,$pass_word,$db_name);
if ($connect == false){
echo " Data base not connected ";
}
?>