<?php
//fetch.php
include("..\db_conn.php");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT * FROM mechanic WHERE mechanicId LIKE '%".$search."%'
 ";
}
else{
 $query = "SELECT * FROM mechanic ORDER BY mechanicId";
 $query = ""; 
}
if ($query!=""){
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
       $output .= '<div class="table-responsive">
       <table class="table table bordered" style="font-size: 20px; width: 50%; text-align: left; padding: 8px;"><tr>	
      <th>Mechanic Id</th>
      <th>Name</th>
      <th>Telephone Number</th>
      <th>Username</th>
      </tr>';
    while($row = mysqli_fetch_array($result)){
        $output .= '
	<tr>
	<td>'.$row["mechanicId"].'</td>
	<td>'.$row["name"].'</td>
	<td>'.$row["telNo"].'</td>
	<td>'.$row["username"].'</td>
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
