
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | USER INFO </title>
	<link rel="stylesheet" href="../css/customercss.css">
	
	<script>
        function validate(){
		  return alert("Information Had Been Update");
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
<h2> USER INFORMATION</h2>
</div>
            
<div class="row">
<div class= "inside">

				<form name="form" onsubmit="return validate()" method="post" action="../customer/home.php">

						<div class="inputBx">
							<span>Username</span><br>
							<input type="text" name="fname" placeholder="zafrie">
						</div>
						
						<div class="inputBx">
							<span>Name</span><br>
							<input type="text" name="OwnerName" placeholder="Zafri Haikal">
						</div>
						<div class="inputBx">
							<span>Password</span><br>
							<input type="password" name="telNo" placeholder="*****">
						</div>
						<div class="inputBx">
							<span>Phone Number</span><br>
							<input type="textarea" name="address" placeholder="0113212119">
						</div>
						<div class="inputBx">
							<span>Address</span><br>
							<input type="textarea" name="address" placeholder="11,Jalan UiTM,78110 Shah Alam">
						</div>
						<div class="inputBx">
							<span>Email</span><br>
							<input type="textarea" name="address" placeholder="zafrie@gmail.com">
						</div>
						<br>
						<input type="submit" value="Update" name="">
						</form>

</div>
</div>




</body>
</html>