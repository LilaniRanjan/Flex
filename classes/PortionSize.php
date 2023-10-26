<?php

namespace classes;

use PDO;

class PortionSize {
    private $portion_size_name;
    
    function __construct($portion_size_name) {
        $this->portion_size_name = $portion_size_name;
    }
    
    function getPortion_size_name() {
        return $this->portion_size_name;
    }

    function setPortion_size_name($portion_size_name) {
        $this->portion_size_name = $portion_size_name;
    }

    public static function GetPortionSizeDetails($con){
        try{
            $portion_details = array();
            $query = "SELECT * FROM PortionSize";
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
                $portion_size_name = $row['portion_size_name'];

                $portion_size_details = new PortionSize($portion_size_name);
                $portion_details[] = $portion_size_details;
            }

            return $portion_details;
        }catch (PDOException $exc) {
            die("ERROR in PortionSize class GetPortionSizeDetails Method: " . $exc->getMessage());
        }
        
    }
    
    public function getPortionIdByPortionName($portion_name, $con){
        try{
           $query = "SELECT portion_size_Id FROM PortionSize WHERE portion_size_name  = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $portion_name);
            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['portion_size_Id'];
            } else {
                return null;
            } 
        }catch (PDOException $exc) {
            die("ERROR in PortionSize class getPortionIdByPortionName Method: " . $exc->getMessage());
        }
        
    }
    
    public function addPortionDetails($con) {
        try {
            $query = "INSERT INTO PortionSize (portion_size_name) VALUES (?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->portion_size_name);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in PortionSize class addPortionDetails Method: " . $exc->getMessage());
        }
    }
    
    public function getPortionDetailById($con, $id) {
        try{
            $query = "SELECT * FROM PortionSize WHERE portion_size_Id = ?";
            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new PortionSize($row['portion_size_name']);
            } else {
                return null;
            }
        } catch (PDOException $exc) {
            die("ERROR in PortionSize class getPortionDetailById Method: " . $exc->getMessage());
        }
        
    }
    
    public function updatePortionDetails($con, $id) {
        try {
            $query = "UPDATE PortionSize SET portion_size_name = ? WHERE portion_size_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->portion_size_name);
            $pstmt->bindValue(2, $id); 

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in PortionSize class updatePortionDetails Method: " . $exc->getMessage());
        }
    }
    
    public static function deletePortionDetails($con, $id) {
        try {
            $query = "DELETE FROM PortionSize WHERE portion_size_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in PortionSize class deletePortionDetails Method :" . $exc->getMessage());
        }
    }

}
