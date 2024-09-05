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
          var password = document.form.password.value;
		 
          
          if (username==null || username=="")
          {
              alert("Username cannot be blank");
              return false;
          }
      
		  else if (password== null || password=="")
          {
              alert("Password cannot be blank");
              return false;
          }
		  else if (username!="zafflurrie" || password !="Zafri123" )
          {
              alert("Wrong Username/Password");
              return false;
          } 

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
			
				<h2>Login</h2>
				
		
				<form name="form" action="../customer/home.php" method = "post" onsubmit="return validate()">
					<div class="inputBx">
					<span>Username</span>
					<input type="text" name="username">
					</div>
					<div class="inputBx">
					<span>Password</span>
					<input type="password" name="password">
					</div>
					<div class="inputBx">
					<label><input type="submit" value="Sign in" name=""></label>
					</div>
				</form>
				
				
				Are you new ? Click Here <a href="../customer/register.php" style=" text-decoration:none;">Register Now!</a>
				
				
		</div>
		</div>
		<footer>


</footer>
	</section>
</body>
</html>
	