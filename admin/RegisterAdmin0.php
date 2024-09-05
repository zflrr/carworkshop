<?php
	include("../db_conn.php");

if(isset($_POST['submit'])){
	
	$name =$_POST['name'];
	$telNo =$_POST['telNo'];
	$username =$_POST['username'];
	$password =$_POST['password'];
	
	$sql_u = "SELECT * FROM mechanic WHERE username='$username'";
  	$res_u = mysqli_query($conn, $sql_u);
  

  	if (mysqli_num_rows($res_u) > 0) {
  	  header("Location: Register.php?error= username already taken!");
	    exit();
  	}
	
	else if (empty($name)) {
		header("Location: Register.php?error=Please Make Sure You Fill in all the Table");
	    exit();
	}
	else if(empty($telNo)){
        header("Location: Register.php?error=Please Make Sure You Fill in all the Table");
	    exit();
	}
	else if(empty($username)){
        header("Location: Register.php?error=Please Make Sure You Fill in all the Table");
	    exit();
	}
	else if(empty($password)){
        header("Location: Register.php?error=Please Make Sure You Fill in all the Table");
	    exit();
	}
else{
		$query0="SELECT mechanicId FROM mechanic";
        $result1 = mysqli_query($conn, $query0) or die ("Error: " .mysqli_error($conn));

			 if(mysqli_num_rows($result1)>=0){
			
			$sql0=("INSERT INTO mechanic(`mechanicId`, `name`, `telNo`, `username`, `password`) VALUES (NULL,'$name','$telNo','$username','$password')");
			$result1=mysqli_query($conn, $sql0) or die ("Error: " .mysqli_error($conn));
			
             header("location: Register.php?msg=added successfully!");
        }
		
        else {
        header("location: Register.php?msg=Try again!");  
  }
}	
    mysqli_close($conn);

	
}
?>