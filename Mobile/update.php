<?php

include("../db_conn.php");

$sid=@$_POST['sid'];
$name=$_POST['name'];
$telNo=$_POST['telNo'];
$username=$_POST['username'];
$password=$_POST['password'];

	$sql="UPDATE `mechanic` SET `name`='$name',`telNo`='$telNo',`username`='$username',`password`='$password' WHERE mechanicId ='$sid'";

		$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

			if ($res===true) echo "OK_EDIT";


mysqli_close($conn);

?>