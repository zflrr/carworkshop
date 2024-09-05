<?php
include("../db_conn.php");

	$mechanicId = $_GET['mechanicId'];
	
	$q1= "DELETE FROM `mechanic` WHERE mechanicId = ( select mechanicId from mechanic where mechanicId=$mechanicId )";
	$res= mysqli_query($conn,$q1);
	
if ($res== 1) {
       header("location: ../admin/HomeAdmin.php?msg=Delete successfully!");
} 

else {
   header("location: ../admin/HomeAdmin.php?msg=Error delete!");
}

mysqli_close($conn);

?>