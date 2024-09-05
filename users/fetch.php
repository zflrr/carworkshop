<?php
//fetch.php
include("../db_conn.php");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT a.projNo,a.dateReceive,a.dateReturn,a.comment , b.model, c.firstName, c.telNo, d.name from mainproject a,vehicle b, 
 customer c, mechanic d WHERE a.regNum = b.regNum and c.custId = a.custId AND d.mechanicId = a.mechanicId and projNo LIKE '%".$search."%'
 ";
}
else{
 $query = "SELECT a.projNo,a.dateReceive,a.dateReturn,a.comment , b.model, c.firstName, c.telNo, d.name from mainproject a,vehicle b, customer c, mechanic d 
 WHERE a.regNum = b.regNum and c.custId = a.custId AND d.mechanicId = a.mechanicId ORDER BY projNo";
 $query = ""; 
}
if ($query!=""){
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
       $output .= '<div class="table-responsive" ">
       <table class="table table bordered" style= "border-collapse:collapse; width:100%; text-align:justify;"><tr>	
      <th>Project Number</th>
      <th>Name</th>
	  <th>Telephone No.</th>
	  <th>model</th>
      <th>Date Receive</th>
	    <th>Date Return</th>
		<th>Mechanic Name</th>
		 <th>Comment</th>
      </tr>';
    while($row = mysqli_fetch_array($result)){
        $output .= '
	<tr>
	
	
	<td>'.$row["projNo"].'</td>
	<td>'.$row["firstName"].'</td>
	<td>'.$row["telNo"].'</td>
	<td>'.$row["model"].'</td>
	<td>'.$row["dateReceive"].'</td>
	<td>'.$row["dateReturn"].'</td>
	<td>'.$row["name"].'</td>
	<td>'.$row["comment"].'</td>
	
	</tr>
	';
    }
    echo $output;
 }
 else{
    echo 'Data Not Found';
 }
}

?>

