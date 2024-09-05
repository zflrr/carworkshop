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
	<title>AMOTIVE WORKSHOP | VIEW</title>
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


<div class="overview">
<br>
<h2> Welcome, <?php echo $_SESSION['name']; ?> </h2>
<?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>

<div class= "row">
<div class="side1">				
<div class= "inside1">
<div class = " title">
<p> Mechanic List </p>
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

<div class="side2">
<div class="inside1">
<div class = " title">
<p> Mechanic Detail </p>
</div>

<center>

<img src="..\pictures\user1.png"></img><br>
<table class="table"  >



<?php             
	
	$mechanicId = $_GET['mechanicId'];
	$q1= "SELECT * FROM mechanic where mechanicId = ( select mechanicId from mechanic where mechanicId=$mechanicId )";
	$res= mysqli_query($conn,$q1);
	$r= mysqli_fetch_array ($res);
	
	?>


 <thead>
                
                  <tr><td>Mechanic Id : </td> <td>&nbsp;<?php  echo $r['mechanicId'];?></td></tr>
				  <tr><td>Name : </td><td><?php  echo $r['name'];?></td></tr>
				  <tr><td>Telephone Number: </td><td><?php  echo $r['telNo'];?></td></tr>
                
 </thead>				 

</table>

</center>
</div>
</div>

<div class="side3">
<div class="inside1">
<div class = " title">
<p> Car Service List Assigned</p>
</div>
<center>
<table class = "userview">

<thead>
                <tr>
				 <th>Service Id</th>
                  <th>Name</th>
                   <th>Model</th>
				   <th>Status</th>
				     <th>Action</th>
                </tr>
              </thead>
			  
			     <tr>
				 <td>11672</td>
				  <td>Zafri Haikal</td>
				  <td>Perodua Axia</td>
				  <td>Completed</td>
				    <td><a href="../customer/admininvoice.pdf" download="invoiceprint">Generate</a>
                </tr>
				
				<tr>
				<td>88712</td>
				  <td>Airi Kai</td>
				  <td>Perodua Myvi</td>
				  <td>In Payment</td>
				  <td></td>
                </tr>

</table>
</center>
</div>
</div>




</div>
</div>

</div>


</body>
</html>

<?php

} else {

header("Location: login.php");

}

?>