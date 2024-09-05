<?php
session_start();

if(isset($_SESSION['username'])&&isset($_SESSION['mechanicId'])){

?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | REGISTER</title>
	<link rel="stylesheet" href="../css/homestyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
  <a href="../Users/scanpagemechanic.php">Register</a>
  <a href="../Users/Home.php">Home</a>
  </div>
</div>

<div class="register"><br>
	<h2> Register form</h2>
	
	<?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>
	
	<div class= "card">
				<div class= "FormBx">
					<form method="post" action="Register0.php">
					<input type="hidden" name="mechanicId" value="<?php echo $_SESSION['mechanicId'];?>">
					<div class= "row">
						<div class="left">
						<div class = " title">
							<p> Customer Details </p>
						</div>
						<div class="inputBx">
							<span>Name</span><br>
							<input type="text" name="fname" value="zafri haikal" placeholder="Zafri Haikal">
						</div>
						
						<div class="inputBx">
							<span>Car Owner Name</span><br>
							<input type="text" name="OwnerName" placeholder="Alex Tan">
						</div>
						<div class="inputBx">
							<span>Telephone Number</span><br>
							<input type="text" name="telNo" placeholder="0119827181">
						</div>
						<div class="inputBx">
							<span>Address</span><br>
							<input type="textarea" name="address" placeholder="Uitm Shah Alam">
						</div>
						<div class="inputBx">
							<span>Email</span><br>
							<input type="textarea" name="email" placeholder="aliexpress@gmail.com">
						</div>
						
						
						
						
						</div>
						
						<div class="middle">
						<div class = " title">
							<p> Car Services Details </p>
						</div>
						<div class="inputBx">
							<span>Plate Number</span><br>
							<input type="textarea" name="plateNum" placeholder="W1688A">
						</div>
						
							<div class="inputBx">
							<span>Car model</span><br>
							<input type="textarea" name="model" value="proton" placeholder="PROTON SATRIA">
						</div>
							
						<div class="inputBx">
							<span>Car year</span><br>
							<input type="year" name="year"placeholder="2007">
						</div>
						
						<div class="inputBx">
							<span>Service Type</span><br>
							<select name="services" class="servicetype" id="type">
							<option disabled selected >Type</option>
							<option value= "1" >Tyre Services</option>
							<option value= "2" >Oil Changing</option>
							<option value= "3" >Engine Services</option>
							<option value= "4" >Monthly Service</option>
							<option value= "5" >Others</option>
							</select>
						</div>
						
						<div class="inputBx">
							<span>Additonal Cost</span><br>
							<input type="textarea" name="add" id="add">
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
							<input type="textarea" name="desc">
						</div>
						
						<div class="inputBx">
							<span>Date Receives</span><br>
							<input type="date" name="Rdate">
						</div>
						<div class="inputBx">
							<span>Time Receives</span><br>
							<input type="time" name="Rtime">
						</div>
						
						</div>
						
						<div class="right">
						<div class = " title">
						<p> Mechanic Incharges </p>
						</div>
						
						
					
						<center>
						<img src="..\pictures\user1.png"></img><br>
						
						<div class="Users">
						<?php echo $_SESSION['name']; ?><br>
						<?php echo $_SESSION['mechanicId']; ?><br>
						<?php echo $_SESSION['telNo']; ?><br>
						
						
						</div>
						</center>
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
	else if ( item1 == '0')
	{
		var price = 0;
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