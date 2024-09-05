<?php
/* include db connection file */
include("../db_conn.php");

if(isset($_POST['submit'])){
/* capture values from HTML form */
		$name =$_POST['name'];
	$telNo =$_POST['telNo'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	$mechanicId =$_POST['edit_id'];
	
			
		
			
			$sql2=("UPDATE `mechanic` SET `name`='$name',`telNo`='$telNo',`username`='$username',`password`='$password' where mechanicId = ( select mechanicId from mechanic where mechanicId=$mechanicId )");
			$result=mysqli_query($conn, $sql2) or die ("Error: " .mysqli_error($conn));
			
			
			if($result===true)
			{
             header("location: ../admin/HomeAdmin.php?msg=Update successfully!");
			}
		
        else {
        header("location: ../admin/HomeAdmin.php?msg=Try again!");
    }
	
	
    mysqli_close($conn);
}

?>