<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="..\css\style.css">
<script>
	function validate(){
		  return alert("Thank You For Sign Up, Please Login into Your Account.");
        }  
		</script>
</head>
<body>
	<section>
		<div class="imgBx">
			<img src="..\pictures\amotive.png">
		</div>
		<div class="contentBx">
		
			<div class="formBx">
			
				<h2>Car Information Register</h2>
				
				<form name="form" action="../customer/custlog.php" method = "post" onsubmit="return validate()">
					<div class="inputBx">
					<span>Plate Number</span>
					<input type="text" name="uname" placeholder="RIMAU6815" >
					</div>
					<div class="inputBx">
					<span>Model</span>
					<input type="password" name="password" placeholder="PERODUA AXIA">
					</div>
					<div class="inputBx">
					<span>Year</span>
					<input type="password" name="password" placeholder="2022">
					</div>
					<div class="inputBx">
					<span>Owner Name</span>
					<input type="password" name="password" placeholder="Zafri Haikal">
					</div>
					<div class="inputBx">
					<label><input type="submit" value="Sign Up" name=""></label>
					</div>
				</form>
				
				
		</div>
		</div>
		<footer>


</footer>
	</section>
</body>
</html>
	