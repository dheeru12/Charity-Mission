<?php
$connect = mysqli_connect('localhost', 'root','','mission_db');
$output = '';

switch ($_POST['geo']){
    case 'country_master' : $col = 'country_cd';
    break;
    case 'state_master': $col = 'state_cd';
        break;
    default : $col = 'district_cd'; 
        $flag =true;

}
 if ($_POST['search_key'] !=='' && $_POST['geo'] !=='district_master'){
    
    $search= mysqli_real_escape_string($connect, $_POST['search_key']);
    $query = "SELECT * FROM ". $_POST['geo']." WHERE description LIKE '%".$search."%' OR $col LIKE '%".$search."%' LIMIT 5"; 
 }
 elseif($_POST['search_key'] !=='' && $_POST['geo'] ==='district_master')
 {
     
     $search= mysqli_real_escape_string($connect, $_POST['search_key']);
    $query = "SELECT d.district_cd, d.description FROM district_master d join state_master s on d.state_cd = s.state_cd WHERE d.description LIKE '%".$search."%' OR district_cd LIKE '%".$search."%' OR d.state_cd LIKE '%".$search."%' OR s.state_cd LIKE '%".$search."%' LIMIT 5"; 
 }
 
else
{
    
    $query = "SELECT * FROM ".$_POST['geo']." order by description LIMIT 5";
    
}


$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table-bordered table-hover " id = "geotable">
    <tr>
     <th>code</th>
     <th>Description</th>
     
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td >'.$row["$col"].'</td>
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