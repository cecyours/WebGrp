<?php 

    $con = mysqli_connect("localhost","root","","db_student_data") or die("kites are flying..");

    // $stu_name = $_POST['s_name'];
    // $stu_mark = $_POST['s_mark'];

    // $sql  = "INSERT INTO `tbl_data`(`student_name`,`student_mark`) VALUES('$stu_name',$stu_mark);";

    // $result = mysqli_query($con,$sql);

    // if($result)
    // {
    //     echo "data inserted...";
    // }
    // else{
    //     echo "error aii....";
    // }

    /*
     $.ajax({
                type: "POST",
                url: "./S14_edit_student_data.php",
                data: {
                    id: id,
                    student_name: student_name,
                    student_mark: student_mark
                },
                success: function (response) {
                    $("#output").html(response);
                }
            });
            create php script to handle the request
    */ 
    $id = $_POST['id'];
    $student_name = $_POST['student_name'];
    $student_mark = $_POST['student_mark'];

    $sql  = "UPDATE `tbl_data` SET `student_name` = '$student_name',`student_mark` = '$student_mark' WHERE `id` = '$id';";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        echo "data inserted...";
    }
    else{
        echo "error aii....";
    }
?>