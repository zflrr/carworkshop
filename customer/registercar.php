
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | CAR REGISTER </title>
	<link rel="stylesheet" href="../css/customercss.css">
	<script>
        function validate(){
		  return alert("Information Had Been Submitted!");
        }  
    </script>
</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="../customer/home.php"><img src= "../pictures/logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="../customer/custlog.php"><img src= "..\pictures\user.png"></a>
  </div>
  <a href="../customer/userupdate.php">User Info</a>
  <a href="../customer/takepicture.php">Car Register</a>
  <a href="../customer/home.php">Home</a>
  </div>
</div>

<center>
<div class="overview">
<br>
<h2> CAR INFORMATION REGISTER</h2>
</div>
            
<div class="row">
<div class= "inside">

				<form name="form" method="post" action="../customer/home.php" onsubmit="return validate()">

						<div class="inputBx">
							<span>Plate Number</span><br>
							<input type="text" name="fname" placeholder="RIMAU6815">
						</div>
						
						<div class="inputBx">
							<span>Model</span><br>
							<input type="text" name="OwnerName" placeholder="Proton AXIA">
						</div>
						<div class="inputBx">
							<span>Year</span><br>
							<input type="text" name="telNo" placeholder="2022">
						</div>
						<div class="inputBx">
							<span>Owner Name</span><br>
							<input type="textarea" name="address" placeholder="ZAFRIHAIKAL">
						</div>
						<br>
						<input type="submit" value="Register" name="">
				</form>

</div>
</div>

</body>
</html>