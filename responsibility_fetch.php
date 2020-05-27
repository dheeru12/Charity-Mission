<?php

$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';
if (isset($_POST['query']))
{
    
    $search= mysqli_real_escape_string($connect, $_POST['query']);
    $query = "SELECT * FROM responsibility_master WHERE description LIKE '%".$search."%' OR resp_cd LIKE '%".$search."%' LIMIT 5";
}
 else {
     
$query = "SELECT * FROM responsibility_master ORDER BY Description LIMIT 5";    
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-hover " id = "resp_table">
    <tr>
     <th>Responsibility code</th>
     <th>Description</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td >'.$row["resp_cd"].'</td>
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