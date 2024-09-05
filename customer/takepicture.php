
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | TAKE PICTURE </title>
	<link rel="stylesheet" href="../css/customercss.css">

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

<br>
				<center>
				<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
				<button><label for="file" style="cursor: pointer;">Upload Image</label></button>
				<br><br>
				<p><img id="output" width="350" /></p>
				<br><br>
				</center>

				<form name="form" method="post" action="registercar.php" id="form" onsubmit="return validate()">

						
						<br>
						<input type="submit" value="Take Picture" >
				</form>

</div>
</div>

</body>
</html>