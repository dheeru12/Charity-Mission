<?php
$connect = mysqli_connect('localhost', 'root','','mission_db');
if(isset($_POST['suggestion'])){
    $dist=$_POST['suggestion'];
    $query = "select * from member where name like '$dist%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "mtable">
        <tr>
         <th>member no</th>
         <th>name</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["member_no"].'</td>
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

}
if(isset($_POST['respsuggestion'])){
    $dist=$_POST['respsuggestion'];
    $query = "select * from responsibility_master where description like '$dist%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "mtable">
        <tr>
         <th>member no</th>
         <th>name</th>
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

}
?>