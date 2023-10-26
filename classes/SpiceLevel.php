<?php

namespace classes;

use PDO;

class SpiceLevel {
    private $spice_level;
    
    function __construct($spice_level) {
        $this->spice_level = $spice_level;
    }
    
    function getSpice_level() {
        return $this->spice_level;
    }

    function setSpice_level($spice_level) {
        $this->spice_level = $spice_level;
    }

    public static function GetSpicyDetails($con){
        $spicy_list = array();
        $query = "SELECT * FROM SpiceLevel";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
            $spice_level = $row['spice_level'];
            
            $spice_level_details = new SpiceLevel($spice_level);
            $spicy_list[] = $spice_level_details;
        }
        
        return $spicy_list;
    }
    
    public function GetSpiceLevelIdBySpiceLevelName($spice_level, $con){
        $query = "SELECT spice_level_Id FROM SpiceLevel WHERE spice_level = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $spice_level);
        $pstmt->execute();
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            return $row['spice_level_Id'];
        } else {
            return null;
        }
        
    }
    
    public function addSpicyDetails($con) {
        try {
            $query = "INSERT INTO SpiceLevel (spice_level) VALUES (?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->spice_level);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in SpiceLevel class addCurryDetails Method: " . $exc->getMessage());
        }
    }
    
    public function getSpicyDetailById($con, $id) {
        $query = "SELECT * FROM SpiceLevel WHERE spice_level_Id = ?";
        $stmt = $con->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new SpiceLevel($row['spice_level']);
        } else {
            return null;
        }
    }
    
    public function updateSpicyDetails($con, $id) {
        try {
            $query = "UPDATE SpiceLevel SET spice_level = ? WHERE spice_level_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->spice_level);
            $pstmt->bindValue(2, $id); 

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in SpiceLevel class updateCurryDetails Method: " . $exc->getMessage());
        }
    }
    
    public static function deleteSpicyDetails($con, $id) {
        try {
            $query = "DELETE FROM SpiceLevel WHERE spice_level_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in SpiceLevel class deleteCurryDetails Method :" . $exc->getMessage());
        }
    }

}
