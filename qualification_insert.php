<?php
$con = mysqli_connect('localhost','root','','mission_db');
if(isset($_POST['code'])){
         $code = $_POST['code'];
        $desc = $_POST['description'];
       
        $query = "select * from qualification_master where qual_cd='$code' ";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
           if ($no == 0){
        $query = "insert into qualification_master values('$code','$desc')";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/qualification_master.php");
           }
           else{
                $query = "update qualification_master set description ='$desc' where qual_cd = '$code' ";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/qualification_master.php");
               
           }
}
?>