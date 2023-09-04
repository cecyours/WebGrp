<?php 

    $con = mysqli_connect("localhost","root","","db_student_data") or die("kites are flying..");

    $stu_name = $_POST['s_name'];
    $stu_mark = $_POST['s_mark'];

    $sql  = "INSERT INTO `tbl_data`(`student_name`,`student_mark`) VALUES('$stu_name',$stu_mark);";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "data inserted...";
    }
    else{
        echo "error aii....";
    }
?>