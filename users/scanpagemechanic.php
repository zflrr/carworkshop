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
	<title>AMOTIVE WORKSHOP | SCAN PLATE</title>
	<link rel="stylesheet" href="../css/homestyle.css">
	<script>
	var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
	};

	function validate(){
		  return alert("Information Had Been Submitted");
        }  

	</script>
</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="../users/Home.php"><img src= "../pictures/logo.png"></a>
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


<center>
<div class="overview">
<br>
<h2> PLEASE SCAN YOUR CAR PLATE  </h2>

		
<div class= "inside">
<br>
				<center>
				<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
				<button><label for="file" style="cursor: pointer;">Upload Image</label></button>
				<br><br>
				<p><img id="output" width="250" /></p>
				<br><br>
				</center>
				
				<form name="form" action="../users/register.php" method = "post" onsubmit="return validate()">

					<div class="inputBx">
					<label><input type="submit" value="Submit" name=""></label>
					</div>

				</form>


</div>

</div>
</body>
</html>

<?php

} else {

header("Location: login.php");

}

?>