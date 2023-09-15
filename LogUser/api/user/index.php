<?php 
    require '../../statics/connection.php';

    // check the request


    if(isset($_POST['request_']) && $_POST['request_']=="create_user")
    {
        // store post to variables.. 

        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPass'];

        // create INSERT query
        $query = "INSERT INTO tbl_user_record(user_name,user_email,password) VALUES('$userName','$userEmail','$userPass')";

        $result = mysqli_query($con,$query);

        if($result)
        {
            $response = array(
                "status"=>"Success",
                "message"=>"User created successfully",
                "color"=>"green"
            );
        }
        else
        {
            $response = array(
                "status"=>"Failed",
                "message"=>"User failed successfully",
                "color"=>"red"

            );
        }

        echo json_encode($response);
        
    }
    
?>