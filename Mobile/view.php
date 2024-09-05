<?php

include("../db_conn.php");

$sid=@$_POST['sid']; //if you want to test

$sql="select * from mechanic where mechanicId='$sid' ";

$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

$r=mysqli_fetch_array($res,MYSQLI_NUM);

$json[]=$r;

echo json_encode($json,JSON_UNESCAPED_UNICODE);

mysqli_free_result($res);

mysqli_close($conn);

?>