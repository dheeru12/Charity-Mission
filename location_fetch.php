<?php

$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';
if (isset($_POST['location']))
{
    
    $search= mysqli_real_escape_string($connect, $_POST['location']);
    $query = "SELECT city,pincode,d.description district,s.description state FROM pincode_master p join district_master d on d.district_cd=p.district_cd join state_master s on s.state_cd= d.state_cd WHERE city LIKE '%".$search."%' OR pincode LIKE '%".$search."%' OR d.description LIKE '%".$search."%' OR s.description LIKE '%".$search."%' LIMIT 5";
}

 else {
     
$query = "SELECT city,pincode,d.description district,s.description state FROM pincode_master p join district_master d on d.district_cd=p.district_cd join state_master s on s.state_cd= d.state_cd ORDER BY city LIMIT 5";    
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-hover " id = "location_table">
    <tr>
     <th>city</th>
     <th>pincode</th>
     <th>district</th>
     <th>state</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td >'.$row["city"].'</td>
    <td >'.$row["pincode"].'</td>
    <td >'.$row["district"].'</td>
    <td >'.$row["state"].'</td>
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