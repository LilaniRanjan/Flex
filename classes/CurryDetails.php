<?php

namespace classes;

use PDO;

class CurryDetails {
    private $curry_name;
    private $Curry_price;

    function __construct($curry_name, $Curry_price) {
        $this->curry_name = $curry_name;
        $this->Curry_price = $Curry_price;
    }

    function getCurry_name() {
        return $this->curry_name;
    }

    function getCurry_price() {
        return $this->Curry_price;
    }

    function setCurry_name($curry_name) {
        $this->curry_name = $curry_name;
    }

    function setCurry_price($Curry_price) {
        $this->Curry_price = $Curry_price;
    }

    
    public static function GetCurryDetails($con) {
        $curry_list = array();
        $query = "SELECT * FROM Curry";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
            $curry_name = $row['Curry_name'];
            $Curry_price = $row['Curry_price'];

            $curry_details = new CurryDetails($curry_name, $Curry_price);
            $curry_list[] = $curry_details; 
        }

        return $curry_list;
    }

    public function GetCurryIdByCurryName($curry_name, $con) {
        $query = "SELECT Curry_Id FROM Curry WHERE Curry_name = ?";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $curry_name);
        $pstmt->execute();
        $row = $pstmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return $row['Curry_Id'];
        } else {
            return null;
        }
    }
    
    public function GetCurryPriceById($Curry_Id, $con) {
        try {
            $this->con = $con;
            $query = "SELECT Curry_price FROM Curry WHERE Curry_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $Curry_Id);
            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['Curry_price'];
            } else {
                return null;
            }
        } catch (PDOException $exc) {
            die("ERROR in RiceDetails class GetRiceIdByRiceName Method :" . $exc->getMessage());
        }
    }
    
    public function addCurryDetails($con) {
        try {
            $query = "INSERT INTO Curry (curry_name, Curry_price) VALUES (?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->curry_name);
            $pstmt->bindValue(2, $this->Curry_price);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in CurryDetails class addCurryDetails Method: " . $exc->getMessage());
        }
    }
    
    public function getCurryDetailById($con, $id) {
        try{
            $query = "SELECT * FROM Curry WHERE Curry_Id = ?";
            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new CurryDetails($row['Curry_name'], $row['Curry_price']);
            } else {
                return null;
            }
            
        }catch (PDOException $exc) {
            die("ERROR in CurryDetails class getCurryDetailById Method: " . $exc->getMessage());
        }
    }
    
    public function updateCurryDetails($con, $id) {
        try {
            $query = "UPDATE Curry SET curry_name = ?, Curry_price = ? WHERE Curry_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->curry_name);
            $pstmt->bindValue(2, $this->Curry_price);
            $pstmt->bindValue(3, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in CurryDetails class updateCurryDetails Method: " . $exc->getMessage());
        }
    }
    
    public static function deleteCurryDetails($con, $id) {
        try {
            $query = "DELETE FROM Curry WHERE Curry_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in CurryDetails class deleteCurryDetails Method :" . $exc->getMessage());
        }
    }

}
