<?php
include "../db_conn.php";

$name=$_POST['name'];
$telNo=$_POST['telNo'];
$username=$_POST['username'];
$password=$_POST['password'];

$check_data=mysqli_query($conn,"SELECT * FROM mechanic WHERE username='$username'");
$check=mysqli_num_rows($check_data);

if($check >0){
	echo"Username already exist";
}
else{
	$input=mysqli_query($conn,"INSERT INTO mechanic (mechanicId,name,telNo,username,password)VALUES(NULL,'$name','$telNo','$username','$password')");
	
	if($input){
		echo"Register Success";
	}
}
?>