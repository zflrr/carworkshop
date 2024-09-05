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
	<title>AMOTIVE WORKSHOP | EDIT</title>
	<link rel="stylesheet" href="../css/homestyle.css">
</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="Home.php"><img src= "../pictures/logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="../logout.php"><img src= "../pictures/user.png"></a>
  </div>
  <a href="../Users/History.php">History</a>
  <a href="../Users/Register.php">Register</a>
  <a href="../Users/Home.php">Home</a>
  </div>
</div>
<?php 

include ("../db_conn.php");
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
<div class="register"><br>
	<h2> Update form</h2>
	
	<?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>
	
	<div class= "card">
		<div class="row">
			<div class="left">
			<div class = " title">
				<p> Customer Details </p>
			</div>
			</div>
			<div class="middle">
			<div class = " title">
					<p> Car Services Details </p>
			</div>
			</div>
			<div class="right">
			<div class = " title">
				<p>  </p>
				</div>
			</div>
		</div>
			
				<div class= "FormBx">
					<form method="post" action="../users/Project_Edit0.php">
					<div class= "row">
						<div class="left">
						<div class="inputBx">
						
						<input type="hidden" name="edit_id" value="<?php echo $r4['projNo'];?>">
						
							<span>Name</span><br>
							<input type="text" name="fname" value="<?php echo $r['firstName'];?>">
						</div>
					
						<div class="inputBx">
							<span>Telephone Number</span><br>
							<input type="text" name="telNo" value="<?php echo $r['telNo'];?>">
						</div>
						<div class="inputBx">
							<span>Address</span><br>
							<input type="textarea" name="address" value="<?php echo $r['address'];?>">
						</div>
						<div class="inputBx">
							<span>Email</span><br>
							<input type="textarea" name="email" placeholder="zafrie@gmail.com">
						</div>
						</div>
						
						<div class="middle">
						
						<div class="inputBx">
							<span>Plate Number</span><br>
							<input type="textarea" name="plateNum" placeholder="MBC5743">
						</div>
						
						<div class="inputBx">
							<span>Owner Name</span><br>
							<input type="textarea" name="plateNum" placeholder="Dhani">
						</div>
						
							<div class="inputBx">
							<span>Car model</span><br>
							<input type="textarea" name="model" value="<?php echo $r2['model'];?>">
						</div>
							
						<div class="inputBx">
							<span>Car year</span><br>
							<input type="year" name="year" value="<?php echo $r2['year'];?>">
						</div>
						
						<div class="inputBx">
							<span>Service Type</span><br>
							<select name="services" class="servicetype" id="type">
							<option disabled selected ><?php echo $r5["serviceName"];?> (Current)</option>
							<option value= "1">Tyre Services</option>
							<option value= "2">Oil Changing</option>
							<option value= "3">Engine Services</option>
							<option value= "4">Monthly Service</option>
							<option value= "5">Others</option>
							</select>
						</div>
						
						<div class="inputBx">
							<span>Additonal Cost</span><br>
							<input type="textarea" name="add" value="<?php echo $r3['addCost'];?>" id="add">
						</div>
						
						
						<div class="inputBx1">
							<input type="button" onClick="calc()" value="Calculate">
						</div>
						
						<div class="inputBx1">
						<p> PRICE TOTAL : </p>
						
						<p id="result" name="result"> </p>
						
						</div>
						
							<div class="inputBx">
							<span>Description</span><br>
							<input type="textarea" name="desc" value="<?php echo $r3['description'];?>">
						</div>
						
						
						
						</div>
						
						<div class="right">
						<div class="inputBx">
							<span>Date Receives</span><br>
							<input type="date" name="Rdate" value="<?php echo $r4['dateReceive'];?>">
						</div>
						<div class="inputBx">
							<span>Time Receives</span><br>
							<input type="time" name="Rtime" value="<?php echo $r4['timeReceive'];?>">
						</div>
						<div class="inputBx">
							<span>Date Return</span><br>
							<input type="date" name="retdate" value="<?php echo $r4['dateReturn'];?>">
						</div>
						
						<input type="hidden" value="" id="price" name="price">
						
						<input type="submit" value="Submit" name = "submit" >
						</div>
					
					</div>
					</form>
				</div>
	</div>
</div>


</body>

<script type = "text/javascript">

function calc() 
{
	var total = 0;
	var add = parseInt(document.getElementById("add").value);
	var s = document.getElementById("type");
    var item1 = s.options[s.selectedIndex].value;
	
	if ( item1 == '1' )
	{
		var price = 150.00;
		
	}
	else if ( item1 == '2' )
	{
		var price = 160.00;
	}
	else if ( item1 == '3' )
	{
		var price = 180.00;
	}
	else if ( item1 == '4' )
	{
		var price = 300.00;
	}
	else
	{
		var price = 0;
	}
	total= price+add;
	
	document.getElementById("result").innerHTML = 'RM '+ total;
	document.getElementById("price").value = total;
}
</script>

</html>
<?php
}