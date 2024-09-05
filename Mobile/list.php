<?php
include("../db_conn.php");
$sql="select * from mechanic";
$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
while($r=mysqli_fetch_array($res,MYSQLI_ASSOC)){
$json[]=$r;
}
echo json_encode($json,JSON_UNESCAPED_UNICODE);
mysqli_free_result($res);
mysqli_close($conn);
?>