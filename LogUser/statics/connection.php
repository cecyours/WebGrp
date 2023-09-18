<?php
    // connect to mysqli
    $con = mysqli_connect("localhost","root","","db_student_data");

    if(!isset($_SESSION))
    {
        session_start();
    }
    
?>  