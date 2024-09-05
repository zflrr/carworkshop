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
	<link rel="stylesheet" href="..\css\homestyle.css">
	<script>
        function validate(){

		  return alert("Information Had Been Submitted");
        }  
    </script>



</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="..\users\Home.php"><img src= "..\pictures\logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="..\logout.php"><img src= "..\pictures\user.png"></a>
  </div>
  <a href="..\Users\History.php">History</a>
  <a href="..\Users\Register.php">Register</a>
  <a href="..\Users\Home.php">Home</a>
  </div>
</div>

<div class="overview1">
<br>
<center>
<h2> VIEW CUSTOMER </h2>

<?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>

<div class="inside1">
<br>
<a href="..\users\Home.php"><img src= "..\pictures\home.png"></a>
<br>
<table class="table" >



<?php             
	
	$projNo = $_GET['projNo'];
	$q1= "SELECT * FROM customer where custId = ( select custId from mainproject where projNo=$projNo )";
	$res= mysqli_query($conn,$q1);
	$r= mysqli_fetch_array ($res);
	
	$q2= "SELECT * FROM vehicle where custId = ( select custId from mainproject where projNo=$projNo )";
	$res2= mysqli_query($conn,$q2);
	$r2= mysqli_fetch_array ($res2);
	
	$q3= "SELECT * FROM mainservice where projNo = ( select projNo from mainproject where projNo=$projNo )";
	$res3= mysqli_query($conn,$q3);
	$r3= mysqli_fetch_array ($res3);
	
	$q4= "SELECT * FROM mainproject where custId = ( select custId from mainproject where projNo=$projNo )";
	$res4= mysqli_query($conn,$q4);
	$r4= mysqli_fetch_array ($res4);
	
	$q5= "SELECT serviceName FROM services where serviceId = ( select serviceId from mainservice where projNo=$projNo )";
	$res5= mysqli_query($conn,$q5);
	$r5= mysqli_fetch_array ($res5)
	
	?>

 <thead>
                
                  <tr><td>Project No. : </td> <td>&nbsp;<?php  echo $r4['projNo'];?></td></tr>
				  <tr><td>Name : </td><td><?php  echo $r['firstName'];?>&nbsp;<?php  echo $r['lastname'];?></td></tr>
				  <tr><td>Model : </td><td><?php  echo $r2['model'];?></td></tr>
				  <tr><td>Telephone No. : </td><td><?php  echo $r['telNo'];?></td></tr>
				  <tr><td>Address : </td><td><?php  echo $r['address'];?></td></tr>
				  <tr><td>Date Receives : </td><td><?php  echo $r4['dateReceive'];?></td></tr>
				  <tr><td>Time Receives : </td><td><?php  echo $r4['timeReceive'];?></td></tr>
				  <tr><td>Date Return : </td><td><?php  echo $r4['dateReturn'];?></td></tr>
                
 </thead>
	

</table>
<br>
<table class="table1" >

 <thead>
                <tr>
                  <th>Service Detail</th>
				   <th>Description</th>
                  <th>Additional Cost</th>
                   <th>Service Total</th>
                </tr>
              </thead>
			  
				<tr>
                  <td><?php  echo $r5['serviceName'];?></td>
				  <td><?php  echo $r3['description'];?></td>
				  <td><?php  echo $r3['addCost'];?></td>
				  <td><?php  echo $r3['serviceTotal'];?></td>
				  
                </tr>

</table>

<br>

<form name="form" onsubmit="return validate()" action="..\Users\Home.php" method = "post">
					
					<div class="inputBx">
							<span>Update Status</span><br>
							<select name="cartype" class="carType" id="type">
							<option disabled selected >Type</option>
							<option value= "1" >Completed</option>
							<option value= "2" >Need Payment</option>
							<option value= "3" >Not Complete</option>
							</select>
					
					</div>
					<br>
					<div class="inputBx">
					<label><input type="submit" value="Submit" name=""></label><br>
					</div>
					
</form>

</div>
</div>
</center>

</body>
</html>

<?php

} else {

header("Location: login.php");

}

?>