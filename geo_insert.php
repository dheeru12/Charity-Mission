<?php
$con = mysqli_connect('localhost','root','','mission_db');
if(isset($_POST['code'])){
         $code = $_POST['code'];
        $desc = $_POST['description'];
        $table= $_POST['rad'];
        $state_code =$_POST['geo_state'];
        $state_name =$_POST['geo_state_name'];
        
        if($table !=='district_master')
        {
        $query = "insert into $table values('$code','$desc')";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/geographical_area_master.php");
}

else{
    $query = "insert into $table values('$code','$desc','$state_code')";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/geographical_area_master.php");

    
}
}