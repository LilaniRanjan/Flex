<?php

namespace classes;

use PDO;

class UserFeedBack {
    private $feedback_id;
    private $userId;
    private $user_feedback;
    private $visbility_option;
    
    function __construct($userId, $user_feedback, $visbility_option) {
        $this->userId = $userId;
        $this->user_feedback = $user_feedback;
        $this->visbility_option = $visbility_option;
    }
    
    function getFeedback_id() {
        return $this->feedback_id;
    }

    function getUserId() {
        return $this->userId;
    }

    function getUser_feedback() {
        return $this->user_feedback;
    }

    function getVisbility_option() {
        return $this->visbility_option;
    }

    function setFeedback_id($feedback_id) {
        $this->feedback_id = $feedback_id;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setUser_feedback($user_feedback) {
        $this->user_feedback = $user_feedback;
    }

    function setVisbility_option($visbility_option) {
        $this->visbility_option = $visbility_option;
    }

    public function addFeedBack($con){
        try{
            $query = "INSERT INTO feedback (feedback, visible_option, user_id) VALUES (?, ?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->user_feedback);
            $pstmt->bindValue(2, $this->visbility_option);
            $pstmt->bindValue(3, $this->userId);
                    
            return $pstmt->execute();
        } catch (PDOException $exc){
            die("ERROR in addFeedBack Function" . $exc->getMessage());
        }
    }

}
