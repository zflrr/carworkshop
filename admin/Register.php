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
	<link rel="stylesheet" href="../css/homeAdminstyle.css">
</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="../admin/HomeAdmin.php"><img src= "../pictures/logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="../logout.php"><img src= "../pictures/user.png"></a>
  </div>
  <a href="../admin/History_Admin.php">History</a>
  <a href="Register.php">User Register</a>
  <a href="homeAdmin.php">Home</a>
  </div>
</div>

<div class="register"><br>
	<h2> Register form</h2>
			<?php if (isset($_GET['msg'])){ 
				?>
					<p class="msg"><?php echo $_GET['msg'];?></p>
				<?php
				} ?>
				<?php if (isset($_GET['error'])){ 
				?>
					<p class="error"><?php echo $_GET['error'];?></p>
				<?php
				} ?>
				
				<br>
		<div class= "card">
		<div class ="container">
	<div class = " title">
	<p> User Information </p>
	</div>
	<section>
		<div class= "FormBx">
	<form  method="post" action="RegisterAdmin0.php"action="RegisterAdmin0.php">
	<div class="inputBx">
	<span>Name:</span><br>
	<input type="text" name="name">
	</div>
	<br>
	<div class="inputBx">
	<span>Telephone Number:</span><br>
	<input type="text" name="telNo">
	</div>
	<br>
	<div class="inputBx">
	<span>Username:</span><br>
	<input type="text" name="username">
	</div>
	<br>
	<div class="inputBx">
	<span>Password:</span><br>
	<input type="text" name="password">
	</div>
	<div class="inputBx">
	<br>
	<input type="submit" class="btn" name="submit" value="Submit"> 
	</div>
	
</form>





</div>
</section>
</div>
</div>
</div>


</body>

</html>

<?php
}