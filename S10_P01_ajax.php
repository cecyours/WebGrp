<?php

$roll = $_POST['rollnox'];
$fname = $_POST['fnamex'];
$username = $_POST['usernamex'];

$msg = "welcome dude";
$describe = "Good is a term used to describe something that is morally right, favorable, or beneficial in various contexts. It is a subjective concept and can vary depending on individual perspectives, cultural norms, and specific situations. Generally, something is considered good if it brings about positive outcomes, contributes to well-being, or aligns with values that are widely accepted as positive";
$color = "green";

if ($roll > 50) {
    $msg = "blocked";
    $describe = "Blocked on account typically refers to a situation in which access or communication with a particular account or user has been restricted or prevented by a platform or service. This action is often taken to maintain privacy, security, or to manage interactions between users. When an account is blocked, it generally means that the person who initiated the block will not receive messages, notifications, or updates from the blocked account, and the blocked account may not have access to certain features or content of the blocking account.";
    $color = "red";

}

$response = array(
    'user' => $username,
    'msg' => $msg,
    'describe' => $describe,
    'color'=>$color,
    
);

echo json_encode($response);

    ?>