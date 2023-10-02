<?php
$con = mysqli_connect("localhost", "root", "", "db_student_data") or die("kites are flying..");

$id = $_POST['id'];

$sql = "DELETE FROM `tbl_data` WHERE `id` = $id";
$res = mysqli_query($con, $sql);


if ($res) {
    $res = array(
        "message" => "deleted data"
    );
} else {
    $res = array(
        "message" => "failed data"
    );
}
echo json_encode($res);
?>