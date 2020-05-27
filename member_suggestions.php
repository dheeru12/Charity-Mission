<?php
$connect = mysqli_connect('localhost', 'root','','mission_db');

if(isset($_POST['suggestion'])){
    $dist=$_POST['suggestion'];
    $query = "select * from district_master where description like '$dist%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "dtable">
        <tr>
         <th>code</th>
         <th>Description</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["district_cd"].'</td>
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
if(isset($_POST['professionsuggest'])){
    $proff=$_POST['professionsuggest'];
    $query="select * from profession_master where description like '$proff%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "ptable">
        <tr>
         <th>code</th>
         <th>Description</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["Profession_cd"].'</td>
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

if(isset($_POST['qualificationsuggest'])){
    $proff=$_POST['qualificationsuggest'];
    $query="select * from qualification_master where description like '$proff%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "qtable">
        <tr>
         <th>code</th>
         <th>Description</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["qual_cd"].'</td>
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

if(isset($_POST['ofcodesuggest'])){
    $proff=$_POST['ofcodesuggest'];
    $query="select * from office_field_cd where name like '$proff%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "oftable">
        <tr>
         <th>code</th>
         <th>name</th>
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
   
}

if(isset($_POST['sgnsuggest'])){
    $proff=$_POST['sgnsuggest'];
    $query="select * from sponsoring_grp_master where name like '$proff%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "sgtable">
        <tr>
         <th>spon_grp_no</th>
         <th>name</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["spon_grp_no"].'</td>
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


if(isset($_POST['citysuggest'])){
    $proff=$_POST['citysuggest'];
    $query="select * from pincode_master where city like '$proff%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "citytable">
        <tr>
         <th>city</th>
         <th>pincode</th>
         <th>district_cd</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["city"].'</td>
        <td >'.$row["pincode"].'</td>
        <td >'.$row["district_cd"].'</td>
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

if(isset($_POST['pincodesuggest'])){
    $proff=$_POST['pincodesuggest'];
    $query="select * from pincode_master where pincode like '$proff%' limit 5";
    $result= mysqli_query($connect, $query);
    if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "citytable">
        <tr>
         <th>city</th>
         <th>pincode</th>
         <th>district_cd</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["city"].'</td>
        <td >'.$row["pincode"].'</td>
        <td >'.$row["district_cd"].'</td>
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