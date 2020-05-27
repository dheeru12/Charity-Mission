<?php
$connect = mysqli_connect('localhost', 'root','','mission_db');

$sno=$_POST['sno'];$title=$_POST['title'];$name=$_POST['name'];$type=$_POST['type'];$sex=$_POST['sex'];$dob=$_POST['dob'];$doj=$_POST['doj'];$mstatus=$_POST['mstatus'];$spno=$_POST['spno'];
$dom=$_POST['dom'];$bgrp=$_POST['bgrp'];$ofcode=$_POST['ofcode'];$designation=$_POST['designation'];$mtongue=$_POST['mtongue'];$mlang=$_POST['magazinelang'];$qualification=$_POST['qualification'];
$preadd=$_POST['preadd'];$precity=$_POST['precity'];$predistrict=$_POST['predistrict'];$prepincode=$_POST['prepincode'];$prestate=$_POST['prestate'];$prephone=$_POST['prephone'];
$permadd=$_POST['permadd'];$percity=$_POST['percity'];$perdistrict=$_POST['perdistrict'];$perpincode=$_POST['perpincode'];$perstate=$_POST['perstate'];$perphone=$_POST['perphone'];
$mno1=$_POST['mno1'];$mno2=$_POST['mno2'];$email=$_POST['email'];$status=$_POST['status'];
$date= date("Y/m/d");
$query="INSERT INTO `staff`(`staff_no`, `title`, `name`, `sex`, `dob`, `doj`, `dom`, `doi`, `qualification`, `blood_grp`, `marital_st`, `spouse_no`, `office_cd`, `admn_area`, `district_cd`, `designation`, `pf_no`, `pres_add`, `pres_city`, `pres_pin`, `pres_dist`, `perm_add`, `perm_city`, `perm_pin`, `perm_dist`, `perm_phone`, `e_mail_id`, `mobile_1`, `mobile_2`, `hus_staff_no`, `ordain_status`, `mother_tongue`, `mag_lang`, `left_org`, `leaving_dt`, `left_reason`, `ent_date`, `user_id`) VALUES "
        . "('$sno','$title','$name','$sex','$dob','$doj','$dom','asd','$qualification','$bgrp','$mstatus','$spno','$ofcode','a001','c007','$designation','$prephone','$preadd','$precity','$prepincode','$predistrict','$permadd','$percity','$perpincode','$perdistrict','$perphone','$email','$mno1','$mno2','sasd','$status','$mtongue','$mlang','no','12/3/23','jkd',$date,'u001')";

$result=mysqli_query($connect, $query);

if($result!=TRUE){
        echo mysqli_error($connect);
    }
    
    echo "done";