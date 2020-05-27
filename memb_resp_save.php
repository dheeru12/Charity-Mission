<?php
$user=$_SESSION['user'];

$connect = mysqli_connect('localhost', 'root','','mission_db');
$member_no=$_POST['mem_no'];$resp_cd=$_POST['resp_cd'];$active=$_POST['active'];$d= date("Y/m/d");
$query="INSERT INTO `member_responsibility`(`member_no`, `resp_cd`, `active`, `ent_date`, `user_id`) VALUES ('$member_no','$resp_cd','$active','$d','$user');";
        
$result=mysqli_query($connect, $query);

if($result!=TRUE){
        echo mysqli_error($connect);
    }
    
    echo "done";
?>
