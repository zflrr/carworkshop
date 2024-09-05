
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMOTIVE WORKSHOP | HOME </title>
	<link rel="stylesheet" href="../css/customercss.css">
</head>
<body>

<div class="topnav">
	<div class="topnav-left">
  <a href="../customer/home.php"><img src= "../pictures/logo.png"></a>
  </div>
  
  <div class="topnav-right">
  <div class = "user">
  <a href="../index.php"><img src= "..\pictures\user.png"></a>
  </div>
  <a href="../customer/userupdate.php">User Info</a>
  <a href="../customer/takepicture.php">Car Register</a>
  <a href="../customer/home.php">Home</a>
  </div>
</div>

<center>
<div class="overview">
<br>
<h2> Welcome Back , Zafri. </h2>
</div>
            
<div class="row">
<div class= "inside">
<div class = " title">
<p> Car List </p>
</div>

<table class="userview">
 <thead>
                <tr>
                  <th>Plate No.</th>
                  <th>Model Name</th>
                   <th>Owner Name</th>
				   <th>Action</th>
                </tr>
              </thead>
				<tr>
                  <td>RIMAU6815</td>
				  <td>Perodua Axia</td>
				  <td>Zafri Haikal</td>
				  <td><a href="../customer/updatecar.php">Edit</a>
				   <a>Delete</a>
				   <a href="../customer/viewcar.php">view</a></td>
                </tr>			  
</table>
</div>

<div class= "inside">
<div class = " title">
<p> Service List </p>
</div>

<table class="userview">

 <thead>
                <tr>
                  <th>Service ID</th>
				  <th>Plate Number</th>
                  <th>Status</th>
				   <th>Action</th>
                </tr>
              </thead>
			 
			 	<tr>
                  <td>11672</td>
				  <td>RIMAU6815</td>
				  <td>Completed</td>
				  <td><a href="../customer/invoice.pdf" download="invoiceprint">Print</a>
                </tr>
				
				<tr>
                  <td>18912</td>
				  <td>RIMAU6815</td>
				  <td>Payment Need</td>
				  <td><a href="../customer/paymethod.php">Pay Now</a>
                </tr>
				
				<tr>
                  <td>17712</td>
				  <td>CWG1421</td>
				  <td>Not Complete</td>
                </tr>

</table>
</div>
</div>




</body>
</html>