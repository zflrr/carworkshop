<?php
session_start();

if(isset($_SESSION['username'])&&isset($_SESSION['mechanicId'])){

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | EDIT</title>
	<link rel="stylesheet" href="../css/homeAdminstyle.css">
	
	<script>
        function validate(){
		  return alert("Car Project Had Been Assigned !");
        }  
    </script>

</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="Home.html"><img src= "../pictures/logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="../logout.php"><img src= "../pictures/user.png"></a>
  </div>
  <a href="../admin/History_Admin.php">History</a>
  <a href="Register.php">Register</a>
  <a href="homeAdmin.php">Home</a>
  </div>
</div>

<?php

include ("../db_conn.php");
$mechanicId=$_GET['mechanicId'];
$q1="SELECT * FROM mechanic where mechanicId = ( select mechanicId from mechanic where mechanicId=$mechanicId )";
$res= mysqli_query($conn,$q1);
$r= mysqli_fetch_array ($res);

?>
<center>

<div class="overview">
<br>
<h2> Update User </h2>
</div>

<div class="register">
	<br>
			<?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>
	</div>

<div class="homerow">
<div class= "inside">

		
	<div class = " title">
	<p> User Information </p>
	</div>
	
	
	
	<form  method="post" action="edit_user0.php"action="edit_user0.php">
	
	<input type="hidden" name="edit_id" value="<?php echo $r['mechanicId'];?>">
	<div class="inputBx">
	<span>Name:</span><br>
	<input type="text" name="name" value="<?php echo $r['name'];?>">
	</div>
	<br>
	<div class="inputBx">
	<span>Telephone Number:</span><br>
	<input type="text" name="telNo"  value="<?php echo $r['telNo'];?>">
	</div>
	<br>
	<div class="inputBx">
	<span>Username:</span><br>
	<input type="text" name="username"  value="<?php echo $r['username'];?>">
	</div>
	<br>
	<div class="inputBx">
	<span>Password:</span><br>
	<input type="text" name="password"  value="<?php echo $r['password'];?>">
	</div>
	<br>
	<input type="submit" class="btn" name="submit" value="Submit"> 
	</form>
	


</div>

<div class= "inside">
<div class = " title">
<p> Assign Car Service </p>
</div>


<table class="userview">

 <thead>
                <tr>
                  <th>Service ID</th>
				  <th>Plate Number</th>
				   <th>Action</th>
                </tr>
              </thead>
			 
			 	<tr>
                  <td>11672</td>
				  <td>RIMAU6815</td>
				  <td><a href="../admin/HomeAdmin.php" onclick="return validate()" >Assign</a>
                </tr>
				
				<tr>
                  <td>18912</td>
				  <td>BAG1123</td>
				  <td><a href="../admin/HomeAdmin.php" onclick="return validate()">Assign</a>
                </tr>
			

</table>



</div>

</div>






</body>

</html>

<?php
}