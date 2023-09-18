<?php 
    require '../../statics/connection.php';

    // check the request

    if(isset($_POST['request_']) && $_POST['request_']=='logout_user')
    {
        session_destroy();

        $response = array(
            "status"=>"Success",
            "message"=>"User logout successfully",
            "color"=>"green"
        );

        echo json_encode($response);
    }

    if(isset($_POST['request_']) && $_POST['request_']=='verify_user')
    {
        $userEName = $_POST['userEName'];
        $userPass = $_POST['userPass'];
        
        // check the crediential are exisist or not...
        $query = "SELECT * FROM tbl_user_record WHERE user_name='$userEName' OR user_email='$userEName' AND password='$userPass'";

        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['user_name'];
            $response = array(
                "status"=>"Success",
                "message"=>"User Logim successfully $row[user_name]",
                "color"=>"green"
            );
        }
        else{
            $response = array(
                "status"=>"Failed",
                "message"=>"Invalid/ username or password..  $userEName, $userPass",
                "color"=>"red"
            );
        }
        echo json_encode($response);
    }
    if(isset($_POST['request_']) && $_POST['request_']=="create_user")
    {
        // store post to variables.. 

        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPass = $_POST['userPass'];

        // create INSERT query
        $query = "INSERT INTO tbl_user_record(user_name,user_email,password) VALUES('$userName','$userEmail','$userPass')";

        $result = mysqli_query($con,$query);

         $user_id = mysqli_insert_id($con);

        if($result)
        {

            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $userName;

            $response = array(
                "status"=>"Success",
                "message"=>"User created successfully $user_id",
                "color"=>"green"
            );
        }
        else
        {
            $response = array(
                "status"=>"Failed",
                "message"=>"User failed successfully $user_id",
                "color"=>"red"

            );
        }

        echo json_encode($response);
        
    }
    
?>