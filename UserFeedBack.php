<?php

session_start();
require_once './classes/DbConnector.php';
require_once './classes/UserFeedBack.php';

$dbcon = new \classes\DbConnector();
$con = $dbcon->getConnection();

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    if (isset($_POST['submit'])) {
        if (isset($_POST['feedback']) && isset($_POST['feedback'])) {
            $userId = $_SESSION['user_id'];
            $user_feedback = $_POST['feedback'];
            $visbility_option = "NO";
            $user_feedback_obj = new \classes\UserFeedBack($userId, $user_feedback, $visbility_option);
            $user_feedback = $user_feedback_obj->addFeedBack($con);
            if($user_feedback){
                header("Location:index.php?status=1");
            }
        }
    }
} else {
    header("Location:Login.php");
}

