<?php
$user=$_SESSION['user'];
$connect = mysqli_connect('localhost', 'root','','mission_db');

$sup_grp_no=$_POST['sup_grp_no'];$title=$_POST['title'];$name=$_POST['name'];$leader1=$_POST['leader_1'];$leader2=$_POST['leader_2'];$ofcode=$_POST['office_code'];$dcode=$_POST['district_code'];
$d=date('Y/m/d');
$s=$_POST['status'];


$query="INSERT INTO `supporting_grp_master`(`sup_grp_no`, `title`, `name`, `leader_no`, `leader_no_2`, `office_cd`, `district_cd`, `admn_area`, `ent_date`, `user_id`, `status`, `given_upto`) VALUES "
        . "('$sup_grp_no','$title','$name','$leader1','$leader2','$ofcode','$dcode','a001','$d','$user','$s','');";
        
$result=mysqli_query($connect, $query);

if($result!=TRUE){
        echo mysqli_error($connect);
    }
    
    echo "done";
?>