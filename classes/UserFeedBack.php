<?php

namespace classes;

use PDO;

class UserFeedBack {
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
    private $feedback_id;
    private $userId;
    private $user_feedback;
    private $visbility_option;
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
    function __construct($userId, $user_feedback, $visbility_option) {
        $this->userId = $userId;
        $this->user_feedback = $user_feedback;
        $this->visbility_option = $visbility_option;
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
    
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
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

<<<<<<< HEAD
    public function addFeedBack($con) {
        try {
=======
<<<<<<< HEAD
    public function addFeedBack($con) {
        try {
=======
<<<<<<< HEAD
    public function addFeedBack($con) {
        try {
=======
    public function addFeedBack($con){
        try{
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
            $query = "INSERT INTO feedback (feedback, visible_option, user_id) VALUES (?, ?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->user_feedback);
            $pstmt->bindValue(2, $this->visbility_option);
            $pstmt->bindValue(3, $this->userId);
<<<<<<< HEAD

            return $pstmt->execute();
        } catch (PDOException $exc) {
=======
<<<<<<< HEAD

            return $pstmt->execute();
        } catch (PDOException $exc) {
=======
<<<<<<< HEAD

            return $pstmt->execute();
        } catch (PDOException $exc) {
=======
                    
            return $pstmt->execute();
        } catch (PDOException $exc){
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
            die("ERROR in addFeedBack Function" . $exc->getMessage());
        }
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
    public static function getAllFeedBack($con) {
        try {
            $querry = "SELECT * FROM feedback";
            $pstmt = $con->prepare($querry);
            $pstmt->execute();

            while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
                $feedback_id = $row['feed_back_id'];
                $feedback = $row['feedback'];
                $visible_option = $row['visible_option'];
                $user_id = $row['user_id'];

                $feedback_details = new UserFeedBack($user_id, $feedback, $visible_option);
                $feedback_list[] = $feedback_details;
            }
        } catch (PDOException $exc) {
            die("ERROR in getAllFeedBack Function" . $exc->getMessage());
        }

        return $feedback_list;
    }

    public function getFeedbackIdByName($feedback, $con) {
        try {
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            $query = "SELECT feed_back_id FROM feedback WHERE feedback = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $feedback);
            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['feed_back_id'];
            } else {
                return null;
            }
        } catch (Exception $exc) {
            die("ERROR in getFeedbackIdByName Function" . $exc->getMessage());
        }
    }

    public function updateUserFeedackVisibleOption($con, $id) {
        try {
            $query = "UPDATE feedback SET visible_option = ? WHERE feed_back_id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->visbility_option);
<<<<<<< HEAD
            $pstmt->bindValue(2, $id);
=======
<<<<<<< HEAD
            $pstmt->bindValue(2, $id);
=======
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
            return $pstmt->execute();
        } catch (Exception $exc) {
            die("ERROR in updateUserFeedackVisibleOption Function" . $exc->getMessage());
        }
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 249c05b3c0124672f7ae1691d55c4aac7c19ee82
>>>>>>> 326ac6510199d7842d67113b2c8122167ae2d165
>>>>>>> 27c2edbfde1cde670d9e64763e06462667594267
}
