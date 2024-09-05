<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | LOGIN</title>
	<link rel="stylesheet" type="text/css" href="..\css\style.css">

	<script>
        function validate(){
          var username = document.form.username.value;
		  var name = document.form.name.value;
          var password = document.form.password.value;
		  var phoneNum = document.form.phoneNum.value;
		  var address = document.form.address.value;
		  var email = document.form.email.value;
          
          if (username==null || username=="")
          {
              alert("Username cannot be blank");
              return false;
          }
          else if (name== null || name=="")
          {
              alert("Name cannot be blank");
              return false;
          }
		  else if (password== null || password=="")
          {
              alert("Password cannot be blank");
              return false;
          }
		  else if (phoneNum== null || phoneNum=="")
          {
              alert("Phone Number cannot be blank");
              return false;
          }
		  else if (address== null || address=="")
          {
              alert("Address cannot be blank");
              return false;
          }
		  else if (email== null || email=="")
          {
              alert("Email cannot be blank");
              return false;
          }

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
			
				<h2>REGISTER</h2>
				
				<form name="form" action="../customer/scanpage.php" method = "post" onsubmit="return validate()">
					<div class="inputBx">
					<span>Username</span>
					<input type="text" name="username">
					</div>
					<div class="inputBx">
					<span>Name</span>
					<input type="text" name="name">
					</div>
					<div class="inputBx">
					<span>Password</span>
					<input type="password" name="password">
					</div>
					<div class="inputBx">
					<span>Phone Number</span>
					<input type="text" name="phoneNum">
					</div>
					<div class="inputBx">
					<span>address</span>
					<input type="text" name="address">
					</div>
					<div class="inputBx">
					<span>email</span>
					<input type="text" name="email">
					</div>
					<div class="inputBx">
					<label><input type="submit" value="Next" name="Next"></label>
					</div>
				</form>
				
				
				
		</div>
		</div>
		<footer>


</footer>
	</section>
</body>
</html>
	