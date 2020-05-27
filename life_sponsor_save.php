<?php
$connect = mysqli_connect('localhost', 'root','','mission_db');
$member_no=$_POST['mem_no'];$mem_name=$_POST['mem_name'];$occasion=$_POST['active'];$title=$_POST['title'];$name=$_POST['name'];$date=date('Y/m/d');$relation=$_POST['relation'];$remark=$_POST['remark'];$cdate=$_POST['date'];$amount=$_POST['amount'];
$query="INSERT INTO `life_sponsor`(`member_no`, `sponsor_reason`, `title`, `name`, `relation`, `cele_date`, `remark`, `ent_date`, `user_id`,`amount`) "
        . "VALUES ('$member_no','$occasion','$title','$name','$relation','$cdate','$remark','$date','u001','$amount')";
   
$result=mysqli_query($connect, $query);

if($result!=TRUE){
        echo mysqli_error($connect);
    }
    
    echo "done";
?>