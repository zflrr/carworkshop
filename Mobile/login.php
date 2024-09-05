<?php
include "../db_conn.php";

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM mechanic WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
				if($row['username']=="admin")
				{
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['mechanicId'] = $row['mechanicId'];
				$_SESSION['telNo'] = $row['telNo'];
				
				echo "Log In Successfully";
				}
			else
			{
				echo"Wrong Username or Password";
				
			}
				
            }
			else{
					echo"Wrong Username or Password";
		        
			}
		}
		
		else{
				echo"Wrong Username or Password";
	        
		}
	
?>