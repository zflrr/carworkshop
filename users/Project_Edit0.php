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
$Rdate= @$_POST['Rdate'];
$Rtime= @$_POST['Rtime'];
$Retdate= @$_POST['retdate'];
$comment= @$_POST['comment'];
$projNo = @$_POST['edit_id'];
$price = @$_POST['price'];			
		
			
			$sql2=("UPDATE `customer` SET `firstName`='$fname',`lastname`='$lname',`icNo`='$id',`telNo`='$telNo',`address`='$address' WHERE custId = ( select custId from mainproject where projNo=$projNo )");
			$result=mysqli_query($conn, $sql2) or die ("Error: " .mysqli_error($conn));

			
			$sql3=("UPDATE `vehicle` SET `model`='$model',`year`='$year' WHERE custId = ( select custId from mainproject where projNo=$projNo )");
			$result = mysqli_query( $conn, $sql3 ) or die ("Error: " .mysqli_error($conn));

			
			$sql4=("UPDATE `mainservice` SET `description`='$desc',`addCost`='$add', `serviceId`='$services', serviceTotal= '$price' WHERE projNo = ( select projNo from mainproject where projNo=$projNo )");
			$result = mysqli_query( $conn,$sql4 ) or die ("Error: " .mysqli_error($conn));

			$sql5=("UPDATE `mainproject` SET `dateReceive`='$Rdate',`timeReceive`='$Rtime',`dateReturn`='$Retdate',`comment`='$comment' WHERE custId = ( select custId from mainproject where projNo=$projNo )");
			$result = mysqli_query( $conn,$sql5 ) or die ("Error: " .mysqli_error($conn));
			
			
			
			if($result===true)
			{
             header("location: ../users/Home.php?msg=Update successfully!");
			}
		
        else {
        header("location: ../users/Home.php?msg=Try again!");
    }
	
	
    mysqli_close($conn);
}

?>