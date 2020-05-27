<?php
session_start();
$code=$_POST['user_id'];
$pass=$_POST['pass'];
$con = mysqli_connect('localhost','root','','mission_db');
$query = "select * from login where username='$code' and password='$pass' ";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
if($no>0){
    $_SESSION['user']=$code;
    
     header("Location: http://localhost/Missionproject/landing.php");
    
}
 else {
     $msg = '<br /><font color="#FF0000">Invalid User Or Password </font><br />';
           $_SESSION['msg']=$msg;
           header("location:index.php");
     
}