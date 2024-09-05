
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | PAYMENT </title>
	<link rel="stylesheet" href="../css/customercss.css">

	<script>
        function validate(){
		  return alert("Your Status Complete Once You Pay at the respective Branch, Thank You.");
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
<h2> CHOOSE YOUR PAYMENT TYPE</h2>
</div>
            
<div class="row">
<div class= "inside" style="height:244px;">

				<form method="post" action="../customer/paymentpage.php" >
						<br>
						<input type="submit" value="Debit Card" >
				</form>
				
					<form method="post" action="../customer/home.php" >
						<input type="submit" value="FPX Payment" >
				</form>
				
					<form name="form" method="post" action="../customer/home.php" onsubmit="return validate()">
						<input type="submit" value="Cash" >
				</form>

</div>
</div>

</body>
</html>