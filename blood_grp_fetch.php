<?php

$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';
if (isset($_POST['query']))
{
    
    $search= mysqli_real_escape_string($connect, $_POST['query']);
    $query = "SELECT * FROM blood_grp_master WHERE description LIKE '%".$search."%' OR blood_grp_cd LIKE '%".$search."%' LIMIT 5";
}
 else {
     
$query = "SELECT * FROM blood_grp_master ORDER BY Description LIMIT 5";    
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-hover " id = "blood_grp_table">
    <tr>
     <th>Blood group code</th>
     <th>Description</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td >'.$row["blood_grp_cd"].'</td>
    <td >'.$row["description"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>