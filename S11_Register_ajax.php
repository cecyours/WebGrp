<?php


$con = mysqli_connect("localhost", "root", "", "phpinterns") or die("error");

$username = $_POST['username'];
$userpassword = $_POST['userpassword'];
$useremail = $_POST['useremail'];
$userphone = $_POST['userphone'];
$usercourse = $_POST['usercourse'];

$sql = "INSERT INTO `usr_users`(`user_name`,`user_password`,`user_email`,`user_phone`,`user_course`) VALUE ('$username','$userpassword','$useremail','$userphone','$usercourse')";

$result = mysqli_query($con, $sql);  // main vastu


$response = array(
    "msg" => "error, sorry not inserted.."
);
if ($result) {

    $response = array(
        "msg" => "inserted successfully.."
    );
}

echo json_encode($response)
?>