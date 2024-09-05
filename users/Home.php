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
	<title>AMOTIVE WORKSHOP | HOME</title>
	<link rel="stylesheet" href="../css/homestyle.css">
</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="../users/Home.php"><img src= "../pictures/logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="../logout.php"><img src= "../pictures/user.png"></a>
  </div>
  <a href="../Users/History.php">History</a>
  <a href="../Users/scanpagemechanic.php">Register</a>
  <a href="../Users/Home.php">Home</a>
  </div>
</div>


<center>
<div class="overview">
<br>
<h2> Welcome Back <?php echo $_SESSION['username']; ?> </h2>

<?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>
		
<div class= "inside">
<div class = " title">
<p> Project List </p>
</div>

<table class="table" style="border-collapse:collapse; width:100%; text-align:justify;">
 <thead>
                <tr>
                  <th>Project No.</th>
                  <th>Model</th>
                   <th>Name</th>
				   <th>Action</th>
                </tr>
              </thead>
			  
			  <?php    
				
				$ses= $_SESSION['mechanicId'];
				$sql="SELECT a.projNo, b.model, c.firstName from mainproject a,vehicle b, customer c WHERE a.regNum = b.regNum and c.custId = a.custId and mechanicId =$ses";
				$ret=mysqli_query($conn,$sql);
			
				while ($row=mysqli_fetch_assoc($ret)) { ?>
				<tr>
                  <td><?php  echo $row['projNo'];?></td>
				  <td><?php  echo $row['model'];?></td>
				  <td><?php  echo $row['firstName'];?></td>
				  <td>
				   <a href="Project_Edit.php?projNo=<?php echo $row['projNo'];?>">Edit</a>
				   <a href="Project_Delete.php?projNo=<?php echo $row['projNo'];?>">Delete</a>
				   <a href="View_detail.php?projNo=<?php echo $row['projNo'];?>">view</a></td>
                </tr>
				
                <?php 
				} 
				?>
   

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