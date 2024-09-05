<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<section>
		<div class="imgBx">
			<img src="pictures\amotive.png">
		</div>
		<div class="contentBx">
		
			<div class="formBx">
			
				<h2>Login</h2>
				
				<?php if (isset($_GET['error'])){ 
				?>
					<p class="error"><?php echo $_GET['error'];?></p>
				<?php
				} ?>
				
				<form action="login.php" method = "post">
					<div class="inputBx">
					<span>Username</span>
					<input type="text" name="uname">
					</div>
					<div class="inputBx">
					<span>Password</span>
					<input type="password" name="password">
					</div>
					<div class="inputBx">
					<label><input type="submit" value="Sign in" name=""></label>
					</div>
				</form>

		</div>
		</div>
		<footer>

</footer>
	</section>
</body>
</html>
	