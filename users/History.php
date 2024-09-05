<?php

session_start();

if(isset($_SESSION['username'])&&isset($_SESSION['mechanicId'])){

?>

<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | HISTORY</title>
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
	<h2> History </h2>
	
	<div class= "card">
		
			<input type="text" name="search_text" id="search_text" placeholder="Search by project ID" />
			<br>
			<center>
			<div id="result" name="result" style="margin-left: 20px;"></div>
			</center>
	</div>
</div>

<script>
$(document).ready(function(){
load_data();

function load_data(query){
     $.ajax({
	url:"fetch.php",
	method:"POST",
	data:{query:query},
	success:function(data){
	$('#result').html(data);	}
	});
	}
     $('#search_text').keyup(function(){
	var search = $(this).val();
	if(search != ''){
		load_data(search);
	}else{
		load_data();
	}
	});
});
</script>



</body>

</html>
<?php
}