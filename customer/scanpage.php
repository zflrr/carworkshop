<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="..\css\style.css">
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
	<section>
		<div class="imgBx">
			<img src="..\pictures\amotive.png">
		</div>
		<div class="contentBx">
		
			<div class="formBx">
			
				<h2>PLEASE SCAN YOUR CAR PLATE</h2>
				
				<center>
				<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
				<button><label for="file" style="cursor: pointer;">Upload Image</label></button>
				<br><br>
				<p><img id="output" width="350" /></p>
				<br><br>
				</center>
				
				<form name="form" action="../customer/carInformation.php" method = "post" onsubmit="return validate()">

					<div class="inputBx">
					<label><input type="submit" value="Submit" name=""></label>
					</div>

				</form>

				
				
				
				
			</div>
		</div>
		<footer>


</footer>
	</section>
</body>
</html>
	