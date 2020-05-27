<?php

$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';
if (isset($_POST['office']))
{
    $search= mysqli_real_escape_string($connect, $_POST['office']);
    $query = "SELECT * FROM office_field_cd WHERE name LIKE '%".$search."%' OR office_cd LIKE '%".$search."%' LIMIT 5";
}
 else {
$query = "SELECT * FROM office_field_cd ORDER BY name LIMIT 5";    
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-hover " id = "officetable">
    <tr>
     <th>Office code</th>
     <th>Name</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td >'.$row["office_cd"].'</td>
    <td >'.$row["name"].'</td>
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