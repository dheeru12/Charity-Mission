<?php
session_start();
$con = mysqli_connect('localhost','root','','mission_db');
if(isset($_POST['office_cd'])){
         $code = $_POST['office_cd'];
         $name = $_POST['name'];
         $addr = $_POST['addr'];
         $city = $_POST['city'];
         $pin = $_POST['pin'];
         $dist = $_POST['district'];
         $state = $_POST['state'];
         $date = date('d-m-y h:i:s');;
         
         
        $query = "select * from office_field_cd where office_cd='$code' ";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
           if ($no == 0){
                $q = "select district_cd from district_master where description='$dist' ";
        $res = mysqli_query($con, $q);
           while($row = mysqli_fetch_array($res)){
               $dist= $row[0];
           }
        $query = " INSERT INTO `office_field_cd` (`office_cd`, `name`, `addr`, `city`, `pin_code`, `admn_area`, `district_cd`, `opened_on`, `closed`, `closed_on`, `reason_clo`, `ent_date`, `user_id`) VALUES ('$code', '$name', '$addr', '$city', '$pin', NULL, '$dist', NULL, NULL, NULL, NULL,'$date', '".$_SESSION['user']."')";
//      echo "'$code', '$name', '$addr', '$city', '$pin', NULL,'$dist', NULL, NULL, NULL, NULL,'$date', '".$_SESSION['user']."')";
           
         $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/office_code.php");
           }
           else{
                $query = "update office_field_cd set name ='$name',addr='$addr',city='$city',pin_code='$pin',district_cd='$dist' where office_cd = '$code' ";
        $result = mysqli_query($con, $query);
        header("Location: http://localhost/Missionproject/office_code.php");
               
           }
}
?>