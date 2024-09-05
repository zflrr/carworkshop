<?php

session_start();
include("../db_conn.php");
if(isset($_SESSION['username'])&&isset($_SESSION['mechanicId'])){

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | HOME </title>
	<link rel="stylesheet" href="../css/homeAdminstyle.css">
</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="../Admin/HomeAdmin.php"><img src= "../pictures/logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="../logout.php"><img src= "..\pictures\user.png"></a>
  </div>
  <a href="History_Admin.php">History</a>
  <a href="../Admin/Register.php">User Register</a>
  <a href="../Admin/HomeAdmin.php">Home</a>
  </div>
</div>

<center>
<div class="overview">
<br>
<h2> Welcome Back <?php echo $_SESSION['name']; ?> </h2>
               <?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>

<div class= "inside">
<div class = " title">
<p> User List </p>
</div>

<table class="userview">

 <thead>
                <tr>
                  <th>Mechanic Id</th>
                  <th>Name</th>
                   <th>No Telephone</th>
				   <th>Action</th>
                </tr>
              </thead>
			  
			    <?php             
				$ret=mysqli_query($conn,"select * from mechanic");
				while ($row=mysqli_fetch_array($ret)) { ?>
				<tr>
                  <td><?php  echo $row['mechanicId'];?></td>
				  <td><?php  echo $row['name'];?></td>
				  <td><?php  echo $row['telNo'];?></td>
				  <td><a href="edit_user.php?mechanicId=<?php echo ($row['mechanicId']);?>">Edit</a>
				   <a href="delete_user0.php?mechanicId=<?php echo ($row['mechanicId']);?>">Delete</a>
				   <a href="view_user.php?mechanicId=<?php echo ($row['mechanicId']);?>">view</a></td>
                </tr>
				
                <?php 
}?>

</table>




</div>

</div>


</body>
</html>

<?php

} else {

header("Location: login.php");

}

?>