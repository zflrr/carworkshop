<?php
/* include db connection file */
include("../db_conn.php");

if(isset($_POST['submit'])){
/* capture values from HTML form */
$fname= @$_POST['fname'];
$lname= @$_POST['lname'];
$id= @$_POST['id'];
$telNo= @$_POST['telNo'];
$address= @$_POST['address'];
$model= @$_POST['model'];
$year= @$_POST['year'];
$services= @$_POST['services'];
$add= @$_POST['add'];
$desc= @$_POST['desc'];
$price= @$_POST['price'];
$Rdate= @$_POST['Rdate'];
$Rtime= @$_POST['Rtime'];
$mechanicId= @$_POST['mechanicId'];


		$qry="SELECT projNo FROM mainproject";
        $result = mysqli_query($conn, $qry) or die ("Error: " .mysqli_error($conn));
  

        if(mysqli_num_rows($result) >= 0){
			
			$sql2=("INSERT INTO customer(`custId`, `firstName`, `lastname`, `icNo`, `telNo`, `address`) VALUES (NULL,'$fname','$lname','$id','$telNo','$address')");
			$result=mysqli_query($conn, $sql2) or die ("Error: " .mysqli_error($conn));
			$cust_ID = mysqli_insert_id( $conn );

			
			$sql3=("INSERT INTO vehicle(`regNum`, `custId`, `model`, `year`) VALUES (NULL,'$cust_ID','$model','$year')");
			$result = mysqli_query( $conn, $sql3 ) or die ("Error: " .mysqli_error($conn));
			$reg_num = mysqli_insert_id( $conn );

			
			$sql4=("INSERT INTO mainproject(`projNo`, `regNum`, `custId`, `mechanicId`, `dateReceive`, `timeReceive`) VALUES (NULL,'$reg_num','$cust_ID','$mechanicId','$Rdate','$Rtime')");
			$result = mysqli_query( $conn,$sql4 ) or die ("Error: " .mysqli_error($conn));
			$proj_No = mysqli_insert_id( $conn );

			$sql5=("INSERT INTO mainservice(`maintenanceId`, `projNo`, `serviceId`, `description`, `addCost` , `serviceTotal`) VALUES ('NULL','$proj_No','$services','$desc','$add' , '$price')");
			$result = mysqli_query( $conn,$sql5 ) or die ("Error: " .mysqli_error($conn));
			
             header("location: ../users/Register.php?msg=added successfully!");
        }
		
        else {
        header("location: Register.php?msg=Try again!");
    }
	
    mysqli_close($conn);




}

?>