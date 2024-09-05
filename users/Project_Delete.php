<?php
include("../db_conn.php");

	$projNo = $_GET['projNo'];
	
	$q1= "DELETE FROM customer where custId = ( select custId from mainproject where projNo=$projNo )";
	$res= mysqli_query($conn,$q1);

	
	$q2= "DELETE FROM vehicle where custId = ( select custId from mainproject where projNo=$projNo )";
	$res2= mysqli_query($conn,$q2);

	
	$q3= "DELETE FROM mainservice where projNo = ( select projNo from mainproject where projNo=$projNo )";
	$res3= mysqli_query($conn,$q3);

	
	$q4= "DELETE FROM mainproject where custId = ( select custId from mainproject where projNo=$projNo )";
	$res4= mysqli_query($conn,$q4);

	
if ($res && $res2 && $res3 && $res4) {
       header("location: ../users/Home.php?msg=Delete successfully!");
} else {
  header("location: ../users/Home.php?msg=Error delete!");
}
mysqli_close($conn);

?>
