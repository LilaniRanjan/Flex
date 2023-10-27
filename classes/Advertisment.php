<?php

namespace classes;

class Advertisment {
    private $advertisment_file;
    private $ad_title;
    private $user_id;
    
    function __construct($advertisment_file, $ad_title, $user_id) {
        $this->advertisment_file = $advertisment_file;
        $this->ad_title = $ad_title;
        $this->user_id = $user_id;
    }

    function getAdvertisment_file() {
        return $this->advertisment_file;
    }

    function getAd_title() {
        return $this->ad_title;
    }

    function getUser_id() {
        return $this->user_id;
    }

    function setAdvertisment_file($advertisment_file) {
        $this->advertisment_file = $advertisment_file;
    }

    function setAd_title($ad_title) {
        $this->ad_title = $ad_title;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function addAdvertismentDetails($con) {
        try {
            $query = "INSERT INTO advertisement (advertisment_file, user_id, ad_title) VALUES (?, ?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->advertisment_file);
            $pstmt->bindValue(2, $this->user_id);
            $pstmt->bindValue(3, $this->ad_title);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in Advertisment class addAdvertismentDetails Method: " . $exc->getMessage());
        }
    }
    
    
}
