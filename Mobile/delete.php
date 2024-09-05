<?php

include("../db_conn.php");

$sid=@$_POST['sid']; //$sid=1;

$sql="delete from mechanic where mechanicId=$sid";

$res=mysqli_query($conn,$sql) or
die(mysqli_error($conn));

if ($res==1) echo "OK_DEL";

mysqli_close($conn);

?>