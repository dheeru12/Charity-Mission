<?php

$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';
if (isset($_POST['query']))
{
    $search= mysqli_real_escape_string($connect, $_POST['query']);
    $query = "SELECT * FROM profession_master WHERE Description LIKE '%".$search."%' OR Profession_cd LIKE '%".$search."%' LIMIT 5";
}
 else {
$query = "SELECT * FROM profession_master ORDER BY Description LIMIT 5";    
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-hover " id = "tableMain">
    <tr>
     <th>Profession code</th>
     <th>Description</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td >'.$row["Profession_cd"].'</td>
    <td >'.$row["Description"].'</td>
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