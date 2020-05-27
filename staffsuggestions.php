<?php 
$connect = mysqli_connect('localhost', 'root','','mission_db');

if(isset($_POST['bldgrpsuggest'])){
    $blggrp=$_POST['bldgrpsuggest'];
    $query="select * from blood_grp_master where description like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "bgtable">
        <tr>
         <th>blood_grp_cd</th>
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
        
}


if(isset($_POST['dsgnsuggest'])){
    $blggrp=$_POST['dsgnsuggest'];
    $query="select * from responsibility_master where description like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "dgtable">
        <tr>
         <th>resp_cd</th>
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
        
}

if(isset($_POST['mtonguesuggest'])){
    $blggrp=$_POST['mtonguesuggest'];
    $query="select * from language_master where description like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "mtable">
        <tr>
         <th>lang_cd</th>
         <th>Description</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["lang_cd"].'</td>
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

if(isset($_POST['magsuggest'])){
    $blggrp=$_POST['magsuggest'];
    $query="select * from language_master where description like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "magtable">
        <tr>
         <th>lang_cd</th>
         <th>Description</th>
        </tr>
     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>
        <td >'.$row["lang_cd"].'</td>
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

if(isset($_POST['cityid'])){
    $blggrp=$_POST['cityid'];
    $query="select * from pincode_master where city like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "pretable">
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
        <td >'.$row["district_cd"].'</td>
        <td >'.$row["state_cd"].'</td>
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
if(isset($_POST['pincodeid'])){
    $blggrp=$_POST['pincodeid'];
    $query="select * from pincode_master where pincode like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "pretable">
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
        <td >'.$row["district_cd"].'</td>
        <td >'.$row["state_cd"].'</td>
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
if(isset($_POST['percityid'])){
    $blggrp=$_POST['percityid'];
    $query="select * from pincode_master where city like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "pertable">
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
        <td >'.$row["district_cd"].'</td>
        <td >'.$row["state_cd"].'</td>
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
if(isset($_POST['perpincodeid'])){
    $blggrp=$_POST['perpincodeid'];
    $query="select * from pincode_master where pincode like '$blggrp%'";
    $result= mysqli_query($connect, $query);
    
   if(mysqli_num_rows($result) > 0)
    {
     $output = '
      <div class="table-responsive">
       <table class="table table-bordered table-hover " id = "pertable">
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
        <td >'.$row["district_cd"].'</td>
        <td >'.$row["state_cd"].'</td>
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